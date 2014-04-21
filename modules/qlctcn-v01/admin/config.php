<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 16 Apr 2014 17:47:06 GMT
 */

if( ! defined( 'NV_IS_FILE_ADMIN' ) )
	die( 'Stop!!!' );

$error = '';
if( $nv_Request->isset_request( 'submit_asset_type', 'post' ) )
{
	$asset_type = $nv_Request->get_title( 'txt_asset_type', 'post', '' );
	if( $asset_type )
	{
		$id = $nv_Request->get_int( 'id', 'post' );
		if( empty( $id ) )
		{
			try
			{
				$smt = $db->prepare( 'INSERT INTO `' . NV_PREFIXLANG . '_' . $module_data . '_asset_type` (`id`, `name`) VALUES (NULL, :name)' );
				$smt->bindParam( ':name', $asset_type, PDO::PARAM_STR );
				$smt->execute( );
			}
			catch(PDOException $e)
			{
				if( strpos( $e->getMessage( ), 'Duplicate entry' ) )
				{
					$error = 'Duplicate entry';
				}
				else
				{
					$error = 'Error SQL';
				}
			}
		}
		else
		{
			try
			{
				$smt = $db->prepare( 'UPDATE `' . NV_PREFIXLANG . '_' . $module_data . '_asset_type` SET `name`=:name WHERE id=' . $id );
				$smt->bindParam( ':name', $asset_type, PDO::PARAM_STR );
				$smt->execute( );
			}
			catch(PDOException $e)
			{
				if( strpos( $e->getMessage( ), 'Duplicate entry' ) )
				{
					$error = 'Duplicate entry';
				}
				else
				{
					$error = 'Error SQL';
				}
			}
		}

		// $sth = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' VALUES(NULL, :name, :birthday, :class)');
		// $sth->bindParam(':name', $name, PDO::PARAM_STR);
		// $sth->bindParam(':name', $birthday, PDO::PARAM_STR);
		// $sth->bindParam(':class', $class, PDO::PARAM_STR);
		// $sth->execute();

	}
	else
	{
		die( "Loi o day" );

	}

};

if( $nv_Request->isset_request( 'delete', 'get' ) )
{
	$id = $nv_Request->get_int( 'id', 'get' );
	if( $id )
	{
		$row = $db->query( 'DELETE FROM `nv4_vi_qlctcn_v01_asset_type` WHERE id=' . $id );
		header( 'Location: http://localhost/film/admin/index.php?language=vi&nv=qlctcn-v01&op=config' );
		die( );
	}
}

$xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file );
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'NV_LANG_VARIABLE', NV_LANG_VARIABLE );
$xtpl->assign( 'NV_LANG_DATA', NV_LANG_DATA );
$xtpl->assign( 'NV_BASE_ADMINURL', NV_BASE_ADMINURL );
$xtpl->assign( 'NV_NAME_VARIABLE', NV_NAME_VARIABLE );
$xtpl->assign( 'NV_OP_VARIABLE', NV_OP_VARIABLE );
$xtpl->assign( 'MODULE_NAME', $module_name );
$xtpl->assign( 'OP', $op );
$xtpl->assign( 'ERROR', $error );

if( $nv_Request->isset_request( 'edit', 'get' ) )
{
	$id = $nv_Request->get_int( 'id', 'get' );
	if( $id )
	{
		$sql = 'SELECT `id`, `name` FROM `' . NV_PREFIXLANG . '_' . $module_data . '_asset_type` WHERE `id`=' . $id;
		$row = $db->query( $sql )->fetchAll( );
		if( empty( $row ) )
		{
			header( 'Location: http://localhost/film/admin/index.php?language=vi&nv=qlctcn-v01&op=config' );
			die( );
		}
		$xtpl->assign( 'DATA', $row[0] );
	}
}

//$db->query("INSERT INTO `" . NV_PREFIXLANG . "_" . $module_data . "_asset_type` (`id`, `name`) VALUES (NULL, 'Chào các bạn".time()."')");

//Tạo mảng chứa tên các bảng trong CSDL
//
// $table=array();
// $table['asset_type']='" . NV_PREFIXLANG . "_" . $module_data . "_asset_type';
// $table['income_type']='" . NV_PREFIXLANG . "_" . $module_data . "_income_type';
// $table['spend_type']='" . NV_PREFIXLANG . "_" . $module_data . "_spend_type';
// $table['place_type']='" . NV_PREFIXLANG . "_" . $module_data . "_place_type';
// $table['priority_type']='" . NV_PREFIXLANG . "_" . $module_data . "_priority_type';
// $table['borrow_type']='" . NV_PREFIXLANG . "_" . $module_data . "_borrow_type';

//mysql_query("SET NAMES 'utf8'");
//Xử lý: lấy DL loại tài sản
$sql_asset_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_asset_type";
$result_asset_type = $db->query( $sql_asset_type )->fetchAll( );
foreach( $result_asset_type as $value )
{
	$xtpl->assign( 'ASSET_TYPE', array(
		'id' => $value['id'],
		'val' => $value['name']
	) );
	$xtpl->parse( 'main.asset_type' );
}
/*
 //Xử lý: lấy DL loại tài sản
 $sql_income_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_income_type";
 $result_income_type = $db->query($sql_income_type)->fetchAll();
 foreach ($result_income_type as $key => $value) {
 $xtpl->assign('INCOME_TYPE',
 array(
 'key'=>$key,
 'val'=>$value['name']));
 $xtpl->parse('main.income_type');
 }

 //Xử lý: lấy DL loại chi tiêu
 $sql_spend_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_spend_type";
 $result_spend_type = $db->query($sql_spend_type)->fetchAll();
 foreach ($result_spend_type as $key => $value) {
 $xtpl->assign('SPEND_TYPE',
 array(
 'key'=>$key,
 'val'=>$value['name']));
 $xtpl->parse('main.spend_type');
 }

 //Xử lý: lấy DL địa điểm
 $sql_place_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_place_type";
 $result_place_type = $db->query($sql_place_type)->fetchAll();
 foreach ($result_place_type as $key => $value) {
 $xtpl->assign('PLACE_TYPE',
 array(
 'key'=>$key,
 'val'=>$value['name']));
 $xtpl->parse('main.place_type');
 }

 //Xử lý: lấy DL loại ưu tiên
 $sql_priority_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_priority_type";
 $result_priority_type = $db->query($sql_priority_type)->fetchAll();
 foreach ($result_priority_type as $key => $value) {
 $xtpl->assign('PRIORITY_TYPE',
 array(
 'key'=>$key,
 'val'=>$value['name']));
 $xtpl->parse('main.priority_type');
 }

 //Xử lý: lấy DL loại cho|đi vay
 $sql_borrow_type = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_borrow_type";
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

 */

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