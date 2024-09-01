@include('layouts.customer.header')

<div class="container mt-5">
    <div class="order card">
        <div class="card-header">
            <h3 style=" padding: 10px;">All Ordered Products</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 60%;">Product Name</th>
                            <th style="width: 20%;">Price</th>
                            <th style="width: 20%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderedProducts as $orderedProduct)
                        <tr>
                            <td>{{ $orderedProduct->product->pname }}</td>
                            <td>₹{{ number_format($orderedProduct->product->saleprice, 2) }}</td>
                            <td><a href="{{ route('invoice', $orderedProduct->id) }}" class="btn btn-info btn-sm">Get Invoice</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination Links -->
    <div class="pagination-wrapper mt-4">
        {{ $orders->links('pagination::bootstrap-4') }}
    </div>
</div>

@include('layouts.customer.footer')

<style>
    .order {
        
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 50px;
    }

    .order .card-header {
        background-color: #007bff;
        color: #fff;
        border-radius: 8px 8px 0 0;
    }

    .order .card-body {
        padding: 20px;
    }

    .pagination-wrapper {
        text-align: center;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>
