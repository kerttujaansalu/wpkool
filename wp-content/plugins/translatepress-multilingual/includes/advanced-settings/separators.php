<?php

add_filter( 'trp_register_advanced_settings', 'trp_register_troubleshoot_separator', 5 );
function trp_register_troubleshoot_separator( $settings_array ){
    $settings_array[] = array(
        'name'          => 'troubleshoot_options',
        'type'          => 'separator',
        'label'         => esc_html__( 'Troubleshooting', 'translatepress-multilingual' ),
        'no-border'     => true
    );
    return $settings_array;
}

add_filter( 'trp_register_advanced_settings', 'trp_register_exclude_separator', 95 );
function trp_register_exclude_separator( $settings_array ){
    $settings_array[] = array(
        'name'          => 'exclude_strings',
        'type'          => 'separator',
        'label'         => esc_html__( 'Exclude strings', 'translatepress-multilingual' )
    );
    return $settings_array;
}

add_filter( 'trp_register_advanced_settings', 'trp_register_debug_separator', 500 );
function trp_register_debug_separator( $settings_array ){
	$settings_array[] = array(
	    'name'          => 'debug_options',
		'type'          => 'separator',
		'label'         => esc_html__( 'Debug', 'translatepress-multilingual' )
	);
	return $settings_array;
}

add_filter( 'trp_register_advanced_settings', 'trp_register_miscellaneous_separator', 1000 );
function trp_register_miscellaneous_separator( $settings_array ){
    $settings_array[] = array(
        'name'          => 'miscellaneous_options',
        'type'          => 'separator',
        'label'         => esc_html__( 'Miscellaneous options', 'translatepress-multilingual' )
    );
    return $settings_array;
}