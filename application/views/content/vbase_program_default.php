<?php if (!empty($kongkow)) : ?>
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
                      <div class="item slide-video slide-info active">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url() ?>">
                            <div class="content">
                              <img src="<?php echo $kongkow->banner_ori ?>" class="img-responsive" style="width: 100%;">
                            </div>
                          </a>
                        </div>                
                      </div>
                      <?php /*
                      <div class="item slide-video slide-info ">
                        <div class="col-xs-12">
                          <a href="#">
                            <div class="content">
                              <img src="https://cdn.okezone.com//tv/2016/img/dunia-terbalik-banner.jpg" class="img-responsive">
                            </div>
                          </a>
                        </div>
                      </div>
                      */ ?>
                    </div>
                    <?php /*
                    <a class="left carousel-control" href="#caroslide3" data-slide="prev">
                      <i class="glyphicon glyphicon-menu-left"></i>
                    </a>
                    <a class="right carousel-control" href="#caroslide3" data-slide="next">
                      <i class="glyphicon glyphicon-menu-right"></i>
                    </a>
                    */ ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>
<section class="content content-bottom">
  <div class="container container-ads-topmenu" style="position:relative;">
    <?php echo $this->config->item('adv_banner') ?>
    <?php echo $kongkow_list_content ?>
    <?php echo $latest_video_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
