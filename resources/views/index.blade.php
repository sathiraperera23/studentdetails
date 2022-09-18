{{-- <div class="alert alert-success">
	{{ $message }}
</div> --}}

<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Age</th>
				<th>Status</th>
			</tr>
			{{-- @if(count($data) > 0) --}}

				@foreach($students as $student)

					<tr>
						{{-- <td><img src="{{ asset('images/' . $row->student_image) }}" width="75" /></td> --}}
                        <td>{{ $student->id }}</td>
						<td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->status }}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $student->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>

						</td>
					</tr>

				@endforeach

			{{-- @else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif --}}
		</table>
		{!! $students->links() !!}
	</div>
</div>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
















{{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container">
<a href="{{route('students.create')}}" class="btn btn-primary mt-4 mb-4">
    Add Manufacturers
</a>
    <table class="table bg-white table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )

          <tr>
            <th scope="row">{{$manufacturer->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student ->status ? 'Published' : 'Not Published'}}</td>

         <td>
             <a href="{{route('students.show', $student->id)}}" class="btn btn-sm btn-success">View</a>
             <a href="{{route('students.edit', $student->id)}}" class="btn btn-sm btn-primary">Edit</a>
             <form action="{{route('students.destroy', $student->id)}}" method="POST" id="delete-{{$student->id}}-manufacturer ">
                @csrf
                @method('DELETE')
             </form>
             <button type="button" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete{{$student->name}}?')? document.getElementById('delete-{{$student->id}}-user')submit():null">Delete</button>
         </td>
        </tr>
        @endforeach

        </tbody>
      </table>
      {{$students->links()}}





@endsection --}}
