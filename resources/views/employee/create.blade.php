@extends('layouts.app')

@section('title', '新規作成')

@section('h1', '社員情報入力')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      新規作成
    </div>
    <div class="panel-body">
      {!! Form::model($employee, ['route' => 'employee.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
        <div class="form-group">
          {!! Form::label('name', 'タスク名', ['class' => 'col-sm-3 control-label']) !!}
          <div class="col-sm-6">
            {!! Form::text('name', $employee->name, ['id' => 'task-name', 'class' => 'form-control']) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            {!! Form::submit('追加', ['class' => 'btn btn-default']) !!}
          </div>
        </div>
      {!! Form::close() !!}
    </div>

    <div class="panel-footer">
      {{ link_to_route('employee.index', '戻る')}}
    </div>
  </div>

@endsection
