<header class="py-10 px-8 sm:px-16 xl:px-60 flex justify-between items-center bg-white">
    <a
        href="{{ route('home') }}"
        class="text-xl flex items-center gap-2"
    >
        <img src="/logo.jpeg" alt="logo" class="h-16">
    </a>

    <nav class="hidden xl:flex gap-4 md:gap-8">
        <x-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-header-link>

        <x-header-link :route="route('inspiration')">
            {{ __("Inspirație") }}
        </x-header-link>

        <x-header-link :route="route('home')">
            {{ __("Noutăți") }}
        </x-header-link>

        <x-header-link :route="route('home')">
            {{ __("Contact") }}
        </x-header-link>
    </nav>
</header>

