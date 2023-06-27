<?php

namespace Riyad\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public string $message;
    public string $name;

    /**
     * Create a new message instance.
     */
    public function __construct($message,$name)
    {
        $this->message = $message;
        $this->name= $name ;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mailable',
//            to: ['riadalkhaldy833@gmail.com'],
            to: [config('contact.send_email_to')],
//            from: 'riadalkhaldy770@gmail.com',
            from: config('contact.send_email_from'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'contact::contact.email',
            with: ['name'=>$this->name,'message'=>$this->message],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
