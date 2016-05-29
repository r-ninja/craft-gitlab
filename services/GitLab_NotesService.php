<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Notes Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_NotesService extends BaseApplicationComponent
{

  // ISSUES NOTES

  public function getIssueNotes($projectid, $issueid, $options=array())
  {
    $action='projects/'.intval($projectid).'/issues/'.intval($issueid).'/notes';
    return craft()->gitLab->_call($action, $options);
  }

  public function getIssueNote($projectid, $issueid, $noteid, $options=array())
  {
    $action='projects/'.intval($projectid).'/issues/'.intval($issueid).'/notes/'.intval($noteid);
    return craft()->gitLab->_call($action, $options);
  }

  // SNIPPETS NOTES

  public function getSnippetNotes($projectid, $snippetid, $options=array())
  {
    $action='projects/'.intval($projectid).'/snippets/'.intval($snippetid).'/notes';
    return craft()->gitLab->_call($action, $options);
  }

  public function getSnippetNote($projectid, $snippetid, $noteid, $options=array())
  {
    $action='projects/'.intval($projectid).'/snippets/'.intval($snippetid).'/notes/'.intval($noteid);
    return craft()->gitLab->_call($action, $options);
  }

  // MERGE REQUESTS NOTES

  public function getMergeRequestNotes($projectid, $mrid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid).'/notes';
    return craft()->gitLab->_call($action, $options);
  }

  public function getMergeRequestNote($projectid, $mrid, $noteid, $options=array())
  {
    $action='projects/'.intval($projectid).'/merge_requests/'.intval($mrid).'/notes/'.intval($noteid);
    return craft()->gitLab->_call($action, $options);
  }


}
