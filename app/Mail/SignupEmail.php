<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignupEmail extends Mailable
{
    use Queueable, SerializesModels;
    public  $subject;
    public  $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$content)
    {
        //
        //$this->signup_mail_data = $data;
        $this->subject = $subject;
        $this->content=$content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from('get.jbs.24.365@gmail.com','Job recruiter')->subject('Welcome new user!')->view('mail.signupEmail',['mail_data'=>$this->signup_mail_data]);
        return $this->view('mymail')->subject($this->subject);
    }
}
