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
include('includes/github-brag-admin.php');

include ('SplClassLoader.php');
$autoloader = new SplClassLoader('GithubBrag', __DIR__);
$autoloader->register();

$a = new GithubBrag\GithubActor;
die(var_dump($a));

include(__DIR__ . '/../../../wp-admin/includes/upgrade.php');

register_activation_hook(__FILE__, 'githubbrag_install');

function githubbrag_install()
{
    global $githubbrag_version;
    $githubbrag_version = '1.0';
    github_brag_init_table();
    add_option('githubbrag_version', $githubbrag_version);
}

function github_brag_init()
{
    register_widget('GithubBragWidget');
}

function github_brag_init_table()
{
    global $wpdb;
    $prefix = $wpdb->prefix;
    $sql = '';
    
    $tableName = $prefix . 'githubbrag_events';

    $sql .= "CREATE TABLE IF NOT EXISTS $tableName (
            id VARCHAR(20) NOT NULL  PRIMARY KEY, 
            type VARCHAR(20) NOT NULL, 
            public TINYINT(1) NOT NULL,
            created_at VARCHAR(30) NOT NULL 
            );";

    $tableName = $prefix . 'githubbrag_actors';

    $sql .= "CREATE TABLE IF NOT EXISTS $tableName (
            id VARCHAR(20) NOT NULL  PRIMARY KEY, 
            event_id VARCHAR(20) NOT NULL, 
            login VARCHAR(50) NOT NULL, 
            gravatar_id VARCHAR(50), 
            url VARCHAR(200) NOT NULL
            );";

    $tableName = $prefix . "githubbrag_repos";

    $sql .= "CREATE TABLE IF NOT EXISTS $tableName
            id VARCHAR(20) NOT NULL  PRIMARY KEY, 
            event_id VARCHAR(20) NOT NULL,
            name VARCHAR(100) NOT NULL, 
            url VARCHAR(200) NOT NULL 
            );";

    $tableName = $prefix . "githubbrag_payloads";

    $sql .= "CREATE TABLE IF NOT EXISTS $tableName 
            push_id VARCHAR(20) NOT NULL  PRIMARY KEY, 
            event_id VARCHAR(20) NOT NULL,  
            size VARCHAR(5), 
            distinct_size VARCHAR(5), 
            ref VARCHAR(100) NOT NULL, 
            head VARCHAR(50) NOT NULL, 
            before VARCHAR(50) NOT NULL 
            );";

    $tableName = $prefix . "githubbrag_commits";

    $sql .= "CREATE TABLE IF NOT EXISTS $tableName 
            sha VARCHAR(50) NOT NULL  PRIMARY KEY, 
            push_id VARCHAR(20) NOT NULL, 
            message VARCHAR(50) NOT NULL, 
            distinct TINYINT(1), 
            url VARCHAR(200)
            );";

    $tableName = $prefix . "githubbrag_authors";

    $sql = "CREATE TABLE IF NOT EXISTS $tableName 
            sha VARCHAR(50) NOT NULL, 
            email VARCHAR(100), 
            name` VARCHAR(100) 
            );";

    dbDelta($sql);
}