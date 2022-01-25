@extends('layouts.main')

@section('title,')

@section('content')
    <h3>名前:{{ $planet->name }}</h3>
    <h3>名前(英語):{{ $planet->en_name }}</h3>
    <h3>半径:{{ $planet->radius }}</h3>
    <h3>重量:{{ $planet->weight }}</h3>
    <a href="/planets">戻る</a>
@endsection