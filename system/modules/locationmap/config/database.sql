-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `locmap_latlng` varchar(64) NOT NULL default '',
  `locmap_infoText` text NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
