@include('layouts.customer.header')

<div class="single-product-tab-area mg-t-15 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div id="myTabContent1" class="tab-content">
                    <div class="product-tab-list tab-pane fade {{ $product->first ? 'active in' : '' }}" id="single-tab1">
                        <img src="{{ asset('public/images/'.$product->mainimage) }}" class="img-responsive" alt="mainimg" />
                    </div>
                    <div class="product-tab-list tab-pane fade" id="single-tab2">
                        <img src="{{ asset('public/images/'.$product->image1) }}" class="img-responsive" alt="img1" />
                    </div>
                    <div class="product-tab-list tab-pane fade" id="single-tab3">
                        <img src="{{ asset('public/images/'.$product->image2) }}" class="img-responsive" alt="img2" />
                    </div>
                    <div class="product-tab-list tab-pane fade" id="single-tab4">
                        <img src="{{ asset('public/images/'.$product->image3) }}" class="img-responsive" alt="img3" />
                    </div>
                </div>
                <div class="mt-5">
                    <ul id="single-product-tab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#single-tab1" data-toggle="tab"><img src="{{ asset('public/images/'.$product->mainimage) }}" class="img-thumbnail custom-thumbnail" alt="mainimg" /></a>
                        </li>
                        <li>
                            <a href="#single-tab2" data-toggle="tab"><img src="{{ asset('public/images/'.$product->image1) }}" class="img-thumbnail custom-thumbnail" alt="img1" /></a>
                        </li>
                        <li>
                            <a href="#single-tab3" data-toggle="tab"><img src="{{ asset('public/images/'.$product->image2) }}" class="img-thumbnail custom-thumbnail" alt="img2" /></a>
                        </li>
                        <li>
                            <a href="#single-tab4" data-toggle="tab"><img src="{{ asset('public/images/'.$product->image3) }}" class="img-thumbnail custom-thumbnail" alt="img3" /></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="single-product-details res-pro-tb">
                    <h1>{{ $product->title }}</h1>
                    <span class="single-pro-star">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </span>
                    <div class="single-pro-price">
                        <span class="single-regular"><strong>₹ {{ $product->saleprice }}</span></strong>
                        <span class="single-old"><del>₹ {{ $product->regprice }}</del></span>
                    </div>
                    <div class="single-pro-cn">
                        <br>
                        <h2>OVERVIEW</h2>
                        <p>{{ $product->description }}</p>
                        <br>
                    </div>
                </div>

                <div style="display: flex;">
    @guest
        <p><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">Buy Now</button></p>
        <p><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">Add to Cart</button></p>
    @else
    <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary mt-2">Buy Now</button>
                        </form>
        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary mt-2">Add to Cart</button>
                        </form>
    @endguest
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
                <p>You need to <a href="{{ route('login') }}" class="btn btn-success">login</a> or <a href="{{ route('register') }}" class="btn btn-info">register</a> to continue.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                
            </div>
        </div>
    </div>
</div>



@include('layouts.customer.footer')

<style>
    .single-product-tab-area {
        margin-top: 15px;
        margin-bottom: 30px;
    }

    .single-product-details h1 {
        font-size: 24px;
        font-weight: bold;
    }

    .single-pro-price {
        margin-top: 10px;
        font-size: 20px;
    }

    .single-pro-cn h2 {
        font-size: 20px;
        font-weight: bold;
    }

    .single-pro-star i {
        color: #ff9f00;
    }

    .nav-tabs>li>a {
        padding: 10px;
    }

    .nav-tabs>li>a img {
        width: 50px;
        height: auto;
    }

    .img-thumbnail {
        width: 50px !important ;
        height: 20px  !important ;
    }


  
    .custom-thumbnail {
        width: 100px!important ;
        height: 100px!important ;
       
    }

    
    .nav-tabs .nav-item {
        margin-bottom: 10px; 
    }

</style>

<script>
    $(document).ready(function() {
        // Activate the first tab on page load
        $('.nav-tabs a:first').tab('show');
    });
</script>