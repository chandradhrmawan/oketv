<?php

class Mtv_live_streaming extends CI_Model
{ 
  public function get_streaming_schedule()
  {
    $this->load->config('web_config');

    $xmlFile = $this->config->item('xml_data') . "/schedule/streaming.xml";
    $xmlObj  = simplexml_load_string($this->load($xmlFile));
    $data    = array();

    foreach ($xmlObj->schedule as $schedule) {
      $schedule_url = "{$schedule->url}";
      $schedule_url = explode('/', $schedule_url);
      $schedule_url = $schedule_url[count($schedule_url) - 1];
      $schedule_url = $this->validate_channel($schedule_url);
      $logo         = $this->get_live_streaming_logo($schedule_url);

      $data["{$schedule->channel}"][] = array(
        'time_from' => "{$schedule->time->from}",
        'time_to'   => "{$schedule->time->to}",
        'day_from'  => "{$schedule->day->from}",
        'day_to'    => "{$schedule->day->to}",
        'acara'     => "{$schedule->acara}",
        'image'     => "{$schedule->image}",
        'url'       => $schedule_url,
        'logo'      => $logo
      );
    }

    return $data;
  }

  public function get_live_streaming_channel()
  {
    return array('rcti', 'inews_tv', 'global_tv', 'mnc_news', 'mnc_shop', 'mnc_tv', 'mnc_music', 'idx', 'mnc_entertainment', 'news_world', 'mnc_life', 'mnc_lifestyle', 'mnc_muslim');
  }

  public function get_live_streaming_link($channel)
  {
    $live_streaming                      = array();
    $live_streaming['rcti']              = "https://cdn-livetv1.metube.id/hls/rcti.m3u8";
    $live_streaming['inews_tv']          = "http://edge.okezone.com/live/inewsokezone.com.m3u8";
    $live_streaming['global_tv']         = "http://edge.okezone.com/live/globaltv.m3u8";
    $live_streaming['mnc_news']          = "http://edge.okezone.com/live/news.m3u8";
    $live_streaming['mnc_shop']          = "http://cdn.metube.id/videom3u8/tO1wPhMkM7CRadm3COgO/index.m3u8";
    $live_streaming['mnc_tv']            = "http://cdn.metube.id/videom3u8/IUiK1dQBlhVgBd0c4Ehd/index.m3u8";
    $live_streaming['mnc_music']         = "http://edge.okezone.com/live/musik.m3u8";
    $live_streaming['idx']               = "http://cdn.metube.id/videom3u8/JPFOcMOkgnZxPjA8Eudt/index.m3u8";
    $live_streaming['mnc_entertainment'] = "http://edge.okezone.com/live/mncent.m3u8";
    $live_streaming['news_world']        = "http://livemedia.mncplaymedia.net/cdn/iptv/Tvod/001/channel2000073/index.m3u8";
    $live_streaming['mnc_life']          = "http://edge.okezone.com/live/life.m3u8";
    $live_streaming['mnc_lifestyle']     = "http://edge.okezone.com/live/lifestyle.m3u8";
    $live_streaming['mnc_muslim']        = "http://edge.okezone.com/live/muslim.m3u8";

    return !(empty($live_streaming[$channel])) ? $live_streaming[$channel] : false;
  }

  public function get_live_streaming_logo($channel)
  {
    $logo     = array();
    $logo_url = "https://cdn.okezone.com/underwood/img/tv/";

    $logo['rcti']              = $logo_url . "logo-rcti.png";
    $logo['inews_tv']          = $logo_url . "logo-inews-tv.png";
    $logo['global_tv']         = $logo_url . "logo-global-tv.png";
    $logo['mnc_news']          = $logo_url . "logo-mnc-news.png";
    $logo['mnc_shop']          = $logo_url . "logo-mnc-shop.png";
    $logo['mnc_tv']            = $logo_url . "logo-mnc-tv.png";
    $logo['mnc_music']         = $logo_url . "logo_music-channel.png";
    $logo['idx']               = $logo_url . "logo-idx-channel.png";
    $logo['mnc_entertainment'] = $logo_url . "logo-mnc-infotaiment.png";
    $logo['news_world']        = $logo_url . "world-news-logo.png";
    $logo['mnc_life']          = $logo_url . "logo-mnc-lifetv.png";
    $logo['mnc_lifestyle']     = $logo_url . "logo-mnc-lifestyle.png";
    $logo['mnc_muslim']        = $logo_url . "logo-mnc-muslim.png";

    return !(empty($logo[$channel])) ? $logo[$channel] : false;
  }

  # ganti status dari jwplayer ke videojs untuk mengganti player menjadi video js
  public function get_live_streaming_video_type($channel)
  {
    $video_type                      = array();
    $video_type['rcti']              = 'jwplayer';
    $video_type['inews_tv']          = 'jwplayer';
    $video_type['global_tv']         = 'jwplayer';
    $video_type['mnc_news']          = 'jwplayer';
    $video_type['mnc_shop']          = 'jwplayer';
    $video_type['mnc_tv']            = 'jwplayer';
    $video_type['mnc_music']         = 'jwplayer';
    $video_type['idx']               = 'jwplayer';
    $video_type['mnc_entertainment'] = 'jwplayer';
    $video_type['news_world']        = 'jwplayer'; // jw
    $video_type['mnc_life']          = 'jwplayer';
    $video_type['mnc_lifestyle']     = 'jwplayer';
    $video_type['mnc_muslim']        = 'jwplayer';

    return !(empty($video_type[$channel])) ? $video_type[$channel] : false;
  }

  public function get_live_streaming_schedule()
  {
    $streaming_channel  = $this->get_live_streaming();
    $streaming_schedule = $this->get_streaming_schedule();

    foreach ($streaming_channel as $key => $channel) {
      foreach ($streaming_schedule as $schedule) {
        foreach ($schedule as $sch) {
          if ($key === $sch['url']) {
            $streaming_channel[$key]['schedule'][] = $sch;
          }
        }
      }
    }

    return $streaming_channel;
  }

  public function validate_channel($channel)
  {
    if ($channel == 'mnc_business') {
      return 'idx';
    } else {
      return $channel;
    }
  }

  public function load($xmlFile)
  {
    if (is_file($xmlFile)) {
      $strXml = file_get_contents($xmlFile);
      $strXml = utf8_encode($strXml);
    } else {
      $strXml = $this->config->item('xml_blank');
    }

    return $strXml;
  }

  public function get_live_streaming()
  {
    $streaming = array();
    $channels  = $this->get_live_streaming_channel();

    foreach ($channels as $channel) {
      $streaming[$channel] = array(
        'url'  => $this->get_live_streaming_link($channel),
        'logo' => $this->get_live_streaming_logo($channel)
      );
    }

    return $streaming;
  }
}
