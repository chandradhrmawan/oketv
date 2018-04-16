<?php

class Mvideo_okezone_slide
{
  public function get_data()
  {
    $content = file_get_contents('/mainData/data/xml/video/tag/tag_68000.json');
    $data    = json_decode($content, true);

    foreach ($data as $key => $value) {
      $_year  = date('Y', strtotime($value['date_created']));
      $_month = date('m', strtotime($value['date_created']));
      $_date  = date('d', strtotime($value['date_created']));
      $_title = slug($value['title']);

      $parse    = substr($value['date_created'], 0, 4) . "/" . substr($value['date_created'], 5, 2) . "/" . substr($value['date_created'], 8, 2);
      $vilink   = $parse."/".$value['channel_id'] . "/" . $value['video_id'];
      $datalink = base64_encode($vilink);

      $data[$key]['embed'] = "http://video.okezone.com/embedtv/{$datalink}";
      $data[$key]['url']   = "http://video.okezone.com/play/{$_year}/{$_month}/{$_date}/{$value['channel_id']}/{$value['video_id']}/{$_title}";
      $data[$key]['image'] = "http://a.okezone.com/videos/{$_year}/{$_month}/{$_date}/{$value['channel_id']}/{$value['video_id']}/{$value['video_id']}_medium.jpg";
    }

    return $data;
  }
}