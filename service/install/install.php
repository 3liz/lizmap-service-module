<?php
/**
 * @author    3liz
 * @copyright 2018-2020 3liz
 *
 * @see      http://3liz.com
 *
 * @license   GPL 3
 */
class serviceModuleInstaller extends jInstallerModule
{
    public function install()
    {
        // Copy entry point
        $www_path = jApp::wwwPath('service.php');
        $this->copyFile('service.php', $www_path);

    }
}
