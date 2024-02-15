@extends("layouts.main-layout")

@section("content")
    <section class="px-8 md:px-16 xl:px-64 py-16 grid grid-cols-1 md:grid-cols-2 gap-16">
        <div class="bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl mb-8">{{ __("Contact") }}</h2>
            <form action="{{ route("contact") }}" method="post" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="name" placeholder="{{ __("Nume") }}" class="p-4 border-2 border-zinc-400 rounded-md">
                <input type="email" name="email" placeholder="{{ __("Email") }}" class="p-4 border-2 border-zinc-400 rounded-md">
                <textarea name="message" placeholder="{{ __("Mesaj") }}" class="p-4 border-2 border-zinc-400 rounded-md"></textarea>
                <button type="submit" class="bg-green-400 text-white p-4 rounded-md">{{ __("Trimite") }}</button>
            </form>
        </div>
    </section>
@endsection
