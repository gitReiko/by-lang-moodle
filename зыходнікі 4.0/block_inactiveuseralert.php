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
 * Strings for component 'block_inactiveuseralert', language 'en', version '4.0'.
 *
 * @package     block_inactiveuseralert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Activity';
$string['activityalerttemplate'] = 'Email template';
$string['activityalerttemplate_help'] = 'The following list of keywords can be used in your template:

{alink} : link to the activity (displays as the activity name)<br />
{clink} : link to the course (displays as the course fullname)<br />
{cfull} : the fullname of the course<br />
{cshort} : the shortname of the course<br />
{userfullname} : the user\'s fullname';
$string['addalert'] = 'Add alert';
$string['alert'] = 'Alert';
$string['alertdate'] = 'Alert {$a}';
$string['alertssent'] = 'Alerts sent';
$string['alerttemplate'] = 'Email template';
$string['cc'] = 'CC alerts';
$string['cc_help'] = 'If enabled, the course contacts will be CC\'d on all alerts sent.';
$string['configtemplateactivity'] = 'The default template used for new login alerts.';
$string['configtemplateactivitydefault'] = 'Hi {userfullname},

Looks like you haven\'t completed the activity \'{alink}\' in {clink} yet.';
$string['configtemplatelogin'] = 'The default template used for new login alerts.';
$string['configtemplatelogindefault'] = 'Hi {userfullname},

Looks like you haven\'t logged into {clink} yet.';
$string['configure'] = 'Configure';
$string['deleteconfirm'] = 'Are you sure you want to delete the alert for activity "{$a}"?';
$string['deleteconfirminvalidalert'] = 'Are you sure you want to delete this invalid alert?';
$string['enabled'] = 'Enabled';
$string['errorcoursecompletiondisabled'] = 'Course completion is currently disabled in this course, so no activity alerts will be triggered.';
$string['errorcoursemismatch'] = 'The alert you\'re trying to alter doesn\'t belong to this course.';
$string['errorearlierthanprevious'] = 'The selected date must be after the previous alert date.';
$string['errorinthepast'] = 'New alerts must be set in the future.';
$string['errornoactivitieswithcompletion'] = 'Your course doesn\'t have any activities with completion criteria setup yet.';
$string['inactiveuseralert:addinstance'] = 'Add a new inactive user alert block';
$string['invalidalert'] = 'Invalid alert';
$string['loginalerttemplate'] = 'Email template';
$string['loginalerttemplate_help'] = 'The following list of keywords can be used in your template:

{clink} : link to the course (displays as the course fullname)<br />
{cfull} : the fullname of the course<br />
{cshort} : the shortname of the course<br />
{userfullname} : the user\'s fullname';
$string['noalerts'] = 'No alerts have been configured.';
$string['nomoreactivities'] = 'No more activities can be configured with alerts. Either no activities have completion enabled, or all the ones that do have alerts setup already.';
$string['numbersent'] = '{$a} sent';
$string['pluginname'] = 'Inactive user alerts';
$string['reportname'] = 'Inactive user report';
$string['sendalertstask'] = 'Send inactive user alerts';
$string['studentsonly'] = 'Students only';
$string['studentsonly_help'] = 'Only users which hold the student role will be sent an activity/login notification.';
$string['subject'] = 'Inactive user alert';
$string['templateactivity'] = 'Default activity alert';
$string['templatelogin'] = 'Default login alert';
$string['type'] = 'Type';
$string['typeactivity'] = 'Activity alert';
$string['typelogin'] = 'Login alert';
$string['viewreport'] = 'View user access report';
