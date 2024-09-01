@include('layouts.admin.header')


<!-- resources/views/admin/pages/users/user_list.blade.php -->

<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Order List</h4>

                    
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->fname }}</td>
                                <td>{{ $order->lname }}</td>
                                <td><a href="{{ route('ordershow', $order->id) }}">Show Details</a></td> 


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