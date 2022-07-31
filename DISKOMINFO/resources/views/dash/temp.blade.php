<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEMARANG PEDULI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="main-header navbar navbar-expand navbar-primary navbar-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/overview"><img src="{{asset('/dinsos.png')}}" style="width :200px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item-active">
          <a class="nav-link" href="#">Ayo Donasi!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>

@yield('content')

</body>
</html>


