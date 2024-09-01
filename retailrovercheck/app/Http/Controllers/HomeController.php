<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function productlist()
    {
        return view('admin.pages.products.product_list');
    }

    public function editproduct()
    {
        return view('admin.pages.products.edit_product');
    }

    public function addproduct()
    {
        return view('admin.pages.products.add_product');
    }

    #*******************************************************************#


    public function welcome(Request $request)
    {
        $productlist = Product::all();
        $categories = Product::select('category')->distinct()->get();

        return view('welcome', compact('productlist', 'categories'));
    }



    public function about()
    {
        return view('customer.pages.about');
    }

    public function contact()
    {
        return view('customer.pages.contact');
    }

    public function shop(Request $request)
    {
       

        $category = $request->query('category');
    
        if ($category) {
            $productlist = Product::where('category', $category)->get();
        } else {
            $productlist = Product::all();
        }
    
        $categories = Product::select('category')->distinct()->get();
    
       
        return view('customer.pages.shop', compact('productlist', 'categories'));
    }

    public function cart()
    {
        return view('customer.pages.cart');
    }




    public function thankyou()
    {
        return view('customer.pages.thankyou');
    }

    public function view($id){

       
        $product = Product::find($id);

        return view('customer.pages.view',compact('product'));
    }
}
