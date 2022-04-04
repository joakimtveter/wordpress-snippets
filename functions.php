/**
 * Trim zeros in price decimals
 * 
 * This snippet is required for use with Nets Easy Pament plugin, if not you will get an error with amounts not matching. 
 * It trims price to have no decimals, but keeps decimals for tax calculation.
 * Make sure the WooCommerce setting allows for two decimals. 
 */
 add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

/**
 * Disable themes, plugins and WP core update notifications
 */
function remove_core_updates()
{
	global $wp_version;
	return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
}
add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');
