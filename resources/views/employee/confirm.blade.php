@extends('layouts.app')

@section('title', '社員情報確認画面')

@section('h1', '社員情報入力確認')

@section('breadcrumb2', 'text-info')

@section('link')
  <li class="navbar-item ml-auto mr-3"><a href="./list">社員情報一覧</a></li>
@endsection

@section('content')

  <div class="panel-body">
    {!! Form::open(['route' => 'employee.done', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <fieldset {!! count($errors) === 0 ? 'disabled' : '' !!}>
        <input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">
        <!-- lastName -->
        <div class="col-sm-9 form-group required form-row">
          {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-form-label col-sm-3']) !!}
          <div class="col-sm-6 {{ $errors->has('lastName') ? 'has-error' : ''}}">
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
          <small class="form-text text-muted col-auto">※必須(1-5文字)</small>
        </div>

        <!-- firstName -->
        <div class="col-sm-9 form-group required form-row">
          {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-form-label col-sm-3']) !!}
          <div class="col-sm-6 {{ $errors->has('firstName') ? 'has-error' : ''}}">
            <input type="hidden" name="firstName" value="{{ $employee->firstName }}">
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
          <div class="col-sm-6 {{ $errors->has('lastNameKana') ? 'has-error' : ''}}">
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
          <div class="col-sm-6 {{ $errors->has('firstNameKana') ? 'has-error' : ''}}">
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
          <div class="col-sm-8 form-row {{ $errors->has('department') ? 'has-error' : ''}}">
            <input type="hidden" name="department" value="{{ $employee->department }}">
            <input type="hidden" name="manager" value="{{ $employee->manager }}">
            <input type="hidden" name="sectionChief" value="{{ $employee->sectionChief }}">
            {!! Form::label('department', '部', ['class' => 'col-form-label col-auto']) !!}
            @if($errors->has('department'))
              {!! Form::select('department', ['1技' => '1技'], $employee->department, ['placeholder' => '', 'id' => 'department', 'class' => 'form-control col-sm-3 is-invalid']) !!}
            @else
              {!! Form::select('department', ['1技' => '1技'], $employee->department, ['placeholder' => '', 'id' => 'department', 'class' => 'form-control col-sm-3 is-valid']) !!}
            @endif
            <small class="form-text text-muted col-auto">※必須</small>
            {!! Form::label('manager', '課', ['class' => 'col-form-label col-auto']) !!}
            {!! Form::select('manager', ['1課' => '1課', '2課' => '2課', '3課' => '3課'], $employee->manager, ['placeholder' => '', 'id' => 'manager', 'class' => 'form-control col-sm-3']) !!}
            {!! Form::label('sectionChief', '係', ['class' => 'col-form-label col-auto']) !!}
            {!! Form::select('sectionChief', ['1係' => '1係', '2係' => '2係', '3係' => '3係'], $employee->sectionChief, ['placeholder' => '', 'id' => 'sectionChief', 'class' => 'form-control col-sm-3']) !!}
            @if($errors->has('department'))
              <div class="invalid-feedback" style="text-indent: 0.5rem;">{{ $errors->first('department')}}</div>
            @else
              <div class="valid-feedback" style="text-indent: 0.5rem;">
                <p>OK!</p>
              </div>
            @endif
          </div>
        </div>

        <!-- position -->
        <div class="col-sm-9 form-group required form-row">
          {!! Form::label('position', '役職', ['class' => 'col-form-label col-sm-3']) !!}
          <div class="col-sm-3 {{ $errors->has($employee->has('position') ? 'has-error' : '')}}">
            <input type="hidden" name="position" value="{{ $employee->position }}">
            @if($errors->has('position'))
              {!! Form::select('position', ['一般' => '一般', '係長' => '係長', '課長' => '課長', '部長' => '部長'], null, ['placeholder' => '', 'id' => 'position', 'class' => 'form-control is-invalid col-auto']) !!}
              <div class="invalid-feedback">{{ $errors->first('position')}}</div>
            @else
              {!! Form::select('position', ['一般' => '一般', '係長' => '係長', '課長' => '課長', '部長' => '部長'], null, ['placeholder' => '', 'id' => 'position', 'class' => 'form-control is-valid col-auto']) !!}
              <div class="valid-feedback">
                <p>OK!</p>
              </div>
            @endif
          </div>
          <small class="form-text text-muted col-auto">※必須</small>
        </div>

        <!-- image -->
        <div class="col-sm-9 form-group form-row">
          {!! Form::label('image', '画像', ['class' => 'col-form-label col-sm-3']) !!}
          <div class="col-sm-6">
            <input type="hidden" name="image" value="{{ $employee->image }}">
            {!! Form::url('image', $employee->image, ['id' => 'image', 'class' => 'form-control col-auto']) !!}
          </div>
          <small class="form-text text-muted col-auto">※任意(http://, https:// で始まる文字列, 150文字まで)</small>
        </div>

        <!-- comments -->
        <div class="col-sm-9 form-group form-row">
          {!! Form::label('comments', '一言コメント', ['class' => 'col-form-label col-sm-3']) !!}
          <div class="col-sm-9">
            <input type="hidden" name="comments" value="{{ $employee->comments }}">
            {!! Form::textarea('comments', null, ['id' => 'comments', 'class' => 'form-control col-auto', 'rows' => '5']) !!}
          </div>
          <small class="form-text text-muted col-auto">※任意(300文字まで)</small>
        </div>

        @if(count($errors) > 0)
          <div class="alert col-sm-6">
            <ul class="list-group list-group-flush">
              @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger pl-5">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @else
          <div class="col-sm-9 mt-5 mb-5 text-center rounded">
            <p>入力内容に問題が無ければ登録ボタンを押してください。</p>
            <p>内容を修正する場合は編集ボタンを押してください。</p>
          </div>
        @endif
      </fieldset>

      <!-- hidden data -->
      @if(count($errors) === 0 )
        <input type="hidden" name="lastName" value="{{ $employee->lastName }}">
        <input type="hidden" name="firstName" value="{{ $employee->firstName }}">
        <input type="hidden" name="lastNameKana" value="{{ $employee->lastNameKana }}">
        <input type="hidden" name="firstNameKana" value="{{ $employee->firstNameKana }}">
        <input type="hidden" name="department" value="{{ $employee->department }}">
        <input type="hidden" name="manager" value="{{ $employee->manager }}">
        <input type="hidden" name="sectionChief" value="{{ $employee->sectionChief }}">
        <input type="hidden" name="position" value="{{ $employee->position }}">
        <input type="hidden" name="image" value="{{ $employee->image }}">
        <input type="hidden" name="comments" value="{{ $employee->comments }}">
      @endif

      <!-- btn -->
      <div class="form-group mb-5">
        <div class="col-sm-9 text-center form-row">
          @if(count($errors) > 0)
            <div class="col-sm-12 justify-content-center">
              {!! Form::submit('確認', ['class' => 'btn btn-primary', 'formaction' => 'confirm']) !!}
            </div>
          @else
            <div class="col-sm-12 d-flex justify-content-around">
              {!! Form::submit('編集', ['class' => 'btn btn-secondary', 'formaction' => 'regist']) !!}
              {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
            </div>
          @endif
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@endsection
