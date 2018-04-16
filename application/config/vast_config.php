<?php

/*
    flag    :
               1 = okezone openx;
               2 = external, custom player

*/
$config['ads_channel'][18]['flag']        = 1;
$config['ads_channel'][18]['zone_id']     = 810;
$config['ads_channel'][18]['plugin']      = 'http://bmob.okezone.com/delivery/fc.php';
$config['ads_channel'][18]['config']      = NULL;


$config['ads_channel'][21]['flag']        = 2;
$config['ads_channel'][21]['zone_id']     = NULL;
$config['ads_channel'][21]['plugin']      = 'http://plugin.innity.net/fp/InnityAdsFlowPlayerPlugin.swf';
$config['ads_channel'][21]['config']      = site_url()."iap_config.xml";



?>