 <?php 

 add_action('after_setup_theme', function(){
   add_theme_support('woocommerce');

   remove_theme_support( 'wc-product-gallery-zoom' );
   remove_theme_support( 'wc-product-gallery-lightbox' );
   remove_theme_support( 'wc-product-gallery-slider' );  
   remove_theme_support('title-tag');
 });