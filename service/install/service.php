<?php
/**
 * Entry point for Service API.
 *
 * @author    3liz
 * @copyright 2018-2020 3liz
 *
 * @see      http://3liz.com
 *
 * @license   GPL 3
 */
require '../application.init.php';
require JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php';

checkAppOpened();

// mapping of url to basic url (/module/controller/method)
$mapping = array(

    '/service/wfs/:repository/:project/' => '/lizmap/service/index',
);

jApp::loadConfig('service/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new \Service\Request($mapping));

