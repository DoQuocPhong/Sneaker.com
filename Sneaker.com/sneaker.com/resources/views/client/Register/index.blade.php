@extends('client.layout.index')

@section('content')
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
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
                        <form action="<?php echo url('register')?>" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="group-input">
                                <label for="username">Fullname *</label>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                            <div class="group-input">
                                <label for="username">Username or email address *</label>
                                <input type="text" id="username" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="password" id="con-pass" name="confirmpassword">
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="#" class="or-login" data-toggle="modal" data-target="#exampleModal">Or Login</a>
                        </div>

                        @include('client.login.modal')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
