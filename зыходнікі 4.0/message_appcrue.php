<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'message_appcrue', language 'en', version '4.0'.
 *
 * @package     message_appcrue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_key'] = 'APIKey for AppCrue Notification';
$string['api_key_help'] = 'APIKey for AppCrue Notification';
$string['app_id'] = 'AppId for AppCrue Notification';
$string['app_id_help'] = 'AppId for AppCrue Notification';
$string['enable_push'] = 'Enable push message service';
$string['match_user_by'] = 'Field for matching user in Push API';
$string['match_user_by_help'] = 'Each user is associated to a name in the push API that may not match with userid in Moodle.';
$string['only_news_forum'] = 'Filter forums notifications.';
$string['only_news_forum_help'] = 'Filter forums notifications and only send messages from the "News" forum.';
$string['pluginname'] = 'Push notifications for Appcrue';
$string['privacy:metadata'] = 'The "Push Notifications for AppCrue" plugin does not store any personal data.';
$string['url_pattern'] = 'URL pattern for the event\'s links.';
$string['url_pattern_help'] = 'URL pattern for push notifications. The following variables are available: {url}:the message\'s url, {siteurl}:base url of the server. Example: {siteurl}/local/appcrue/autologin.php?urltogo={url}&fallback=continue&<bearer>';
