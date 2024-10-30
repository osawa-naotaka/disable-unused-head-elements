<?php
/*
  Plugin Name: Disable Unused Head Elements
  Plugin URI: https://github.com/osawa-naotaka/disable-unused-head-elements
  Description: Disable Unused Head Elements: emoji, REST API entrypoint, RSD link
  Version: 1.0.0
  Author: osawa naotaka
  Author URI: https://github.com/osawa-naotaka
  License: MIT
 */


add_action('init', function () {
  // emoji script and style
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  // remove_action('wp_print_styles', 'wp_enqueue_emoji_styles');

  // REST API entrypoint
  remove_action('wp_head', 'rest_output_link_wp_head');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');

  // RSD link
  remove_action('wp_head', 'rsd_link');
});
