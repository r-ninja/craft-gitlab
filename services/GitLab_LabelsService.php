<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Labels Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_LabelsService extends BaseApplicationComponent
{

  public function getLabels($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/labels';
    return craft()->gitLab->_call($action, $options);
  }

}
