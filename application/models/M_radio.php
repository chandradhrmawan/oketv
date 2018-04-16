<?php

class m_radio extends CI_Model
{
  protected $radio_channel = array(
    'global_radio' => array(
      'name'      => 'Global Radio',
      'frequency' => '88.4 FM',
      'image'     => 'globalradio.jpg',
      'url'       => 'http://202.147.199.98/;stream.nsv'
    ),
    'sindo_trijaya' => array(
      'name'      => 'Sindotrijaya',
      'frequency' => '104.6 FM',
      'image'     => 'sindo.jpg',
      'url'       => 'http://202.147.199.101:8000/;stream/1'
    ),
    'rdi' => array(
      'name'      => 'RDI',
      'frequency' => '97.1 FM',
      'image'     => 'RDI.jpg',
      'url'       => 'http://202.147.199.99:8000/;stream/1'
    ),
    'vradio' => array(
      'name'      => 'V Radio',
      'frequency' => '106.6 FM',
      'image'     => 'vra.jpg',
      'url'       => 'http://202.147.199.100:8000/;stream/1'
    )
  );

  public function __construct()
  {
    parent::__construct();
  }

  public function get_all_items()
  {
    return $this->radio_channel;
  }

  public function get_item_by_id($id)
  {
    return (!empty($this->radio_channel[$id])) ? $this->radio_channel[$id] : null;
  }

  public function get_first_item_key()
  {
    foreach ($this->radio_channel as $key => $value) {
      return $key;
    }
  }
}