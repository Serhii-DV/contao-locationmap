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

$dca =& $GLOBALS['TL_DCA']['tl_module'];
$lang =& $GLOBALS['TL_LANG']['tl_module'];

/**
 * Add palettes to tl_module
 */
$dca['palettes']['locationmap']    = '{title_legend},name,type;{config_legend},locmap_latlng,locmap_infoText;{expert_legend:hide},cssID,space';


/**
 * Add fields to tl_module
 */
$dca['fields']['locmap_latlng'] = array
(
	'label'                   => &$lang['locmap_latlng'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);

$dca['fields']['locmap_infoText'] = array
(
	'label'                   => &$lang['locmap_infoText'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr')
);

?>