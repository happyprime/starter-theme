<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Load general theme setup hooks.
 */
require_once __DIR__ . '/includes/theme-setup.php';

/**
 * Implement the Custom Header feature.
 */
require_once __DIR__ . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once __DIR__ . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once __DIR__ . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require_once __DIR__ . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once __DIR__ . '/includes/jetpack.php';
}
