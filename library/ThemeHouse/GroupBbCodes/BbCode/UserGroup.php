<?php

class ThemeHouse_GroupBbCodes_BbCode_UserGroup
{

    public static function userGroup(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $userGroupIds = explode(',', $tag['option']);
        
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
        
        $visitor = XenForo_Visitor::getInstance();
        
        if ($userModel->isMemberOfUserGroup($visitor->toArray(), $userGroupIds)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }

    public static function unregistered(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 1;
        
        return self::userGroup($tag, $rendererStates, $formatter);
    }

    public static function registered(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 2;
        
        return self::userGroup($tag, $rendererStates, $formatter);
    }

    public static function administrator(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 3;
        
        return self::userGroup($tag, $rendererStates, $formatter);
    }

    public static function moderator(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 4;
        
        return self::userGroup($tag, $rendererStates, $formatter);
    }

    public static function notUserGroup(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $userGroupIds = explode(',', $tag['option']);
        
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
        
        $visitor = XenForo_Visitor::getInstance();
        
        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), $userGroupIds)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }

    public static function notUnregistered(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 1;
        
        return self::notUserGroup($tag, $rendererStates, $formatter);
    }

    public static function notRegistered(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 2;
        
        return self::notUserGroup($tag, $rendererStates, $formatter);
    }

    public static function notAdministrator(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 3;
        
        return self::notUserGroup($tag, $rendererStates, $formatter);
    }

    public static function notModerator(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $tag['option'] = 4;
        
        return self::notUserGroup($tag, $rendererStates, $formatter);
    }

    public static function userId(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $userIds = explode(',', $tag['option']);
        
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
        
        $visitor = XenForo_Visitor::getInstance();
        
        if (in_array($visitor['user_id'], $userIds)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }

    public static function username(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $usernames = explode(',', strtolower($tag['option']));
        
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
        
        $visitor = XenForo_Visitor::getInstance();
        
        if (in_array(strtolower($visitor['username']), $usernames)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }

    public static function notUserId(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $userIds = explode(',', $tag['option']);
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (!in_array($visitor['user_id'], $userIds)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }
    
    public static function notUsername(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {
        $usernames = explode(',', strtolower($tag['option']));
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (!in_array(strtolower($visitor['username']), $usernames)) {
            return $formatter->renderSubTree($tag['children'], $rendererStates);
        }
    }
}