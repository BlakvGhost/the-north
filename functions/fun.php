<?php
  /**
   * Serveur verification
   */
  class Host
  {
   function isMobile()
    {
      $agent = $_SERVER['HTTP_USER_AGENT'];
      if (strstr($agent,'Android') || strstr($agent,'iPhone') || strstr($agent,'iPad')){
        return true;
      }else {
        return false;
      }
    }
    function site($operation)
    {
      $sv = $_SERVER;
      if ($operation == 'local'){
        return $sv['HTTP_HOST'];
      }else if ($operation == 'ip'){
        return $sv['SERVER_ADDR'];
      }else if ($operation == 'path'){
        return $sv['SCRIPT_FILENAME'];
      }else if ($operation == 'path'){
        return $sv['DOCUMENT_ROOT'];
      }else if ($operation == 'url'){
        return $sv['REQUEST_URI'];
      }else if ($operation == 'accept'){
        return $sv['HTTP_ACCEPT'];
      }else if ($operation == 'referer'){
        return $sv['HTTP_REFERER'];
      }
    }
    function root($path)
    {
      return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
    }
    function style($path)
    {
      if ($_SERVER['DOCUMENT_ROOT'] == '/var/www/html'){
        return DIRECTORY_SEPARATOR . 'theNorth' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . $path;
      }else {
        return DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . $path;
      }
    }
    function script($path)
    {
      if ($_SERVER['DOCUMENT_ROOT'] == '/var/www/html'){
        return DIRECTORY_SEPARATOR . 'theNorth' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . $path;
      }else {
        return DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . $path;
      }
    }
    function image($path)
    {
      if ($_SERVER['DOCUMENT_ROOT'] == '/var/www/html'){
        return DIRECTORY_SEPARATOR . 'theNorth' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $path;
      }else {
        return DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $path;
      }
    }
    function control($path)
    {
      if ($_SERVER['DOCUMENT_ROOT'] == '/var/www/html'){
        return DIRECTORY_SEPARATOR . 'theNorth' . DIRECTORY_SEPARATOR . 'controle' . DIRECTORY_SEPARATOR . $path;
      }else {
        return DIRECTORY_SEPARATOR . 'controle' . DIRECTORY_SEPARATOR . $path;
      }
    }
    function root_url($path)
    {
      if ($_SERVER['DOCUMENT_ROOT'] == '/var/www/html'){
        return DIRECTORY_SEPARATOR . 'theNorth' .  DIRECTORY_SEPARATOR . $path;
      }else {
        return  DIRECTORY_SEPARATOR . $path;
      }
    }

  }


?>
