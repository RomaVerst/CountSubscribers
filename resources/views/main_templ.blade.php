@extends('layouts.index_layout')
@section('title')
    @parent{{ $title }}
@endsection

@section('content')
    <h1>{{ $h1 }}</h1>
    <p>
        {{ $content }}
    </p>
@endsection
@section('aside')
    @parent
    <a href="https://ok.ru/profile/514677397371">
        https://ok.ru/profile/514677397371
    </a>
@endsection