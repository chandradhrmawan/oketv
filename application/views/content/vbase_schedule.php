<section class="content schedule-wrap">
  <div class="container">
    <div class="content schedule-top">
      <div class="jdwl-wrap clearfix">
        <div class="jdwl-logo">
          <ul>
            <li>
              <p><?php echo date('j') . ' ' . strtoupper(getIndMonthShort(date('n'))) . ' ' . date('H:i') ?> WIB</p>
            </li>
            <?php foreach ($streaming as $stream) : ?>
              <?php if (!empty($stream['schedule'])) : ?>
                <li><img src="<?php echo $stream['logo'] ?>"></li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="jdwl-box">
          <div class="jdwl-tab">
            <?php $day_now = date('N') ?>
            <?php for ($i = 0; $i < 7; $i++) : ?>
              <?php if ($day_now > 7) : ?>
                <?php $day_now = 1 ?>
              <?php endif ?>
              <div class="btn-jdwl-tab live">
                <a><?php echo getIndDay($day_now) ?> <?php echo date('j') ?>/<?php echo date('m') ?></a>
              </div>
              <?php $day_now++ ?>
            <?php endfor ?>
          </div>
          <div class="jdwl-time">
            <ul>
              <li class="tab-content live">
                <div class="jdwl-over">
                  <div class="jdwl-jam">
                    <ul class="clearfix">
                      <li><p>00:00 WIB</p></li>
                      <li><p>00:30 WIB</p></li>
                      <li><p>01:00 WIB</p></li>
                      <li><p>01:30 WIB</p></li>
                      <li><p>02:00 WIB</p></li>
                      <li><p>02:30 WIB</p></li>
                      <li><p>03:00 WIB</p></li>
                      <li><p>03:30 WIB</p></li>
                      <li><p>04:00 WIB</p></li>
                      <li><p>04:30 WIB</p></li>
                      <li><p>05:00 WIB</p></li>
                      <li><p>05:30 WIB</p></li>
                      <li><p>06:00 WIB</p></li>
                      <li><p>06:30 WIB</p></li>
                      <li><p>07:00 WIB</p></li>
                      <li><p>07:30 WIB</p></li>
                      <li><p>08:00 WIB</p></li>
                      <li><p>08:30 WIB</p></li>
                      <li><p>09:00 WIB</p></li>
                      <li><p>09:30 WIB</p></li>
                      <li><p>10:00 WIB</p></li>
                      <li><p>10:30 WIB</p></li>
                      <li><p>11:00 WIB</p></li>
                      <li><p>11:30 WIB</p></li>
                      <li><p>12:00 WIB</p></li>
                      <li><p>12:30 WIB</p></li>
                      <li><p>13:00 WIB</p></li>
                      <li><p>13:30 WIB</p></li>
                      <li><p>14:00 WIB</p></li>
                      <li><p>14:30 WIB</p></li>
                      <li><p>15:00 WIB</p></li>
                      <li><p>15:30 WIB</p></li>
                      <li><p>16:00 WIB</p></li>
                      <li><p>16:30 WIB</p></li>
                      <li><p>17:00 WIB</p></li>
                      <li><p>17:30 WIB</p></li>
                      <li><p>18:00 WIB</p></li>
                      <li><p>18:30 WIB</p></li>
                      <li><p>19:00 WIB</p></li>
                      <li><p>19:30 WIB</p></li>
                      <li><p>20:00 WIB</p></li>
                      <li><p>20:30 WIB</p></li>
                      <li><p>21:00 WIB</p></li>
                      <li><p>21:30 WIB</p></li>
                      <li><p>22:00 WIB</p></li>
                      <li><p>22:30 WIB</p></li>
                      <li><p>23:00 WIB</p></li>
                      <li><p>23:30 WIB</p></li>
                    </ul>
                  </div>
                  <div>
                    <?php foreach ($streaming_schedule as $channel_name => $stream) : ?>
                      <div class="jadwal <?php echo $channel_name ?>">
                        <ul class="clearfix">
                          <?php foreach ($stream as $schedule) : ?>
                            <?php if (empty($schedule['acara'])) : ?>
                              <li style="width: <?php echo $schedule['duration'] * 6 ?>px;"></li>
                            <?php else : ?>
                              <li class="live" style="width: <?php echo $schedule['duration'] * 6 ?>px;">
                                <p style="width: <?php echo ($schedule['duration'] * 6) - 10 ?>px;"><?php echo $schedule['acara'] ?></p>
                                <span><?php echo $schedule['time_from'] ?> - <?php echo $schedule['time_to'] ?></span>
                              </li>
                            <?php endif ?>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
                <div class="on-wrap">
                  <div class="on-btn">
                    <div class="on-btn-box">ON NOW</div>
                    <div class="on-btn-tiga"><div class="tiga"></div></div>
                  </div>
                  <div class="on-line-wrap"><div class="on-line"></div></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container container-ads-topmenu" style="position:relative;">
    <?php echo $this->config->item('adv_banner') ?>
    <?php echo $recommended_content ?>
    <?php echo $streaming_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>

<script type="text/javascript">
  $(document).ready(function(){
    schedule_clock();
  });

  // window.setInterval(function(){
  //   schedule_clock();
  // }, 5000);

  function schedule_clock()
  {
    var dt  = new Date();
    var jam = dt.getHours();
    var men = dt.getMinutes();
    var det = dt.getSeconds();

    var f = jam * 360;  //1 jam = 360px
    var g = f - 180;
    var j = men * 6;  //1 menit = 6px
    var total = g + j;  //total bergeser

    $(".jdwl-over").animate({
      left: "-"+total+"px",
    }, 0);
  }
</script>