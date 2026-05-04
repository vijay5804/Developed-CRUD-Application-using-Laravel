<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel CRUD</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a href="/" class="navbar-brand text-light">Laravel CRUD</a>
  </div>
</nav>


<div class="container mt-5">

<div class="row">
   @if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> {{ session('success') }}

    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
     @yield('main')
</div> 

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 