<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <!-- <h1>@yield('h1')</h1> -->
          <nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-end mt-3 mb-5">
            <!-- <a href="/employee/list" class="nav-link">社員情報一覧</a>
            <a href="/employee/regist" class="nav-link">社員情報登録</a> -->
            {{ link_to('/employee/list', '社員情報一覧', ['class' => 'nav-link']) }}
            {{ link_to('/employee/regist', '社員情報登録', ['class' => 'nav-link']) }}
          </nav>
        </div>

        @yield('content')

        <div class="panel-footer">
          {{ link_to_route('employee.regist', '戻る') }}
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
