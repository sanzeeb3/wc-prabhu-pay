<?php

defined( 'ABSPATH' ) || exit;

/**
 * Settings for Parbhu Pay Gateway.
 */
return array(
	'enabled'           => array(
		'title'   => __( 'Enable/Disable', 'prabhu-pay-for-woocommerce' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Prabhu Pay Payment', 'prabhu-pay-for-woocommerce' ),
		'default' => 'yes',
	),
	'title'             => array(
		'title'       => __( 'Title', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the title which the user sees during checkout.', 'prabhu-pay-for-woocommerce' ),
		'default'     => __( 'Prabhu Pay', 'prabhu-pay-for-woocommerce' ),
	),
	'description'       => array(
		'title'       => __( 'Description', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'prabhu-pay-for-woocommerce' ),
		'default'     => __( 'Pay via Prabhu Pay. You will be redirected to Prabhu Pay website to securely pay with Prabhu Pay.', 'prabhu-pay-for-woocommerce' ),
	),
	'merchant_id'       => array(
		'title'       => __( 'Merchant ID', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'Please enter your Prabhu Pay Merchant ID.', 'prabhu-pay-for-woocommerce' ),
		'default'     => '',
	),
	'merchant_password' => array(
		'title'       => __( 'Merchant Password', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'Please enter your Prabhu Pay metchant password.This is needed in order to take payment.', 'prabhu-pay-for-woocommerce' ),
		'default'     => '',
	),
	'test_mode'         => array(
		'title'       => __( 'Stage/Test mode', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable Stage/Test Mode', 'prabhu-pay-for-woocommerce' ),
		'default'     => 'no',
		'description' => __( 'If enabled, test mode Merchant ID and Merchant Password should be used.' ),
	),
	'invoice_prefix'    => array(
		'title'       => __( 'Invoice prefix', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'Please enter a prefix for your invoice numbers. If you use your Prabhu Pay account for multiple stores ensure this prefix is unique as Prabhu Pay will not allow orders with the same invoice number.', 'prabhu-pay-for-woocommerce' ),
		'default'     => 'WC-',
	),
	'advanced'          => array(
		'title'       => __( 'Advanced options', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'title',
		'description' => '',
	),
	'debug'             => array(
		'title'       => __( 'Debug log', 'prabhu-pay-for-woocommerce' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable logging', 'prabhu-pay-for-woocommerce' ),
		'default'     => 'no',
		/* translators: %s: Prabhu Pay log file path */
		'description' => sprintf( __( 'Log Prabhu Pay events, such as IPN requests, inside <code>%s</code>', 'prabhu-pay-for-woocommerce' ), wc_get_log_file_path( 'Prabhu Pay' ) ),
	),
);
