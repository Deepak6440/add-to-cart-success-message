// change add to cart successs message

add_filter( 'wc_add_to_cart_message', 'my_add_to_cart_function', 10, 2 ); 

function my_add_to_cart_function( $message, $product_id ) { 
    $message = sprintf(esc_html__('Selected Items have been added to your cart.','woocommerce'), get_the_title( $product_id ) ); 
    return $message; 
}
