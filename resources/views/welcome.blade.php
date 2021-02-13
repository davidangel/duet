<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <link rel="apple-touch-icon" href="/icons/apple-icon-180.png">

  <meta name="apple-mobile-web-app-capable" content="yes">

  <link rel="apple-touch-startup-image" href="/icons/apple-splash-2048-2732.jpg"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1668-2388.jpg"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1536-2048.jpg"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1668-2224.jpg"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1620-2160.jpg"
    media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1284-2778.jpg"
    media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1170-2532.jpg"
    media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1125-2436.jpg"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1242-2688.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-828-1792.jpg"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-1242-2208.jpg"
    media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-750-1334.jpg"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="/icons/apple-splash-640-1136.jpg"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

  <style>
    body {
      font-family: 'Nunito';
    }

  </style>
</head>

<body class="antialiased">
  <div class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
      <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex items-center justify-center h-full text-6xl">
        <x-jet-application-logo class="block w-auto h-1/2" />
      </div>
    </div>
  </div>
</body>

</html>
