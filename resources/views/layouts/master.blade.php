<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Online Learning - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="relative max-w-screen min-h-screen flex bg-gradient-to-l from-0% from-blue-100 via-40% via-blue-300/10 to-85% to-neutral-50/30 font-inter">
        @include('includes.sidebar')
        <main class="p-4 grow">
            <div class="w-full h-full flex flex-col bg-white drop-shadow-xl rounded-xl">
                <header class="w-full py-4 px-8 border-b flex flex-col">
                    <h1 class="text-lg font-bold text-blue-600">{{ $title }}</h1>
                    <p class="text-xs text-blue-950 opacity-50">{{ $description }}</p>
                </header>
                @yield('content')
            </div>
        </main>
        @if(session()->has('success'))
            <div class="alert alert-success">
                <p class="text-green-600 text-base font-bold">Success!</p>
                <p class="font-semibold opacity-50">{{ session()->get('success' )}}</p>
            </div>
        @endif
    @yield('dialogs')
    </div>
    @yield('scripts')
</body>
</html>