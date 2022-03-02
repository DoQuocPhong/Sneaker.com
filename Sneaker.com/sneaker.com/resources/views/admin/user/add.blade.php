@extends('admin.layout.index')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form them</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card-body pad">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form add user</h3>
                    </div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                @endif
                <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="<?php echo url('admin/user/add')?>">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fullname</label>
                                <input type="text" class="form-control" id="exampleInputFullname1"
                                       placeholder="Enter fullname" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Confirmpassword" name="confirmpassword">
                            </div>
                            <div class="form-group">
                                <label style="width: 100px">Role</label>
                                <label class="radio-inline" style="width: 100px">
                                    <input name="role" value="0" type="radio">Thường
                                </label>
                                <label class="radio-inline" style="width: 100px">
                                    <input name="role" value="1" type="radio">Admin
                                </label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
