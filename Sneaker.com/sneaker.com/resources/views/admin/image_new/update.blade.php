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
                        <li class="breadcrumb-item active">Form add image_new</li>
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
                        <h3 class="card-title">Form add image_new</h3>
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
                    <form role="form" method="POST" id="multipleupload" action="<?php echo url('admin/image_new/update')?>/{{$image->id}}"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_type_product">New</label><br>
                                <select class="form-group custom-select" name="id_new" id="id_new">
                                    @foreach($news as $new)
                                        <option
                                            @if($new->id==$image->id_new)
                                            {{"selected"}}
                                            @endif
                                            value="{{$new->id}}">{!! html_entity_decode($new->title) !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image"
                                               value="{{$image->image}}">
                                        <label class="custom-file-label"
                                               for="exampleInputFile">{{$image->image}}</label>
                                    </div>
                                </div>
                            </div>
                            <div align="center">
                                <img src="<?php echo asset('public/upload/image_new')?>/{{$image->image}}"
                                     style="width: auto; height: 300px">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
