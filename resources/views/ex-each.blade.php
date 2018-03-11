@extends('layout.master')

@section('content')
	@each('show-data', $data, 'd', 'no-data')
	<!-- file_name, $data, access_var, file_nam -->
@endsection