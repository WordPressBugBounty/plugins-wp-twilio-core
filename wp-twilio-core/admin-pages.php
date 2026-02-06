<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Display the General settings tab
 * @return void
 */
function twl_display_tab_general( $tab, $page_url ) {
	if( $tab != 'general' ) {
		return;
	} 
	
	$options = get_option( TWL_CORE_OPTION );
	if($options)
	{
		$options = wp_parse_args($options,twl_get_defaults());
	}
	else
	{
		$options = twl_get_defaults();
	}
	$options['url_shorten_bitly'] = !isset( $options['url_shorten_bitly'] ) ? 0 : $options['url_shorten_bitly'];
	$options['url_shorten_bitly_token'] = !isset( $options['url_shorten_bitly_token'] ) ? '' : $options['url_shorten_bitly_token'];
	?>
		
	<form method="post" action="options.php">
		<table class="form-table">
		
	
			
		
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Account SID', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;"><?php esc_html_e( 'Available from within your Twilio account', 'wp-twilio-core' ); ?></span></th>
				<td>
					<input size="50" type="text" name="<?php echo esc_html (TWL_CORE_OPTION); ?>[account_sid]" placeholder="<?php esc_attr_e( 'Enter Account SID', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['account_sid'] ); ?>" class="regular-text" />
					<br />
					<small><?php echo wp_kses_post( __( 'To view API credentials visit <a href="https://www.twilio.com/user/account/voice-sms-mms" target="_blank">https://www.twilio.com/user/account/voice-sms-mms</a>', 'wp-twilio-core' ) ); ?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Auth Token', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;"><?php esc_html_e( 'Available from within your Twilio account', 'wp-twilio-core' ); ?></span></th>
				<td>
					<input size="50" type="text" name="<?php echo esc_html (TWL_CORE_OPTION); ?>[auth_token]" placeholder="<?php esc_attr_e( 'Enter Auth Token', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['auth_token'] ); ?>" class="regular-text" />
					<br />
					<small><?php echo wp_kses_post( __( 'To view API credentials visit <a href="https://www.twilio.com/user/account/voice-sms-mms" target="_blank">https://www.twilio.com/user/account/voice-sms-mms</a>', 'wp-twilio-core' ) ); ?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Service ID', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;"><?php esc_html_e( "Available from within your Twilio account It's require for bulk SMS.", 'wp-twilio-core' ); ?></span></th>
				<td>
					<input size="50" type="text" name="<?php echo esc_html (TWL_CORE_OPTION); ?>[service_id]" placeholder="<?php esc_attr_e( 'Enter Notify Service ID', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['service_id'] ); ?>" class="regular-text" />
					<br />
					<small><?php echo wp_kses_post( __( 'To view or create Notify Service ID visit <a href="https://www.twilio.com/console/notify/services" target="_blank">https://www.twilio.com/console/notify/services</a>', 'wp-twilio-core' ) ); ?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Twilio Number', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;"><?php esc_html_e( 'Must be a valid number associated with your Twilio account', 'wp-twilio-core' ); ?></span></th>
				<td>
					<input size="50" type="text" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[number_from]" placeholder="+16175551212" value="<?php echo esc_html( $options['number_from'] ); ?>" class="regular-text" />
					<br />
					<small><?php esc_html_e( 'Country code + 10-digit Twilio phone number (i.e. +16175551212)', 'wp-twilio-core' ); ?></small>
				</td>
			</tr>
			
			
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Advanced &amp; Debug Options', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;"><?php esc_html_e( 'With great power, comes great responsiblity.', 'wp-twilio-core' ); ?></span></th>
				<td>
					<label><input class="cm-toggle" type="checkbox" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[logging]" value="1" <?php checked( $options['logging'], '1', true ); ?> /> <?php esc_html_e( 'Enable Logging', 'wp-twilio-core' ); ?></label><br />
					<small><?php esc_html_e( 'Enable or Disable Logging', 'wp-twilio-core' ); ?></small><br /><br />
					<label><input class="cm-toggle"  type="checkbox" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[mobile_field]" value="1" <?php checked( $options['mobile_field'], '1', true ); ?> /> <?php esc_html_e( 'Add Mobile Number Field to User Profiles', 'wp-twilio-core' ); ?></label><br />
					<small><?php esc_html_e( 'Adds a new field "Mobile Number" under Contact Info on all user profile forms.', 'wp-twilio-core' ); ?></small><br /><br />
					<label><input class="cm-toggle"  type="checkbox" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[url_shorten_bitly]" value="1" class="url-shorten-bitly-checkbox" <?php checked( $options['url_shorten_bitly'], '1', true ); ?> /> <?php esc_html_e( 'Shorten URLs using Bit.ly', 'wp-twilio-core' ); ?></label><br />
					<input size="50" type="text" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[url_shorten_bitly_token]" placeholder="<?php esc_attr_e( 'Enter Bit.ly Access Token', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['url_shorten_bitly_token'] ); ?>" class="regular-text url-shorten-bitly-key-text" style="display:block;" />
					<small><?php echo wp_kses_post( __( 'Shorten all URLs in the message using the <a href="https://dev.bitly.com/v4_documentation.html" target="_blank">Bit.ly URL Shortener API</a>. Checking will display the access token field.', 'wp-twilio-core' ) ); ?></small><br /><br />
					<label><input class="cm-toggle"  type="checkbox" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[url_shorten]" value="1" class="url-shorten-checkbox" <?php checked( $options['url_shorten'], '1', true ); ?> /> <?php esc_html_e( 'Shorten URLs using Google (Deprecated)', 'wp-twilio-core' ); ?></label><br />
					<input size="50" type="text" name="<?php echo  esc_html (TWL_CORE_OPTION); ?>[url_shorten_api_key]" placeholder="<?php esc_attr_e( 'Enter Google Project API key', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['url_shorten_api_key'] ); ?>" class="regular-text url-shorten-key-text" style="display:block;" />
					<small><?php echo wp_kses_post( __( 'Shorten all URLs in the message using the <a href="https://code.google.com/apis/console/" target="_blank">Google URL Shortener API</a>. Checking will display the API key field.', 'wp-twilio-core' ) ); ?></small><br />
				</td>
			</tr>
		</table>
		<?php settings_fields( TWL_CORE_SETTING ); ?>
		<input type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes', 'wp-twilio-core' ) ?>" />
	</form>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			twl_toggle_fields($);
			$('input.url-shorten-checkbox, input.url-shorten-bitly-checkbox').click(function() {
				twl_toggle_fields($);
			});
		});
		function twl_toggle_fields($) {
			if($('input.url-shorten-checkbox').is(':checked')) {
				$('input.url-shorten-key-text').show();
			} else {
				$('input.url-shorten-key-text').hide();
			}
			if($('input.url-shorten-bitly-checkbox').is(':checked')) {
				$('input.url-shorten-bitly-key-text').show();
			} else {
				$('input.url-shorten-bitly-key-text').hide();
			}
		}
	</script>
	<?php
}
add_action( 'twl_display_tab', 'twl_display_tab_general', 10, 2 );

/**
 * Display the Test SMS tab
 * @return void
 */
function twl_display_tab_test( $tab, $page_url ) {
	if( $tab != 'test' ) {
		return;
	} 
	
	$number_to = $message = '';
	if( isset( $_POST['submit'] ) ) {
		check_admin_referer( 'twl-test' );
		$number_to = isset( $_POST['number_to'] ) ? sanitize_text_field( wp_unslash( $_POST['number_to'] ) ) : '';
		$message = isset( $_POST['message'] ) ? sanitize_text_field( wp_unslash( $_POST['message'] ) ) : '';
		if( !$number_to || !$message ) {
			printf( '<div class="error"> <p> %s </p> </div>', esc_html__( 'Some details are missing. Please fill all the fields below and try again.', 'wp-twilio-core' ) );
		} else {
			$response = twl_send_sms( array( 'number_to' => $number_to, 'message' => $message ) );
			if( is_wp_error( $response ) ) {
				printf( '<div class="error"> <p> %s </p> </div>', esc_html( $response->get_error_message() ) );
			} else {
				printf( '<div class="updated settings-error notice is-dismissible"> <p> Successfully Sent! Message SID: <strong>%s</strong> </p> </div>', esc_html( $response->sid ) );
				$number_to = $message = '';
			}
		}
	}
	?>
	<h3><?php esc_html_e( 'Send a Message', 'wp-twilio-core' ); ?></h3>
	<p><?php esc_html_e( 'If you are sending messages while in trial mode, the recipient phone number must be verified with Twilio.', 'wp-twilio-core' ); ?></p>
	<form method="post" action="<?php echo esc_url( add_query_arg( array( 'tab' => $tab ), $page_url ) ); ?>">
	
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Recipient Number', 'wp-twilio-core' ); ?></th>
				<td>
					<input size="50" type="text" name="number_to" placeholder="+16175551212" value="<?php echo esc_html($number_to); ?>" class="regular-text" />
					<br />
					<small><?php esc_html_e( 'The destination phone number. Format with a \'+\' and country code e.g., +16175551212 ', 'wp-twilio-core' ); ?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Message Body', 'wp-twilio-core' ); ?><br /><span style="font-size: x-small;">
				<td>
					<textarea name="message" maxlength="1600" class="large-text" rows="7"><?php echo esc_html($message); ?></textarea>
					<small><?php esc_html_e( 'The text of the message you want to send, limited to 1600 characters.', 'wp-twilio-core' ); ?></small><br />
				</td>
			</tr>
		</table>
		<?php wp_nonce_field( 'twl-test' ); ?>
		<input name="submit" type="submit" class="button-primary" value="<?php esc_attr_e( 'Send Message', 'wp-twilio-core' ) ?>" />
	</form>
	<?php 
}
add_action( 'twl_display_tab', 'twl_display_tab_test', 10, 2 );

/**
 * Display the Logs tab
 * @return void
 */
function twl_display_logs( $tab, $page_url ) {
	if( $tab != 'logs' ) {
		return;
	} 
	if ( isset( $_GET['clear_logs'] ) && $_GET['clear_logs'] == '1' ) {
		check_admin_referer( 'clear_logs' );
		update_option( TWL_LOGS_OPTION, '' );
		$logs_cleared = true;
	}

	if ( isset( $logs_cleared ) && $logs_cleared ) { ?>
		<div id="setting-error-settings_updated" class="updated settings-error"><p><strong><?php esc_html_e( 'Logs Cleared', 'wp-twilio-core' ); ?></strong></p></div>
	<?php
	}

	$options = twl_get_options();
	if ( !$options['logging'] ) {
		printf( '<div class="error"> <p> %s </p> </div>', esc_html__( 'Logging currently disabled.', 'wp-twilio-core' ) );
	}
	$clear_log_url = esc_url( wp_nonce_url( add_query_arg( array( 'tab' => $tab, 'clear_logs' => 1 ), $page_url ), 'clear_logs' ) );
	?>
	<p><a class="button gray" href="<?php echo esc_html($clear_log_url); ?>"><?php esc_html_e( 'Clear Logs', 'wp-twilio-core' ); ?></a></p>
	<h3><?php esc_html_e( 'Logs', 'wp-twilio-core' ); ?></h3>
<pre>
<?php echo esc_html(get_option( TWL_LOGS_OPTION )); ?>
</pre>
	<?php
}
add_action( 'twl_display_tab', 'twl_display_logs', 10, 2 );

// new tab for notifications
function twl_display_tab_notifications( $tab, $page_url ) {
    if( $tab != 'notifications' ) {
        return;
    }

	$options = get_option( TWL_CORE_NOTIFICATION_OPTION );
	
	$options = wp_parse_args($options,twl_get_notification_defaults());
	
	?>
	
	<form method="post" action="options.php">
	
	<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Notification Number:', 'wp-twilio-core' ); ?></th>
				<td>
					<input size="50" type="text" name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[notification_number]" placeholder="<?php esc_attr_e( 'Enter Notification Number', 'wp-twilio-core' ); ?>" value="<?php echo esc_html( $options['notification_number'] ); ?>" class="regular-text" />
					<p><?php esc_html_e( 'Set the number to receive SMS.', 'wp-twilio-core' ); ?></p>
					<p><?php esc_html_e( 'Leave empty if you want to receive sms on the main settings number.', 'wp-twilio-core' ); ?></p>
				</td>
			</tr>
	</table>
	<hr />
	<h3><?php esc_html_e( 'New Post Published', 'wp-twilio-core' ); ?></h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Activate:', 'wp-twilio-core' ); ?></th>
				<td>
					<input class="cm-toggle"  type="checkbox" name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_post_published_cb]" value="1" <?php checked( $options['new_post_published_cb'], 1, true ); ?> />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Message:', 'wp-twilio-core' ); ?></th>
				<td>
					<textarea name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_post_published_message]" class="regular-text" style="display:block;"><?php echo esc_html($options['new_post_published_message']); ?></textarea>
					<p><?php esc_html_e( 'Enter the content of the sms message', 'wp-twilio-core' ); ?></p>
					<?php
					/* translators: %1$s: Post title placeholder (%post_title%), %2$s: Post content placeholder (%post_content%), %3$s: Post URL placeholder (%post_url%), %4$s: Post date placeholder (%post_date%) */
					echo '<p>' . esc_html( sprintf( __( 'Post title: %1$s, Post content: %2$s, Post url: %3$s, Post date: %4$s', 'wp-twilio-core' ), '%post_title%', '%post_content%', '%post_url%', '%post_date%' ) ) . '</p>';
					?>

				</td>
			</tr>
		</table>
		<hr />
		<h3><?php esc_html_e( 'New User Registered', 'wp-twilio-core' ); ?></h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Activate:', 'wp-twilio-core' ); ?></th>
				<td>
					<input class="cm-toggle"  type="checkbox" name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_user_registered_cb]" value="1" <?php checked( $options['new_user_registered_cb'], 1, true ); ?> />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Message:', 'wp-twilio-core' ); ?></th>
				<td>
					<textarea name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_user_registered_message]" class="regular-text" style="display:block;"><?php echo esc_html($options['new_user_registered_message']); ?></textarea>
					<p><?php esc_html_e( 'Enter the content of the sms message', 'wp-twilio-core' ); ?></p>
					<?php
					?>
					<p><?php
					/* translators: %1$s: User login placeholder (%user_login%), %2$s: User email placeholder (%user_email%), %3$s: Register date placeholder (%date_register%) */
					echo esc_html( sprintf( __( 'User Login: %1$s, User email: %2$s, Register date: %3$s', 'wp-twilio-core' ), '%user_login%', '%user_email%', '%date_register%' ) ); ?></p>

				</td>
			</tr>
		</table>
		<hr />
		<h3><?php esc_html_e( 'New Comment', 'wp-twilio-core' ); ?></h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Activate:', 'wp-twilio-core' ); ?></th>
				<td>
					<input class="cm-toggle"  type="checkbox" name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_comment_cb]" value="1" <?php checked( $options['new_comment_cb'], 1, true ); ?> />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Message:', 'wp-twilio-core' ); ?></th>
				<td>
					<textarea name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_comment_message]" class="regular-text" style="display:block;"><?php echo esc_html($options['new_comment_message']); ?></textarea>
					<p><?php esc_html_e( 'Enter the content of the sms message', 'wp-twilio-core' ); ?></p>
					<?php
					?>
					<p><?php
					/* translators: %1$s: Comment author placeholder (%comment_author%), %2$s: Author email placeholder (%comment_author_email%), %3$s: Author URL placeholder (%comment_author_url%), %4$s: Author IP placeholder (%comment_author_IP%), %5$s: Comment date placeholder (%comment_date%), %6$s: Comment content placeholder (%comment_content%) */
					echo esc_html( sprintf( __( 'Comment Author: %1$s, Author email: %2$s, Author url: %3$s, Author IP: %4$s, Comment date: %5$s, Comment content: %6$s', 'wp-twilio-core' ), '%comment_author%', '%comment_author_email%', '%comment_author_url%', '%comment_author_IP%', '%comment_date%', '%comment_content%' ) ); ?></p>

				</td>
			</tr>
		</table>
		<hr />
		<h3><?php esc_html_e( 'New Login', 'wp-twilio-core' ); ?></h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Activate:', 'wp-twilio-core' ); ?></th>
				<td>
					<input class="cm-toggle"  type="checkbox" name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_login_cb]" value="1" <?php checked( $options['new_login_cb'], 1, true ); ?> />
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php esc_html_e( 'Message:', 'wp-twilio-core' ); ?></th>
				<td>
					<textarea name="<?php echo esc_attr( TWL_CORE_NOTIFICATION_OPTION ); ?>[new_login_message]" class="regular-text" style="display:block;"><?php echo esc_html($options['new_login_message']); ?></textarea>
					<p><?php esc_html_e( 'Enter the content of the sms message', 'wp-twilio-core' ); ?></p>
					<?php
					?>
					<p><?php
					/* translators: %1$s: Username placeholder (%username_login%), %2$s: Display name placeholder (%display_name%) */
					echo esc_html( sprintf( __( 'Username: %1$s, Nickname: %2$s', 'wp-twilio-core' ), '%username_login%', '%display_name%' ) ); ?></p>

				</td>
			</tr>
		</table>
		
		<?php settings_fields( TWL_CORE_NOTIFICATION_SETTING ); ?>
		<input name="submit" type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes', 'wp-twilio-core' ) ?>" />
	</form>

	<?php
}

add_action( 'twl_display_tab', 'twl_display_tab_notifications', 10, 4 );
