@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3" >
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>

            </div>
        </div>

        <div class="row pt-2 pb-4" style="border: 1px solid #f5f5f5;width: 48.7%;margin: auto;">
          
            <div class="col-md-12 mt-2" >
                 <div> <span class="d-flex"> Posted : {{ $post->created_at->diffForHumans() }}</span></div>
                <div>
                    <p>

                    <span class="font-weight-bold">
                        <img src="/storage/{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 30px">
                        <a href="/profile/{{ $post->user->id }}" style="text-decoration: none">
                            <span class="text-dark">{{ $post->user->username }}: </span>
                        </a>
                    </span> {{ $post->caption }}

            <div id="backend-comments" class="mb-3">
                        <a href="/post/{{ $post->id }}" ><small>View all {{ $post->comments()->count() }} comments</small></a>
                         
                     </div>
                     @foreach($post->comments as $comment)

                   {{-- @if($comment->approved == 0) --}}
          <div class="comment d-flex" style="margin-left: 30px">
             <img src="/storage/{{ $comment->image }}" class="w-100 rounded-circle" style="max-width: 20px;max-height: 20px;">
            <p><strong><a style="padding: 0 3px" class="text-dark" href="/profile/{{ $comment->user_id }}">{{ $comment->username}}</a>: </strong> {{ $comment->comment}}</p>
            @can('update', $post->user->profile)
 
        <div class="dropdown col-md-6">
    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" style="background-color: #ffffff00;border: 1px solid #555;color: black;padding: 0 5px" data-toggle="dropdown">
      Select
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"><i class="far fa-edit" style="padding: 0 3px;margin-left: -10px"></i>Edit comment</a>
      <a class="dropdown-item" title="Options" style="text-decoration: none;" href="/deleteComment/{{$comment->id}}"><i class="far fa-trash-alt" style="padding: 0 3px;margin-left: -10px"></i>Delete comment</a>
    </div>
  </div>

          
@endcan

          </div>

          @endforeach
 
          
  {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
    <div class="row">
 <div class="col-md-12">
         {{ Form::label('comment', "Add a new comment...") }}
        {{ Form::text('comment', null, ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Add Comment', ['class' => 'btn btn-info btn-sm d-flex']) }}
      
    </div>
    {{ Form::close() }}
    
    
 

                    </p>
                     <div class="d-flex"><a href="#"><i class="far fa-heart" style="font-size: 22px;padding: 0 5px;color: #191919"></i></a>
                        <a href="#"><i class="far fa-comment" style="font-size: 22px;padding: 0 5px;color: #191919"></i></a></div>
                </div>
            </div>
        </div>
    @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
</div>

@endsection
