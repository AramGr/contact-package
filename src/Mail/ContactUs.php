<?php

namespace Test\Contactus\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('a.h.grigorian@gmail.com')->view('contactus::emails.contact-mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'text' => $this->message,
            ])
            ->subject('New letter');
    }
}
