<footer class="bg-cyan py-8 px-8 sm:px-16 xl:px-60 text-white">
    <div class="flex justify-center mb-8">
        <h2 class="text-2xl text-right">{{ env("APP_NAME") }}</h2>
        <div class="min-h-full p-[1px] bg-white mx-4"></div>
        <ul class="flex flex-col gap-2 list-disc">
            <a href="{{ route("about") }}" class="text-white hover:underline">{{ __("Despre noi") }}</a>
            <a href="{{ route("inspiration") }}" class="text-white hover:underline">{{ __("Inspirație") }}</a>
            <a href="{{ route("news.index") }}" class="text-white hover:underline">{{ __("Noutați") }}</a>
            <a href="{{ route("contact") }}" class="text-white hover:underline">{{ __("Contact") }}</a>
        </ul>
    </div>

    <p class="text-center">Toate drepturile sunt rezervate ©</p>
</footer>
