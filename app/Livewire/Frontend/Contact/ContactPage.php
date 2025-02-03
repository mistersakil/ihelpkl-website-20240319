<?php

namespace App\Livewire\Frontend\Contact;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ContactPage extends Component
{
    public string $metaTitle = 'contact us';
    public string $metaDescription = 'contact us';
    public string $module = 'contact';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Contact Us')]
    public function render(): View
    {
        return view('livewire.frontend.contact.contact-page');
    }
}