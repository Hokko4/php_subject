@extends('layouts.app')

@section('title', '社員情報確認画面')

@section('h1', '社員情報確認')

@section('content')

  <div class="panel-body">
    {!! Form::open(['route' => 'employee.done', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <!-- lastName -->
      <div class="form-group">
        {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 {{ $errors->has('lastName') ? 'has-error' : ''}}">
          <!-- <p class="form-control-static">{{ $employee->lastName }}</p> -->
          <input type="hidden" name="lastName" value="{{ $employee->lastName }}">
          @if($errors->has('lastName'))
            {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control is-invalid']) !!}
            <div class="invalid-feedback">{{ $errors->first('lastName') }}</div>
          @else
            {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control is-valid']) !!}
            <div class="valid-feedback">
              <p>OK!</p>
            </div>
          @endif
        </div>
      </div>

      <!-- firstName -->
      <div class="form-group">
        {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 {{ $errors->has('firstName') ? 'has-error' : ''}}">
          <!-- <p class="form-control-static">{{ $employee->firstName }}</p> -->
          <input type="hidden" name="firstName" value="{{ $employee->firstName }}">
          <!-- {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control']) !!} -->
          @if($errors->has('firstName'))
          {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control is-invalid']) !!}
          <div class="invalid-feedback">{{ $errors->first('firstName') }}</div>
          @else
          {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control is-valid']) !!}
          <div class="valid-feedback">
            <p>OK!</p>
          </div>
          @endif
        </div>
      </div>

      <!-- lastNameKana -->
      <div class="form-group">
        {!! Form::label('lastNameKana', '社員カナ（名字）', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6 {{ $errors->has('lastNameKana' ? 'has-error' : '')}}">
          {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control']) !!}
        </div>
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
      <div class="col-sm-6 form-group">
        {!! Form::textarea('comments', $employee->comments, ['id' => 'comments', 'class' => 'form-control']) !!}
      </div>

      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul style="list-style: none;">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="form-group">
        <div class="col-sm-6 text-center row justify-content-around">
          @if(count($errors) > 0)
            {!! Form::submit('確認', ['class' => 'btn btn-primary', 'formaction' => 'confirm']) !!}
          @else
            {!! Form::submit('編集', ['class' => 'btn btn-primary', 'formaction' => 'regist']) !!}
            {!! Form::submit('登録', ['class' => 'btn btn-primary', 'disabled' => '']) !!}
          @endif
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@endsection
