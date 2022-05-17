<?php
ob_start();
    include('header.php');
?>
<?php
    count($product->getData('cart'))? include('Template/_cart-template.php') : include('Template/empty/_cart_empty.php');
    
?>
<?php
    count($product->getData('wishlist'))? include('Template/_wishlist_template.php') : include('Template/empty/_wishlist_empty.php');
?>
<?php
    include('footer.php');
?>