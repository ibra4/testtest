<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Forbidden') }}</title>
    <link href="{{ asset('css/errors.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/errors.js') }}"></script>
</body>

</html>
