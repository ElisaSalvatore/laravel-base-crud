<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('pageTitle') | COMICS </title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=2">

  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
  
  <main class="d-flex">

    <div class="container py-5">
      @include('content')
    </div>

  </main>

</body>

</html>