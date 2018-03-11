@extends('test-data')

<!-- now going to section overwrite in laravel -->

<!-- @section('content')

this will overwrite the previous section

<div class="btn-success">
	data from parenet overwrite in child
</div>

@endsection -->

<!-- if we want to parent and child both then -->

@section('content')

<!-- @parent this will add parent and child noth data-->

@parent 


data from parenet overwrite in child
	
	<!-- blade include example
	 -->
	


@endsection
