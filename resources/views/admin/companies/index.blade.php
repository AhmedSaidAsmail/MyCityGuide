@extends('admin.layouts._master')
@section ('Extra_Css')
    <link rel="stylesheet" href="{{asset('admin_resources/plugins/datatables/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style.css')}}">
@endsection
@section('Extra_Js')
    <script src="{{asset('js/admin/admin.js')}}"></script>
    <script src="{{asset('admin_resources/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_resources/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $("#dataTable").DataTable();
        });
    </script>
@endsection
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
                        <h3 class="box-title">Companies Data With Full Features</h3>
                    </div>
                    <div class="box-body">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Seller</th>
                                <th>Code</th>
                                <th>#Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->email}}</td>
                                    <td>{{$company->phone}}</td>
                                    <td>{{$company->seller->name}}</td>
                                    <td>{{$company->qr_code}}</td>
                                    <td>
                                        <form method="post" id="deletingForm"
                                              action="{{route('company.destroy',['id'=>$company->id])}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                        </form>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="{{route('company.show',['id'=>$company->id])}}">
                                                    <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button form="deletingForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Seller</th>
                                <th>Code</th>
                                <th>#Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection