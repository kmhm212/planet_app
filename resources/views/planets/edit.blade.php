@extends('layouts.main')

@section('title,惑星情報更新')

@section('content')
    <h1>惑星情報更新</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('planets.update', $planet) }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">名前
                <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}">
            </label>
        </p>
        <p>
            <label for="en_name">名前(英語)
                <input type="text" name="en_name" id="en_name" value="{{ old('en_name', $planet->en_name) }}">
            </label>
        </p>
        <p>
            <label for="radius">半径
                <input type="number" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}">
            </label>
        </p>
        <p>
            <label for="weight">重量
                <input type="number" name="weight" id="weight" value="{{ old('weight', $planet->weight) }}">
            </label>
        </p>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
@endsection