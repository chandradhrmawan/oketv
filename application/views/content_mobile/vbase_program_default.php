<?php if (!empty($kongkow)) : ?>
  <section class="content content-tv">
    <div class="container">
      <div class="content">
        <a href="<?php echo base_url() ?>">
          <div class="content">
            <img src="<?php echo $kongkow->banner_ori ?>" class="img-responsive" style="width: 100%;">
          </div>
        </a>
      </div>
    </div>
  </section>
<?php endif ?>
<section class="content content-bottom">
  <div class="container">
    <?php echo $kongkow_list_content ?>
    <?php echo $latest_video_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
