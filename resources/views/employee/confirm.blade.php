@extends('layouts.app')

@section('title', '社員情報確認画面')

@section('h1', '社員情報確認')

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
    <div class="form-group">
      <div class="col-sm-6">
        <?php var_dump($errors) ?>
      </div>
      <div class="">
        {{ $errors->first('lastName') }}
        {{ $errors->first('firstName') }}
        {{ $errors->first('lastNameKana') }}
        {{ $errors->first('firstNameKana') }}
      </div>
      {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('lastName', $employee->lasttName, ['id' => 'lastName', 'class' => 'form-control']) !!}
      </div>
      {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control']) !!}
      </div>
      {!! Form::label('lastNameKana', '社員カナ（名字）', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control']) !!}
      </div>
      {!! Form::label('firstNameKana', '社員カナ（名前）', ['class' => 'col-sm-3 control-label']) !!}
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

    {!! Form::model($employee, ['route' => 'employee.done', 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
        {!! Form::submit('登録', ['class' => 'btn btn-default']) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection
