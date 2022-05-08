<?php
/**
 * get Base URL from current script
 * @param string $uri
 *  URI string
 * @return string
 *  returns your site base URL
*/
function getBaseURL($uri=""){
  return (isset($_SERVER['HTTPS'])?"https://":"http://").$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['PHP_SELF']),"",$_SERVER['SCRIPT_NAME']).$uri;
}
/**
 * get Asset URL from current script
 * @param string $uri
 *  URI string
 * @return string
 *  returns your assets URL
*/
function getAssetURL($uri=""){
  return (isset($_SERVER['HTTPS'])?"https://":"http://").$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['PHP_SELF']),"",$_SERVER['SCRIPT_NAME'])."assets/".$uri;
}
?>