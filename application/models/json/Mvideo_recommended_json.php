<?php

class Mvideo_recommended_json extends CI_Model
{
  public function get_all_recommend()
  {
    $xmlFile  = '/mainData/data/xml/video/tag/rekomendasi_okezonetv.json';
    $str_data = file_get_contents($xmlFile);
    $data     = json_decode($str_data,true);

    return $data;
  }

  public function get_video_recommend()
  {
    $video_recommend = $this->get_all_recommend();
    
    foreach ($video_recommend as $key => $recommend) {
      $_year  = date('Y', strtotime($recommend['date_created']));
      $_month = date('m', strtotime($recommend['date_created']));
      $_date  = date('d', strtotime($recommend['date_created']));
      $_title = slug($recommend['title']);

      $video_recommend[$key]['url']   = "http://video.okezone.com/play/{$_year}/{$_month}/{$_date}/{$recommend['channel_id']}/{$recommend['video_id']}/{$_title}";
      $video_recommend[$key]['image'] = "http://a.okezone.com/videos/{$_year}/{$_month}/{$_date}/{$recommend['channel_id']}/{$recommend['video_id']}/{$recommend['video_id']}_medium.jpg";
    }

    return $video_recommend;
  }
}
