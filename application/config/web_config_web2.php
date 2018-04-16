<?php
    // $config['base_url']			= "http://tv.okezone.com"; 
    $config['index_page'] 		= "";

    $config['urchin']           = 'UA-1149387-43';
    $config['production']       = TRUE;

    $config['cache_expired']    = 2;
    $config['cache_path']       = '';
    $config['cache_path']       = '/tmp/httpd-cache/www/cache/';
    $config['compress_output']  = FALSE;

    $config['xml_data']         = "/mainData/data/okezone.tv/xml";
    $config['images_path']		    = "/mainData/data/okezone.tv/images";

    //$config['images_uri']       = "http://cdn.okezone.tv";
    $config['images_uri']       = "http://cdntv.okezone.com";
    //$config['template_uri']     = "http://cdn.okezone.tv/asset/12s";
    $config['template_uri']     = "http://cdntv.okezone.com/asset/12s";
    $config['template_player']  = "http://p.okezone.com";
    $config['template_gtv_player']  = "http://p.okezone.com/gtv";
    //$config['pendopo_images_uri']= "http://cdn.okezone.tv";
    $config['pendopo_images_uri']= "http://cdntv.okezone.com";
    $config['pendopo_video_uri'] = "http://v.okeinfo.net";

    $config['video_server']    	= "http://v.okeinfo.net";
    $config['video_server_mirror'] = "http://va.okeinfo.net";
    $config['video_server_archive'] = "http://va.okeinfo.net";

    $config['videocontroller']	= "watch";
    $config['video_data']       = "/mainData/data/okezone.tv/videos";

    $config['streaming_server']     = 'edge.okeinfo.net';
    $config['streaming_protocol']   = 'rtmp://';
    $config['streaming_apps']        = 'live';

    //$config['player_key']       = '#$f70f7cb6136fdde8a22';
    $config['player_key']          = '#$a3fff13312b0a5e029c';

    #search server
    $config['search_server']   = '10.10.1.205';
    $config['search_port']     = '8080';
    $config['search_method']   = '/video/';

    $config['search_form_action']   = 'http://search.okezone.com/search';


    #headline playlist
    $config['headline_pl']    = 443;
    $config['trend_pl']       = 444;




    #hit server
    $config['hit_server']      = '10.10.1.36';
    $config['hit_add_method']  = 'hitAdd';
    $config['hit_count_method']= 'hitSum';
    $config['hit_port']        = 8082;

    $config['pl_headline_id']	= 51;
    $config['featured_id']		= 45721;

$config['xml_blank'] =<<<XML
<?xml version='1.0' encoding='UTF-8'?>
<okezone>
 <data/>
</okezone>
XML;
/* End of file webconfig.php */
/* Location: ./webconfig.php */
