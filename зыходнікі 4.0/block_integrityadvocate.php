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
 * Strings for component 'block_integrityadvocate', language 'en', version '4.0'.
 *
 * @package     block_integrityadvocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocklist_title'] = '{$a} IA block(s) in this course:';
$string['btn_overview_course'] = 'Course Overview';
$string['btn_overview_module'] = 'Module Overview';
$string['btn_overview_user'] = 'User Overview';
$string['cachedef_perrequest'] = 'Remember values during a single request';
$string['cachedef_persession'] = 'Remember values during the user session';
$string['column_iadata'] = 'Integrity Advocate data';
$string['column_iaphoto'] = 'Integrity Advocate photo';
$string['column_latestparticipantleveldata'] = 'Latest Integrity Advocate data';
$string['completion_not_enabled'] = 'Completion tracking is not enabled on this site.';
$string['completion_not_enabled_course'] = 'Completion tracking is not enabled in this course.';
$string['config_apikey'] = 'Api Key';
$string['config_appid'] = 'Application Id';
$string['config_blockversion'] = 'Version';
$string['config_debuginfo'] = 'Debug info';
$string['config_default_title'] = 'Integrity Advocate';
$string['config_proctorquizinfopage'] = 'Show students proctoring on the quiz info page';
$string['config_topnote'] = 'Config note';
$string['config_topnote_help'] = 'Use of this plugin requires purchasing a paid service - please visit <a href="https://integrityadvocate.com/" target="_blank">IntegrityAdvocate</a> to get the credentials needed to be able to use this plugin.';
$string['created'] = 'First seen';
$string['disabled_editingmode'] = 'Course editing mode is enabled, so video monitoring is disabled';
$string['disabled_haseditcap'] = 'Disabled for non-students';
$string['disabled_notenrolled'] = 'Not available - you are not enrolled in this course';
$string['error_curlcloseia'] = 'Curl error closing the IA session';
$string['error_curlnoremoteinfo'] = 'Error: Got no remote IA participant info. If this is not valid, check the API key and app id are valid.';
$string['error_invalidapikey'] = 'Invalid API Key - it is a code that looks a bit like this: c5oMspfrqaUuYX+3/Pem/7/8VnxS385tlmqoV2/bVcA=';
$string['error_invalidappid'] = 'Invalid Application Id - it is a code that looks a bit like this: c56a4180-65aa-42ec-a945-5fd21dec0538';
$string['error_noapikey'] = 'No Api key is set';
$string['error_noappid'] = 'No Application Id is set';
$string['error_notenrolled'] = 'You are not enrolled in this course';
$string['error_nousers'] = 'No users found';
$string['error_quiz_showblocks'] = 'This quiz is configured with &quot;Show blocks during quiz attempts&quot; = No.  To fix this, edit the quiz settings > Appearance > Show more...';
$string['error_twoblocks'] = 'This block is added twice to this page, so skipping the content.  This block will not display to students.';
$string['flag_comment'] = 'Details';
$string['flag_errorcode'] = 'Error code';
$string['flag_type'] = 'Flag';
$string['flags'] = 'Flags';
$string['flags_none'] = 'None';
$string['fullname'] = 'Full course name';
$string['integrityadvocate:addinstance'] = 'Add a new Integrity Advocate block';
$string['integrityadvocate:myaddinstance'] = 'Add a Integrity Advocate block to My home page';
$string['integrityadvocate:overview'] = 'View course overview of Integrity Advocate results';
$string['integrityadvocate:selfview'] = 'View own Integrity Advocate results';
$string['integrityadvocate:view'] = 'Use the Integrity Advocate block as a student';
$string['last_modified'] = 'Last modified';
$string['lastaccess'] = 'Last in course';
$string['no_blocks'] = 'No Integrity Advocate blocks are set up for your courses.';
$string['no_course'] = 'No matching course found';
$string['no_enrollment'] = 'This user is not enrolled in this course';
$string['no_ia_block'] = 'No active Integrity Advocate block instance found for this activity';
$string['no_local_participants'] = 'No course participants found';
$string['no_modules_config_message'] = 'There are no modules found with activity completion enabled which have the Integrity Advocate block set up.';
$string['no_modules_message'] = 'No modules found.';
$string['no_remote_participant_sessions'] = 'No IA-side participant sessions found';
$string['no_remote_participants'] = 'No IA-side participants found';
$string['no_user'] = 'No matching user found';
$string['not_all_expected_set'] = 'Not all activities with completion have an "{$a}" date set.';
$string['now_indicator'] = 'NOW';
$string['overridden'] = '(Overridden)';
$string['override_reason_none'] = 'No reason given';
$string['overview_course'] = 'Integrity Advocate Course Overview';
$string['overview_module'] = 'Integrity Advocate Module Overview';
$string['overview_session'] = '<h4>{$a}</h4>';
$string['overview_sessions'] = '<h3>Sessions for this user</h3>';
$string['overview_user'] = 'Integrity Advocate User Overview';
$string['overview_user_status'] = 'Latest status';
$string['photo'] = 'Captured photo';
$string['pluginname'] = 'Integrity Advocate';
$string['privacy:metadata'] = 'This plugin stores no data in Moodle.  In order to integrate with a remote service, user data needs to be exchanged with that service.  See <a href="https://www.integrityadvocate.com/privacy-policy-for-end-users" target="_blank">Integrity Advocate Privacy</a> for more information.';
$string['privacy:metadata:block_integrityadvocate'] = 'This plugin stores no data in Moodle.  In order to integrate with a remote service, user data needs to be exchanged with that service.  See <a href="https://www.integrityadvocate.com/privacy-policy-for-end-users" target="_blank">Integrity Advocate Privacy</a> for more information.';
$string['privacy:metadata:block_integrityadvocate:cmid'] = 'Id number of the course module.';
$string['privacy:metadata:block_integrityadvocate:courseid'] = 'Id number of the course.';
$string['privacy:metadata:block_integrityadvocate:email'] = 'Your email address.';
$string['privacy:metadata:block_integrityadvocate:exit_fullscreen_count'] = 'Number of times the user exited fullscreen mode during the activity.';
$string['privacy:metadata:block_integrityadvocate:fullname'] = 'Your full name.';
$string['privacy:metadata:block_integrityadvocate:identification_card'] = 'A picture of your government-issued ID.';
$string['privacy:metadata:block_integrityadvocate:override_date'] = 'If applicable, the date the Integrity Advocate status is overridden by an instructor.';
$string['privacy:metadata:block_integrityadvocate:override_fullname'] = 'If applicable, the full name of the instrucor doing the override.';
$string['privacy:metadata:block_integrityadvocate:override_reason'] = 'If applicable, the instrucor reason for doing the override.';
$string['privacy:metadata:block_integrityadvocate:override_status'] = 'If applicable, the Integrity Advocate status applied by the override.';
$string['privacy:metadata:block_integrityadvocate:session_end'] = 'The time your proctoring session session ends.';
$string['privacy:metadata:block_integrityadvocate:session_start'] = 'The time your proctoring session session starts.';
$string['privacy:metadata:block_integrityadvocate:tableexplanation'] = 'Integrity Advocate block information is stored here.';
$string['privacy:metadata:block_integrityadvocate:user_video'] = 'A video (with audio) recording of you completing an activity.';
$string['privacy:metadata:block_integrityadvocate:userid'] = 'Your database user id number.';
$string['process_integrityadvocate'] = 'Integrity Advocate - Process';
$string['proctorjs_load_failed'] = 'The Integrity Advocate proctoring module failed to load - contact your instructor for assistance.';
$string['progress'] = '# proctor sessions';
$string['resubmit_link'] = 'Resubmit your ID';
$string['session_end'] = 'End';
$string['session_flags'] = 'Flags';
$string['session_overridedate'] = 'Override time';
$string['session_overridename'] = 'Overrider';
$string['session_overridereason'] = 'Override reason';
$string['session_overridestatus'] = 'Overrides original status';
$string['session_start'] = 'Start';
$string['session_status'] = 'Status';
$string['shortname'] = 'Short course name';
$string['showallinfo'] = 'Show all info';
$string['status_in_progress'] = 'In progress';
$string['status_invalid_id'] = 'Invalid (ID)';
$string['status_invalid_override'] = 'Invalid';
$string['status_invalid_rules'] = 'Invalid (Rules)';
$string['status_notstarted'] = 'Not started';
$string['status_valid'] = 'Valid';
$string['studentmessage'] = 'This page uses the Integrity Advocate proctoring service.<br /><a href="https://www.integrityadvocate.com/privacy-policy-for-end-users" target="_blank">Privacy</a><br /><a href="https://support.integrityadvocate.com/" target="_blank">Support</a>';
$string['submitted'] = 'Submitted';
$string['time_expected'] = 'Expected';
