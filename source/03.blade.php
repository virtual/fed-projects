@extends('_layouts.main')

@section('body')


<header class="header">
<div class="menu-container">
  <a href="https://www.figma.com/file/cvDAyecKzPNSQrwO1Dov4c/URL-Api-Design"><img src="../resources/03/logo.svg" alt="Shortly" /></a>
  <nav>
<ul class="list-unstyled list-inline">
  <li><a href="#">Features</a></li>
  <li><a href="#">Pricing</a></li>
  <li><a href="#">Resources</a></li>
</ul>

  
<ul class="list-unstyled list-inline">
  <li><a href="#">Login</a></li>
  <li><a href="#">Sign Up</a></li>
</ul>
</nav>
</div>

<section class="hero-container">
  <h2>More than just shorter links</h2>

<p>Build your brand’s recognition and get detailed insights 
  on how your links are performing.</p>

<p><a href="#" class="btn btn-primary">Get Started</a></p>

<h2>Shorten a link here...</h2>

<a href="#" class="btn btn-primary">Shorten It!</a>
</section>


</header>

<div class="main-container">
<main class="main">


<h3>Advanced Statistics</h3>

Track how your links are performing across the web with our 
advanced statistics dashboard.

Brand Recognition

Boost your brand recognition with each click. Generic links don’t 
mean a thing. Branded links help instil confidence in your content.

Detailed Records

Gain insights into who is clicking your links. Knowing when and where 
people engage with your content helps inform better decisions.

Fully Customizable

Improve brand awareness and content discoverability through customizable 
links, supercharging audience engagement.
</main>
</div>
<div class="sub-footer-container">
<aside>
<a href="#" class="btn btn-primary">Boost your links today</a>

Get Started
</aside>
</div>
<footer class="footer">
Features
Link Shortening
Branded Links
Analytics

Resources

Blog
Developers
Support

Company

About
Our Team
Careers
Contact
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