<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset("css/app.css")}} ">
<title> @yield('titel',"undefiend")</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="navbar-brand">Articals</div>
    <ul class="navbar-nav m-auto">
    <li class="nav-item"><a href="{{route("Artical.index")}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href=" {{route("Artical.create")}} " class="nav-link">Create</a></li>
    </ul>
</nav>

@if (session()->has("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="text-center m-auto">{{session()->get("success")}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
  </div>
@endif
    @yield('body')

<script src="{{asset("js/app.js")}}"></script>
</body>
</html>