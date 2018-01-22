<?php

namespace App\Http\Controllers;
// namespace App\Http\Requests;

use Illuminate\Http\Request;

use App\Employee;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Validator;

class EmployeeController extends Controller
{
    // 社員情報入力画面
    // protected $employee;
    // public function __construct(EmployeeRepository $employee)
    // {
    //   $this->emoloyee = $employee;
    // }

    public function create() {
      return view('employee/create')->with('employee', new Employee());
    }

    public function store(Request $request) {
      $emp = new Employee();
      $emp->fill($request->all());
      $emp->save();
      return redirect()->route('employee.index');
    }

    public function regist() {
      return view('employee/regist')->with('employee', new Employee());
    }

    public function confirm(Request $request) {
      $input = $request->all();

      $rules = [
          'lastName'      => 'required|min:1|max:5',
          'firstName'     => 'required|min:1|max:5',
          'lastNameKana'  => 'required|min:1|max:15',
          'firstNameKana' => 'required|min:1|max:15'
      ];

      $messages = [
        'lastName.required' => '社員氏名（名字）を再入力してください',
        'firstName.required' => '社員氏名（名前）を再入力してください',
        'lastNameKana.required' => '社員カナ（名字）を再入力してください',
        'firstNameKana.required' => '社員カナ（名前）を再入力してください'
      ];
      // $valid = $request->validate([
      //   $rules
      // ]);
      // $valid = $request->validate($rules);
      $valid = Validator::make($input, $rules, $messages);

      if($valid->fails()){
        return view('employee/confirm')->withErrors($valid, 'errors')->with('employee', $request);
        // return redirect('employee/confirm')->withErrors($valid)->withInput();
      }

      return view('employee/confirm')->with('employee', $request);
    }

    public function done(Request $request) {
      $emp = new Employee();
      $emp->fill($request->all());
      $emp->save();
      return view('employee/done')->with('employee', $request);
      // return redirect()->route('emoloyee.regist');
    }
}
