<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
   @extends('layouts.style')
@section('title', "| Edit caption")

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution-slider/carousel-gallery/assets/css/style.css') }}">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.bm-classic.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  </head>

  <body>
    <main>

      <!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-md-3 g-hidden-md-down">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                   <div><img src="/svg/PetagramLogo.svg" style="height: 20px;border-right: 1px solid #333" class="pr-3"></div>
                   <div class="pl-3" style="padding-top: 2px;">Petagram</div>
                </a>
              </div>
              <!-- End Logo -->

              <!-- Search Form -->
              <div class="col-6 col-md-5">
                <form class="input-group rounded" method="get" action="{{ route('search') }}">
                  
                  <input class="form-control g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="text" name="query" id="query" placeholder="Search the entire site" value="{{ request()->input('query') }}">
                  <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">
                      <span class="g-hidden-md-down">Search</span>
                      <i class="g-hidden-lg-up fa fa-search"></i>
                    </button>
                  </span>
                </form>
              </div>
              <!-- End Search Form -->

              <!-- Language -->
              <div class="col-4 col-lg-2 g-pos-rel g-px-15 ml-auto" >
                <a id="languages-dropdown-invoker" class="g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!"
                   aria-controls="languages-dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-dropdown-event="hover"
                   data-dropdown-target="#languages-dropdown"
                   data-dropdown-type="css-animation"
                   data-dropdown-duration="300"
                   data-dropdown-hide-on-scroll="false"
                   data-dropdown-animation-in="fadeIn"
                   data-dropdown-animation-out="fadeOut">
                  <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                    <defs>
                      <clipPath id="a">
                        <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                      </clipPath>
                    </defs>
                    <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                      <g stroke-width="1pt">
                        <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                        <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                        <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                        <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                      </g>
                    </g>
                  </svg>
                  <span>English</span> <i class="g-hidden-sm-down fa fa-angle-down g-ml-7"></i>
                </a>

                <ul id="languages-dropdown" class="list-unstyled g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-py-5 g-mt-32"
                    aria-labelledby="languages-dropdown-invoker">
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <defs>
                          <clipPath id="a">
                            <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                          </clipPath>
                        </defs>
                        <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                          <g stroke-width="1pt">
                            <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                            <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                            <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                            <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                          </g>
                        </g>
                      </svg>
                      English
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <g stroke-width="1pt" fill-rule="evenodd">
                          <path fill="#fff" d="M0 0h640v480H0z"/>
                          <path fill="#00267f" d="M0 0h213.33v480H0z"/>
                          <path fill="#f31830" d="M426.67 0H640v480H426.67z"/>
                        </g>
                      </svg>
                      Spanish
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" stroke-width="1pt">
                          <path fill="#fff" d="M0 0h640v480H0z"/>
                          <path fill="#0039a6" d="M0 160.003h640V480H0z"/>
                          <path fill="#d52b1e" d="M0 319.997h640V480H0z"/>
                        </g>
                      </svg>
                      Russian
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <path fill="#ffce00" d="M0 320h640v160.002H0z"/>
                        <path d="M0 0h640v160H0z"/>
                        <path fill="#d00" d="M0 160h640v160H0z"/>
                      </svg>
                      German
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Language -->

              <!-- Account -->
              <div class="col-1">
                <a id="account-dropdown-invoker" class="media align-items-center float-right g-text-underline--none--hover" href="#!"
                   aria-controls="account-dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-dropdown-event="hover"
                   data-dropdown-target="#account-dropdown"
                   data-dropdown-type="css-animation"
                   data-dropdown-duration="300"
                   data-dropdown-hide-on-scroll="false"
                   data-dropdown-animation-in="fadeIn"
                   data-dropdown-animation-out="fadeOut">
                  
                  <div class="d-flex g-width-30 g-height-30 mr-2">

                    <img class="img-fluid rounded-circle" src="/storage/{{ Auth::user()->profile->image }}" alt="Image Description">
                    
                  </div>
                  @guest
                  @if (Route::has('register'))
                  New guest
                  @endif
                  @else
                  <div class="media-body">
                    <span class="d-block g-hidden-sm-down g-color-main g-font-weight-600 g-font-size-13">{{ Auth::user()->username }}</span>
                  </div>
                  @endguest
                </a>



               

                <ul id="account-dropdown" class="list-unstyled text-right g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-right-0 g-py-5 g-mt-57"
                    aria-labelledby="account-dropdown-invoker">
                        <!-- Authentication Links -->
                        @guest
                            <li >
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           <li>
                            <!--    <a id="navbarDropdown" class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i style="color: #191919" class="far fa-user-circle"></i>
                                    <span style="color: #191919">{{ Auth::user()->username }}</span> <span class="caret"></span>
                                </a> -->
                               

                                
                                     <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="/profile/{{ Auth::user()->id }}">
                                     
                                        {{ Auth::user()->username }}'s{{ __(' profile') }}

                                    </a>
                                     <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('tags.index') }}">
                                     
                                        {{ __('Tags') }}

                                    </a>
                                    <hr style="margin-top: 10px;margin-bottom: 10px">
                                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-door-open" style="font-size: 16px;padding: 0 3px"></i>
                                        {{ __('Logout') }}
                                    </a>

                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
              </div>
              <!-- End Account -->
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" style="display: none;">
          <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
              <!-- Logo -->
              <a class="navbar-brand g-hidden-lg-up" href="bm-classic-home-page-1.html">
                <img src="assets/img/logo.png" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                <ul class="navbar-nav g-font-weight-600">
                  <!-- Home - Submenu -->
                  <li class="nav-item hs-has-sub-menu g-mr-10--lg g-mr-20--xl">
                    <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu--home">
                      Home
                    </a>

                    <!-- Submenu -->
                    <ul id="nav-submenu--home" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2 g-mt-17"
                        aria-labelledby="nav-link--home">
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-1.html">Home Default</a>
                      </li>
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-2.html">Home Option 2
                          <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                        </a>
                      </li>
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-3.html">Home Option 3
                          <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                        </a>
                      </li>
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-4.html">Home Option 4
                          <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                        </a>
                      </li>
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-home-page-5.html">Home Option 5
                          <span class="float-right u-label g-rounded-3 g-font-size-10 g-bg-lightred g-pos-rel g-top-minus-1 g-py-3 g-ml-5">New</span>
                        </a>
                      </li>
                    </ul>
                    <!-- End Submenu -->
                  </li>
                  <!-- End Home - Submenu -->

                  <!-- Pages - Submenu -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu--pages">
                      Pages
                    </a>

                    <!-- Submenu -->
                    <ul id="nav-submenu--pages" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2 g-mt-17"
                        aria-labelledby="nav-link--pages">
                      <li class="dropdown-item g-bg-secondary--hover">
                        <a class="nav-link g-color-secondary-dark-v1" href="bm-classic-single-1.html">Single Page</a>
                      </li>
                    </ul>
                    <!-- End Submenu -->
                  </li>
                  <!-- End Pages - Submenu -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-1" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">World
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-1">
                      <div class="row">
                        <div class="col-lg-2">
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-5">
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">8 health benefits and drawbacks of coffee</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 30, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 12
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">5 Best cofee places with free WiFi in Victoria, BC</a>
                              </h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 18, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 56
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Top 7 Luxury places to visit around Victoria, BC</a>
                              </h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 11, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 46
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                        </div>
                        <div class="col-lg-5">
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                              </h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 07, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 24
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6"><a class="g-color-main" href="#!">10 Most beautiful beaches</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 20, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 18
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 16, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 31
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-5" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Sport
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-primary g-left-15 g-right-15 g-px-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-5">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="list-inline text-center mb-0">
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Transfer News</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Premier League</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Rugby</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Basketball</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Tennis</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">UFC</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Boxing</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">F1</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Racing</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Cricket</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">More</a>
                            </li>
                            <li class="list-inline-item">
                              <a class="d-inline-block g-color-white-opacity-0_8 g-color-white--hover g-px-10 g-py-15" href="#!">Fantasy Football</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-3" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Fashion
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-3">
                      <div class="row">
                        <div class="col-lg-4">
                          <article>
                            <figure class="g-pos-rel">
                              <img class="img-fluid w-100 g-mb-20" src="../../../assets/img-temp/900x600/img7.jpg" alt="Image Description">
                            </figure>
                            <h3 class="h4 g-mb-10"><a class="g-color-gray-dark-v2" href="#!">Love the mother nature</a>
                            </h3>
                            <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                              <li class="list-inline-item">
                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">Kathy Reyes</a>
                              </li>
                              <li class="list-inline-item">/</li>
                              <li class="list-inline-item">July 20, 2016</li>
                              <li class="list-inline-item">/</li>
                              <li class="list-inline-item">
                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                  <i class="fa fa-comments-o"></i> 18
                                </a>
                              </li>
                            </ul>
                          </article>
                        </div>
                        <div class="col-lg-4">
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                              </h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 07, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 24
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6"><a class="g-color-main" href="#!">10 Most beautiful beaches</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 20, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 18
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 16, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 31
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                        </div>
                        <div class="col-lg-4">
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">8 health benefits and drawbacks of coffee</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 30, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 12
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Stylish things to do, see and buy this week</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 16, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 31
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>

                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="#!"><img class="g-width-120 g-height-70" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                              </h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">July 07, 2016</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-comments-o"></i> 24
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-4" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Hi-Tech
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-4">
                      <div class="row">
                        <div class="col-lg-4">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Fashion</a>
                          </span>
                            <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera"></i>
                          </span>
                            <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                              <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 26, 2016
                              </small>
                              <h3 class="h4 g-font-weight-600 g-mt-5">
                                <a class="g-color-white g-color-white--hover" href="#!">Be ready, fashion of the year is coming this year</a>
                              </h3>
                            </header>
                          </article>
                        </div>
                        <div class="col-lg-4">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Beaches</a>
                          </span>
                            <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera"></i>
                          </span>
                            <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                              <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 15, 2016
                              </small>
                              <h3 class="h4 g-font-weight-600 g-mt-5">
                                <a class="g-color-white g-color-white--hover" href="#!">Must be visited places in the USA - Florida Beaches</a>
                              </h3>
                            </header>
                          </article>
                        </div>
                        <div class="col-lg-4">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">Food</a>
                          </span>
                            <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camera g-left-2"></i>
                          </span>
                            <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                              <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 8, 2016
                              </small>
                              <h3 class="h4 g-font-weight-600 g-mt-5">
                                <a class="g-color-white g-color-white--hover" href="#!">Why your next glass of juice will cost you more</a>
                              </h3>
                            </header>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-5" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Archive
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-5">
                      <div class="row">
                        <div class="col-lg-3">
                          <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <h4 class="h5 text-uppercase g-font-weight-600">Title goes here</h4>
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">World</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Economy</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Sport</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Fashion</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Health</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="#!">Travel</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-6" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Style
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-6">
                      <div class="row">
                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img1.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 06, 2016</a>
                          </span>
                            <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                              <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                <li class="list-inline-item">
                                  <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 152
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 17
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 35
                                </li>
                              </ul>
                              <h3 class="h5 g-font-weight-300 g-mb-0">
                                <a class="g-color-white g-color-white--hover" href="#!">Best work places around the World for your company</a>
                              </h3>
                            </div>
                          </article>
                        </div>

                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img3.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 15, 2016</a>
                          </span>
                            <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                              <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                <li class="list-inline-item">
                                  <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 264
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 52
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 26
                                </li>
                              </ul>
                              <h3 class="h5 g-font-weight-300 g-mb-0">
                                <a class="g-color-white g-color-white--hover" href="#!">Top 10 bust be used iOS apps for your next project</a>
                              </h3>
                            </div>
                          </article>
                        </div>

                        <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../../assets/img-temp/500x320/img2.jpg" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="#!">
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="#!">July 22, 2016</a>
                          </span>
                            <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                              <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                <li class="list-inline-item">
                                  <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 124
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-speech g-pos-rel g-top-1 g-mr-2"></i> 65
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 14
                                </li>
                              </ul>
                              <h3 class="h5 g-font-weight-300 g-mb-0">
                                <a class="g-color-white g-color-white--hover" href="#!">Discussing the project details is good step with team mates</a>
                              </h3>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Mega Menu Item -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-ml-15--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-7" class="nav-link text-uppercase g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Life
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-7">
                      <div class="row">
                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 16, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">You've been making French Pie all wrong - Until Now</a>
                            </h3>
                          </article>
                          <!-- End Article -->

                          <hr class="g-mt-15 g-mb-10">

                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 02, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Unify facts, study finds - sensitive to gluten without having coeliac disease</a>
                            </h3>
                          </article>
                          <!-- End Article -->
                        </div>

                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 18, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Why your next cup of cofee with milk will cost you more</a>
                            </h3>
                          </article>
                          <!-- End Article -->

                          <hr class="g-mt-15 g-mb-10">

                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 12, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Incredible product and quality: Unify best template of the year</a>
                            </h3>
                          </article>
                          <!-- End Article -->
                        </div>

                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 16, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Some post title will be implimented here and It's cool!</a>
                            </h3>
                          </article>
                          <!-- End Article -->

                          <hr class="g-mt-15 g-mb-10">

                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> Aug 02, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Wireframe approach for the news blocks and pages</a>
                            </h3>
                          </article>
                          <!-- End Article -->
                        </div>

                        <div class="col-lg-3 g-mb-20 g-mb-0--lg">
                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 18, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">Over thousands of components help you to boost your project</a>
                            </h3>
                          </article>
                          <!-- End Article -->

                          <hr class="g-mt-15 g-mb-10">

                          <!-- Article -->
                          <article>
                            <div class="g-font-size-12 g-mb-5">
                              <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> July 12, 2016
                            </div>

                            <h3 class="h6">
                              <a class="g-color-main" href="#!">How to run a ticket: Best 10 point approaches for people who stands..</a>
                            </h3>
                          </article>
                          <!-- End Article -->
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Menu Item -->

                  <!-- Main -->
                  <li class="nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="../../../index.html">
                      Main
                    </a>
                  </li>
                  <!-- End Main -->
                </ul>
              </div>
              <!-- End Navigation -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->

                   

      
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@section('content')
<div class="col-md-8 colm-d-offset-2">
<h1>Edit caption</h1>
{{ Form::model($post, ['route' => ['posts.update', $post->id] , 'method' => 'PUT']) }}

 {{ Form::label('caption', "Caption:") }}
 {{ Form::textarea('caption', null, ['class' => 'form-control']) }}

 {{ Form::label('tags', 'Tags:') }}
{{ Form::select('tags[]', $tags, $post->tags->pluck('id')->toArray(), ['class' => 'form-control select2' , 'multiple' => 'multiple']) }} 


 {{ Form::submit('Update Post', ['class' => 'btn btn-success btn-xs']) }}

{{ Form::close() }}
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script type="text/javascript">
  $('.select2-multi').select2();
  $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
</script>
@endsection

      <!-- Go To -->
      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go To -->
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/appear.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>

    <!-- JS Unify -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.popup.js') }}"></script>

    <!-- JS Revolution Slider -->
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- JS Customization -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of MegaMenu
        $('.js-mega-menu').HSMegaMenu();

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      // Revolution Slider
      var tpj = jQuery,
        revAPI;

      tpj(document).ready(function () {
        if (tpj('#revSlider').revolution == undefined) {
          revslider_showDoubleJqueryError('#revSlider');
        } else {
          revAPI = tpj('#revSlider').show().revolution({
            sliderType: 'carousel',
            jsFileLocation: 'revolution/js/',
            sliderLayout: 'fullscreen',
            dottedOverlay: 'none',
            delay: 9000,
            navigation: {
              keyboardNavigation: 'off',
              keyboard_direction: 'horizontal',
              mouseScrollNavigation: 'off',
              mouseScrollReverse: 'default',
              onHoverStop: 'on',
              thumbnails: {
                style: 'gyges',
                enable: true,
                width: 50,
                height: 50,
                min_width: 50,
                wrapper_padding: 5,
                wrapper_color: 'transparent',
               
                visibleAmount: 5,
                hide_onmobile: false,
                hide_over: 992,
                hide_onleave: false,
                direction: 'horizontal',
                span: false,
                position: 'inner',
                space: 5,
                h_align: 'center',
                v_align: 'top',
                h_offset: 0,
                v_offset: 20
              },
              tabs: {
                style: 'gyges',
                enable: true,
                width: 270,
                height: 130,
                min_width: 270,
                wrapper_padding: 0,
                wrapper_color: 'transparent',
               
                visibleAmount: 5,
                hide_onmobile: true,
                hide_under: 992,
                hide_onleave: false,
                hide_delay: 200,
                direction: 'vertical',
                span: true,
                position: 'inner',
                space: 0,
                h_align: 'right',
                v_align: 'center',
                h_offset: 0,
                v_offset: 0
              }
            },
            carousel: {
              horizontal_align: 'center',
              vertical_align: 'center',
              fadeout: 'off',
              maxVisibleItems: 1,
              infinity: 'on',
              space: 0,
              stretch: 'on',
              showLayersAllTime: 'off',
              easing: 'Power3.easeInOut',
              speed: '800'
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [800, 700, 400, 300],
            gridheight: [600, 600, 500, 400],
            lazyType: 'single',
            shadow: 0,
            spinner: 'off',
            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: 'off',
            autoHeight: 'off',
            hideThumbsOnMobile: 'off',
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: 'off',
              nextSlideOnWindowFocus: 'off',
              disableFocusListener: false,
            }
          });
        }
      });
    </script>
  </body>
</html>
