<section class="content content-tv">
  <div class="container">
    <div class="content clearfix">
      <div class="tv-detail-left">
        <div id="tv-detail" class="tv-detail clearfix">
          <div class="tv-detail-play">
            <div class="tv-detail-frame">
              <iframe name="someFrame" id="someFrame" width="560" height="315" src="<?php echo $video_streaming['watch'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div id="tv-listdetail" class="mobile">
            <div class="tv-list">
              <ul>
                <li>
                  <a class="clearfix" href="">
                    <div class="tv-mini-img">
                      <div class="tv-img" style="background-image: url('https://cdn.okezone.com/tv/2016/img/cover.jpg');"></div>
                    </div>
                    <div class="tv-mini-title">
                      <p class="title">Drama Korea: Descendants of The Sun on Mars</p>
                      <p class="jam view clearfix"><span class="tgl">13 November 2016</span><span>12300 plays</span></p>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="clearfix" href="">
                    <div class="tv-mini-img">
                      <div class="tv-img" style="background-image: url('https://cdn.okezone.com/tv/2016/img/recom1.jpg');"></div>
                    </div>
                    <div class="tv-mini-title">
                      <p class="title">Drama Korea: Descendants</p>
                      <p class="jam view clearfix"><span class="tgl">13 November 2016</span><span>12300 plays</span></p>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="clearfix" href="">
                    <div class="tv-mini-img">
                      <div class="tv-img" style="background-image: url('https://cdn.okezone.com/tv/2016/img/recom2.jpg');"></div>
                    </div>
                    <div class="tv-mini-title">
                      <p class="title">Drama Korea: Descendants</p>
                      <p class="jam view clearfix"><span class="tgl">13 November 2016</span><span>12300 plays</span></p>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="btn-more">
                <a href="">
                  <div class="btn-more-in">
                    <p>Show More <i class="fa fa-angle-down"></i></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-ads">
          <img src="https://cdn.okezone.com/tv/2016/img/ads.jpg">
        </div>
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
                      <div class="col-xs-4">
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
                      <div class="col-xs-4">
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
        <div class="content thumb">  
          <div class="content-title clearfix">
            <span>POPULAR VIDEO</span>
            <div class="content-all">
              <a href="http://video.okezone.com/" class="clearfix">
                <div class="content-more"></div>
                <p>View all</p>
              </a>
            </div>
          </div>
          <div class="content">
            <ul class="popular-video clearfix">
              <?php foreach ($popular_videos as $video) : ?>
                <li>
                  <a href="<?php echo $video['url'] ?>">
                    <div class="content">
                      <div class="content popular-cover" style="background-image: url('<?php echo $video['image'] ?>');">
                        <div class="pop-over">
                          <div class="pop-play"></div>
                        </div>
                      </div>
                      <div class="content popular-title">
                        <p><?php echo $video['title'] ?></p>
                        <span><?php echo date('d', strtotime($video['date_created'])) . ' ' . getIndMonth(date('N', strtotime($video['date_created']))) . ' ' . date('Y', strtotime($video['date_created'])) ?></span>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
      <div id="tv-listdetail" class="tv-detail-right">
        <div class="tv-list">
          <ul>
            <?php foreach ($slide_videos as $video) : ?>
              <li <?php if ($video_streaming['video_id'] === $video['video_id']) echo 'class="active"' ?>>
                <a class="clearfix" href="<?php echo $video['watch'] ?>" target="someFrame">
                  <div class="tv-mini-img">
                    <div class="tv-img" style="background-image: url('<?php echo $video['image'] ?>');"></div>
                  </div>
                  <div class="tv-mini-title">
                    <p class="title"><?php echo $video['title'] ?></p>
                    <p class="jam view clearfix">
                      <span><?php echo date('j', strtotime($video['date_created'])) . ' ' . getIndMonth(date('n', strtotime($video['date_created']))) . ' ' . date('Y H:i', strtotime($video['date_created'])) ?> WIB</span>
                    </p>
                  </div>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
          <div class="btn-more"><a href=""><div class="btn-more-in"><p>Show More <i class="fa fa-angle-down"></i></p></div></a></div>
        </div>
        <div class="ads">
          <!-- <img src="<?php echo cdn_uri('tv/2016/img/ads-box.jpg') ?>"> -->
          <div class="advmob">
            <script type='text/javascript'>
              <!--// <![CDATA[
                OA_show('TV-Mobile-Center1');
              // ]]> -->
            </script>
          </div>
          <div class="advmob">
            <script type='text/javascript'>
              <!--// <![CDATA[
                OA_show('TV-Mobile-Center2');
              // ]]> -->
            </script>
          </div>
          <div class="adv2 p2">
            <script type='text/javascript'>
              <!--// <![CDATA[
                OA_show('TopRight1');
              // ]]> -->
            </script>
          </div>
          <div class="adv2 p2">
            <script type='text/javascript'>
              <!--// <![CDATA[
                OA_show('TopRight2');
              // ]]> -->
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
