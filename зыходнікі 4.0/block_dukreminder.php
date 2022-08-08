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
 * Strings for component 'block_dukreminder', language 'en', version '4.0'.
 *
 * @package     block_dukreminder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockstring'] = 'Course Completion Reminder';
$string['criteria_all'] = 'All';
$string['criteria_completion'] = 'Course completion';
$string['criteria_enrolment'] = 'Course subscription';
$string['criteria_error'] = 'Deadline and the subscription criteria can not be combined.';
$string['criteria_error2'] = 'Deadline and the all criteria can not be combined';
$string['daterelative_error'] = 'Negative values are permitted!';
$string['email_teacher_notification'] = '{$a->amount} students in the course {$a->course} have just been reminded:';
$string['form_criteria'] = 'Reminder criteria';
$string['form_criteria_help'] = 'Different reminder criteria are available. For additional descriptions please look up the Block documentation';
$string['form_dateabsolute'] = 'Deadline';
$string['form_dateabsolute_help'] = 'The reminders will be sent on the deadline';
$string['form_daterelative'] = 'Time';
$string['form_daterelative_completion'] = 'Send reminder after course completion';
$string['form_daterelative_help'] = 'The time defines after which amount of time the reminder will be sent after fullfiling the chosen criteria';
$string['form_delete'] = 'Are you sure?';
$string['form_header_criteria'] = 'Criteria';
$string['form_header_general'] = 'General';
$string['form_header_groups'] = 'Group filtering';
$string['form_header_report'] = 'Settings';
$string['form_header_time'] = 'Time';
$string['form_mailssent'] = 'Already sent reminders';
$string['form_placeholder'] = 'Placeholder';
$string['form_subject'] = 'Email subject';
$string['form_subject_help'] = 'Subject of the reminder email';
$string['form_text'] = 'Emailtext for the student';
$string['form_text_help'] = 'Here you can define the text that the studens will recieve. The following placeholders can be used: ###username### will be replaced with the student, ###usermail### with his mail and ###coursename### with the current course name.';
$string['form_text_teacher'] = 'Emailtext for the teachers';
$string['form_text_teacher_help'] = 'Here you can define the text that the course teachers will recieve.. The following placeholders can be used: ###coursename### for the current course name. ###users### is the list of reminded users, and ###usercount### is the amount of reminded students';
$string['form_title'] = 'Internal description';
$string['form_to_groups'] = 'Recievers';
$string['form_to_mail'] = 'Report to additional users';
$string['form_to_mail_help'] = 'Here you can add additional users that will recieve the report. Insert their email addresses, seperated with a ;';
$string['form_to_reportsuperior'] = 'Report to superiors';
$string['form_to_reporttrainer'] = 'Report to course teachers';
$string['form_to_reporttrainer_help'] = 'If ticked, a report will be sent to the course teachers';
$string['form_to_status'] = 'Course completion state';
$string['form_to_status_all'] = 'All';
$string['form_to_status_completed'] = 'With course completion';
$string['form_to_status_notcompleted'] = 'Without course completion';
$string['newblock:addinstance'] = 'Add a block';
$string['newblock:myaddinstance'] = 'Add a block to my moodle';
$string['pluginname'] = 'Course Completion Reminder';
$string['tab_course_reminders'] = 'Course reminders';
$string['tab_new_reminder'] = 'New reminder';
$string['to_mail_error'] = 'Invalid email! The mail addresses must be seperated by ;';
