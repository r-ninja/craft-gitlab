<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLabVariable
{

    public function appSettings($options=array())
    {
      return craft()->gitLab_applicationsettings->getSettings($options);
    }

    public function branches($projectid, $options=array())
    {
      return craft()->gitLab_branches->getBranches($projectid, $options);
    }

    public function branch($projectid, $branchid, $options=array())
    {
      return craft()->gitLab_branches->getBranch($projectid, $branchid, $options);
    }

    public function builds($projectid, $options=array())
    {
      return craft()->gitLab_builds->getBuilds($projectid, $options);
    }

    public function commitBuilds($projectid, $sha, $options=array())
    {
      return craft()->gitLab_builds->getCommitBuilds($projectid, $sha, $options);
    }

    public function build($projectid, $buildid, $options=array())
    {
      return craft()->gitLab_builds->getBuild($projectid, $buildid, $options);
    }

    public function buildArtifacts($projectid, $buildid, $options=array())
    {
      return craft()->gitLab_builds->getBuildArtifacts($projectid, $buildid, $options);
    }

    public function triggers($projectid, $options=array())
    {
      return craft()->gitLab_buildstriggers->getTriggers($projectid, $options);
    }

    public function trigger($projectid, $token, $options=array())
    {
      return craft()->gitLab_buildstriggers->getTrigger($projectid, $token, $options);
    }

    public function variables($projectid, $options=array())
    {
      return craft()->gitLab_buildsvariables->getVariables($projectid, $options);
    }

    public function variable($projectid, $key, $options=array())
    {
      return craft()->gitLab_buildsvariables->getTrigger($projectid, $key, $options);
    }

    public function commits($projectid, $options=array())
    {
      return craft()->gitLab_commits->getCommits($projectid, $options);
    }

    public function commit($projectid, $sha, $options=array())
    {
      return craft()->gitLab_commits->getCommit($projectid, $sha, $options);
    }

    public function commitDiff($projectid, $sha, $options=array())
    {
      return craft()->gitLab_commits->getCommitDiff($projectid, $sha, $options);
    }

    public function commitComments($projectid, $sha, $options=array())
    {
      return craft()->gitLab_commits->getCommitComments($projectid, $sha, $options);
    }

    public function commitStatuses($projectid, $sha, $options=array())
    {
      return craft()->gitLab_commits->getCommitStatuses($projectid, $sha, $options);
    }

    public function deployKeys($projectid, $options=array())
    {
      return craft()->gitLab_deploykeys->getDeployKeys($projectid, $options);
    }

    public function deployKey($projectid, $keyid, $options=array())
    {
      return craft()->gitLab_deploykeys->getDeployKey($projectid, $keyid, $options);
    }

    public function groups($search=null, $options=array())
    {
      return craft()->gitLab_groups->getGroups($search, $options);
    }

    public function group($groupid, $options=array())
    {
      return craft()->gitLab_groups->getGroup($groupid, $options);
    }

    public function groupProjects($groupid, $options=array())
    {
      return craft()->gitLab_groups->getGroupProjects($groupid, $options);
    }

    public function groupMembers($groupid, $options=array())
    {
      return craft()->gitLab_groups->getGroupMembers($groupid, $options);
    }

    public function issues($options=array())
    {
      return craft()->gitLab_issues->getIssues($options);
    }

    public function projectIssues($projectid, $options=array())
    {
      return craft()->gitLab_issues->getProjectIssues($projectid, $options);
    }

    public function projectIssue($projectid, $issueid, $options=array())
    {
      return craft()->gitLab_issues->getProjectIssue($projectid, $issueid, $options);
    }

    public function key($id, $options=array())
    {
      return craft()->gitLab_keys->getKey($id, $options);
    }

    public function label($projectid, $options=array())
    {
      return craft()->gitLab_labels->getLabels($projectid, $options);
    }

    public function licenses($options=array())
    {
      return craft()->gitLab_licencetemplates->getLicenses($options);
    }

    public function license($key, $options=array())
    {
      return craft()->gitLab_licencetemplates->getLicense($key, $options);
    }

    public function mergeRequests($projectid, $options=array())
    {
      return craft()->gitLab_mergerequests->getMergeRequests($projectid, $options);
    }

    public function mergeRequest($projectid, $mrid, $options=array())
    {
      return craft()->gitLab_mergerequests->getMergeRequest($projectid, $mrid, $options);
    }

    public function mergeRequestCommits($projectid, $mrid, $options=array())
    {
      return craft()->gitLab_mergerequests->getMergeRequestCommits($projectid, $mrid, $options);
    }

    public function mergeRequestChanges($projectid, $mrid, $options=array())
    {
      return craft()->gitLab_mergerequests->getMergeRequestChanges($projectid, $mrid, $options);
    }

    public function mergeRequestClosesIssues($projectid, $mrid, $options=array())
    {
      return craft()->gitLab_mergerequests->getMergeRequestClosesIssues($projectid, $mrid, $options);
    }

    public function milestones($projectid, $options=array())
    {
      return craft()->gitLab_milestones->getMilestones($projectid, $options);
    }

    public function milestone($projectid, $milestoneid, $options=array())
    {
      return craft()->gitLab_milestones->getMilestone($projectid, $milestoneid, $options);
    }

    public function milestoneIssues($projectid, $milestoneid, $options=array())
    {
      return craft()->gitLab_milestones->getMilestoneIssues($projectid, $milestoneid, $options);
    }

    public function namespaces($search=null, $options=array())
    {
      return craft()->gitLab_namespaces->getNamespaces($search, $options);
    }

    public function issueNotes($projectid, $issueid, $options=array())
    {
      return craft()->gitLab_notes->getIssueNotes($projectid, $issueid, $options);
    }

    public function issueNote($projectid, $issueid, $noteid, $options=array())
    {
      return craft()->gitLab_notes->getIssueNote($projectid, $issueid, $noteid, $options);
    }

    public function snippetNotes($projectid, $snippetid, $options=array())
    {
      return craft()->gitLab_notes->getSnippetNotes($projectid, $snippetid, $options);
    }

    public function snippetNote($projectid, $snippetid, $noteid, $options=array())
    {
      return craft()->gitLab_notes->getSnippetNote($projectid, $snippetid, $noteid, $options);
    }

    public function mergeRequestNotes($projectid, $mrid, $options=array())
    {
      return craft()->gitLab_notes->getMergeRequestNotes($projectid, $mrid, $options);
    }

    public function mergeRequestNote($projectid, $mrid, $noteid, $options=array())
    {
      return craft()->gitLab_notes->getMergeRequestNote($projectid, $mrid, $noteid, $options);
    }

    public function projects($scope=null, $options=array())
    {
      return craft()->gitLab_projects->getProjects($scope, $options);
    }

    public function project($projectid, $options=array())
    {
      return craft()->gitLab_projects->getProject($projectid, $options);
    }

    public function projectEvents($projectid, $options=array())
    {
      return craft()->gitLab_projects->getProjectEvents($projectid, $options);
    }

    public function projectMembers($projectid, $options=array())
    {
      return craft()->gitLab_projects->getProjectMembers($projectid, $options);
    }

    public function projectMember($projectid, $userid, $options=array())
    {
      return craft()->gitLab_projects->getProjectMember($projectid, $userid, $options);
    }

    public function projectHooks($projectid, $options=array())
    {
      return craft()->gitLab_projects->getProjectHooks($projectid, $options);
    }

    public function projectHook($projectid, $hookid, $options=array())
    {
      return craft()->gitLab_projects->getProjectHook($projectid, $hookid, $options);
    }

    public function projectBranches($projectid, $options=array())
    {
      return craft()->gitLab_projects->getProjectBranches($projectid, $options);
    }

    public function projectBranch($projectid, $branchid, $options=array())
    {
      return craft()->gitLab_projects->getProjectBranch($projectid, $branchid, $options);
    }

    public function projectSearch($query, $options=array())
    {
      return craft()->gitLab_projects->getProjectsSearch($query, $options);
    }

    public function repositories($projectid, $options=array())
    {
      return craft()->gitLab_repositories->getProjectsSearch($projectid, $options);
    }

    public function repoRawFile($projectid, $sha, $options=array())
    {
      return craft()->gitLab_repositories->getRepoRawFile($projectid, $sha, $options);
    }

    public function repoArchive($projectid, $options=array())
    {
      return craft()->gitLab_repositories->getRepoArchive($projectid, $options);
    }

    public function repoCompare($projectid, $options=array())
    {
      return craft()->gitLab_repositories->getRepoCompare($projectid, $options);
    }

    public function repoContributors($projectid, $options=array())
    {
      return craft()->gitLab_repositories->getRepoContributors($projectid, $options);
    }

    public function repoFiles($projectid, $options=array())
    {
      return craft()->gitLab_repositoryfiles->getRepoFiles($projectid, $options);
    }

    public function runners($options=array())
    {
      return craft()->gitLab_runners->getRunners($options);
    }

    public function runnersAll($options=array())
    {
      return craft()->gitLab_runners->getRunnersAll($options);
    }

    public function runner($runnerid, $options=array())
    {
      return craft()->gitLab_runners->getRunner($runnerid, $options);
    }

    public function projectRunners($projectid, $options=array())
    {
      return craft()->gitLab_runners->getRProjectRunners($projectid, $options);
    }

    public function hooks($options=array())
    {
      return craft()->gitLab_systemhooks->getHooks($options);
    }

    public function hookTest($hookid, $options=array())
    {
      return craft()->gitLab_systemhooks->getHookTest($hookid, $options);
    }

    public function projectRepoTags($projectid, $options=array())
    {
      return craft()->gitLab_tags->getProjectRepoTags($projectid, $options);
    }

    public function projectRepoTag($projectid, $tagname, $options=array())
    {
      return craft()->gitLab_tags->getProjectRepoTag($projectid, $tagname, $options);
    }

    public function users($query=null, $options=array())
    {
      return craft()->gitLab_users->getUsers($query, $options);
    }

    public function user($userid=null, $options=array())
    {
      return craft()->gitLab_users->getUser($userid, $options);
    }

    public function userKeys($userid, $options=array())
    {
      return craft()->gitLab_users->getUserKeys($userid, $options);
    }

    public function userKey($keyid, $options=array())
    {
      return craft()->gitLab_users->getUserKey($keyid, $options);
    }

    public function userEmails($userid, $options=array())
    {
      return craft()->gitLab_users->getUserEmails($userid, $options);
    }

    public function userEmail($emailid, $options=array())
    {
      return craft()->gitLab_users->getUserEmail($emailid, $options);
    }

}
