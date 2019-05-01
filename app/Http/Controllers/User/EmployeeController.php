<?php

namespace App\Http\Controllers\User;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // NOTE : these double line comments are temporary and for myself
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Return listing of all employees
    public function index()
    {
        $employees = Employee::simplePaginate(15);
        return view('employees.index', compact('employees'));
    }

    // Add a new employee
    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'university' => ['nullable', 'string', 'max:255'],
            'city_name' => ['nullable', 'string', 'max:255'],
            'state_name' => ['nullable', 'string', 'max:255']
        ]);

        Employee::create($attributes);

        return view('employees.index');
    }

    // Edit an employee details
    public function edit($name)
    {
        $employee = Employee::where('name', $name)->first();

        return view('employees.edit', compact('employee'));
    }

    public function update($name)
    {
        $employee = Employee::where('name', $name)->first();

        $employee->update(request(['name', 'title', 'university', 'city_name', 'state_name']));
        return redirect('/dashboard/employees');
    }

    // Delete the employee
    public function destroy($name)
    {
        Employee::where('name', $name)->first()->delete();
        return redirect('/dashboard/employees');
    }
}
