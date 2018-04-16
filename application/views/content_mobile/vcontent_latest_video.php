<?php if (!empty($latest_videos)) : ?>
  <div class="content thumb">
    <div class="content-title clearfix">
      <span>LATEST VIDEO</span>
    </div>
    <div class="content">
      <ul class="popular-video slide-video slide-play clearfix">
        <?php foreach ($latest_videos as $video) : ?>
          <li>
            <a href="<?php echo $video['url'] ?>">
              <div class="content">
                <div class="content slide-cover" style="background-image: url('<?php echo $video['image'] ?>');"><div class="pop-over"><div class="pop-play"></div></div></div>
                <div class="content slide-title">
                  <p><?php echo $video['title'] ?></p>
                  <span><?php echo date('j', strtotime($video['date_created'])) . ' ' . getIndMonth(date('n', strtotime($video['date_created']))) . ' ' . date('Y', strtotime($video['date_created'])) ?></span>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
      <div class="loadmorecomment">
        <a href="http://video.okezone.com">View All</a>
      </div>
    </div>
  </div>
<?php endif ?>