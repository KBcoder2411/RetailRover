@include('layouts.customer.header')
<!-- End Header/Navigation -->
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
</style>
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Your Ultimate<span class="d-block">Tech Destination</span></h1>
                    <p class="mb-4">Experience Innovation at Its Finest: Explore a Diverse Range of Mobiles, Watches, Laptops, and More at Our Leading Electronics Store.</p>
                    <p><a href="{{route('shop')}}" class="btn btn-secondary me-2">Shop Now</a><a href="{{route('shop')}}" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{asset('public/assets/customerassets/images/phonm.png')}}" alt="Couch" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">
      
            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Engineered with Premium Components.</h2>
                <p class="mb-4">Curated with Premium Components for Exceptional Performance. Explore our ecommerce store for cutting-edge electronics, offering durability, innovation, and a seamless shopping experience </p>
                <p><a href="{{route('shop')}}" class="btn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
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

			@endforeach

            

        </div>
       
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>Choose us for unparalleled expertise in electronics, offering curated selections of premium components for superior performance and durability. Explore our ecommerce store for innovative solutions, backed by seamless shopping experiences and dedicated customer support, ensuring satisfaction with every purchase</p>
                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{asset('public/assets/customerassets/images/truck.svg')}}" alt="Truck" class="img-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Enjoy expedited shipping at no cost, ensuring your purchases arrive swiftly and conveniently to your doorstep.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{asset('public/assets/customerassets/images/bag.svg')}}" alt="Bag" class="img-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Effortless shopping experience designed to simplify your search and purchase of high-quality electronics products.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{asset('public/assets/customerassets/images/support.svg')}}" alt="Support" class="img-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Round-the-clock assistance available to provide support and guidance whenever you need it, ensuring a seamless shopping experience.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{asset('public/assets/customerassets/images/return.svg')}}" alt="Return" class="img-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Simplify your returns process with our hassle-free policy, ensuring straightforward and convenient returns for your peace of mind.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{asset('public/assets/customerassets/images/marshallbgr.png')}}" alt="Why Choose Us" class="img-fluid">
                </div>
                <div class="img-wrap">
                    <img src="{{asset('public/assets/customerassets/images/marshallheadphonebgr.png')}}" alt="Why Choose Us" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1">
                    <img src="{{asset('public/assets/customerassets/images/marshallheadphone.jpeg')}}" alt="Grid 2">
                        </div>
                    <div class="grid grid-2"><img src="{{asset('public/assets/customerassets/images/smartwatchimg.jfif')}}" alt="Grid 1">
                    <img src="{{asset('public/assets/customerassets/images/lapimg.jpg')}}" alt="Grid 3"></div>
                   
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">Explore Cutting-Edge Electronic Solutions with Our Expert Guidance.</h2>
                <p>At our store, we offer a curated selection of cutting-edge electronics, including mobile phones, smart watches, laptops, and more. Whether for work or play, our team ensures each product meets high standards. Enjoy easy shopping, swift deliveries, and expert guidance for a seamless experience. Discover the future of electronics with us.</p>

                <ul class="list-unstyled custom-list my-4">
                    <li>Curated selection of cutting-edge electronics: mobile phones etc.</li>
                    <li>High standards of quality and performance in every product.</li>
                    <li>Easy shopping experience with swift deliveries.</li>
                    <li>Expert guidance to help you discover the latest in electronics.</li>
                </ul>
                <p><a href="{{route('shop')}}" class="btn">Explore</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->

<!-- End Popular Product -->

@include('layouts.customer.footer')
