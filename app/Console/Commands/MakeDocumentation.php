<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class MakeDocumentation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:documentation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate documentation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = factory(User::class)->make();
        $user->save();
        $user->attachRole('root');
        $token = \JWTAuth::fromUser($user);

        $process = new Process('php artisan api:generate ' .
            ' --routePrefix="v1" --header="Authorization: Bearer' . $token .
            '" --router="dingo" --force --output documentation --bindings="user,1"'
        );

        return $process->run(function ($type, $buffer) {
           echo $buffer;
        });
    }
}
