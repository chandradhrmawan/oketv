<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vod extends CI_Controller
{
  protected $video_streaming   = array();
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

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->infografis     = $this->mxmlinfografis->get_infografis();
    $this->video_popular  = $this->mvideo_popular->get_video_popular();
    $this->video_headline = $this->mvideo_breaking->get_headline();

    $video_id = $this->get_video_id();

    foreach ($this->video_headline as $video) {
      if ($video_id === $video['video_id']) {
        $this->video_streaming = $video;
      }
    }

    if (empty($this->video_streaming)) {
      $this->video_streaming = $this->video_headline[0];
    }

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
    $latest_video_content['video_streaming']      = $this->video_streaming;
    $latest_video_content['slide_videos']         = array_slice($this->video_headline, 0, 10);
    $latest_video_content['latest_videos']        = array_chunk(array_slice($this->video_headline, 10, 12), 4);
    $latest_video_content['latest_videos_mobile'] = array_slice($this->video_headline, 10, 12);
    $popular_video_content['popular_videos']      = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['latest_video_content']  = $this->load->view('content/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_vod', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $infographic_content['infografis']            = array_slice($this->infografis['attributes'], 0, 4);
    $latest_video_content['video_streaming']      = $this->video_streaming;
    $latest_video_content['slide_videos']         = array_slice($this->video_headline, 0, 10);
    $latest_video_content['latest_videos']        = array_slice($this->video_headline, 10, 4);
    $popular_video_content['popular_videos']      = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['latest_video_content']  = $this->load->view('content_mobile/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_vod', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  public function get_video_id()
  {
    $video_id = $this->input->get('id');

    if (empty($video_id)) {
      $video_id = $this->input->post('id');
    }

    return $video_id;
  }
}
