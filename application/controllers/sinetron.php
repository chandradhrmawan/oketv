<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sinetron extends CI_Controller
{
  protected $data = array();

  protected $video_popular     = array();
  protected $video_headline    = array();
  protected $streaming_channel = array();
  protected $infografis        = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_popular_json','mvideo_popular');
    $this->load->model('json/mvideo_breaking_json','mvideo_breaking');
    $this->load->model('json/mvideo_recommended_json','mvideo_recommend');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->infografis        = $this->mxmlinfografis->get_infografis();
    $this->video_popular     = $this->mvideo_popular->get_video_popular();
    $this->video_recommended = $this->mvideo_recommend->get_video_recommend();

    $this->data['sinetrons'] = $this->_get_sinetron();

    if ($this->mobile_detect->isMobile()) {
      $this->get_mobile();
    } else {
      $this->get_desktop();
    }
  }

  public function get_desktop()
  {
    $infographic_content['infografis']            = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile']     = $this->infografis['attributes'];
    $popular_video_content['popular_videos']      = array_slice($this->video_popular, 0, 6);
    $latest_video_content['latest_videos']        = array_chunk(array_slice($this->video_recommended, 0, 12), 4);
    $latest_video_content['latest_videos_mobile'] = array_slice($this->video_recommended, 0, 12);

    $this->data['controller']            = $this->uri->segment(1);
    $this->data['latest_video_content']  = $this->load->view('content/vcontent_latest_video', $latest_video_content, TRUE);
    $this->data['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $this->data['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_sinetron', $this->data, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $infographic_content['infografis']       = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos'] = array_slice($this->video_popular, 0, 4);
    $latest_video_content['latest_videos']   = array_slice($this->video_recommended, 0, 4);

    $this->data                          = array();
    $this->data['controller']            = $this->uri->segment(1);
    $this->data['latest_video_content']  = $this->load->view('content_mobile/vcontent_latest_video', $latest_video_content, TRUE);
    $this->data['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $this->data['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_sinetron', $this->data, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  protected function _get_sinetron()
  {
    $data = array();

    $data['kantini_hijabers']['image'] = 'https://cdn.okezone.com//tv/2016/img/kantini-hijabers-banner.jpg';
    $data['kantini_hijabers']['schedule'][] = array('04:15:00', '04:30:00');
    $data['kantini_hijabers']['schedule'][] = array('04:45:00', '06:30:00');
    $data['kantini_hijabers']['schedule'][] = array('19:30:00', '22:00:00');

    $data['dunia_terbalik']['image'] = 'https://cdn.okezone.com//tv/2016/img/dunia-terbalik-banner.jpg';
    $data['dunia_terbalik']['schedule'][] = array('21:30:00', '22:30:00');

    return $data;
  }
}
