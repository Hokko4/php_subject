@extends('layouts.app')

@section('title', '社員情報入力画面')

@section('h1', '社員情報入力')

@section('content')

  <div class="panel-body">
    {!! Form::model($employee, ['route' => 'employee.confirm', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="form-group">
        {!! Form::label('lastName', '苗字', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control']) !!}
        </div>
        {!! Form::label('firstName', '名前', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control']) !!}
        </div>
        {!! Form::label('lastNameKana', '苗字カナ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control']) !!}
        </div>
        {!! Form::label('firstNameKana', '名前カナ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('firstNameKana', $employee->firstNameKana, ['id' => 'firstNameKana', 'class' => 'form-control']) !!}
        </div>
        {!! Form::label('image', '画像', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('image', $employee->image, ['id' => 'image', 'class' => 'form-control']) !!}
        </div>
        {!! Form::label('comments', 'コメント', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::textarea('comments', $employee->comments, ['id' => 'comments', 'class' => 'form-control']) !!}
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          {!! Form::submit('追加', ['class' => 'btn btn-default']) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@endsection
