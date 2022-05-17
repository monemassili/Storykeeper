<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <div class="row">
            <div class="col-sm-9">
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12">
                        <img src="./assets/empty-cart.png" alt="Empty Cart" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Eeligible for Free Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ?count($subTotal): 0;?> item):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? number_format($Cart->getSum($subTotal),2): 0 ;echo'TND'; ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>