<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#f9fafb]">
    <div class="flex">
        <!-- sidebar -->
        <aside class="w-70 min-h-screen bg-[#ffffff] shadow-lg border-r">
            @include('components.sidebar')
        </aside>
        <!-- navbar & content -->
        <div class="flex-1 flex flex-col">
            @include('components.navbar')
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>