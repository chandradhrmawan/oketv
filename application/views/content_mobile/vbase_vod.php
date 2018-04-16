<section class="content content-tv">
  <div class="container">
    <div class="content">
      <div id="tv-wrap" class="tv-wrap clearfix">
        <div class="tv-live">
          <div class="tv-live-frame">
            <iframe name="someFrame" id="someFrame" width="560" height="315" src="<?php echo $video_streaming['watch'] ?>" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="tv-list-wrap">
          <div class="tv-title">
            <p>VOD</p>
            <span>Showing <?php echo count($slide_videos) ?> videos</span>
          </div>
          <div class="tv-list video">
            <ul>
              <?php foreach ($slide_videos as $video) : ?>
                <li <?php if ($video_streaming['video_id'] === $video['video_id']) echo 'class="active"' ?>>
                  <a class="clearfix" href="<?php echo $video['watch'] ?>" target="someFrame">
                    <div class="tv-mini-img">
                      <div class="tv-img" style="background-image: url('<?php echo $video['image'] ?>');"></div>
                    </div>
                    <div class="tv-mini-title">
                      <p class="title"><?php echo $video['title'] ?></p>
                      <p class="jam clearfix">
                        <span><?php echo date('j', strtotime($video['date_created'])) . ' ' . getIndMonth(date('n', strtotime($video['date_created']))) . ' ' . date('Y H:i', strtotime($video['date_created'])) ?> WIB</span>
                      </p>
                      <p class="jam clearfix">
                        <span class="now">Now Playing</span>
                      </p>
                    </div>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container">
    <div class="banner-ads">
      <img src="<?php echo cdn_uri('tv/2016/img/ads.jpg') ?>">
    </div>
    <?php echo $latest_video_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
