<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 16 Apr 2014 17:47:06 GMT
 */

if ( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

if($nv_Request -> isset_request('submit_asset_type', 'post')){
	$asset_type = $nv_Request -> get_title('txt_asset_type', 'post', '');
	if($asset_type){
		$smt = $db->prepare('INSERT INTO `nv4_mdl1_asset_type` (`id`, `name`) VALUES (NULL, :name)');
		$smt->bindParam(':name',$asset_type, PDO::PARAM_STR);
		$smt->execute();
		
		// $sth = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' VALUES(NULL, :name, :birthday, :class)');
		// $sth->bindParam(':name', $name, PDO::PARAM_STR);
		// $sth->bindParam(':name', $birthday, PDO::PARAM_STR);
		// $sth->bindParam(':class', $class, PDO::PARAM_STR);
		// $sth->execute();
				
	}else{
		die("Loi o day");
		
	}
	
	
	
};




$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file );
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'NV_LANG_VARIABLE', NV_LANG_VARIABLE );
$xtpl->assign( 'NV_LANG_DATA', NV_LANG_DATA );
$xtpl->assign( 'NV_BASE_ADMINURL', NV_BASE_ADMINURL );
$xtpl->assign( 'NV_NAME_VARIABLE', NV_NAME_VARIABLE );
$xtpl->assign( 'NV_OP_VARIABLE', NV_OP_VARIABLE );
$xtpl->assign( 'MODULE_NAME', $module_name );
$xtpl->assign( 'OP', $op );

//$db->query("INSERT INTO `nv4_mdl1_asset_type` (`id`, `name`) VALUES (NULL, 'Chào các bạn".time()."')");

//Tạo mảng chứa tên các bảng trong CSDL
// 
// $table=array();
// $table['asset_type']='nv4_mdl1_asset_type';
// $table['income_type']='nv4_mdl1_income_type';
// $table['spend_type']='nv4_mdl1_spend_type';
// $table['place_type']='nv4_mdl1_place_type';
// $table['priority_type']='nv4_mdl1_priority_type';
// $table['borrow_type']='nv4_mdl1_borrow_type';

//mysql_query("SET NAMES 'utf8'");
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

//Xử lý: lấy DL loại chi tiêu
$sql_spend_type = "SELECT * FROM nv4_mdl1_spend_type";
$result_spend_type = $db->query($sql_spend_type)->fetchAll();
foreach ($result_spend_type as $key => $value) {
	$xtpl->assign('SPEND_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.spend_type');
}

//Xử lý: lấy DL địa điểm
$sql_place_type = "SELECT * FROM nv4_mdl1_place_type";
$result_place_type = $db->query($sql_place_type)->fetchAll();
foreach ($result_place_type as $key => $value) {
	$xtpl->assign('PLACE_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.place_type');
}

//Xử lý: lấy DL loại ưu tiên
$sql_priority_type = "SELECT * FROM nv4_mdl1_priority_type";
$result_priority_type = $db->query($sql_priority_type)->fetchAll();
foreach ($result_priority_type as $key => $value) {
	$xtpl->assign('PRIORITY_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.priority_type');
}

//Xử lý: lấy DL loại cho|đi vay
$sql_borrow_type = "SELECT * FROM nv4_mdl1_borrow_type";
$result_borrow_type = $db->query($sql_borrow_type)->fetchAll();
foreach ($result_borrow_type as $key => $value) {
	$xtpl->assign('BORROW_TYPE', 
		array(
			'key'=>$key,
			'val'=>$value['name']));
	$xtpl->parse('main.borrow_type');
}

/*
$sql="";
$smt = $db->prepare($sql);

$smt->bindValue('title',$title);//truyền giá trị
$smt->bindValue('title',$title);
$smt->bindValue('title',$title);

$smt->bindParam('title',$title);//truyền địa chỉ ô nhớ
$smt->bindParam('title',$title);
$smt->bindParam('title',$title);
 
$smt->bindParam('title',$title, PDO::PARAM_STR);

$smt->bindParam('title',$title, PDO::PARAM_INT, srtlen($title));//Dùng tham số cuối cùng khi lớn hơn 400kt
$smt->execute();


/*
echo "<pre>";
print_r($result);
echo "</pre>";

exit;
*/







$xtpl->parse( 'main' );
$contents = $xtpl->text( 'main' );

$page_title = $lang_module['config'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';

?>