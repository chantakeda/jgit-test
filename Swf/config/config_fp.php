<?php
if (file_exists(dirname(__FILE__)."/local.config_fp.php")) { require_once(dirname(__FILE__)."/local.config_fp.php"); }

define('OPENSOCIAL_GADGET_SERVER_URL', 'http://mgadget-sb.gree.jp');
define('OPENSOCIAL_MEDIA_SERVER_URL', 'http://mgadget-sb.gree.jp');
define('APP_ROOT', 'http://sb.gree-fp.tod.broom.jp');
define('MEDIA_ROOT', 'http://dev-swf.tod.broom.jp');

define('SOURCE_DIR', '.' . DIRECTORY_SEPARATOR . 'source' . DIRECTORY_SEPARATOR . 'fp');//FP�̏ꍇ��fp�z��
define('IMAGE_DIR', SOURCE_DIR . DIRECTORY_SEPARATOR. 'image' . DIRECTORY_SEPARATOR);//FP�̏ꍇ��mobile�z��
define('ERROR_REDIRECT', 'http://sb.gree-fp.tod.broom.jp/Error/Invalid');
define('PAGE_TITLE', '�����dev');

//define('GREE_REEL_JS_URL', 'http://aimg.gree.jp/js/reel/Reel-1.2.2.7.js');
//define('GREE_THEATRICAL_JS_URL', 'http://img.broom.jp/js/lib/theatrical.js');

define('OAUTH_GADGET_SERVER_AUTHORIZATION', true);

//�J�����ł͋����I��prefix���t�^����Ă��邽��set,get����key�ɕt������@���{�ԗpconfig�͋󕶎�
define('PLATFORM_PREFIX', OPENSOCIAL_PLATFORM . OPENSOCIAL_APP_ID);
define('CACHE_PREFIX', "tod");

define('CHECK_CONTENT_LENGTH_ENABLED', true);
?>
