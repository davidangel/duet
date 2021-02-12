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

  <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#ffffff">

  @livewireStyles
</head>

<body class="font-sans antialiased">
  <x-jet-banner />

  <div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')
    <div class="mt-16"></div>

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main class="pb-10">
      {{ $slot }}
    </main>
  </div>

  @stack('modals')

  <!-- Scripts -->
  @livewireScripts
  <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
