<?php
if (file_exists(dirname(__FILE__)."/local.config_sp.php")) { require_once(dirname(__FILE__)."/local.config_sp.php"); }

define('OPENSOCIAL_GADGET_SERVER_URL', 'http://pf-sb.gree.net');
define('OPENSOCIAL_MEDIA_SERVER_URL', 'http://pf-sb.gree.net');
define('APP_ROOT', 'http://a22586.app-sb.gree-pf.net');
define('MEDIA_ROOT', 'http://dev-swf.tod.broom.jp');

define('SOURCE_DIR', '.' . DIRECTORY_SEPARATOR . 'source');//FPの場合はmobile配下
define('IMAGE_DIR', SOURCE_DIR . DIRECTORY_SEPARATOR. 'image');//FPの場合はmobile配下
define('ERROR_REDIRECT', 'http://a22586.app-sb.gree-pf.net/Error/Invalid');
define('PAGE_TITLE', 'ﾀﾜﾄﾞﾗdev');

define('GREE_REEL_JS_URL', 'http://aimg.gree.jp/js/reel/Reel-1.2.2.7.js');
define('GREE_THEATRICAL_JS_URL', 'http://dist.gree.io/libs/theatrical/1.2/theatrical-1.2-140617.js');

define('OAUTH_GADGET_SERVER_AUTHORIZATION', false);

//開発環境では強制的にprefixが付与されているためset,get時にkeyに付加する　※本番用configは空文字
define('PLATFORM_PREFIX', OPENSOCIAL_PLATFORM . OPENSOCIAL_APP_ID);
define('CACHE_PREFIX', "tod");

define('CHECK_CONTENT_LENGTH_ENABLED', False);
?>
