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
        if (method_exists($this, 'createEntryPoint')) {
            $this->createEntryPoint('service.php', 'service/config.ini.php', 'service', 'classic');
        }
        else {
            // Deprecated
            // Copy configuration file
            $this->copyFile('service.php', jApp::wwwPath('service.php'));
        }
    }
}
