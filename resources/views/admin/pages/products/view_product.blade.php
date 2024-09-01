@include('layouts.admin.header')

<div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div id="myTabContent1" class="tab-content">
                            <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                <img src="{{ asset('public/images/'.$product->mainimage) }}" alt="mainimg" />
                            </div>
                            <div class="product-tab-list tab-pane fade" id="single-tab2">
                                <img src="{{ asset('public/images/'.$product->image1) }}" alt="img1" />
                            </div>
                            <div class="product-tab-list tab-pane fade" id="single-tab3">
                                <img src="{{ asset('public/images/'.$product->image2) }}" alt="img2" />
                            </div>
                            <div class="product-tab-list tab-pane fade" id="single-tab4">
                                <img src="{{ asset('public/images/'.$product->image3) }}" alt="img3" />
                            </div>
                           
                        </div>
                        <div>
                        <ul id="single-product-tab">
                            <li class="active">
                                <a href="#single-tab1"><img src="{{ asset('public/images/'.$product->mainimage) }}" alt="mainimg" /></a>
                            </li>
                            <li>
                                <a href="#single-tab2"><img src="{{ asset('public/images/'.$product->image1) }}" alt="img1" /></a>
                            </li><li>
                                <a href="#single-tab2"><img src="{{ asset('public/images/'.$product->image2) }}" alt="img1" /></a>
                            </li>
                            <li>
                                <a href="#single-tab3"><img src="{{ asset('public/images/'.$product->image3) }}" alt="img2" /></a>
                            </li>
                            
                        </ul>
                    </div>
                        
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="single-product-details res-pro-tb">
                            <h1>{{$product->title}}</h1>
                            <span class="single-pro-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            <div class="single-pro-price">
                               
                        <span class="single-regular">₹ {{$product->saleprice}}</span><span class="single-old"><del>₹ {{$product->regprice}}</del></span>
                            
                    </div>
                           
                            
                            <div class="single-pro-cn">
                                <br><br>
                                <b><h2>OVERVIEW</h2></b>
                                <p>{{$product->description}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
           
        </div>
        @include('layouts.admin.footer')