<!-- extend my main layout -->

@extends('layout.master') 

<!-- extend my main layout end-->

<!-- put code inside my layout -->

@section('content')

<?php 

$statement = false; 
$d  =  [];
$da['name'] = 'user name';
$da['age'] = 23;
?>

	<h2>
		{{ $data or 'no data found'}}
		<br/>

		{{ $txt or 'no data found'}}
		<br/>

		{!! $data !!} <!-- skip htmlentities -->

		@{{$data}}  <!-- skip this -->

<!-- ++++++++++++++++++++++++++++++++ -->
		@if($statement)

		<div class="success">Good</div>

		@elseif($statement)

		<div class="error">Bad</div>

		@else

		<div class="success">Great</div>

		@endif

		@if(!$statement) same as @endif @unless($statement)

		@endif

		@for($i = 0 ; $i<10; $i++) 

			<div class="succrss">Number is: {{$i}}</div>
        @endfor

        @if($d)

        @foreach($d as $v)

        {{$v}}

        @endforeach

        @endif

       <!--  or we can use  -->

       @forelse( $d as $v )
		
		<table>
			<tr>
				<td>{{$v}}</td>
			</tr>
		</table>

		@empty

		<table>
			<tr>
				<td>No data found in array</td>
			</tr>
		</table>

		@endforelse





<!-- ++++++++++++++++++++++++++++++++ -->

	</h2>

@endsection
<!-- put code inside my layout end -->
