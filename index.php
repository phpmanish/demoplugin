<?php
/**
 * @package DemoPlugin
 */
/*
Plugin Name: DemoPlugin
Description: Testing Git 
Text Domain: demo
*/

function my_the_content_filter($content) {
 
  return "Modified Content Again<br>".$content;
}

add_filter( 'the_content', 'my_the_content_filter' );

