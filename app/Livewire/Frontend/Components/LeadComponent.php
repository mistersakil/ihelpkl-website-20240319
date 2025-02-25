<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class LeadComponent extends Component
{
    public $name;
    public $email;
    public $country_id;
    public $mobile_number;
    public $product_id;
    public $message;
    public $countries;
    public $dataList;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'country_id' => 'required|exists:countries,id',
        'mobile_number' => 'required|string',
        'product_id' => 'required|exists:products,id',
        'message' => 'required|string',
    ];

    public function mount()
    {
        // Load countries and products (this could be fetched from the database)
        // $this->countries = \App\Models\Country::all(); // Adjust the model if needed
        // $this->dataList = \App\Models\Product::pluck('name', 'id'); // Adjust the model if needed
    }

    public function submitForm()
    {
        $this->validate(); // Validate the form data

        // Create the lead
        Lead::create([
            'name' => $this->name,
            'email' => $this->email,
            'country_id' => $this->country_id,
            'mobile_number' => $this->mobile_number,
            'product_id' => $this->product_id,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Your demo request has been submitted successfully!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.request-demo-section');
    }
}
