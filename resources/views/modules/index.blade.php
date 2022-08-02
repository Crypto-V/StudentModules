
@extends('dashboard')
@section('content')
    <div class="container">
        <div class="row" style="justify-content: center">
            <div class="col-md-9" style="width:100%;">
                <div class="card">
                    <div class="card-header">
                        <h2>Check my score!</h2>
                        
                    </div>
                    <h5 style="text-align:center;">My grades from 2019 to 2022!</h5>
                    <div class="card-body">
                        @if(auth()->user()->is_admin)
                        <a href="{{ url('/module/create') }}" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg transition duration-150 ease-in-out" title="Add New Module">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive" >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Module Name</th>
                                        <th>Year</th>
                                        <th>Pass Score</th>
                                        <th>Lecturer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($modules as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->module_name }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td>{{ $item->score }}</td>
                                        <td>{{ $item->teacher }}</td>
                                        <td>
                                            <a href="{{ url('/module/' . $item->id) }}" title="View Module"><button class="inline-block px-4 py-1.5 bg-gray-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-500 hover:shadow-lg transition duration-150 ease-in-out"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            @if(auth()->user()->is_admin)
                                            <a href="{{ url('/module/' . $item->id . '/edit') }}" title="Edit Module"><button class="inline-block px-4 py-1.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-150 ease-in-out"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            @endif
                                            @if(auth()->user()->is_admin)
                                            <form method="POST" action="{{ url('/module' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit"  class="inline-block px-4 py-1.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg transition duration-150 ease-in-out"  title="Delete Module" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                <!-- style="background-color:#dc3545" -->
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
