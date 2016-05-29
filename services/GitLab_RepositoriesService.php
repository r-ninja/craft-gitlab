<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Repositories Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_RepositoriesService extends BaseApplicationComponent
{

  public function getRepositories($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/tree';
    return craft()->gitLab->_call($action, $options);
  }

  public function getRepoRawFile($projectid, $sha, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/blobs/'.urlencode(trim($sha));
    return craft()->gitLab->_call($action, $options);
  }

  public function getRepoArchive($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/archive';
    return craft()->gitLab->_call($action, $options);
  }

  public function getRepoCompare($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/compare';
    return craft()->gitLab->_call($action, $options);
  }

  public function getRepoContributors($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/contributors';
    return craft()->gitLab->_call($action, $options);
  }

}
