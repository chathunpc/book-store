<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AshBooks Admin Panel</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/responsive.css">
    <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.js"></script>

    <script src="https://use.fontawesome.com/10a964325b.js"></script>
</head>

<style>
    #logout{
        float: right;
        margin-right: -340%;
        color: white;
        font-size: x-large;
    }
</style>

<body>
<!--////////////////TOP NAVBAR FIXED NAVBAR////////////////-->
<div class="main-container">
    <nav class="navbar navbar-fixed-top admin-navbar" id="navbar_top">
        <div class="container-fluid">
            <div class="navbar-header" style="display: inline-block;">
                <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <a href="index.html" class="admin-chat-logo"><img src="<?php echo base_url(); ?>assets/images/logos/logoAdmin.png"></a>
                <a href="<?php echo base_url(); ?>index.php/AdminController/logout"
                   class="btn" id="logout" type="button"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>

    <aside class="hit_sidebar open_sidbar sidebar-slide-push">
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/AdminController/dashboard" class="activ">
                    <span class="nav-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                    <span class="remove_text">Dashboard</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/AdminController/addCategoryView">
                    <span class="nav-icon"><i class="fa fa-inbox" aria-hidden="true"></i></span>
                    <span class="remove_text"> Add Category</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/AdminController/addBookView">
                    <span class="nav-icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <span class="remove_text"> Add Book</span></a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/AdminController/viewBookList">
                    <span class="nav-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                    <span class="remove_text"> Book List</span></a>
            </li>
        </ul>
    </aside>
    <section id="content_body" class="content_body">

    </section>



</div>

<script>
    $(document).ready(function(){
        $("#menu_icon").click(function(){
            $(".open_sidbar").toggleClass("small_sidebar");
            $('.remove_text').toggleClass('text_hide');
            $('#content_body').toggleClass('margin_left');
        });
    });

</script>








</body>

</html>