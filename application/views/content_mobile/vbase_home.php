<section class="content content-top">
  <div class="container">
    <div class="content video-main">
      <ul class="home-cover clearfix">
        <li class="home-video">
          <div style="width: 100%; height: 260px;">
            <div style="background-image: url(<?php echo cdn_uri('tv/2016/img/715-x-420px.jpg') ?>); width: 100%; height: 260px; background-size: cover; background-position: center;"></div>
          </div>
          <?php /*
          <!-- JWPlayer in -->
          <div id="business-screen"></div>
          <script type="text/javascript">
          jwplayer("business-screen").setup({
            file:"http://edge.okeinfo.net/stream-epl/rcti/playlist.m3u8",
            image:"",
            autostart:true,
            width:"100%",
            aspectratio:"16:9",
            androidhls:true,
            primary:'html5',
          });</script>
          </li>
          */ ?>
          <li class="home-list">
            <ul class="home-slider">
              <?php $program_sliders = $this->config->item('program_slider') ?>
              <?php foreach ($program_sliders as $program_slider) : ?>
                <li class="slide">
                  <div class="content">
                    <div class="home-mini" style="background-image: url('<?php echo cdn_uri('tv/2016/img/' . $program_slider) ?>'); cursor: pointer;"></div>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
            <div class="prev-minislider">
            <span id="slider-prev2"></span>
          </div>
          <div class="next-minislider">
            <span id="slider-next2"></span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container">
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
      slideMargin: 2,
      responsive: true,
      slideWidth: 350,
      touchEnabled: true,
      infiniteLoop: true,
      minSlides: 2,
      maxSlides: 2,
      moveSlides: 1,
      slideMargin: 0,
      pager: false,
      nextSelector: '#slider-next2',
      prevSelector: '#slider-prev2',
      nextText: '<i class="fa fa-angle-right fa-2x"></i>',
      prevText: '<i class="fa fa-angle-left fa-2x"></i>'
    }); 
  });
</script>
