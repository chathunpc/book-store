<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/5/2018
 * Time: 4:59 PM
 */
?>
<!doctype html>
<html class="no-js" lang="" xmlns: xmlns: xmlns:>

<head>
    <meta charset="utf-8">
    <title>AshBooks|Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!-- //BOOTSTRAP -->

    <!-- FONTS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.css">
    <!-- //FONTS -->


    <style type="text/css">
        body,html{
            background-color: #fff;
            width: 100%;
            height: 100%;
        }

        .with-bg-size {
            background-image: http://localhost/ashbooks/assets/images/background.jpg;
            width: 100%;
            height: 100%;
            background-position: center;
            /* Make the background image cover the area of the <div>, and clip the excess */
            background-size: cover;
        }

        .login{
            height: 100%;
        }

        .login-form{
            background: #fffffff2;
            padding: 20px;
        }

        .outer {
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
        }

        .middle {
            display: table-cell;
            vertical-align: middle;
        }

        .inner {
            margin-left: auto;
            margin-right: auto;
            width: 30%; /*whatever width you want*/
        }

        input{
            height: 40px;
        }

        .login-form-text{
            margin-bottom: 20px;
        }

        .login-form-text h3{
            margin-top: 8px;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 40px;
            padding: 4px 7px;
            font-size: 12px;
            line-height: 1.5;
            color: #666;
            background-color: #fff;
            background-image: none;
            border: 1px solid #d0d0d0;
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }

        .btn-info {
            color: #fff;
            background-color: #9581d8;
            border-color: #9581d8;
        }

        .form-control:focus {
            border-color: none;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .spinner{
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: #ddd;
        }


        .sk-folding-cube {
            margin: 20px auto;
            width: 40px;
            height: 40px;
            position: relative;
            -webkit-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
        }

        .sk-folding-cube .sk-cube {
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        .sk-folding-cube .sk-cube:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #333;
            -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
            animation: sk-foldCubeAngle 2.4s infinite linear both;
            -webkit-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }
        .sk-folding-cube .sk-cube2 {
            -webkit-transform: scale(1.1) rotateZ(90deg);
            transform: scale(1.1) rotateZ(90deg);
        }
        .sk-folding-cube .sk-cube3 {
            -webkit-transform: scale(1.1) rotateZ(180deg);
            transform: scale(1.1) rotateZ(180deg);
        }
        .sk-folding-cube .sk-cube4 {
            -webkit-transform: scale(1.1) rotateZ(270deg);
            transform: scale(1.1) rotateZ(270deg);
        }
        .sk-folding-cube .sk-cube2:before {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }
        .sk-folding-cube .sk-cube3:before {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        .sk-folding-cube .sk-cube4:before {
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }
        @-webkit-keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }

        @keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }
    </style>
</head>

<body>

<div class="with-bg-size">
    <div class="container-fluid">

        <div class="outer">
            <div class="middle">
                <div class="inner text-center">
                    <div class="login-form">
                        <div class="login-form-text">
                            <h3><b>Ash Books</b></h3>
                            <p>A Reader is a complete Person</p>
                        </div>
                            <form role="form" action="<?php echo base_url(); ?>index.php/AdminController/authenticate" method="post">
                                <div class="form-group has-feedback">
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                           autocomplete="off" value="">

                                    <span class="fa fa-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="fa fa-lock form-control-feedback"></span>
                                </div>

                                <div class="form-group has-feedback">
                                    <button type="submit" class="btn btn-info btn-block btn-lg btn-flat">Sign In</button>
                                </div>

                                <div class="form-group has-feedback">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" value="" >
                                            <span style="margin-top: 0">Remember Me</span>
                                        </label>
                                    </div>
                                </div>

                            </form>
                        <?php
                        if($error = $this->session->flashdata('login_failed')){  ?>

                            <div class="alert alert-danger alert-dismissable">
                                <?= $error ?>
                            </div>

                            <?php
                        }
                        ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>


<script type="text/javascript">

    $(window).load(function(){
        $('.spinner').fadeOut();
    });
</script>
<!-- endbuild -->
</body>

</html>

