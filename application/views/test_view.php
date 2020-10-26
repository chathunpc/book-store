<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:31 PM
 */

include ("admin_main_view.php");
?>

<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <h3 class="box-title">Books List</h3>
                            </div>
                        </div>
                    </div>

                    <div class="box-body" width="50%" >

                        <form method="get">
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="col-sm-2">
                                        <label for="" class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" id="author" placeholder="Author" value="">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="" class="control-label">Title</label>
                                        <input type="text" class="form-control " name="title" id="title" placeholder="Title" value="">
                                    </div>
                                    <br>
                                    <div class="col-sm-3">
                                        <button class="btn btn-default pull-right" type="submit"><i class="fa fa-search"></i> Filter</button>
                                    </div>

                                </div>
                            </div>
                        </form>


                        <table class="table table-bordered" width="50%">
                            <thead>
                            <tr>
                                <th class="text-center" width="2%">#</th>
                                <th class="text-center" width="4%">Book Title</th>
                                <th class="text-center" width="4%">ISBN No</th>
                                <th class="text-center" width="4%">Category</th>
                                <th class="text-center" width="4%">Year</th>
                                <th class="text-center" width="4%">Author</th>
                                <th class="text-center" width="4%">Publisher</th>
                                <th class="text-center" width="4%">Price</th>
                                <th class="text-center" width="4%">In Stock</th>
                                <th class="text-center" width="4%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--Display data got from the db via controller passed array use a foreach loop -->
                            <?php foreach($books as $key=>$value){?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->title;?></td>
                                    <td><?php echo $value->isbn_no;?></td><!-- $value->TABLE ATTRIBUTE NAME -->
                                    <td><?php echo $value->name;?></td>
                                    <td><?php echo $value->year;?></td>
                                    <td><?php echo $value->author;?></td>
                                    <td><?php echo $value->publisher_name;?></td>
                                    <td><?php echo $value->price;?></td>
                                    <td><?php echo $value->stock_quantity;?></td>
                                    <td><!-- ***************************************************************** how to pass value to the URL-->
                                        <a href="<?php echo base_url(); ?>index.php/AdminController/viewBookDetail/<?php echo $value->id;?>" class="btn btn-default btn-xs view" data-toggle="tooltip" data-placement="top" title="View Attachment">
                                            <i class="fa fa-eye" style="color: cornflowerblue">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }?><!--USE php tags like this-->

                            </tbody>
                        </table>

                        <br>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                        </div>
                        <div class="col-md-6 text-right">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- !!Main content -->


<!--JUST JAVASCRIPT Dont really need this-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".chosen").chosen();


    });
</script>