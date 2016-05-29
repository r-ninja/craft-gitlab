<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Tags Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_TagsService extends BaseApplicationComponent
{

  public function getProjectRepoTags($projectid, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/tags';
    return craft()->gitLab->_call($action, $options);
  }

  public function getProjectRepoTag($projectid, $tagname, $options=array())
  {
    $action='projects/'.intval($projectid).'/repository/tags/'.urlencode(trim($tagname));
    return craft()->gitLab->_call($action, $options);
  }

}
