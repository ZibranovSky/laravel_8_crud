@extends('template')

@section('content')

<div class="col-lg-12 margin-tb mt-5">
	<a href="{{ route('students.index') }}" class="btn btn-primary">back</a>
</div>

<div class="col-lg-12 margin-tb mt-5">
	<div class="jumbotron">
		<h1 class="lead">Student Name : {{ $student->studname }}</h1><br>
		<h1 class="lead">Student Course : {{ $student->course }}</h1><br>
		<h1 class="lead">Student Fee : {{ $student->fee }}</h1>
	</div>
</div>

@stop