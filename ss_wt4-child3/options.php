<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options[] = array(
	'name' => __( 'Logo' ),
	'id'   => 'ss_logo',
	'type' => 'upload'
);

$options[] = array(
	'name' => __( 'Maintenance' ),
	'id'   => 'ss_maintenance',
	'desc' => __( 'Enable maintenance mode' ),
	'std'  => '0',
	'type' => 'checkbox'
);

return $options;