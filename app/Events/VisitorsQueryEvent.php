<?php

namespace App\Events;

use App\Models\Lead;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

/**
 * VisitorsQueryEvent event
 * 
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class VisitorsQueryEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $count;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        $this->count = Lead::count();
    }

    /**
     * Get the channels the event should broadcast on
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('visitorsQueryChannel')
        ];
    }

    /**
     * The event's broadcast name
     * 
     * @return string
     */
    public function broadcastAs(): String
    {
        return 'createLeadByVisitorsQueryEvent';
    }
}
