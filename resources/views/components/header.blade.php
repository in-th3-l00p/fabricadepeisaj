<header
    class="py-10 px-8 sm:px-16 xl:px-60 flex flex-col xl:flex-row xl:justify-between items-center bg-white relative z-50"
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

    <nav class="hidden xl:flex gap-4">
        <x-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-header-link>

        <x-header-link :route="route('partners')">
            {{ __("Parteneri") }}
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

    <nav style="display: none;" @class([
        "xl:hidden",
        "absolute bottom-0 left-0 translate-y-full",
        "bg-white w-full flex-col mt-8 responsive-navbar"
    ]) id="responsive-nav">
        <x-responsive-header-link :route="route('about')">
            {{ __("Despre noi") }}
        </x-responsive-header-link>

        <x-responsive-header-link :route="route('partners')">
            {{ __("Parteneri") }}
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

    <div class="bg-white absolute top-0 left-0 w-full h-full -z-10"></div>
</header>
@vite(["resources/js/header.js", "resources/css/header.css"])
