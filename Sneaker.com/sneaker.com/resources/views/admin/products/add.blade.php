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
                    <form role="form" method="POST" action="<?php echo url('admin/product/add')?>"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="product_name">Name</label>
                                <input type="text" class="form-control" placeholder="Input name of product"
                                       name="name" id="product_name">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="id_type_product">Id type_product</label>--}}
{{--                                <input type="text" class="form-control" placeholder="Input id type_product"--}}
{{--                                       name="id_type_product" id="id_type_product">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="id_type_product">Type_product</label><br>
                                <select class="form-group custom-select" name="id_type_product" id="id_type_product">
                                    @foreach($type_products as $tp)
                                        <option
                                            value="{{$tp->id}}">{{$tp->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Unit_price</label>
                                <input type="text" class="form-control" placeholder="Input unit_price"
                                       name="unit_price">
                            </div>
                            <div class="form-group">
                                <label for="promotion_price">Promotion_price</label>
                                <input type="text" class="form-control" placeholder="Input promotion_price"
                                       name="promotion_price" id="promotion_price">
                            </div>
                            <div class="form-group">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" placeholder="Input unit of product" name="unit"
                                       id="unit">
                            </div>
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
                                <label for="exampleInputFile">Images</label>
                                <div class="custom-file">
                                    <input type="file" name="img[]" multiple="multiple">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                          name="description"></textarea>
                                </div>
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
