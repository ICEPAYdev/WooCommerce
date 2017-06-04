<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for ICEPAY Gateway.
 */
return array(
	'postbackurl' => array(
		'title' => __('Postback URL', 'icepay'),
		'type' => 'text',
		'description' => __('Copy and paste this URL to the Success, Error and Postback section of your ICEPAY merchant account page.', 'icepay'),
		'desc_tip' => true
	),
	'merchantid' => array(
		'title' => __('Merchant ID', 'icepay'),
		'type' => 'text',
		'description' => __('Copy the Merchant ID from your ICEPAY account.', 'icepay'),
		'desc_tip' => true
	),
	'secretcode' => array(
		'title' => __('Secretcode', 'icepay'),
		'type' => 'text',
		'description' => __('Copy the Secret Code from your ICEPAY account.', 'icepay'),
		'desc_tip' => true
	),
	'steptwo' => array(
		'title' => __('Optional configuration', 'icepay'),
		'type' => 'title'
	),
	'descriptiontransaction' => array(
		'title' => __('Description on transaction statement', 'icepay'),
		'type' => 'text',
		'description' => __('Some payment methods allow customized descriptions on the transaction statement. If left empty the Order ID is used. (Max 100 char.)', 'icepay'),
		'desc_tip' => true
	)
);
