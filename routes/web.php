<?php

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::view("/despre-noi", "about")->name("about");
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

    ContactSubmission::create($data);

    return redirect()->route("contact")
        ->with("success", "Multumim pentru mesaj! O sa revenim in cel mai scurt timp posibil!");
})->name("contact.submit");


