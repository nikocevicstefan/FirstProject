<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="svg">
</head>
<body class="mx-auto" style="width: 70%;margin-top: 3%">

    @include('authentication.loginNav')

    <div class="container">
        @yield('content')
    </div>

</body>
</html>