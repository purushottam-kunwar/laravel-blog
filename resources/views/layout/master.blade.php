<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Application</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="/resources/css/blog.css" rel="stylesheet">
</head>

<body>
@include('layout.nav')

@if($flash = session('message'))
    <div class="alert alert-success flash-message" role="alert">
        {{ $flash }}
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-sm-10">
            @yield('content')
        </div>
        <div class="col-sm-2">
            @include('layout.sidebar')
        </div>
    </div>
</div>

@include('layout.footer')

</body>
</html>
