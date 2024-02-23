<a
    href="{{ $href }}"
    @class([
        "flex flex-col gap-4 items-center max-w-[500px] mx-auto",
        "bg-white p-8 rounded-lg shadow-md hover:bg-zinc-50 hover:shadow-lg transition-all"
    ])
>
    <img
        src="{{ $image }}"
        alt="{{ $alt }}"
        class="w-full mb-4"
    >

    <h2 class="text-xl font-semibold">{{ $title }}</h2>
    <div>{{ $slot  }}</div>
</a>
