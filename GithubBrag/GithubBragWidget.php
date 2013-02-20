<?php
/**
 * GithubBragWidget.php
 * GithubBragWidget class.  Extends WP_Widget.
 * 
 * @author zburnham
 * @version 0.0.1
 */

class GithubBragWidget extends WP_Widget
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