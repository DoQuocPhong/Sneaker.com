@extends('admin.layout.index')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Id_customer</th>
                                    <th>Date_order</th>
                                    <th>Total</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bill as $bills)
                                    <tr class="odd gradeX" align="center">
                                        <td>{{$bills->id}}</td>
                                        <td>{{$bills->id_customer}}</td>
                                        <td>{{date('j F, Y', strtotime($bills->created_at))}}</td>
                                        <td>{{$bills->total}}</td>
                                        <td>{{$bills->note}}</td>
                                        <td><i class="fa fa-trash fa-fw"></i><a href="admin/customer/xoa">Delete</a>
                                            <i class="fa fa-pencil fa-fw"></i><a
                                                href="admin/customer/sua/{{$bills->id}}">Edit</a>
                                            <i class="fa fa-info-circle fa-fw"></i>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal{{$bills->id}}" data-whatever="@mdo">
                                                Detail
                                            </a>
                                            @include('admin.bills.modal')
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Id_customer</th>
                                    <th>Date_order</th>
                                    <th>Total</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection




