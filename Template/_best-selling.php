<?php
shuffle($product_shuffle);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['best_selling_submit'])){
    $Cart->addtoCart($_POST['user_id'],$_POST['book_id']);
    }
}
?>
<section id="best-selling">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Best Selling</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?book_id=%s','product.php',$item['book_id']); ?>"><img src="<?php echo $item['book_cover'] ?? ".\assets\products\a-tale-of-two-cities-330.png";?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['book_title'] ?? "unknown"; ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['price_paper'].' TND' ?? "00.00"; ?></span>
                        </div>
                        <form method="POST">
                        <input type="hidden" name="book_id" value="<?php echo $item['book_id']??'1'; ?>">
                        <input type="hidden" name="user_id" value="<?php echo '1'; ?>">
                        <?php
                            if(in_array($item['book_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Already in your cart!</button>';
                            }else{
                                echo '<button type="submit" name="best_selling_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                        ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>