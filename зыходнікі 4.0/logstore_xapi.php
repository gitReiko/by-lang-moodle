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
 * Strings for component 'logstore_xapi', language 'en', version '4.0'.
 *
 * @package     logstore_xapi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundmode'] = 'Send statements by scheduled task?';
$string['backgroundmode_desc'] = 'This will force Moodle to send the statements to the LRS in the background,
        via a cron task to avoid blocking page responses. This will make the process less close to real time, but will help to prevent unpredictable
        Moodle performance linked to the performance of the LRS.';
$string['endpoint'] = 'Your LRS endpoint for the xAPI';
$string['failed_events'] = 'event(s) have failed to send to the LRS.';
$string['filters'] = 'Filter logs';
$string['filters_help'] = 'Enable filters that INCLUDE some actions to be logged.';
$string['logguests'] = 'Log guest actions';
$string['maxbatchsize'] = 'Maximum batch size';
$string['maxbatchsize_desc'] = 'Statements are sent to the LRS in batches. This setting controls the maximum number of
        statements that will be sent in a single operation. Setting this to zero will cause all available statements to
        be sent at once, although this is not recommended.';
$string['mbox'] = 'Identify users by email';
$string['mbox_desc'] = 'Statements will identify users with their email (mbox) when this box is ticked.';
$string['password'] = 'Your LRS basic auth secret/password for the xAPI';
$string['pluginadministration'] = 'Logstore xAPI administration';
$string['pluginname'] = 'Logstore xAPI';
$string['privacy:metadata:logstore_xapi_failed_log'] = 'xAPI holding table for failed events';
$string['privacy:metadata:logstore_xapi_failed_log:userid'] = 'User Id of xAPI holding table for failed events';
$string['privacy:metadata:logstore_xapi_log'] = 'xAPI holding table for cron processing';
$string['privacy:metadata:logstore_xapi_log:userid'] = 'User Id of xAPI holding table for cron processing';
$string['resendfailedbatches'] = 'Resend failed batches';
$string['resendfailedbatches_desc'] = 'When processing events in batches, try re-sending events in smaller batches if a batch fails. If not selected, the whole batch will not be sent in the event of a failed event.';
$string['routes'] = 'Include actions with these routes';
$string['send_jisc_data'] = 'Adds JISC data to statements';
$string['send_jisc_data_desc'] = 'Statements will contain data required by JISC.';
$string['send_response_choices'] = 'Send response choices';
$string['send_response_choices_desc'] = 'Statements for multiple choice and sequencing question answers will be sent to the LRS with the correct response and potential choices';
$string['send_username'] = 'Identify users by id';
$string['send_username_desc'] = 'Statements will identify users with their username when this box is ticked, but only if identifying users by email is disabled.';
$string['sendidnumber'] = 'Send course and activity ID number';
$string['sendidnumber_desc'] = 'Statements will include the ID number (admin defined) for courses and activities in the object extensions';
$string['settings'] = 'General Settings';
$string['shortcourseid'] = 'Send short course name';
$string['shortcourseid_desc'] = 'Statements will contain the shortname for a course as a short course id extension';
$string['submit'] = 'Submit';
$string['successful_events'] = 'event(s) have been successfully processed.';
$string['taskemit'] = 'Emit records to LRS';
$string['username'] = 'Your LRS basic auth key/username for the xAPI';
$string['xapi'] = 'xAPI';
$string['xapifieldset'] = 'Custom example fieldset';
$string['xapisettingstitle'] = 'Logstore xAPI Settings';
