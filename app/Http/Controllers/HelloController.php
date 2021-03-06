<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
/*
class HelloController extends Controller
{
    public function index() {
        return <<< EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラのindexアクションです。</p>
</body>
</html>
EOF;

    }
}
*/

/*
// ルートパラメータの利用
class HelloController extends Controller
{
    public function index($id = 'noname', $pass = 'unknown') {
        return <<< EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラのindexアクションです。</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
</body>
</html>        
EOF;
    }
}
*/

/*
// 複数アクション利用
global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
EOF;
$body = '</head></body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller{
    public function index() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Index') . $style . $body . tag('h1', 'Index')
                . tag('p', 'This is Index page.') . '<a href="/hello/other">goto other page</a>'
                . $end;
        
        return $html;
    }

    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style . $body . tag('h1', 'Other')
        . tag('p', 'This is Other page.') . $end;

        return $html;
    }
}

*/

/*
// HelloControllerをシングルアクション化
class HelloController extends Controller
{
    public function __invoke() 
    {
        return <<< EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Single Action</h1>
    <p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
EOF;

    }
}
*/

/*
// Request, Response
class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;
    }
}
*/

/*
// パラメータ
class HelloController extends Controller
{
    public function index($id = 'zero')
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです',
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
*/

/*
// クエリ文字列
class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $request->id
        ];

        return view('hello.index', $data);
    }
}
*/

/*
// Bladeテンプレート
class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです。',
        ];

        return view('hello.index', $data);
    }
}
*/

/*
//フォームの利用

class HelloController extends Controller
{
    public function index()
    {
        //$data = ['msg' => 'お名前を入力してください'];
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '山田はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachico@happy']
        ];
        return view('hello.index',['message' => 'Hello']);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        //$data = ['msg' => 'こんにちは、' . $msg . 'さん!'];
        $data = ['msg' => $msg];
        return view('hello.index',['message' => 'Hello']);
    }
}
*/

// ミドルウェアの利用
class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index');
    }
}

