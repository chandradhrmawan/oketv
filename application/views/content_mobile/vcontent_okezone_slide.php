<div class="content thumb clearfix">
  <div class="content-title clearfix">
    <span>OKEZONE SLIDE</span>
  </div>
  <div class="content">
    <ul class="popular-video slide-video slide-info clearfix">
      <?php foreach ($slides as $slide) : ?>
        <li>
          <a href="<?php echo $slide['url'] ?>">
            <div class="content">
              <div class="content slide-cover" style="background-image: url('<?php echo $slide['image'] ?>');"></div>
              <div class="content slide-title">
                <p><?php echo ucwords(str_replace('-', ' ', $slide['title'])) ?></p>
                <span><?php echo date('j', strtotime($slide['date_created'])) . ' ' . getIndMonth(date('n', strtotime($slide['date_created']))) . ' ' . date('Y', strtotime($slide['date_created'])) ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="loadmorecomment">
    <a href="https://video.okezone.com/tag/okezone-slide">View All</a>
  </div>
</div>
