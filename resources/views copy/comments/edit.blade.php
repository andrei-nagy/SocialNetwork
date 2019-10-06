@extends('layouts.app')

@section('content')
<div class="col-md-8 colm-d-offset-2">
<h1>edit comment</h1>
{{ Form::model($comment, ['route' => ['comments.update', $comment->id] , 'method' => 'PUT']) }}

 {{ Form::label('comment', "Comment:") }}
 {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

  {{ Form::submit('Update Comment', ['class' => 'btn btn-success btn-xs']) }}

{{ Form::close() }}
</div>
@endsection
