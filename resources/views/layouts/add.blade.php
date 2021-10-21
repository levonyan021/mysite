<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title-block')</title>
  <link rel="stylesheet" href="./css/add.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  @include('inc.header')
  <div class="container mt-3">
    <div class="row">
      <div class="col-8">
          @yield('content')
      </div>
      <div class="col-4">
          @include('inc.aside')
      </div>
    </div>



@include('inc.footer')
</div>
</body>
</html>
