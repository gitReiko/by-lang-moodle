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
 * Strings for component 'wiziq', language 'en', version '4.0'.
 *
 * @package     wiziq
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_key'] = 'Access Key';
$string['access_key_desc'] = '<p style="color:red">Do not have WizIQ key. Get these <a href="https://www.wiziq.com/api/" target="_blank">here</a>.</p> This is required to authenticate user. We strongly recommend that you don\'t share or change these keys';
$string['allowed_content'] = '<b>Allowed Content Type</b>';
$string['assesstimefinish_help'] = 'End date of recurring series. Required only when class_occurrence parameter is not given.';
$string['attendance_report'] = '<b>Attendance Report</b>';
$string['attended_minutes'] = 'Attended Time';
$string['attendee_name'] = 'Attendee Name';
$string['attendence_file'] = 'Attendence List For Class';
$string['attendencereport'] = '<b>Attendance Report</b>';
$string['audio'] = 'Audio';
$string['available'] = 'Available';
$string['class_end_date'] = 'Class end date';
$string['class_final_req'] = 'Class Schedule Required';
$string['class_id'] = 'Class ID';
$string['class_occurrence'] = 'Class occurrence';
$string['class_occurrence_help'] = 'Number of recurring classes to schedule. Required only when class_end_date parameter is not given.';
$string['class_repeat_type'] = 'Select when class repeats';
$string['class_schedule'] = 'Class schedule';
$string['class_schedule_help'] = 'Number of recurring classes to schedule. Required only when class_end_date parameter is not given.';
$string['classnotheld'] = '';
$string['classtype'] = 'Permanent Class';
$string['classtype_help'] = 'A permanent class does not end unless you choose to end it . It can be display at any time.';
$string['classviewdetail'] = 'Details of class';
$string['classwithoutrec'] = 'Recording Not Opted';
$string['content_delete'] = 'Delete';
$string['contentfail'] = 'Failed';
$string['create_recording_false'] = 'No';
$string['create_recording_true'] = 'Yes';
$string['creating_dnld_rcd'] = 'Recording In Progress';
$string['creatingrecording'] = 'Creating Recording';
$string['datatempered'] = 'Data changed';
$string['date_time'] = 'Date-Time';
$string['days_of_week'] = 'Days Of Week';
$string['days_of_week_help'] = 'Days of week to schedule class';
$string['delete_class'] = '<b>Delete Class</b>';
$string['deleteconfirm'] = 'Are you sure to delete class';
$string['deleteconfirmcontent'] = 'Are you sure to delete';
$string['deletefromwiziq'] = 'Deleted from WizIQ';
$string['deleteheading'] = 'Delete';
$string['discription'] = 'Description About Class';
$string['dontrecord'] = 'No';
$string['download_file'] = 'User List For Class download';
$string['download_pagetitle'] = 'Download User Details';
$string['download_recording'] = '<b>Download-Recording</b>';
$string['dtime'] = 'Time';
$string['duration'] = 'Duration of class.';
$string['duration_error'] = 'Can only be number';
$string['duration_help'] = 'Duration of the class should be in minutes. Minimum duration is 30 minutes and maximum is 300 minutes. You can extend duration of the class from with-in the virtual class-room';
$string['duration_number'] = 'Must be a valid number';
$string['duration_req'] = 'Must enter a number';
$string['dusername'] = 'Username';
$string['editconfirm'] = 'Are you sure to edit class';
$string['entry_time'] = 'Entry Time';
$string['error_in_curl'] = 'Please enable curl extention in php.ini file.';
$string['error_in_downloadrec'] = 'There is some error in downloading the Recording.';
$string['error_in_fileext'] = 'Upload allowed file type';
$string['error_in_langread'] = 'Unable to read Language Xml.';
$string['error_in_languagexml'] = 'Check your Settings. Unable to read Language Xml';
$string['error_in_timeread'] = 'Unable to read Timezone Xml.';
$string['error_in_timezonexml'] = 'Check your Settings. Unable to read Timezone Xml';
$string['error_in_update'] = 'There was error while updating Your class.<br />Please Try Again.';
$string['errorcrtingfolder'] = 'Error in creating folder';
$string['errorinfileupload'] = 'Error in Uploading File';
$string['errorinservice'] = 'Unable to send request to Wiziq API check Wiziq Settings. Data shown not valid';
$string['errormsg'] = 'this is a schedule time error';
$string['errormsg_session_missing'] = 'Session Code missing Contact WizIQ support about this class';
$string['eventaddclassdesc'] = 'User with id \'%s\' added/updated the class with id \'%s\' belonging to the user with id \'%s\', the course module id \'%s\'.Error detail:\'%s\'';
$string['eventclassattendancedesc'] = 'User with id \'%s\' has viewed the atttendance classid \'%s\' belonging to the user
with id \'%s\', course module id \'%s\',Error detail:\'%s\'';
$string['eventclassesvieweddesc'] = 'User with id \'%s\' has viewed all classes \'%s\' belonging to the user with id \'%s\' for the wiziq with the course module id \'%s\',Error detail:\'%s\'';
$string['eventcontentadddesc'] = 'User with id \'%s\' has added the content id \'%s\' belonging to the user
with id \'%s\', course module id \'%s\',Error detail:\'%s\'';
$string['eventcontentdeletedesc'] = 'User with id \'%s\' has deleted the content id \'%s\' belonging to the user
with id \'%s\', course module id \'%s\',Error detail:\'%s\'';
$string['eventcontentdesc'] = 'User with id \'%s\' has viewed the content for course \'%s\' belonging to the user
with id \'%s\', course module id \'%s\',Error detail:\'%s\'';
$string['eventdeleteclassdesc'] = 'User with id \'%s\' deleted the class with id \'%s\' belonging to the user with id \'%s\', the course module id \'%s\'.Error detail:\'%s\'';
$string['eventfolderadddesc'] = 'User with id \'%s\' has added the folder for \'%s\' belonging to the user
with id \'%s\', course module id \'%s\',Error detail:\'%s\'';
$string['eventviewclassdesc'] = 'User with id \'%s\' has viewed the class with id \'%s\' belonging to the user with id \'%s\', the course module id \'%s\'.Error detail:\'%s\'';
$string['eventviewsessiondesc'] = 'User with id \'%s\' has viewed the class with sessioncode \'%s\' belonging to the user with id \'%s\', the course module id \'%s\'.Error detail:\'%s\'';
$string['eventwiziqaddclass'] = 'Add Class method';
$string['eventwiziqattendanceviewed'] = 'Wiziq Attendance Report Viewed';
$string['eventwiziqclassesviewed'] = 'Wiziq Classes Viewed';
$string['eventwiziqclassviewed'] = 'Wiziq Class Viewed';
$string['eventwiziqcontentdelete'] = 'Wiziq Content Deleted';
$string['eventwiziqcontnetadded'] = 'Wiziq Content Added';
$string['eventwiziqcontnetviewed'] = 'Wiziq Content Viewed';
$string['eventwiziqdeleteclass'] = 'Delete Class method';
$string['eventwiziqfolderadded'] = 'Wiziq Folder Added';
$string['eventwiziqupdateclass'] = 'Update Class method';
$string['exit_time'] = 'Exit Time';
$string['explaingeneralconfig'] = 'API Credentials:- Required for authentication';
$string['fetchdata_upgarde'] = 'Fetch Data Upgrade';
$string['folder_alrdy_exist'] = 'already exist at this level';
$string['foldernamestring'] = 'Folder name';
$string['generalconfig'] = 'General configuration';
$string['inprogress'] = 'Inprogress';
$string['join_class'] = '<b>Join Class</b>';
$string['language_name'] = 'Language in ClassRoom';
$string['launch_class'] = '<b>Launch Class</b>';
$string['links'] = 'Links';
$string['manage'] = 'Manage Class';
$string['manage_classes'] = 'Manage Classes';
$string['manage_classes_file'] = 'List Of Class For Course';
$string['manage_content'] = 'Manage Content';
$string['modulename'] = 'WizIQ Live Class';
$string['modulename_help'] = 'The wiziq module enables you to schedule a class. You can schedule online classes, give high impact presentations and watch class recordings with a single click from inside of Moodle';
$string['modulenameplural'] = 'Wiziq Classes';
$string['monthly_date'] = 'Monthly date';
$string['monthly_date_help'] = 'Monthly date to schedule class';
$string['name'] = 'Class title';
$string['nameheading'] = 'Name';
$string['namerequired'] = 'Please add class title';
$string['new_attendee'] = '<b>You are viewing the class for First Time</b>';
$string['no_delete_xml'] = 'No xml returned on deleting content';
$string['no_download_recording'] = '<b>Creating-Recording</b>';
$string['nocapability'] = 'Don\'t have capability';
$string['noerror'] = 'No';
$string['notknown'] = 'Not known';
$string['nowiziqs'] = 'No Wiziq class has been created in this course';
$string['parent_not_fould'] = 'Parent folder not found';
$string['per_page_classes'] = 'Classes Per Page';
$string['per_page_content'] = 'Content Per Page';
$string['perma_class'] = 'Perma Class';
$string['perma_class_type'] = 'Permanent Class';
$string['pluginadministration'] = 'wiziq administration';
$string['pluginname'] = 'wiziq';
$string['presenter'] = 'Presenter';
$string['presenter_email'] = 'Presenter Email';
$string['presenter_id'] = 'Select teacher';
$string['presenter_name'] = 'Teacher';
$string['presenter_required'] = 'Presenter required';
$string['recmsg'] = '<b>Recording will be available in sometime</b>';
$string['recnotcreatedyet'] = 'Download Recording not available yet';
$string['record'] = 'Yes';
$string['recording_link'] = 'Download Recording';
$string['recording_option'] = 'Record this class';
$string['recording_value'] = 'Recording opted';
$string['recordingtype'] = 'Recording Option';
$string['recordingtype_help'] = 'By default class scheduled is recorded class, if you do not wants to record class then select "No" option provided';
$string['recurring_class_type'] = 'Recurring Class';
$string['refresh_page'] = 'Click here to get latest status';
$string['schedule_class'] = 'Schedule Class';
$string['schedule_class_type'] = 'Time-based Class';
$string['schedule_for_now'] = 'Schedule for right now';
$string['schedule_for_now_help'] = 'Check it if you want to schedule class for current time';
$string['scheduleforother'] = 'Schedule for other';
$string['scheduleforother_help'] = 'By default class schedules for admin. By mark check in checkbox, you can schedule the class for your teachers aswell by selecting teachers from dropdown menu';
$string['scheduleforself'] = 'Schedule for Self';
$string['scheduleforself_help'] = 'Admin can update class to be schedule for himself';
$string['secretacesskey'] = 'Secret Access Key';
$string['secretacesskey_desc'] = '<p style="color:red">Do not have WizIQ key. Get these <a href="https://www.wiziq.com/api/" target="_blank">here</a>.</p> This is required to authenticate user. We strongly recommend that you don\'t share or change these keys';
$string['select_class_type'] = 'Date and Time';
$string['select_monthly_repeat_type'] = 'Select monthly repeat type';
$string['setting_discription'] = '<p>WiZiQ is an online learning and teaching platform that connects educators and students through its virtual classroom technology. WizIQ empowers anyone to deliver live classes, share presentations, PDFs, virtual whiteboards, voice, video, and even their desktops over the Internet, in real time, with only a web browser - No downloads or cumbersome client software required. Hand off audio-video, whiteboard, and desktop sharing controls to users to increase engagement or respond to questions posed via integrated chat.</p>

<p>WizIQ Virtual Classroom integrates with Moodle to create new capabilities for synchronous learning - all from within the LMS environment. Teachers can schedule and launch live sessions from within Moodle, via WizIQ virtual classroom. Scheduled sessions get listed automatically on the Moodle course calendar. Students can easily join their teachers’ live classroom sessions and learn in real-time.</p>

<p>Visit http://www.wiziq.com for information on Enterprise support</p>';
$string['specific_week'] = 'Specific Week';
$string['specific_week_help'] = 'Number of weeks after which class repeats .';
$string['status'] = 'Status';
$string['status_of_class'] = 'Class Status';
$string['subcontenterror'] = 'Delete inner content first';
$string['teacher_you'] = 'You';
$string['timezone_required'] = 'Timezone required';
$string['timezone_xml'] = 'Wiziq TimeZone xml';
$string['timezone_xml_desc'] = 'Description about Wiziq TimeZone xml';
$string['unable_to_create'] = 'Problem in creating folder';
$string['unable_to_delete'] = 'Problem in deleting content';
$string['unable_to_get_url'] = 'Url missing';
$string['update_class'] = '<b>Edit Class</b>';
$string['uploaderror'] = 'Error in uploading Content';
$string['vc_class_timezone'] = 'Timezone';
$string['vc_class_timezone_help'] = 'Select the time-zone for which you want to schedule the class';
$string['vc_language'] = 'Virtualclass language';
$string['vc_language_help'] = 'By default language in virtual class-room is En-US, you can change language by selecting language from dropdown menu';
$string['vc_language_xml'] = 'Language xml';
$string['vc_language_xml_desc'] = 'This allows you to choose from various supported languages of the virtual classroom. We strongly recommend that you don’t change this.';
$string['view_recording'] = '<b>View-Recording</b>';
$string['viewclassnotheld'] = 'Class not held';
$string['viewrec'] = 'View Recording';
$string['webserviceurl'] = 'Webservice URL';
$string['webserviceurl_desc'] = 'This web service is used to interact with WizIQ server for scheduling classes.';
$string['week'] = 'Week';
$string['wiziq'] = 'wiziq';
$string['wiziq:addinstance'] = 'Add a new wiziq. Only for Moodle 2.3';
$string['wiziq:view_attendance_report'] = 'Capability to view attendance report';
$string['wiziq:wiziq_content_upload'] = 'Capability to upload content';
$string['wiziq:wiziq_download_rec'] = 'Capability to download class recording';
$string['wiziq:wiziq_view_rec'] = 'Capability to view class recording';
$string['wiziq_attendancereport'] = 'Wiziq attendance report for';
$string['wiziq_attendence_file'] = 'wiziq_attendence_for_class';
$string['wiziq_class'] = 'Wiziq Class';
$string['wiziq_class_timezone'] = 'Time-Zone';
$string['wiziq_classes'] = 'Wiziq Classes';
$string['wiziq_classes_file'] = 'wiziq_listing_for_course';
$string['wiziq_content'] = 'Wiziq Content';
$string['wiziq_content_webservice'] = 'Content Webservice URL';
$string['wiziq_content_webservice_desc'] = 'This is used to upload content in the virtual classroom. We strongly recommend that you don’t change this.';
$string['wiziq_datetime'] = 'Date and time.';
$string['wiziq_datetime_help'] = 'Select the date and time for class. You can-not schedule class for past time. Don not add day-light saving time to this time';
$string['wiziq_download_file'] = 'wiziq_users_for_class';
$string['wiziq_duration'] = 'Duration (in Minutes)';
$string['wiziq_emailsetting'] = 'Enable Email Notification';
$string['wiziq_headtag'] = 'User Records';
$string['wiziq_recur_class_repeat_req'] = 'Class Repeat Frequency Required';
$string['wiziq_recur_class_repeat_type_help'] = 'Repeat type of class. Values can be from 1 to 5. 1 for daily(All 7 days), 2 for 6 days(Mon-Sat), 3 for 5 days(Mon-Fri), 4 for Weekly, 5 for Once every month';
$string['wiziq_recur_datetime_req'] = 'Start Time Required';
$string['wiziq_start_time'] = 'Timing of Class';
$string['wiziq_start_time_class'] = 'Start Time';
$string['wiziqclasssettings'] = 'Setting of Wiziq Class.';
$string['wiziqdatetimesetting'] = 'Set Timing of the Class.';
$string['wiziqfieldset'] = 'Custom example fieldset';
$string['wiziqname'] = 'Title';
$string['wiziqname_help'] = 'Enter the class title';
$string['wiziqrecurringclasssettings'] = 'Wiziq Recurring Class Settings';
$string['writing'] = 'Writing';
$string['wrongduration'] = 'Duration should be between 30 minutes to 300 minutes';
$string['wrongtime'] = 'Cannot schedule class for past time';
