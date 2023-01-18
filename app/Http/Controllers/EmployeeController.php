<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;


class EmployeeController extends Controller
{
    public function getCreatePage()
    {
        return view('create');
    }

    public function createEmployee(EmployeeRequest $request)
    {
        Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        
        return redirect()->route('getEmployees');
    }

    public function getEmployees()
    {
        $employees = Employee::all();
        return view('view', ['employees' => $employees]);
    }

    public function updateEmployee(EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);

        $employee -> update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->route('getEmployees');
    }

    public function getEmployeeByID($id) {
        $employee = Employee::find($id);
        return view('update', ['employee' => $employee]);
    }

    public function deleteEmployee($id) {
        Employee::destroy($id);

        return redirect()->route('getEmployees');
    }

}