@include('layouts.customer.header')

<div class="container mt-5">
    <div class="invoice card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Invoice</h3>
                <!-- Print button -->
               
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h4>Customer Details</h4>
                    <p><strong>Name:</strong> {{ $orderItem->order->fname }} {{ $orderItem->order->lname }}</p>
                    <p><strong>Address:</strong> {{ $orderItem->order->address }}</p>
                    <p><strong>State:</strong> {{ $orderItem->order->state }}</p>
                    <p><strong>ZIP:</strong> {{ $orderItem->order->zip }}</p>
                    <p><strong>Email:</strong> {{ $orderItem->order->email }}</p>
                    <p><strong>Phone:</strong> {{ $orderItem->order->phone }}</p>
                </div>
                <div class="col-md-6 text-right">
                    <h4>Invoice Details</h4>
                    <p><strong>Invoice ID:</strong> {{ $orderItem->id }}</p>
                    <p><strong>Order Date:</strong> {{ $orderItem->created_at->format('d M Y') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $orderItem->product->pname }}</td>
                                <td>₹{{ number_format($orderItem->price, 2) }}</td>
                                <td>{{ $orderItem->quantity }}</td>
                                <td>₹{{ number_format($orderItem->price * $orderItem->quantity, 2) }}</td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <button class="btn btn-primary d-print-none" onclick="window.print()">Print</button>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.customer.footer')

<style>
    .invoice {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 50px;
    }

    .invoice .card-header {
        background-color: #007bff;
        color: #fff;
        border-radius: 10px;
    }

    .invoice .card-body {
        padding: 20px;
    }

    .invoice .table th,
    .invoice .table td {
        vertical-align: middle;
    }

    .invoice .row {
        margin-bottom: 10px;
    }

    /* Print button styling */
    .btn-print {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
        ;
    }

    @media print {
        .d-print-none {
            display: none !important;
        }
        .footer-section{
            display: none !important;
        }

        .custom-navbar{
            display: none !important;
        }
    }
</style>

<!-- Print button script -->
<script>
    function printInvoice() {
        window.print();
    }
</script>
