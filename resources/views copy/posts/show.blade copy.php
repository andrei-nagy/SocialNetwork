@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <img src="/storage/{{ $post->image }}" class="w-100"> 
       <div>Posted at :  {{ $post->user->created_at->toDateString() }}</div>
        <button class="btn btn-danger btn-sm">Like </button> 
         @can('update', $post->user->profile)
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" title="Delete photo"><i class="far fa-trash-alt"></i></button>
        @endcan
       
    </div>

   
    <div class="col-md-4">
      <div>
          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="/storage/{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">

            </div>
        <div>
          <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a>

        <!--   <span class="pl-1">&#183;</span> <a href="#"  class="pl-1">Follow</a> -->
        
         
   
          </div>

        </div>
          </div>
  <hr>
        <p> <span class="font-weight-bold">
          <a href="/profile/{{ $post->user->id }}">
            <span class="text-dark">{{ $post->user->username }}: </span>
          </a></span>{{ $post->caption}}</p>
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
@endsection
