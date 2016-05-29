<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Issues Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_IssuesService extends BaseApplicationComponent
{

  public function getIssues($options=array())
  {
    $action='issues';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectIssues($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/issues';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectIssue($projectid, $issueid, $options=array())
  {
    $action='projects/'.intval($projectid).'/issues/'.intval($issueid);
    return craft()->gitLab->_call($action, $options);
  }

}
