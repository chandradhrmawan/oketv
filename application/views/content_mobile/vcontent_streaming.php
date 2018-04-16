<div class="content thumb clearfix">
  <div class="content-title clearfix">
    <span>LIVE TV</span>
  </div>
  <div class="content content-slide bx">
    <ul class="bxslider slide-video slide-live">
      <?php foreach ($streaming_channel as $channel => $value) : ?>
        <li class="slide">
          <a href="<?php echo base_url('streaming/' . $channel) ?>">
            <div class="content">
              <div class="slide-live-cover">
                <div class="content live-img-wrap">
                  <img src="<?php echo $value['logo'] ?>" alt="<?php echo $channel ?>">
                </div>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
    <div class="prev-minislider">
      <span id="slider-prev"></span>
    </div>
    <div class="next-minislider">
      <span id="slider-next"></span>
    </div>
  </div>
</div>
