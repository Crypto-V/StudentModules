<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{

    public function index()
    {
        $modules = Module::all();
        return view ('modules.index') ->with('modules',$modules);
    }

    public function create()
    {
        return view('modules.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Module::create($input);
        return redirect('module')->with('flash_message','Module Successfuly Added!');
    }


    public function show($id)
    {
        $module = Module::find($id);
        return view('modules.show')->with('modules',$module);
    }


    public function edit($id)
    {
        $module = Module::find($id);
        return view('modules.edit')->with('modules',$module);
    }


    public function update(Request $request, $id)
    {
        $module = Module::find($id);
        $input = $request->all();
        $module->update($input);
        return redirect('module')->with('flash_message','Module Successfuly Updated!');
    }


    public function destroy($id)
    {
        Module::destroy($id);

        return redirect('module')->with('flash_message','Module Deleted');

    }
}
