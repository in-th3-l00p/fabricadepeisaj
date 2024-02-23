<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ContactSubmission $submission
    ) { }

    public function envelope(): Envelope {
        return new Envelope(
            subject: "Completare Formular Contact",
        );
    }

    public function content(): Content {
        return new Content(
            view: 'mail.contact-submission',
        );
    }

    public function attachments(): array {
        return [];
    }
}
