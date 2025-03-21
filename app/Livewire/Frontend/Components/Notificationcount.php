<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Notificationcount extends Component
{
    public $submissionCount = 0;

    public function __construct($something = null)
    {
        $this->submissionCount++;
        // dd($something);efvef
    }

    #[On('form-submitted')]
    public function render()
    {
        return view('livewire.frontend.components.notificationcount');
    }
}
