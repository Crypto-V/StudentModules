@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Modules Page</div>
  <div class="card-body">

      <div class="card-body">
        <h5 class="card-title">Module_Name : {{ $modules->module_name }}</h5>
        <p class="card-text">Year : {{ $modules->year }}</p>
        <p class="card-text">Pass Score : {{ $modules->score }}</p>
        <p class="card-text">Lecturer : {{ $modules->teacher }}</p>
      </div>

    </hr>

  </div>
</div>
@endsection
