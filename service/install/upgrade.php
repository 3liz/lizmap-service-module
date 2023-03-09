<?php
/**
* @package   lizmap
* @subpackage service
* @author    Michaël DOUCHIN
* @copyright 2022 3liz
* @link      http://3liz.com
* @license    Mozilla Public License 2
*/
class serviceModuleUpgrader extends jInstallerModule
{
    public function install()
    {
        // Copy entry point
        // Needed in the upgrade process
        // if the variable $mapping has changed
        if (method_exists($this, 'createEntryPoint')) {
            $this->createEntryPoint('service.php', 'service/config.ini.php', 'service', 'classic');
        }
        else {
            //deprecated and not safe
            $this->copyFile('service.php', jApp::wwwPath('service.php'));
        }

    }
}
