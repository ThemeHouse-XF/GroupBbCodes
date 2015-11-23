<?php
if (false) {

    class XFCP_ThemeHouse_GroupBbCodes_Extend_XenForo_BbCode_Formatter_BbCode_Strip extends XenForo_BbCode_Formatter_BbCode_Strip
    {
    }
}

class ThemeHouse_GroupBbCodes_Extend_XenForo_BbCode_Formatter_BbCode_Strip extends XFCP_ThemeHouse_GroupBbCodes_Extend_XenForo_BbCode_Formatter_BbCode_Strip
{

    public function __construct()
    {
        $this->_overrideCallbacks = array_merge($this->_overrideCallbacks,
            array(
                'ismemberofusergroup' => array(
                    '$this',
                    'handleIsMemberOfUserGroupTag'
                ),
                'guest' => array(
                    '$this',
                    'handleGuestTag'
                ),
                'registered' => array(
                    '$this',
                    'handleRegisteredTag'
                ),
                'admin' => array(
                    '$this',
                    'handleAdminTag'
                ),
                'mod' => array(
                    '$this',
                    'handleModTag'
                ),
                'isnotmemberofusergroup' => array(
                    '$this',
                    'handleIsNotMemberOfUserGroupTag'
                ),
                'notguest' => array(
                    '$this',
                    'handleNotGuestTag'
                ),
                'notregistered' => array(
                    '$this',
                    'handleNotRegisteredTag'
                ),
                'notadmin' => array(
                    '$this',
                    'handleNotAdminTag'
                ),
                'notmod' => array(
                    '$this',
                    'handleNotModTag'
                ),
                'isuserid' => array(
                    '$this',
                    'handleIsUserIdTag'
                ),
                'isusername' => array(
                    '$this',
                    'handleIsUsernameTag'
                ),
                'isnotuserid' => array(
                    '$this',
                    'handleIsNotUserIdTag'
                ),
                'isnotusername' => array(
                    '$this',
                    'handleIsNotUserNameTag'
                )
            ));

        parent::__construct();
    }

    /**
     * Deals with stripping ismemberofusergroup tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsMemberOfUserGroupTag(array $tag, array $rendererStates)
    {
        $userGroupIds = explode(',', $tag['option']);

        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');

        $visitor = XenForo_Visitor::getInstance();

        if ($userModel->isMemberOfUserGroup($visitor->toArray(), $userGroupIds)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }

    /**
     * Deals with stripping guest tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleGuestTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 1;

        return $this->handleIsMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping registered tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleRegisteredTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 2;

        return $this->handleIsMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping admin tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleAdminTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 3;

        return $this->handleIsMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping mod tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleModTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 4;

        return $this->handleIsMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping isnotmemberofusergroup tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsNotMemberOfUserGroupTag(array $tag, array $rendererStates)
    {
        $userGroupIds = explode(',', $tag['option']);

        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');

        $visitor = XenForo_Visitor::getInstance();

        if (!$userModel->isMemberOfUserGroup($visitor->toArray(), $userGroupIds)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }

    /**
     * Deals with stripping notguest tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleNotGuestTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 1;

        return $this->handleIsNotMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping notregistered tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleNotRegisteredTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 2;

        return $this->handleIsNotMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping notadmin tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleNotAdminTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 3;

        return $this->handleIsNotMemberOfUserGroupTag($tag, $rendererStates);
    }

    /**
     * Deals with stripping notmod tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleNotModTag(array $tag, array $rendererStates)
    {
        $tag['option'] = 4;

        return $this->handleIsNotMemberOfUserGroupTag($tag, $rendererStates);
    }
    
    /**
     * Deals with stripping isuserid tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsUserIdTag(array $tag, array $rendererStates)
    {
        $userIds = explode(',', $tag['option']);
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (in_array($visitor['user_id'], $userIds)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }
    
    /**
     * Deals with stripping isusername tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsUsernameTag(array $tag, array $rendererStates)
    {
        $usernames = explode(',', strtolower($tag['option']));
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (in_array(strtolower($visitor['username']), $usernames)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }
    
    /**
     * Deals with stripping isnotuserid tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsNotUserIdTag(array $tag, array $rendererStates)
    {
        $userIds = explode(',', $tag['option']);
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (!in_array($visitor['user_id'], $userIds)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }
    
    /**
     * Deals with stripping isnotusername tags.
     *
     * @param array $tag
     * @param array $rendererStates
     *
     * @return string
     */
    public function handleIsNotUsernameTag(array $tag, array $rendererStates)
    {
        $usernames = explode(',', strtolower($tag['option']));
    
        /* @var $userModel XenForo_Model_User */
        $userModel = XenForo_Model::create('XenForo_Model_User');
    
        $visitor = XenForo_Visitor::getInstance();
    
        if (!in_array(strtolower($visitor['username']), $usernames)) {
            return $this->renderTagUnparsed($tag, $rendererStates);
        }
    }
}