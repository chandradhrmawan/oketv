<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller
{
  protected $recommended        = array();
  protected $video_popular      = array();
  protected $streaming          = array();
  protected $streaming_channel  = array();
  protected $streaming_schedule = array();
  protected $infografis         = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('json/mvideo_popular_json','mvideo_popular');
    $this->load->model('json/mvideo_recommended_json','mvideo_recommend');
    $this->load->model('mtv_live_streaming', 'mlive_streaming');
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_breaking_json','mvideo_breaking');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->streaming          = $this->mlive_streaming->get_live_streaming_schedule();
    $this->streaming_schedule = $this->_get_streaming_schedule($this->streaming);
    $this->streaming_channel  = $this->mlive_streaming->get_live_streaming();
    $this->infografis         = $this->mxmlinfografis->get_infografis();
    $this->video_recommended  = $this->mvideo_recommend->get_video_recommend();
    $this->video_popular      = $this->mvideo_popular->get_video_popular();

    if ($this->mobile_detect->isMobile()) {
      $this->get_mobile();
    } else {
      $this->get_desktop();
    }
  }

  public function get_desktop()
  {
    $recommended_video_content['recommended_videos']        = array_chunk(array_slice($this->video_recommended, 0, 12), 4);
    $recommended_video_content['recommended_videos_mobile'] = array_slice($this->video_recommended, 0, 12);
    $streaming_content['streaming']                         = $this->streaming;
    $streaming_content['streaming_schedule']                = $this->streaming_schedule;
    $streaming_content['streaming_channel']                 = $this->streaming_channel;
    $infographic_content['infografis']                      = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile']               = $this->infografis['attributes'];
    $popular_video_content['popular_videos']                = array_slice($this->video_popular, 0, 6);

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['recommended_content']   = $this->load->view('content/vcontent_recommended', $recommended_video_content, TRUE);
    $main_content['streaming_content']     = $this->load->view('content/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_schedule', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $recommended_video_content['recommended_videos']        = array_slice($this->video_recommended, 0, 4);
    $streaming_content['streaming']                         = $this->streaming;
    $streaming_content['streaming_schedule']                = $this->streaming_schedule;
    $streaming_content['streaming_channel']                 = $this->streaming_channel;
    $infographic_content['infografis']                      = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos']                = array_slice($this->video_popular, 0, 6);

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['recommended_content']   = $this->load->view('content_mobile/vcontent_recommended', $recommended_video_content, TRUE);
    $main_content['streaming_content']     = $this->load->view('content_mobile/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_schedule', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  protected function _get_streaming_schedule($streaming)
  {
    foreach ($streaming as $channel_name => $stream) {
      $is_start = true;
      $is_end   = '';

      if (!empty($stream['schedule'])) {
        foreach ($stream['schedule'] as $key => $schedule) {
          if ($schedule['day_from'] <= date('N') && $schedule['day_to'] >= date('N')) {
            if ($is_start) {
              $streaming_schedule[$channel_name]['00:00']['duration'] = (strtotime($schedule['time_from']) - strtotime('00:00')) / 60;
              $is_start = false;
            } else {
              $streaming_schedule[$channel_name][$stream['schedule'][$key - 1]['time_to']]['duration'] = (strtotime($schedule['time_from']) - strtotime($stream['schedule'][$key - 1]['time_to'])) / 60;
            }

            $streaming_schedule[$channel_name][$schedule['time_from']]['acara']     = $schedule['acara'];
            $streaming_schedule[$channel_name][$schedule['time_from']]['time_from'] = $schedule['time_from'];
            $streaming_schedule[$channel_name][$schedule['time_from']]['time_to']   = $schedule['time_to'];
            $streaming_schedule[$channel_name][$schedule['time_from']]['duration']  = (strtotime($schedule['time_to']) - strtotime($schedule['time_from'])) / 60;

            $is_end = $schedule['time_to'];
          }
        }

        if (empty($streaming_schedule[$channel_name]['23:30'])) {
          $streaming_schedule[$channel_name][$is_end]['duration'] = (strtotime('23:30 +30 minutes') - strtotime($is_end)) / 60;
        }
      } 
    }

    return $streaming_schedule;
  }
}
