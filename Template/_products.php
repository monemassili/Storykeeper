<?php
    $item_id = $_GET['book_id']??1;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['product_submit'])){
        $Cart->addtoCart($_POST['user_id'],$_POST['book_id']);
        }
    }
    foreach($product->getData() as $item):
        if($item['book_id'] == $item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['book_cover']??".\assets\products\a-tale-of-two-cities-330.jpg"; ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                         <form method="POST">
                            <input type="hidden" name="book_id" value="<?php echo $item['book_id']??'1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo '1'; ?>">
                              <?php
                                if(in_array($item['book_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control font-size-16">Already in your cart!</button>';
                                }else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning form-control font-size-16">Add to Cart</button>';
                                }
                            ?>
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h3 class="font-baloo font-size-20"><?php echo $item['book_title']??"Unknown"; ?></h3>
                <small><?php echo $item['book_author']??"Unknown"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">12 rating | 2 answered questions</a>
                </div>
                <hr class="m-0">
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Audiobook:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['price_audio'].' TND'??"Unknown"; ?></span></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Paperback:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['price_paper'].' TND'??"Unknown"; ?></span></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Hardcover:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['price_hard'].' TND'??"Unknown"; ?></span></td>
                    </tr>
                </table>
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5 px-3">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Free shipping<br>(Physical copies)</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery generally takes anywhere between 3-5 </small>
                    <small>business days or available for pick up at</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Rue Victor Hugo 2016, Carthage-Présidence</small>
                </div>
                <div class="row px-2">
                    <div class="col-6 py-2">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Quantity</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="size my-3">
                    <h6 class="font-baloo">Format / Edition:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Audiobook</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Paperback</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Hardcover</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
    endforeach;
?>