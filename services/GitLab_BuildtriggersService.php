<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Buildtriggers Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_BuildtriggersService extends BaseApplicationComponent
{
  public function getTriggers($projectid, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/triggers';
    return craft()->gitLab->_call($action, $options);
  }

  public function getTrigger($projectid, $token, $options=array())
  {
    $action='projects/'.urlencode(trim($projectid)).'/triggers/'.urlencode(trim($token));
    return craft()->gitLab->_call($action, $options);
  }

}
