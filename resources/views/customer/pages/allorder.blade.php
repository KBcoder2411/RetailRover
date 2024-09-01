@include('layouts.customer.header')

<style>
    /* Custom styles for the invoice page */
    .invoice-container {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        padding: 20px;
    }

    .invoice-header {
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .invoice-header h4 {
        color: #333333;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .invoice-header p {
        margin-bottom: 5px;
    }

    .invoice-body {
        margin-bottom: 20px;
    }

    .invoice-body h5 {
        color: #333333;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .table {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .table th,
    .table td {
        border: none;
        padding: 10px;
    }

    .table th {
        background-color: #f8f9fa;
        color: #333333;
        font-weight: 600;
    }

    .invoice-footer {
      text-align: start;
    }

    .invoice-footer .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .invoice-footer .btn-primary:hover {
        background-color: #0069d9;
    }

</style>

<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <!-- Content here if needed -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
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
                            @foreach($order->orderItems as $item)
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

@include('layouts.customer.footer')
