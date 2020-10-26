<html lang="en">

<header class="section-header">
    <section class="header-main shadow-sm">
        <div class="container">
            <div class="row-sm align-items-center">
                <div class="col-lg-4-24 col-sm-3">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/HomeController/index"><img class="logo" src="<?php echo base_url(); ?>assets/images/logos/logoBook.png" alt="" title="AshBooks"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-11-24 col-sm-10">

                </div> <!-- col.// -->
                <div class="col-lg-9-24 col-sm-12">
                    <div class="widgets-wrap float-right row no-gutters py-1">
                        <div class="col-auto">
                            <div class="widget-header dropdown">
                                <a href="#" data-toggle="dropdown" data-offset="20,10">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i class="text-primary icon-sm fa fa-user"></i></div>
                                        <div class="text-wrap text-dark">
                                            Sign in <br>
                                            My account <i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Have account? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </div> <!--  dropdown-menu .// -->
                            </div>  <!-- widget-header .// -->
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="<?php echo base_url(); ?>index.php/ShoppingCartController/viewShoppingCart" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-primary icon-sm fa fa-shopping-cart"></i></div>
                                    <div class="text-wrap text-dark">
                                        <span class="small round badge badge-secondary" name="count">
                                            <?= $this->cart->total_items() ?>
                                        </span>
                                        <div>Shopping <br> Cart</div>
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="<?php echo base_url(); ?>index.php/HomeController/contact" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-primary icon-sm  fa fa-phone"></i></div>
                                    <div class="text-wrap text-dark">
                                        <div>Contact Us</div>
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                    </div> <!-- widgets-wrap.// row.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->
</html>