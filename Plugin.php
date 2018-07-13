<?php

namespace Kanboard\Plugin\MustCss;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/MustCss/must.css"));
    }
    public function getPluginName()
    {
        return 'Must CSS';
    }
    public function getPluginDescription()
    {
        return t('This plugin add a new stylesheet and override default styles.');
    }
    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }
    public function getPluginVersion()
    {
        return '1.0.0';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/MustCss';
    }
}
