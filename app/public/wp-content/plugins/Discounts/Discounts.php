<?php

/*  
* Plugin Name: Discounts  
* Plugin URI:  
* Description: A simple discounts plugin  
* Author: bharath  
* Version: 1.0.0  
* Author URI:  
* License: GPL3+  
* Text Domain:  
* Domain Path: /languages/  
*/

if ( in_array( 'woocommerce/woocommerce.php', get_option('active_plugins'))) {

    if ( ! class_exists('WC_Discounts_Woo')){

class WC_Discounts_Woo{

public function __construct(){

add_action('edit_user_profile', array( $this, 'show_user_discount'), 10, 1);
add_action( 'edit_user_profile_update', array( $this, 'save_user_discount'), 10, 1 );

add_filter( 'woocommerce_product_get_price', array( $this, 'show_discount_price' ), 10, 2);

}

public function show_discount_price($price, $product) {

 // $price = floatval($price);
 $current_user_id = get_current_user_id();
 $discount = floatval(get_user_meta($current_user_id,'show_user_discount', true));

if(!empty($discount)) {
$final_price = $price - (($price*$discount)/100);
return $final_price;
     }
}

//Within the class body

//The 'get_user_meta' helps to get the save metadata for the logged in customer.

public function show_user_discount($user) {
?>
<table class="form-table">
<tr id="show_user_discount">

        <th style="color:#0073AA">Discount</th>
        <td>
        <input type="number" id="show_user_discount" name="show_user_discount" min="0" max="100" value="<?php echo get_user_meta($user->ID, 'show_user_discount', true)  ?>">
        </td>
        </tr>
 </table>
<?php
}


 public function save_user_type_b2bwoo($user) {

        if ( ! current_user_can( 'edit_user') ) {

            return false;

            }

        if(isset($_POST['show_user_discount'])) {

            $show_user_discount = $_POST['show_user_discount'];

            update_user_meta($user, 'show_user_discount', $show_user_discount);

        }

}

}

}

}