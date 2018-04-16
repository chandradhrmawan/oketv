<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Streaming extends CI_Controller
{
  protected $video_popular     = array();
  protected $streaming_url     = null;
  protected $streaming_channel = null;
  protected $streaming_type    = null;
  protected $infografis        = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $channel = $this->uri->segment(2);

    if (empty($channel)) {
      $this->_redirect_if_parameter_wrong();
    }

    $this->load->model('mtv_live_streaming', 'mlive_streaming');
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_popular_json','mvideo_popular');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->streaming_channel = $this->mlive_streaming->get_live_streaming();
    $this->streaming_url     = $this->mlive_streaming->get_live_streaming_link($channel);
    $this->streaming_type    = $this->mlive_streaming->get_live_streaming_video_type($channel);
    $this->infografis        = $this->mxmlinfografis->get_infografis();
    $this->video_popular     = $this->mvideo_popular->get_video_popular();

    if (empty($this->streaming_url)) {
      $this->_redirect_if_parameter_wrong();
    }

    if ($this->mobile_detect->isMobile()) {
      $this->get_mobile();
    } else {
      $this->get_desktop();
    }
  }

  public function get_desktop()
  {
    $streaming_content['streaming_channel']   = $this->streaming_channel;
    $infographic_content['infografis']        = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile'] = $this->infografis['attributes'];
    $popular_video_content['popular_videos']  = array_slice($this->video_popular, 0, 6);

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['live_streaming_url']    = $this->streaming_url;
    $main_content['live_streaming_type']   = $this->streaming_type;
    $main_content['streaming_content']     = $this->load->view('content/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_streaming', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }
  
  public function get_mobile()
  {
    $streaming_content['streaming_channel']   = $this->streaming_channel;
    $infographic_content['infografis']        = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos']  = array_slice($this->video_popular, 0, 6);

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['live_streaming_url']    = $this->streaming_url;
    $main_content['live_streaming_type']   = $this->streaming_type;
    $main_content['streaming_content']     = $this->load->view('content_mobile/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_streaming', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  protected function _redirect_if_parameter_wrong($default_channel = 'rcti')
  {
    redirect('streaming/' . $default_channel);
  }
}
