@extends('template')

@section('content')

<div class="jumbotron text-center mt-5">
            <h1 class="lead">Welcome!! CRUD By Muhammad Zibran Fitadiyatama</h1><br>
            <a href="{{ route('students.index') }}" class="btn btn-success">Open Crud</a>
        </div>
@stop