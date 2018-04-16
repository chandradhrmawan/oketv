<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="https://cdn.okezone.com/m/2016tv/assets/img/favicon.ico" />  
  <title>Okezone TV</title>
    
  <!-- Bootstrap Core CSS & Font Awesome-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdn.okezone.com/www/2016/css/fonts.css">
  <!-- bxSlider CSS file -->
  <link href="https://cdn.okezone.com/tv/2016/plugin/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://cdnapps.okezone.com/underwood/css/dropkick.css?version=2016081214">
  <link href="https://cdn.okezone.com/m/2016tv/assets/css/style.css" rel="stylesheet">
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- JQuery --> 
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
  <!-- Browser Check -->
  <script type="text/javscript" src="https://cdn.okezone.com/m/2016tv/assets/js/modernizr.min.js"></script>
  <!-- slider JS files --> 
  <!-- JWPlayer -->
  <script src="https://content.jwplatform.com/libraries/i08xVRRN.js"></script>
  <!--Bootsrap-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Load Panelslider -->
  <script src="https://cdn.okezone.com/m/2016tv/assets/plugin/menuslide/jquery.panelslider.min.js"></script>
  <!-- bxSlider Javascript file -->
  <script src="https://cdn.okezone.com/tv/2016/plugin/bxslider/jquery.bxslider.min.js"></script>
  <!-- Custom Main JS -->
  <script type="text/javscript" src="https://cdn.okezone.com/m/2016tv/assets/js/main.js"></script>
  <style>
    li.menu-drop ul > li {margin: 0 !important;}
    li.menu-drop ul > li > a {padding: 15px; background-color: #ddd; font-size: 14px; font: inherit; color: inherit;}
    #left-panel .fa-chevron-right, #left-panel .fa-chevron-down{float: right;}
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
          <li><a href="<?php echo base_url() ?>"><span>HOME</span></a></li>
          <li><a href="<?php echo base_url('streaming') ?>"><span>LIVE TV</span></a></li>
          <li class="menu-drop">
            <a href="javascript:void(0);">
              <span>PROGRAMME</span>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
            <div class="drop-down" style="display: none;">
              <ul>
                <?php $program_array = $this->config->item('program_array') ?>
                <?php foreach ($program_array as $program_name => $program_value) : ?>
                  <li>
                    <a href="<?php echo base_url('program/' . strtolower(str_replace(' ', '-', $program_name))) ?>" style="font-size: 14px;">
                      <?php echo ucwords($program_name) ?>
                    </a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </li>
          <li><a href="<?php echo base_url('radio') ?>"><span>RADIO</span></a></li>
          <li><a href="<?php echo base_url('sinetron') ?>"><span>SINETRON</span></a></li>
          <li><a href="<?php echo base_url('vod') ?>"><span>VOD</span></a></li>
          <li><a href="<?php echo base_url('schedule') ?>"><span>SCHEDULE</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <script>
    var open_close_speed = 400;
    $('li.menu-drop').hover(function() {
      $(this).find('.drop-down').slideDown(open_close_speed);
      $(this).find('.fa').removeClass('fa-chevron-right').addClass('fa-chevron-down');
    }, function (){
      $(this).find('.drop-down').slideUp(open_close_speed);
      $(this).find('.fa').removeClass('fa-chevron-down').addClass('fa-chevron-right');
    });
  </script>
  <div id="page">
    <div class="mobile economy">
      <div class='hopopmenu'></div>
      <div class='hopop'></div>
      <a  name="backtotop"></a> 
      <div class="logonav">
        <div class="menuheaders bataswraptops">
          <a id="left-panel-link" href="#left-panel" class='navbtn opennavbarbtn'>
            <i class="fa fa-navicon" aria-hidden="true"></i>
          </a>
          <a href='#' class='logo'></a>
        </div> 
      </div>
    </div>
    <?php echo $main_content ?>
    <footer id="oktv-footer" class="oktv-footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="footer-top clearfix">
            <div class="footer-logo">
              <img src="https://cdn.okezone.com/m/2016tv/assets/img/logo/okezonetv.png">
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
                <a href="https://www.mncplaymedia.com">
                  <img src="<?php echo cdn_uri('tv/2016/img/logo/play-normal.png') ?>">
                </a>
              </div>
              <div class="mnc2">
                <a href="https://www.mncplaymedia.com">
                  <img src="<?php echo cdn_uri('tv/2016/img/logo/mnc-media-log.png') ?>">
                </a>
              </div>
              <?php $render_ip = explode('.', $_SERVER['SERVER_ADDR']) ?>
              <p>/ rendering in {elapsed_time} seconds [<?php echo $render_ip[3] ?>]</p>
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
        minSlides: 2,
        maxSlides: 2,
        moveSlides: 1,
        slideMargin: 0,
        pager: false,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-angle-right fa-3x"></i>',
        prevText: '<i class="fa fa-angle-left fa-3x"></i>'
      }); 
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){ 
      $('#left-panel-link').panelslider();

      $('#close-panel-bt').click(function() {
          $.panelslider.close();
      });

      $('#left-panel, #right-panel').on('psBeforeOpen psOpen psBeforeClose psClose', function(e) {
          console.log(e.type, e.target.getAttribute('id'));
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".tv-list.video li").click(function(){
        $(".tv-list.video li.active").removeClass("active");
        $(this).addClass("active");
      })
    });
  </script>

  <script id="addJS">jQuery(document).ready(function($) {
    $('#video-gallery').royalSlider({
      arrowsNav: false,
      fadeinLoadedSlide: true,
      controlNavigationSpacing: 0,
      controlNavigation: 'thumbnails',

      thumbs: {
          autoCenter: false,
          fitInViewport: true,
          orientation: 'vertical',
          spacing: 0,
          paddingBottom: 0
      },
      keyboardNavEnabled: true,
      imageScaleMode: 'fill',
      imageAlignCenter:true,
      slidesSpacing: 0,
      loop: false,
      loopRewind: true,
      numImagesToPreload: 3,
      video: {
          autoHideArrows:true,
          autoHideControlNav:false,
          autoHideBlocks: true
      }, 
      autoScaleSlider: true, 
      autoScaleSliderWidth: 960,     
      autoScaleSliderHeight: 450,

      /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
      imgWidth: 640,
      imgHeight: 360
    });
  });
  </script>

  <script src="https://cdnapps.okezone.com/underwood/js/dropkick.min.js"></script>
  <script src="https://cdn.okezone.com/m/2016tv/assets/js/jquery.jscroll.min.js"></script> 
  <script src="https://cdn.okezone.com/m/2016tv/assets/js/main2.js"></script>
</body>
</html>