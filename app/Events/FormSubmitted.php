<?php

namespace App\Events;

use App\Models\Lead;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Support\Facades\Log;

class FormSubmitted implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $count;

    public function __construct()
    {
        $this->count = Lead::count();
        Log::info(json_encode($this->count));
        // dump('Hello from FormSubmitted');
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
