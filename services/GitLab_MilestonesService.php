<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Milestones Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_MilestonesService extends BaseApplicationComponent
{

  public function getMilestones($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/milestones';
    return craft()->gitLab->_call($action, $options);
  }

  public function getMilestone($projectid, $milestoneid, $options=array())
  {
    $action='projects/'.intval($projectid).'/milestones/'.intval($milestoneid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getMilestoneIssues($projectid, $milestoneid, $options=array())
  {
    $action='projects/'.intval($projectid).'/milestones/'.intval($milestoneid).'/issues';
    return craft()->gitLab->_call($action, $options);
  }

}
