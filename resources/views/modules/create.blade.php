@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Create Module</div>
  <div class="card-body">

      <form action="{{ url('module') }}" method="post">
        {!! csrf_field() !!}
        <label>Module Name</label></br>
        <input type="text" name="module_name" id="module_name" class="form-control" required></br>
        <label>Year</label></br>
        <input type="text" name="year" id="year" class="form-control" required></br>
        <label>Pass Score</label></br>
        <input type="text" name="score" id="score" class="form-control" required></br>
        <label>Lecturer</label></br>
        <input type="text" name="teacher" id="teacher" class="form-control" required></br>
        <input type="submit" value="Save"  class="inline-block px-6 py-1.5 bg-green-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out " ></br>
    </form>

  </div>
</div>
@endsection
