<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - EspecializaTi</title>
</head>
<body>
    <div class="flex flex-col items-center mt-24">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 p-2 text-white rounded">Logout</button>
        </form>
        @yield('content')
    </div>
</body>
</html>
