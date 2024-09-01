@include('layouts.admin.header')

<!-- resources/views/admin/orders/show.blade.php -->
<style>
    /* Example CSS for Invoice Page */
.invoice-container {
    background: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

.invoice-header {
    margin-bottom: 20px;
}

.invoice-body table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.invoice-body th, .invoice-body td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

.invoice-footer {
    text-align: right;
    margin-top: 20px;
}

@media print {
    .invoice-footer {
        display: none; /* Hide print button in print view */
    }
}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="invoice-container">
                <div class="invoice-header">
                    <h4>Order Details</h4>
                    <p><strong>Name:</strong> {{ $order->fname }} {{ $order->lname }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Address:</strong> {{ $order->address }}, {{ $order->state }}, {{ $order->zip }}</p>
                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
                </div>

                <div class="invoice-body">
                    <h5>Order Items</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderItems as $item)
                            <tr>
                                <td>{{ $item->product->title }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>₹{{ number_format($item->price, 2) }}</td>
                                <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="invoice-footer">
                    <button class="btn btn-primary" onclick="window.print()">Print Invoice</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.admin.footer')
