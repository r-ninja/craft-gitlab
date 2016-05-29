<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Keys Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_KeysService extends BaseApplicationComponent
{

  public function getKey($id, $options=array())
  {
    $action='keys/'.intval($id);
    return craft()->gitLab->_call($action, $options);
  }

}
