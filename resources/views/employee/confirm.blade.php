@extends('layouts.app')

@section('title', '社員情報確認画面')

@section('h1', '社員情報確認')

@section('content')

  <div class="panel-body">
    {!! Form::open(['route' => 'employee.done', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">
      <!-- lastName -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-form-label col-sm-3']) !!}
        <div class="col-sm-6 {{ $errors->has('lastName') ? 'has-error' : ''}}">
          <!-- <p class="form-control-static">{{ $employee->lastName }}</p> -->
          <input type="hidden" name="lastName" value="{{ $employee->lastName }}">
          @if($errors->has('lastName'))
            {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control is-invalid']) !!}
            <!-- <small class="form-text text-muted col-auto">※必須(1-5文字)</small> -->
            <div class="invalid-feedback">{{ $errors->first('lastName') }}</div>
          @else
            {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control is-valid']) !!}
            <div class="valid-feedback">
              <p>OK!</p>
            </div>
          @endif
        </div>
        <small class="form-text text-muted col-auto">※必須(1-5文字)</small>
      </div>

      <!-- firstName -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-form-label col-sm-3']) !!}
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
        <small class="form-text text-muted col-auto">※必須(1-5文字)</small>
      </div>

      <!-- lastNameKana -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('lastNameKana', '社員カナ（名字）', ['class' => 'col-form-label col-sm-3']) !!}
        <div class="col-sm-6 {{ $errors->has('lastNameKana' ? 'has-error' : '')}}">
          <input type="hidden" name="lastNameKana" value="{{ $employee->lastNameKana }}">
          @if($errors->has('lastNameKana'))
            {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control is-invalid']) !!}
            <div class="invalid-feedback">{{ $errors->first('lastNameKana')}}</div>
          @else
            {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control is-valid']) !!}
            <div class="valid-feedback">
              <p>OK!</p>
            </div>
          @endif
        </div>
        <small class="form-text text-muted col-auto">※必須(1-15文字)</small>
      </div>

      <!-- firstNameKana -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('firstNameKana', '社員カナ（名前）', ['class' => 'col-form-label col-sm-3']) !!}
        <div class="col-sm-6 {{ $errors->has('firstNameKana' ? 'has-error' : '')}}">
          <input type="hidden" name="firstNameKana" value="{{ $employee->firstNameKana }}">
          @if($errors->has('firstNameKana'))
            {!! Form::text('firstNameKana', $employee->firstNameKana, ['id' => 'firstNameKana', 'class' => 'form-control is-invalid']) !!}
            <div class="invalid-feedback">{{ $errors->first('firstNameKana')}}</div>
          @else
            {!! Form::text('firstNameKana', $employee->firstNameKana, ['id' => 'firstNameKana', 'class' => 'form-control is-valid']) !!}
            <div class="valid-feedback">
              <p>OK!</p>
            </div>
          @endif
        </div>
        <small class="form-text text-muted col-auto">※必須(1-15文字)</small>
      </div>

      <!-- affiliation -->
      <div class="col-sm-9 form-group required form-row">
        {!! Form::label('department', '所属', ['class' => 'col-form-label col-sm-3']) !!}
        <div class="col-sm-6 {{ $errors->has('department' ? 'has-error' : '')}}">
          <input type="hidden" name="department" value="{{ $employee->department }}">
          <input type="hidden" name="manager" value="{{ $employee->manager }}">
          <input type="hidden" name="sectionChief" value="{{ $employee->sectionChief }}">
          {!! Form::label('department', '部', ['class' => 'col-form-label col-auto']) !!}
          {!! Form::select('department', ['1' => '1技'], null, ['placeholder' => '', 'id' => 'department', 'class' => 'form-control col-sm-2']) !!}
          <small class="form-text text-muted col-auto">※必須</small>
          {!! Form::label('manager', '課', ['class' => 'col-form-label col-auto']) !!}
          {!! Form::select('manager', ['1' => '1課', '2' => '2課', '3' => '3課'], null, ['placeholder' => '', 'id' => 'manager', 'class' => 'form-control col-sm-2']) !!}
          {!! Form::label('sectionChief', '係', ['class' => 'col-form-label col-auto']) !!}
          {!! Form::select('sectionChief', ['1' => '1係', '2' => '2係', '3' => '3係'], null, ['placeholder' => '', 'id' => 'sectionChief', 'class' => 'form-control col-sm-2']) !!}
        </div>
      </div>

      <!-- image -->
      {!! Form::label('image', '画像', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('image', $employee->image, ['id' => 'image', 'class' => 'form-control']) !!}
      </div>

      <!-- comments -->
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
