<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Groups Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_GroupsService extends BaseApplicationComponent
{

  public function getGroups($search=null, $options=array())
  {
    if ($trim($search))
    {
      $options['search'] = urlencode(trim($search));
    }
    $action='groups';
    return craft()->gitLab->_call($action, $options);
  }

  public function getGroup($groupid, $options=array())
  {
    $action='groups/'.intval($groupid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getGroupProjects($groupid, $options=array())
  {
    $action='groups/'.intval($groupid).'/projects';
    return craft()->gitLab->_call($action, $options);
  }

  public function getGroupMembers($groupid, $options=array())
  {
    $action='groups/'.intval($groupid).'/members';
    return craft()->gitLab->_call($action, $options);
  }

}
