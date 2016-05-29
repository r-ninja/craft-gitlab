<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Runners Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_RunnersService extends BaseApplicationComponent
{

  public function getRunners($options=array())
  {
    $action='runners';
    return craft()->gitLab->_call($action, $options);
  }

  public function getRunnersAll($options=array())
  {
    $action='runners/all';
    return craft()->gitLab->_call($action, $options);
  }

  public function getRunner($runnerid, $options=array())
  {
    $action='runners/'.intval($runnerid);
    return craft()->gitLab->_call($action, $options);
  }

  public function getRProjectRunners($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/runners';
    return craft()->gitLab->_call($action, $options);
  }

}
