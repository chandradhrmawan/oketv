<?php

class mxmlinfografis extends CI_Model
{
  var $total_item;

  function __construct()
  {
    //$this->load->model('io/mloadxml');
    //$this->load->model('image/mimage','mthumb');
    $this->channel_id = 0;
    $this->total_item    = 100;
        //$this->load->model('topic/mtopicpagination','topic');
  }
  
  function getCoverImage($params)
  {
    $xml_path  = $this->config->item('xml_data').'/infografis/'.$params['year'].'/'.$params['month'].'/';
    $xml_path .= $params['day'].'/'.$params['channel_id'].'/'.$params['content_id'].'/';
    $xml_file  = $xml_path.$params['content_id'].'_'.$params['channel_id'].'_';
    $xml_file .= $params['year'].$params['month'].$params['day'].'.xml';

    if (!is_file($xml_file)){
      return false;
    }

    $xmlContents = file_get_contents($xml_file);
    $xmlc        = new SimpleXmlElement($xmlContents);//echo $xmlContents."Test";

    unset($xmlContents);
    
    $temp['content_id']     = (Int)$xmlc->contentId;
    $temp['channelname']    = (String)$xmlc->properties->channel;
    $temp['channel_id']     = (Int)$xmlc->channel;
    $temp['date_created']   = (String)$xmlc->properties->created;
    $temp['date_published'] = (String)$xmlc->properties->published;
    
    $temp['title']    = (String)$xmlc->title;
    $temp['subtitle'] = (String)$xmlc->subtitle;
    $temp['summary']  = (String)$xmlc->summary;
    $temp['content']  = (String)$xmlc->content;
    
    for ($i=0;$i<count($xmlc->attributes->dataContent->data);$i++) {
      $temp['attributes'][$i]['data_file']  = (String)$xmlc->attributes->dataContent->data[$i];
      $temp['attributes'][$i]['file_title'] = (String)$xmlc->attributes->dataContent->title[$i];
    }
    
    $temp['datadownload'] = (String)$xmlc->datapackaged;
    
    return $temp;
  }
  
  function coverList($howMuch, $start)
  {
    $xml_path    = $this->config->item('xml_data').'/infografis/cover/';
    $xml_file    = $xml_path.'breaking.xml';
    $xmlContents = file_get_contents($xml_file);
    $xmlc        = new SimpleXmlElement($xmlContents);//echo $xmlContents."Test";

    unset($xmlContents);
    
    $data             = array();
    $totalxml         = (int)count($xmlc->attributes->filename);
    $temp['totalxml'] = $totalxml;
    
    if ($totalxml >= $howMuch) {
      $toLoad = (($howMuch!=NULL)) ? $howMuch : (int)count($xmlc->attributes->filename);
    } else {
      $toLoad = (int)count($xmlc->attributes->filename);
    }

    if (!is_file($xml_file)){
      return false;
    }
    
    for($i=$start;$i<($start+$howMuch);$i++){
      $temp['attributes'][$i]['filename']   = (String)$xmlc->attributes->filename[$i];
      $temp['attributes'][$i]['created']    = (String)$xmlc->attributes->created[$i];
      $temp['attributes'][$i]['title']      = (String)$xmlc->attributes->title[$i];
      $temp['attributes'][$i]['content_id'] = (String)$xmlc->attributes->content_id[$i];
      $temp['attributes'][$i]['channel_id'] = (String)$xmlc->attributes->channel_id[$i];
    }

    return $temp;
  }
  
  function coverListWP($howMuch)
  {
    $xml_path    = $this->config->item('xml_data').'/infografis/cover/';
    $xml_file    = $xml_path.'breaking.xml';
    $xmlContents = file_get_contents($xml_file);
    $xmlc        = new SimpleXmlElement($xmlContents);//echo $xmlContents."Test";

    unset($xmlContents);
    
    $data             = array();
    $totalxml         = (int)count($xmlc->attributes->filename);
    $temp['totalxml'] = $totalxml;
    
    if ($totalxml >= $howMuch) {
      $toLoad = (($howMuch!=NULL)) ? $howMuch : (int)count($xmlc->attributes->filename);
    } else {
      $toLoad = (int)count($xmlc->attributes->filename);
    }

    if (!is_file($xml_file)){
      return false;
    }
    
    for ($i=0;$i<$howMuch;$i++) {
      $temp['attributes'][$i]['filename'] = (String)$xmlc->attributes->filename[$i];
      $temp['attributes'][$i]['created']  = (String)$xmlc->attributes->created[$i];
      $temp['attributes'][$i]['title']  = (String)$xmlc->attributes->title[$i];
      $temp['attributes'][$i]['content_id'] = (String)$xmlc->attributes->content_id[$i];
      $temp['attributes'][$i]['channel_id'] = (String)$xmlc->attributes->channel_id[$i];
    }

    return $temp;
  }

  function get_infografis($count = 12)
  {
    $infografis = $this->coverListWP($count);

    foreach ($infografis['attributes'] as $key => $infograf) {
      $_year  = date('Y', strtotime($infograf['created']));
      $_month = date('m', strtotime($infograf['created']));
      $_date  = date('d', strtotime($infograf['created']));
      $_title = slug($infograf['title']);

      $infografis['attributes'][$key]['url']   = "http://news.okezone.com/detail/{$infograf['content_id']}/{$_title}";
      $infografis['attributes'][$key]['image'] = "http://img.okeinfo.net/dynamic/infografis/{$_year}/{$_month}/{$_date}/{$infograf['channel_id']}/{$infograf['content_id']}/{$infograf['filename']}?w=250";
    }

    return $infografis;
  }
}
/* End of file */