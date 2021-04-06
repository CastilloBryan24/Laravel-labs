<?php

namespace App\Mail;

use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $donnees;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datas)
    {
        $subject = Subject::find($datas->subject_id);
        $this->donnees = $datas;
        $this->subject = $subject->name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->donnees->mail)->view('mail')->subject($this->subject)->with(['demande' => $this->donnees]);
    }
}
