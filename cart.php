<?php
ob_start();
//incluide header php file
include('header.php')
?>

<?php
    /*  include cart items if it is not empty */
    count($product->getData('cart')) ? include ('Templet/_cart-templet.php') :  include ('Templet/notFound/_cart_notFound.php');
    /*  include cart items if it is not empty */

    /*  include top sale section */
    count($product->getData('wishlist')) ? include ('Templet/_wishilist_template.php') :  include ('Templet/notFound/_wishlist_notFound.php');
    /*  include top sale section */

    //incluide new phone php file
    include('Templet/_new-phones.php');
    //incluide new phone php file

?>




<?php
//incluide footer php file
include('footer.php')
?>