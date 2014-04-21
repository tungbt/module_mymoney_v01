<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Wed, 16 Apr 2014 17:47:06 GMT
 */

if ( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) or ! defined( 'NV_IS_MODADMIN' ) ) die( 'Stop!!!' );

$submenu['main'] = $lang_module['main'];
$submenu['config'] = $lang_module['config'];
$submenu['qlthu'] = $lang_module['qlthu'];
$submenu['qlchi'] = $lang_module['qlchi'];
$submenu['qlchovay'] = $lang_module['qlchovay'];
$submenu['qldivay'] = $lang_module['qldivay'];
$submenu['qltietkiem'] = $lang_module['qltietkiem'];
$submenu['qlkehoach'] = $lang_module['qlkehoach'];
$submenu['qllstrano'] = $lang_module['qllstrano'];
$submenu['qlkhac'] = $lang_module['qlkhac'];

$allow_func = array( 'main', 'config', 'qlthu', 'qlchi', 'qlchovay', 'qldivay', 'qltietkiem', 'qlkehoach', 'qllstrano', 'qlkhac');

define( 'NV_IS_FILE_ADMIN', true );

?>