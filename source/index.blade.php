@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1>Front-end projects</h1>
    <p>
      <ul class="list-unstyled list-inline">
        <li><a href="./01/">01</a></li>
        <li><a href="./02/">02</a></li>
        <li><a href="./03/">03</a></li>
      </ul>
    </p>
</div>
@endsection

@section('head')
<title>{{ $page->title }}</title>
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/01/favicon-32x32.png">
@endsection