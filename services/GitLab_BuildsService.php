<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Builds Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_BuildsService extends BaseApplicationComponent
{

  public function getBuilds($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/builds';
    return craft()->gitLab->_call($action, $options);
  }

  public function getCommitBuilds($projectid, $sha, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/commits/'.urlencode(trim($sha)).'/builds';
    return craft()->gitLab->_call($action, $options);
  }

  public function getBuild($projectid, $buildid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/builds/'.urlencode(trim($buildid));
    return craft()->gitLab->_call($action, $options);
  }

  public function getBuildArtifacts($projectid, $buildid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/builds/'.urlencode(trim($buildid)).'/artifacts';
    return craft()->gitLab->_call($action, $options);
  }

}
