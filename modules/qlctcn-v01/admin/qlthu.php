<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 16 Apr 2014 17:47:06 GMT
 */

if ( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file );
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'NV_LANG_VARIABLE', NV_LANG_VARIABLE );
$xtpl->assign( 'NV_LANG_DATA', NV_LANG_DATA );
$xtpl->assign( 'NV_BASE_ADMINURL', NV_BASE_ADMINURL );
$xtpl->assign( 'NV_NAME_VARIABLE', NV_NAME_VARIABLE );
$xtpl->assign( 'NV_OP_VARIABLE', NV_OP_VARIABLE );
$xtpl->assign( 'MODULE_NAME', $module_name );
$xtpl->assign( 'OP', $op );



//Xử lý: lấy DL loại tài sản
$sql_income_type = "SELECT * FROM nv4_mdl1_income_type";
$result_income_type = $db->query($sql_income_type)->fetchAll();
foreach ($result_income_type as $key => $value) {
	$xtpl->assign('INCOME_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.income_type');
}

//Xử lý: lấy DL loại tài sản
$sql_asset_type = "SELECT * FROM nv4_mdl1_asset_type";
$result_asset_type = $db->query($sql_asset_type)->fetchAll();
foreach ($result_asset_type as $key => $value) {
	$xtpl->assign('ASSET_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.asset_type');
}



$xtpl->parse( 'main' );
$contents = $xtpl->text( 'main' );

$page_title = $lang_module['qlthu'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';

?>