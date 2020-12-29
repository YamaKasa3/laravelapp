{{--
<!-- <html>
<head>
    <title>Hello/Index</title>
    <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size:100px; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <!-- @if ($msg != '')
    <p>{{ $msg }}</p>
    @else
    <p>何か書いてください。</p>
    @endif -->
    @isset ($msg)
    <p>こんにちは、{{ $msg }} さん。</p>
    @else
    <p>何か書いてください。</p>
    @endisset
    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html> -->
--}}

@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @paraent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2020
@endsection