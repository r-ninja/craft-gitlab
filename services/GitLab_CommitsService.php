<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Commits Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_CommitsService extends BaseApplicationComponent
{

  public function getCommits($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits';
    return craft()->gitLab->_call($action, $options);
  }

  public function getCommit($projectid, $sha, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits/'.urlencode(trim($sha));
    return craft()->gitLab->_call($action, $options);
  }

  public function getCommitDiff($projectid, $sha, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits/'.urlencode(trim($sha)).'/diff';
    return craft()->gitLab->_call($action, $options);
  }

  public function getCommitComments($projectid, $sha, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits/'.urlencode(trim($sha)).'/comments';
    return craft()->gitLab->_call($action, $options);
  }

  public function getCommitStatuses($projectid, $sha, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits/'.urlencode(trim($sha)).'/statuses';
    return craft()->gitLab->_call($action, $options);
  }

}
