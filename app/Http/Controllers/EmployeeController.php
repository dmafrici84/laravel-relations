<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index() {
    $employees = Employee::all();
    return view('employees', compact('employees'));
  }

  public function show($id) {
    $employee = Employee::findOrFail($id);
    return view('employee', compact('employee'));
  }

  public function create() {
    $locations = Location::all();
    return view('employee-create',compact('locations'));
  }

  public function store(Request $request) {
    $data = $request -> all();
    Employee::create($data);
    return redirect() -> route('employees.index');
  }

  public function destroy($id) {
    $employee = Employee::findOrFail($id);
    $employee -> delete();
    return redirect() -> route('employees.index');
  }
}
