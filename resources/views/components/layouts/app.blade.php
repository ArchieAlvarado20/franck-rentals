<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
        <title>{{ $title ?? 'Franck Rentals' }}</title>
        @vite(['resources/css/app.css','resources/css/styles.css','resources/js/app.js' ,'resources/js/main.js'])
        @livewireStyles
    </head>
    <body>
    @livewire('partials.navbar')
    <main>
    {{ $slot }}
    </main>
    @livewire('partials.footer')
    @livewireScripts      
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </body>
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>
