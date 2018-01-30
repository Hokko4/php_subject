<?php

namespace App\Http\Controllers;
// namespace App\Http\Requests;

use Illuminate\Http\Request;

use App\Employee;
use App\Affiliation;
use App\Position;
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
      // return view('employee/regist')->with('employee', new Employee());
      $employee = new Employee();
      return view('employee/regist', compact('employee'));
    }

    public function confirm(Request $request) {
      $input = $request->all();

      $rules = [
          'lastName'      => 'required|min:1|max:5',
          'firstName'     => 'required|min:1|max:5',
          'lastNameKana'  => 'required|min:1|max:15',
          'firstNameKana' => 'required|min:1|max:15',
          'department'    => 'required',
          'position'      => 'required'
      ];

      $messages = [
        'lastName.required' => '社員氏名（名字）は必須です',
        'firstName.required' => '社員氏名（名前）は必須です',
        'lastNameKana.required' => '社員カナ（名字）は必須です',
        'firstNameKana.required' => '社員カナ（名前）は必須です',
        'lastName.min' => '1文字以上入力してください',
        'firstName.min' => '1文字以上入力してください',
        'lastNameKana.min' => '1文字以上入力してください',
        'firstNameKana.min' => '1文字以上入力してください',
        'lastName.max' => '5文字以下で入力してください',
        'firstName.max' => '5文字以下で入力してください',
        'lastNameKana.max' => '15文字以下で入力してください',
        'firstNameKana.max' => '15文字以下で入力してください',
        'department.required' => '所属部は必須です',
        'position.required' => '役職は必須です'
      ];

      $valid = Validator::make($input, $rules, $messages);
      $employee = $request;

      if($valid->fails()){
        // return view('employee/confirm')->withErrors($valid, 'errors')->with('employee', $request);
        return view('employee/confirm', compact('employee'))->withErrors($valid, 'errors');
      }

      // return view('employee/confirm')->with('employee', $request);
      return view('employee/confirm', compact('employee'));
    }

    public function done(Request $request) {
      $emp = new Employee();
      $emp->fill($request->all());
      $emp->save();

      //last insert id
      $lastId = $emp->id;

      $afi = new Affiliation();
      $afi->fill([
        'id' => $lastId,
        'department' => $request->department,
        'manager' => $request->manager,
        'sectionChief' => $request->sectionChief
      ]);
      $afi->save();

      $pos = new Position();
      $pos->fill([
        'id' => $lastId,
        'position' => $request->position
      ]);
      $pos->save();

      // return view('employee/done')->with('employee', $request)->with('employee_id', $lastId);
      $employee = $request;
      $employee_id = $lastId;
      return view('employee/done', compact('employee', 'employee_id'));
    }

    public function list(Request $request) {
      $employee = Employee::all();

      // return view('employee/list')->with('employee', $empl);
      return view('employee/list', compact('employee'));
    }
}
