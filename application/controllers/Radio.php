<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Radio extends CI_Controller
{
  protected $video_popular     = array();
  protected $video_headline    = array();
  protected $streaming_channel = array();
  protected $infografis        = array();
  protected $radio_channel     = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('news/mxmlinfografis','mxmlinfografis');
    $this->load->model('json/mvideo_popular_json','mvideo_popular');
    $this->load->model('json/mvideo_breaking_json','mvideo_breaking');
    $this->load->model('m_radio');

    $this->load->helper('contentdate');
    $this->load->library('Mobile_Detect', 'mobile_detect');

    $this->infografis     = $this->mxmlinfografis->get_infografis();
    $this->video_popular  = $this->mvideo_popular->get_video_popular();
    $this->video_headline = $this->mvideo_breaking->get_headline();
    $this->radio_channel  = $this->m_radio->get_all_items();

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

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['radio_channel']         = $this->radio_channel;
    $main_content['infographic_content']   = $this->load->view('content/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content/vbase_radio', $main_content, TRUE);
    $this->load->view('content/vbase', $content, FALSE);
  }

  public function get_mobile()
  {
    $infographic_content['infografis']       = array_slice($this->infografis['attributes'], 0, 4);
    $popular_video_content['popular_videos'] = array_slice($this->video_popular, 0, 6);

    $main_content['controller']            = $this->uri->segment(1);
    $main_content['radio_channel']         = $this->radio_channel;
    $main_content['infographic_content']   = $this->load->view('content_mobile/vcontent_infographic', $infographic_content, TRUE);
    $main_content['popular_video_content'] = $this->load->view('content_mobile/vcontent_popular_video', $popular_video_content, TRUE);

    $content['main_content'] = $this->load->view('content_mobile/vbase_radio', $main_content, TRUE);
    $this->load->view('content_mobile/vbase', $content, FALSE);
  }

  public function embed($id)
  {
    $this->load->model('m_radio');

    if (empty($id)) {
      $id = $this->m_radio->get_first_item();

      redirect(base_url('radio/' . $id));
    }

    $content['radio_channel'] = $this->m_radio->get_item_by_id($id);

    $this->load->view('content/vcontent_radio_embed', $content);
  }
}
