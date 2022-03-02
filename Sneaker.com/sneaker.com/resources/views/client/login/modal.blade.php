<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div><h3>Welcome to Sneaker Store</h3></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                <div>
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
                                </div>
                                <form class="login100-form validate-form" action="login" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <span class="login100-form-title p-b-43">
						                            Login to continue
                                                </span>
                                    <div class="wrap-input100 validate-input"
                                         data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="email">
                                        <span class="focus-input100"></span>
                                        <span class="label-input100">Email</span>
                                    </div>

                                    <div class="wrap-input100 validate-input"
                                         data-validate="Password is required">
                                        <input class="input100" type="password" name="password">
                                        <span class="focus-input100"></span>
                                        <span class="label-input100">Password</span>
                                    </div>

                                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                                        <div class="contact100-form-checkbox">
                                            <input class="input-checkbox100" id="ckb1" type="checkbox"
                                                   name="remember-me">
                                            <label class="label-checkbox100" for="ckb1">
                                                Remember me
                                            </label>
                                        </div>

                                        <div>
                                            <a href="#" class="txt1">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>


                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn" type="submit">
                                            Login
                                        </button>
                                    </div>
                                    <div style="text-align: center">
                                        <span class="txt2">or</span>
                                    </div>
                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn" type="submit">
                                            <a href="<?php echo url('register')?>" class="login100-form-btn">Create an account</a>
                                        </button>
                                    </div>

                                    <div class="text-center p-t-46 p-b-20">
                                                    <span class="txt2">
                                                        or sign up using
                                                    </span>
                                    </div>

                                    <div class="login100-form-social flex-c-m">
                                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                        </a>

                                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </form>

                                <div class="login100-more col"
                                     style="background-image: url('<?php echo url('public/client/login-form/images/W0OTg.jpg')?>');">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end modal-->



