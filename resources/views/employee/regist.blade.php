@extends('layouts.app')

@section('title', '社員情報入力画面')

@section('h1', '社員情報入力')

@section('breadcrumb1', 'text-info')

@section('content')

  <!-- <div class="panel-body">
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
  </div> -->
  <div class="panel-body">
    {!! Form::open(['route' => ['employee.confirm'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">

      <!-- lastName -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-form-label col-sm-3']) !!}
        <!-- <label for="lastName" class="col-form-label col-sm-4">社員氏名（名字）</label> -->
        {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control col-sm-6']) !!}
        <!-- <input type="text" name="lastName" value="{{ old('lastName') }}" class="form-control col-sm-8"> -->
        <small class="form-text text-muted col-auto">※必須(1-5文字)</small>
      </div>

      <!-- firstName -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-form-label col-sm-3']) !!}
        <!-- <label for="firstName" class="control-label">社員氏名（名前）</label> -->
        {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control col-sm-6']) !!}
        <!-- <input type="text" name="firstName" value="{{ old('firstName') }}" class="form-control"> -->
        <small class="form-text text-muted col-auto">※必須(1-5文字)</small>
      </div>

      <!-- lastNameKana -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('lastNameKana', '社員カナ（名字）', ['class' => 'col-form-label col-sm-3']) !!}
        <!-- <label for="lastNameKana" class="control-label">社員カナ（名字）</label> -->
        {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control col-sm-6']) !!}
        <!-- <input type="text" name="lastNameKana" value="{{ old('lastNameKana') }}" class="form-control"> -->
        <small class="form-text text-muted col-auto">※必須(1-15文字)</small>
      </div>

      <!-- firstNameKana -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('firstNameKana', '社員カナ（名前）', ['class' => 'col-form-label col-sm-3']) !!}
        <!-- <label for="firstNameKana" class="control-label">社員カナ（名前）</label> -->
        {!! Form::text('firstNameKana', $employee->firstNameKana, ['id' => 'firstNameKana', 'class' => 'form-control col-sm-6']) !!}
        <!-- <input type="text" name="firstNameKana" value="{{ old('firstNameKana') }}" class="form-control"> -->
        <small class="form-text text-muted col-auto">※必須(1-15文字)</small>
      </div>

      <!-- affiliation -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('department', '所属', ['class' => 'col-form-label col-sm-3']) !!}
        {!! Form::label('department', '部', ['class' => 'col-form-label col-auto']) !!}
        {!! Form::select('department', ['1技' => '1技'], $employee->department, ['placeholder' => '', 'id' => 'department', 'class' => 'form-control col-sm-2']) !!}
        <small class="form-text text-muted col-auto">※必須</small>
        {!! Form::label('manager', '課', ['class' => 'col-form-label col-auto']) !!}
        {!! Form::select('manager', ['1課' => '1課', '2課' => '2課', '3課' => '3課'], $employee->manager, ['placeholder' => '', 'id' => 'manager', 'class' => 'form-control col-sm-2']) !!}
        {!! Form::label('sectionChief', '係', ['class' => 'col-form-label col-auto']) !!}
        {!! Form::select('sectionChief', ['1係' => '1係', '2係' => '2係', '3係' => '3係'], $employee->sectionChief, ['placeholder' => '', 'id' => 'sectionChief', 'class' => 'form-control col-sm-2']) !!}
      </div>

      <!-- position -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('position', '役職', ['class' => 'col-form-label col-sm-3']) !!}
        {!! Form::select('position', ['一般' => '一般', '係長' => '係長', '課長' => '課長', '部長' => '部長'], $employee->position, ['placeholder' => '', 'id' => 'position', 'class' => 'form-control col-sm-3']) !!}
        <small class="form-text text-muted col-auto">※必須</small>
      </div>

      <!-- image -->
      <div class="col-sm-9 form-group form-row">
        {!! Form::label('image', '画像', ['class' => 'col-form-label col-sm-3']) !!}
        {!! Form::url('image', $employee->image, ['id' => 'image', 'class' => 'form-control col-sm-6']) !!}
        <small class="form-text text-muted col-auto">※任意(http://, https:// で始まる文字列, 150文字まで)</small>
      </div>

      <!-- comments -->
      <div class="col-sm-9 form-group form-row">
        {!! Form::label('comments', '一言コメント', ['class' => 'col-form-label col-sm-3']) !!}
        {!! Form::textarea('comments', $employee->comments, ['id' => 'comments', 'class' => 'form-control col-sm-9', 'rows' => '5']) !!}
        <small class="form-text text-muted col-auto">※任意(300文字まで)</small>
      </div>

      <!-- btn -->
      <div class="col-sm-10 mb-5 form-group text-center">
        <button type="submit" class="btn btn-primary">登録</button>
      </div>
    {!! Form::close() !!}
  </div>

@endsection
