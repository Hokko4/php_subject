@extends('layouts.app')

@section('title', '社員情報確認画面')

@section('h1', '社員情報確認')

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
    <div class="form-group">
      <div class="col-sm-6">
        <p>名前</p>
        <p>{{ $employee->lastName }}</p>
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
