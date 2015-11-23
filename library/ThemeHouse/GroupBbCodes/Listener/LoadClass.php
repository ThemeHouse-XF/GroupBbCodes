<?php

class ThemeHouse_GroupBbCodes_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_GroupBbCodes' => array(
                'bb_code' => array(
                    'XenForo_BbCode_Formatter_BbCode_Strip',
                    'XenForo_BbCode_Formatter_Text'
                ), 
            ), 
        );
    }

    public static function loadClassBbCode($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_GroupBbCodes_Listener_LoadClass', $class, $extend, 'bb_code');
    }
}