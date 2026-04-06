<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#f9fafb] font-[Poppins] h-screen overflow-hidden">
    <div class="flex h-full">

        <!-- SIDEBAR -->
        <aside id="sidebar" class="fixed top-0 left-0 h-full w-72 bg-white border-r z-50
            transition-all duration-300 overflow-y-auto
            -translate-x-full md:translate-x-0 overflow-hidden">

            @include('components.sidebar')
        </aside>

        <!-- OVERLAY (mobile only) -->
        <div id="overlay" class="fixed inset-0 bg-black/40 z-40 hidden md:hidden">
        </div>

        <!-- CONTENT -->
        <div id="mainContent" class="flex-1 flex flex-col transition-all duration-300 md:ml-72">

            @include('components.navbar')

            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>


</html>