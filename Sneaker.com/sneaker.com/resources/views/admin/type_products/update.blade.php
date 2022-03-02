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
            <small>{{$type_products->name}}</small>
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
        <form role="form" method="POST" action="<?php echo url('admin/type_product/update')?>/{{$type_products->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Input name of type_product"
                           name="name" value="{{$type_products->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image"
                                   value="{{$type_products->image}}">
                            <label class="custom-file-label" for="exampleInputFile">{{$type_products->image}}</label>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <img src="<?php echo asset('public/upload/type_product')?>/{{$type_products->image}}"
                         style="width: auto; height: 300px">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                          name="description">{{$type_products->description}}</textarea>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection

