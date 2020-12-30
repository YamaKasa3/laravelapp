@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <ul>
    @each('components.item', $data, 'item')
    </ul>
    @component('components.message')
        @slot('msg_title')
        CAUTION
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent
    @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです。'])
@endsection

@section('footer')
copyright 2020
@endsection