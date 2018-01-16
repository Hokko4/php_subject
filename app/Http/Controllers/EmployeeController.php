<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Http\Requests;

class EmployeeController extends Controller
{
    // 社員情報入力画面
    public function create() {
      return view('employee/create')->with('employee', new Employee());
    }

    public function store(Request $request) {
      $emp = new Employee();
      $emp->fill($request->all());
      $emp->save();
      return redirect()->route('employee.index');
    }
}
