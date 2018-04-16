<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
  protected $video_headline    = array();
  protected $video_popular     = array();
  protected $video_recommend   = array();
  protected $streaming_channel = array();
  protected $infografis        = array();

  public function index()
  {
    $this->load->model('json/mvideo_popular_json','mvideo_popular');
    $this->load->model('json/mvideo_recommended_json','mvideo_recommend');
    $this->load->model('mtv_live_streaming', 'mlive_streaming');
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_breaking_json','mvideo_breaking');
    $this->load->model('json/mvideo_okezone_slide');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->video_headline    = $this->mvideo_breaking->get_headline();
    $this->video_recommended = $this->mvideo_recommend->get_video_recommend();
    $this->video_popular     = $this->mvideo_popular->get_video_popular();
    $this->streaming_channel = $this->mlive_streaming->get_live_streaming();
    $this->infografis        = $this->mxmlinfografis->get_infografis();
    $this->okezone_slides    = $this->mvideo_okezone_slide->get_data();

    if ($this->mobile_detect->isMobile()) {
      $this->get_mobile();
    } else {
      $this->get_desktop();
    }
  }

  public function get_desktop()
  {
    $streaming_content['streaming_channel']                 = $this->streaming_channel;
    $recommended_video_content['recommended_videos']        = array_chunk(array_slice($this->video_recommended, 0, 12), 4);
    $recommended_video_content['recommended_videos_mobile'] = array_slice($this->video_recommended, 0, 12);
    $infographic_content['infografis']                      = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile']               = $this->infografis['attributes'];
    $popular_video_content['popular_videos']                = array_slice($this->video_popular, 0, 6);
    $okezone_slides['slides']                               = array_chunk($this->okezone_slides, 4);
    $okezone_slides['slides_mobile']                        = $this->okezone_slides;

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['slide_videos']          = array_slice($this->video_headline, 0, 10);
    $main_content['recommended_content']   = $this->load->view('content/vcontent_recommended', $recommended_video_content, TRUE);
    $main_content['streaming_content']     = $this->load->view('content/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);
    $main_content['okezone_slide_content'] = $this->load->view('content/vcontent_okezone_slide', $okezone_slides, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_home', $main_content, TRUE);

    // print_r(base_url());die();

    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $streaming_content['streaming_channel']          = $this->streaming_channel;
    $recommended_video_content['recommended_videos'] = array_slice($this->video_recommended, 0, 4);
    $infographic_content['infografis']               = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos']         = array_slice($this->video_popular, 0, 6);
    $okezone_slides['slides']                        = array_slice($this->okezone_slides, 0, 4);

    $main_content                          = array();
    $main_content['controller']            = $this->uri->segment(1);
    $main_content['slide_videos']          = array_slice($this->video_headline, 0, 10);
    $main_content['recommended_content']   = $this->load->view('content_mobile/vcontent_recommended', $recommended_video_content, TRUE);
    $main_content['streaming_content']     = $this->load->view('content_mobile/vcontent_streaming', $streaming_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);
    $main_content['okezone_slide_content'] = $this->load->view('content_mobile/vcontent_okezone_slide', $okezone_slides, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_home', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }
}
