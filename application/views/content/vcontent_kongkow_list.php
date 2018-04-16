<div class="content thumb">
  <div class="content-title clearfix">
    <span>OKEZONE TV PROGRAMME</span>
    <div class="content-all">
      <a href="http://warungkopi.okezone.com" class="clearfix">
        <div class="content-more"></div>
        <p>View all</p>
      </a>
    </div>
  </div>
  <div class="content content-slide">
    <div class="carousel slide c-slide" id="caroslide9">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($kongkow as $kongko) : ?>
          <div class="item slide-video slide-play <?php if ($is_active) echo 'active' ?>">
            <?php foreach ($kongko as $kong) : ?>
              <div class="col-xs-3">
                <a href="<?php echo $kong['url'] ?>">
                  <div class="content">
                    <div class="content slide-cover" style="background-image: url('<?php echo $kong['image'] ?>');"></div>
                    <div class="content slide-title">
                      <p><?php echo ucwords(str_replace('-', ' ', $kong['title'])) ?></p>
                      <span><?php echo date('j', strtotime($kong['created_at'])) . ' ' . getIndMonth(date('n', strtotime($kong['created_at']))) . ' ' . date('Y', strtotime($kong['created_at'])) ?></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#caroslide9" data-slide="prev">
        <i class="glyphicon glyphicon-menu-left"></i>
      </a>
      <a class="right carousel-control" href="#caroslide9" data-slide="next">
        <i class="glyphicon glyphicon-menu-right"></i>
      </a>
    </div>
  </div>

  <!--Mobile ELement-->
  <div class="content content-slide m-slide">
    <div class="carousel slide c-slide" id="mcaroslide9">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($kongkow_mobile as $kong) : ?>
          <div class="item <?php if ($is_active) echo 'active' ?> slide-video slide-play">
            <div class="col-xs-12">
              <a href="#">
                <div class="content">
                  <div class="content slide-cover" style="background-image: url('<?php echo $kong['image'] ?>') ?>');"><div class="pop-over"><div class="pop-play"></div></div></div>
                  <div class="content slide-title">
                    <p><?php echo ucwords(str_replace('-', ' ', $kong['title'])) ?></p>
                    <span><?php echo date('j', strtotime($kong['created_at'])) . ' ' . getIndMonth(date('n', strtotime($kong['created_at']))) . ' ' . date('Y', strtotime($kong['created_at'])) ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#mcaroslide9" data-slide="prev">
        <i class="glyphicon glyphicon-menu-left"></i>
      </a>
      <a class="right carousel-control" href="#mcaroslide9" data-slide="next">
        <i class="glyphicon glyphicon-menu-right"></i>
      </a>
    </div>
  </div>
</div>
