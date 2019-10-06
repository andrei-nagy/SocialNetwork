@extends('layouts.app')

@section('title', "| $post->created_at")
@section('content')

<div class="container">
  <div class="row">

    <div class="col-md-8">
      @if (Session::has('message'))
   <div id="alert-success-msg" class="alert alert-success">{{ Session::get('message') }}</div>
@endif
 @if (Session::has('remove'))
   <div id="alert-danger-msg" class="alert alert-danger">{{ Session::get('remove') }}</div>
@endif
      <img src="/storage/{{ $post->image }}" class="w-100"> 
       <div>Posted at :  {{ $post->user->created_at->toDateString() }}</div>
      
           <div class="tags mt-2" >
    @foreach($post->tags as $tag)
    <a href="{{ route('tags.show', $tag->id) }}"><button type="button" class="btn btn-primary badge-pill btn-sm mt-2">
  {{ $tag->name }}  <span class="badge badge-danger ml-2">{{ $tag->posts()->count() }}</span>
</button></a>
    @endforeach
  </div>
   <hr>
        <button class="btn btn-danger btn-sm">Like </button> 
         @can('update', $post->user->profile)
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" title="Delete photo"><i class="far fa-trash-alt"></i></button>
         <a href="{{ route('posts.editPost', $post->id) }}"><button class="btn btn-success btn-sm">Edit post </button> </a>
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

          </div>

        </div>
          </div>
  <hr>
        <p> <span class="font-weight-bold">
          <a href="/profile/{{ $post->user->id }}">
            <span class="text-dark">{{ $post->user->username }}: </span>
          </a></span>{{ $post->caption}}</p>
      </div>


      <div class="row">
        <div class="col-md-12">
          

          @foreach($post->comments as $comment)
           

          <div class="comment d-flex " style="margin-left: 30px">
            <img src="/storage/{{ $comment->image }}" class="w-100 rounded-circle" style="max-width: 20px;max-height: 20px;">
            <p><strong><a style="padding: 0 3px;" class="text-dark" href="/profile/{{ $comment->user_id }}">{{ $comment->username}}</a>: </strong> 
              {{$comment->comment}}</p>


       @can('update', $post->user->profile)
 
        <div class="dropdown col-md-6">
    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" style="background-color: #ffffff00;border: 1px solid #555;color: black;padding: 0 5px" data-toggle="dropdown">
      Select
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ route('comments.edit', $comment->id) }}" ><i class="far fa-edit" style="padding: 0 3px;margin-left: -10px"></i>Edit comment</a>
      <a class="dropdown-item" title="Options" style="text-decoration: none;" href="/deleteComment/{{$comment->id}}" ><i class="far fa-trash-alt" style="padding: 0 3px;margin-left: -10px"></i>Delete comment</a>
    </div>
 
  </div>

          </div>
@endcan

    
          @endforeach
            
        </div>
      </div>

<div class="row">
  <div id="comment-form">
    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
    <div class="row">
 <div class="col-md-8">
         {{ Form::label('comment', "Comment:") }}
        {{ Form::text('comment', null, ['class' => 'form-control']) }}
      </div>
      <div class="col-md-4">
      {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-xs', 'style' => 'margin-top: 1.88rem']) }}
      </div>
    </div>
    
    {{ Form::close() }}
    
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
