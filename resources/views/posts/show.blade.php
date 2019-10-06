<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
   @extends('layouts.style')
@section('title', "| View post $post->id ")

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
    <link  rel="stylesheet" href="{{ asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') }}">

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
                                     
                                     <i class="icon-finance-067 u-line-icon-pro"style="padding-right: 5px" ></i>
                                 
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
                                                     <i class="icon-logout" style="padding-right: 5px"></i>
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
  <div class="row">

    <div class="col-md-8">
     
      <img src="/storage/{{ $post->image }}" class="w-100"> 
     
      
          

  
   <hr>
 
       
    </div>

   
    <div class="col-md-4">

      <div>

          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="/storage/{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">

            </div>
        <div>
  
          <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</a><span class="g-color-black-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
<span class="g-color-gray-dark-v4 g-font-size-12">{{ $post->created_at->toDateString() }}</span>

          </div>

        </div>

          </div>
          
          <p class="mt-3"> <span class="font-weight-bold">
          <a href="/profile/{{ $post->user->id }}">
            <span class="text-dark">{{ $post->user->username }}: </span>
          </a></span>{{ $post->caption}}</p>
           
           
<hr>
          <!-- Tags -->
       <div class="g-mb-40">
         <h3 class="h5 g-color-black g-font-weight-600 mb-4">Tags</h3>
           <ul class="u-list-inline mb-0">
             <li class="list-inline-item g-mb-10">

              
               @foreach($post->tags as $tag)
              
               
               <a class="u-tags-v1 g-color-gray-dark-v4 g-color-white--hover g-bg-gray-light-v5 g-bg-primary--hover
                g-font-size-12 g-rounded-50 g-py-4 g-px-15 mb-3 ml-2" href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }} <span class="badge badge-danger ml-2">{{ $tag->posts()->count() }}</span></a>
               
               @endforeach
                 
             </li>
            </ul>
       </div>
                 

<!-- End Tags -->

   
  <!--      <button class="btn btn-danger btn-sm">Like </button> -->
         @can('update', $post->user->profile)
        <hr>
         <a href="{{ route('posts.editPost', $post->id) }}"><button class="btn btn-success btn-sm" ><i style="padding: 0 5px" class="icon-note"></i>Edit post </button> </a>
         <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" title="Delete photo"><i style="padding: 0 5px" class="icon-close"></i>Delete</button>
        @endcan
       
    </div>
<hr>

        </div>

       <button type="button" class="btn btn-primary mb-5 ml-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="icon-pencil" style="font-size: 12px;padding: 0 5px"></i>Add a new comment</button>

      
        <div class="col-md-12">
          <h4 style="margin-left: 5rem" class="mb-2">Comments section</h4>

          @foreach($post->comments()->latest()->paginate(5) as $comment)
          
            <div class="media g-mb-30">
               @if(!empty($comment->image) )
  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/storage/{{ $comment->image }}" alt="Image Description">
  @else
  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/storage/profile/vx2k9TEhkcgaRdOWKvs4lsxqOVmuzwumtwySEnvH.png" alt="Image Description">
  @endif
  <div class="media-body g-brd-around g-brd-gray-light-v4 g-pa-30" style="margin-right: -35px">
    <div class="g-mb-15">
      <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
       <span class="d-block g-mr-10"><a href="/profile/{{ $comment->user_id }}" style="text-decoration: none;">{{ $comment->username }}</a>
         <span class="g-color-black-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
<span class="g-color-gray-dark-v4 g-font-size-12">{{ $comment->created_at }}</span>
       </span>
        <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="/profile/{{ $comment->user_id }}">Author</a>
      </h5>
    </div>


    <p>{{$comment->comment}}</p>

    <ul class="list-inline d-sm-flex my-0">
        @can('update', $post->user->profile)
      <li class="list-inline-item ml-auto">
        <a href="{{ $comment->id }}" class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"  data-toggle="modal" data-target="#exampleModal2">
          <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i>
          Edit comment
        </a>
       <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         

 
<div class="col-md-8 colm-d-offset-2">
   
<h1>edit comment</h1>
 
{{ Form::model($comment, ['route' => ['comments.update', $comment->id] , 'method' => 'PUT']) }}
 
 {{ Form::label('comment', "Comment:") }}
 {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

  {{ Form::submit('Update Comment', ['class' => 'btn btn-success btn-xs']) }}

{{ Form::close() }}
</div> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      </li>
<li class="list-inline-item ml-auto">
        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="/deleteComment/{{$comment->id}}">
          <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i>
          Delete comment
        </a>
      </li>
      @endcan
    </ul>
  </div>
</div>


          @endforeach
            {{ $post->comments()->latest()->paginate(5)->links() }}


        </div>
      </div>
</div>
    </div>
  </div>
</div>







 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete your photo?</p>
      </div>
      <div class="modal-footer">
        @can('update', $post->user->profile)

        <a href="/delete/{{$post->id}}"><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" title="Delete photo">Yes</button></a>
        @endcan
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="border: 1px solid;">Not really</button>
      </div>
    </div>

  </div>
</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new comment to {{$post->caption}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row col-md-12">

         
  <div id="comment-form">
    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
    <div class="row">
 <div class="col-md-8">
         {{ Form::label('comment', "Comment:") }}
      

        {{ Form::textarea('comment', null, ['class' => 'form-control g-bg-secondary g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15', 'rows' => '4', 'placeholdes' => 'your comment here', 'style' => 'width: 450px']) }}
      </div>
     
    
    
   
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-success" type="submit" value="Add Comment">
         {{ Form::close() }}
      </div>
    </div>
  </div>
</div>  


<!-- SESSION SCRIPTS -->
    <script>
$("document").ready(function(){
    setTimeout(function(){
        $("#alert-success-msg").remove();
    }, 4000 ); 

});
$("document").ready(function(){
    setTimeout(function(){
        $("#alert-danger-msg").remove();
    }, 4000 ); 

});
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
    <script src="{{ asset('assets/js/components/hs.scrollbar.js') }}"></script>

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
         $(document).ready(function () {
    // initialization of HSScrollBar component
    $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
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
