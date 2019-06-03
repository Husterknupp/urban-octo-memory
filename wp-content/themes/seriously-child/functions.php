<?php

use Openmarco\Seriously\Service\Protocol;
use Openmarco\Seriously\Asset\Style;
use Openmarco\Seriously\Asset\Script;

/**
 * Initialise
 */
add_action('init', function () {
	
	// Includes
	require_once __DIR__ . '/lib/extras.php';
});

add_action('omt_public_assets', function () {
	
	$asset = new Style('child-custom-css', Protocol::request('child-theme://assets/css/style.css'));
	$asset->add(Style::TARGET_PUBLIC);
	
	$asset = new Script('child-custom-js', Protocol::request('child-theme://assets/js/custom.js'), ['jquery']);
	$asset->add(Script::TARGET_PUBLIC);
}, 10);
