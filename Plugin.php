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
		
        $this->hook->on("template:layout:css", array("template" => "plugins/MustCss/Assets/css/must.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/MustCss/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/MustCss/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'Must CSS';
    }

    public function getPluginDescription()
    {
        return t('It has purpose oriented design, responsive layout and special features like replace the logo KB and Syntax highlight in markdown code by Prism.');
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
