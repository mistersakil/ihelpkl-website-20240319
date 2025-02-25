<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'country_id' => 'required|exists:countries,id',
            'mobile_number' => 'required|string|max:20',
            'product_id' => 'nullable|exists:products,id',
            'message' => 'required|string',
        ]);

        // Store the demo request
        DemoRequest::create($validated);

        return redirect()->route('demo.request.success');
    }
}
