<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - TugasKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen flex flex-col">
    @if (request('username'))
        <x-navbar :username="request('username')" />
    @endif

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>