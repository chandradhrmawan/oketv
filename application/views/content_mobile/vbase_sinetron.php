<link rel="stylesheet" type="text/css" href="https://cdnapps.okezone.com/underwood/assets/plugins/swiper/css/swiper.min.css"/>
<script type="text/javascript" src="https://cdnapps.okezone.com/underwood/assets/plugins/swiper/js/swiper.min.js"></script>
<style>
    .videoheadline{position: relative;    margin-top: 8px;  }
    .videoheadline img{width:100%}
    .videoheadline .live{position: absolute; font-size: 12px;top:10px; right: 10px; padding:3px 10px; border-radius: 5px; background: rgba(201,46,84,0.9); color: #fff;} 
    .tv{font-family:  'open_sansregular'}
    .swiper-containers{margin:0px 15px; overflow: hidden}
    .swiper-slide.live {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-containers{position: relative;}
    .swiper-containers .swiper-button-prev-live {border:1px solid #ccc; position: absolute; top:0px; bottom: 0px; left:0px; right:auto; margin:auto;z-index: 9; background:#fff; color: #999; height: 30px;width: 20px;padding-right: 3px;}
    .swiper-containers .swiper-button-next-live{border:1px solid #ccc;position: absolute; top:0px; bottom: 0px; right:0px; left:auto; margin:auto;z-index: 9; background:#fff; color: #999; height: 30px;width: 20px;padding-left: 1px;}
    .swiper-containers .swiper-button-next-live i,
    .swiper-containers .swiper-button-prev-live i{font-size: 28px; text-align: center; width: 100%;    position: absolute;bottom: 0px; margin: auto; top: 0px; height: 30px;}
    .swiper-slide.live .live{position: absolute; font-size: 10px;top:5px; right: 5px; padding:2px 7px; border-radius: 5px; background: rgba(201,46,84,0.9); color: #fff;}
    .sliders{padding:15px;}
    .swiper-container {width: 100%; margin-left: auto;margin-right: auto;z-index: 1;}
    .swiper-slide {background-size: cover;background-position: center;}
    .gallery-top {width: 100%;}
    .gallery-thumbs {height: 120px;box-sizing: border-box;padding:   0;position: relative;}
    .gallery-thumbs .swiper-slide {width: 50%;height: 100%; margin-right: 0px !important;background-position: top center;}
    .gallery-thumbs .swiper-slide-active {opacity: 1;}
    .swiper-button-prev.swiper-button-white, .swiper-container-rtl .swiper-button-next.swiper-button-white{background:none;}
    .swiper-btn-prev{position: absolute; top:0px; bottom: 0px; left:0px; right:auto; margin:auto;z-index: 9; background:#fff; color: #999; height: 40px;width: 20px;padding-right: 3px;}
    .swiper-btn-next{position: absolute; top:0px; bottom: 0px; right:0px; left:auto; margin:auto;z-index: 9; background:#fff; color: #999; height: 40px;width: 20px;padding-left: 1px;}
    .swiper-btn-prev i,.swiper-btn-next i{font-size: 28px; text-align: center; width: 100%;    position: absolute;bottom: 0px; margin: auto; top: 0px; height: 30px;}
    .titl{position: relative; height: 30px; margin-top:10px; margin: 10px 15px 0px;font-size: 12px;}
    .titlspan{border-left:5px solid #8c2777; padding-left:4px;  text-transform: uppercase; }
    .titlb{position: absolute; right: 0px; margin: auto;  height: 30px; font-weight: normal; }
    .titlb i{color:#8c2777; font-size: 18px; position: absolute; top:0px; left: -20px; }
    .titla{color: #222}
    .boxvideo{position: relative; margin:10px 15px;}
    .boxvideo ul{margin:0px; padding: 0px;}
    .boxvideo ul li{list-style: none; float: left;width:50%; position: relative; } 
    .boxvideo ul li.left{border-right: 3px solid white;} 
    .boxvideo ul li.right{border-left: 3px solid white;} 
    .boxvideo ul li .bvideo{display: inline-block;  width:100%; height: 150px;position: relative}
    .boxvideo ul li .bvideo i{background: url('https://cdn.okezone.com/underwood/img/tv/video-medium1x.png'); background-position: center; background-size: 100%; height: 60px; width: 60px; position: absolute; margin:auto; top:0px; bottom: 0px; left:0px; right: 0px; color: #fff;}
    .boxvideo ul li .bvideo .bg{background: rgba(0,0,0,0.3); position: absolute; top:0px; bottom: 0px; left:0px; right: 0px; margin:auto}
    .boxvideo ul li .titles{white-space: nowrap;overflow: hidden; text-overflow: ellipsis; width:95%; font-size: 12px; margin:10px 0px; font-family: "open_sansbold"}
    .boxvideo ul li .titles span.date{font-family: 'open_sansregular'; display: block; margin:5px 0px;}
    .boxvideo .viewallbtn{height: 40px; width:100%; line-height: 40px; display: block; border:1px solid #ddd; color: #999; width:100%; text-align: center; }
    .boxvideo .viewallbtn:hover{background:#999; color: #fff;}
    .swiper-slide.live{width: 50%}
    .swiper-slide.live img{width:100%}
</style>
<section class="content content-top">
  <div class="container">
    <div class="content video-main">
      <div class="sliders">
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper"> 
            <div class="swiper-slide videoheadline"><img src="http://design.jabluk.net/okezone2017/OKEZONE-TV-2017/mobile/mobile-dunia-terbalik.jpg">
              <div class="live"><i aria-hidden="true" class="fa fa-play-circle"></i> <span>LIVE</span></div>
            </div>
            <div class="swiper-slide videoheadline"><img src="http://design.jabluk.net/okezone2017/OKEZONE-TV-2017/mobile/mobile-kantini.jpg">
              <div class="live"><i aria-hidden="true" class="fa fa-play-circle"></i> <span>LIVE</span></div>
            </div> 
          </div>
          <!-- Add Arrows -->
        </div>
        <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide " style="background-image:url(http://design.jabluk.net/okezone2017/OKEZONE-TV-2017/mobile/mobile-dunia-terbalik.jpg)"></div>
            <div class="swiper-slide " style="background-image:url(http://design.jabluk.net/okezone2017/OKEZONE-TV-2017/mobile/mobile-kantini.jpg)"></div>   
          </div>
          <div class="swiper-btn-next swiper-button-next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
          <div class="swiper-btn-prev swiper-button-prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
        </div>
      </div>  
    </div>
  </div>
</section>
<section class="content content-bottom">
  <div class="container">
    <?php echo $latest_video_content ?>
    <?php echo $infographic_content ?>
    <?php echo $popular_video_content ?>
  </div>
</section>

<script type="text/javascript">
var galleryTop = new Swiper('.gallery-top', {
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev' 
});

var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 2, 
  slidesPerView: 'auto',
  touchRatio: 1,
  slideToClickedSlide: true 
});

galleryTop.params.control    = galleryThumbs;
galleryThumbs.params.control = galleryTop;

$(document).ready(function() {
  //sosmed horizontal
  $('.swiper-wrapper').on('click', '.swiper-slide', function() { 
    $(".swiper-slide").removeClass('.swiper-slide-active');   
    $(".swiper-slide").removeClass('.swiper-slide-next');
    $(".swiper-slide").removeClass('.swiper-slide-prev');
    $(this).addclass('.swiper-slide-active');
  });
});
   
var swiper = new Swiper('.swiper-containers', {
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next-live',
  prevButton: '.swiper-button-prev-live',
  slidesPerView: 2,
  paginationClickable: true,
  spaceBetween: 15,
  loop: true
});
</script>