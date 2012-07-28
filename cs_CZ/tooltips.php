<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex

// I18n generated at: 2012-07-28 12:04+0000
// PO revision date:  2012-07-12 21:53+0000

$lang = array (
  'actions' => 
  array (
    'add_to_category' => 'This adds the report to additional categories. If you select Category 1 here and the report already has Category 2 attached to it, the report will then have both Category 1 and Category 2.',
    'assign_badge' => 'You will be able to assign a badge to the triggering user. Pick the badge that gets assigned here.',
    'between_times' => 'This is a range of hours and/or minutes between two times in 24 hour format. If you input an earlier time in the second field, it will be flipped with the first. These times must be within a single day. Also, this time is checked against the time you have configured on your site in site settings and NOT necessarily the timezone of the user interacting with your deployment. Leave this at 00:00 to 00:00 to ignore this qualifier.',
    'category' => 'If you would like to activate triggers only when a certain category is being used, you can set that here. This will allow a trigger to be activated if only one of the categories is used. For instace, if you select Category 1 and Category 2 here and a report is submitted using Category 2 and Category 3, it will pass the test.',
    'days_of_the_week' => 'If these actions happen on certain days of the week. Keep in mind the day is determined by the timezone configured on your deployment. Hold shift, command, or shift for multiple day selection.',
    'email_body' => 'Body of the email that will be sent.',
    'email_subject' => 'Subject of email that will be sent.',
    'keywords' => 'You can choose to leave this blank if you do not want to check against keywords. If you add words here, you will need to separate them with a comma (,). For example, if you want to activate a trigger when someone mentions "love" or "peace" in their message, you will want to add "love, peace" in the keywords box.',
    'location' => 'You can either select anywhere or a specific location. If you select a specific location, you will be asked to draw a box around the area that qualifies an action. For example, if you want this trigger to be activated when someone submits a report in Brazil, you will select "specific area" and then draw the box around Brazil. You can make these boxes as small or as large as you would like. You can also draw multiple boxes.',
    'on_specific_count' => 'This qualifier will activate the trigger on the N-th count either for the entire collective user base or for each individual user. Leave this blank to ignore it.',
    'response' => 'If all of the qualifiers above are passed, the trigger will initiate a response. This can range from approving a report to emailing a user. Select the response here to activate additional options for the specific responses.',
    'send_to' => 'If you select "Triggering User", the email will be sent to the user who performed the action. If you select the radio button next to the input box, you will be able to enter a custom email address. This is useful if you are setting up triggers to notify people when certain parts of the map are seeing reports, check ins or some other activity.',
    'specific_days' => 'You can select multiple days here. Dates are determined by your deployment timezone setting. Do not select any dates in order to default to all dates.',
    'trigger' => 'The trigger is the core component of setting up your Action Triggers. This is where you determine if you would like something to happen when someone submits a report, performs a check in, etc. You will be able to filter responses to these actions after selecting one.',
    'user' => 'The user can be anyone or a specific user. If you would only like specific users to activate a trigger, you will want to select them here. Otherwise, you will want to leave this as "anyone" since most triggers are set up for all users interacting with the system',
    'verify' => 'Marks a report as verified or not.',
  ),
  'change_picture' => 'Profile pages on this site use Gravatar. By clicking on your image, you will be taken to the Gravatar website where you can change your profile picture.',
  'default_value' => 'Separate each value with a comma e.g value1, value2',
  'dropdown_choices' => 'Separate each choice item with a comma e.g. Item 1, Item 2 etc',
  'private_to' => 'Start typing to list members',
  'private_subject' => 'Private message subject',
  'private_message' => 'Private message',
  'profile_color' => 'You can select a color that will show up under your profile picture on your public profile. This color will also be the color dot that shows up on the map for your checkins.',
  'profile_email' => 'Your email address',
  'profile_name' => 'Your full name',
  'profile_notify' => 'Selecting YES lets you get alerts via email when new reports or comments are posted on your website',
  'profile_password' => 'Your password. Leave this field blank if you wish to keep your current password',
  'profile_public' => 'Your profile can be viewed by anyone on the Internet if you check this option. This is also the easiest way to show off the reports you\'ve submitted, your checkins, badges, etc all on one page.',
  'profile_username' => 'Your username cannot be changed',
  'settings_access_level' => 'Access Levels are used to restrict access to custom form field data.  Higher access levels can access fields from lower levels. Superadmin has the highest access level - 100.  Public data is displayed at the lowest access level - 0.',
  'settings_alert_email' => 'This is the email address that will be used to send email alerts.',
  'settings_allow_clustering' => 'This allows bundling of similar reports into a single dot on the map',
  'settings_allow_comments' => 'Allow users to comment on reports on the main site.',
  'settings_allow_feed' => 'This allows RSS News feeds to be displayed on the main site.',
  'settings_allow_reports' => 'Allow users to submit information via the web form.',
  'settings_api_default_record_limit' => 'Default no. of records to be fetched per API request',
  'settings_api_max_record_limit' => 'Maximum no. of records to be fetched per API request',
  'settings_api_max_requests_per_ip' => 'Maximum no. of API requests per IP Address',
  'settings_banner' => 'The site banner shows up at the top of the front end of your website, if the theme you are using supports it. The recommended size for this banner will depend on the theme you are using. Keep in mind, this will replace the site title and tagline from showing up at the top of the page.',
  'settings_blocks_per_row' => 'Number of Block columns that will be displayed on each row',
  'settings_cache_pages' => 'Enable or disable page caching. This makes pages display faster by cutting response times. We recommend using caching on high traffic sites. **Remember that reports will be populated on the front end based on the schedule you set below (Cache Lifetime).',
  'settings_cache_pages_lifetime' => 'Set the lifetime of the cache.',
  'settings_checkins' => 'This setting enables checkins on your deployment. This is a simplified report type that is not moderated before it goes on the homepage and requires your site to be configured a certain way. When you enable this, make sure your timezone setting is on UTC and your theme supports checkins. When you enable this, checkin only themes will become enabled under your addons/themes settings page.',
  'settings_configure_map' => 'Set the map to cover a specific location ',
  'settings_default_category_colors' => 'Set one color code for all the categories on the site',
  'settings_default_location' => 'This is the country the site is being deployed',
  'settings_display_contact' => 'Turn the Contact Tab on or off on the main site.',
  'settings_display_howtohelp' => 'Turn the How to Help Tab on or off on the main site.',
  'settings_display_items_per_page' => 'This is the number of reports displayed per page on the main site.',
  'settings_display_items_per_page_admin' => 'This is the number of reports displayed per page on the admin Back End.',
  'settings_flsms_download' => 'This is the hub for incoming messages',
  'settings_flsms_synchronize' => 'This synchronizes the messages in the hub with the Ushahidi platform',
  'settings_flsms_text_1' => 'Phone numbers through which the text messages are received',
  'settings_google_analytics' => 'Tracks visitors of your site. Get detailed visitor statistics',
  'settings_locale' => 'Sets the language that will be used in the site.',
  'settings_map_provider' => 'This defines which map is to be used on the site',
  'settings_private_deployment' => 'Setting this value to true or yes will make your deployment private so only users with accounts that you specify will be able to access the deployment.',
  'settings_server_host' => 'This is where the emails reside',
  'settings_server_password' => 'This is the password for the email address that receives reports',
  'settings_server_port' => 'This is required to accept incoming connections from the email address',
  'settings_server_ssl_support' => 'This is required to enhance a secure connection',
  'settings_server_type' => 'This is required to retrieve e-mails from the host server',
  'settings_server_username' => 'This is the email address that receives reports',
  'settings_share_site_stats' => 'Hit statistics are stored on a server controlled by Ushahidi. By enabling this option, you gain access to hit statistics directly in your admin panel. By disabling it, you will stop collecting statistics and will be unable to recover traffic stats collected while this is turned off.',
  'settings_site_copyright_statement' => 'It is always a good idea to claim copyright on your work. For help in determining the right license for your needs, visit http://creativecommons.org/choose/.',
  'settings_site_email' => 'This is the email address that will receive email reports and messages from the contact form.',
  'settings_site_message' => 'This is text that will appear above the map on the homepage. This is useful for giving important information to visitors on the site. To remove the box, simply delete the message here.',
  'settings_site_name' => 'This is the name of the site that appears at the top of the main site.',
  'settings_site_submit_report_message' => 'This is a message that will show up on the submit report page. This is good for disclaimers or further instructions for your visitors who are reporting.',
  'settings_site_tagline' => 'In a few words, explain what this site is about.',
  'settings_site_timezone' => 'This is the timezone that your site will operate on. This has an impact on any actions you have set up that utilize time and date, as well as the default current time for reports on the front and back end of the site.',
  'settings_twitter_configuration' => 'Set the twitter hashtag that will be used on a tweet',
);

