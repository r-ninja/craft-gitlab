<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Branches Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_BranchesService extends BaseApplicationComponent
{

  public function getBranches($projectid, $options=array())
  {
    $action='projects/'.trim($projectid).'/repository/branches';
    return craft()->gitLab->_call($action, $options);
  }

  public function getBranch($projectid, $branchid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/repository/branches/'.urlencode(trim($branchid));
    return craft()->gitLab->_call($action, $options);
  }

}
