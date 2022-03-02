<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneaker | Do Quoc Phong</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo asset('public/client/css/bootstrap.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/font-awesome.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/themify-icons.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/elegant-icons.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/owl.carousel.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/nice-select.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/jquery-ui.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/slicknav.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/style.css');?>" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('public/mystyle.css');?>" type="text/css">

    <!--login-form-->
    <link rel="icon" type="image/png" href="<?php echo asset('public/client/login-form/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/vendor/animate/animate.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/vendor/css-hamburgers/hamburgers.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/vendor/animsition/css/animsition.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/vendor/select2/select2.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/client/login-form/vendor/daterangepicker/daterangepicker.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/client/login-form/css/util.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/client/login-form/css/main.css')?>">
    <!--===============================================================================================-->

    <!--product-details-->


</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<div class="">
@include('client.layout.header')

<div class="content-wrapper image_background">
    @yield('content')
</div>
@include('client.layout.footer')
</div>

<!-- Js Plugins -->
<script src="<?php echo asset('public/client/js/jquery-3.3.1.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/bootstrap.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery-ui.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery.countdown.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery.nice-select.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery.zoom.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery.dd.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/jquery.slicknav.js');?>"></script>
<script src="<?php echo asset('public/client/js/owl.carousel.min.js');?>"></script>
<script src="<?php echo asset('public/client/js/main.js');?>"></script>

<!--login-form-->
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo asset('public/client/login-form/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?php echo asset('public/client/login-form/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo asset('public/client/login-form/js/main.js')?>"></script>

<!-- JavaScript for Cart -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!--AddCart-Heart-->
<script>
    function AddCart(id) {
        $.ajax({
            url: '<?php echo url('AddCart')?>/' + id,
            type: 'GET',
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Đã thêm mới sản phẩm');
        });
    }

    function AddHeart(id) {
        $.ajax({
            url: '<?php echo url('AddHeart')?>/' + id,
            type: 'GET',
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Đã thêm mới sản phẩm ưa thích');
        });
    }

    $("#change-item-cart").on("click", ".si-close i", function () {
        $.ajax({
            url: '<?php echo url('Delete-Item-Cart')?>/' + $(this).data("id"),
            type: 'GET',
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Đã xóa sản phẩm');
        });
    });

    function RenderCart(response) {
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }

    function DeleteListItemCart(id) {
        $.ajax({
            url: '<?php echo url('Delete-Item-List-Cart')?>/' + id,
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Đã xóa sản phẩm');
        });
    }

    function RenderListCart(response) {
        $("#list-cart").empty();
        $("#list-cart").html(response);

        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
    }

    function SaveListItemCart(id) {
        $.ajax({
            url: '<?php echo url('Save-Item-List-Cart')?>/' + id + '/' + $("#quanty-item-" + id).val(),
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Đã cập nhật sản phẩm');
        });
    }

    $(".edit-all").on("click", function () {
        var lists = [];
        $("table tbody tr td").each(function () {
            $(this).find("input").each(function () {
                var element = {key: $(this).data("id"), value: $(this).val()};
                lists.push(element);
            })
        });
        $.ajax({
            url: '<?php echo url('Save-All')?>',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "data": lists
            }
        }).done(function (response) {
            location.reload();
            alertify.success('Đã cập nhật sản phẩm');
        });
    })
</script>
</body>

</html>
