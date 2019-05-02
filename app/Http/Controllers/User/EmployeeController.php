<?php

namespace App\Http\Controllers\User;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller {

    /**
     * Create an instance of employee controller, check that the current user
     * is authenticated
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Fetch all employees from the table, then pass it into the view with
     * pagination for every 15 records
     *
     * @return view
     */
    public function index() {
        $employees = Employee::simplePaginate(15);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the view for adding an employee
     *
     * @return view
     */
    public function create() {
        return view('employees.create');
    }

    /**
     * Insert the newly added employee into the database
     *
     * @return redirect
     */
    public function store() {
        $attributes = request()->validate([
            'name'       => ['required', 'string', 'max:255'],
            'title'      => ['required', 'string', 'max:255'],
            'university' => ['nullable', 'string', 'max:255'],
            'city_name'  => ['nullable', 'string', 'max:255'],
            'state_name' => ['nullable', 'string', 'max:255'],
        ]);

        Employee::create($attributes);

        return redirect('/dashboard/employees');
    }

    /**
     * Show the view for editing an existing employee's details
     *
     * @param  String $name
     * @return view
     */
    public function edit($name) {
        $employee = Employee::where('name', $name)->first();

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update an existing employee's details
     *
     * @param  String $name
     * @return redirect
     */
    public function update($name) {
        $employee = Employee::where('name', $name)->first();

        $employee->update(request(['name', 'title', 'university', 'city_name', 'state_name']));
        return redirect('/dashboard/employees');
    }

    /**
     * Delete an employee's record from the database
     *
     * @param  String $name
     * @return redirect
     */
    public function destroy($name) {
        Employee::where('name', $name)->first()->delete();
        return redirect('/dashboard/employees');
    }
}
