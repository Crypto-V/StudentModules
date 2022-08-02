@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Edit module Page</div>
  <div class="card-body">

      <form action="{{ url('module/' .$modules->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$modules->id}}" id="id" />
        <label>Module Name</label></br>
        <input type="text" name="module_name" id="module_name" value="{{$modules->module_name}}" class="form-control"></br>
        <label>Year</label></br>
        <input type="text" name="year" id="year" value="{{$modules->year}}" class="form-control"></br>
        <label>Pass Score</label></br>
        <input type="text" name="score" id="score" value="{{$modules->score}}" class="form-control"></br>
        <label>Lecturer</label></br>
        <input type="text" name="teacher" id="teacher" value="{{$modules->teacher}}" class="form-control"></br>
        <input type="submit" value="Update" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"></br>
    </form>

  </div>
</div>
@endsection
