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
 * Strings for component 'local_temporary_enrolments', language 'en', version '4.0'.
 *
 * @package     local_temporary_enrolments
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Temporary enrolments';
$string['privacy:metadata:export_description'] = 'Your temporary enrolment within this course';
$string['privacy:metadata:roleassignid'] = 'ID of the role assign object related to this temporary enrolment.';
$string['privacy:metadata:roleid'] = 'ID of the role given to the user in the role assignment for this temporary enrolment.';
$string['privacy:metadata:table'] = 'Data describing each temporary enrolment.';
$string['privacy:metadata:timeend'] = 'Timestamp of time at which the temporary enrolment will end.';
$string['privacy:metadata:timestart'] = 'Timestamp of time at which the temporary enrolment began.';
$string['settings:existing_assignments:desc'] = 'Manage existing role assignments?';
$string['settings:existing_assignments:subdesc'] = 'If the selected temporary marker role is already assigned to some users: Do you want those role assignments to become temporary, and be brought under the management of this plugin?';
$string['settings:existing_assignments_email:desc'] = 'Send emails for pre-existing assignments?';
$string['settings:existing_assignments_email:subdesc'] = 'If the selected temporary marker role is already assigned to some users: Do you want the plugin to send initial explanatory emails for those pre-existing role assignments? Only applies of you checked yes for the option to manage existing role assignments.';
$string['settings:existing_assignments_start:desc'] = 'Existing role assignment start time';
$string['settings:existing_assignments_start:from_now'] = 'From right now';
$string['settings:existing_assignments_start:from_start'] = 'From assignment start time';
$string['settings:existing_assignments_start:subdesc'] = 'If the selected temporary marker role is already assigned to some users: Do you want the duration of the temporary enrolment for those pre-existing role assignments to start from the creation of the role assignment, or from right now? Only applies of you checked yes for the option to manage existing role assignments.';
$string['settings:expire_content:default'] = '{SUBJECT: Temporary enrolment for {COURSE} expired}

Dear {STUDENTFIRST},

Your temporary access to {COURSE} has expired or been revoked. You will no longer be able to access this course. If you wish to participate in this course, please register for it through the registrar.';
$string['settings:expire_content:desc'] = 'Expiration email content';
$string['settings:expire_content:subdesc'] = 'Emailed to student upon expiration of their temporary enrolment (if they have not been fully enrolled)';
$string['settings:expire_onoff:desc'] = 'Expiration email on/off';
$string['settings:expire_onoff:subdesc'] = 'Check the box to turn expiration emails on/off. This does not affect automatic unenrolment.';
$string['settings:headers:email'] = 'Email';
$string['settings:headers:existing_assignments'] = 'Existing Role Assignments';
$string['settings:headers:main'] = 'Main';
$string['settings:length:desc'] = 'Duration of temporary enrolment';
$string['settings:length:subdesc'] = 'How long temporary enrolment of a student will last before automatically expiring';
$string['settings:onoff:desc'] = 'On/off';
$string['settings:onoff:subdesc'] = 'Check the box to turn on plugin functionality';
$string['settings:remind_content:default'] = '{SUBJECT: Temporary enrolment reminder for {COURSE}}

Dear {STUDENTFIRST},

Please be advised that your temporary enrolment in {COURSE} will expire in {TIMELEFT} days. If you wish to continue participating in this course you MUST formally register for it through the registrar.';
$string['settings:remind_content:desc'] = 'Reminder email content';
$string['settings:remind_content:subdesc'] = 'Emailed to student every x days to remind them that their enrolment is only temporary';
$string['settings:remind_freq:desc'] = 'Reminder email frequency';
$string['settings:remind_freq:subdesc'] = 'Reminder emails are sent every ____ days';
$string['settings:remind_onoff:desc'] = 'Reminder email on/off';
$string['settings:remind_onoff:subdesc'] = 'Check the box to turn reminder emails on or off.';
$string['settings:roleid:desc'] = 'Temporary enrolment marker role';
$string['settings:roleid:subdesc'] = 'The role which indicates that an enrolment is temporary.';
$string['settings:studentinit_content:default'] = '{SUBJECT: Temporary enrolment granted for {COURSE}}

Dear {STUDENTFIRST},

You have been granted temporary access to the Moodle site for {COURSE}. After you are officially registered for the course, you will receive student access for the remainder of the semester. Temporary access will expire after 14 days. Though faculty can add you to Moodle, they CANNOT register you for the course.';
$string['settings:studentinit_content:desc'] = 'Student initial email content';
$string['settings:studentinit_content:subdesc'] = 'Emailed to student upon being temporarily enrolled';
$string['settings:studentinit_onoff:desc'] = 'Student initial email on/off';
$string['settings:studentinit_onoff:subdesc'] = 'Check the box to turn student initial email on/off. This does not affect actual enrolment.';
$string['settings:teacherinit_content:default'] = '{SUBJECT: Temporary enrolment granted to {STUDENTFULL} for {COURSE}}

Dear {TEACHER},

You have granted {STUDENTFULL} temporary access to {COURSE}. Temporary enrolment will expire after 14 days. Though you can add students to Moodle, you CANNOT register them for the course. They may register through through the registrar until the add deadline.';
$string['settings:teacherinit_content:desc'] = 'Teacher initial email content';
$string['settings:teacherinit_content:subdesc'] = 'Emailed to the teacher who enrolled a student temporarily';
$string['settings:teacherinit_onoff:desc'] = 'Teacher initial email on/off';
$string['settings:teacherinit_onoff:subdesc'] = 'Check the box to turn teacher initial email on/off. This does not affect actual enrolment.';
$string['settings:upgrade_content:default'] = '{SUBJECT: Temporary enrolment for {COURSE} upgraded!}

Dear {STUDENTFIRST},

Your temporary access to {COURSE} has been upgraded to full enrolment! You are now officially registered for this course and have permanent access to the Moodle site.';
$string['settings:upgrade_content:desc'] = 'Upgrade email content';
$string['settings:upgrade_content:subdesc'] = 'Emailed to student if they are enrolled fully (upgrading their enrolment to permanent status).';
$string['settings:upgrade_onoff:desc'] = 'Upgrade email on/off';
$string['settings:upgrade_onoff:subdesc'] = 'Check the box to turn upgrade email on/off. Does not affect actual enrolment.';
$string['task:expire'] = 'Check for expired temporary roles and remove them';
$string['task:remind'] = 'Send out temporary enrolment reminder emails';
