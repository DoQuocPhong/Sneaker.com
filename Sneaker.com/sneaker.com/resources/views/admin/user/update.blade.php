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
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form update user</h3>
            <br>
            <small>{{$user->full_name}}</small>
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
        <form role="form" method="POST" action="<?php echo url('admin/user/update')?>/{{$user->id}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Fullname</label>
                    <input type="text" class="form-control" id="exampleInputFullname1" placeholder="Enter fullname"
                           name="fullname"
                           value="{{$user->full_name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                           name="email"
                           value="{{$user->email}}" readonly>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="changepassword" id="changepassword">
                    <label for="Password1">Change password</label>
                    <input type="text" class="form-control password" id="Password1" placeholder="Password"
                           name="password" disabled="">
                </div>
                <div class="form-group">
                    <label for="Password2">Confirm password</label>
                    <input type="text" class="form-control password" id="Password2" placeholder="ConfirmPassword"
                           name="confirmpassword" disabled="">
                </div>
                <div class="form-group">
                    <label style="width: 100px">Role</label>
                    <label class="radio-inline" style="width: 100px">
                        <input name="role" value="0"
                               @if($user->role ==0)
                               {{"checked"}}
                               @endif type="radio">Thường
                    </label>
                    <label class="radio-inline" style="width: 100px">
                        <input name="role" value="1"
                               @if($user->role ==1)
                               {{"checked"}}
                               @endif type="radio">Admin
                    </label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#changepassword").change(function () {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                } else {
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>
@endsection
