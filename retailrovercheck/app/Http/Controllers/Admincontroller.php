<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\contact;
use App\Models\newsletter;

class Admincontroller extends Controller
{
    public function user()
    {
        
        $users = User::where('usertype', '!=', 'admin')->get();
        return view('admin.pages.user.user', compact('users'));
    }


    public function order($id)
    {
        $users = User::findOrFail($id);


        $orders = Order::where('user_id', $id)->get();
        
        if(request()->expectsJson()) {
            // If the request expects JSON, return JSON response
            $orders = Order::findOrFail($id);
            return response()->json(['orders' => $orders]);
        } else {
            // If the request expects HTML, return the view
            return view('admin.pages.user.order', compact('users', 'orders'));
        }
    }


    public function showcontacts()
    {
        $contacts = Contact::all(); 

        return view('admin.pages.contact.contacts', compact('contacts'));
    }

    public function shownewsletter()
    {
        $newsletters = newsletter::all(); 

        return view('admin.pages.contact.newsletter', compact('newsletters'));
    }
}
