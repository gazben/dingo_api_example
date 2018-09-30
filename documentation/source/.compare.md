---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/documentation/collection.json)

<!-- END_INFO -->

#general
<!-- START_c6782d99ee8a3b8284a40dd5963b281d -->
## /api/status/ping

> Example request:

```bash
curl -X GET "http://localhost/api/status/ping" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/status/ping",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "",
    "data": null,
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/ping`


<!-- END_c6782d99ee8a3b8284a40dd5963b281d -->

<!-- START_bc42578cdf9b64994335abfd8eb8d0ce -->
## /api/status/version

> Example request:

```bash
curl -X GET "http://localhost/api/status/version" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/status/version",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "",
    "data": "dev",
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/version`


<!-- END_bc42578cdf9b64994335abfd8eb8d0ce -->

<!-- START_ab8fae5a5a7e9d9fd9719629c9897bc3 -->
## /api/weather/city/{city}/current

> Example request:

```bash
curl -X GET "http://localhost/api/weather/city/{city}/current" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/weather/city/{city}/current",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/weather/city/{city}/current`


<!-- END_ab8fae5a5a7e9d9fd9719629c9897bc3 -->

<!-- START_91c5f25025f0aa28f35b24adc93c7474 -->
## /api/weather/city/{city}/all

> Example request:

```bash
curl -X GET "http://localhost/api/weather/city/{city}/all" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/weather/city/{city}/all",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/weather/city/{city}/all`


<!-- END_91c5f25025f0aa28f35b24adc93c7474 -->

<!-- START_511eeadfce956cbeea74ce3763392dcd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "Elijah Franecki",
            "email": "fjones@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 2,
            "name": "Mr. Fabian Kreiger",
            "email": "tanya.goldner@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 3,
            "name": "Delmer Prohaska",
            "email": "jessica.macejkovic@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 4,
            "name": "Katlynn D'Amore",
            "email": "scottie50@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 5,
            "name": "Ricardo Greenfelder",
            "email": "arvilla.kub@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 6,
            "name": "Jamie Barton",
            "email": "barton49@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 7,
            "name": "Domenico Schinner DVM",
            "email": "lesly31@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 8,
            "name": "Jacinthe Ferry",
            "email": "roosevelt.johnston@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 9,
            "name": "Dr. Freeman Labadie",
            "email": "earline88@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 10,
            "name": "Hermann Langosh",
            "email": "josefina73@example.org",
            "roles": {
                "data": []
            }
        }
    ],
    "meta": {
        "pagination": {
            "total": 53,
            "count": 10,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 6,
            "links": {
                "next": "http:\/\/localhost\/api\/users?page=2"
            },
            "from": 1
        }
    }
}
```

### HTTP Request
`GET /api/users`


<!-- END_511eeadfce956cbeea74ce3763392dcd -->

<!-- START_105ec9a65e7bc0a1aeccf3057b069abb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/users" \
-H "Accept: application/json" \
    -d "name"="dolor" \
    -d "password"="dolor" \
    -d "email"="aufderhar.evie@example.com" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "POST",
    "data": {
        "name": "dolor",
        "password": "dolor",
        "email": "aufderhar.evie@example.com"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST /api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Maximum: `191`
    password | string |  required  | Maximum: `191`
    email | email |  required  | Maximum: `191`

<!-- END_105ec9a65e7bc0a1aeccf3057b069abb -->

<!-- START_185d8dd11617f7199ad63b2137aa37fb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 1,
        "name": "Elijah Franecki",
        "email": "fjones@example.net",
        "roles": {
            "data": []
        }
    }
}
```

### HTTP Request
`GET /api/users/{user}`


<!-- END_185d8dd11617f7199ad63b2137aa37fb -->

<!-- START_f274972870e4b957c00965c5d2c7e7bc -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" \
-H "Accept: application/json" \
    -d "name"="ex" \
    -d "password"="ex" \
    -d "email"="maiya.koelpin@example.net" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "PUT",
    "data": {
        "name": "ex",
        "password": "ex",
        "email": "maiya.koelpin@example.net"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT /api/users/{user}`

`PATCH /api/users/{user}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Maximum: `191`
    password | string |  optional  | Maximum: `191`
    email | email |  required  | Maximum: `191`

<!-- END_f274972870e4b957c00965c5d2c7e7bc -->

<!-- START_ccafd5a881df2ccf542ad8b0709f6fb6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE /api/users/{user}`


<!-- END_ccafd5a881df2ccf542ad8b0709f6fb6 -->

<!-- START_7ba029714012cd9c08cc50ae4dee9d7a -->
## /api/auth/login

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/auth/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST /api/auth/login`


<!-- END_7ba029714012cd9c08cc50ae4dee9d7a -->

<!-- START_c5ab156ea210fb095d54ab41f7b95275 -->
## /api/auth/refresh

> Example request:

```bash
curl -X PATCH "http://localhost/api/auth/refresh" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/auth/refresh",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH /api/auth/refresh`


<!-- END_c5ab156ea210fb095d54ab41f7b95275 -->

<!-- START_2dd587e2c4901bceb60e22e36836289f -->
## /api/auth/invalidate

> Example request:

```bash
curl -X DELETE "http://localhost/api/auth/invalidate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/auth/invalidate",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE /api/auth/invalidate`


<!-- END_2dd587e2c4901bceb60e22e36836289f -->

<!-- START_c687e1b0525abc7141677bd20ed6c30a -->
## /api/auth/user

> Example request:

```bash
curl -X GET "http://localhost/api/auth/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/auth/user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "id": 53,
        "name": "Rosemarie Daugherty",
        "email": "bashirian.alisha@example.net",
        "roles": {
            "data": [
                {
                    "name": "root"
                }
            ]
        }
    }
}
```

### HTTP Request
`GET /api/auth/user`


<!-- END_c687e1b0525abc7141677bd20ed6c30a -->

