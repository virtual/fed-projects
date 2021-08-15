@extends('_layouts.main')

@section('body')


<header class="header">
  <div class="container">
    <div class="menu-container">
      <a href="https://www.figma.com/file/cvDAyecKzPNSQrwO1Dov4c/URL-Api-Design"><img src="../resources/03/logo.svg"
          alt="Shortly" /></a>
      <nav>
        <ul class="list-unstyled list-inline">
          <li><a href="#">Features</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Resources</a></li>
        </ul>


        <ul class="list-unstyled list-inline">
          <li><a href="#">Login</a></li>
          <li><a class="btn btn-primary" href="#">Sign Up</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="hero-container hero-bg-right"
    style="background-image: url('../resources/03/illustration-working.svg')">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <h2 class="hero-title">More than just shorter links</h2>

          <p class="lead hero-description">Build your brand’s recognition and get detailed insights
            on how your links are performing.</p>

          <p><a href="#" class="btn btn-primary">Get Started</a></p>
        </div>
      </div>

    </div>
  </section>


</header>
<section class="cta-form">
  <div class="container">
    <form class="theme-secondary p-3 width-100">
      <input type="text" placeholder="Shorten a link here..." />
      <button type="submit" class="btn btn-primary">Shorten It!</button>
    </form>
  </div>
</section>
<div class="main-container">
  <main class="main container py-5">


    <h2 class="text-center mt-4 h2">Advanced Statistics</h2>

    <p class="text-center">Track how your links are performing across the web with our
      advanced statistics dashboard.</p>

    <section class="card-container">

      <div class="card">
        <div class="card-image">
          <img src="../resources/03/icon-brand-recognition.svg" alt="" />
        </div>
        <h3>Brand Recognition</h3>

        <p>Boost your brand recognition with each click. Generic links don’t
          mean a thing. Branded links help instil confidence in your content.</p>
      </div>


      <div class="card">
        <div class="card-image">
          <img src="../resources/03/icon-detailed-records.svg" alt="" />
        </div>
        <h3>Detailed Records</h3>

        <p>Gain insights into who is clicking your links. Knowing when and where
          people engage with your content helps inform better decisions.</p>
      </div>


      <div class="card">
        <div class="card-image">
          <img src="../resources/03/icon-fully-customizable.svg" alt="" />
        </div>
        <h3>Fully Customizable</h3>

        <p>Improve brand awareness and content discoverability through customizable
          links, supercharging audience engagement.</p>
      </div>

    </section>

  </main>
</div>
<div class="sub-footer-container theme-inversed theme-secondary">
  <aside class="container text-center py-3">
    <h2>Boost your links today</h2>
    <p><a href="#" class="btn btn-primary">Get Started</a></p>
  </aside>
</div>
<footer class="footer theme-inversed">
  <div class="container">

    <div class="row">
      <div class="col-6">
        <div class="footer-logo"><a href="https://www.figma.com/file/cvDAyecKzPNSQrwO1Dov4c/URL-Api-Design"><img
              src="../resources/03/logo.svg" alt="Shortly" /></a></div>
      </div>
      <div class="col-4">
        <h3>Features</h3>
        <ul class="list-unstyled">
          <li><a href="#">Link Shortening</a></li>
          <li><a href="#">Branded Links</a></li>
          <li><a href="#">Analytics</a></li>
        </ul>
      </div>
      <div class="col-4">

        <h3>Resources</h3>
        <ul class="list-unstyled">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Developers</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col-4">

        <h3>Company</h3>
        <ul class="list-unstyled">
          <li><a href="#">About</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-6">

        social
      </div>
    </div>
  </div>
</footer>

@endsection

@section('head')
<title>URL Shortening Api</title>
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/proj03.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/03/favicon-32x32.png">
@endsection