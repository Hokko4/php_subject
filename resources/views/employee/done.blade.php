@extends('layouts.app')

@section('title', '社員情報登録完了')

@section('h1', '社員情報登録完了')

@section('breadcrumb3', 'text-info')

@section('content')

  <div class="panel-body">
    <!-- id -->
    <div class="col-sm-9 mt-3 mb-3 row">
      <p class="col-sm-3">社員番号</p>
      <p class="col-sm-6">{!! $employee_id !!}</p>
    </div>

    <!-- lastName -->
    <div class="col-sm-9 mb-3 row">
      <!-- {!! Form::label('lastName', '社員氏名（名字）', ['class' => 'col-form-label col-sm-3']) !!} -->
      <!-- <label for="lastName" class="col-form-label col-sm-4">社員氏名（名字）</label> -->
      <p class="col-sm-3">社員氏名（名字）</p>
      <p class="col-auto">{!! $employee->lastName !!}</p>
      <!-- {!! Form::text('lastName', $employee->lastName, ['id' => 'lastName', 'class' => 'form-control col-sm-6']) !!} -->
      <!-- <input type="text" name="lastName" value="{{ old('lastName') }}" class="form-control col-sm-8"> -->
      <small class="text-muted col-auto">※必須(1-5文字)</small>
    </div>

    <!-- firstName -->
    <div class="col-sm-9 mb-3 row">
      <!-- {!! Form::label('firstName', '社員氏名（名前）', ['class' => 'col-form-label col-sm-3']) !!} -->
      <!-- <label for="firstName" class="control-label">社員氏名（名前）</label> -->
      <p class="col-sm-3">社員氏名（名前）</p>
      <p class="col-auto">{!! $employee->firstName !!}</p>
      <!-- {!! Form::text('firstName', $employee->firstName, ['id' => 'firstName', 'class' => 'form-control col-sm-6']) !!} -->
      <!-- <input type="text" name="firstName" value="{{ old('firstName') }}" class="form-control"> -->
      <small class="text-muted col-auto">※必須(1-5文字)</small>
    </div>

    <!-- lastNameKana -->
    <div class="col-sm-9 mb-3 row">
      <!-- {!! Form::label('lastNameKana', '社員カナ（名字）', ['class' => 'col-form-label col-sm-3']) !!} -->
      <!-- <label for="lastNameKana" class="control-label">社員カナ（名字）</label> -->
      <p class="col-sm-3">社員カナ（名字）</p>
      <p class="col-auto">{!! $employee->lastNameKana !!}</p>
      <!-- {!! Form::text('lastNameKana', $employee->lastNameKana, ['id' => 'lastNameKana', 'class' => 'form-control col-sm-6']) !!} -->
      <!-- <input type="text" name="lastNameKana" value="{{ old('lastNameKana') }}" class="form-control"> -->
      <small class="text-muted col-auto">※必須(1-15文字)</small>
    </div>

    <!-- firstNameKana -->
    <div class="col-sm-9 mb-3 row">
      <!-- {!! Form::label('firstNameKana', '社員カナ（名前）', ['class' => 'col-form-label col-sm-3']) !!} -->
      <!-- <label for="firstNameKana" class="control-label">社員カナ（名前）</label> -->
      <p class="col-sm-3">社員カナ（名前）</p>
      <p class="col-auto">{!! $employee->firstNameKana !!}</p>
      <!-- {!! Form::text('firstNameKana', $employee->firstNameKana, ['id' => 'firstNameKana', 'class' => 'form-control col-sm-6']) !!} -->
      <!-- <input type="text" name="firstNameKana" value="{{ old('firstNameKana') }}" class="form-control"> -->
      <small class="text-muted col-auto">※必須(1-15文字)</small>
    </div>

    <!-- affiliation -->
    <div class="col-sm-9 mb-3 row">
      <!-- {!! Form::label('department', '所属', ['class' => 'col-form-label col-sm-3']) !!}
      {!! Form::label('department', '部', ['class' => 'col-form-label col-auto']) !!}
      {!! Form::select('department', ['1' => '1技'], $employee->department, ['placeholder' => '', 'id' => 'department', 'class' => 'form-control col-sm-2']) !!} -->
      <p class="col-sm-3">所属</p>
      <!-- <p class="col-auto">部</p> -->
      <p class="col-auto">{!! $employee->department, $employee->manager, $employee->sectionChief !!}</p>
      <small class="text-muted col-auto">※必須</small>
      <!-- {!! Form::label('manager', '課', ['class' => 'col-form-label col-auto']) !!}
      {!! Form::select('manager', ['1' => '1課', '2' => '2課', '3' => '3課'], $employee->manager, ['placeholder' => '', 'id' => 'manager', 'class' => 'form-control col-sm-2']) !!}
      {!! Form::label('sectionChief', '係', ['class' => 'col-form-label col-auto']) !!}
      {!! Form::select('sectionChief', ['1' => '1係', '2' => '2係', '3' => '3係'], $employee->sectionChief, ['placeholder' => '', 'id' => 'sectionChief', 'class' => 'form-control col-sm-2']) !!} -->
    </div>

    <!-- position -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">役職</p>
      <p class="col-auto">{!! $employee->position !!}</p>
      <!-- {!! Form::label('position', '役職', ['class' => 'col-form-label col-sm-3']) !!}
      {!! Form::select('position', ['1' => '一般', '2' => '係長', '3' => '課長', '4' => '部長'], $employee->position, ['placeholder' => '', 'id' => 'position', 'class' => 'form-control col-sm-3']) !!} -->
      <small class="text-muted col-auto">※必須</small>
    </div>

    <!-- image -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">画像</p>
      <p class="col-auto">{!! $employee->image !!}</p>
      <!-- {!! Form::label('image', '画像', ['class' => 'col-form-label col-sm-3']) !!}
      {!! Form::url('image', $employee->image, ['id' => 'image', 'class' => 'form-control col-sm-6']) !!} -->
      <small class="text-muted col-auto">※任意(http://, https:// で始まる文字列, 150文字まで)</small>
    </div>

    <!-- comments -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">一言コメント</p>
      <p class="col-sm-6">{!! $employee->comments !!}</p>
      <!-- {!! Form::label('comments', '一言コメント', ['class' => 'col-form-label col-sm-3']) !!}
      {!! Form::textarea('comments', $employee->comments, ['id' => 'comments', 'class' => 'form-control col-sm-9', 'rows' => '5']) !!} -->
      <small class="text-muted col-auto">※任意(300文字まで)</small>
    </div>

      <!-- btn -->
    {!! Form::open(['route' => ['employee.regist'], 'method' => 'get', 'class' => 'form-horizontal']) !!}
      <div class="col-sm-9 mb-5 text-center form-row">
        <div class="col-sm-12 d-flex justify-content-around">
          {!! Form::submit('社員情報一覧', ['class' => 'btn btn-info', 'formaction' => 'list']) !!}
          {!! Form::submit('追加登録', ['class' => 'btn btn-primary']) !!}
        </div>
        <!-- <button type="submit" class="btn btn-primary">追加登録</button> -->
        <!-- {!! link_to_route('employee.regist', '追加登録', ['class' => 'btn btn-primary']) !!} -->
      </div>
    {!! Form::close() !!}
  </div>

@endsection
