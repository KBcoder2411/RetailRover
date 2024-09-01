<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $imageName1 = time() . '_main.' . $request->mainimage->extension();
        $request->mainimage->move(public_path('images'), $imageName1);
    
        $imageName2 = time() . '_1.' . $request->image1->extension();
        $request->image1->move(public_path('images'), $imageName2);
    
        $imageName3 = time() . '_2.' . $request->image2->extension();
        $request->image2->move(public_path('images'), $imageName3);
    
        $imageName4 = time() . '_3.' . $request->image3->extension();
        $request->image3->move(public_path('images'), $imageName4);
    
        $product = new Product();
        $product->pname = $request->pname;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->regprice = $request->regprice;
        $product->saleprice = $request->saleprice;
        $product->tax = $request->tax;
        $product->category = $request->category;
        $product->mainimage = $imageName1;
        $product->image1 = $imageName2;
        $product->image2 = $imageName3;
        $product->image3 = $imageName4;
    
        $product->save();
    
        return redirect()->route('productlist')->with('success', 'Data stored successfully.');
    }
    

    public function productlist(Request $request)
{
    $category = $request->query('category');
    
    if ($category) {
        $productlist = Product::where('category', $category)->get();
    } else {
        $productlist = Product::all();
    }

    $categories = Product::select('category')->distinct()->get();

    return view('admin.pages.products.product_list', compact('productlist', 'categories'));
}


    public function destroy($id){

        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productlist')->with('success');

    }

    public function view_product($id){

        $product = Product::find($id);

        return view('admin.pages.products.view_product',compact('product'));
    }

    public function edit_product($id){

        $product = Product::find($id);

        return view('admin.pages.products.edit_product',compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->route('productlist')->with('error', 'Product not found');
        }
    
        if ($request->hasFile('mainimage')) {
            $imageName1 = time() . '_main.' . $request->mainimage->extension();
            $request->mainimage->move(public_path('images'), $imageName1);
            $product->mainimage = $imageName1;
        }
    
        if ($request->hasFile('image1')) {
            $imageName2 = time() . '_1.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $imageName2);
            $product->image1 = $imageName2;
        }
    
        if ($request->hasFile('image2')) {
            $imageName3 = time() . '_2.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $imageName3);
            $product->image2 = $imageName3;
        }
    
        if ($request->hasFile('image3')) {
            $imageName4 = time() . '_3.' . $request->image3->extension();
            $request->image3->move(public_path('images'), $imageName4);
            $product->image3 = $imageName4;
        }
    
        $product->pname = $request->pname;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->regprice = $request->regprice;
        $product->saleprice = $request->saleprice;
        $product->tax = $request->tax;
        $product->category = $request->category;
    
        $product->save();
    
        return redirect()->route('productlist')->with('success', 'Product updated successfully');
    }
    
    

    public function single_product($id){

        $product = Product::find($id);

        return view('admin.pages.products.view_product',compact('product'));
    }


#***********************************************************************#

   
    
}
