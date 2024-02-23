@extends("layouts.main-layout")

@section("content")
    <section class="px-8 md:px-16 xl:px-64 pt-8 pb-16">
        <div class="pb-4 mb-4 border-b">
            <h1 class="text-4xl">{{ __("Noutăți") }}</h1>
        </div>

        @forelse ($articles as $article)
            <a
                href="{{ route("news.show", [ "noutati" => $article ]) }}"
                @class([
                    "p-8 bg-white rounded-lg flex flex-wrap justify-between shadow-lg mb-8",
                    "hover:bg-green hover:text-white hover:shadow-xl hover:scale-105 transition-all"
                ])
            >
                <h2 class="text-xl font-semibold max-w-[60%]">{{ $article->title }}</h2>
                <span>
                    <p>{{ __("Publicat pe data de: ") . $article->created_at }}</p>
                </span>
            </a>
        @empty
            <p class="py-8 text-center">{{ __("Nu a fost publicată nicio știre") }}</p>
        @endforelse

        {{ $articles->links() }}
    </section>
@endsection
