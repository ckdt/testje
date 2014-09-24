<?php

$roots_includes = array(
	'lib/init.php', // Initial theme setup and constants
	'lib/config.php', // Configuration
	'lib/gallery.php', // Custom [gallery] modifications
	'lib/scripts.php', // Scripts and stylesheets
	'lib/extras.php', // Custom functions
);

foreach ($roots_includes as $file) {
	if (!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}

unset($file, $filepath);