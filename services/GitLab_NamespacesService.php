<?php
/**
 * GitLab plugin for Craft CMS
 *
 * GitLab_Namespaces Service
 *
 * @author    Richard Trudel
 * @copyright Copyright (c) 2016 Richard Trudel
 * @link      http://trudel.ninja
 * @package   GitLab
 * @since     1.0.0
 */

namespace Craft;

class GitLab_NamespacesService extends BaseApplicationComponent
{

  public function getNamespaces($search=null, $options=array())
  {
    $action='namespaces';
    if (trim($search))
    {
      $options['search']=urlencode(trim($search));
    }
    return craft()->gitLab->_call($action, $options);
  }

}
