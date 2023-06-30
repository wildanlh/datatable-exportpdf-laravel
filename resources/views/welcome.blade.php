<!doctype html>
<html>

<head>
    <title>CRUD & Export PDF | Wildan LH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen flex justify-center items-center">
        <div class="container mx-auto">
            <div class="md:shadow-lg p-10 rounded mx-10">
                <div class="flex justify-center">
                    <img src="{{ ('img/logo.svg') }}" class=" w-40">
                </div>
                <h2 class="text-5xl font-bold">Halo! &#128075;</h2>
                <h1 class="text-6xl font-bold text-[#007AFF]">
                    Selamat Datang
                </h1>
                <div class="flex justify-start gap-5 mt-10">
                    @if (Route::has('login'))
                    <div class="flex justify-between z-10">
                        @auth
                        <a href="{{ url('/home') }}" class="text-[#007AFF] font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-[#007AFF] font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-slate-500 font-medium mx-5 py-2 px-4 relative border border-slate-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-slate-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</body>

</html>