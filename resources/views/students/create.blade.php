@extends('template')

@section('content')
	<div class="row mt-5">
		<div class="col-lg-12 margin-tb">
			<a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-lg-12 margin-tb">
			<div class="jumbotron">
				<form action="{{ route('students.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label>Student Name</label>
						<input type="text" class="form-control" name="studname">
					</div>
					<div class="form-group">
						<label>Course Name</label>
						<input type="text" class="form-control" name="course">
					</div>
					<div class="form-group">
						<label>Fee</label>
						<input type="text" class="form-control" name="fee">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop