<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ByteFlux </title>
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Nunito:wght@400;700&family=Poppins:wght@400;700&display=swap" 
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@400..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}

    {{-- piccolo div per lasciare spazio prima del footer --}}
    <div class="pb-5"></div>

    <x-footer></x-footer>

    <script src="https://kit.fontawesome.com/c3a1b6807b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
</body>
</html>