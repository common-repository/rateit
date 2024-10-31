<?php
/*
Plugin Name: RateIt
Plugin URI: http://www.rateit.org.uk/
Description: Adds a rating box
Author: Chris D
Version: 1
Author URI: http://www.rateit.org.uk/
*/

function rateIt() 
{
  echo '<div align="center"><script type="text/javascript" src="http://www.rateit.org.uk/rateit.php"></script></div>';
}

function widget_rateIt($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Rate it<?php echo $after_title;
  rateIt();
  echo $after_widget;
}

function rateIt_init()
{
  register_sidebar_widget(__('Rate_it'), 'widget_rateIt');     
}
add_action("plugins_loaded", "rateIt_init");
?>