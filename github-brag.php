<?php
/*
Plugin Name: GithubBrag
Plugin URI: http://foo
Description: A plugin to provide a Github widget displaying recent activity.
Version: 0.0.1
Author: zburnham
Author URI: http://www.zacharyburnham.com
License: 3-Clause BSD
*/
include('GithubBrag/GithubBragWidget.php');

include ('SplClassLoader.php');
$autoloader = new SplClassLoader('GithubBrag', __DIR__);
$autoloader->register();

add_action('widgets_init', 'github_brag_init');

function github_brag_init()
{
    register_widget('GithubBragWidget');
}

function github_brag_init_table()
{
    global $wpdb;
    $prefix = $wpdb->prefix;
    $tableName = $prefix . 'githubbrag_events';
    
    $sql = "CREATE TABLE ";
}