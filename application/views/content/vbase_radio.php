<style>
  #tv-wrap .tv-list {overflow-y: auto;}
</style>
<section class="content content-tv">
  <div class="container">
    <div class="content">
      <div id="tv-wrap" class="tv-wrap clearfix">
        <div class="tv-live">
          <div class="tv-live-frame">
            <?php foreach ($radio_channel as $key => $channel) : ?>
              <iframe name="someFrame" id="someFrame" width="560" height="315" src="<?php echo base_url() ?>radio/embed/<?php echo $key ?>" frameborder="0" allowfullscreen></iframe>
              <?php break ?>
            <?php endforeach ?>
          </div>
        </div>
        <div class="tv-list-wrap">
          <div class="tv-title">
            <p>Radio</p>
            <span>Showing <?php echo count($radio_channel) ?> radio</span>
          </div>
          <div class="tv-list video">
            <ul>
              <?php $index = 1 ?>
              <?php foreach ($radio_channel as $key => $channel) : ?>
                <li <?php if ($index === 1) echo 'class="active"' ?>>
                  <a class="clearfix" href="<?php echo base_url() ?>radio/embed/<?php echo $key ?>" target="someFrame">
                    <div class="tv-mini-img">
                      <div class="tv-img" style="background-image: url('https://cdn.okezone.com/tv/2016/img/<?php echo $channel['image'] ?>"></div>
                    </div>
                    <div class="tv-mini-title">
                      <p class="title"><?php echo $channel['name'] ?></p>
                      <p class="jam clearfix">
                        <span><?php echo $channel['frequency'] ?></span>
                        <span class="now">&nbsp; - Now Playing'</span>
                      </p>
                    </div>
                  </a>
                </li>
                <?php $index++ ?>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container container-ads-topmenu" style="position:relative;">
    <?php echo $this->config->item('adv_banner') ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
