<div class="content thumb">
  <div class="content-title clearfix">
    <span>INFOGRAPHIC</span>
    <div class="content-all">
      <a href="http://news.okezone.com/infografis" class="clearfix">
        <div class="content-more"></div>
        <p>View all</p>
      </a>
    </div>
  </div>
  <div class="content content-slide">
    <div class="carousel slide c-slide" id="caroslide3">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($infografis as $infograf) : ?>
          <div class="item slide-video slide-info <?php if ($is_active) echo 'active' ?>">
            <?php foreach ($infograf as $info) : ?>
              <div class="col-xs-3">
                <a href="<?php echo $info['url'] ?>">
                  <div class="content">
                    <div class="content slide-cover" style="background-image: url('<?php echo $info['image'] ?>');"></div>
                    <div class="content slide-title">
                      <p><?php echo ucwords(str_replace('-', ' ', $info['title'])) ?></p>
                      <span><?php echo date('j', strtotime($info['created'])) . ' ' . getIndMonth(date('n', strtotime($info['created']))) . ' ' . date('Y', strtotime($info['created'])) ?></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
          <?php $is_active = false ?>
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
  <!--Mobile ELement-->
  <div class="content content-slide m-slide">
    <div class="carousel slide c-slide" id="mcaroslide3">
      <div class="carousel-inner">
        <?php $is_active = true ?>
        <?php foreach ($infografis_mobile as $infograf) : ?>
          <div class="item slide-video slide-info <?php if ($is_active) echo 'active' ?>">
            <div class="col-xs-12">
              <a href="<?php echo $infograf['url'] ?>">
                <div class="content">
                  <div class="content slide-cover" style="background-image: url('<?php echo $infograf['image'] ?>');"></div>
                  <div class="content slide-title">
                    <p><?php echo ucwords(str_replace('-', ' ', $infograf['title'])) ?></p>
                    <span><?php echo date('j', strtotime($infograf['created'])) . ' ' . getIndMonth(date('n', strtotime($infograf['created']))) . ' ' . date('Y', strtotime($infograf['created'])) ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php $is_active = false ?>
        <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#mcaroslide3" data-slide="prev">
        <i class="glyphicon glyphicon-menu-left"></i>
      </a>
      <a class="right carousel-control" href="#mcaroslide3" data-slide="next">
        <i class="glyphicon glyphicon-menu-right"></i>
      </a>
    </div>
  </div>
</div>
