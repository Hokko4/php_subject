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
          'lastName'      => 'required',
          'firstName'     => 'required',
          'lastNameKana'  => 'required',
          'firstNameKana' => 'required'
      ];

      $messages = [
        'lastName.required' => '名字は必須項目です',
        'firstName.required' => '名前は必須項目です',
        'lastNameKana.required' => '名字カナは必須項目です',
        'firstNameKana.required' => '名前カナは必須項目です',
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
