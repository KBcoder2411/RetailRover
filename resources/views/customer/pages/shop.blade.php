@include('layouts.customer.header')

<style>
	.product-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    background-color: rgb(238,242,241);
    text-align: center;
}

.product-item img {
    max-height: 200px; 
    object-fit: cover;
   
}

.product-title {
    flex: 1;
   
    font-size: 1.2em;
    font-weight: bold;
}

.product-price {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.btn-primary {
    width: 90%;
    padding: 10px;
    background-color: white;
    border: none;
    color: #fff;
    border-radius: 4px;
    text-transform: uppercase;
}

.btn-primary:hover {
    background-color: #222222 !important;
   
}

@media (min-width: 700px) {
  
}


/* category css */

.filter-category {
    margin-bottom: 20px;
}

.filter-category select {
    width: 15%;
    padding: 8px 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #ffffff;
    color: #333333;
    outline: none;
    transition: border-color 0.3s ease;
	margin-left: 120px;
}

.filter-category select:hover,
.filter-category select:focus {
    border-color: #0078e6;
}

.filter-category select option {
    padding: 8px;
    background-color: #ffffff;
    color: #333333;
}

</style>

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1><i class="fa fa-store fa-3x"></i></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">

    <div class="filter-category">
        <form action="{{ route('shop') }}" method="GET">
            <select name="category" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->category }}" {{ request()->query('category') == $cat->category ? 'selected' : '' }}>{{ $cat->category }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="container">
    <div class="row">
        @foreach($productlist as $product)
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <div class="product-item">
                    <a href="{{ route('view', $product->id) }}">
                        <img src="{{ asset('public/images/' . $product->mainimage) }}" class="img-fluid product-thumbnail" alt="Product Image">
                        <h3 class="product-title">{{ $product->title }}</h3>
                        <strong class="product-price">₹ {{ $product->saleprice }}</strong>
                    </a>
                    @guest
                    <div></div>
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Add to Cart
                        </button>
                    @else
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary mt-2">Add to Cart</button>
                        </form>
                    @endguest
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal for Login/Register -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login or Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>You need to <a href="{{ route('login') }}" class="btn btn-success">login</a> or <a href="{{ route('register') }}" class="btn btn-info">register</a> to access the cart.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>

@include('layouts.customer.footer')
