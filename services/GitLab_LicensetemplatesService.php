<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Licensetemplates Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_LicensetemplatesService extends BaseApplicationComponent
{

  public function getLicenses($options=array())
  {
    $action='licenses';
    return craft()->gitLab->_call($action, $options);
  }

  public function getLicense($key, $options=array())
  {
    $action='licenses/'.urlencode(trim($key));
    return craft()->gitLab->_call($action, $options);
  }

}
