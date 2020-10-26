<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 11:14 AM
 */

include("index_view.php");
include("header.php");
?>

<style>
    .alert {
        padding: 20px;
        background-color: green;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">

            <h1 class="text-center">Contact Us</h1>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?php echo $this->session->flashdata('email_sent'); ?>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-8">
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31688.14700969094!2d79.84632308628358!3d6.888401939586072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bcfa9dade23%3A0x136e218d0102aec6!2sHavelock%20Pl%2C%20Colombo%2000500!5e0!3m2!1sen!2slk!4v1603528118071!5m2!1sen!2slk" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-sm-4" id="contact2">
                    <h3>We are Always there for you</h3>
                    <hr align="left" width="50%">
                    <h4 class="pt-2">Contact Us</h4>
                    <i class="fas fa-globe" style="color:#000"></i> Havelock Palce, Colombo 05.<br>
                    <h4 class="pt-2">Tel</h4>
                    <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> +94112123456 </a><br>
                    <i class="fab fa-whatsapp" style="color:#000"></i><a href="tel:+"> +9477123456 </a><br>
                    <h4 class="pt-2">Email</h4>
                    <i class="fa fa-envelope" style="color:#000"></i> <a href="">contact@ashbooks.com</a><br>
                </div>
            </div>

        </div> <!-- container .//  -->
        <br>
        <div class="container">
            <div class="row" style="margin-left: 0px;">
                <div class="col-lg-8 col-lg-offset-3" style="box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.53);border-radius: 4px;">
                    <div class="well well-sm">
                        <form class="form-horizontal"  method="post" action="<?php echo base_url(); ?>index.php/HomeController/sendEmail">
                            <fieldset>
                                <legend class="text-center">Write Us</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                        <?php echo form_error('images','<div class="error">', '</div>'); ?>
                                    </div>
                                </div>

                                <!-- Phone Number input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Your Phone Number</label>
                                    <div class="col-md-9">
                                        <input id="email" name="phone" type="number" placeholder="Your phone" class="form-control">
                                        <?php echo form_error('images','<div class="error">', '</div>'); ?>
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-3">
                    <figure class="col-lg-6-24">
                        <img src="<?php echo base_url(); ?>assets/images/banners/banner2.jpg" height="330" class="img-bg">
                    </figure>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {

            });
        </script>

    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

<?php
include("footer.php");
?>