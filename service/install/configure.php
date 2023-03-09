<?php
/**
* @package   lizmap
* @subpackage service
* @author    Michaël DOUCHIN
* @copyright 2022 3liz
* @link      http://3liz.com
* @license    Mozilla Public License 2
*/

use Jelix\Routing\UrlMapping\EntryPointUrlModifier;
use \Jelix\Routing\UrlMapping\MapEntry\MapInclude;

/**
 * Configurator for Lizmap 3.6+/Jelix 1.8+
 */
class serviceModuleConfigurator extends \Jelix\Installer\Module\Configurator {

    public function getDefaultParameters()
    {
        return array();
    }

    public function declareUrls(EntryPointUrlModifier $registerOnEntryPoint)
    {
        $registerOnEntryPoint->havingName(
            'service',
            array(
                new MapInclude('urls.xml')
            )
        )
        ;
    }

    public function getEntryPointsToCreate()
    {
        return array(
            new \Jelix\Installer\Module\EntryPointToInstall(
                'service.php',
                'service/config.ini.php',
                'service.php',
                'config/config.ini.php'
            )
        );
    }

    function configure(\Jelix\Installer\Module\API\ConfigurationHelpers $helpers)
    {
    }
}
