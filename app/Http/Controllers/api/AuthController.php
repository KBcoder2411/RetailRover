<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
   
    
   
        public function login(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
    
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                return response()->json(['status' => true, 'user' => Auth::user()]);
            }
    
            return response()->json(['status' => false, 'message' => 'Invalid User']);
        }
    
        public function logout(Request $request)
        {
            Auth::logout();
    
            return response()->json(['status' => true, 'message' => 'Logged Out Successfully']);
        }
    
        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
    
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
    
            return response()->json(['status' => true, 'user' => $user], 201);
        }
    
    


#*****************************************************************************************************#


    public function getAllProducts() {
        $products = Product::all();
        return response()->json(['status' => true, 'products' => $products]);
    }

    public function getProduct($id) {
        $product = Product::find($id);
        if ($product) {
            return response()->json(['status' => true, 'product' => $product]);
        } else {
            return response()->json(['status' => false, 'message' => 'Product not found']);
        }
    }

    public function createProduct(Request $request) {
        $product = Product::create($request->all());

        return response()->json(['status' => true, 'product' => $product]);
    }

    public function updateProduct(Request $request, $id) {
        $product = Product::find($id);

        if ($product) {
            $product->update($request->all());
            return response()->json(['status' => true, 'product' => $product]);
        } else {
            return response()->json(['status' => false, 'message' => 'Product not found']);
        }
    }

    public function deleteProduct($id) {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['status' => true, 'message' => 'Product deleted successfully']);
        } else {
            return response()->json(['status' => false, 'message' => 'Product not found']);
        }
    }

    
}
