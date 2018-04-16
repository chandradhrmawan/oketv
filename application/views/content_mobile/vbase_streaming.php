<style>
.vicon{
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 10px; height: 0; overflow: hidden;
  margin-bottom: 15px;
}

.vicon iframe,
.vicon object,
.vicon video,
.vicon source,
.vicon #videok,
.vicon embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<section class="content content-tv">
  <div class="container">
    <div class="content video-main">
      <div  class="page wrapper"> 
        <div class="row clearfix">
          <div class="col span_6 fwImage">
            <?php if ($live_streaming_type === 'videojs') : ?>
              <!-- Video JS Start -->
              <div class="vicon">
                <video id="videok" class="video-js vjs-default-skin" controls preload="none" xsposter="https://jpsierens.com/wp-content/uploads/2015/11/JavaScript-Logo.jpg" poster="https://www.wemoconnect.com/wp-content/uploads/2016/03/javascript-1.png" controls eload="auto">
                  <source
                   src="<?php echo $live_streaming_url ?>"
                   type="application/x-mpegURL"
                   label="OK1" quality="hight" res="200" target="desktop">
                  <p class="vjs-no-js"> <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                </video>
              </div>
              <link rel="stylesheet" type="text/css" href="https://cdn.okezone.com/underwood/css/videojs/videojs.min.css"/>
              <link rel="stylesheet" type="text/css" href="https://cdn.okezone.com/underwood/css/videojs/ima/videojs.ima.css"/>
              <link rel="stylesheet" type="text/css" href="https://cdn.okezone.com/underwood/css/videojs/resolution-switcher/switcher.css"/>
              <script type="text/javascript" src="httpss://cdn.okezone.com/www/2016/js/jquery.min.js"></script>
              <script type="text/javascript" src="https://cdn.okezone.com/underwood/js/videojs/videojs.min.js"></script>
              <script type="text/javascript" src="https://cdn.okezone.com/underwood/js/videojs/ima/videojs.ima.js"></script>
              <script type="text/javascript" src="https://cdn.okezone.com/underwood/js/videojs/resolution-switcher/switcher.js"></script>
              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/3.0.2/videojs-contrib-hls.js"></script>
              <script type="text/javascript">var osidasd=videojs('videok',{controls:true,volume:0,plugins:{videoJsResolutionSwitcher:{default:'low'}}}); osidasd.play();</script>
              <!-- Video JS End -->
            <?php elseif ($live_streaming_type === 'jwplayer') : ?>
              <!-- JWPlayer Start -->
              <div class="vid-stream" id="live">
                <div style="position: relative; width: 100%;" id="business-sreen_wrapper">
                  <object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/12/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="business-sreen" name="business-sreen" class="jwswf" style="position: absolute; left: 0px;">
                    <param name="allowfullscreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <param name="seamlesstabbing" value="true">
                    <param name="wmode" value="opaque">
                  </object>
                </div>
                <div>
                  <script src="https://content.jwplatform.com/libraries/i08xVRRN.js"></script>
                  <script type="text/javascript">jwplayer.key="ypdL3Acgwp4Uh2/LDE9dYh3W/EPwDMuA2yid4ytssfI=";</script>
                  <script type="text/javascript">
                  jwplayer("business-sreen").setup({
                    playlist:[{sources:[{
                      file:"<?php echo $live_streaming_url ?>"
                     }]}],
                     autostart:true,
                     width:"100%",
                     aspectratio:"16:9",
                     androidhls:true,
                     primary:"flash"
                  });
                  </script>
                </div>
              </div>
              <!-- JWPlayer End -->
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container">
    <?php echo $streaming_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
<script type="text/javascript">
  jwplayer("business-sreen").setup({
    file: "<?php echo $live_streaming_url ?>",
    image: "",
    autostart: true,
    width: "100%",
    aspectratio: "16:9",
    androidhls: true,
    primary: "html5"
  });
</script>
