<?php

class mvideo_breaking_json extends CI_Model
{ 
  public function get_headline_video()
  {
    $xmlFile  = $this->config->item('json_data') . '/headline/headline.json';
    $str_data = file_get_contents($xmlFile);
    $data     = json_decode($str_data, true);

    return $data;
  }
  
  public function get_breaking_video($id)
  {
    $xmlFile  = $this->config->item('json_data') . '/channel/' . $id . '/breaking_' . $id . '.json';
    $str_data = file_get_contents($xmlFile);
    $data     = json_decode($str_data, true);

    return $data;
  }

  public function get_headline()
  {
    $video_headline = $this->get_headline_video();

    foreach ($video_headline as $key => $headline) {
      $_year  = date('Y', strtotime($headline['date_created']));
      $_month = date('m', strtotime($headline['date_created']));
      $_date  = date('d', strtotime($headline['date_created']));
      $_title = slug($headline['title']);

      $parse    = substr($headline['date_created'], 0, 4) . "/" . substr($headline['date_created'], 5, 2) . "/" . substr($headline['date_created'],8,2);
      $vilink   = $parse."/".$headline['channel_id']."/".$headline['video_id'];
      $datalink = base64_encode($vilink);

      $video_headline[$key]['watch'] = "http://video.okezone.com/embedtv/{$datalink}";
      $video_headline[$key]['url']   = "http://video.okezone.com/play/{$_year}/{$_month}/{$_date}/{$headline['channel_id']}/{$headline['video_id']}/{$_title}";
      $video_headline[$key]['image'] = "http://a.okezone.com/videos/{$_year}/{$_month}/{$_date}/{$headline['channel_id']}/{$headline['video_id']}/{$headline['video_id']}_medium.jpg";
    }

    return $video_headline;
  }
}
