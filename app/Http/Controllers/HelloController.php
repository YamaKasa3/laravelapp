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

