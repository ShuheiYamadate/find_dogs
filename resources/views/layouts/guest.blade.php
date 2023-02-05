<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans text-gray-900 antialiased">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body> --}}

    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{-- ここから貼り付けます --}}
            <div class="w-full container mx-auto p-6">
                <div class="w-full flex items-center justify-between">
                    <a href="{{route('top')}}">
                        <img src="{{asset('logo/logo.png')}}" style="max-height:50px">
                    </a>
                    <div class="flex w-1/2 justify-end content-center">
                        {{-- ログイン・登録部分 --}}
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/post') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">HOME</a>
                            @else
                                <a href="{{ route('login') }}" class=" text-gray-700 dark:text-gray-500 underline font-bold text-base">ログイン</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4  text-gray-700 dark:text-gray-500 underline font-bold text-base">登録</a>
                            @endif
                            @endauth
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            {{-- ここまで貼り付けた箇所 --}}
            {{ $slot }}
        </div>
    </body>
</html>
