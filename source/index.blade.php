@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1>Hello world!</h1>
    <p><a href="./01/">01</a></p>
</div>
@endsection

@section('head')
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/01/favicon-32x32.png">
@endsection