<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
    
        $newsletter = new newsletter();
        
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;

        
        $newsletter->save();

        return redirect()->back()->with('success', 'Record created successfully.');
    }
}
