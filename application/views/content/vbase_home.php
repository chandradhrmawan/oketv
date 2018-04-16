<style>
  .content-slider-image {padding: 10px 10px 0 0;}
  .home-list {background-color: #333;}
  .home-list .bx-wrapper {background: inherit;}
  .home-list .home-mini {height: 126px;}

  .vicon{position: relative; padding-bottom: 56.25%; padding-top: 10px; height: 0; overflow: hidden; margin-bottom: 15px;}
  .vicon iframe, .vicon object, .vicon embed {position: absolute; top: 0; left: 0; width: 100%; height: 100%;
}
</style>
<section class="content content-top">
  <div class="container">
    <div class="content">
      <ul class="home-cover clearfix">
        <li class="home-video" style="background-color: #333;">
          <?php if (isset($player['status']) && $player['status'] == 0) : ?>
            <!-- JWPlayer Start -->
            <div style="position: relative; width: 100%; margin-left: 10px; margin-right: 10px;" id="business-sreen_wrapper">
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
                  file: "<?php echo $player['source'] ?>"
                 }]}],
                 autostart:true,
                 width:"100%",
                 aspectratio:"16:9",
                 androidhls:true,
                 primary:"flash"
              });
              </script>
            </div>
            <!-- JWPlayer End -->
          <?php elseif (isset($kongkowlive) && $kongkowlive['status_live'] == 1) : ?>
            <!-- JWPlayer Start -->
            <div style="position: relative; width: 100%; margin-left: 10px; margin-right: 10px;" id="business-sreen_wrapper">
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
                  file:"http://edge.okeinfo.net/live/dennys.m3u8"
                 }]}],
                 autostart:true,
                 width:"100%",
                 aspectratio:"16:9",
                 androidhls:true,
                 primary:"flash"
              });
              </script>
            </div>
            <!-- JWPlayer End -->
          <?php else : ?>
            <div style="padding: 10px; background-color: #333; width: 100%; height: 100%;">
              <div style="background-image: url(<?php echo cdn_uri('tv/2016/img/715-x-420px.jpg') ?>); width: 100%; height: 100%; background-size: cover; background-position: center;"></div>
            </div>
          <?php endif ?>
        </li>
        <li class="home-list">
          <ul class="home-slider">
            <?php $program_sliders = $this->config->item('program_slider') ?>
            <?php foreach ($program_sliders as $program_slider) : ?>
              <li class="slide">
                <div class="content content-slider-image">
                  <div class="home-mini" style="background-image: url(<?php echo cdn_uri('tv/2016/img/' . $program_slider) ?>); cursor: pointer; border: none;" onclick="go_to_vod(this);"></div>
                </div>
              </li>
            <?php endforeach ?>
          </ul>
          <script>
            function go_to_vod(base)
            {
              $(base).parents('form').submit();
            }
          </script>
          <div class="prev-minislider">
            <span id="slider-up"></span>
          </div>
          <div class="next-minislider">
            <span id="slider-down"></span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container container-ads-topmenu" style="position:relative;">
    <?php echo $this->config->item('adv_banner') ?>
    <?php echo $recommended_content ?>
    <?php echo $streaming_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
    <?php echo $okezone_slide_content ?>
  </div>
</section>

<script>
  $(document).ready(function(){
    $('.home-slider').bxSlider({
      mode: 'vertical',
      slideMargin: 2,
      responsive: true,
      slideWidth: 300,
      touchEnabled: true,
      infiniteLoop: false,
      hideControlOnEnd: true,
      minSlides: 3,
      maxSlides: 3,
      moveSlides: 1,
      slideMargin: 0,
      pager: false,
      nextSelector: '#slider-down',
      prevSelector: '#slider-up',
      nextText: '<i class="fa fa-angle-down fa-2x"></i>',
      prevText: '<i class="fa fa-angle-up fa-2x"></i>'
    }); 
  });
</script>