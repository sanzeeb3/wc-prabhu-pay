<?php
/**
 * Plugin Name: Add Prabhu Pay Payment In WooCommerce
 * Description: Accept payment from Prabhu Pay in your online store
 * Version: 1.0.0
 * Author: Sanjeev Aryal
 * Author URI: https://www.sanjeebaryal.com.np
 * Text Domain: prabhu-pay-for-woocommerce
 */

/**
 * Plugin.
 *
 * @package    Prabhu Pay For WooCommerce
 * @author     Sanjeev Aryal
 * @since      1.0.0
 *
 * @license    GPL-3.0+ @see https://www.gnu.org/licenses/gpl-3.0.html
 */

defined( 'ABSPATH' ) || die();

/**
 * Plugin constants.
 *
 * @since 1.0.0
 */
define( 'PRABHU_PAY_FOR_WOOCOMMERCE_PLUGIN_FILE', __FILE__ );
define( 'PRABHU_PAY_FOR_WOOCOMMERCE_PLUGIN_PATH', __DIR__ );
define( 'PRABHU_PAY_FOR_WOOCOMMERCE_VERSION', '1.0.0' );

add_action(
	'plugins_loaded',
	function() {

		// Return if WooCommerce is not installed.
		if ( ! defined( 'WC_VERSION' ) ) {
			return;
		}

		require_once __DIR__ . '/src/Plugin.php';
	}
);

add_filter( 'woocommerce_payment_gateways', 'prabhu_pay_gateway' );

/**
 * Add Prabhu Pay gateway to WooCommerce.
 *
 * @param  array $methods WooCommerce payment methods.
 *
 * @since 1.0.0
 *
 * @return array Payment methods including Prabhu Pay.
 */
function prabhu_pay_gateway( $methods ) {
	$methods[] = 'WC_Gateway_Prabhu_Pay';

	return $methods;
}
