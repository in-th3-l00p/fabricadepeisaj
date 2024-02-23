<?php

use App\Http\Controllers\NewsArticleController;
use App\Jobs\SendContactSubmissionMail;
use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "articles" => \App\Models\NewsArticle::query()
            ->latest()
            ->paginate(3)
    ]);
})->name("home");

Route::view("/despre-noi", "about")->name("about");
Route::view("/parteneri", "partners")->name("partners");
Route::view("/inspiratie", "inspiration")->name("inspiration");
Route::view("/contact", "contact")->name("contact");
Route::post("/contact", function (Request $request) {
    $data = $request->validate([
        "name" => "required|min:3|max:255|alpha",
        "email" => "required|email|max:255",
        "message" => "required|min:1|max:3000"
    ], [
        "name.required" => "Numele este obligatoriu",
        "name.min" => "Numele trebuie sa aiba minim 3 caractere",
        "name.max" => "Numele trebuie sa aiba maxim 255 caractere",
        "name.alpha" => "Numele trebuie sa contina doar litere",
        "email.required" => "Emailul este obligatoriu",
        "email.email" => "Emailul nu este valid",
        "email.max" => "Emailul trebuie sa aiba maxim 255 caractere",
        "message.required" => "Mesajul este obligatoriu",
        "message.min" => "Mesajul trebuie sa aiba minim 1 caracter",
        "message.max" => "Mesajul trebuie sa aiba maxim 3000 caractere"
    ]);

    $submission = ContactSubmission::create($data);
    Log::info("Contact submission received: " . $submission->id);
    SendContactSubmissionMail::dispatch($submission);

    return redirect()->route("contact")
        ->with("success", "Multumim pentru mesaj! O sa revenim in cel mai scurt timp posibil!");
})->name("contact.submit");

Route::resource("noutati", NewsArticleController::class)
    ->only(["index", "show"])
    ->names("news");

