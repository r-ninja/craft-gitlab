<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Systemhooks Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_SystemhooksService extends BaseApplicationComponent
{

  public function getHooks($options=array())
  {
    $action='hooks';
    return craft()->gitLab->_call($action, $options);
  }

  public function getHookTest($hookid, $options=array())
  {
    $action='hooks/'.intval($hookid);
    return craft()->gitLab->_call($action, $options);
  }

}
