<?php

namespace Kanboard\Plugin\MustCss;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeMustCssConfig;

        if (file_exists('plugins/MustCss/config.php')) {
            require_once('plugins/MustCss/config.php');
        }

        if (isset($themeMustCssConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'MustCss:layout/header/title');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/MustCss/Asset/css/must.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/MustCss/Asset/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/MustCss/Asset/js/prism.js'));
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
        return '1.2.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/MustCss';
    }

}
