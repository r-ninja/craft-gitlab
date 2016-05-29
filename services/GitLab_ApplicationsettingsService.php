<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Applicationsettings Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_ApplicationsettingsService extends BaseApplicationComponent
{

  public function getSettings($options=array())
  {
    $action='application/settings';
    return craft()->gitLab->_call($action, $options);
  }

}
