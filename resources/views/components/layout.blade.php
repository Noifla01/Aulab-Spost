<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/public/media/favicon1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@vite(['resources/css/app.css', 'resources/js/app.js'])

    <title class="">The Aulab sPost</title>
</head>
<body>
    <x-navbar/>
{{$slot}}


</body>
</html>