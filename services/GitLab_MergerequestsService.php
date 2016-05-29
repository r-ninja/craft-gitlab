<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Mergerequests Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_MergerequestsService extends BaseApplicationComponent
{

  public function getMergeRequests($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests';
    return craft()->gitLab->_call($action, $options);
  }

  public function getMergeRequest($projectid, $mrid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getMergeRequestCommits($projectid, $mrid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid).'/commits';
    return craft()->gitLab->_call($action, $options);
  }

  public function getMergeRequestChanges($projectid, $mrid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid).'/changes';
    return craft()->gitLab->_call($action, $options);
  }

  public function getMergeRequestClosesIssues($projectid, $mrid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid).'/closes_issues';
    return craft()->gitLab->_call($action, $options);
  }

}
