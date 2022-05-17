<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['book_id']);
    }
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['book_id'],'cart','wishlist');
    }
}
?>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach($product->getData('wishlist') as $item):
                        $cart = $product->getProduct($item['book_id']);
                        $subTotal[] = array_map(function($item){
                ?>
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['book_cover']?? ".\assets\products\a-tale-of-two-cities-330.jpg"; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['book_title'] ??"unknown"; ?></h5>
                        <small><?php echo $item['book_author'] ??"unknown"; ?></small>
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
                        <div class="qty d-flex pt-2">
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['book_id'] ?? 0; ?>" name="book_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                            </form>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['book_id'] ?? 0; ?>" name="book_id">
                                <button type="submit" name="cart-submit" class="btn font-baloo text-danger px-3 border-right">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 text-end">
                        <div class="font-size-20 text-danger font-baloo">
                            <span class="product-price" data-id="<?php echo $item['book_id'] ?? '0'; ?>"><?php echo $item['price_paper'] ??"00.00"; echo'TND'; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                        return $item['price_paper'];
                     },$cart);
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>