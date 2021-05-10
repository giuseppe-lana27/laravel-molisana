<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        {{-- /google font --}}
        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        {{-- /FontAwesome --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        {{-- includo header --}}        
        @include('parts.header')
        {{-- /includo header --}}
        {{-- includo main --}}
        @yield('content')
        {{-- /includo main --}}
        {{-- includo footer --}}
        @include('parts.footer')
    </body>
</html>