<header
    class="py-10 px-8 sm:px-16 xl:px-60 flex flex-col xl:flex-row xl:justify-between items-center bg-white"
>
    <div class="flex justify-between w-full xl:max-w-fit">
        <a
            href="{{ route('home') }}"
            class="text-xl flex items-center gap-2"
        >
            <img src="/logo.jpeg" alt="logo" class="h-16">
        </a>

        <button type="button" id="responsive-nav-toggler">
            <img
                src="/static/icons/nav-icon.svg" alt="navbar toggler"
                class="w-12 h-12 p-2 xl:hidden rounded-md bg-white hover:bg-zinc-200 hover:shadow-xl transition-all"
            >
        </button>
    </div>

    <nav class="hidden xl:flex gap-4 md:gap-8">
        <x-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-header-link>

        <x-header-link :route="route('inspiration')">
            {{ __("Inspirație") }}
        </x-header-link>

        <x-header-link :route="route('news.index')">
            {{ __("Noutăți") }}
        </x-header-link>

        <x-header-link :route="route('contact')">
            {{ __("Contact") }}
        </x-header-link>
    </nav>

    <nav class="xl:hidden hidden flex flex-col mt-8" id="responsive-nav">
        <x-responsive-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-responsive-header-link>

        <x-responsive-header-link :route="route('inspiration')">
            {{ __("Inspirație") }}
        </x-responsive-header-link>

        <x-responsive-header-link :route="route('news.index')">
            {{ __("Noutăți") }}
        </x-responsive-header-link>

        <x-responsive-header-link :route="route('contact')">
            {{ __("Contact") }}
        </x-responsive-header-link>
    </nav>
</header>
@vite("resources/js/header.js")
