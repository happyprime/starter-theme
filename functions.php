<?php

/**
 * Load general utilities available in the theme.
 */
require_once __DIR__ . '/includes/utilities.php';

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
