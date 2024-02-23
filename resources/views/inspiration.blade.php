@extends("layouts.main-layout")

@section("content")
    <div class="px-8 md:px-16 xl:px-64 py-8 relative overflow-hidden">
        <div class="pb-4 mb-4 border-b">
            <h1 class="text-4xl">{{ __("Inspirație") }}</h1>
        </div>

        <section class="mb-12">
            <h2 class="text-lg font-semibold mb-4">{{ __("Educație pentru biodiversitate") }}</h2>
            <p>{{ __("inspiration.first_text") }}</p>
        </section>

        <x-inspiration.edition-container>
            <x-inspiration.edition-title
                :title="__('Ediția') . ' 1'" :duration="'2021-2022'"
            />
            <p>{{ __("inspiration.edition_1") }}</p>
        </x-inspiration.edition-container>

        <x-inspiration.edition-container>
            <x-inspiration.edition-title
                :title="__('Ediția') . ' 2'" :duration="'2022-2023'"
            />

            <div>
                <p>{{ __("inspiration.edition_2.first") }}</p>
                <ul class="px-4 list-disc mb-4">
                    <li>{{ __("inspiration.edition_2.first_1") }}</li>
                    <li>{{ __("inspiration.edition_2.first_2") }}</li>
                    <li>{{ __("inspiration.edition_2.first_3") }}</li>
                </ul>

                <p>{{ __("inspiration.edition_2.second") }}</p>
                <ul class="px-4 list-disc mb-4">
                    <li>{{ __("inspiration.edition_2.second_1") }}</li>
                    <li>{{ __("inspiration.edition_2.second_2") }}</li>
                    <li>{{ __("inspiration.edition_2.second_3") }}</li>
                    <li>{{ __("inspiration.edition_2.second_4") }}</li>
                    <li>{{ __("inspiration.edition_2.second_5") }}</li>
                </ul>
            </div>

            <p class="mb-8">{{ __("inspiration.edition_2.video") }}</p>

            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <iframe src="https://www.youtube.com/embed/Y1-e61gX4uM" class="w-full aspect-video"></iframe>
                <iframe src="https://www.youtube.com/embed/0T8DOJeMOD4" class="w-full aspect-video"></iframe>
                <iframe src="https://www.youtube.com/embed/LKS2pjt0sN4" class="w-full aspect-video"></iframe>
                <iframe src="https://www.youtube.com/embed/k61PBQ1rFgQ" class="w-full aspect-video"></iframe>
            </section>

            <div class="relative w-full bg-zinc-200 my-16 p-[1px] text-center">
                <span class="absolute -translate-y-1/2 text-4xl">&</span>
            </div>

            <section class="flex flex-wrap justify-center items-center gap-8 mb-8">
                <x-inspiration.document-preview
                    title="Ghid centralizator"
                    href="/static/inspiratie/Material_Centralizator.pdf"
                />

                <x-inspiration.document-preview
                    title="Anexe"
                    href="/static/inspiratie/Anexe.pdf"
                />

                <x-inspiration.document-preview
                    title="Dicționar de termeni agricoli"
                    href="/static/inspiratie/Dicționar de termeni agricoli.pdf"
                />

                <x-inspiration.document-preview
                    title="Catalog cu polenizatori"
                    href="/static/inspiratie/Catalog Polenizatori.pdf"
                />

                <x-inspiration.document-preview
                    title="Hoteluri pentru polenizatori"
                    href="/static/inspiratie/Hoteluri pentru polenizatori.pdf"
                />

                <x-inspiration.document-preview
                    title="Grădini pentru polenizatori"
                    href="/static/inspiratie/Grădini pentru polenizatori.pdf"
                />

                <x-inspiration.document-preview
                    title="Pereți verzi"
                    href="/static/inspiratie/Pereți_verzi.pdf"
                />
            </section>

            <section class="mb-8">
                <h2 class="text-xl md:text-2xl text-center font-semibold">{{ __("Sponsori") }}:</h2>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-8 items-center">
                        <img
                            src="/static/inspiratie/RZBR_logo.png" alt="Raiffeissen Bank"
                            class="text-white w-full max-w-[300px] mx-auto bg-white p-8 rounded-lg"
                        >
                        <img
                            src="/static/inspiratie/EPLUG_logo-300x70.png" alt="EPLUG"
                            class="text-white w-full max-w-[300px] mx-auto bg-white p-8 rounded-lg"
                        >
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl md:text-2xl text-center font-semibold">{{ __("Parteneri") }}:</h2>
                <div class="flex gap-8 pt-8 justify-center items-center">
                    <img
                        src="/static/inspiratie/Biodigy_logo.png" alt="Biodigy"
                        class="text-white w-full max-w-[300px] mx-auto bg-white p-8 rounded-lg"
                    >
                </div>
            </section>
        </x-inspiration.edition-container>

        <x-inspiration.edition-container>
            <x-inspiration.edition-title
                :title="__('Ediția') . ' 3'" :duration="'2023-2024'"
            />

            <p class="mb-8">{{ __("inspiration.edition_3.text") }}</p>

            <div class="mb-8">
                <h3 class="text-xl md:text-2xl font-semibold">{{ __("inspiration.edition_3.ikea.title") }}</h3>
                <p class="mb-4">{{ __("inspiration.edition_3.ikea.text") }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach ([
                        "DFG05510.jpg",
                        "DFG05542.jpg",
                        "DFG05604.jpg",
                        "DFG05631.jpg",
                        "DFG05662.jpg",
                        "DFG05686.jpg",
                        "DFG05696.jpg",
                        "DFG05738.jpg",
                        "DFG05790.jpg",
                        "DFG05921.jpg",
                        "DFG05929.jpg",
                        "DFG06150.jpg"
                    ] as $src)
                        <img
                            src="{{ "/static/inspiratie/ikea-grid/" . $src }}"
                            alt="ikea grid"
                            loading="lazy"
                        >
                    @endforeach
                </div>
            </div>

            <div>
                <h3 class="text-xl md:text-2xl font-semibold mb-4">{{ __("inspiration.edition_3.examples.title") }}</h3>

                <section class="grid grid-cols-1 lg:grid-cols-3 justify-center items-center gap-8 mb-4">
                    <x-inspiration.document-preview
                        :title="__('inspiration.edition_3.examples.1')"
                        href="/static/inspiratie/exemple/2023-06-30_EPLUG_Proven Practices_RO-1-LAN-NET_tradus.docx.pdf"
                    />

                    <x-inspiration.document-preview
                        :title="__('inspiration.edition_3.examples.2')"
                        href="/static/inspiratie/exemple/2023-06-30_EPLUG_Proven Practices_RO-2-Arboriculture-Training-Courses_tradus.docx.pdf"
                    />

                    <x-inspiration.document-preview
                        :title="__('inspiration.edition_3.examples.3')"
                        href="/static/inspiratie/exemple/2023-06-30_EPLUG_Proven Practices_RO-3-peisagisti[online]_tradus.docx.pdf"
                    />
                </section>
            </div>
        </x-inspiration.edition-container>
    </div>
@endsection
