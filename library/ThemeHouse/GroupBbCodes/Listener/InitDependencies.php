<?php

class ThemeHouse_GroupBbCodes_Listener_InitDependencies extends ThemeHouse_Listener_InitDependencies
{

    public function run()
    {
        $this->addHelperCallbacks(
            array(
                'th_usergroupbbcodes_snippet' => XenForo_Template_Helper_Core::$helperCallbacks['snippet'],
                'snippet' => array(
                    'ThemeHouse_GroupBbCodes_Template_Helper_Core',
                    'helperSnippet'
                )
            ));

        parent::run();
    }

    public static function initDependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        $initDependencies = new ThemeHouse_GroupBbCodes_Listener_InitDependencies($dependencies, $data);
        $initDependencies->run();
    }
}