<?php

/*
  Plugin Name: OWT Shortcode
  Description: This is a simple plugin for purpose of learning
  Version: 1.0.0
  Author: Online Web Tutor
 */

define("OWT_SHORTCODE_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));

//add_shortcode("owt", "wpl_owt_shortcode_part1");

function wpl_owt_shortcode_part1() {

    return "This is a simple plugin shortcode that we have created";
}

add_shortcode("owt-file", "wpl_owt_shortcode_part2");

function wpl_owt_shortcode_part2() {
    include_once OWT_SHORTCODE_PLUGIN_DIR_PATH . '/views/owt-shortcode-panel.php';
}

//add_shortcode('owt-playlist', "wpl_owt_shortcode_part3");

function wpl_owt_shortcode_part3($attributes) {
    //print_r($attributes);

    $attributes = shortcode_atts(array(
        "playlist_name" => "No Playlist defined",
        "total_videos" => "No videos found",
        "author" => "No author created",
        "channel" => "No channel found"
            ), $attributes, "owt-playlist");

    echo "<br/><br/>Playlist name: " . $attributes['playlist_name'];
    echo "<br/>Total videos: " . $attributes['total_videos'];
    echo "<br/>Author: " . $attributes['author'];
    echo "<br/>Channel: " . $attributes['channel'];
    //return "Hello I am a parameterized shortcode";
}

add_shortcode("owt-tag", "wpl_owt_shortcode_part4");

function wpl_owt_shortcode_part4($attributes, $content = "") {
    //print_r($attributes);
    //return "Tag text: " . $content;
    return '<a href="' . esc_attr($attributes['url']) . '" title="' . esc_attr($attributes['title']) . '">' . $content . '</a>';
}
