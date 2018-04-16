<?php

function parseDateTime($date)
{
  $int = preg_match("/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/",$date,$match);
  if (!$int) return false;
  $data['year'] = $match[1];
  $data['month']  = $match[2];
  $data['day']  = $match[3];
  $data['hour'] = $match[4];
  $data['minute'] = $match[5];
  $data['second'] = $match[6];
  $data['day_of_week'] = date("N",mktime(0,0,0,intval($data['month']),intval($data['day']),intval($data['year'])));
  $data['month_ind_name'] = getIndMonth(intval($data['month']));
  $data['day_ind_name'] = getIndDay($data['day_of_week']);
  return $data;
}

function parseDateTimeIndex($date)
{
  $int = preg_match("/(\d{4})-(\d{2})-(\d{2})/",$date,$match);

  if (!$int) {
    return false;
  }

  $data['year']           = $match[1];
  $data['month']          = $match[2];
  $data['day']            = $match[3];
  $data['day_of_week']    = date("N",mktime(0,0,0,intval($data['month']),intval($data['day']),intval($data['year'])));
  $data['month_ind_name'] = getIndMonth(intval($data['month']));
  $data['day_ind_name']   = getIndDay($data['day_of_week']);

  return $data;
}

function getIndDay($int="1")
{
  switch($int){
    case "7":
      $strDay = "Minggu";
    break;
    case "6":
      $strDay = "Sabtu";
    break;
    case "5":
      $strDay = "Jum'at";
    break;
    case "4":
      $strDay = "Kamis";
    break;
    case "3":
      $strDay = "Rabu";
    break;
    case "2":
      $strDay = "Selasa";
    break;
    case "1":
    default:
      $strDay = "Senin";
    break;
  }

  return $strDay;
}

function getIndMonth($int=1)
{
  $data[1]  = "Januari";
  $data[2]  = "Februari";
  $data[3]  = "Maret";
  $data[4]  = "April";
  $data[5]  = "Mei";
  $data[6]  = "Juni";
  $data[7]  = "Juli";
  $data[8]  = "Agustus";
  $data[9]  = "September";
  $data[10] = "Oktober";
  $data[11] = "November";
  $data[12] = "Desember";
  $intint   = intval($int);

  if ($intint <= 12 && $intint >= 1) {
    return $data[$intint];
  } else {
    return false;
  }
}

function getIndMonthShort($int = 1)
{
  $data[1]  = "Jan";
  $data[2]  = "Feb";
  $data[3]  = "Mar";
  $data[4]  = "Apr";
  $data[5]  = "Mei";
  $data[6]  = "Jun";
  $data[7]  = "Jul";
  $data[8]  = "Agu";
  $data[9]  = "Sep";
  $data[10] = "Okt";
  $data[11] = "Nov";
  $data[12] = "Des";
  $intint   = intval($int);

  if ($intint <= 12 && $intint >= 1) {
    return $data[$intint];
  } else {
    return false;
  }
}


function getNowTime()
{
  $waktu =  date( 'Y-m-d H:i:s', time());
  return $waktu; 
}

function formatingNowTime(){
  $waktu = getNowTime();
  return parseDateTime($waktu);
}

function getSimpleIndonesianDate($date=null)
{
  $waktu = (($date == null )) ? formatingNowTime() : parseDateTime($date); 
  return $waktu['day_ind_name'].", ". $waktu['day']."/".$waktu['month']."/".$waktu['year'];    
}

function getNowYear()
{
  $waktu =  date( 'Y', time());
  return $waktu; 
}

function convertGMTdate($string_date, $plus_hour=7)
{
  $tmp1 = explode("T", $string_date);
  $ymd  = $tmp1[0];
  $tmp2 = explode("Z",$tmp1[1]);
  $hms  = $tmp2[0];
  $ymd2 = explode("-",$ymd);
  $y    = $ymd2[0];
  $Mo   = $ymd2[1];
  $d    = $ymd2[2];
  $hms2 = explode(":",$hms);
  $h    = $hms2[0];
  $m    = $hms2[1];
  $s    = $hms2[2];       
    
  $dateID = mktime($h+$plus_hour,$m,$s,$Mo,$d,$y);
    
  $string_date2 = date('Y-m-d H:i:s',$dateID);
  $result       = parseDateTime($string_date2);  

  return $result;
}

function convert_date_to_path($string_date,$delimiter='')
{
  $dateB = explode(" ",trim($string_date));
  $ymd   = explode("-",$dateB[0]);
  $y     = $ymd[0];
  $m     = $ymd[1];
  $d     = $ymd[2];

  return $y.$delimiter.$m.$delimiter.$d;  
}

function time_ago($time_ago)
{
  $cur_time     = time();
  $time_elapsed = $cur_time - strtotime($time_ago);
  $seconds      = $time_elapsed ;
  $minutes      = round($time_elapsed / 60 );
  $hours        = round($time_elapsed / 3600);
  $days         = round($time_elapsed / 86400 );
  $weeks        = round($time_elapsed / 604800);
  $months       = round($time_elapsed / 2600640 );
  $years        = round($time_elapsed / 31207680 );

  if ($seconds <= 60) {
    if ($seconds <=0) {
      $ago = "satu detik lalu"; 
    } else {
      $ago = $seconds." detik lalu";  
    }
  } else if($minutes <=60){
    if($minutes==1){
      $ago = "satu minute lalu";
    }
    else{
      $ago = $minutes." menit lalu";
    }
  } else if($hours <=24){
    if($hours==1){
      $ago = 'satu jam lalu';
    }else{
      $ago = $hours." jam lalu";
    }
  } else if($days <= 7){
    if($days==1){
      $ago = 'kemarin';
    }else{
      $ago = $days." hari lalu";
    }
  } else if($weeks <= 4.3){
    if($weeks==1){
      $ago = 'satu minggu lalu';
    }else{
      $ago = $weeks." minggu lalu";
    }
  } else if($months <=12){
    if($months==1){
      $ago = " satu bulan lalu";
    }else{
      $ago = $months ."bulan lalu";
    }
  } else{
    if($years==1){
      $ago = 'satu tahun lalu';
    }else{
      $ago = $years."tahun lalu";
    }
  }

  return $ago;
}

