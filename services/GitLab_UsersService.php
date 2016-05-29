<?php
/**
* GitLab plugin for Craft CMS
*
* GitLab_Users Service
*
* @author    Richard Trudel
* @copyright Copyright (c) 2016 Richard Trudel
* @link      http://trudel.ninja
* @package   GitLab
* @since     1.0.0
*/

namespace Craft;

class GitLab_UsersService extends BaseApplicationComponent
{

  public function getUsers($query=null, $options=array())
  {
    $action='users';
    if ($query && trim($query))
    {
      $options[($search?'search':'username')] = urlencode(trim($query));
    }
    return craft()->gitLab->_call($action, $options);
  }

  public function getUser($userid=null, $options=array())
  {
    $action=(trim($userid)?'users/'.trim($userid):'user');
    return craft()->gitLab->_call($action, $options);
  }

  public function getUserKeys($userid=null, $options=array())
  {
    $action=(trim($userid)?'users/'.trim($userid).'/keys':'user/keys');
    return craft()->gitLab->_call($action, $options);
  }

  public function getUserKey($keyid, $options=array())
  {
    $action='user/keys/'.trim($keyid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getUserEmails($userid=null, $options=array())
  {
    $action=(trim($userid)?'users/'.trim($userid).'/emails':'user/emails');
    return craft()->gitLab->_call($action, $options);
  }

  public function getUserEmail($emailid, $options=array())
  {
    $action='user/emails/'.trim($emailid);
    return craft()->gitLab->_call($action, $options);
  }

}
