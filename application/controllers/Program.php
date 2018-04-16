<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Program extends CI_Controller
{
  protected $video_popular     = array();
  protected $video_headline    = array();
  protected $streaming_channel = array();
  protected $infografis        = array();
  protected $kongkow           = null;

  public function __construct()
  {
    parent::__construct();
  }

  public function index($id = null)
  {
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_popular_json','mvideo_popular');
    $this->load->model('json/mvideo_breaking_json','mvideo_breaking');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->kongkow       = $this->_get_kongkow();
    $this->infografis    = $this->mxmlinfografis->get_infografis();
    $this->video_popular = $this->mvideo_popular->get_video_popular();

    if (empty($id)) {
      $this->load->model('json/mvideo_recommended_json','mvideo_recommend');
      $this->load->model('json/mvideo_kongkow');

      $this->video_recommended = $this->mvideo_recommend->get_video_recommend();
      $this->kongkow_list      = $this->mvideo_kongkow->get_data();

      if ($this->mobile_detect->isMobile()) {
        $this->get_default_mobile();
      } else {
        $this->get_default_desktop();
      }
    } else {
      $this->programs = $this->_get_program($id);
      
      if ($this->mobile_detect->isMobile()) {
        $this->get_mobile();
      } else {
        $this->get_desktop();
      }
    }
  }

  public function get_desktop()
  {
    $infographic_content['infografis']            = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile']     = $this->infografis['attributes'];
    $latest_video_content['slide_videos']         = array_slice($this->programs, 0, 10);
    $latest_video_content['latest_videos']        = array_chunk(array_slice($this->programs, 10, 12), 4);
    $latest_video_content['latest_videos_mobile'] = array_slice($this->programs, 10, 12);
    $popular_video_content['popular_videos']      = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['latest_video_content']  = $this->load->view('content/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_program', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $infographic_content['infografis']       = array_slice($this->infografis['attributes'], 0, 4);
    $latest_video_content['slide_videos']    = array_slice($this->programs, 0, 10);
    $latest_video_content['latest_videos']   = array_slice($this->programs, 10, 4);
    $popular_video_content['popular_videos'] = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['latest_video_content']  = $this->load->view('content_mobile/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_program', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  public function get_default_desktop()
  {
    $infographic_content['infografis']            = array_chunk($this->infografis['attributes'], 4);
    $infographic_content['infografis_mobile']     = $this->infografis['attributes'];
    $popular_video_content['popular_videos']      = array_slice($this->video_popular, 0, 6);
    $latest_video_content['latest_videos']        = array_chunk(array_slice($this->video_recommended, 0, 12), 4);
    $latest_video_content['latest_videos_mobile'] = array_slice($this->video_recommended, 0, 12);
    $kongkow_list['kongkow']                      = array_chunk(array_slice($this->kongkow_list, 0, 12), 4);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['kongkow']               = $this->kongkow;
    $main_content['latest_video_content']  = $this->load->view('content/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);
    $main_content['kongkow_list_content']  = $this->load->view('content/vcontent_kongkow_list', $kongkow_list, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_program_default', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_default_mobile()
  {
    $infographic_content['infografis']       = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos'] = array_slice($this->video_popular, 0, 6);
    $latest_video_content['latest_videos']   = array_slice($this->video_recommended, 0, 4);
    $kongkow_list['kongkow']                 = array_slice($this->kongkow_list, 0, 12);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['kongkow']               = $this->kongkow;
    $main_content['latest_video_content']  = $this->load->view('content_mobile/vcontent_latest_video', $latest_video_content, TRUE);
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);
    $main_content['kongkow_list_content']  = $this->load->view('content_mobile/vcontent_kongkow_list', $kongkow_list, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_program_default', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  protected function _get_program($id = null)
  {
    $this->load->model('m_program');
    $programs = $this->m_program->get_all_data($id);
    return $programs;
  }

  protected function _get_kongkow()
  {
    // create curl resource
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, "http://warungkopi.okezone.com/data/feedkongkow.json");
    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $output = curl_exec($ch);
    // close curl resource to free up system resources
    curl_close($ch);      

    $return_output = json_decode($output);

    if (!empty($return_output) && count($return_output) > 0) {
      return $return_output[0];
    }
  }
}
