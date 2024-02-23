@extends("layouts.main-layout")

@section("content")
    <section class="px-8 md:px-16 xl:px-64 pt-8 pb-16">
        <div class="pb-4 mb-4 border-b flex flex-wrap justify-between">
            <h1 class="text-4xl">{{ $article->title }}</h1>
            <p class="text-gray-500 mb-4">{{ $article->created_at }}</p>
        </div>

        <p>{!! $article->content !!}</p>
    </section>
@endsection
