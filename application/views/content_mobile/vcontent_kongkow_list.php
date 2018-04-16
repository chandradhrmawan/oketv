<?php if (!empty($kongkow)) : ?>
  <div class="content thumb">
    <div class="content-title clearfix">
      <span>OKEZONE TV PROGRAMME</span>
    </div>
    <div class="content">
      <ul class="popular-video slide-video slide-play clearfix">
        <?php foreach ($kongkow as $kong) : ?>
          <li>
            <a href="<?php echo $kong['url'] ?>">
              <div class="content">
                <div class="content slide-cover" style="background-image: url('<?php echo $kong['image'] ?>');"><div class="pop-over"><div class="pop-play"></div></div></div>
                <div class="content slide-title">
                  <p><?php echo $kong['title'] ?></p>
                  <span><?php echo date('j', strtotime($kong['created_at'])) . ' ' . getIndMonth(date('n', strtotime($kong['created_at']))) . ' ' . date('Y', strtotime($kong['created_at'])) ?></span>
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