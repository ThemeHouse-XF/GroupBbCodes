<?php

class ThemeHouse_GroupBbCodes_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/GroupBbCodes/BbCode/UserGroup.php' => 'e5deb1b82b7e77a34ed7da2b14c17537',
                'library/ThemeHouse/GroupBbCodes/Extend/XenForo/BbCode/Formatter/BbCode/Strip.php' => 'd62b65238d21fb3732dd178d9176dc91',
                'library/ThemeHouse/GroupBbCodes/Extend/XenForo/BbCode/Formatter/Text.php' => '847b9cf72a826504c1889ba1d4b79e4e',
                'library/ThemeHouse/GroupBbCodes/Install/Controller.php' => '99edd0334ef63755559177c5bf66be8f',
                'library/ThemeHouse/GroupBbCodes/Listener/InitDependencies.php' => 'c977b465ba0d6f707aa9f30d4df57002',
                'library/ThemeHouse/GroupBbCodes/Listener/LoadClass.php' => 'a99009caefcedf82a916dee8acd63137',
                'library/ThemeHouse/GroupBbCodes/Template/Helper/Core.php' => 'd317793749c89c939b6dab83d6f15c4d',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}