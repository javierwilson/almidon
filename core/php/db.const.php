<?php
/**
 * db.const.php, where's almidon? and other server-wide constants
 * @package almidon
 */

if (DEBUG === true) ini_set('display_errors', true);

# Where is Almidon?
if (!defined('ALMIDONDIR')) {
  $almidondir = dirname(__FILE__);
  $almidondir = substr($almidondir, 0, strrpos($almidondir,'/'));
  /**
  * Directorio del core de almidon
  */
  define ('ALMIDONDIR', $almidondir);
}

# Use Almidon's PHP and Almidon's PEAR
set_include_path(get_include_path() . PATH_SEPARATOR . ALMIDONDIR . '/php' . PATH_SEPARATOR . ALMIDONDIR . '/php/pear' . PATH_SEPARATOR . ALMIDONDIR . '/include.d');

# Other constants... define if not defined
/**
* @ignore Debe grabar comandos SQL en bitacora?
*/
if (!defined('ALM_SQL_DEBUG')) define('ALM_SQL_DEBUG', true);
/**
* @ignore Debe grabar erores en bitacora? (repatido!)
*/
if (!defined('ALM_DEBUG')) define('ALM_DEBUG', false);
/**
* @ignore Que tags HTML permite almidon?
*/
if (!defined('ALM_ALLOW_TAGS')) define('ALM_ALLOW_TAGS', '<br/><br><p><h1><h2><h3><b><i><div><span><img><img1><img2><img3><img4><strong><li><ul><ol><table><tbody><tr><td><font><a><sup><object><param><embed><hr><hr /><hr/>');

/**
* Permisos por defecto para los directorios que se creen en files
*/
define('ALM_MASK',0775);