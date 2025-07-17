<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendUserStatusEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $status;
    public $password;

    public function __construct(User $user, $status, $password = null)
    {
        $this->user = $user;
        $this->status = $status;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Your Account Status: ' . ucfirst($this->status))
            ->markdown('emails.user.status-email');
    }
}
