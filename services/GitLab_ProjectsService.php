<?php
/**
* GitLab plugin for Craft CMS
*
* GitLab_Projects Service
*
* @author    Richard Trudel
* @copyright Copyright (c) 2016 Richard Trudel
* @link      http://trudel.ninja
* @package   GitLab
* @since     1.0.0
*/

namespace Craft;

class GitLab_ProjectsService extends BaseApplicationComponent
{
  public function getProjects($scope=null, $options=array())
  {
    switch ($scope)
    {
      case 'all':
      $action = 'projects/all';break;
      case 'owned':
      $action = 'projects/owned';break;
      case 'starred':
      $action = 'projects/starred';break;
      default:
      $action='projects';
    }
    return craft()->gitLab->_call($action, $options);
  }

  public function getProject($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid));
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectEvents($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/events';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectMembers($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/members';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectMember($projectid, $userid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/members/'.intval($userid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectHooks($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/hooks';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectHook($projectid, $hookid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/hooks/'.intval($hookid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectBranches($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/branches';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectBranch($projectid, $branchid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/branches/'.intval($branchid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectsSearch($query, $options=array())
  {
    $action='projects/search/'.urlencode(trim($query));
    return craft()->gitLab->_call($action, $options);
  }

}
