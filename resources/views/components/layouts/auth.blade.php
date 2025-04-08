<html>
    <head>
        <title>Laravel PrelineUI Starter Kit | Login</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <main id="content" class="w-full max-w-2xl mx-auto p-6">
            <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </body>
</html>



