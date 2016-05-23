<?php
namespace Composer\Installers;

use Composer\Package\PackageInterface;

class ExpressionEngineInstaller extends BaseInstaller
{

    protected $locations = [];

    private $ee2Locations = array(
        'addon'   => 'system/expressionengine/third-party/{$name}/',
        'theme'   => 'themes/third-party/{$name}/',
    );

    private $ee3Locations = array(
        'addon'   => 'system/user/addons/{$name}/',
        'theme'   => 'themes/user/{$name}/',
    );

    public function getInstallPath(PackageInterface $package, $frameworkType = '')
    {
        //$type = $this->package->getType();

        $version = "{$frameworkType}Locations";
        $this->locations = $this->$version;

        return parent::getInstallPath($package, $frameworkType);
    }
}
