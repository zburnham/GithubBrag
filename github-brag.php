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

class GithubBrag_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
                'github-brag-widget', 'Github Brag Widget', array('description' => 'Github recent activity.')
        );
    }
    
   public function widget($args, $instance)
   {
       echo "Foo.";
   }

}
add_action('widgets_init', 'github_brag_init');

function github_brag_init()
{
    register_widget('GithubBrag_Widget');
}