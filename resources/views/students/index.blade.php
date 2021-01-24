@extends('template')

@section('content')
<div class="jumbotron mt-3 text-dark text-center">
	<p class="lead" style="font-size: 56pt;">Laravel 8 Crud</p>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!!!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row mt-3">
	<div class="col-lg-12 margin-tb">
		<div class="pull-right">
			<a href="{{ route('students.create')}} " class="btn btn-success">Add Student Data</a>
		</div>
	</div>
</div>

<div class="row mt-3">
	<div class="table-responsive">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Courses</th>
      <th scope="col">Fees</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($students as $student)
    <tr>
      <th scope="student">{{ ++$i }}</th>
      <td>{{ $student->studname }}</td>
      <td>{{ $student->course }}</td>
      <td>{{ $student->fee }}</td>
      <td>
      	<form action="{{ route('students.destroy',$student->id) }}" method="POST">
      		@csrf
      		@method('DELETE')
      		<a href=" {{ route('students.edit', $student->id) }} " class="btn btn-success">Edit</a>
      		<a href=" {{ route('students.show', $student->id) }} " class="btn btn-primary">Show</a>
      		
      		<button type="submit" class="btn btn-danger">Delete</button>
      	</form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
	</div>
</div>

{!! $students->links() !!}
@stop

