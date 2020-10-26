<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 8:32 PM
 */

include ("admin_main_view.php");

?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-chosen.css">
<style>
    .error{
        color: red;
    }
</style>

<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3 class="box-title">Add Category</h3>
                <br>
                <form action="<?php echo base_url(); ?>index.php/AdminController/addCategory" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="category" value="">
                            <?php echo validation_errors('<div class="error">', '</div>'); ?>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                    </div>
                </form>
            </div>
        </div><!-- /.box -->
    </div>
</section>

