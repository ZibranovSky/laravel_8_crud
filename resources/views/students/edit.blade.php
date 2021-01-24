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
				<form action="{{ route('students.update', $student->id) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Student Name</label>
						<input value="{{ $student->studname }}" type="text" class="form-control" name="studname">
					</div>
					<div class="form-group">
						<label>Course Name</label>
						<input value="{{ $student->course }}" type="text" class="form-control" name="course">
					</div>
					<div class="form-group">
						<label>Fee</label>
						<input value="{{ $student->fee }}" type="text" class="form-control" name="fee">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop