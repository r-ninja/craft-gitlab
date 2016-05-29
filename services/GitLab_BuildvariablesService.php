<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Buildvariables Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_BuildvariablesService extends BaseApplicationComponent
{

  public function getVariables($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/variables';
    return craft()->gitLab->_call($action, $options);
  }

  public function getVariable($projectid, $key, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/variables/'.urlencode(trim($key));
    return craft()->gitLab->_call($action, $options);
  }

}
