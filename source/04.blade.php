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
          <li class="menu-user"><a href="#">Virtual
              <img alt="" src="https://www.satinflame.com/img/icons/apple-touch-icon.png" width="34" height="34"
                class="rounded-circle">
            </a></li>
          <li class="has-dropdown"><a class="hide-md" href="#" aria-haspopup="true">
              <span class="fal fa-cog"></span>
              <span class="sr-only">settings</span>
            </a>
            <ul class="dropdown" aria-label="submenu">
              <li><a href="#">Settings</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>


</header>

<div class="main-container">
  <main class="main container py-5">



    <div class="theme-inversed">
      <p class="text-center my-0"><img style="height: 200px;" height="200" src="../resources/04/pets/pet-wolf.png"
          alt="wolf" /></p>
      <h2 class="text-center mt-0 h2">Join for free!</h2>
      <p class="lead text-center type-constrained-width">Distant Life combines virtual pet experience with interactive
        language learning and practice, making your learning fun and exciting.</p>
    </div>

    <section class="card-container">

      <div class="card">
        <div class="card-image">
          <span class="fal fa-narwhal"></span>
          <span class="sr-only">narwhal</span>
        </div>
        <h3>Grow your family of pets as you learn more!</h3>

        <p>The more lessons you complete, the more points you earn toward purchasing additional pets, account upgrades,
          and new lessons! </p>
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
        <fieldset>
          <legend>Upload words via CSV</legend>
          <input name="word_set_id" type="hidden" value="val" />
          <div class="form-group">
            <label for="setname">Set Name</label>
            <input type="file" name="file">
          </div>

        </fieldset>

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
            </a>
            <meta property="position" content="1">
          </li>
          <li><a class="active" aria-current="page" href="#">Training</a>
            <meta property="position" content="2">
          </li>
        </ol>
      </nav>
      <div class="secondary-main">

        <header>
          <div class="main-options">
            <h1>??????????????</h1>
            <div class="options">
              <button class="btn-option">
                <span class="fal fa-volume"></span>
                <span class="sr-only">play audio</span>
              </button>
            </div>
          </div>
        </header>

        <figure class="learn-word">
          <div class="figure-img"><img src="../resources/04/words/tomato.png" alt="tomato"></div>
          <figcaption class="main-options">
            <p>Tomato</p>
            <p>1/15</p>
          </figcaption>
        </figure>

        <form class="form-quiz-container">
          <div class="form-quiz">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
            <label class="btn btn-radio" for="option1">Checked</label>

            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
            <label class="btn btn-radio btn-success" for="option2">Success</label>

            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
            <label class="btn btn-radio btn-error" for="option3">Error</label>

            <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
            <label class="btn btn-radio" for="option4">Radio</label>
          </div>
          <button type="submit" class="btn-red">Skip</button>
        </form>
      </div>

    </main>
    {{-- training recap --}}
    <main>
      <nav class="breadcrumb" aria-label="breadcrumb">
        <ol>
          <li><a href="#">
              <span class="fal fa-home-alt"></span>
              <span class="sr-only">home</span>
            </a>
            <meta property="position" content="1">
          </li>
          <li><a class="active" aria-current="page" href="#">Learn it</a>
            <meta property="position" content="2">
          </li>
        </ol>
      </nav>
      <div class="secondary-main">

        <header>
          <h1>Lesson complete</h1>
          <p>13/15 correct</p>
        </header>

        <table class="table-responsive-stack">
          <thead>
            <tr>
              <th class="table-icon"><span class="fal fa-star"></span>
                <span class="sr-only">star</span>
              </th>
              <th>English</th>
              <th dir="rtl">??????????</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-icon">
                <span class="fal fa-check"></span>
                <span class="sr-only">correct</span>
              </td>
              <td>Text</td>
              <td>Text</td>
            </tr>
            <tr>
              <td class="table-icon">
                <span class="fal fa-check"></span>
                <span class="sr-only">correct</span>
              </td>
              <td>Text</td>
              <td>Text</td>
            </tr>
            <tr>
              <td class="table-icon">
                <span class="fal fa-times"></span>
                <span class="sr-only">incorrect</span>
              </td>
              <td>Text</td>
              <td>Text</td>
            </tr>
            <tr>
              <td class="table-icon">
                <span class="fal fa-check"></span>
                <span class="sr-only">correct</span>
              </td>
              <td>Text</td>
              <td>Text</td>
            </tr>
          </tbody>
        </table>

        <p>You earned:</p>
        <dl class="list-stats">
          <dt>
            <span class="fal fa-star"></span>
            <span class="sr-only">star</span>
          </dt>
          <dd>10 words learned</dd>
        </dl>
        <dl class="list-stats">
          <dt>
            <span class="fal fa-coins"></span>
            <span class="sr-only">coins</span>
          </dt>
          <dd>$13.00</dd>
        </dl>
        <dl class="list-stats">
          <dt>
            <span class="fal fa-badge"></span>
            <span class="sr-only">badge</span>
          </dt>
          <dd>Badge: Grocery Run</dd>
        </dl>
        <p class="text-center">
          <a href="#" class="btn">Continue</a>
        </p>
    </main>
    {{-- training list --}}
    <main>
      <nav class="breadcrumb" aria-label="breadcrumb">
        <ol>
          <li><a href="#">
              <span class="fal fa-home-alt"></span>
              <span class="sr-only">home</span>
            </a>
            <meta property="position" content="1">
          </li>
          <li><a class="active" aria-current="page" href="#">Learn it</a>
            <meta property="position" content="2">
          </li>
        </ol>
      </nav>
      <div class="secondary-main">

        <header>
          <h1>Training</h1>
        </header>

        <table class="table-responsive-stack">
          <thead>
            <tr>
              <th class="table-icon">
                <span class="fal fa-check-circle"></span>
                <span class="sr-only">complete</span>
              </th>
              <th>Word Set</th>
              <th>Learned</th>
              <th><span class="sr-only">Icon</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-icon">
                <span class="fal fa-check-circle"></span>
                <span class="sr-only">complete</span>
              </td>
              <td><a href="#">Grocery Run</a></td>
              <td>15/15</td>
              <td><img src="../resources/04/sets/004-vegetables2.png" alt="vegetables"></td>
            </tr>
            <tr>
              <td class="table-icon">
                <span class="fal fa-circle"></span>
                <span class="sr-only">incomplete</span>
              </td>
              <td><a href="#">Travel Time</a></td>
              <td>0/15</td>
              <td><img src="../resources/04/sets/016-pickup1.png" alt="pickup"></td>
            </tr>
          </tbody>
        </table>

    </main>

    {{-- pet list --}}
    <main>
      <nav class="breadcrumb" aria-label="breadcrumb">
        <ol>
          <li><a href="#">
              <span class="fal fa-home-alt"></span>
              <span class="sr-only">home</span>
            </a>
            <meta property="position" content="1">
          </li>
          <li><a class="active" aria-current="page" href="#">My Pets</a>
            <meta property="position" content="2">
          </li>
        </ol>
      </nav>
      <div class="secondary-main">

        <header>
          <h1>My Pets</h1>
        </header>



        <div class="col-list row">

          <div class="col-12">
            <img width="200" height="200" src="../resources/04/pets/pet-wolf.png" alt="wolf" />
            <h3>Unnamed Pet <span class="badge">Active Pet</span> </h3>
            <p>Wolf <small>(#10)</small></p>
            <p class="text-small-caps mb-0">Level 2</p>
            <div class="progressbar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
              <span class="filled" style="width: 20%;"></span>
              <span class="sr-only">20%</span>
            </div>

            <ul class="element-options">
              <li class="has-dropdown"><button class="btn-secondary" aria-haspopup="true">
                Options
              </button>
                <ul class="dropdown" aria-label="submenu">
                  <li><a href="#">Make Active Pet</a></li>
                  <li><a class="disabled" href="#">Rename</a></li>
                  <li><a href="#">Abandon</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="col-12">
            <img width="200" height="200" src="../resources/04/pets/pet-wolf.png" alt="wolf" />
            <h3>Unnamed Pet <span class="badge">Active Pet</span> </h3>
            <p>Wolf <small>(#10)</small></p>
            <p class="text-small-caps mb-0">Level 2</p>
            <div class="progressbar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
              <span class="filled" style="width: 20%;"></span>
              <span class="sr-only">20%</span>
            </div>

            <ul class="element-options">
              <li class="has-dropdown"><button class="btn-secondary" aria-haspopup="true">
                Options
              </button>
                <ul class="dropdown" aria-label="submenu">
                  <li><a href="#">Make Active Pet</a></li>
                  <li><a class="disabled" href="#">Rename</a></li>
                  <li><a href="#">Abandon</a></li>
                </ul>
              </li>
            </ul>
          </div>
          
        </div>


    </main>
  </div>
  <div class="layout-secondary-aside theme-inversed">
    <aside>
      <p class="text-center my-0 pet-box pet-hidden">
        <img width="200" height="200" src="../resources/04/pets/pet-wolf.png" alt="wolf" />
      </p>
      <h3>Unnamed Pet <span class="badge">Active Pet</span> </h3>
      <p class="text-small-caps mb-0">Level 2</p>
      <div class="progressbar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
        <span class="filled" style="width: 20%;"></span>
        <span class="sr-only">20%</span>
      </div>

      <dl class="list-stats">
        <dt>
          <span class="fal fa-star"></span>
          <span class="sr-only">star</span>
        </dt>
        <dd>10 words learned</dd>
      </dl>
      <dl class="list-stats">
        <dt>
          <span class="fal fa-coins"></span>
          <span class="sr-only">coins</span>
        </dt>
        <dd>$13.00</dd>
      </dl>
      <h3>Latest Notifications:</h3>
      <ul>
        <li>Badge: Grocery Run</li>
      </ul>

    </aside>
  </div>
</div>

<div class="sub-footer-container theme-inversed d-none">
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
<link rel="preload" as="style"
  href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Noto+Sans+Hebrew:wght@400;700&display=swap" />
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Noto+Sans+Hebrew:wght@400;700&display=swap"
  media="print" onload="this.media='all'" />
<noscript>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Noto+Sans+Hebrew:wght@400;700&display=swap" />
</noscript>
<link rel="icon" type="image/png" href="{{ $page->baseUrl }}/resources/04/favicon.png">
<meta name="theme-color" content="#2acfcf">
<script src="https://kit.fontawesome.com/d22d49eaa0.js" crossorigin="anonymous"></script>
@endsection