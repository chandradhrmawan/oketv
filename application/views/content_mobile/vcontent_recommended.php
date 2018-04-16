<div class="content thumb clearfix">
  <div class="content-title clearfix">
    <span>RECOMMENDED</span>
    <div class="content-all">
      <a href="" class="clearfix">
        <div class="content-more"></div>
        <p>View all</p>
      </a>
    </div>
  </div>
  <div class="content">
    <ul class="popular-video slide-video slide-play clearfix">
      <?php foreach ($recommended_videos as $video) : ?>
        <li>
          <a href="<?php echo $video['url'] ?>">
            <div class="content">
              <div class="content slide-cover" style="background-image: url('<?php echo $video['image'] ?>');">
                <div class="pop-over">
                  <div class="pop-play"></div>
                </div>
              </div>
              <div class="content slide-title">
                <p><?php echo ucwords(str_replace('-', ' ', $video['title'])) ?></p>
                <span><?php echo date('j', strtotime($video['date_created'])) . ' ' . getIndMonth(date('n', strtotime($video['date_created']))) . ' ' . date('Y', strtotime($video['date_created'])) ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="loadmorecomment">
    <a href="">View All</a>
  </div>
</div>
