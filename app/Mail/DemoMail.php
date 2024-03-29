<?php

namespace App\Mail;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public  $data ;
    public function __construct($data)
    {
        $this->data = $data;
    
    }

      public function build()
   {
       return $this->markdown('emails.sample')->
      subject(config('app.name').'','contact us')
           ->view('emails.sample');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address('abeir@example.com','abeir')
           
              
            );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

            return new Content(
                markdown:'emails.sample',
                with:[
                    $this->data,
                ]
           
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
