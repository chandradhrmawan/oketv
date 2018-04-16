<div class="content thumb clearfix">
  <div class="content-title clearfix">
    <span>INFOGRAPHIC</span>
  </div>
  <div class="content">
    <ul class="popular-video slide-video slide-info clearfix">
      <?php foreach ($infografis as $infograf) : ?>
        <li>
          <a href="<?php echo $infograf['url'] ?>">
            <div class="content">
              <div class="content slide-cover" style="background-image: url('<?php echo $infograf['image'] ?>');"></div>
              <div class="content slide-title">
                <p><?php echo ucwords(str_replace('-', ' ', $infograf['title'])) ?></p>
                <span><?php echo date('j', strtotime($infograf['created'])) . ' ' . getIndMonth(date('n', strtotime($infograf['created']))) . ' ' . date('Y', strtotime($infograf['created'])) ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="loadmorecomment">
    <a href="http://news.okezone.com/infografis">View All</a>
  </div>
</div>
