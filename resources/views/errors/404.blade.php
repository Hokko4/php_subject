@extends('layouts.template')

@section('title', 'エラー')

@section('content')

  <div class="panel-body">
    <div class="alert alert-danger">
      <p>{{ $exception->getStatusCode() }}</p>
      <p class="">※システムエラーが発生しました。</p>
      <p class="">大変お手数ですが、ある程度時間を置いて上記リンクをクリック頂き、再度各操作をお願い致します。</p>
      <p class="">時間を置いても本画面が表示される場合は管理者へのご連絡をお願い致します。</p>
    </div>
  </div>

@endsection
