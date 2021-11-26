<?php

namespace PrabhuPayForWooCommerce;

defined( 'ABSPATH' ) || exit;

/**
 * Refund with Prabhu Pay.
 *
 * @since 1.1.0
 */
class Refund {

	/**
	 * Initialize.
	 * 
	 * @since 1.1.0
	 */
	public function init() {
		add_action( 'woocommerce_order_refunded', array( $this, 'process_refund' ), 10, 2 ); 
	}

	/**
	 * Process Refund.
	 * 
	 * @since 1.1.0
	 */
	public function process_refund( $order_id, $refund_id ) {

		$order = wc_get_order( $order_id );

		error_log( print_r( $order, true ) );
	}
}