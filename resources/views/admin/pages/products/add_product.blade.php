@include('layouts.admin.header')

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ul class="breadcome-menu">
        <li><a href="#">Home</a> <span class="bread-slash">/</span>
        </li>
        <li><span class="bread-blod">Product Edit</span>
        </li>
    </ul>
</div>


<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">


                            <li class="active"><h3>Add Product</h3></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">

                                <div class="row">
                                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <fieldset><input type="text" name="pname" class="form-control" placeholder="Product Name">
                                                    </fieldset>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="title" class="form-control" placeholder="Product Title">
                                                    </fieldset>
                                                </div>

                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="description" class="form-control" placeholder="Product Description">
                                                    </fieldset>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="regprice" class="form-control" placeholder="Regular Price">
                                                    </fieldset>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="tax" class="form-control" placeholder="Tax">
                                                    </fieldset>
                                                </div>

                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="saleprice" class="form-control" placeholder="Sale Price">
                                                    </fieldset>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">



                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                    <fieldset> <input type="text" name="category" class="form-control" placeholder="Category">
                                                    </fieldset>
                                                </div>

                                                <div class="input-group mg-b-pro-edt">
                                                    
                                                    <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                    <label for="">Main Image</label>
                                                    <fieldset> <input type="file" name="mainimage" class="form-control">
                                                    </fieldset>
                                                </div>

                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                    <label for="">Image 1</label>
                                                    <fieldset> <input type="file" name="image1" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                    <label for="">Image 2</label>
                                                    <fieldset> <input type="file" name="image2" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                    <label for="">Image 3</label>
                                                    <fieldset> <input type="file" name="image3" class="form-control">
                                                    </fieldset>
                                                </div>


                                               
                                            </div>
                                            
                                        </div>
                                         <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                            </button>
                                                            <button type="submit" class="btn btn-warning waves-effect waves-light">Discard
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                    </form>
                                </div>

                            </div>




                            @include('layouts.admin.footer')