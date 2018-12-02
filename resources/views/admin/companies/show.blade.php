@extends('admin.layouts._master')
@section('content')
    <section class="content-header">
        <h1> Customers
            <small>Customers tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> C-Panel</a></li>
            <li><a href="#">Customers</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <b>{{$customer->name}} Cart</b>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->name}}
                            </div>
                            <div class="col-md-2 text-right">
                                : الاسم
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->email}}
                            </div>
                            <div class="col-md-2 text-right">
                                : الاميل
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->id_num}}
                            </div>
                            <div class="col-md-2 text-right">
                                : رقم البطاقة
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->address}}
                            </div>
                            <div class="col-md-2 text-right">
                                : العنوان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->seller->name}}
                            </div>
                            <div class="col-md-2 text-right">
                                : عمولة لصالح
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                {{$customer->subscribe_end}}
                            </div>
                            <div class="col-md-2 text-right">
                                : النهاية
                            </div>
                            <div class="col-md-4 text-right">
                                {{$customer->subscribe_date}}
                            </div>
                            <div class="col-md-2 text-right">
                                : البداية
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$customer->qr_code}}
                            </div>
                            <div class="col-md-2 text-right">
                                : لينك QR Code
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection