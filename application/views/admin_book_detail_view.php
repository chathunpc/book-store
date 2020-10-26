<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/8/2018
 * Time: 3:21 PM
 */
include ("admin_main_view.php");
?>

<!-- Main content -->
<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="box">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="box-header with-border">
                        <h3 class="box-title">Book Detail</h3>
                    </div>
                    </div>
                     <div class="box-body" width="50%" >
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-bordered" width="50%">
                                <thead>
                                <tr>
                                    <th class="text-center" width="4%">Book Title</th>
                                    <th class="text-center" width="4%">ISBN No</th>
                                    <th class="text-center" width="4%">Category</th>
                                    <th class="text-center" width="4%">Year</th>
                                    <th class="text-center" width="4%">Author</th>
                                    <th class="text-center" width="4%">Publisher</th>
                                    <th class="text-center" width="4%">Price</th>
                                    <th class="text-center" width="4%">In Stock</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($details as $key=>$value){?>
                                    <tr>
                                        <td><?php echo $value->title;?></td>
                                        <td><?php echo $value->isbn_no;?></td>
                                        <td><?php echo $value->name;?></td>
                                        <td><?php echo $value->year;?></td>
                                        <td><?php echo $value->author;?></td>
                                        <td><?php echo $value->publisher_name;?></td>
                                        <td><?php echo $value->price;?></td>
                                        <td><?php echo $value->stock_quantity;?></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>

                     </div>
                    <div class="box-body" width="50%" >
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>Attachments <i class="fa fa-paperclip"></i></p>
                                <div class="col-md-16-24">
                                    <div class="col-md-8 text-center" style="border: 1px solid #ddd;padding:10px;margin: 10px;">
                                        <img width="50%" class="square" src="<?php echo base_url(); ?><?php echo $value->file_path;?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- !!Main content -->
