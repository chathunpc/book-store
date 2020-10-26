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

<script>
    /* Update item quantity */
    function updateCartItem(obj, rowid){
        $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
            if(resp == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }

    function subtractQty(){
        if(document.getElementById("number").value - 1 < 0)
            return;
        else
            document.getElementById("number").value--;
    }

    function updateCartItem() {
        $.ajax({
            type: "GET",
            data: {
                idProduct: yourProductId,
                quantity: $("#number").val(),
                totalPrice: calculatedValue
            },
            url: "your-script.php",
            success: function(json_response) {

                if(json_response.result != 'SUCCESS') {
                    // Whatever
                } else {
                    alert("Updated in DB");
                });
    })
    }

</script>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">
        <?php $total=0; ?>
        <div class="row">
            <main class="col-sm-9">

                <div class="card">
                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col" width="120">Quantity</th>
                            <th scope="col" width="120">Price</th>
                            <th scope="col" class="text-right" width="200">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($cart as $key=>$value){?>
                            <?php $total += $value->total ?>
                        <tr id="item">
                            <td>
                                <figure class="media">
                                    <div class="img-wrap"><img src="<?php echo base_url(); ?><?php echo $value->file_path;?>" class="img-thumbnail img-sm"></div>
                                    <figcaption class="media-body">
                                        <h6 class="title text-truncate"><?php echo $value->title?> </h6>
                                        <dl class="dlist-inline small">
                                            <dt>ISBN#:</dt>
                                            <dd><?php echo $value->isbn_no;?></dd>
                                            <br>
                                            <dt>Price:</dt>
                                            <dd><?php echo $value->price;?></dd>
                                        </dl>
                                    </figcaption>
                                </figure>
                            </td>
                            <td>
                                <input type="number" id="number" class="form-control text-center"  value="<?php echo $value->quantity; ?>">
                            </td>
                            <td>
                                <div class="price-wrap">
                                    <var class="price" id="price"><?php echo $value->total;?></var>
                                </div> <!-- price-wrap .// -->
                            </td>
                            <td class="text-right">
                                <input type="hidden" name="rowId" id="rowId" value="<?php echo $value->session_id ?>">
                                <a href="<?php echo base_url()?>index.php/ShoppingCartController/removeCartItem/<?php echo $value->session_id;?>"
                                   class="btn btn-outline-danger" id="remove"> × Remove</a>
                            </td>
                        </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div> <!-- card.// -->

            </main> <!-- col.// -->
            <aside class="col-sm-3">
                <p class="alert alert-success">These are the items of your order Please Checkout to Complete the Purchase</p>
                <dl class="dlist-align h4">
                    <dt>Total:</dt>
                    <dd class="text-right" id="total"><strong><?php echo $total ?></strong></dd>
                </dl>
                <hr>
                <figure class="itemside mb-3">
                    <aside class="aside"><img src="<?php echo base_url(); ?>assets/images/icons/pay-visa.png"></aside>
                    <div class="text-wrap small text-muted">
                        Pay by VISA Card
                    </div>
                </figure>
                <figure class="itemside mb-3">
                    <aside class="aside"> <img src="<?php echo base_url(); ?>assets/images/icons/pay-mastercard.png"> </aside>
                    <div class="text-wrap small text-muted">
                        Pay by MasterCard and Save 40%. <br>
                    </div>
                </figure>
                <div class="itemside mb-3">
                    <div class="itemside mb-1">
                        <a href="<?php echo base_url(); ?>index.php/HomeController/index" class="btn  btn-danger">Go Back </a>
                    </div>
                    <div class="itemside mb-1">
                        <a href="https://www.paypal.com/us/signin" class="btn  btn-success">Proceed Checkout </a>
                    </div>
                </div>



            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tbody').load("<?php echo site_url('index.php/ShoppingCartController/viewCart');?>");
        });
    </script>

</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<?php
include("footer.php");
?>