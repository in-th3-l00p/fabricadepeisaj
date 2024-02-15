@extends("layouts.main-layout")

@section("content")
    <section class="px-8 md:px-16 xl:px-64 py-8 relative overflow-hidden">
        <div class="pb-4 mb-4 border-b">
            <h1 class="text-4xl">{{ __("Despre noi") }}</h1>
        </div>

        <p>{{ __("about.main") }}</p>
        <ul class="p-4 list-disc mb-8">
            <li>{{ __("about.first_objective") }}</li>
            <li>{{ __("about.second_objective") }}</li>
            <li>{{ __("about.third_objective") }}</li>
            <li>{{ __("about.fourth_objective") }}</li>
            <li>{{ __("about.fifth_objective") }}</li>
            <li>{{ __("about.sixth_objective") }}</li>
        </ul>

        <video
            src="/videos/video.mp4"
            class="max-w-[800px] mx-auto"
            autoplay
        ></video>

        <div class="hidden absolute top-0 left-0 xl:flex flex-col w-[400px] -rotate-[30deg] -translate-x-16 -translate-y-16 -z-10 gap-4">
            <div class="bg-green-700 h-8"></div>
            <div class="bg-green-700 h-4"></div>
            <div class="bg-green-700 h-4"></div>
        </div>

        <div class="hidden absolute bottom-0 right-0 xl:flex flex-col w-[400px] -rotate-[30deg] translate-x-16 translate-y-16 -z-10 gap-4">
            <div class="bg-green-700 h-8"></div>
            <div class="bg-green-700 h-4"></div>
            <div class="bg-green-700 h-4"></div>
        </div>
    </section>
@endsection
