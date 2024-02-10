<!doctype html>
<html lang="en">
<head class="dark">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
	<title>Ice - {{ $title ?? 'Ice' }}</title>
	@vite('resources/css/app.css')
	@livewireStyles
</head>
<body class="dark:bg-new-black text-white flex flex-col flex-nowrap">
    <nav class="h-[54px] bg-new-black border-b border-accent z-100 fixed top-0 w-full">
        @livewire('navbar')
    </nav>

    <section class="fixed flex-1 flex w-full h-full top-[54px]">
        <aside class="left-0 w-[250px] border-r border-accent p-2 flex-shrink-0 overflow-y-auto">
            @livewire('sidebar')
        </aside>

        <main class="flex-1 p-4 border-r border-accent overflow-y-auto">
                @yield('content')
        </main>

        <aside class="right-0 w-[250px] overflow-y-auto flex-shrink-0 p-2">
        </aside>
    </section>
    @livewireScripts
</body>
</html>
