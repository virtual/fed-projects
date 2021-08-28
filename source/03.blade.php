@extends('_layouts.main')

@section('body')


<header class="header">
  <div class="container">
    <div class="menu-container">
      <div class="menu-logo">
        <h1><a class="logo" href="https://www.figma.com/file/cvDAyecKzPNSQrwO1Dov4c/URL-Api-Design"><img src="../resources/03/logo.svg"
            alt="Shortly" /></a></h1>
        <button aria-label="Menu" id="menubutton" aria-expanded="false" aria-controls="siteMenu"><img src="../resources/03/icon-menu.svg"
          alt="Shortly" /></button>    
      </div>
      <nav id="siteMenu"
      role="menu"
      aria-labelledby="menubutton"
      aria-hidden="true">
        <ul class="list-unstyled list-inline">
          <li><a href="#">Features</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Resources</a></li>
        </ul>


        <ul class="list-unstyled list-inline">
          <li><a href="#">Login</a></li>
          <li class="mobile-padded-link"><a class="btn btn-primary" href="#">Sign Up</a></li>
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
  <div class="cta-form-background">
    <div class="container">
      <form id="submitURL" class="theme-secondary p-3 width-100">
        <div class="form-group">
        <input id="originalURL" type="text" 
        pattern="/^(https:|http:|www\.)\S*$/i"
        placeholder="Shorten a link here..." 
          required data-pristine-required-message="Link cannot be empty"
          data-pristine-pattern-message="URL should start with http: or https:" />
        </div>
        <button type="submit" class="btn btn-primary">Shorten It!</button>
      </form>
    </div>
  </div>

  <div class="container">
    <div id="ctaResults" class="cta-form-results d-none">
      <table id="ctaTable" class="table-responsive-stack">
        <thead><tr>
          <th>Original Link</th>  
          <th>Shortened Link</th>  
          <th>Action</th>  
        </tr></thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</section>
<div class="main-container">
  <main class="main container py-5">


    <h2 class="text-center mt-5 h2">Advanced Statistics</h2>

    <p class="lead type-dimmed text-center type-constrained-width">Track how your links are performing across the web with our
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
        <ul class="list-unstyled footer-link-list">
          <li><a href="#">Link Shortening</a></li>
          <li><a href="#">Branded Links</a></li>
          <li><a href="#">Analytics</a></li>
        </ul>
      </div>
      <div class="col-4">

        <h3>Resources</h3>
        <ul class="list-unstyled footer-link-list">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Developers</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col-4">

        <h3>Company</h3>
        <ul class="list-unstyled footer-link-list">
          <li><a href="#">About</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 social-block">
        <h3 class="sr-only">Social Media Links</h3>
        <ul class="mt-0 list-inline-block list-unstyled list-padded list-links">
          <li><a href="#"><img alt="facebook" src="../resources/03/icon-facebook.svg"></a></li>
          <li><a href="#"><img alt="twitter" src="../resources/03/icon-twitter.svg"></a></li>
          <li><a href="#"><img alt="pinterest" src="../resources/03/icon-pinterest.svg"></a></li>
          <li><a href="#"><img alt="instagram" src="../resources/03/icon-instagram.svg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

@endsection

@section('head')
<title>URL Shortening API</title>
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/proj03.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/03/favicon-32x32.png">
<meta name="theme-color" content="#2acfcf">
@endsection