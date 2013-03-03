<?php
/**
 * github-brag-admin.php
 * Admin options for githubbrag plugin.
 * 
 * @author zburnham
 * @version 0.0.1
 */

add_action('admin_menu', 'githubbrag_plugin_menu');

add_option('github-username', 'zburnham');

function githubbrag_plugin_menu()
{
    //add_options_page('GithubBrag Options', 'GithubBrag', 'manage_options', 'githubbrag', 'githubbrag_options');
    $hook_suffix = add_plugins_page('GithubBrag Options' , 'GithubBrag', 'manage_options', 'githubbrag', 'githubbrag_options');
    add_action('load-' . $hook_suffix, 'githubbrag_load_function');
}

function githubbrag_options()
{
    if (!current_user_can('manage_options')) {
        wp_die( __('You do not have sufficient permissions to access this page.'));
    }
    
    $opt_name = 'github-username';
    $hidden_field_name = 'github-submit-hidden';
    $data_field_name = 'github-username';
    
    $opt_val = get_option('github-username');
    
    if (isset($_POST[$hidden_field_name]) && 'Y' == $_POST[$hidden_field_name]) {
        $opt_val = $_POST[$data_field_name];
        update_option($opt_name, $opt_val);
        
    ?>
<div class="updated"><p><strong><?php _e('Username saved.', 'GithubBrag'); ?></strong></p></div>
    <?php
    }
    
    echo '<div class="wrap">';
    echo '<h2> Github Brag Plugin Settings</h2>';
    
    ?>
<form name="githubbrag-form" method="POST" action="">
    <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
    
    <p><?php _e("Github Username" , 'github-brag'); ?>
        <input type="text" name="<?php echo $data_field_name; ?>" value="<?php echo $opt_val; ?>" size="30" />
    </p>
    <hr />
    <p class="submit">
        <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
    </p>
    
</form>
</div>

    <?php
    
}

function githubbrag_load_function()
{
    remove_action('admin_notices', 'githubbrag_admin_notices');
}

function githubbrag_admin_notices()
{
    echo '<div id="notice" class="updated fade"><p>Github Brag is not configured yet.  Please do it now.</p></div>' . PHP_EOL;
}

