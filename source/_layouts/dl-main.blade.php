<!DOCTYPE html>
<html {{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">

        @yield('head')
      </head>
      <body class="text-gray-900 font-sans antialiased">
        @yield('body')
        <script defer src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>
      </body>
</html>
