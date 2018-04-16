<?php if (!empty($latest_videos)) : ?>
  <div class="content thumb">
    <div class="content-title clearfix">
      <span>LATEST VIDEO</span>
      <div class="content-all">
        <a href="http://video.okezone.com" class="clearfix">
          <div class="content-more"></div>
          <p>View all</p>
        </a>
      </div>
    </div>
    <div class="content content-slide">
      <div class="carousel slide c-slide" id="caroslide1">
        <div class="carousel-inner">
          <?php $is_active = true ?>
          <?php foreach ($latest_videos as $video) : ?>
            <div class="item slide-video slide-play <?php if ($is_active) echo 'active' ?>">
              <?php foreach ($video as $vid) : ?>
                <div class="col-xs-3">
                  <a href="<?php echo $vid['url'] ?>">
                    <div class="content">
                      <div class="content slide-cover" style="background-image: url('<?php echo $vid['image'] ?>');">
                        <div class="pop-over">
                          <div class="pop-play"></div>
                        </div>
                      </div>
                      <div class="content slide-title">
                        <p><?php echo $vid['title'] ?></p>
                        <span><?php echo date('j', strtotime($vid['date_created'])) . ' ' . getIndMonth(date('n', strtotime($vid['date_created']))) . ' ' . date('Y', strtotime($vid['date_created'])) ?></span>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>
            <?php $is_active = false ?>
          <?php endforeach ?>
        </div>
        <a class="left carousel-control" href="#caroslide1" data-slide="prev">
          <i class="glyphicon glyphicon-menu-left"></i>
        </a>
        <a class="right carousel-control" href="#caroslide1" data-slide="next">
          <i class="glyphicon glyphicon-menu-right"></i>
        </a>
      </div>
    </div>

    <!--Mobile ELement-->
    <div class="content content-slide m-slide">
      <div class="carousel slide c-slide" id="mcaroslide1">
        <div class="carousel-inner">
          <?php $is_active = true ?>
          <?php foreach ($latest_videos_mobile as $video) : ?>
            <div class="item slide-video slide-play <?php if ($is_active) echo 'active' ?>">
              <div class="col-xs-12">
                <a href="<?php echo $video['url'] ?>">
                  <div class="content">
                    <div class="content slide-cover" style="background-image: url('<?php echo $video['image'] ?>');">
                      <div class="pop-over">
                        <div class="pop-play"></div>
                      </div>
                    </div>
                    <div class="content slide-title">
                      <p><?php echo $video['title'] ?></p>
                      <span><?php echo date('j', strtotime($video['date_created'])) . ' ' . getIndMonth(date('n', strtotime($video['date_created']))) . ' ' . date('Y', strtotime($video['date_created'])) ?></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <?php $is_active = false ?>
          <?php endforeach ?>
        </div>
        <a class="left carousel-control" href="#mcaroslide1" data-slide="prev"><i class="glyphicon glyphicon-menu-left"></i></a>
        <a class="right carousel-control" href="#mcaroslide1" data-slide="next"><i class="glyphicon glyphicon-menu-right"></i></a>
      </div>
    </div>
  </div>
<?php endif ?>