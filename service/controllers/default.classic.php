<?php
/**
* @package   lizmap
* @subpackage service
* @author    Michaël DOUCHIN
* @copyright 2022 3liz
* @link      http://3liz.com
* @license    Mozilla Public License 2
*/

include jApp::getModulePath('lizmap').'controllers/service.classic.php';

class defaultCtrl extends serviceCtrl {
    /**
    *
    */
    function index() {
        return parent::index();
    }
}
