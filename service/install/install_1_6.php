<?php
/**
* @package   lizmap
* @subpackage service
* @author    Michaël DOUCHIN
* @copyright 2022 3liz
* @link      http://3liz.com
* @license    Mozilla Public License 2
*/
class serviceModuleInstaller extends jInstallerModule
{
    public function install()
    {
        // Copy entry point
        // Needed in the upgrade process
        // if the variable $mapping has changed
        $this->createEntryPoint('service.php', 'config_1_6/config.ini.php', 'service');

    }
}
