<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $department;
    public function __construct(Department $department)
    {
        $this->department=$department;
    }
    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }
    public function create()
    {
        return view('department.create');
    }
    public function store(Request $request)
    {
        $this->department->create([
            "name"=> $request->name,
            "description"=> $request->description
            ]);
        return redirect()->route('department.index')->with('success','');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->name=$request->input('name');
        $department->description=$request->input('description');
        $department->update();
        return redirect()->route('department.index')->with('success','');
    }

    public function destroy($id)
    {
        
    }
}
