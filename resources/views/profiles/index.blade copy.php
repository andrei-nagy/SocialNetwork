@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-3 p-5">
           <img class="rounded-circle" style="max-height: 150px;max-width: 150px" src="/storage/{{ $user->profile->profileImage()}}">
       </div>
       @if (Session::has('remove'))
   <div id="alert-danger-msg" class="alert alert-danger">{{ Session::get('remove') }}</div>
@endif
       <div class="col-md-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
               <div class="h4">{{ $user->username }}</div>
               <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
              
             </div>
             @can('update', $user->profile)
               <a href="/post/create">Add new post</a>
              @endcan
           </div>
            @can('update', $user->profile)
          <i class="fas fa-user-edit"></i>
           <a href="/profile/{{ $user->id}}/edit">Edit Profile</a>
           @endcan
          
           <div class="d-flex">
               <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
           </div>
           <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
       </div>
   </div>
   
      <div class="row pt-5">
        @foreach($user->posts as $post)

<div class="col-md-4 pb-4">
        <a href="/post/{{ $post->id }}">
       <img class="w-100" src="/storage/{{ $post->image }}">
     </a>
   </div>
        @endforeach
  
  
   
  </div>
</div>

@endsection
<script src="{{ asset('js/app.js') }}" defer></script>
