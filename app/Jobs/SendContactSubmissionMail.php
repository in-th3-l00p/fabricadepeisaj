<?php

namespace App\Jobs;

use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendContactSubmissionMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public ContactSubmission $submission
    ) { }

    public function handle(): void {
        if (config("contact.email") !== null) {
            Mail::to(config("contact.email"))
                ->send(new ContactSubmissionMail($this->submission));
            Log::info("Contact submission mail sent");
        } else
            Log::alert("Set an email address for sending contact submission emails");
    }
}
