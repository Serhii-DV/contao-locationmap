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


$dca = &$GLOBALS['TL_DCA']['tl_module'];
$lang = &$GLOBALS['TL_LANG']['tl_module'];

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
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$dca['fields']['locmap_infoText'] = array
(
	'label'                   => &$lang['locmap_infoText'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
	'sql'                     => "text NULL"
);

unset($dca, $lang);
