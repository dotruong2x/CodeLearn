<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLearn</title>
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <!-- Font-awesome CSS -->
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	
</head>
<body>

@include('header')
<main class="my-3">
@yield('content')
</main>
@include('footer')

</body>
    <script src="{{ asset('library/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('library/fontawesome/js/all.min.js') }}"></script>
   
</html>