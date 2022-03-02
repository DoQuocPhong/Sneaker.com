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
                        <li class="breadcrumb-item active">Form add product</li>
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
                        <h3 class="card-title">Form add product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
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
                    <form role="form" method="POST" action="<?php echo url('admin/slide/add')?>"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
{{--                                <label for="id_type_product">Type_product</label><br>--}}
{{--                                <select class="form-group custom-select" name="type_product" id="id_type_product">--}}
{{--                                    @foreach($type_product as $tp)--}}
{{--                                        <option--}}
{{--                                            value="{{$tp->name}}">{{$tp->name}}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
                                <label for="product_name">Type_product</label>
                                <input type="text" class="form-control" placeholder="Input type product for event"
                                       name="type_product">
                            </div>

                            <div class="form-group">
                                <label for="product_name">Title</label>
                                <input type="text" class="form-control" placeholder="Input title of event"
                                       name="title" id="title">
                            </div>

                            <div class="form-group">
                                <label for="description">Content</label>
                                <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                          name="contentt"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Action</label>
                                <input type="text" class="form-control" placeholder="Input action for event"
                                       name="action">
                            </div>

                            <div class="form-group">
                                <label for="promotion_price">Discount</label>
                                <input type="text" class="form-control" placeholder="Input discount for event"
                                       name="discount">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
