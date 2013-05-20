<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Locationmap
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Locationmap',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Locationmap\ModuleLocationMap' => 'system/modules/locationmap/modules/ModuleLocationMap.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_locationmap' => 'system/modules/locationmap/templates',
));
