<section class="content schedule-wrap">
  <div class="container">
    <div class="content jadwal-box">
      <div class="content clearfix">
        <select class="jadwal-btn-left">
          <?php for ($i = 1; $i <= 7; $i++) : ?>
            <option value="<?php echo $i ?>" <?php if (empty($is_selected) && $i == date('N')) echo 'selected' ?>><?php echo getIndDay($i) ?></option>
          <?php endfor ?>
        </select>
        <select id="jadwal-select-channel" class="jadwal-btn-right" onchange="show_channel_schedule();">
          <?php foreach ($streaming as $channel => $stream) : ?>
            <?php if (!empty($stream['schedule'])) : ?>
              <option value="<?php echo $channel ?>"><?php echo strtoupper(str_replace('_', ' ', $channel)) ?></option>
            <?php endif ?>
          <?php endforeach ?>
        </select>
      </div>
      <div class="content jadwal-table">
        <?php foreach ($streaming_schedule as $channel_name => $stream) : ?>
          <table id="channel-schedule-<?php echo $channel_name ?>" class="channel-schedule" style="display: none;">
            <tr><th>JAM (WIB)</th><th>PROGRAM</th></tr>
            <?php foreach ($stream as $schedule) : ?>
              <?php if (!empty($schedule['acara'])) : ?>
                <tr><td><?php echo $schedule['time_from'] ?> - <?php echo $schedule['time_to'] ?></td><td><?php echo $schedule['acara'] ?></td></tr>
              <?php endif ?>
            <?php endforeach ?>                        
          </table>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container">
    <?php echo $recommended_content ?>
    <?php echo $streaming_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>
<script>
  function show_channel_schedule()
  {
    var channel_selected = $('#jadwal-select-channel').val();
    $('.channel-schedule').hide();
    $('#channel-schedule-' + channel_selected).show();
  }

  show_channel_schedule();
</script>