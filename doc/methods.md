# Methods

All methods returns a `data` array which contains API result.  
To know more about parameters and returned data, see https://github.com/gitlabhq/gitlabhq/tree/master/doc/api.

Can also returns a `pagination` array which contain pagination information if used. (See [Pagination](./doc/pagination.md))

**Note:** Every method has a parameter called _$options_ which is not required and used by some API but also pagination.

## Application settings
`craft.gitlab.appSettings($options)`

## Branches
`craft.gitlab.branches($projectid, $options)`

`craft.gitlab.branch($projectid, $branchid, $options)`

`craft.gitlab.builds($projectid, $options)`

`craft.gitlab.commitBuilds($projectid, $sha, $options)`

`craft.gitlab.build($projectid, $buildid, $options)`

`craft.gitlab.buildArtifacts($projectid, $buildid, $options)`

## Triggers

`craft.gitlab.triggers($projectid, $options)`

`craft.gitlab.trigger($projectid, $token, $options)`

`craft.gitlab.variables($projectid, $options)`

`craft.gitlab.variable($projectid, $key, $options)`

## Commits

`craft.gitlab.commits($projectid, $options)`

`craft.gitlab.commit($projectid, $sha, $options)`

`craft.gitlab.commitDiff($projectid, $sha, $options)`

`craft.gitlab.commitComments($projectid, $sha, $options)`

`craft.gitlab.commitStatuses($projectid, $sha, $options)`

## Deploy Keys

`craft.gitlab.deployKeys($projectid, $options)`

`craft.gitlab.deployKey($projectid, $keyid, $options)`

## Groups

`craft.gitlab.groups($search, $options)`  
Note: _$search_ parameter is optional

`craft.gitlab.group($groupid, $options)`

`craft.gitlab.groupProjects($groupid, $options)`

`craft.gitlab.groupMembers($groupid, $options)`

## Issues

`craft.gitlab.issues($options)`

`craft.gitlab.projectIssues($projectid, $options)`

`craft.gitlab.projectIssue($projectid, $issueid, $options)`

## Keys

`craft.gitlab.key($id, $options)`

## Labels

`craft.gitlab.label($projectid, $options)`

## Open source licence templates

`craft.gitlab.licenses($options)`

`craft.gitlab.license($key, $options)`

## Merge Requests

`craft.gitlab.mergeRequests($projectid, $options)`

`craft.gitlab.mergeRequest($projectid, $mrid, $options)`

`craft.gitlab.mergeRequestCommits($projectid, $mrid, $options)`

`craft.gitlab.mergeRequestChanges($projectid, $mrid, $options)`

`craft.gitlab.mergeRequestClosesIssues($projectid, $mrid, $options)`

## Milestones

`craft.gitlab.milestones($projectid, $options)`

`craft.gitlab.milestone($projectid, $milestoneid, $options)`

`craft.gitlab.milestoneIssues($projectid, $milestoneid, $options)`

## Namespaces

`craft.gitlab.namespaces($search, $options)`  
_$search_ parameter is optional

## Notes (comments)

`craft.gitlab.issueNotes($projectid, $issueid, $options)`

`craft.gitlab.issueNote($projectid, $issueid, $noteid, $options)`

`craft.gitlab.snippetNotes($projectid, $snippetid, $options)`

`craft.gitlab.snippetNote($projectid, $snippetid, $noteid, $options)`

`craft.gitlab.mergeRequestNotes($projectid, $mrid, $options)`

`craft.gitlab.mergeRequestNote($projectid, $mrid, $noteid, $options)`

## Projects (including WebHooks)

Get a list of projects    
`craft.gitlab.projects($scope, $options)`

_$scope_ possible values:  
* `all` : list of all GitLab projects _**(admin only)**_
* `starred` : list of projects which are starred by the authenticated user
* `owned` : list of projects which are owned by the authenticated user
* empty or `''` : Get a list of projects accessible by the authenticated user

Specific options (_$options_ array) :
* `archived: true` if passed, limit by archived status  
* `visibility: 'VALUE'` if passed, limit by visibility `public`, `internal`, `private`
* `order_by : 'VALUE'` Return requests ordered by `id`, `name`, `path`, `created_at`, `updated_at` or `last_activity_at` fields. Default is `created_at`
* `sort: 'VALUE'` Return requests sorted in `asc` or `desc` order. Default is `desc`
* `search: 'QUERY'` Return list of authorized projects according to a search criteria

Get a specific project, identified by project ID or NAMESPACE/PROJECT_NAME, which is owned by the authenticated user.   
`craft.gitlab.project($projectid, $options)`

Get the events for the specified project. Sorted from newest to latest  
`craft.gitlab.projectEvents($projectid, $options)`

List project team members  
`craft.gitlab.projectMembers($projectid, $options)`

Get project team member  
`craft.gitlab.projectMember($projectid, $userid, $options)`

List project hooks  
`craft.gitlab.projectHooks($projectid, $options)`

Get project hook  
`craft.gitlab.projectHook($projectid, $hookid, $options)`

List project branches
`craft.gitlab.projectBranches($projectid, $options)`

List single branch  
`craft.gitlab.projectBranch($projectid, $branchid, $options)`

Search for projects by name (use [pagination](./doc/pagination.md))  
`craft.gitlab.projectSearch($query, $options)`

## Repositories

`craft.gitlab.repositories($projectid, $options)`

`craft.gitlab.repoRawFile($projectid, $sha, $options)`

`craft.gitlab.repoArchive($projectid, $options)`

`craft.gitlab.repoCompare($projectid, $options)`

`craft.gitlab.repoContributors($projectid, $options)`

`craft.gitlab.repoFiles($projectid, $options)`

## Runners

`craft.gitlab.runners($options)`

`craft.gitlab.runnersAll($options)`

`craft.gitlab.runner($runnerid, $options)`

`craft.gitlab.projectRunners($projectid, $options)`

## Hooks

`craft.gitlab.hooks($options=array(), $options)`

`craft.gitlab.hookTest($hookid, $options)`

## Tags

`craft.gitlab.projectRepoTags($projectid, $options)`

`craft.gitlab.projectRepoTag($projectid, $tagname, $options)`

## Users

`craft.gitlab.users($query, $options)`  
_$query_ parameter is optional

`craft.gitlab.user($userid, $options)`

`craft.gitlab.userKeys($userid, $options)`

`craft.gitlab.userKey($keyid, $options)`

`craft.gitlab.userEmails($userid, $options)`

`craft.gitlab.userEmail($emailid, $options)`
