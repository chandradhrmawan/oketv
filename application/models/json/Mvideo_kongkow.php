<?php

class Mvideo_kongkow
{
  public function get_data($total = 12)
  {
    $content = file_get_contents('http://warungkopi.okezone.com/api_kongkow/0/' . $total);
    $data    = json_decode($content, true);

    foreach ($data as $key => $value) {
      $data[$key]['url']   = 'http://' . $value['link'];
      $data[$key]['image'] = 'http://' . $value['images'];
    }

    return $data;
  }
}