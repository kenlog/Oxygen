<?php

namespace Kanboard\Plugin\Css;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/Css/must.css"));
    }

    public function getPluginName()
    {
        return 'Css';
    }

    public function getPluginDescription()
    {
        return t('This plugin add a new stylesheet and override default styles.');
    }

    public function getPluginAuthor()
    {
        return 'Author';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/must.css';
    }
}
