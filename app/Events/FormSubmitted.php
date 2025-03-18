<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class FormSubmitted implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $name, $message;

    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new Channel('form-submissions');
    }

    public function broadcastAs()
    {
        return 'newSubmission';
    }
}
