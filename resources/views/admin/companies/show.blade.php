@extends('admin.layouts._master')
@section('content')
    <section class="content-header">
        <h1> Companies
            <small>Companies tables</small>
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
                    <div class="box-header">
                        <b>{{$company->name}} Cart</b>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->name}}
                            </div>
                            <div class="col-md-2 text-right">
                                : الاسم
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->email}}
                            </div>
                            <div class="col-md-2 text-right">
                                : الاميل
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->id_num}}
                            </div>
                            <div class="col-md-2 text-right">
                                : رقم البطاقة
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->address}}
                            </div>
                            <div class="col-md-2 text-right">
                                : العنوان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->seller->name}}
                            </div>
                            <div class="col-md-2 text-right">
                                : عمولة لصالح
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                {{$company->subscribe_end}}
                            </div>
                            <div class="col-md-2 text-right">
                                : النهاية
                            </div>
                            <div class="col-md-4 text-right">
                                {{$company->subscribe_date}}
                            </div>
                            <div class="col-md-2 text-right">
                                : البداية
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->company}}
                            </div>
                            <div class="col-md-2 text-right">
                                : اسم الشركة
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->sort}}
                            </div>
                            <div class="col-md-2 text-right">
                                : اسم التصنيف
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 text-right">
                                {{$company->package}}
                            </div>
                            <div class="col-md-2 text-right">
                                : اسم الباقة
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection