@php use Illuminate\Support\Facades\Date; @endphp
@extends("layouts.main-layout")

@section("content")
    <section @class([
        "bg-cyan-700 px-8 md:px-16 xl:px-64 py-8 md:py-48 mb-8 text-white",
        "flex flex-col gap-8 justify-center items-center",
        "md:flex-row md:justify-between relative"
    ])>
        <div class="md:absolute z-10">
            <p class="text-2xl md:text-4xl md:max-w-[400px] xl:max-w-[75%] mb-4">Fabrica de Peisaj este primul centru de
                excelență în înverzire urbană dezvoltat în România.</p>
            <img
                src="/icons/arrow-down.svg" alt="arrow"
                class="hidden md:block invert h-16 -translate-x-6"
            >
        </div>
        <img
            src="/images/wonderwoods-visual.webp" alt="wonderwoods"
            class="md:absolute md:h-[115%] right-0 brightness-[60%]"
        >
    </section>

    <section class="px-8 md:px-16 xl:px-64 py-16 grid grid-cols-1 md:grid-cols-2 gap-16">
        <div class="bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl mb-8">{{ __("Ultimele știri") }}</h2>
            <x-home.news-display
                title="lorem ipsum"
                description="lorem ipsum"
                :createdAt="Date::now()"
            />

            <x-home.news-display
                title="lorem ipsum"
                description="lorem ipsum"
                :createdAt="Date::now()"
            />

            <x-home.news-display
                title="lorem ipsum"
                description="lorem ipsum"
                :createdAt="Date::now()"
            />
        </div>

        <div class="bg-white p-8 rounded-md shadow-md flex flex-col justify-between self-start">
            <h2 class="text-2xl mb-8">{{ __("Urmărește-ne") }}</h2>
            <div class="flex justify-center items-center gap-8 md:gap-12 flex-grow flex-wrap">
                <x-home.social-button href="#" src="/icons/facebook.svg" alt="facebook" />
                <x-home.social-button href="#" src="/icons/instagram.svg" alt="instagram" />
                <x-home.social-button href="#" src="/icons/linkedin.svg" alt="linkedin" />
            </div>
        </div>
    </section>

    <section>
        <img
            src="/images/home_footer.webp"
            alt="home_footer"
            class="w-full h-64 object-cover brightness-75"
        >
    </section>
@endsection
