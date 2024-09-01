@include('layouts.customer.header')

<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>About Us</h1>
                    <p class="mb-4">Welcome to Retail Rover, your premier online destination for top-quality electronics. We offer a diverse range of products, including the latest mobile phones, smart devices, powerful laptops, and innovative accessories. Our commitment to quality ensures that each product meets high standards of performance and durability.</p>
                    <p>
                        <a href="{{route('shop')}}" class="btn btn-secondary me-2">Shop Now</a>
                        <a href="{{route('shop')}}" class="btn btn-white-outline">Explore</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{ asset('public/assets/customerassets/images/laptopimg2bgr.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>Choose us for unparalleled expertise in electronics, offering curated selections of premium components for superior performance and durability. Explore our ecommerce store for innovative solutions, backed by seamless shopping experiences and dedicated customer support, ensuring satisfaction with every purchase</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ asset('public/assets/customerassets/images/truck.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Enjoy expedited shipping at no cost, ensuring your purchases arrive swiftly and conveniently to your doorstep.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ asset('public/assets/customerassets/images/bag.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Effortless shopping experience designed to simplify your search and purchase of high-quality electronics products.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ asset('public/assets/customerassets/images/support.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Round-the-clock assistance available to provide support and guidance whenever you need it, ensuring a seamless shopping experience.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{ asset('public/assets/customerassets/images/return.svg') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Simplify your returns process with our hassle-free policy, ensuring straightforward and convenient returns for your peace of mind.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
				<img src="{{asset('public/assets/customerassets/images/marshallheadphonebgr.png')}}" alt="Grid 2">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Our Team</h2>
            </div>
        </div>

        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="{{ asset('public/assets/customerassets/images/person_1.jpg') }}" class="img-fluid mb-5">
                <h3 class="clas"><a href="#"><span>Lawson</span> Arnold</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="{{ asset('public/assets/customerassets/images/person_2.jpg') }}" class="img-fluid mb-5">
                <h3 class="clas"><a href="#"><span>Jeremy</span> Walker</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="{{ asset('public/assets/customerassets/images/person_3.jpg') }}" class="img-fluid mb-5">
                <h3 class="clas"><a href="#"><span>Patrik</span> White</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="{{ asset('public/assets/customerassets/images/person_4.jpg') }}" class="img-fluid mb-5">
                <h3 class="clas"><a href="#"><span>Kathryn</span> Ryan</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div>
            <!-- End Column 4 -->

        </div>
    </div>
</div>

@include('layouts.customer.footer')
