<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Transformers\UserTransformer;
use App\Services\UserService;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    protected $userService;
    protected $authService;

    public function __construct(UserService $userService, JWTAuth $authService)
    {
        $this->userService = $userService;
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        $token = $this->authService->attempt(
            $request->only(['email', 'password'])
        );

        if(!$token) {
            $this->response->errorUnauthorized();
        }

        return $this->success([
            'token' => $token
        ]);
    }

    public function refreshToken()
    {
        try {
            $token = $this->authService->parseToken()->refresh();
        } catch (JWTException $exception) {
            $this->response->errorUnauthorized();
        }

        return $this->success([
            'token' => $token
        ]);
    }

    public function invalidate()
    {
        $token = $this->authService->parseToken();
        $token->invalidate();

        return $this->success();
    }

    public function getUser(Request $request)
    {
        return $this->response->item($request->user(), new UserTransformer());
    }
}
