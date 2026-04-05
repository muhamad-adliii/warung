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

<body class="bg-[#f9fafb] font-[Poppins] overflow-hidden h-screen">
    <div class="flex h-full">
        <!-- sidebar -->
        <aside id="sidebar" class="top-0 left-0 h-full w-72 bg-white z-50 transform transition-all duration-300
           -translate-x-full lg:translate-x-0 overflow-y-auto border-r border-gray-400 lg:72">
            @include('components.sidebar')
        </aside>
        <!-- overlay -->
        <div id="overlay" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden">
        </div>
        <!-- navbar & content -->
        <div class="flex-1 flex flex-col">
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