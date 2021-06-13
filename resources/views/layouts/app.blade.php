<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            @livewire('navigation-menu')

            {{-- @livewire('navigation') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif         

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        @include('sweetalert::alert')       

        <script type="text/javascript">
            $(document).ready(function () {
                $('#closedAplication').click(function(e) {          
                    Swal.fire({
                        title: '¿Deseas cerrar sesión?',                    
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Cancelar',
                        confirmButtonText: 'Sí, salir.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Sesión finalizada!',
                                'Muchas gracias, por visitarnos!!!',
                                'success'
                            )
                            document.getElementById('logout-form').submit();
                        }
                    });
                });

                $('#finishTransaction').click(function(e) {          
                    Swal.fire({
                        title: '¿Deseas cerrar sesión?',                    
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Cancelar',
                        confirmButtonText: 'Sí, salir.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Sesión finalizada!',
                                'Muchas gracias, por visitarnos!!!',
                                'success'
                            )
                            document.getElementById('logout-form').submit();
                        }
                    });
                });
            });
        </script>   

        @livewireScripts        
    </body>
</html>
