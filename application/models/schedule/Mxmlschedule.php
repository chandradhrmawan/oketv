<?php

class mxmlschedule extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function player()
  {
    $xmlFile = $this->config->item('xml_data') . "/schedule/player.json";
    $xmlObj = file_get_contents($xmlFile);
    $json = json_decode($xmlObj);

    $data['status'] = $json[0]->status;
    $data['source'] = $json[0]->url;   
     
    return $data;
  }
}