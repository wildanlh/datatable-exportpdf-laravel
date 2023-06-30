<!doctype html>
<html>

<head>
    <title>CRUD & Export PDF | Wildan LH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <nav class="px-2 sm:px-4 py-3 w-full z-50 top-0 left-0">
        <div class="max-w-7xl container flex flex-wrap items-center justify-between mx-auto">
            <div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ ('img/logo.svg') }}" style="width: 100px;">
                </a>
            </div>
            <div>
                @guest
                @else
                <a class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100 mr-5" href="{{ route('produk.index') }}">{{ __('Produk') }}</a>
                @endguest

                @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="text-[#007AFF] font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Log in</a>
                @endif

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-slate-500 font-medium py-2 px-4 relative border border-slate-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-slate-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">Register</a>
                @endif
                @else
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ Auth::user()->name }}
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="text-gray-700 block px-4 py-2 text-sm hover:bg-red-400 hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuButton = document.getElementById("menu-button");
            var dropdownMenu = document.querySelector(".absolute.right-0");

            dropdownMenu.style.display = "none"; // Sembunyikan dropdown saat pertama kali muncul

            menuButton.addEventListener("click", function() {
                if (dropdownMenu.style.display === "none") {
                    dropdownMenu.style.display = "block"; // Tampilkan dropdown saat diklik
                } else {
                    dropdownMenu.style.display = "none"; // Sembunyikan dropdown jika sudah ditampilkan
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>