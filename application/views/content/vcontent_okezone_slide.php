<div class="content thumb">
  <div class="content-title clearfix">
    <span>Okezone Slide</span>
    <div class="content-all">
      <a href="https://video.okezone.com/tag/okezone-slide" class="clearfix">
        <div class="content-more"></div>
        <p>View all</p>
      </a>
    </div>
  </div>
  <div class="content content-slide">
    <div class="carousel slide c-slide" id="caroslide4">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($slides as $slide) : ?>
          <div class="item slide-video slide-sli <?php if ($is_active) echo 'active' ?>">
            <?php foreach ($slide as $sli) : ?>
              <div class="col-xs-3">
                <a href="<?php echo $sli['url'] ?>">
                  <div class="content">
                    <div class="content slide-cover" style="background-image: url('<?php echo $sli['image'] ?>');"></div>
                    <div class="content slide-title">
                      <p><?php echo ucwords(str_replace('-', ' ', $sli['title'])) ?></p>
                      <span><?php echo date('j', strtotime($sli['date_created'])) . ' ' . getIndMonth(date('n', strtotime($sli['date_created']))) . ' ' . date('Y', strtotime($sli['date_created'])) ?></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#caroslide4" data-slide="prev">
        <i class="glyphicon glyphicon-menu-left"></i>
      </a>
      <a class="right carousel-control" href="#caroslide4" data-slide="next">
        <i class="glyphicon glyphicon-menu-right"></i>
      </a>
    </div>
  </div>
  <!--Mobile ELement-->
  <div class="content content-slide m-slide">
    <div class="carousel slide c-slide" id="mcaroslide4">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($slides_mobile as $slide) : ?>
          <div class="item slide-video slide-sli <?php if ($is_active) echo 'active' ?>">
            <div class="col-xs-12">
              <a href="<?php echo $slide['url'] ?>">
                <div class="content">
                  <div class="content slide-cover" style="background-image: url('<?php echo $slide['image'] ?>');"></div>
                  <div class="content slide-title">
                    <p><?php echo ucwords(str_replace('-', ' ', $slide['title'])) ?></p>
                    <span><?php echo date('j', strtotime($slide['created'])) . ' ' . getIndMonth(date('n', strtotime($slide['created']))) . ' ' . date('Y', strtotime($slide['created'])) ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#mcaroslide4" data-slide="prev">
        <i class="glyphicon glyphicon-menu-left"></i>
      </a>
      <a class="right carousel-control" href="#mcaroslide4" data-slide="next">
        <i class="glyphicon glyphicon-menu-right"></i>
      </a>
    </div>
  </div>
</div>
