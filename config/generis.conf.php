<?php

/**
 * Generis Configuration
 *
 * @author CRP Henri Tudor - TAO Team - {@link http://www.tao.lu}
 * @package generis
 
 * @license GPLv2  http://www.opensource.org/licenses/gpl-2.0.php
 */


# local namespace
define('LOCAL_NAMESPACE','http://192.168.56.101/apps/test/tao-teating.rdf');

# platform identification
define('GENERIS_INSTANCE_NAME','tao-teating');
define('GENERIS_SESSION_NAME','tao_gzgvptc7');

# paths
define('ROOT_PATH','/var/www/main/apps/test/');
define('ROOT_URL','http://192.168.56.101/apps/test/');

# language
define('DEFAULT_LANG','en-US');
define('DEFAULT_ANONYMOUS_INTERFACE_LANG','en-US');

#mode
define('DEBUG_MODE', false);

#application state
/**
 * @deprecated Use \oat\tao\model\maintenance\Maintenance instead
 */
define('SYS_READY', true);

#the time zone, required since PHP5.3
define('TIME_ZONE','UTC');

# Passsword Hash Preferences
define('PASSWORD_HASH_ALGORITHM', 'sha256');
define('PASSWORD_HASH_SALT_LENGTH', 10);

#if there is a .htaccess with an http auth, used for Curl request or virtual http requests
define('USE_HTTP_AUTH', false);
define('USE_HTTP_USER', '');
define('USE_HTTP_PASS', '');

#generis paths
define('VENDOR_PATH' , ROOT_PATH.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR);
define('EXTENSION_PATH' , ROOT_PATH);
define('FILES_PATH','/var/www/main/apps/test/data/');
define('GENERIS_CACHE_PATH', FILES_PATH.'generis'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR);

#path to read configs from
define('CONFIG_PATH', ROOT_PATH.'config/');

# users cache
define('GENERIS_CACHE_USERS_ROLES', true);




