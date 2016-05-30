# GitLab integration plugin for Craft CMS

Integrates GitLab API in your Craft templates.

## Installation

To install GitLab integration, follow these steps:

1. Download & unzip the file and place the `gitlab` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/r-ninja/gitlab.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `gitlab` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

GitLab works on Craft 2.4.x and Craft 2.5.x.

## GitLab Overview

This plugin allows you to use the GitLab API to retrieve information directly in your Craft templates.

Please see https://github.com/gitlabhq/gitlabhq/tree/master/doc/api for more information about the GitLab API.

## Configuring GitLab

In the plugin settings window, set the GitLab URL (with trailing slash) and your private token. You can find or reset your private token in your GitLab account page (/profile/account)

## Using GitLab

Once installed and configured, you will be able to call different variables directly in your templates.

[Methods](./doc/methods.md)  
[Pagination](./doc/pagination.md)

## Some Examples

List all projects
```html
{% set projects = craft.gitlab.projects('all') %}
<ul>
  {% for project in projects.data %}
    <li>
      <strong>{{ project.name }}</strong> - {{ project.description }}<br>
      URL: {{ project.http_url_to_repo }}<br>
      Tags: {{ project.tag_list|join(', ') }}<br>
      Owner: {{ project.owner.name }}
    </li>
  {% endfor %}
</ul>
```

Retrieve information about current user (user associated to private token)
```html
{% set me = craft.gitlab.user.data %}
<p>Hello my name is {{ me.name }} ({{ me.username }})</p>
```

List opened merge requests
```html
{% set projectid = 1 %}
{% set mergerequests = craft.gitlab.getMergeRequests(projectid, {state: 'opened'}) %}
<ul>
  {% for mergerequest in mergerequests.data %}
    <li>
      Target branch: {{ mergerequest.target_branch }}<br>
      Source branch: {{ mergerequest.source_branch }}<br>
      Author: {{ mergerequest.author.username }}<br>
      Assignee: {{ mergerequest.assignee.username }}<br>
      Description: {{ mergerequest.description }}
    </li>
  {% endfor %}
</ul>
```

## GitLab Roadmap

Some things to do, and ideas for potential features:

* Release it

## GitLab Changelog

### 1.0.0 -- 2016.05.28

* Initial release

Brought to you by [Richard Trudel](http://trudel.ninja)
