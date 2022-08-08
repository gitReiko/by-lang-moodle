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
 * Strings for component 'local_hide_inactive_courses', language 'en', version '4.0'.
 *
 * @package     local_hide_inactive_courses
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email_content_default'] = 'Dear {RECIPIENT},

Your course \'{COURSE}\' has been set to hidden because no users have accessed it for a long time. Please contact the help desk for more information.';
$string['email_content_desc'] = 'Email content';
$string['email_onoff_desc'] = 'Send email alerts';
$string['email_onoff_subdesc'] = 'Whether or not to send email alerts to course instructors when their course is auto-hidden';
$string['email_subject_default'] = '{COURSE} has been automatically hidden due to inactivity';
$string['email_subject_desc'] = 'Email subject line';
$string['event_course_auto_hidden'] = 'Course auto hidden';
$string['hide_courses_task'] = 'Hide inactive courses';
$string['limit_desc'] = 'Access time limit';
$string['limit_subdesc'] = 'How long ago must the last course access have been for it to be considered inactive?';
$string['pluginname'] = 'Hide inactive courses';
$string['privacy:metadata'] = 'The Hide Inactive Courses plugin does not store any personal user data.';
