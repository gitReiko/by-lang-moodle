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
 * Strings for component 'message_pageone', language 'en', version '4.0'.
 *
 * @package     message_pageone
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_deadline_text'] = 'Assignments due within {$a} day(s):';
$string['config_assign_deadline'] = 'Assignment deadline notifications';
$string['config_assign_deadline_help'] = 'Sends a consolidated text message containing all the upcoming assignment deadlines.';
$string['config_assign_deadline_user'] = 'Assignment deadline notification user default';
$string['config_assign_deadline_user_help'] = 'Set the default used for the per user assingment deadline notification option. If assignment deadline notifications are disabled, the user option will be hidden.';
$string['config_cron_time'] = 'Notification processing time';
$string['config_cron_time_help'] = 'The time when the assignment deadline and notifications should be processed. Choose the hour in 24 hour clock.';
$string['config_deadline_days'] = 'Deadline notification threshold (days)';
$string['config_deadline_days_help'] = 'Include an assignment in the deadline notification when the due date is less than the number of days specified here.';
$string['config_forum'] = 'Forum posting notifications';
$string['config_forum_help'] = 'Sends a text message notifying the user if a new message is posted to a forum they are subscribed to, no further notifications of new posts will be sent until the user returns to the form and makes a follow up posting. This is different to the standard forum posting notification setting which will send a message for every post. Using this option allows the number of text messages consumed by forum notifications to be restricted.';
$string['config_forum_user'] = 'Forum posting notification user default.';
$string['config_forum_user_help'] = 'Set the default used for the per user forum posting notification option. If forum posting notifications are disabled, the user option will be hidden.';
$string['config_log'] = 'Log messages';
$string['config_log_help'] = 'Causes all automatically generated messages to be included in the PageOne message log. If you need to analyse the messaging logs for accounting purposes, turn this on.';
$string['forum_reply'] = 'Your post "{$a->sub}" in forum "{$a->fname}", course "{$a->cname}" has a reply';
$string['pluginname'] = 'MoodleMobile Text Messages';
$string['user_assign_deadline'] = 'Send assignment deadline notifications by text message.';
$string['user_forum'] = 'Send text message notifications of replies to my forum postings.';
