<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Repositoryfiles Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_RepositoryfilesService extends BaseApplicationComponent
{

  public function getRepoFiles($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/files';
    return craft()->gitLab->_call($action, $options);
  }

}
