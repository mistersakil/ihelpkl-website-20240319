<?php

namespace App\Livewire\Frontend\Others;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RequestDemoPage extends Component
{
    ## Component props
    public string $metaTitle = 'request demo';
    public string $module = 'demo';


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.others.request-demo-page');
    }
}










// namespace App\Livewire\Frontend\Others;

// use Livewire\Component;
// use App\Models\DemoRequest;
// use Illuminate\Contracts\View\View;

// class RequestDemoPage extends Component
// {

//     ## Component props
//     public string $metaTitle = 'request demo';
//     public string $module = 'demo';

//     public $name;
//     public $email;
//     public $country_id;
//     public $mobile_number;
//     public $product_id;
//     public $message;

//     public function submitDemoRequest()
//     {
//         // Validate the inputs
//         $validatedData = $this->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email',
//             'country_id' => 'required|exists:countries,id',
//             'mobile_number' => 'required|string|max:15',
//             'product_id' => 'required|exists:products,id',
//             'message' => 'required|string',
//         ]);

//         DemoRequest::create($validatedData);

//         session()->flash('message', 'Demo request submitted successfully!');
//         return redirect()->route('web.request.demo');
//     }

//     public function render(): view
//     {
//         return view('livewire.frontend.others.request-demo-page');
//     }
// }
