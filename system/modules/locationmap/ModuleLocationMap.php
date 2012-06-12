<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Sergey Dyagovchenko 2012
 * @author     Sergey Dyagovchenko <http://d.sumy.ua>
 * @package    LocationMap
 * @license    LGPL 
 * @filesource
 */


/**
 * Class ModuleLocationMap
 *
 * @copyright  Sergey Dyagovchenko 2012
 * @author     Sergey Dyagovchenko <http://d.sumy.ua>
 * @package    Controller
 */
class ModuleLocationMap extends Module
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
		$GLOBALS['TL_JAVASCRIPT'][] = 'http://maps.googleapis.com/maps/api/js?sensor=false';
		$GLOBALS['TL_MOOTOOLS'][] = '<script src="system/modules/locationmap/html/googlemap.min.js"></script>';

		$this->Template->latlng = deserialize($this->locmap_latlng);
		$this->Template->infoText = $this->locmap_infoText;
	}
}

?>