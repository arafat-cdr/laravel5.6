@extends('layout.master')

@section('content')

<h5>Simple example of stack</h5>

@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="logout.css">
@endpush

@push('css')

<link rel="stylesheet" type="text/css" href="test.css">

@endpush

@push('js')
 <script type="text/javascript" src="jquery.js"></script>
@endpush