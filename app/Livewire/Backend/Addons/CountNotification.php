<?php

namespace App\Livewire\Backend\Addons;

use Livewire\Attributes\On;
use App\Livewire\Backend\BackendComponent;


class CountNotification extends BackendComponent
{
    public $submissionCount = 0;

    // #[On('form-submitted')]
    // public function incrementCounter()
    // {
    //     $this->submissionCount += 1;
    //     dd("Number incremeneted");
    // }

    public function incrementCounter()
    {
        $this->submissionCount += 1;
    }

    public function render()
    {
        return view('livewire.backend.addons.count-notification');
    }
}
