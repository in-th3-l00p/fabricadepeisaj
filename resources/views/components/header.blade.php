<header class="py-10 px-8 sm:px-16 xl:px-60 flex justify-between items-center">
    <a
        href="{{ route('home') }}"
        class="text-xl flex items-center gap-2"
    >
        <h2
            class="text-4xl text-green-800 font-bold"
            style="font-family: 'Nunito', sans-serif;"
        >
            Fabrica de<br><span
                class="text-cyan-700"
                style="font-family: 'Nunito', sans-serif;"
            >Peisaj</span>
        </h2>
    </a>

    <nav class="hidden xl:flex gap-4 md:gap-8">
        <x-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-header-link>

        <x-header-link :route="route('home')">
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

