@if (Session::has('success'))
	
	<div id="alert-success-msg" class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif
@if (Session::has('remove'))
	
	<div id="alert-success-msg" class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('remove') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>

@endif

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