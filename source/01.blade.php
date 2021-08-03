@extends('_layouts.main')

@section('body')

<section class="card-container">
  <div class="container">
    <div class="row">
      <div class="card col-16">
        <h1>Join our community</h1>

        <p class="lead color-yellow">30-day, hassle-free money back guarantee</p>

        <p class="lead color-grey">Gain access to our full library of tutorials along with expert code reviews. 
        Perfect for any developers who are serious about honing their skills.</p>
        
      </div>
    </div>
    <div class="row">
      <div class="card col-8 theme-primary">
        <h2>Monthly Subscription</h2>

        <p class="lead"><span class="type-feature">&dollar;29</span> <span class="type-dimmed">per month</span></p>

        <p class="lead">Full access for less than &dollar;1 a day</p>

        <p class="mt-5"><a href="#" class="btn btn-green">Sign Up</a></p>
      </div>

      <div class="card col-8 theme-secondary">
        <h2>Why Us</h2>
        <ul class="list-unstyled">
        <li>Tutorials by industry experts</li>
        <li>Peer &amp; expert code review</li>
        <li>Coding exercises</li>
        <li>Access to our GitHub repos</li>
        <li>Community forum</li>
        <li>Flashcard decks</li>
        <li>New videos every week</li>
        </ul>
      </div>
    </div>
  </div>
</section>
 
@endsection

@section('head')
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/proj01.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/01/favicon-32x32.png">
@endsection
