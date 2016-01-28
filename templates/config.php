<?php
/**
Copyright 2011-2014 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*/

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

/**
 * Application configuration
 */
$conf['settings']['app.title'] = '{{ booked_app_title }}';			// application title
$conf['settings']['default.timezone'] = '{{ booked_default_timezone }}';      // look up here http://php.net/manual/en/timezones.php
$conf['settings']['allow.self.registration'] = '{{ booked_allow_self_registration }}';         	// if users can register themselves
$conf['settings']['admin.email'] = '{{ booked_admin_email }}';         // email address of admin user
$conf['settings']['admin.email.name'] = '{{ booked_admin_email_name }}';	// name to be used in From: field when sending automatic emails
$conf['settings']['default.page.size'] = '{{ booked_default_page_size }}';                  // number of records per page
$conf['settings']['enable.email'] = '{{ booked_enable_email }}';                     // global configuration to enable if any emails will be sent
$conf['settings']['default.language'] = '{{ booked_default_language }}';                // find your language in the lang directory
$conf['settings']['script.url'] = '{{ booked_script_url }}';   	// public URL to the Web directory of this instance. this is the URL that appears when you are logging in. leave http: or https: off to auto-detect
$conf['settings']['image.upload.directory'] = 'Web/uploads/images'; // full or relative path to where images will be stored
$conf['settings']['image.upload.url'] = 'uploads/images';       // full or relative path to show uploaded images from
$conf['settings']['cache.templates'] = 'true';                  // true recommended, caching template files helps web pages render faster
$conf['settings']['use.local.jquery'] = 'false';                // false recommended, delivers jQuery from Google CDN, uses less bandwidth
$conf['settings']['registration.captcha.enabled'] = '{{ booked_registration_captcha_enabled }}';     // recommended. unless using recaptcha this requires php_gd2 enabled in php.ini
$conf['settings']['registration.require.email.activation'] = 'false';		// requires enable.email = true
$conf['settings']['registration.auto.subscribe.email'] = 'false';			// requires enable.email = true
$conf['settings']['registration.notify.admin'] = 'false';		// whether the registration of a new user sends an email to the admin (ala phpScheduleIt 1.2)
$conf['settings']['inactivity.timeout'] = '{{ booked_inactivity_timeout }}';     			// minutes before the user is automatically logged out
$conf['settings']['name.format'] = '{{ booked_name_format }}';     		// display format when showing user names
$conf['settings']['css.extension.file'] = ''; 			      	// full or relative url to an additional css file to include. this can be used to override the default style
$conf['settings']['disable.password.reset'] = '{{ booked_disable_password_reset }}'; 	      	// if the password reset functionality should be disabled
$conf['settings']['home.url'] = ''; 	      					// the url to open when the logo is clicked
$conf['settings']['logout.url'] = '{{ booked_logout_url }}'; 	      					// the url to be directed to after logging out

$conf['settings']['schedule']['use.per.user.colors'] = 'false'; 		// color reservations by user
$conf['settings']['schedule']['show.inaccessible.resources'] = '{{ booked_schedule_show_inaccessible_resources }}';  // whether or not resources that are inaccessible to the user are visible
$conf['settings']['schedule']['reservation.label'] = '{name}';    		// format for what to display on the reservation slot label. Available properties are: {name}, {title}, {description}, {email}, {phone}, {organization}, {position}, {startdate}, {enddate} {resourcename} {participants} {invitees}. Custom attributes can be added using att with the attribute id. For example {att1}
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';    	// if blocked periods should be hidden or shown

/**
 * ical integration configuration
 */
$conf['settings']['ics']['require.login'] = '{{ booked_ics_require_login }}';             // recommended, if the user must be logged in to access ics files
$conf['settings']['ics']['subscription.key'] = '{{ booked_ics_subscription_key }}';              // must be set to allow webcal subscriptions
$conf['settings']['ics']['import'] = '{{ booked_ics_import }}';					// enable iCal import
$conf['settings']['ics']['import.key'] = '{{ booked_ics_import_key }}';					// it's recommended  to set this key when iCal import is enabled
/**
 * Privacy configuration
 */
$conf['settings']['privacy']['view.schedules'] = '{{ booked_privacy_view_schedules }}';       			// if unauthenticated users can view schedules
$conf['settings']['privacy']['view.reservations'] = '{{ booked_privacy_view_reservations }}';    			// if unauthenticated users can view reservations
$conf['settings']['privacy']['hide.user.details'] = '{{ booked_privacy_hide_user_details }}';    			// if personal user details should be displayed to non-administrators
$conf['settings']['privacy']['hide.reservation.details'] = '{{ booked_privacy_hide_reservation_details }}';			// if reservation details should be displayed to non-administrators
/**
 * Reservation specific configuration
 */
$conf['settings']['reservation']['start.time.constraint'] = 'future';		// when reservations can be created or edited. options are future, current, none
$conf['settings']['reservation']['updates.require.approval'] = 'false';		// if updates to previously approved reservations require approval again
$conf['settings']['reservation']['prevent.participation'] = '{{ booked_reservation_prevent_participation }}';		// if participation and invitation options should be removed
$conf['settings']['reservation']['prevent.recurrence'] = '{{ booked_reservation_prevent_recurrence }}';			// if recurring reservations are disabled for non-administrators
$conf['settings']['reservation']['enable.reminders'] = 'false';				// if reminders are enabled. this requires email to be enabled and the reminder job to be configured
/**
 * Email notification configuration
 */
$conf['settings']['reservation.notify']['resource.admin.add'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['application.admin.add'] = 'false';
$conf['settings']['reservation.notify']['application.admin.update'] = 'false';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['application.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['group.admin.add'] = 'false';
$conf['settings']['reservation.notify']['group.admin.update'] = 'false';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['group.admin.approval'] = 'false';
/**
 * File upload configuration
 */
$conf['settings']['uploads']['enable.reservation.attachments'] = 'false'; 	// if reservation attachments can be uploaded
$conf['settings']['uploads']['reservation.attachment.path'] = 'uploads/reservation'; 	// full or relative (to the root of your installation) filesystem path to store reservation attachments
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv'; 	// comma separated list of file extensions that users are allowed to attach. leave empty to allow all extensions
/**
 * Database configuration
 */
$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = '{{ booked_db_user }}';        // database user with permission to the booked database
$conf['settings']['database']['password'] = '{{ booked_db_password }}';
$conf['settings']['database']['hostspec'] = '{{ booked_db_hostspec }}';        // ip, dns or named pipe
$conf['settings']['database']['name'] = '{{ booked_db_name }}';
/**
 * Mail server configuration
 */
$conf['settings']['phpmailer']['mailer'] = 'mail';              // options are 'mail', 'smtp' or 'sendmail'
$conf['settings']['phpmailer']['smtp.host'] = '';               // 'smtp.company.com'
$conf['settings']['phpmailer']['smtp.port'] = '25';
$conf['settings']['phpmailer']['smtp.secure'] = '';             // options are '', 'ssl' or 'tls'
$conf['settings']['phpmailer']['smtp.auth'] = 'true';           // options are 'true' or 'false'
$conf['settings']['phpmailer']['smtp.username'] = '';
$conf['settings']['phpmailer']['smtp.password'] = '';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'false';
/**
 * Plugin configuration.  For more on plugins, see readme_installation.html
 */
$conf['settings']['plugins']['Authentication'] = '{{ booked_plugin_authentication }}';
$conf['settings']['plugins']['Authorization'] = '{{ booked_plugin_authorization }}';
$conf['settings']['plugins']['Permission'] = '{{ booked_plugin_permission }}';
$conf['settings']['plugins']['PostRegistration'] = '{{ booked_plugin_postregistration }}';
$conf['settings']['plugins']['PreReservation'] = '{{ booked_plugin_prereservation }}';
$conf['settings']['plugins']['PostReservation'] = '{{ booked_plugin_postreservation }}';
/**
 * Installation settings
 */
$conf['settings']['install.password'] = '';
/**
 * Pages
 */
$conf['settings']['pages']['enable.configuration'] = 'true';
/**
 * API
 */
$conf['settings']['api']['enabled'] = '{{ booked_api_enabled }}';
/**
 * ReCaptcha
 */
$conf['settings']['recaptcha']['enabled'] = 'false';
$conf['settings']['recaptcha']['public.key'] = '';
$conf['settings']['recaptcha']['private.key'] = '';
/**
 * Email
 */
$conf['settings']['email']['default.from.address'] = '';
$conf['settings']['email']['default.from.name'] = '';
/**
 * Reports
 */
$conf['settings']['reports']['allow.all.users'] = 'false';
/**
 * Account Password Rules
 */
$conf['settings']['password']['minimum.letters'] = '6';
$conf['settings']['password']['minimum.numbers'] = '0';
$conf['settings']['password']['upper.and.lower'] = 'false';
/**
 * Label display settings
 */
$conf['settings']['reservation.labels']['ics.summary'] = '{{ booked_reservation_labels_ics_summary }}';
$conf['settings']['reservation.labels']['ics.my.summary'] = '{{ booked_reservation_labels_ics_my_summary }}';
$conf['settings']['reservation.labels']['rss.description'] = '{{ booked_reservation_labels_ics_my_summary }}';
$conf['settings']['reservation.labels']['my.calendar'] = '{{ booked_reservation_labels_my_calendar }}';
$conf['settings']['reservation.labels']['resource.calendar'] = '{{ booked_reservation_labels_resource_calendar }}';
$conf['settings']['reservation.labels']['reservation.popup'] = '{{ booked_reservation_labels_reservation_popup }}';
/**
 * Security header settings
 */
$conf['settings']['security']['security.headers'] = 'false'; // Enable the following options
$conf['settings']['security']['security.strict-transport'] = 'true';
$conf['settings']['security']['security.x-frame'] = 'deny';
$conf['settings']['security']['security.x-xss'] = '1; mode=block';
$conf['settings']['security']['security.x-content-type'] = 'nosniff';
$conf['settings']['security']['security.content-security-policy'] = "default-src 'self'"; // Requires careful tuning (know what your doing)
