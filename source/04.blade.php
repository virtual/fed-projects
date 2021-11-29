@extends('_layouts.dl-main')

@section('body')


<header class="header">
  <div class="container">
    <div class="menu-container">
      <div class="menu-logo">
        <h1><a class="logo" href="/"><img src="../resources/04/distantlife-logo.svg" height="28" width="140"
              alt="Distant Life" /></a></h1>
        <button aria-label="Menu" id="menubutton" aria-expanded="false" aria-controls="siteMenu">
          <span class="fal fa-bars"></span>
          <span class="sr-only">menu</span>
        </button>
      </div>
      <nav id="siteMenu" role="menu" aria-labelledby="menubutton">
        <ul class="list-unstyled list-inline">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">My Pets</a></li>
          <li><a href="#">Train</a></li>
          <li><a href="#">Explore</a></li>
        </ul>

        <ul class="list-unstyled list-inline">
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
    </div>
  </div>


</header>

<div class="main-container">
  <main class="main container py-5">


    
    <div class="theme-inversed">
      <p class="text-center my-0"><img style="height: 200px;" height="200" src="../resources/04/pets/pet-wolf.png" alt="wolf"/></p>
      <h2 class="text-center mt-0 h2">Join for free!</h2>
      <p class="lead text-center type-constrained-width">Distant Life combines virtual pet experience with interactive language learning and practice, making your learning fun and exciting.</p>
    </div>

    <section class="card-container">

      <div class="card">
        <div class="card-image">
          <span class="fal fa-narwhal"></span>
          <span class="sr-only">narwhal</span>
        </div>
        <h3>Grow your family of pets as you learn more!</h3>

        <p>The more lessons you complete, the more points you earn toward purchasing additional pets, account upgrades, and new lessons! </p>
      </div>


      <div class="card">
        <div class="card-image">
          <span class="fal fa-rocket-launch"></span>
          <span class="sr-only">rocket-launch</span>
        </div>
        <h3>Detailed Records</h3>

        <p>Seamlessly communicate seamless infrastructures rather than progressive potentialities. </p>
      </div>


      <div class="card">
        <div class="card-image">
          <span class="fal fa-star"></span>
          <span class="sr-only">star</span>
        </div>
        <h3>Fully Customizable</h3>

        <p>Assertively create sustainable platforms without adaptive intellectual capital. Continually.</p>
      </div>

    </section>

    <section class="my-4">

      <form class="mx-auto centered">
        
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" name="email" type="text" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" />
          </div>
          <div class="form-group">
            <label for="confirmation">Retype Password</label>
            <input id="confirmation" name="confirmation" type="password" />
          </div>
        
        <button type="submit">Sign Up</button>
      </form>
    </section>

  </main>

  

</div>

{{-- secondary pages --}}
<div class="layout-secondary">
  <div class="layout-secondary-main theme-inversed">
    <main>
      <nav class="breadcrumb" aria-label="breadcrumb">
        <ol>
          <li><a href="#">
            <span class="fal fa-home-alt"></span>
            <span class="sr-only">home</span>  
          </a><meta property="position" content="1"></li>
          <li><a class="active" aria-current="page" href="#">Training</a><meta property="position" content="2"></li>
        </ol>
      </nav>
      <p>things</p>
    </main>
  </div>
  <div class="layout-secondary-aside theme-inversed">
    <aside>
      <h3>Unnamed Pet</h3>
      <dl class="list-stats">
        <dt>
          <span class="fal fa-star"></span>
          <span class="sr-only">star</span></dt>
        <dd>10 words learned</dd>
      </dl>
      <dl class="list-stats">
        <dt>
          <span class="fal fa-coins"></span>
          <span class="sr-only">coins</span></dt>
        <dd>$13.00</dd>
      </dl>
  <h3>Latest Notifications:</h3>
      <ul>
    <li>Badge: Grocery Run</li>
  </ul>

    </aside>
  </div>
</div>

<div class="sub-footer-container theme-inversed">
  <aside class="container text-center py-3">
  <p class="h1 color-yellow">
    <span class="fal fa-cat-space"></span>
    <span class="sr-only">space cat</span>
  </p>
    <h2>Begin your language-learning journey today!</h2>
    <p><a href="#" class="btn btn-primary">Get Started</a></p>
  </aside>
</div>
<footer class="footer theme-inversed">
  <div class="container">
    <div class="footer-logo">
      <p>Made with &hearts; by <a href="https://satinflame.com">satinflame design</a></p>
    </div>
  </div>
</footer>

@endsection

@section('head')
<title>Distant Life</title>
<meta name="description" content="{{ $page->description }}">
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/proj04.css', 'assets/build') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" media="print"
  onload="this.media='all'" />
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" />
</noscript>
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/04/favicon.png">
<meta name="theme-color" content="#2acfcf">
<script src="https://kit.fontawesome.com/d22d49eaa0.js" crossorigin="anonymous"></script>
@endsection