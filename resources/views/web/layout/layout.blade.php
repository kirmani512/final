<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title","home")</title>
    @include("web.layout.css")
    <script src="{{ Asset('js/jquery-3.3.1.min.js') }}"></script>
</head>

<body>
    @include("web.layout.header")
    @yield("content")
    @include("web.layout.footer")
    @include("web.layout.js")
</body>

</html>
