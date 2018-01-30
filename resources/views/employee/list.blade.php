@extends('layouts.listTemplate')

@section('title', '社員情報一覧')

@section('h1', '社員情報一覧')

@section('content')

  <div class="panel-body">
    @foreach($employee as $emp)
      <p>{{ $emp->id . ': ' . $emp->lastName . $emp->firstName }}</p>
    @endforeach
  </div>

@endsection
