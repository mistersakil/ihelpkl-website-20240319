<?php

namespace App\Events;

use App\Models\Lead;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class FormSubmitted implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $count;

    public function __construct()
    {
        $this->count = Lead::count();
    }

    public function broadcastOn()
    {
        return new Channel('form-submissions');
        // return ['my-channel'];
    }

    public function broadcastAs()
    {
        return 'newSubmission';
        // return 'my-event';
    }
}
