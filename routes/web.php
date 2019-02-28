<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// laravel-debugbar 扩展使用案例
Route::get('/laravel_debugbar', function () {
    // 信息: 自定义添加调试信息
    $object = 'object';
    Debugbar::info($object);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    // 时间轴: 新增一个计时
    Debugbar::startMeasure('render','Time for rendering');
    sleep(1);
    Debugbar::stopMeasure('render');

    // 异常记录到调试栏
    try {
        throw new \Exception('foobar');
    } catch (\Exception $e) {
        Debugbar::addThrowable($e);
    }

    // 自定义注入 js, 先获取
    $renderer = Debugbar::getJavascriptRenderer();

    // 运行时开关
//    Debugbar::enable();
//    Debugbar::disable();

    return view('welcome');
});
