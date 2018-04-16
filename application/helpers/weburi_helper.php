<?php

function cdn_uri($uri)
{
  return 'https://cdn.okezone.com/' . ltrim($uri, '/');
}

function slug($sString) {
  $string = strip_tags($sString);
  $string = strtolower($string);
  $string = preg_replace("/&(.)(uml);/", "$1e", $string);
  $string = preg_replace("/&(.)(acute|cedil|circ|ring|tilde|uml);/", "$1", $string);
  $string = preg_replace("/([^a-z0-9]+)/", "-", $string);
  $string = trim($string, "-");
  
  return $string;
}
