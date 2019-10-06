<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
   @extends('layouts.style')
@section('title', "| Petagram photos")

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
@if (Session::has('success'))
   <div id="alert-danger-msg" class="alert alert-danger">{{ Session::get('success') }}</div>
@endif
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
                                      <i class="icon-finance-067 u-line-icon-pro" style="padding-right: 5px"></i>
                                        {{ Auth::user()->username }}'s{{ __(' profile') }}

                                    </a>
                                     <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('tags.index') }}">
                                      <i class="icon-tag" style="padding-right: 5px"></i>
                                        {{ __('Tags') }}

                                    </a>
                                    <hr style="margin-top: 10px;margin-bottom: 10px">
                                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout"style="padding-right: 5px" ></i>
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

            
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->

                   
@section('content')
<div class="container">
  <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf

    @method('PATCH')
  <div class="row">
    <div class="col-md-4 offset-2">
      <div class="row">
        <h1>Edit profile</h1>
      </div>


 <div class="form-group row">
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="username" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-finance-067 u-line-icon-pro g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i>Username</label>
    </div>
    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $user->username }}" required autocomplete="username" autofocus >
  </div>



                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

<div class="form-group row">
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="password" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-finance-067 u-line-icon-pro g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i>New Password</label>
    </div>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="password" required autocomplete="password" autofocus >
  </div>



                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

       <div class="form-group row">
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="name" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-finance-067 u-line-icon-pro g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Title</label>
    </div>
    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus >
  </div>



                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                   <div class="form-group row">       
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="description" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-tag g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Description</label>
    </div>
    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

    
  </div>

            @error('description')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
</div>

    <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="url" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-link g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> URL</label>
    </div>
    
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>
  </div>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                      <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="function" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-badge g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Function</label>
    </div>
    
                                
        <input id="function" type="text" class="form-control @error('function') is-invalid @enderror" name="function" value="{{ old('function') ?? $user->profile->function }}" required autocomplete="function" autofocus>
  </div>

          @error('function')
              <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
              </span>
          @enderror
                            
                        </div>

  <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="company" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-real-estate-066 u-line-icon-pro g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Company</label>
    </div>
    
                                
                                 <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') ?? $user->profile->company }}" required autocomplete="company" autofocus>
  </div>

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

<div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="location" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-real-estate-020 u-line-icon-pro"></i> Location</label>
    </div>
    
                                
                                <select class="form-control" id="location" name="location" value="{{ old('location') ?? $user->profile->location }}" >
<option value="" selected="selected">Select Country</option> 
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
</select>
  </div>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group">
   
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="image" id="image">
    <label class="custom-file-label" for="inputGroupFile01">Profile image</label>
         
        
                                @error('image')
                           
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
</div>


                        <div class="row pt-4">
                          <button class="btn btn-primary">Save profile</button>
                        </div>

    </div>


     
    <div class="col-md-4 offset-2">
      <div class="row">
        <h1>Social Networks</h1>
      </div>
      <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="facebook" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-social-facebook g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Facebook</label>
    </div>
    
                                
                              
                                <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') ?? $user->profile->facebook }}"  autocomplete="facebook" autofocus>
  </div>

                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                             <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="instagram" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-social-instagram g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Instagram</label>
    </div>
    
                                
                              
                                  <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') ?? $user->profile->instagram }}"  autocomplete="instagram" autofocus>
  </div>

                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
       
                        <div class="form-group row">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="twitter" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-social-twitter g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Twitter</label>
    </div>
    
                                
                              
                                  <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') ?? $user->profile->twitter }}"  autocomplete="twitter" autofocus>
  </div>

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row ">     
          <div class="input-group g-mb-25 col-md-12 mt-2">
    <div class="input-group-prepend">
      <label  class="input-group-text" for="pinterest" style="background-color: #f7f7f7"><i style="padding: 0 5px" class="icon-social-pinterest g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> Pinterest</label>
    </div>
    
                                
                              
                                   <input id="pinterest" type="text" class="form-control @error('pinterest') is-invalid @enderror" name="pinterest" value="{{ old('pinterest') ?? $user->profile->pinterest }}"  autocomplete="pinterest" autofocus>
  </div>

                                @error('pinterest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                      
    </div>
  </div>
  </form>
</div>
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
    <script  src="{{ asset('assets/vendor/circles/circles.min.js') }}"></script>


    <!-- JS Unify -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.popup.js') }}"></script>
    <script  src="{{ asset('assets/js/components/hs.chart-pie.js')}}"></script>
    <script  src="{{ asset('assets/js/components/hs.counter.js')}}"></script>

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
