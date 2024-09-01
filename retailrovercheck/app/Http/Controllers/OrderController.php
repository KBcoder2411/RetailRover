<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'address' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string|max:10',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
        ]);

        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        $order = new Order();
        $order->user_id = $user->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->address = $request->address;
        $order->state = $request->state;
        $order->zip = $request->zip;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->total_amount = $this->calculateTotal($cartItems);

        $order->save();

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->saleprice,
            ]);
        }

        // Optionally clear the cart after placing the order
        Cart::where('user_id', $user->id)->delete();

        $orderId = $order->id;
        return redirect()->route('thankyou', ['id' => $orderId])->with('message', 'Order placed successfully!');
    }

    private function calculateTotal($cartItems)
    {
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->product->saleprice * $item->quantity;
        }

        $gst = $total * 0.18; // Calculate GST (18%)
        $deliveryCharges = 50; // Example delivery charges

        return $total + $gst + $deliveryCharges;
    }
    public function ordershow($id)
    {
        $order = Order::findOrFail($id);
        $orderItems = OrderItem::where('order_id', $order->id)->with('product')->get();

        return view('admin.pages.user.ordershow', compact('order', 'orderItems'));
    }





    public function myorder()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
            ->with('orderItems.product')
            ->paginate(10);

        // Fetch all products ordered by the user
        $orderedProducts = OrderItem::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->with('product')
            ->get();

        return view('customer.pages.myorder', compact('orders', 'orderedProducts'));
    }




    public function allorder($id)
    {
        // Fetch order and order items based on $id
        $order = Order::findOrFail($id);
        $orderItems = OrderItem::where('order_id', $order->id)->with('product')->get();

        return view('customer.pages.allorder', compact('order', 'orderItems'));
    }
    public function invoice($orderItemId)
    {
        $orderItem = OrderItem::with('order', 'order.user', 'product')->findOrFail($orderItemId);

        return view('customer.pages.invoice', compact('orderItem'));
    }
}
