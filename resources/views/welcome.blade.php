@extends('layout.app')
@section('title', 'Главная страница')
@section('content')
    @include('partials.header')
    <h1 class="text-4xl font-bold mt-10 px-4">Последние статьи</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach ($posts as $post)
            @include('posts.partials.item', ['post' => $post])
        @endforeach
    </div>
@endsection
