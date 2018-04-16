<section class="content content-tv">
  <div class="container">
    <div class="content video-main">
      <div  class="page wrapper"> 
        <div class="row clearfix">
          <div class="col span_6 fwImage">
            <div class="banner-program">
              <div class="content content-slide">
                <div class="carousel slide c-slide" id="caroslide3">
                  <div class="carousel-inner">
                    <?php $is_active = true ?>
                    <?php foreach ($sinetrons as $sinetron) : ?>
                      <div class="item slide-video slide-info <?php if ($is_active) echo 'active'; $is_active = false; ?>">
                        <div class="col-xs-12">
                          <a href="#">
                            <div class="content">
                              <img src="<?php echo $sinetron['image'] ?>" class="img-responsive">
                            </div>
                          </a>
                          <?php foreach ($sinetron['schedule'] as $schedule) : ?>
                            <?php if (strtotime($schedule[0]) <= strtotime('now') && strtotime($schedule[1]) > strtotime('now')) : ?>
                              <div class="livenow"><span class="glyphicon glyphicon-play redcircle" aria-hidden="true"></span>LIVE</div>
                            <?php endif ?>
                          <?php endforeach ?>
                        </div>
                      </div>
                    <?php endforeach ?>
                  </div>
                  <a class="left carousel-control" href="#caroslide3" data-slide="prev">
                    <i class="glyphicon glyphicon-menu-left"></i>
                  </a>
                  <a class="right carousel-control" href="#caroslide3" data-slide="next">
                    <i class="glyphicon glyphicon-menu-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container container-ads-topmenu" style="position:relative;">
    <?php echo $this->config->item('adv_banner') ?>
    <?php echo $latest_video_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
