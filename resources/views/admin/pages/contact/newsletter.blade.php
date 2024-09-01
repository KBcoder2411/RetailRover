
@include('layouts.admin.header')


<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Newsletter Subscribers</h4>


                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsletters as $newsletter)
                            <tr>
                                <td>{{ $newsletter->name }}</td>
                                
                                <td>{{ $newsletter->email }}</td>
                                

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