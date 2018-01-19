@extends('layouts.app')

@section('title', '社員情報入力画面')

@section('h1', '社員情報入力')

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
  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="panel-body">
    {!! Form::open(['route' => ['employee.confirm'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">
      <div class="col-sm-6 form-group required {{ $errors->has('lastName') ? 'has-error' : ''}}">
        <label for="lastName" class="control-label">社員氏名（名字）</label>
        @if(old('confirming', 'false') === 'false')
          <input type="text" name="lastName" value="{{ old('lastName') }}" class="form-control">
        @else
          <p class="form-control-static">{{ old('lastName') }}</p>
          <input type="hidden" name="name" value="{{ old('lastName') }}">
        @endif
        @if($errors->has('lastName'))
          <p class="help-block">{{ $errors->first('lastName') }}</p>
        @endif
      </div>
      <div class="col-sm-6 form-group required {{ $errors->has('firstName') ? 'has-error' : ''}}">
        <label for="firstName" class="control-label">社員氏名（名前）</label>
        @if(old('confirming', 'false') === 'false')
          <input type="text" name="firstName" value="{{ old('firstName') }}" class="form-control">
        @else
          <p class="form-control-static">{{ old('firstName') }}</p>
          <input type="hidden" name="firstName" value="{{ old('firstName') }}">
        @endif
        @if($errors->has('firstName'))
          <p class="help-block">{{ $errors->first('firstName') }}</p>
        @endif
      </div>
      <div class="col-sm-6 form-group required {{ $errors->has('lastNameKana') ? 'has-error' : ''}}">
        <label for="lastNameKana" class="control-label">社員カナ（名字）</label>
        @if(old('confirming', 'false') === 'false')
          <input type="text" name="lastNameKana" value="{{ old('lastNameKana') }}" class="form-control">
        @else
          <p class="form-control-static">{{ old('lastNameKana') }}</p>
          <input type="hidden" name="lastNameKana" value="{{ old('lastNameKana') }}">
        @endif
        @if($errors->has('lastNameKana'))
          <p class="help-block">{{ $errors->first('lastNameKana') }}</p>
        @endif
      </div>
      <div class="col-sm-6 form-group required {{ $errors->has('firstNameKana') ? 'has-error' : ''}}">
        <label for="firstNameKana" class="control-label">社員カナ（名前）</label>
        @if(old('confirming', 'false') === 'false')
          <input type="text" name="firstNameKana" value="{{ old('firstNameKana') }}" class="form-control">
        @else
          <p class="form-control-static">{{ old('firstNameKana') }}</p>
          <input type="hidden" name="firstNameKana" value="{{ old('firstNameKana') }}">
        @endif
        @if($errors->has('firstNameKana'))
          <p class="help-block">{{ $errors->first('firstNameKana') }}</p>
        @endif
      </div>
      <div class="col-sm-6 form-group text-center">
        @if(old('confirming', 'false') === 'false')
          <button type="submit" class="btn btn-primary">確認</button>
        @else
          <button type="submit" name="action" value="back" class="btn btn-primary">編集</button>
          <button type="submit" name="action" value="post" class="btn btn-primary">登録</button>
        @endif
      </div>
    {!! Form::close() !!}
  </div>

@endsection
