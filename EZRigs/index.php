<?php
    ob_start();
    //include header.php file
    include('header.php');

?>

<?php
    /* include _banner-area file */
    include('Template/_banner-area.php');
    /* !include _banner-area file */

    /* include _top-sale file */
    include('Template/_top-sale.php');
    /* !include _top-sale file */

    /* include _special-price file */
    include('Template/_special-price.php');
    /* !include _special-price file */

    /* include _banner-ads file */
    include('Template/_banner-ads.php');
    /* !include _banner-ads file */

    /* include _new-products file */
    include('Template/_new-products.php');
    /* !include _new-products file */
?>

<?php
    //include footer.php file
    include('footer.php');

?>