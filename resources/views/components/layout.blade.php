<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Kos Kosan</title>
</head>

<body class="h-full bg-gray-100">
    <x-navbar />
    <div class="min-h-full">
        {{ $slot }}
    </div>
</body>

</html>
