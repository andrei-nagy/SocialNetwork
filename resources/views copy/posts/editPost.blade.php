@extends('layouts.app')
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