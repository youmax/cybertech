<!DOCTYPE html>
<html class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="{{ mix('app/app.css') }}" rel="stylesheet">
    <script src="{{ mix('app/app.js') }}" defer></script>
    @routes('app')
</head>

<body class="font-sans leading-none text-gray-700 antialiased">

    @inertia

</body>

</html>