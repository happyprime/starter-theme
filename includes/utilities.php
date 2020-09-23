<?php

namespace ThemeMainNamespace\Utilities;

/**
 * Retrieve the theme's version number.
 *
 * @return string Current theme version number.
 */
function get_version() {
	$version = wp_get_theme()->version;

	return $version;
}
