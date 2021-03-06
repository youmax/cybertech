<!DOCTYPE html>
<html class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="{{ mix('admin/admin.css') }}" rel="stylesheet">
    <script src="{{ mix('admin/admin.js') }}" defer></script>
    @routes('admin')
</head>

<body class="font-sans leading-none text-gray-700 antialiased">

    @inertia

</body>

</html>