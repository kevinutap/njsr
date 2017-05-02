<?php

/**
 * @file plugins/themes/njsr/njsrThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class njsrThemePlugin
 * @ingroup plugins_themes_njsr
 *
 * @brief "njsr" theme plugin
 */

import('classes.plugins.ThemePlugin');

class njsrThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'njsrThemePlugin';
	}

	function getDisplayName() {
		return 'njsr Theme';
	}

	function getDescription() {
		return 'Light, plain, spacious layout';
	}

	function getStylesheetFilename() {
		return 'njsr.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
