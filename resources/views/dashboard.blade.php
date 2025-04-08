<html>
    <head>
        <title>Laravel PrelineUI Starter Kit | Dashboard</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <main id="content" class="w-full max-w-md mx-auto p-6">
            {{ $slot }}
        </main>
    </body>
</html>



