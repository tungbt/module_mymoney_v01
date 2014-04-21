<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-10-2010 20:59
 */

if( ! defined( 'NV_IS_FILE_MODULES' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
// Tên bảng
// nv4_ngonngu_tenmodule_phanmorong
//nv4_vi_qlctcn_v01_asset_type

$result = $db->query( 'SHOW TABLE STATUS LIKE ' . $db->quote( $db_config['prefix'] . '\_' . $lang . '\_' . $module_data . '\_%' ) );
while( $item = $result->fetch() )
{
	$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $item['name'];
}

$sql_create_module = $sql_drop_module;

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_asset_type (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM";
	
	
	$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_borrow (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nv4_users_userid` mediumint(8) unsigned NOT NULL,
  `nv4_mdl1_borrow_type_id` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `partner` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `nv4_mdl1_asset_type_id` int(11) NOT NULL,
  `rate` decimal(10,0) DEFAULT '0',
  `schedule` tinyint(4) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `nv4_mdl1_his_pay_id` int(11) NOT NULL,
  `debt` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `date_pay` date DEFAULT NULL,
  `update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nv4_mdl1_borrow_nv4_users_idx` (`nv4_users_userid`),
  KEY `fk_nv4_mdl1_borrow_nv4_mdl1_borrow_type1_idx` (`nv4_mdl1_borrow_type_id`),
  KEY `fk_nv4_mdl1_borrow_nv4_mdl1_asset_type1_idx` (`nv4_mdl1_asset_type_id`),
  KEY `fk_nv4_mdl1_borrow_nv4_mdl1_his_pay1_idx` (`nv4_mdl1_his_pay_id`)
	) ENGINE=MyISAM";
	
	$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (

	) ENGINE=MyISAM";
	
	$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (

	) ENGINE=MyISAM";
	
	$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (

	) ENGINE=MyISAM";

?>