<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('employees.index');
    }


    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'university' => ['nullable', 'string'],
            'city_name' => ['nullable', 'string'],
            'state_name' => ['nullable', 'string'],
            'description' => ['nullable', 'string']
        ]);

        Employee::create($attributes);

        return view('employees.index');
    }

    public function edit($name)
    {
        $employee = Employee::where('name', $name)->first();

        return view('employees.edit', compact('employee'));
    }

    public function update($id)
    {
        $employee = Employee::where('id', $id)->first();

        $employee->update(request(['name', 'title']));
        return redirect('/dashboard/employees');
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->first()->delete();
        return redirect('/dashboard/employees');
    }
}
