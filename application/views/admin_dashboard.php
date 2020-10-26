<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:31 PM
 */

include ("admin_main_view.php");
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">

<style>
    .center {
        text-align: center;
    }

    .pagination , strong{
        display: inline-block;
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
</style>


<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <h3 class="box-title">Dashboard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="box-body" width="50%" >
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="text">
                                    <label class="text-muted">Books Varieties <var><?php echo $book_count ?></var></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="text">
                                    <label class="text-muted">In Stock  <var><?php echo $in_stock ?></var></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="text">
                                    <label class="text-muted">Sold Books <var><?php echo $sold_books ?></var></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                                <div class="text">
                                    <label class="text-muted">Total Sales <i>(Rs.)</i> <var><?php echo $total_sales ?></var></label>
                                </div>
                            </div>
                        </div>


                        <?php foreach($top_books as $key=>$value){?>
                        <div class="col-md-2" style="margin-top: 50px">
                            <div class="card rounded">
                                <div class="card-image">
                                    <span class="card-notify-badge">Top Selling</span>
                                    <img class="card-image-overlay" src="<?php echo base_url(); ?><?php echo $value->file_path;?>" alt="Alternate Text" />
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5><?php echo $value->title;?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>


                        <div class="col-md-6 text-right">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- !!Main content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".chosen").chosen();

        $('.datepick').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            format: 'yyyy-mm-dd'
        });

    });
</script>