@extends('Admin.Layouts._master')
@section('title','Category Panel | Update')
@section ('Extra_Css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style.css')}}">
@endsection
@section('content')
    <section class="content-header">
        <h1>Companies
            <small>Add New Company</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> C-Panel</a></li>
            <li><a href="#">Companies</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input class="form-control" name="name" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        <input class="form-control" name="phone" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>ID Number:</label>
                                        <input class="form-control" name="id_num" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input class="form-control" name="address" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image:</label>
                                        <input type="file" class="form-control" name="img" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Commission To:</label>
                                        <select name="seller_id" class="form-control" required>
                                            <option value="">Select Seller</option>
                                            @foreach(\App\Models\Seller::all() as $seller)
                                                <option value="{{$seller->id}}">{{$seller->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subscribe Date:</label>
                                        <input type="date" class="form-control" name="subscribe_date" value=""
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Name:</label>
                                        <input class="form-control" name="company" value=""
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Activities</label>
                                        <input class="form-control" name="activities">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sorting</label>
                                        <input class="form-control" name="sort">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Package Name</label>
                                        <input class="form-control" name="package">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('Extra_Js')
    <script src="{{asset('js/admin/admin.js')}}"></script>
@endsection