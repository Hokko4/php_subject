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
      <p class="col-sm-3">社員氏名（名字）</p>
      <p class="col-auto">{!! $employee->lastName !!}</p>
      <small class="text-muted col-auto">※必須(1-5文字)</small>
    </div>

    <!-- firstName -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">社員氏名（名前）</p>
      <p class="col-auto">{!! $employee->firstName !!}</p>
      <small class="text-muted col-auto">※必須(1-5文字)</small>
    </div>

    <!-- lastNameKana -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">社員カナ（名字）</p>
      <p class="col-auto">{!! $employee->lastNameKana !!}</p>
      <small class="text-muted col-auto">※必須(1-15文字)</small>
    </div>

    <!-- firstNameKana -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">社員カナ（名前）</p>
      <p class="col-auto">{!! $employee->firstNameKana !!}</p>
      <small class="text-muted col-auto">※必須(1-15文字)</small>
    </div>

    <!-- affiliation -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">所属</p>
      <p class="col-auto">{!! $employee->department, $employee->manager, $employee->sectionChief !!}</p>
      <small class="text-muted col-auto">※必須</small>
    </div>

    <!-- position -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">役職</p>
      <p class="col-auto">{!! $employee->position !!}</p>
      <small class="text-muted col-auto">※必須</small>
    </div>

    <!-- image -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">画像</p>
      <p class="col-auto">{!! $employee->image !!}</p>
      <small class="text-muted col-auto">※任意(http://, https:// で始まる文字列, 150文字まで)</small>
    </div>

    <!-- comments -->
    <div class="col-sm-9 mb-3 row">
      <p class="col-sm-3">一言コメント</p>
      <p class="col-sm-6">{!! $employee->comments !!}</p>
      <small class="text-muted col-auto">※任意(300文字まで)</small>
    </div>

      <!-- btn -->
    {!! Form::open(['route' => ['employee.regist'], 'method' => 'get', 'class' => 'form-horizontal']) !!}
      <div class="col-sm-9 mb-5 text-center form-row">
        <div class="col-sm-12 d-flex justify-content-around">
          {!! Form::submit('社員情報一覧', ['class' => 'btn btn-info', 'formaction' => 'list']) !!}
          {!! Form::submit('追加登録', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@endsection
