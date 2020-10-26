<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/27/2018
 * Time: 5:30 PM
 */

include("index_view.php");
include ("header.php");
?>

<style>
    .pagination , strong{
        display: inline-block;
        text-align: center;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}
</style>

    <!-- ========================= SECTION ITEMS ========================= -->
    <section class="section-request bg padding-y-sm">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase"> Category</h4>
            </header>

            <div class="row-sm">
                <?php foreach($details as $key=>$value){?>
                <div class="col-md-2">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="<?php echo base_url(); ?><?php echo $value->file_path;?>"></div>
                        <figcaption class="info-wrap">
                            <h6 class="title "><a href="<?php echo base_url(); ?>index.php/BookDetailController/viewBookDetail/<?php echo $value->id;?>">
                                    <?php echo $value->title;?>
                                </a>
                            </h6>

                            <div class="price-wrap">
                                <span class="price-new"><?php echo $value->price;?></span>
                            </div> <!-- price-wrap.// -->

                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
                <?php } ?>
            </div> <!-- row.// -->
            <div class="col-md-6 text-right">
                <div class="pagination">
                   <span class='price-new'> <?php echo $links; ?> </span>
                </div>
            </div>

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION ITEMS .END// ========================= -->

<?php
include("footer.php");
?>