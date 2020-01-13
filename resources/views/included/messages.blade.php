@if(count($errors)>0)

	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach

@endif

@if(session('success'))

	<div class="alert alert-success">
		<h5 align="center"><i class="fa fa-check fa-2x"></i> {{session('success')}} </h5>
	</div>

@endif

@if(session('error'))

	<div class="alert alert-danger">
		{{session('error')}}!
	</div>

@endif