<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\NewsArticle::factory()->create([
            "title" => "Parteneriat AsoP București cu IKEA și FEPRA",
            "content" => <<<EOD
                <p class="mb-4">
                    Filiala de la București a
                    <a class="post-href" href="https://asop.org.ro/">Asociației Peisagiștilor din România - AsoP</a>
                    a demarat o colaborare cu doi noi parteneri -
                    <a class="post-href" href="https://www.ikea.com/ro/ro/this-is-ikea/">IKEA</a> și
                    <a class="post-href" href="https://fepra.ro/despre-noi/">FEPRA</a>,
                    pentru a promova și desfășura activități de gestionare durabilă și
                    pentru a susține biodiversitatea urbană.
                    </p>
                <p class="mb-8">
                    În acest context, în septembrie 2023, a avut loc o activitate în aer liber în
                    Grădina Bio IKEA din București, la care au participat profesioniști, elevi de la
                    <a class="post-href" href="https://www.cezar-nicolau.ro/">Liceul Tehnologic ”Cezar Nicolau”</a>,
                    studenți ai
                    <a class="post-href" href="https://horticultura-bucuresti.ro/">
                        Specializării Peisagistică  a Facultății de Horticultură din cadrul Universității de Științe Agronomice și Medicină Veterinară din București
                    </a>, precum și reprezentanți IKEA și FEPRA.
                </p>
                <div class="flex gap-8 flex-wrap mb-8">
                    <p>#inverzireurbană</p>
                    <p>#platformapentruinverzireurbana</p>
                    <p>#biodiversitate</p>
                    <p>#gradini</p>
                    <p>#sustenabilitate</p>
                </div>
                <div class="flex gap-8 flex-wrap justify-center items-center">
                    <img src="/news/demo/384421637_772230498245063_7939380551135335534_n.jpg" alt="event pictures grid">
                    <img src="/news/demo/384447773_772230508245062_974998895695243576_n.jpg" alt="event pictures grid">
                </div>
            EOD,
            "created_at" => now()
        ]);

        \App\Models\NewsArticle::factory()->create([
            "title" => "EPLUG România menționat în reperul metodologic pentru implementarea curriculumului clasei a XI-a (ISCED 3) în anul școlar 2023-2024",
            "content" => <<<EOD
                <p class="mb-4">
                    În acest vară, Cristina Petre-Ghiță, Inspector General Adjunct Școlar la
                    Inspectoratul Școlar Județean Ilfov și unul dintre membrii echipei
                    EPLUG România, a contribuit la dezvoltarea reperelor metodologice
                    pentru implementarea curriculumului clasei a XI-a (ISCED 3) în anul școlar 2023-2024.
                </p>
                <p class="mb-8">
                    În cadrul acestui document cadru, disponibil la nivel național,
                    proiectul <a class="post-href" href="https://platformurbangreening.eu/">EPLUG</a>
                    a fost menționat ca model de bună practică în
                    contextul dezvoltării durabile și a înverzirii urbane, precum și
                    pentru introducerea unei noi calificări - cea de grădinar urban -
                    prin intermediul proiectului nostru.
                </p>
                <div class="flex gap-8 flex-wrap justify-center items-center">
                    <img src="/news/demo/382724138_769615601839886_1174945435947766240_n.jpg" alt="proof">
                </div>
            EOD,
            "created_at" => now()
        ]);
    }
}
