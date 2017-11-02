<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://dragosroua.com
 * @since      1.0.0
 *
 * @package    Steembridge
 * @subpackage Steembridge/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $steem_account =$options['steem_account'];
    ?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="steembridge_options" action="options.php">
	    
	     <?php settings_fields($this->plugin_name); ?>

        <!-- load jQuery from CDN -->
        <fieldset>
            <fieldset>
                <p>'Your Steem account on the Steem blockchain. Will also be used as the primary tag when posting.</p>
                <legend class="screen-reader-text"><span><?php _e('Your Steem account on the Steem blockchain.', $this->plugin_name); ?></span></legend>
                <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-steem_account" name="<?php echo $this->plugin_name; ?>[steem_account]" value="<?=$steem_account?>"/>
            </fieldset>
        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>