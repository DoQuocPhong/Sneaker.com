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

<form class="form-inline ml-3" method="get" action="<?php echo url('admin\new\search')?>">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
                <input class="search_input" type="text" name="key" placeholder="Search...">
                <a href="<?php echo url('admin\new\search')?>" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</form>
<br>

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
                                <th>Title</th>
                                <th>Content</th>
                                <th>Avatar</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$new->id}}</td>
                                    <td><div>{!!html_entity_decode($new->title)!!}</div></td>
                                    <td>{!! html_entity_decode($new->contentt) !!}</td>
                                    <td><img src="<?php echo asset('public/upload/new')?>/{{$new->image}}" style="width: auto; height: 30px"></td>
                                    <td><i class="fa fa-trash-o" fa-fw></i><a href="<?php echo url('admin/new/delete')?>/{{$new->id}}">Delete</a>
                                        <i class="fa fa-pencil fa-fw"></i><a href="<?php echo url('admin/new/update')?>/{{$new->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Avatar</th>
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




