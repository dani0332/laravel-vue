<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="h-full">
<h1 class="">Vue master</h1>
<div id="app"></div>
</body>
</html>