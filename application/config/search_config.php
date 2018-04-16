<?php
    
	$config['solr_server_hostname']	= '10.10.1.205';
	$config['solr_server_path']		= 'video';
	$config['solr_secure']			= false;
	$config['solr_server_port']		= (($config['solr_secure'])) ? 8081 : 8080;
	$config['solr_server_username']	= '';
	$config['solr_server_password']	= '';
	$config['solr_server_timeout']	= 10;
	
	$config['video_solr_server_hostname']	= '10.10.1.205';
	$config['video_solr_server_path']		= 'video';
	$config['video_solr_secure']			= false;
	$config['video_solr_server_port']		= (($config['solr_secure'])) ? 8081 : 8080;
	$config['video_solr_server_username']	= '';
	$config['video_solr_server_password']	= '';
	$config['video_solr_server_timeout']	= 10;
    $config['video_image_uri']              = 'http://cdn.okezone.tv/videos';
    	
	
	$config['photo_solr_server_hostname']	= '10.10.1.205';
	$config['photo_solr_server_path']		= 'photo';
	$config['photo_solr_secure']			= false;
	$config['photo_solr_server_port']		= (($config['solr_secure'])) ? 8081 : 8080;
	$config['photo_solr_server_username']	= '';
	$config['photo_solr_server_password']	= '';
	$config['photo_solr_server_timeout']	= 10;
	$config['photo_image_uri']              = 'http://i.okezone.com/tv/photos';
	
	$config['text_solr_server_hostname']	= '10.10.1.205';
	$config['text_solr_server_path']		= 'news';
	$config['text_solr_secure']			    = false;
	$config['text_solr_server_port']		= (($config['solr_secure'])) ? 8081 : 8080;
	$config['text_solr_server_username']	= '';
	$config['text_solr_server_password']	= '';
	$config['text_solr_server_timeout']	    = 10;
	$config['text_image_uri']              = 'http://img.okezone.com/content';
	
/* End of file webconfig.php */ 
/* Location: ./webconfig.php */