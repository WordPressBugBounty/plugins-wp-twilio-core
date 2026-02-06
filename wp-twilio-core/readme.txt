=== NotifSMS - SMS Notifications OTP & 2FA for WordPress & WooCommerce ===
Contributors: mohsinoffline, spartac
Donate link: https://wpsms.io/
Tags: sms, sms plugin, twilio, woocommerce sms, notifications
Requires at least: 4.2
Tested up to: 6.9
Requires PHP: 5.6
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Send SMS, OTP & 2FA notifications from WordPress via Twilio. Includes automated alerts, bulk messaging, and integrations with popular plugins.

== Description ==

[NotifSMS For WordPress](https://www.wpsms.io/) enables you to send text messages, OTP codes, and 2FA notifications directly from your WordPress site.  
You can send SMS alerts via **Twilio**, **custom SMS gateways**, or other supported providers.

Whether you want to **notify WooCommerce customers**,**send OTP for login**, or **broadcast SMS to users**, this plugin provides a straightforward solution.

### 🔹 Features

* **Send SMS from WordPress** – Quickly send single or bulk SMS from your WordPress dashboard.  
* **WooCommerce SMS Alerts** – Notify customers about order status updates (completed, shipped, cancelled, etc.).  
* **Contact Form 7 & Gravity Forms Integration** – Send SMS when a form is submitted.  
* **OTP & 2FA (Two Factor Authentication)** – Add secure SMS-based login or verification.  
* **Custom SMS Gateways** – Use Twilio or integrate your preferred provider.  
* **Bulk & Newsletter SMS** – Send bulk SMS to all users or by user role.  
* **Admin SMS Notifications** – Get notified instantly of site activities (new user, post, comment, etc.).  
* **URL Shortening Support** – Integrates Bit.ly or Google URL Shortener API.  
* **Developer Friendly** – Hooks and filters for custom integrations.  
* **Easy setup** – Activate, configure your API key, and start sending SMS in minutes!

### 🔹 Use Cases

This plugin is optimized for speed, flexibility, and reliability. It integrates seamlessly with popular plugins and is ideal for:
- WooCommerce stores that want to send **SMS order notifications**
- WordPress membership or e-learning sites that need **2FA/OTP SMS**
- Businesses wanting **SMS marketing** or **user alerts**

You can even extend it with **premium addons** for deeper integrations.

---

### 🔸 Premium Addons

Upgrade with Pro Addons to unlock more SMS automation and integrations:

* **WooCommerce SMS Addon** – Automatic order SMS notifications.  
* **Event Espresso SMS Reminder** – Send reminders to event attendees.  
* **Bulk SMS Addon** – Send SMS to all users, by role, or to custom lists.  
* **Contact Form 7 SMS Addon** – Admin SMS notifications for new form submissions.  
* **Easy Digital Downloads Addon** – Customer SMS notifications on order updates.  
* **ClassiPress / Vantage / AdForest Addons** – Send SMS to ad owners and business listers.  

[View all addons →](https://wpsms.io/sms-plugins/)

Need a **custom integration**? [Contact us](https://wpsms.io/) — we’ll help you build one.

---

Visit [WPSMS.io](https://www.wpsms.io/) for documentation, guides, and API details.  
Contributors are welcome via [GitHub](https://github.com/mohsinoffline/wp-twilio-core).

> **Disclaimer:** This plugin is not affiliated with or endorsed by Twilio, Inc., WordPress, WooCommerce, or any other third-party service mentioned. All trademarks belong to their respective owners.

---

== Third-Party Services ==

This plugin may send data to the following third-party services when certain features are enabled:

=== Bitly URL Shortener ===
**When used:** When the "Shorten URLs using Bit.ly" option is enabled in plugin settings, URLs in SMS messages are automatically shortened using the Bitly API.

**Service Information:**
* Service Website: https://bitly.com/
* API Documentation: https://dev.bitly.com/v4_documentation.html
* Terms of Service: https://bitly.com/pages/tos
* Privacy Policy: https://bitly.com/pages/privacy

**Data Sent:** Long URLs from SMS messages are sent to Bitly's API to generate shortened URLs. No personal user data is sent beyond the URLs themselves.

=== Google URL Shortener (Deprecated) ===
**When used:** When the "Shorten URLs using Google (Deprecated)" option is enabled in plugin settings, URLs in SMS messages are automatically shortened using the Google URL Shortener API.

**Note:** Google has deprecated this service. We recommend using Bitly instead.

**Service Information:**
* Service Website: https://developers.google.com/url-shortener
* Terms of Service: https://developers.google.com/terms
* Privacy Policy: https://policies.google.com/privacy

**Data Sent:** Long URLs from SMS messages are sent to Google's API to generate shortened URLs. No personal user data is sent beyond the URLs themselves.

**Important:** These third-party services are only used when you explicitly enable URL shortening in the plugin settings. If URL shortening is disabled, no data is sent to these services.

---

== Installation ==

1. Upload the folder `wp-twilio-core` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to `WPSMS → Settings` and enter your Twilio Account SID, Auth Token, and Number.
4. Send a test SMS from your dashboard to confirm everything works.

---

== Frequently Asked Questions ==

= What is NotifSMS? =
NotifSMS is a WordPress plugin that lets you send text messages (SMS) using Twilio or any supported SMS gateway. It supports bulk SMS, OTP, and WooCommerce notifications.

= Is NotifSMS free? =
Yes! The core plugin is completely free. You just need a Twilio account (or your preferred gateway). Twilio even offers trial credits to get started.

= Can I use my own SMS gateway? =
Yes. NotifSMS supports Twilio by default but allows custom gateways. Developers can use filters and actions to integrate any SMS API.

= Can I send WooCommerce SMS notifications? =
Yes. With the WooCommerce SMS Addon, your customers get automatic SMS alerts for each order update.

= Does NotifSMS support OTP or Two-Factor Authentication (2FA)? =
Yes. You can enable SMS-based 2FA for user logins and custom forms with our OTP Addon.

= Does NotifSMS support bulk SMS or newsletters? =
Yes. You can send bulk SMS to all users, by user role, or upload a custom list of numbers.

= Can I log sent messages? =
Yes, the plugin includes basic SMS logging for up to 100 entries.

= Where can I get help or support? =
Visit [https://wpsms.io](https://wpsms.io) for documentation and support.

---

== Screenshots ==

1. Send SMS from your WordPress admin dashboard.
2. Configure Twilio API credentials in settings.
3. WooCommerce SMS notification setup screen.

---

== Changelog ==

= 2.0.0 =
* Updated plugin name to NotifSMS – Notifications, OTP & 2FA for WordPress
* Fixed internationalization issues
* Updated tested up to WordPress 6.8
* Code improvements and compliance updates

= 1.5.9 =
* Updated Freemius SDK
* Fixed translation bug

[...]

---

== Upgrade Notice ==
= 2.0.0 =
Major update: Plugin renamed to NotifSMS with improved compliance and internationalization. Update now for better compatibility and WordPress.org compliance.

= 1.5.9 =
Update now to improve translation handling and SDK compatibility.
