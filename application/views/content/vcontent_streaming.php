<div class="content thumb">
  <div class="content-title clearfix">
    <span>LIVE TV</span>
  </div>
  <div class="content content-slide bx">
    <ul class="bxslider slide-video slide-live">
      <?php foreach ($streaming_channel as $channel => $value) : ?>
        <li class="slide">
          <a href="<?php echo base_url('streaming/' . $channel) ?>">
            <div class="content">
              <div class="slide-live-cover">
                <div class="content live-img-wrap">
                  <img src="<?php echo $value['logo'] ?>" alt="<?php echo $channel ?>">
                </div>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
    <div class="prev-minislider">
      <span id="slider-prev"></span>
    </div>
    <div class="next-minislider">
      <span id="slider-next"></span>
    </div>
  </div>

  <!--Mobile ELement-->
  <div class="content content-slide m-slide">
    <div class="carousel slide c-slide" id="mcaroslide2">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($streaming_channel as $channel => $value) : ?>
          <div class="item slide-video slide-live <?php if ($is_active) echo 'active' ?>">
            <div class="col-xs-12">
              <a href="<?php echo base_url('streaming/' . $channel) ?>">
                <div class="content">
                  <div class="slide-live-cover">
                    <div class="content live-img-wrap">
                      <img src="<?php echo $value['logo'] ?>" alt="<?php echo $channel ?>">
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#mcaroslide2" data-slide="prev"><i class="glyphicon glyphicon-menu-left"></i></a>
      <a class="right carousel-control" href="#mcaroslide2" data-slide="next"><i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
  </div>
</div>
