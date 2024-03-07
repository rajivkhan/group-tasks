
<div class="row">
	<div class="col-md-12">
		@if ($errors->any())
		    <div class="alert alert-danger alert-dismissable">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		@if(session()->has('messageType'))
			<div class="alert alert-{{ session()->get('messageType') }} alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{ session()->get('message') }}
			</div>
		@endif
	</div>
</div>


{{-- <div class="row">
	<div class="col-md-12">
		@if($errors->count()) @if ( count( $errors ) > 0 )
			<div class="alert alert-danger alert-dismissable">
				@foreach($errors->get() as $error)
					- {{ $error }} <br>
				@endforeach
			</div>
		@endif
	</div>
</div> --}}