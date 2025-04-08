<html>
    <head>
        <title>Laravel PrelineUI Starter Kit | Home</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <x-partials.header></x-partials.header>
        <x-partials.sidebar></x-partials.sidebar>
        <!-- Content -->
        <div class="w-full lg:ps-64">
            <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                {{ $slot }}
            </div>
        </div>
        <!-- End Content -->
        <!-- ========== END MAIN CONTENT ========== -->
    </body>
</html>
