<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="<?php echo cdn_uri('tv/2016/img/favicon.ico') ?>" />  
  <title>Okezone TV</title>
      
  <!-- Bootstrap Core CSS & Font Awesome-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo cdn_uri('www/2016/css/fonts.css') ?>">
  <!-- bxSlider CSS file -->
  <link href="<?php echo cdn_uri('tv/2016/plugin/bxslider/jquery.bxslider.css') ?>" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="<?php echo cdn_uri('tv/2016/css/style.css') ?>" rel="stylesheet">
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- JQuery --> 
  <!-- <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script> -->
  <script type="text/javascript" src="<?php echo cdn_uri('tv/2016/js/jquery-1.9.1.min.js') ?>"></script>
  <!-- Browser Check -->
  <script type="text/javscript" src="<?php echo cdn_uri('tv/2016/js/modernizr.min.js') ?>"></script>
  <!-- JWPlayer -->
  <script src="https://content.jwplatform.com/libraries/i08xVRRN.js"></script>
  <!--Bootsrap-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Load Panelslider -->
  <script src="<?php echo cdn_uri('tv/2016/plugin/menuslide/jquery.panelslider.min.js') ?>"></script>
  <!-- bxSlider Javascript file -->
  <script src="<?php echo cdn_uri('tv/2016/plugin/bxslider/jquery.bxslider.min.js') ?>"></script>
  <!-- OA Zones -->
  <script type="text/javascript">
    <!--// <![CDATA[
    var OA_zones = {
      'TopRight1': 7,
      'TopRight2': 1471,
      'TopBanner' : 870,
      'TV-SubKanal-Leaderboard': 1475,
      'TV-Mobile-Center1': 1526,
      'TV-Mobile-Center2': 1527,
      'TV-Mobile-Top': 1530
    }
    // ]]> -->
  </script>
  <script type="text/javascript" src="http://bmob.okezone.com/delivery/spcjs.php?id=4"></script> 
  <style>
    #left-panel .panel-bottom {padding: 0;}
  </style>
  <script type='text/javascript'>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    (function() {
      var gads = document.createElement('script');
      gads.async = true;
      gads.type = 'text/javascript';
      var useSSL = 'https:' == document.location.protocol;
      gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
      var node = document.getElementsByTagName('script')[0];
      node.parentNode.insertBefore(gads, node);
    })();
  </script>

  <script type='text/javascript'>
    googletag.cmd.push(function() {
      googletag.defineSlot('/7108725/Desktop-Home-Billboard', [[970, 90]], 'div-gpt-ad-1464079991176-0').setTargeting("Kanal", ["TV"]).addService(googletag.pubads()).setCollapseEmptyDiv(true);
      googletag.defineSlot('/7108725/Home-Rectangle4', [300, 250], 'div-gpt-ad-1461296073604-0').setTargeting("Kanal",["TV"]).addService(googletag.pubads());
      googletag.pubads().enableSingleRequest();
      googletag.enableServices();
    });
  </script>


</head>

<body>
	<!--PANEL SLIDE MENU-->
	<div id="left-panel" class="panel">
    <div class="content panel-wrap">
    	<div class="panel-menu panel-bottom">
    		<ul>
    			<li><a href="<?php echo base_url('') ?>"><span>HOME</span></a></li>
    			<li><a href="<?php echo base_url('streaming') ?>"><span>LIVE TV</span></a></li>
          <li class="sub-p"><a href="<?php echo base_url('program') ?>"><span>PROGRAMME</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <ul class="panel-sub">
              <?php $program_array = $this->config->item('program_array') ?>
              <div class="panel-sub-title clearfix"><span>Show <?php echo count($program_array) ?> Programme</span></div>
              <?php foreach ($program_array as $program_name => $program_value) : ?>
                <li class="show-wrap">
                  <a href="<?php echo base_url('program/' . strtolower(str_replace(' ', '-', $program_name))) ?>" style="padding:0;">
                    <div class="show-box">
                      <div class="show-cover">
                        <div class="show-cover-img" style="background-image: url('<?php echo cdn_uri('tv/2016/img/' . $program_value) ?>');"></div>
                      </div>
                      <div class="show-title"><p><?php echo ucwords($program_name) ?></p></div>
                    </div>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
          <li><a href="<?php echo base_url('radio') ?>"><span>RADIO</span></a></li>
          <li><a href="<?php echo base_url('vod') ?>"><span>VOD</span></a></li>
          <li><a href="<?php echo base_url('sinetron') ?>"><span>SINETRON</span></a></li>
          <li><a href="<?php echo base_url('schedule') ?>"><span>SCHEDULE</span></a></li>
    		</ul>
    	</div>
    </div>
	</div>
	<div id="page">
    <div class="container container-top-nav">
      <div class="top-head-nav">
        <ul>
          <li class="drop show">
            <script data-pagespeed-no-defer="">(function(){var g=this;function h(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};function l(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};function m(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n;function p(b,d,a,c,e){this.h=b;this.j=d;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=c;this.b={};this.a=[];this.c={}}function q(b,d){var a,c,e=d.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&c<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});function r(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(t())),131072>=a.length+e.length&&(a+=e),d=!0);u=a;if(d){c=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(v){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function t(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var u="";h("pagespeed.CriticalImages.getBeaconData",function(){return u});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon','http://pilkada.okezone.com/countbanten','BZbBRnAYE6',true,true,'cMm-QMuYfa8');</script><img src="http://cdn.okezone.com/underwood/img/logo_wp1.png" data-pagespeed-url-hash="1311552511" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span></span>
            <ul class="toggmen">
              <b></b>
              <div class="colmd4">
                <li><a href="http://news.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">News</a></li>
                <li><a href="http://economy.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Finance</a></li>
                <li><a href="http://lifestyle.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Lifestyle</a></li>
                <li><a href="http://celebrity.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Celebrity</a></li>
                <li><a href="http://bola.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Bola</a></li>
              </div>
              <div class="colmd4">
                <li><a href="http://sports.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Sports</a></li>
                <li><a href="http://techno.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Techno</a></li>
                <li><a href="http://lifestyle.okezone.com/travel?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Travel</a></li>
                <li><a href="http://lifestyle.okezone.com/food?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Food</a></li>
                <li><a href="http://lifestyle.okezone.com/health?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Health</a></li>
              </div>
              <div class="colmd4">
                <li><a href="http://news.okezone.com/autos/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Autos</a></li>
                <li><a href="http://muslim.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Muslim</a></li>
                <li><a href="http://foto.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Foto</a></li>
                <li><a href="http://video.okezone.com/?utm_source=wp&amp;utm_medium=box&amp;utm_campaign=mnTop">Video</a></li>
                <li><a href="http://index.okezone.com/">Index</a></li>
              </div>
            </ul>
          </li>
          <li><a href="http://warungkopi.okezone.com" target="_blank">Warung Kopi</a></li>
          <li><a href="http://rubik.okezone.com" target="_blank">Rubik</a></li>
          <li><a href="http://tv.okezone.com" target="_blank">OKEZONE TV</a></li>
          <li><a href="http://metube.okezone.com" target="_blank">MeTube</a></li>
          <li class="dropx">
            <span></span>
            <ul class="toggmens">
              <b></b>  
              <li><a href="http://www.jobsmnc.co.id/" target="_blank">Lowongan Kerja</a></li>
              <li><a href="http://www.misteraladin.com" target="_blank">Booking Hotel</a></li>
              <li><a href="'https://brandoutlet.co.id?utm_source=okezone&amp;utm_campaign=okeboweblink&amp;utm_medium=okewebsite'" target="_blank">Fashion Online</a></li>
              <li><a href="http://www.mnc-insurance.com/" target="_blank">Asuransi Kendaraan</a></li>
            </ul>
          </li>
          <div class="clearfix"></div>
        </ul>
        <script></script>
        <div class="searching">
          <form action="http://search.okezone.com/search/" method="get"><input type="text" name="q" placeholder="Search"></form>
          <div class="loginnama">
            <div class="dropdown open">
              <a href="https://id.okezone.com/oauth/authorize?response_type=code&amp;client_id=b1a153383f08cd0bab710b1109a4c4edcf06b4283bbb9144fe9917152db1cf52&amp;redirect_uri=http%3A%2F%2Ftv2016.okezonedev.com%2F&amp;back_to=http%3A%2F%2Ftv2016.okezonedev.com%2F">
              <img src="https://cdn.okezone.com/m/2016/img/user.png" alt="image_profil_default" data-pagespeed-url-hash="1140494177" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </a> 
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>

		<!--HEADER / MENU TOP-->
		<header id="oktv-header" class="oktv-header">
			<div class="container">
				<div class="oktv-top clearfix" style="margin: 0 0 15px;">
					<a id="left-panel-link" href="#left-panel">
						<button type="button" class="navbar-toggle" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
      		</a>
					<div class="oktv-logo">
						<a href="<?php echo base_url() ?>"><img src="<?php echo cdn_uri('tv/2016/img/logo/okezonetv.png') ?>"></a>
					</div>
				</div>
			</div>
			<div class="oktv-menu">
				<div class="container">
					<ul class="clearfix">
						<li <?php if (empty($controller)) echo 'class="active"' ?>>
							<a href="<?php echo base_url() ?>">HOME</a>
						</li>
						<li <?php if ($controller === 'streaming') echo 'class="active"' ?>>
							<a href="<?php echo base_url('streaming') ?>">LIVE TV</a>
						</li>
            <li class="dropdown <?php if ($controller === 'program') echo 'active' ?>">
              <a class="dropbtn" href="<?php echo base_url('program') ?>">
                PROGRAMME
                <!-- <span class="caret"></span> -->
              </a>
              <ul class="dropdown-content">
                <?php $program_array = $this->config->item('program_array') ?>
                <?php foreach ($program_array as $program_name => $program_value) : ?>
                  <li><a href="<?php echo base_url('program/' . strtolower(str_replace(' ', '-', $program_name))) ?>"><?php echo ucwords($program_name) ?></a></li>
                <?php endforeach ?>
              </ul>
            </li>
            <li <?php if ($controller === 'radio') echo 'class="active"' ?>>
              <a href="<?php echo base_url('radio') ?>">RADIO</a>
            </li>
            <?php /*
						<li <?php if ($controller === 'movie') echo 'class="active"' ?>>
							<a href="<?php echo base_url('movie') ?>">MOVIE</a>
						</li>
            */ ?>
            <li <?php if ($controller === 'sinetron') echo 'class="active"' ?>>
              <a href="<?php echo base_url('sinetron') ?>">SINETRON</a>
            </li>
						<li <?php if ($controller === 'vod') echo 'class="active"' ?>>
							<a href="<?php echo base_url('vod') ?>">VOD</a>
						</li>
						<li <?php if ($controller === 'schedule') echo 'class="active"' ?>>
							<a href="<?php echo base_url('schedule') ?>">SCHEDULE</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<?php echo $main_content ?>
		<footer id="oktv-footer" class="oktv-footer">
			<div class="container">
				<div class="footer-wrap">
					<div class="footer-top clearfix">
						<div class="footer-logo">
							<img src="<?php echo cdn_uri('tv/2016/img/logo/okezonetv.png') ?>">
						</div>
						<div class="footer-menu">
							<ul class="clearfix">
								<li><a href="http://news.okezone.com">NEWS</a></li>
								<li><a href="http://economy.okezone.com">BISNIS</a></li>
								<li><a href="http://lifestyle.okezone.com">LIFESTYLE</a></li>
								<li><a href="http://celebrity.okezone.com">CELEBRITY</a></li>
								<li><a href="http://bola.okezone.com">BOLA</a></li>
								<li><a href="http://muslim.okezone.com">MUSLIM</a></li>
								<li><a href="http://sport.okezone.com">SPORTS</a></li>
								<li><a href="http://techno.okezone.com">TECHNO</a></li>
								<li><a href="http://news.okezone.com/autos">AUTOS</a></li>
								<li><a href="http://foto.okezone.com">FOTO</a></li>
								<li><a href="http://video.okezone.com">VIDEO</a></li>
								<li><a href="http://management.okezone.com">ABOUT US</a></li>
								<li><a href="http://management.okezone.com/redaksi">REDAKSI</a></li>
								<li><a href="http://management.okezone.com/pos">KOTAK POS</a></li>
								<li><a href="http://career.okezone.com">KARIER</a></li>
								<li><a href="http://client.okezone.com/advertising">INFO IKLAN</a></li>
								<li><a href="http://management.okezone.com/disclaimer">DISCLAIMER</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-bottom clearfix">
						<div class="footer-sosmed">
							<ul class="clearfix">
								<li>
									<a href="https://www.facebook.com/OkezoneCom" target="_blank">
										<div class="sosmed s1"></div>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/okezonenews" target="_blank">
										<div class="sosmed s2"></div>
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/+okezone" target="_blank">
										<div class="sosmed s3"></div>
									</a>
								</li>
								<li>
									<a href="https://instagram.com/okezonecom" target="_blank">
										<div class="sosmed s4"></div>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/user/okezoneindonesia" target="_blank">
										<div class="sosmed s5"></div>
									</a>
								</li>
								<li>
									<a href="https://itunes.apple.com/app/id570615156" target="_blank">
										<div class="sosmed s6"></div>
									</a>
								</li>
								<li>
									<a href="https://itunes.apple.com/app/id624468351" target="_blank">
										<div class="sosmed s7"></div>
									</a>
								</li>
								<li>
									<a href="" target="_blank">
										<div class="sosmed s8"></div>
									</a>
								</li>
								<li>
									<a href="https://play.google.com/store/apps/details?id=linktone.okezone.android" target="_blank">
										<div class="sosmed s9"></div>
									</a>
								</li>
								<li>
									<a href="https://appworld.blackberry.com/webstore/content/28852888" target="_blank">
										<div class="sosmed s10"></div>
									</a>
								</li>
							</ul>
						</div>
						<div class="footer-mnc">
							<div class="mnc1">
								<a href="https://mnc.co.id">
									<img src="<?php echo cdn_uri('tv/2016/img/logo/play-normal.png') ?>">
								</a>
							</div>
							<div class="mnc2">
								<a href="https://www.mncplaymedia.com">
									<img src="<?php echo cdn_uri('tv/2016/img/logo/mnc-media-log.png') ?>">
								</a>
							</div>
              <?php $render_ip = explode('.', $_SERVER['SERVER_ADDR']);
              ?>
              <p><?php if(isset($render_ip[3])){ ?>
                / rendering in {elapsed_time} seconds [<?php echo $render_ip[3] ?>]<?php } ?>
              
              </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
  <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        responsive: true,
        slideWidth: 250,
        infiniteLoop: true,
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 0,
        pager: false,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-angle-right fa-3x"></i>',
        prevText: '<i class="fa fa-angle-left fa-3x"></i>'
      }); 
    });

    <!-- Script to Activate the Carousel -->
    $('.movie-slide').carousel({
        interval: 4000
    })

    <!-- Load Panelslider -->
    $(document).ready(function(){ 
      $('#left-panel-link').panelslider();

      $('#close-panel-bt').click(function() {
          $.panelslider.close();
      });

      $('#left-panel, #right-panel').on('psBeforeOpen psOpen psBeforeClose psClose', function(e) {
          console.log(e.type, e.target.getAttribute('id'));
      });
    });

    $(document).ready(function(){
      $('.c-slide').carousel({
          pause: true,
          interval: false,
      })
    });

    $(document).ready(function(){
      $(".tv-list li").click(function(e) {
        e.preventDefault();

        $("#someFrame").attr("src", $(this).find('a').attr("href"));
        $(".tv-list li").removeClass("active");
        $(this).addClass("active");
      })
    });


    // tambahan untuk menu top
    $(document).ready(function(){
      $('.drop').click(function(){ 
        if ($(".drop").hasClass("down")) {
          $(this).removeClass("down"); 
        } else {
          $(this).addClass("down"); 
        } 
      });

      $('.dropx').click(function(){ 
        if ($(".dropx").hasClass("down")) {
          $(this).removeClass("down"); 
        } else {
          $(this).addClass("down"); 
        } 
      });
    });
  </script>
</body>
</html>