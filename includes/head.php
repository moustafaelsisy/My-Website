<?php
  /*
    This file includes constants and functions to be used across the whole website,
    in the <head> element. Such items included here are
    JQuery include
    Bootstrap include
    Global stylesheet
    favicon
    charset
  */

  include "directories.php";

  //Constants
  $GLOBAL_HEAD =
   '<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/'.$STYLE_DIR.'globalStyle.min.css">
    <meta chartset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Moustafa Elsisy. An energetic Software/Web Developer in the making, who likes to stay outside of the comfort zone,
    and experiment with a lot of technologies.">
    <link rel="shortcut icon" href="favicon.ico">';

    //functions

    function getCSS($file){
      return $GLOBALS['STYLE_DIR'].basename($file, '.php').'.min.css';
    }

    function getJS($file){
      return $GLOBALS['JS_DIR'].basename($file, '.php').'.js';
    }

?>
