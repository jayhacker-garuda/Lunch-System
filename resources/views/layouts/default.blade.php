<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="bg-teal-500 h-screen antialiased leading-none font-sans overflow-y-none">

    <header class="bg-teal-500 shadow w-full h-20 z-10 fixed top-0">
        <nav class="px-4 p-4">
           
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div>

                    </div>
                    <div class="pl-5 text-xl font-black ">

                        @auth
                            <a class="text-teal-400 hover:text-teal-100 duration-300" href="{{ route('dashboard.index') }}">Dashboard</a>
                        @if(Auth::user()->user_type === "sham-don")
                            <a class="text-teal-400 hover:text-teal-100 duration-300" href="{{ route('admin.index') }}">Admin-Panel</a>
                            <a class="text-teal-400 hover:text-teal-100 duration-300" href="{{ route('order.index') }}">Orders</a>
                        @endif
                        @endauth
                    </div>
                </div>
                <div >
                    @auth
                        <p class="text-sm font-black"><span class="text-teal-200">{{ Auth::user()->user_type }}</span>|{{ Auth::user()->name }}</p>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="bg-teal-600 p-2 rounded hover:bg-teal-700 duration-300">
                                LOGOUT
                            </button>
                        </form>
                    @else

                    <a class="text-teal-400 text-xl font-black hover:text-teal-100 duration-300" href="{{ route('auth.loginForm') }}">Login</a>
                    <a class="text-teal-400 text-xl font-black hover:text-teal-100 duration-300" href="{{ route('auth.registerForm') }}">Register</a>
                    @endauth
                </div>
            </div> 
            {{-- <div class="flex justify-end">
                <ul class="text-xl font-black">

                    

                </ul>
            </div> --}}
        </nav>
    </header>
    
        <div id="app">
            @yield('content')
        </div>

    <footer class="fixed bottom-0 z-1 mx-12">
        <span>Sham Don | 🤘🏾💀🤘🏾</span>
    </footer>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@yield('js')
</body>
</html>
