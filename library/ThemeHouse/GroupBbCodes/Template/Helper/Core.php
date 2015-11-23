<?php

class ThemeHouse_GroupBbCodes_Template_Helper_Core
{

    public static function helperSnippet($string, $maxLength = 0, array $options = array())
    {
        // TODO: smart stripping of tags with options
        $string = self::stripTag('ismemberofusergroup', $string);
        $string = self::stripTag('isnotmemberofusergroup', $string);
        $string = self::stripTag('isuserid', $string);
        $string = self::stripTag('isusername', $string);
        $string = self::stripTag('isnotuserid', $string);
        $string = self::stripTag('isnotusername', $string);

        $visitor = XenForo_Visitor::getInstance();

        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');

        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), 1)) {
            $string = self::stripTag('guest', $string);
        } else {
            $string = self::stripTag('notguest', $string);
        }
        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), 2)) {
            $string = self::stripTag('registered', $string);
        } else {
            $string = self::stripTag('notregistered', $string);
        }
        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), 3)) {
            $string = self::stripTag('admin', $string);
        } else {
            $string = self::stripTag('notadmin', $string);
        }
        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), 4)) {
            $string = self::stripTag('mod', $string);
        } else {
            $string = self::stripTag('notmod', $string);
        }

        return XenForo_Template_Helper_Core::callHelper('th_usergroupbbcodes_snippet',
            array(
                $string,
                $maxLength,
                $options
            ));
    }

    public static function stripTag($tag, $string)
    {
        $parts = preg_split('#(\[' . $tag . '[^\]]*\]|\[/' . $tag . '\])#i', $string, -1, PREG_SPLIT_DELIM_CAPTURE);
        $string = '';
        $level = 0;
        foreach ($parts as $i => $part) {
            if ($i % 2 == 0) {
                // always text, only include if not inside quotes
                if ($level == 0) {
                    $string .= rtrim($part) . "\n";
                }
            } else {
                // quote start/end
                if ($part[1] == '/') {
                    // close tag, down a level if open
                    if ($level) {
                        $level--;
                    }
                } else {
                    // up a level
                    $level++;
                }
            }
        }

        return $string;
    }
}