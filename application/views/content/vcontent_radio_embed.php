<!DOCTYPE html>
<html lang="id">
  <body style="padding: 0; margin: 0;">
    <div class="streaming-home" style="position: relative;">
      <div class="text-center"><img src="https://cdn.okezone.com/tv/2016/img/equalizer-circle.gif" style="width: 100%; height: 100%"></div>
      <audio autoplay="autoplay" controls="controls" preload="none" style="position: fixed; width: 100%; bottom: 0; left: 0;">
        <source src="<?php echo $radio_channel['url'] ?>" type="audio/mpeg">
        <source src="<?php echo $radio_channel['url'] ?>" type="audio/mp4">
        <source src="<?php echo $radio_channel['url'] ?>" type="audio/ogg">
      </audio>
    </div>
  </body>
</html>
