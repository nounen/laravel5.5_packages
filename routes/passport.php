<?php

// laravel-passport
Route::get('/login', function() {
    dd('登陆信息失效，此处应是登陆页面');
})->name('login');


// 密码授权令牌: 可用 postman 模拟
Route::get('/passport/access_by_password', function() {
    $http = new GuzzleHttp\Client;

    $response = $http->post(url('oauth/token'), [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => '2',
            'client_secret' => '8K7w4uKaNzJcmtGO0dNKA0IS5I2K3AhjbEBy6ctU',
            'username' => 'admin@qq.com',
            'password' => 'admin',
            'scope' => '',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});

// 刷新令牌: 通过 postman 模拟更直观
Route::get('/passport/access_token_refresh', function() {
    $http = new GuzzleHttp\Client;

    $response = $http->post(url('oauth/token'), [
        'form_params' => [
            'grant_type' => 'refresh_token',
            'refresh_token' => 'the-refresh-token',
            'client_id' => '2',
            'client_secret' => '8K7w4uKaNzJcmtGO0dNKA0IS5I2K3AhjbEBy6ctU',
            'scope' => '',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});

// 密码授权令牌: 使用 token 验证用户信息
Route::get('/passport/access_by_password_user', function() {
    $user = \Illuminate\Support\Facades\Auth::user();

    if (!is_null($user)) {
        dd($user->toArray());
    } else {
        dd('无用户登陆信息');
    }
})->middleware('auth:api');


// 客户端凭据授权令牌: 可用 postman 模拟
// TODO: 虽然有拿到 access_token， 但是并没有用户信息。适合不需要验证登陆用户的业务？
Route::get('/passport/access_by_client', function() {
    $http = new GuzzleHttp\Client;

    $response = $http->post(url('oauth/token'), [
        'form_params' => [
            'grant_type' => 'client_credentials',
            'client_id' => '2',
            'client_secret' => '8K7w4uKaNzJcmtGO0dNKA0IS5I2K3AhjbEBy6ctU',
            'scope' => '*',
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});

Route::get('/passport/access_by_client_user', function() {
    $user = \Illuminate\Support\Facades\Auth::user();

    if (!is_null($user)) {
        dd($user->toArray());
    } else {
        dd('已授权，但无用户登陆信息: TODO: 适合需要验证但是不关心用户信息的业务？');
    }
})->middleware('client');


// 个人访问令牌： 创建 token
Route::get('/passport/access_by_personal', function() {
    $user = \App\User::where('name', 'admin')->first();

    $token = $user->createToken('token')->accessToken;

    dd($token);
});

// 个人访问令牌: 使用 token 验证用户信息
Route::get('/passport/access_by_personal_user', function() {
    $user = \Illuminate\Support\Facades\Auth::user();

    if (!is_null($user)) {
        dd($user->toArray());
    } else {
        dd('无用户登陆信息');
    }
})->middleware('auth:api');
