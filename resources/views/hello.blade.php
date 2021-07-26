<!DOCTYPE html>
<html>
    <link rel="stylesheet" href='badcss.css'>
    <head>
        <title>Home Page</title>
    </head>
<body background ="hello/background.jpg">
    <header>
        <nav>
            <a href="/">Homepage</a> |
            <a href="https://vk.com/mustard_p">Contact</a> |
            <a href="https://github.com/MustardP">Github</a>
        </nav>
    </header>
    <div>
        <h1>Hi, I'm Maria. I learn to make sites.</h1><img src ="hello/p.jpg" border = "3" width="50" height="80" >
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </div>
    <div>
        <ol>
            <li><a href = "/">Home page</a></li>
        </ol>
    </div>
    <footer>
        <a href="https://ru.freepik.com/photos/background">Background фото создан(а) denamorado - ru.freepik.com</a>
    </footer>
</body>
</html>
