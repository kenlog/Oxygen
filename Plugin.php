<?php

namespace Kanboard\Plugin\Oxygen;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeOxygenConfig;

        if (file_exists('plugins/Oxygen/config.php')) 
        {
            require_once('plugins/Oxygen/config.php');
        }

        if (isset($themeOxygenConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Oxygen:layout/header/title');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Oxygen/Assets/css/oxygen.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/Oxygen/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Oxygen/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Oxygen/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'Oxygen';
    }

    public function getPluginDescription()
    {
        return t('This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.2.1';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.5';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/oxygen';
    }

}
