@include('layouts.admin.header')

<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Products List</h4>
                    <div class="add-product">
                        <a href="{{route('addproduct')}}">Add Product</a>
                    </div>
                    <div class="filter-category">
                        <form action="{{ route('productlist') }}" method="GET">
                            <select name="category" onchange="this.form.submit()">
                                <option value="">All Categories</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->category }}" {{ request()->query('category') == $cat->category ? 'selected' : '' }}>{{ $cat->category }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Regular Price</th>
                                <th>Sale Price</th>
                                <th>Tax</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productlist as $product)
                            <tr>
                                <td><img src="{{ asset('public/images/'.$product->mainimage) }}" alt="{{ $product->pname }}" width="50"></td>
                                <td>{{ $product->pname }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->regprice }}</td>
                                <td>{{ $product->saleprice }}</td>
                                <td>{{ $product->tax }}</td>
                                <td>{{ $product->category }}</td>

                                <td><a href="{{route('products.edit_product',$product->id)}}"> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a></td>

                                <td><a href="{{route('products.view_product',$product->id)}}"> <button data-toggle="tooltip" title="View" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </a></td>
                                    

                                <td>
                                    
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                  
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.admin.footer')
