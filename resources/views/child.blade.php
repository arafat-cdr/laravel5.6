@extends('layout.master')

@section('content')

{{--
	Form::open(['url' => 'form-submit'])
	
	Form::open(['action' => 'TestController@formSubmit'])

	or the below way
--}}

{!! Form::open(['route' => 'f.submit']) !!}

{!! Form::text('name') !!}

{!! Form::submit('submit')!!}

{!! Form::close() !!}

<?php
	#dd($errors->all());
	#dd($errors->get('name'));
    #echo $errors->first('name');

	echo $errors->first('name', "<li class='error'>:message </li>");
?>
@endsection