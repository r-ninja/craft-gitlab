<?php
/**
* GitLab plugin for Craft CMS
*
* GitLab Service
*
* @author    Richard Trudel
* @copyright Copyright (c) 2016 Richard Trudel
* @link      http://trudel.ninja
* @package   GitLab
* @since     1.0.0
*/

namespace Craft;

class GitLabService extends BaseApplicationComponent
{
  private $settings=null;

  public function __construct()
  {
    $this->settings = $this->getSettings();
  }

  public function getSettings()
  {
    return craft()->plugins->getPlugin('gitlab')->getSettings();
  }

  private function parseHeaders( $headers )
  {
      $head = array();
      foreach( $headers as $k=>$v )
      {
          $t = explode( ':', $v, 2 );
          if( isset( $t[1] ) )
              $head[ trim($t[0]) ] = trim( $t[1] );
          else
          {
              $head[] = $v;
              if( preg_match( "#HTTP/[0-9\.]+\s+([0-9]+)#",$v, $out ) )
                  $head['reponse_code'] = intval($out[1]);
          }
      }
      return $head;
  }

  public function _call($action='', $options=array())
  {
    $params='';
    foreach ($options as $key => $value)
    {
      $params.='&'.urlencode(trim($key)).'='.urlencode(trim($value));
    }

    if ($file = @file_get_contents($this->settings['gitlab_host'].'api/v3/'.$action.'?private_token='.$this->settings['gitlab_privatetoken'].$params))
    {
      $output['data'] = json_decode($file, true);

      if ((isset($options['page']))||(isset($options['per_page'])))
      {
        $headers = $this->parseHeaders($http_response_header);
        $output['pagination']['next_page']=$headers['X-Next-Page']?$headers['X-Next-Page']:null;
        $output['pagination']['page']=$headers['X-Page']?$headers['X-Page']:null;
        $output['pagination']['per_page']=$headers['X-Per-Page']?$headers['X-Per-Page']:null;
        $output['pagination']['prev_page']=$headers['X-Prev-Page']?$headers['X-Prev-Page']:null;
        $output['pagination']['total']=$headers['X-Total']?$headers['X-Total']:null;
        $output['pagination']['total_pages']=$headers['X-Total-Pages']?$headers['X-Total-Pages']:null;
      }

      return $output;
    }
    else
    {
      return false;
    }
  }
}
