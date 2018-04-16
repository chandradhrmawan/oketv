<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Movie extends CI_Controller
{
  protected $recommended= array();
  protected $video_popular       = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('json/mvideo_popular_json','mvideo_popular');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->video_popular  = $this->mvideo_popular->get_video_popular();

    if ($this->mobile_detect->isMobile()) {
      $this->get_mobile();
    } else {
      $this->get_desktop();
    }
  }

  public function get_desktop()
  {
    $recommended_content['recommended_content']        = array_chunk($this->recommended, 4);
    $recommended_content['recommended_content_mobile'] = $this->recommended;
    $popular_video_content['popular_videos']           = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['recommended_content']   = $this->load->view('content/vcontent_recommended', $recommended_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_movie', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $recommended_content['recommended_content'] = array_slice($this->recommended, 0, 4);
    $popular_video_content['popular_videos']    = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['recommended_content']   = $this->load->view('content_mobile/vcontent_recommended', $recommended_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_movie', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }
}
