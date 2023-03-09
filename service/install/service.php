<?php
/**
* @package   lizmap
* @subpackage service
* @author    Michaël DOUCHIN
* @copyright 2022 3liz
* @link      http://3liz.com
* @license    Mozilla Public License 2
*/
require ('../application.init.php');
require (JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php');

checkAppOpened();

// mapping of url to basic url (/module/controller/method)
$mapping = array(

    '/:repository/:project/' => '/service/default/index',
);

jApp::loadConfig('service/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new \Service\Request($mapping));
