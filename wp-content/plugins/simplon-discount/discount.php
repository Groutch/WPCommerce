<?php 
/**
 * Plugin Name: Simplon-discount
 * Description: Free shipping for users who ordered Loyalty Card in the shop
 * Version: 1.0
 * Author: Clément , David and Simon D.
 */


 /**
 * Hides any non-free shipping methods if free shipping is available
 * (if you do have the loyalty card, only "free shipping" is displayed)
 *
 * @param array $rates array of \WC_Shipping_Rate objects that apply to the cart
 * @return array - the updated available rates
 */
function woocommerce_hide_non_free_shipping_methods($rates)
{
	$free_rates=[];
	foreach($rates as $rate_id => $rate)
	{
		if(0===(int)$rate->cost)
		{
			$free_rates[$rate_id]=$rate;
			break;
		}
	}
	return !empty($free_rates)?$free_rates:$rates;
}
add_filter('woocommerce_package_rates','woocommerce_hide_non_free_shipping_methods');

/**
 * Function which defines if free shipping is available or not for current user
 * It checks if his role is "loyalty"
 */
function woocommerce_is_shipping_free()
{
	$user = $user?new WP_User($user):wp_get_current_user();
	$roles = $user->roles?$user->roles:false;
	return in_array("loyalty",$roles);
}
add_filter('woocommerce_shipping_free_shipping_is_available','woocommerce_is_shipping_free');


/**
 * Function which changes role of user from customer to Loyalty , after ordering Loyalty Card in shop
 * (only with "completed" order)
 */

function wp_change_role_on_purchase($order_id) 
{
    $order = wc_get_order($order_id);
    $items = $order->get_items();
    $fidelity_card_id = '58';
    foreach ($items as $item)
    {
        if ($order->user_id>0 && $item['product_id']==$fidelity_card_id)
		{
        	$user = new WP_User($order->user_id);
        	$user->remove_role('customer');
        	$user->add_role('loyalty');
            break;
    	}
    }
}
add_action('woocommerce_order_status_completed','wp_change_role_on_purchase');