<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Register all admin notices
 * @since    1.3.0
 */
 
 
 
 
//WPSMS Pro Notice
function wpsmspro_plugin_notice() {
	
	global $current_user;
	
	$user_id = $current_user->ID;
	
	if (!get_user_meta($user_id, 'wpsmspro_plugin_notice_ignore')) {

	if ( wtc_fs()->is_not_paying() ) {
        ?>
	 
	 	<div class="notice  wpsms-message">
			<div class="wpsms-message-inner">
				<div class="wpsms-message-icon">
				</div>
				<div class="wpsms-premium-icon">
				</div>
				<div class="wpsms-message-content">
				<h2 class="wptwilioskin"><?php 
        echo esc_html__( 'Bulk SMS, Newsletter & Premium Features', 'wp-twilio-core' );
        ?></h2>
					<p><?php 
        echo esc_html__( 'Extend this plugin with powerful features.', 'wp-twilio-core' ) ;
        ?> <a href="<?php 
        echo esc_url( wtc_fs()->get_upgrade_url() ) ;
        ?>"><?php 
        echo esc_html__( 'Upgrade Now.', 'wp-twilio-core' ) ;
        ?></a></p>
					<p class="wpsms-message-actions">
						<a href="<?php 
        echo esc_url( wtc_fs()->get_upgrade_url() ) ;
        ?>" class="button button-primary"><?php 
        echo esc_html__( 'Upgrade Now', 'wp-twilio-core' ) ;
        ?></a>
				<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wpsms-dismised-notice', '1' ), 'wpsms-dismiss-notice', 'wpsms_notice_nonce' ) ); ?>" class="button button-secondary"><?php 
        echo esc_html__( 'Dismiss', 'wp-twilio-core' ) ;
        ?></a>

					</p>
				</div>
			</div>
	</div>
	 
	 
       <?php 
		}

	}

}

//WPSMS Pro Dismiss notice	
function wpsmspro_plugin_notice_ignore() {
	
	global $current_user;
	
	$user_id = $current_user->ID;
	
	if ( isset( $_GET['wpsms-dismised-notice'] ) && isset( $_GET['wpsms_notice_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['wpsms_notice_nonce'] ) ), 'wpsms-dismiss-notice' ) ) {
		
		add_user_meta( $user_id, 'wpsmspro_plugin_notice_ignore', 'true', true );
		
		// Redirect back to remove query string
		wp_safe_redirect( remove_query_arg( array( 'wpsms-dismised-notice', 'wpsms_notice_nonce' ) ) );
		exit;
		
	}
	
}
add_action('admin_init', 'wpsmspro_plugin_notice_ignore');






//WPSMS Pro Notice
function wpsmsadforest_plugin_notice() {
	
	global $current_user;
	 $addonws_url = admin_url( 'admin.php?page=twilio-options-addons' );
	$user_id = $current_user->ID;
	
	if (!get_user_meta($user_id, 'wpsmsadforest_plugin_notice_ignore')) {

        ?>
	 
	 	<div class="notice  wpsms-message">
			<div class="wpsms-message-inner">
				<div class="wpsms-message-icon">
				</div>
				<div class="wpsms-adforest-icon">
				</div>
				<div class="wpsms-message-content">
				<h2 class="wptwilioskin"><?php 
        echo esc_html__( 'SMS Notifications for AdForest Theme', 'wp-twilio-core' );
        ?></h2>
					<p><?php 
        echo esc_html__( 'Using this addon, your ad sellers will receive SMS notifications when they are contacted on their listings\' contact forms.', 'wp-twilio-core' ) ;
        ?> <a href="<?php 
         echo esc_url($addonws_url) ;
        ?>"><?php 
        echo esc_html__( 'Check it out.', 'wp-twilio-core' ) ;
        ?></a></p>
					<p class="wpsms-message-actions">
						<a href="<?php 
        echo esc_url($addonws_url) ;
        ?>" class="button button-primary"><?php 
        echo esc_html__( 'Awesome,Let me see', 'wp-twilio-core' ) ;
        ?></a>
				<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wpsms-adforest-dismised-notice', '1' ), 'wpsms-dismiss-adforest-notice', 'wpsms_notice_nonce' ) ); ?>" class="button button-secondary"><?php 
        echo esc_html__( 'Dismiss', 'wp-twilio-core' ) ;
        ?></a>

					</p>
				</div>
			</div>
	</div>
	 
	 
       <?php 


	}

}



//WPSMS Adforest Dismiss notice	
function wpsmsadforest_plugin_notice_ignore() {
	
	global $current_user;
	
	$user_id = $current_user->ID;
	
	if ( isset( $_GET['wpsms-adforest-dismised-notice'] ) && isset( $_GET['wpsms_notice_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['wpsms_notice_nonce'] ) ), 'wpsms-dismiss-adforest-notice' ) ) {
		
		add_user_meta( $user_id, 'wpsmsadforest_plugin_notice_ignore', 'true', true );
		
		// Redirect back to remove query string
		wp_safe_redirect( remove_query_arg( array( 'wpsms-adforest-dismised-notice', 'wpsms_notice_nonce' ) ) );
		exit;
		
	}
	
}
add_action('admin_init', 'wpsmsadforest_plugin_notice_ignore');




//Check if adforest theme is activated, else show WPSMS Pro Notice
$theme = wp_get_theme();
// gets the current theme

if ( 'adforest' == $theme->name || 'adforest' == $theme->parent_theme ) {
    add_action( 'admin_notices', 'wpsmsadforest_plugin_notice' );
} else {
   add_action('admin_notices', 'wpsmspro_plugin_notice');
}