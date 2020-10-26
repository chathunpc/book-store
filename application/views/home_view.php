<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/26/2018
 * Time: 10:52 PM
 */
include("index_view.php");
include ("header.php");
?>
<html>

<style>
    .card-body {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }

    .card-body img-sm {vertical-align: middle;}

    .card-body .heading {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1;
        width: 85%;
        padding: 20px;
    }
</style>

    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y-sm">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm">

                        <div class="col-md-18-24">

                            <!-- ================= main slide ================= -->
                            <div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide1.jpg">
                                        <h6 class="title">Novels</h6>
                                        <a href="#">Good link</a>
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide2.jpg">
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide3.jpg">
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide4.jpg">
                                </div>
                            </div>
                            <!-- ============== main slidesow .end // ============= -->

                        </div> <!-- col.// -->

                        <aside class="col-md-3">
                            <figure class="col-lg-6-24">
                                <img src="<?php echo base_url(); ?>assets/images/banners/banner.jpg" height="330" class="img-bg">
                            </figure>
                        </aside>

                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">BOOK CATEGORIES</h4>
            </header>

            <div class="card ">
                <div class="row no-gutters">
                    <div class="col-md-3">

                        <article href="#" class="card-banner h-100 bg2">
                            <div class="card-body zoom-wrap">
                                <h5 class="title">Books come in many Types</h5>
                                <p>Some books are to read, some books you enjoy
                                    but some books just swallow you up Heart and Soul. It`s Love from Within make your choice.. </p>
                                <a href="<?php echo base_url(); ?>index.php/ItemsListController/viewAllBooks" class="btn btn-warning">Explore Books</a>
<!--                                <a href="--><?php //echo base_url(); ?><!--index.php/AdminController/index" class="btn btn-warning">Admin Test</a>-->
                            </div>
                        </article>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters border-cols">
                        <?php foreach($categories as $key=>$value){?>
                            <li class="col-6 col-md-3">
                                <a href="<?php echo base_url(); ?>index.php/HomeController/viewAllByCategory/<?php echo $value->id;?>" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit"><?php echo $value->name;?> </p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/banners/bookCategory.jpg" style="width:100%;">
                                        <p class="heading"><?php echo $value->name;?>  </p>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        </ul>

                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div> <!-- card.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


</html>
<?php
include("footer.php");
?>