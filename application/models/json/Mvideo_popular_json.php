<?php

class mvideo_popular_json extends CI_Model
{
  public function get_all_popular()
  {
    $xmlFile  = '/mainData/data/xml/brightcove/video_popular.json';
    $str_data = file_get_contents($xmlFile);
    $data     = json_decode($str_data,true);

    return $data;
  }

  public function get_video_popular()
  {
    $video_popular = $this->get_all_popular();
    
    foreach ($video_popular as $key => $popular) {
      $_year  = date('Y', strtotime($popular['date_created']));
      $_month = date('m', strtotime($popular['date_created']));
      $_date  = date('d', strtotime($popular['date_created']));
      $_title = slug($popular['title']);

      $video_popular[$key]['url']   = "http://video.okezone.com/play/{$_year}/{$_month}/{$_date}/{$popular['channel_id']}/{$popular['video_id']}/{$_title}";
      $video_popular[$key]['image'] = "http://a.okezone.com/videos/{$_year}/{$_month}/{$_date}/{$popular['channel_id']}/{$popular['video_id']}/{$popular['video_id']}_medium.jpg";
    }

    return $video_popular;
  }
}
