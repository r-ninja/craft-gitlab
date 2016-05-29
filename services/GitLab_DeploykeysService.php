<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Deploykeys Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_DeploykeysService extends BaseApplicationComponent
{

  public function getDeployKeys($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/keys';
    return craft()->gitLab->_call($action, $options);
  }

  public function getDeployKey($projectid, $keyid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/keys/'.urlencode(trim($keyid));
    return craft()->gitLab->_call($action, $options);
  }

}
