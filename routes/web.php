<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Models\contact;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('admin/dashboard',[HomeController::class,'index'])->middleware((['auth','admin']));

Route::get('/admin/pages/products/product_list', [HomeController::class, 'productlist'])->name('productlist');

Route::get('/admin/pages/products/edit_product', [HomeController::class, 'editproduct'])->name('editproduct');

Route::get('/admin/pages/products/add_product', [HomeController::class, 'addproduct'])->name('addproduct');


Route::post('/admin/pages/products/edit_product/store',[ProductController::class,'store'])->name('products.store');

Route::get('/admin/pages/products/product_list', [ProductController::class, 'productlist'])->name('productlist');

Route::delete('/admin/pages/products/product_list/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::get('admin/pages/products/product_list/{id}',[ProductController::class,'view_product'])->name('products.view_product');

Route::get('/admin/pages/products/edit_product/{id}',[ProductController::class,'edit_product'])->name('products.edit_product');

Route::post('/admin/pages/products/edit_product/{id}',[ProductController::class,'update'])->name('products.update');

Route::get('/admin/pages/products/view_product/{id}',[ProductController::class,'single_product'])->name('products.single_product');



#*********************************************************************#

Route::get('/customer/pages/about', [HomeController::class, 'about'])->name('about');

Route::get('/customer/pages/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/customer/pages/contact/store', [contactController::class, 'store'])->name('contact.store');


Route::get('/customer/pages/shop', [HomeController::class, 'shop'])->name('shop');



Route::get('/customer/pages/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');




#***************************************************************************#



Route::post('layouts/customer/footer/store', [NewsletterController::class, 'store'])->name('newsletter.store');


#***********************************************************************************#

#order 

Route::post('/customer/pages/cart/store', [OrderController::class, 'store'])->name('order.store');


#******************************************************************************************#

Route::get('customer/pages/view/{id}',[HomeController::class,'view'])->name('view');




Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/order/{id}', [AdminController::class, 'order'])->name('order');


Route::get('/admin/pages/contact/contacts', [AdminController::class, 'showcontacts'])->name('showcontacts');


Route::get('/admin/pages/contact/newsletter', [AdminController::class, 'shownewsletter'])->name('shownewsletter');
Route::get('/ordershow/{id}', [OrderController::class, 'ordershow'])->name('ordershow');



Route::get('/myorder', [OrderController::class, 'myorder'])->name('myorder');

Route::get('/allorder/{id}', [OrderController::class, 'allorder'])->name('allorder');
// routes/web.php

Route::get('/invoice/{orderItemId}', [OrderController::class, 'invoice'])->name('invoice');



