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
 * Strings for component 'local_uploadnotification', language 'en', version '4.0'.
 *
 * @package     local_uploadnotification
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actioncreated'] = 'created';
$string['actionupdated'] = 'updated';
$string['heading'] = 'Upload notification settings';
$string['long_diff'] = 'In this file {$a} pages were changed.';
$string['long_diff_many'] = 'In this file many pages were changed.';
$string['messageprovider:digest'] = 'Course modification digest notification';
$string['pluginname'] = 'Upload notification';
$string['printed_changelog_prefix'] = 'This file is an update of {$a->filename} from {$a->date}.';
$string['printed_diff_prefix'] = 'The following pages of this file were changed:';
$string['settings_allow_changelog'] = 'Allow automatic changelog generation in courses';
$string['settings_allow_changelog_help'] = 'Allow teachers to enable the automatic changelog detection for their course. If disabled, teachers will not see this settings and can not enable the functionality.';
$string['settings_allow_mail'] = 'Allow notification mail delivery';
$string['settings_allow_mail_help'] = 'If enabled, mails with notifications about new material can be send';
$string['settings_course_allow_attachment'] = 'Allow email attachments';
$string['settings_course_allow_attachment_help'] = 'If set, students can receive new material directly via email. Activating this option will not automatically send an attachment every time, but students have the possibility to enable this function for them.';
$string['settings_course_disable'] = 'Disable';
$string['settings_course_enable'] = 'Enable';
$string['settings_course_enable_changelog'] = 'Display a changelog for updates.';
$string['settings_course_enable_changelog_help'] = 'If set, updates of the provided material will be detected and a changelog will be displayed under the current file. This can help your students to handle changes in the documents.';
$string['settings_course_enable_diff'] = 'Detect differences in updates';
$string['settings_course_enable_diff_help'] = 'If set, an automatic analyse will detect the changed pages if you update provided material. The page number will be displayed under the current file.';
$string['settings_course_enable_mail'] = 'Enable notification mail delivery for material uploads';
$string['settings_course_enable_mail_help'] = 'No preference: Your students can decide by their own whether they want to receive emails or not<br>Disabled: No mails will be delivered for material changes in your course<br>Enabled: Students will receive mails for material changes, expect they have forbidden the delivery explicate';
$string['settings_course_error_diff_no_changelog'] = 'The diff detection requires the changelog functionality. Please enable the changelog or disable the diff detection.';
$string['settings_course_headline'] = 'Course settings for upload notifications and changelog generation.';
$string['settings_course_link'] = 'Uploadnotification';
$string['settings_course_no_preferences'] = 'No preferences';
$string['settings_course_require_valid_course_admin'] = 'This feature is only available for course admins.';
$string['settings_course_require_valid_course_id'] = 'This feature is only available for valid course IDs.';
$string['settings_diff_not_available'] = '<p>The detection for changes in PDF files is not available because the tool <code>diff</code> could not be found on your system. If you have enabled the setting above, have a look in the admin settings of the local Plugin ChangelogLib to specify the correct path. This message disappears if the tool could be found.</p>';
$string['settings_digest'] = 'Time for digest delivery';
$string['settings_digest_help'] = 'The time on each day when the notification digests should be send.';
$string['settings_enable_changelog_by_default'] = 'Enable the changelog by default';
$string['settings_enable_changelog_by_default_help'] = 'If set, the changelog will be activated in courses which have no custom settings. If a teacher does not want this, he has to disable it manually.';
$string['settings_enable_diff_by_default'] = 'Enable the diff detection by default';
$string['settings_enable_diff_by_default_help'] = 'If set, the diff detection will be activated in courses which have no custom settings. If a teacher does not want this, he has to disable it manually.';
$string['settings_max_diff_filesize'] = 'Allowed size of analysed files for the diff detection<br>(in MB)';
$string['settings_max_diff_filesize_help'] = 'If the filesize of material is greater than this value, no differences will be calculated for it. Set this value to zero to disable the difference detection.<br>The difference detection requires an enabled changelog.';
$string['settings_max_mail_amount'] = 'Maximum course size for notifications';
$string['settings_max_mail_amount_help'] = 'Adjust this value to avoid to much load at one time. Defines the size of the course up to which mails are delivered.';
$string['settings_max_mail_filesize'] = 'Maximum filesize of mail attachments<br>(in KB)';
$string['settings_max_mail_filesize_help'] = 'The maximum material filesize which is allowed to be send in a mail attachments<br>Set to zero to disable attachments.';
$string['settings_max_mails_for_resource'] = 'Maximum amount of mails with the same attachment';
$string['settings_max_mails_for_resource_help'] = 'Adjust this value to avoid to much load at one time. Defines the amount of mails with attachment which are allowed to be send based on one course module.';
$string['settings_pdftotext_not_available'] = '<p>The detection for changes in PDF files is not available because the tool <code>pdftotext</code> could not be found on your system. If you have enabled the setting above, have a look in the admin settings of the local Plugin ChangelogLib to specify the correct path. This message disappears if the tool could be found.</p>';
$string['settings_required_mail_suffix'] = 'Required suffix of email addresses.';
$string['settings_required_mail_suffix_help'] = 'Insert your institutional domain name to only allow addresses which end with it. Leave it blank to allow all provider.';
$string['settings_saved_successfully'] = 'Your settings have been saved.';
$string['settings_user_disable'] = 'Disable';
$string['settings_user_enable'] = 'Enable';
$string['settings_user_enable_digest'] = 'Only send digest of the day';
$string['settings_user_enable_digest_help'] = 'Enabled: You will only receive one mail in the evening with all changes on this day<br>Disabled: You will receive a mail as soon as possible after uploads';
$string['settings_user_enable_mail'] = 'Enable notification mail delivery for material uploads';
$string['settings_user_enable_mail_help'] = 'No preference: You will only receive emails if a teacher has enabled it explicit for his course<br>Disabled: No mails will be delivered for material changes<br>Enabled: You will receive mails for material changes, expect a teacher has forbidden the delivery explicit';
$string['settings_user_headline'] = 'Do you want to receive notifications when new material was uploaded to a course?';
$string['settings_user_link'] = 'Uploadnotification';
$string['settings_user_max_mail_filesize'] = 'Maximum filesize of mail attachments<br>(in KB)';
$string['settings_user_max_mail_filesize_help'] = 'You can receive new or updated material directly via email. This defines the maximum material filesize which is allowed to be send in a mail attachments<br>Set to zero to disable attachments.';
$string['settings_user_max_mail_filesize_not_more_than_admin'] = 'The moodle admin only allows attachments up to {$a}KB';
$string['settings_user_no_preferences'] = 'No preferences';
$string['settings_user_not_negative'] = 'Negative values are not allowed';
$string['settings_user_require_valid_users'] = 'This feature is only available for valid users.';
$string['templatemessage'] = 'Hi {$a->firstname},

The following activities resources have changed in courses you\'re enrolled in.

{$a->notifications}

{$a->signoff}

You are receiving this mail because you or a teacher has requested this information. You can edit your preferences under {$a->user_settings}';
$string['templatemessage_html'] = 'Hi {$a->firstname},<br><br>

The following activities resources have changed in courses you\'re enrolled in.

<ul>
{$a->notifications}
</ul>

{$a->signoff}<br><br>

You are receiving this mail because you or a teacher has requested this information. You can edit your preferences under your <a href="{$a->user_settings}">preferences</a>.';
$string['templateresource'] = '* "{$a->filename}" in "{$a->coursefullname}" ({$a->url_course}) was {$a->action}: {$a->url_file}';
$string['templateresource_html'] = '<li><a href="{$a->url_file}">{$a->filename}</a> in <a href="{$a->url_course}">{$a->coursefullname}</a> was {$a->action}</li>';
$string['templatesubject_plural'] = 'Resource updates in your courses {$a}';
$string['templatesubject_singular'] = 'Resource updates in your course {$a}';
$string['uploadnotification:receivedigest'] = 'Receive course modification digest notification';
$string['warning'] = 'Warning';
