@extends('_layouts.main')

@section('body')


<h1>Reliable, efficient delivery
  <small>Powered by Technology</small></h1>

<p class="lead">Our Artificial Intelligence powered tools use millions of project data points
  to ensure that your project is successful</p>

<section class="card-container">
  <div class="card-column">
    <article class="card card-theme-primary">
      <h2>Supervisor</h2>
      <p>Monitors activity to identify project roadblocks</p>
      <div class="card-icon"><img src="../resources/02/icon-supervisor.svg" alt="magnifying glass"/></div>
    </article>
  </div>

  <div class="card-column">
    <article class="card card-theme-secondary">
      <h2>Team Builder</h2>
      <p>Scans our talent network to create the optimal team for your project</p>
      <div class="card-icon"><img src="../resources/02/icon-team-builder.svg" alt="website with house"/></div>
    </article>
    <article class="card card-theme-orange">
      <h2>Karma</h2>
      <p>Regularly evaluates our talent to ensure quality</p>
      <div class="card-icon"><img src="../resources/02/icon-karma.svg" alt="lightbulb"/></div>
    </article>
  </div>

  <div class="card-column">
    <article class="card card-theme-blue">
      <h2>Calculator</h2>
      <p>Uses data from past projects to provide better delivery estimates</p>
      <div class="card-icon"><img src="../resources/02/icon-calculator.svg" alt="calculator"/></div>
    </article>
  </div>
</section>


@endsection

@section('head')
<title>Four card feature section</title>
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/proj02.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/02/favicon-32x32.png">
@endsection