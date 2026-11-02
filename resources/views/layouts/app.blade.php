<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'portofolio')</title>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-neutral-200">
<div x-data="{ mobileSidebarOpen: false }">
    <div class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col lg:ps-64">
        
        <nav class="fixed start-0 top-0 bottom-0 z-50 flex h-full w-full -translate-x-full flex-col border-neutral-600 bg-white transition-transform duration-300 ease-out lg:w-64 lg:translate-x-0 lg:border-r-2" x-bind:class="{ 'translate-x-0': mobileSidebarOpen }">
            <div class="flex h-16 items-center justify-between border-b border-neutral-600 px-5">
                <a href="/" class="flex items-center gap-2 text-lg font-bold text-neutral-800">
                    <img src="{{ asset(View::yieldContent('logo_image', 'img/3.jpeg')) }}" alt="logo" class="h-10 w-auto">portofolio
                </a>
                <button type="button" x-on:click="mobileSidebarOpen = false" class="text-2xl font-bold text-neutral-800 lg:hidden">&times;</button>
            </div>
            <div class="flex-1 overflow-y-auto py-4">
                <nav class="space-y-0">
                    <a href="/" @class(['block border-y px-5 py-3 font-semibold', 'border-neutral-600 bg-neutral-300' => request()->is('/'), 'border-transparent hover:border-neutral-600 hover:bg-neutral-200' => !request()->is('/')])>home</a>
                    <a href="/projects" @class(['block border-y px-5 py-3 font-semibold', 'border-neutral-600 bg-neutral-300' => request()->is('projects'), 'border-transparent hover:border-neutral-600 hover:bg-neutral-200' => !request()->is('projects')])>projects</a>
                    <a href="/about" @class(['block border-y px-5 py-3 font-semibold', 'border-neutral-600 bg-neutral-300' => request()->is('about'), 'border-transparent hover:border-neutral-600 hover:bg-neutral-200' => !request()->is('about')])>about</a>
                    <a href="/blog" @class(['block border-y px-5 py-3 font-semibold', 'border-neutral-600 bg-neutral-300' => request()->is('blog'), 'border-transparent hover:border-neutral-600 hover:bg-neutral-200' => !request()->is('blog')])>blog</a>
                    <a href="/contact" @class(['block border-y px-5 py-3 font-semibold', 'border-neutral-600 bg-neutral-300' => request()->is('contact'), 'border-transparent hover:border-neutral-600 hover:bg-neutral-200' => !request()->is('contact')])>contact</a>
                </nav>
            </div>
            <div class="border-t border-neutral-600 p-5">
                <img src="{{ asset(View::yieldContent('bottom_left_image', 'img/5.jpeg')) }}" alt="bottom left" class="h-20 w-auto">
            </div>
        </nav>

        <header class="fixed inset-x-0 top-0 z-30 flex h-16 items-center border-b border-neutral-600 bg-white lg:ps-64">
            <div class="flex w-full items-center px-4">
                <button type="button" x-on:click="mobileSidebarOpen = true" class="text-2xl font-bold text-neutral-800 lg:hidden">&#9776;</button>
                <div class="ms-auto">
                    <img src="{{ asset(View::yieldContent('top_right_image', 'img/4.jpeg')) }}" alt="top right" class="h-12 w-auto">
                </div>
            </div>
        </header>

        <main class="flex flex-auto flex-col bg-white/50 pt-16">
            @yield('content')
        </main>

        <footer class="flex items-center border-t border-neutral-600 bg-white">
            <div class="mx-auto flex w-full max-w-7xl flex-col gap-2 px-4 py-6 text-center text-sm font-medium text-neutral-600 md:flex-row md:justify-between md:items-center md:text-start">
                <div>&copy; <?= date('Y') ?></div>
                <div>
                    <img src="{{ asset(View::yieldContent('bottom_right_image', 'img/6.jpeg')) }}" alt="bottom right" class="h-16 w-auto mx-auto md:mx-0">
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>