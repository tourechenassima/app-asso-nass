<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Ruwudu:wght@500&family=Scheherazade+New:wght@600&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="font-family: 'Scheherazade New', serif;" class="content-center"  >
    {{-- <h1 class="rounded-full text-4xl backdrop-blur-3xl bg-green/30 text-green-700  font-bold text-center p-6" >الجمهورية الجزائرية الديمقراطية الشعبية</h1>      --}}
    
        <div class="min-h-screen bg-white ">
            <div class="h-80  bg-gray-50  bg-[url('..\views\images\Banner-ar.png')] bg-cover  ">
            
            </div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-slate-600 shadow">
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
        <footer class="flex items-center justify-center bg-slate-200  pt-10 pb-3   ">
        <h6 class="text-sm mx-10">دائرة ثنية العابد</h6>

       <h6 class="text-sm" >مطور من طرف <span class="rtl">نسيمة طورش</span></h6>

        </footer>
        <script type="module" src="{{ mix('resources/js/app.js') }}"></script>

    </body>
    
</html>
