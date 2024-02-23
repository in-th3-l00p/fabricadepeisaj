@extends("layouts.main-layout")

@section("content")
    <x-container>
        <div class="bg-white p-8 rounded-lg shadow-lg mb-16">
            <h2 class="text-2xl mb-8">{{ __("Contact") }}</h2>

            @if (session("success"))
                <div class="bg-green text-white p-4 rounded-lg mb-4">
                    {{ session("success") }}
                </div>
            @endif

            <form action="{{ route("contact.submit") }}" method="post" class="flex flex-col gap-4">
                @csrf

                <label for="name" hidden>{{ __("Nume") }}</label>
                <input
                    type="text"
                    name="name"
                    placeholder="{{ __("Nume") }}"
                    class="p-4 border-2 border-zinc-400 rounded-md"
                >
                @error("name")
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

                <label for="email" hidden>{{ __("Email") }}</label>
                <input
                    type="email"
                    name="email"
                    placeholder="{{ __("Email") }}"
                    class="p-4 border-2 border-zinc-400 rounded-md"
                >
                @error("email")
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

                <label for="message" hidden>{{ __("Mesaj") }}</label>
                <textarea
                    name="message"
                    placeholder="{{ __("Mesaj") }}"
                    class="p-4 border-2 border-zinc-400 rounded-md"
                ></textarea>
                @error("message")
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn">
                    {{ __("Trimite") }}
                </button>
            </form>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl mb-8">{{ __("Adresă") }}</h2>
            <p>{{ __("Centru de pregătire Liceului Tehnologic ”Cezar Nicolau”: Bulevardul I. C. Brătianu nr. 1B, Brănești, Județul Ilfov") }}</p>
        </div>
    </x-container>
@endsection
