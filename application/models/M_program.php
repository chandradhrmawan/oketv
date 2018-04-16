<?php

class m_program extends CI_Model
{
  public function get_all_data($id)
  {
    switch ($id) {
      case 'chat-box':
        $file_name = 'chat_box.json';
      break;
      case 'kongkow': 
        $file_name = 'kongkow.json';
      break;
      case 'redbons-discussion': 
        $file_name = 'redbons.json';
      break;
      case 'video-gokil': 
        $file_name = 'video_gokil.json';
      break;
    }

    $xmlFile         = '/mainData/data/xml/video/tag/' . $file_name;
    $str_data        = file_get_contents($xmlFile);
    $video_recommend = json_decode($str_data,true);

    foreach ($video_recommend as $key => $recommend) {
      $_year  = date('Y', strtotime($recommend['date_created']));
      $_month = date('m', strtotime($recommend['date_created']));
      $_date  = date('d', strtotime($recommend['date_created']));
      $_title = slug($recommend['title']);

      $parse    = substr($recommend['date_created'], 0, 4) . "/" . substr($recommend['date_created'], 5, 2) . "/" . substr($recommend['date_created'],8,2);
      $vilink   = $parse."/".$recommend['channel_id']."/".$recommend['video_id'];
      $datalink = base64_encode($vilink);

      $video_recommend[$key]['embed'] = "http://video.okezone.com/embedtv/{$datalink}";
      $video_recommend[$key]['url']   = "http://video.okezone.com/play/{$_year}/{$_month}/{$_date}/{$recommend['channel_id']}/{$recommend['video_id']}/{$_title}";
      $video_recommend[$key]['image'] = "http://a.okezone.com/videos/{$_year}/{$_month}/{$_date}/{$recommend['channel_id']}/{$recommend['video_id']}/{$recommend['video_id']}_medium.jpg";
    }

    return $video_recommend;
  }
}
