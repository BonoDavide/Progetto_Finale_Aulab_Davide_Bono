<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
    <x-footer></x-footer>

    <script src="https://kit.fontawesome.com/c3a1b6807b.js" crossorigin="anonymous"></script>
</body>
</html>