<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   Locationmap
 * @author    Sergey Dyagovchenko aka DyaGa
 * @license   GNU/LGPL
 * @copyright Sergey Dyagovchenko 2012-2013
 */


namespace Locationmap;


/**
 * Class ModuleLocationMap
 *
 * @package    Locationmap
 * @copyright  Sergey Dyagovchenko 2012-2013
 * @author     Sergey Dyagovchenko <http://d.sumy.ua>
 */
class ModuleLocationMap extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_locationmap';


	/**
	 * Generate module
	 */
	protected function compile()
	{
		// css
		$GLOBALS['TL_CSS'][] = 'system/modules/locationmap/assets/googlemap.min.css|all|static';

		// js
		$GLOBALS['TL_JAVASCRIPT'][] = 'https://maps.googleapis.com/maps/api/js?v=3&sensor=false';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/locationmap/assets/googlemap.min.js|all|static';

		$this->Template->latlng = deserialize($this->locmap_latlng);
		$this->Template->infoText = $this->locmap_infoText;
	}
}
