<?php
/*
Plugin Name: 	Recolize Recommendation Engine
Plugin URI: 	http://www.recolize.com/
Description: 	This plugin enables you to use the Recolize Recommendation Engine in your WordPress blog to offer a personalized blog experience.
Version: 		1.0.0
Author: 		Recolize GmbH <service@recolize.com>
Author URI: 	http://www.recolize.com/
License:		GNU General Public License Version 3 (GPLv3)
License URI:	http://opensource.org/licenses/GPL-3.0
*/

/**
 * Recolize WordPress Plugin
 *
 * @section LICENSE
 * This source file is subject to the GNU General Public License Version 3 (GPLv3).
 *
 * @category Recolize
 * @package Recolize_RecommendationEngine
 * @author Recolize GmbH <service@recolize.com>
 * @copyright 2015 Recolize GmbH (http://www.recolize.com)
 * @license http://opensource.org/licenses/GPL-3.0 GNU General Public License Version 3 (GPLv3).
 */

if (function_exists('add_action') === false) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'includes/PageType.php';
require_once plugin_dir_path(__FILE__) . 'includes/JavaScriptSnippet.php';
require_once plugin_dir_path(__FILE__) . 'admin/Settings.php';

$pageType = new Recolize_PageType();
$pageType->initialize();

$javaScriptSnippet = new Recolize_JavaScriptSnippet();
$javaScriptSnippet->initialize();

if (is_admin() === true) {
    $settings = new Recolize_Admin_Settings();
    $settings->initialize();
}