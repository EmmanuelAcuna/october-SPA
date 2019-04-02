<?php namespace ImbaSynergy\OctoberSpa;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Imbasynergy\Octoberspa\Components\Spa' => 'makeSpa'
        ];
    }

    public function registerSettings()
    {
    }
}
