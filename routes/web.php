<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/*
Route::get('hello', function() {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/

/*
// ヒアドキュメント
$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
<body>
    <h1>Hello</h1>
    <p>This is sample page.</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

Route::get('hello', function () use ($html) {
    return $html;
});
*/

/*
// パラメータの利用
Route::get('hello/{msg?}', function ($msg = 'no message.') {
    $html = <<< EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body { font-size:16px; color:#999; }
    h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
    </style>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </html>
EOF;

    return $html;

});
*/

Route::get('hello', 'HelloController@index');

