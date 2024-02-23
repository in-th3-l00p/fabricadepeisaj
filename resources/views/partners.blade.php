@extends("layouts.main-layout")

@section("content")
    <x-container>
        <div class="pb-4 mb-8 border-b">
            <h1 class="text-4xl">{{ __("Parteneri") }}</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 justify-center items-start pb-16">
            <x-partners.partner
                image="/static/parteneri/worldskills.png"
                href="https://www.worldskills.ro/"
                :title="__('partners.worldskills.title')"
                :alt="__('partners.worldskills.title')"
            >
                <p>{{ __("partners.worldskills.text") }}</p>
            </x-partners.partner>

            <x-partners.partner
                image="/static/parteneri/ltcn.jpeg"
                href="https://www.cezar-nicolau.ro/"
                :title="__('partners.ltcn.title')"
                :alt="__('partners.ltcn.title')"
            >
                <p>{{ __("partners.ltcn.text") }}</p>
            </x-partners.partner>

            <x-partners.partner
                image="/static/parteneri/rpr.jpg"
                href="https://rpr.ro/"
                :title="__('partners.rpr.title')"
                :alt="__('partners.rpr.title')"
            >
                <p>{{ __("partners.rpr.text") }}</p>
            </x-partners.partner>

            <x-partners.partner
                image="/static/parteneri/asop.png"
                href="https://asop.org.ro/despre/misiune/"
                :title="__('partners.asop.title')"
                :alt="__('partners.asop.title')"
            >
                <p>{{ __("partners.asop.text") }}</p>
            </x-partners.partner>
        </div>
    </x-container>
@endsection
