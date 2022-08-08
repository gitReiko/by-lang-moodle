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
 * Strings for component 'vitero', language 'en', version '4.0'.
 *
 * @package     vitero
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminlogin'] = 'Log in to administration area';
$string['adminpassword'] = 'Administrator Password';
$string['adminpassword_desc'] = 'Password of the above user';
$string['adminusername'] = 'Administrator Username';
$string['adminusername_desc'] = 'Vitero username of user with permission to add sessions, users etc.';
$string['alreadyover'] = 'This appointment is already over.';
$string['appointmentfields'] = 'Appointment Fields';
$string['cannotcreatemeeting'] = 'Cannot create meeting';
$string['cannotcreateteam'] = 'Cannot create team';
$string['cannotobtainsessioncode'] = 'Cannot obtain session code';
$string['clickhereformeeting'] = 'Click here to enter the session';
$string['connectiontest'] = 'Connection Test';
$string['conntest_failed'] = 'Connection test failed.';
$string['customerid'] = 'Customer ID';
$string['customerid_desc'] = 'ID of the above customer in the Vitero system';
$string['customerlicense'] = 'Customer License';
$string['customerlicense_desc'] = 'Customer license';
$string['customername'] = 'Customer Name';
$string['customername_desc'] = 'Customer name';
$string['endbuffer'] = 'End Buffer (minutes)';
$string['endtime'] = 'End Time';
$string['errorcode'] = 'Vitero Error Code';
$string['errorcode1001'] = 'Session Code Does Not Exist';
$string['errorcode101'] = 'The Customer Doesn´t Exist In The System';
$string['errorcode102'] = 'The Shortname Of A New Customer Already Exists';
$string['errorcode103'] = 'The User Is Not Attached To The Customer';
$string['errorcode151'] = 'The Group Doesn´t Exist In The System';
$string['errorcode152'] = 'The Name And Customer Of A New Group Already Exists';
$string['errorcode153'] = 'The Relationship Between The User And The Group Doesn’T Exist';
$string['errorcode2'] = 'Unknown Error';
$string['errorcode3'] = 'Internal Error';
$string['errorcode302'] = 'Invalid List-Index';
$string['errorcode303'] = 'The Value Of An Attribute Is Not Valid';
$string['errorcode304'] = 'Invalid Time Zone';
$string['errorcode305'] = 'Invalid Locale';
$string['errorcode306'] = 'No Monitoring Module';
$string['errorcode4'] = 'Insufficient Rights';
$string['errorcode451'] = 'Filesize Exceeded The File You Try To Upload Is Too Large';
$string['errorcode452'] = 'Filetype Not Allowed';
$string['errorcode501'] = 'Booking Collision - the licence is exceeded (the new booking collides with existing bookings and the licence does not allow another booking in this time period)';
$string['errorcode502'] = 'Invalid Module Selection';
$string['errorcode505'] = 'Booking In The Past You Create A Booking In The Past';
$string['errorcode506'] = 'Booking Does Not Exist';
$string['errorcode507'] = 'Group is locked (event in progress), and the booking for this group can only be extended';
$string['errorcode508'] = 'No Rooms Available';
$string['errorcode51'] = 'Another User With This Name Already Exists';
$string['errorcode52'] = 'Another User With This Email Already Exists';
$string['errorcode53'] = 'The User Doesn´t Exist In The System';
$string['errorcode54'] = 'A User Must Be Attached To At Least One Customer';
$string['errorcode601'] = 'Node Not Found';
$string['errorcode703'] = 'Customer Expired';
$string['errorduplicate'] = 'Duplicating Vitero sessions is currently not supported. Please create a new session.';
$string['greaterstarttime'] = 'Start time cannot be greater than ending time';
$string['hostname'] = 'Host Name';
$string['hostname_desc'] = 'Host name, e.g.: http://www.example.com';
$string['missingcertificate'] = 'Missing certificate file: {$a}';
$string['modulename'] = 'Vitero';
$string['modulename_help'] = 'Use the vitero module to link Moodle and Vitero.';
$string['modulenameplural'] = 'Vitero Appointments';
$string['nologinhint'] = 'After the session ID is created you need to save the activity before you can reach the Vitero administration area. In the Vitero administration area you have the possibility to create folders and upload documents.

After saving you need to click on the „update” icon of the activity to move in this configuration dialog again. Then you find a button to click on here.';
$string['notstartedyet'] = 'This appointment has not started yet.';
$string['novmssessioncode'] = 'Could not obtain VMS session code. Please test connection';
$string['paststarttime'] = 'Start time cannot be in the present or past';
$string['pluginadministration'] = 'Vitero administration';
$string['pluginname'] = 'Vitero';
$string['port'] = 'Port';
$string['port_desc'] = 'Port (optional)';
$string['privacy:metadata:vitero_remusers'] = 'User details that were sent to the Vitero server';
$string['privacy:metadata:vitero_remusers:lastemail'] = 'The last email address sent to Vitero';
$string['privacy:metadata:vitero_remusers:lastfirstname'] = 'The last first name sent to Vitero';
$string['privacy:metadata:vitero_remusers:lastlastname'] = 'The last last name sent to Vitero';
$string['privacy:metadata:vitero_remusers:timecreated'] = 'The time the user details were first sent to Vitero';
$string['privacy:metadata:vitero_remusers:timeupdated'] = 'The time the user details were last sent to Vitero';
$string['privacy:metadata:vitero_remusers:userid'] = 'The ID of the Moodle user whose details have been sent to Vitero';
$string['privacy:metadata:vitero_remusers:viteroid'] = 'The ID of user account on the Vitero server';
$string['roomsize'] = 'Room Size';
$string['root'] = 'Vitero Root';
$string['root_desc'] = 'Root path of Vitero in the host (optional)';
$string['specifycoursemodule'] = 'You must specify a course_module ID or an instance ID.';
$string['startbuffer'] = 'Start Buffer (minutes)';
$string['starttime'] = 'Start Time';
$string['syncavatars'] = 'Synchronise Avatars';
$string['syncavatars_desc'] = 'Upload user avatars to Vitero. Will send user\'s avatar every time the user views the activity.';
$string['teamname'] = 'Team Name';
$string['testconnection'] = 'Test Connection (after saving)';
$string['vitero'] = 'Vitero';
$string['vitero:addinstance'] = 'Add Vitero Instance';
$string['vitero:participant'] = 'Vitero Participant';
$string['vitero:teamleader'] = 'Vitero Teamleader';
$string['viteroappointment'] = 'Vitero Appointment';
$string['viterofieldset'] = 'Custom example fieldset';
$string['viteroname'] = 'Vitero';
$string['viteroname_help'] = 'This is the content of the help tooltip associated with the viteroname field. Markdown syntax is supported.';
