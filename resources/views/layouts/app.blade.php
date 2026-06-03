<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis Quince Ashley ❤️</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print" onload="this.media='all'"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    </noscript>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}?ver=1.1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/font-awesome/css/all.min.css') }}?version=5.15.4" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}?ver=1.1.0" rel="stylesheet">
    <link href="{{ asset('css/ekko-lightbox.css') }}?ver=1.1.0" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}?ver=1.3.0" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>
<body>
    <div id="app">
        <main>
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset('scripts/bootstrap.bundle.min.js') }}?ver=1.1.0"></script>
    <script src="{{ asset('scripts/aos.js') }}?ver=1.1.0"></script>
    <script src="{{ asset('scripts/ekko-lightbox.min.js') }}?ver=1.1.0"></script>
    <script src="{{ asset('scripts/main.js') }}?ver=1.1.0"></script>
    <script src="{{ asset('scripts/simplyCountdown.min.js') }}"></script>
    <script src="{{ asset('scripts/simply_count.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/music.js') }}"></script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('showSuccessMessage', () => {
                Swal.fire({
                    title: '¡Guardado!',
                    text: 'Gracias por confirmar tu asistencia 🤠',
                    icon: 'success',
                    confirmButtonColor: '#9FAF96'
                });
            });
        });
    </script>
</body>
</html>
