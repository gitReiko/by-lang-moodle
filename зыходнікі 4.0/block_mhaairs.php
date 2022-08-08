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
 * Strings for component 'block_mhaairs', language 'en', version '4.0'.
 *
 * @package     block_mhaairs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminhelplabel'] = 'Admin documentation';
$string['availableservices'] = 'Available Services';
$string['baseaddresslabel'] = 'Service Address';
$string['block_mhaairs_get_completion'] = 'Returns course completion';
$string['block_mhaairs_get_completions'] = 'Returns course activities completions';
$string['blocknotconfig'] = 'The block requires further configuration. Please configure the block.';
$string['blocksettings'] = 'Block Settings';
$string['cachehelp'] = 'Help links';
$string['cacheservices'] = 'Services';
$string['connected_displaylabel'] = 'ConnectEd';
$string['conskeylabel'] = 'Consumer Key';
$string['coursenotconfig'] = 'The course requires further configuration. Please contact your site admin.';
$string['customernumberlabel'] = 'Customer Number';
$string['edit_prelabel'] = 'Links to Display';
$string['endpointurldesc'] = 'Specify the end point base url if different from the default.';
$string['endpointurllabel'] = 'End point url';
$string['error_invalid_course_param'] = 'Invalid course parameter passed!';
$string['error_no_course'] = 'Course does not exist!';
$string['error_no_course_completion'] = 'Completion is not enabled for this course!';
$string['error_no_system_completion'] = 'Completion is not enabled on this instance!';
$string['error_no_user'] = 'User does not exist!';
$string['error_notsecuressl'] = 'Error: Connection must be secured with SSL.';
$string['error_tokeninvalid'] = 'Error: Token is invalid.';
$string['get_completion_activity_compl_desc'] = 'Activity completion status';
$string['get_completion_activity_desc'] = 'Activity title';
$string['get_completion_activity_type_desc'] = 'Activity type';
$string['get_completion_completion_desc'] = 'Course Completion status';
$string['get_completion_course_desc'] = 'Course for which to get the completion status';
$string['get_completion_result_desc'] = 'get_completion resultset';
$string['get_completion_user_desc'] = 'User for which to get the completion status';
$string['get_completions_result_desc'] = 'get_completions resultset';
$string['gradelog'] = 'Grade exchange log';
$string['gradelogdesc'] = 'Log grade exchange raw data for debugging purporses.
Should be disabled on production sites. Log files are stored in moodledata directory [moodledata]/mhaairs.
Every individual web service request generates separate log file with filename format
mhaairs_year-month-day_hour-min-sec_randomkey.log';
$string['gradelogs'] = 'Grade exchange logs';
$string['instructorhelplabel'] = 'Instructor documentation';
$string['instructorrolesdesc'] = 'By default instructor roles are those whose archetype is editingteacher or teacher. If you wish to designate other roles as instructor roles, enter their short names separated by comma (e.g. faculty,lecturer).';
$string['instructorroleslabel'] = 'Instructor roles';
$string['json'] = 'JSON';
$string['linktype'] = 'Link Type';
$string['linktypelabel'] = 'Link type:';
$string['mhaairs'] = 'MH AAIRS';
$string['mhaairs:addinstance'] = 'Add a new McGraw-Hill AAIRS block';
$string['mhaairs:myaddinstance'] = 'Add an instance of McGraw-Hill AAIRS block to the my page.';
$string['mhaairs:viewadmindoc'] = 'View Administrator Documentation';
$string['mhaairs:viewteacherdoc'] = 'View Teacher Documentation';
$string['mhaairs_displayhelp'] = 'Help links';
$string['mhaairs_displayhelpdesc'] = 'Select this option if you wish help links to appear in the block appropriate to admin and teacher roles.';
$string['mhaairs_displaylabel'] = 'McGraw-Hill Campus';
$string['mhaairs_syncgradebook'] = 'Gradebook Sync';
$string['mhaairs_syncgradebookdesc'] = 'Gradebook Sync provides the ability to push scores from MH Campus directly to the Moodle gradebook. Note: If only Tegrity is enabled on your site, this is irrelevant.';
$string['nocachefound'] = 'No cache found';
$string['nogradelogs'] = 'There are no grade exchange logs.';
$string['nolinkdefined'] = 'No link type defined.';
$string['nolinktext'] = 'No link';
$string['noservicesmsg'] = 'Available Services have not yet been configured for this site. Please contact your site admin.';
$string['pluginname'] = 'McGraw-Hill AAIRS';
$string['privacy:metadata:coursecategory'] = 'The category of the course the user is accessing MHC from.';
$string['privacy:metadata:coursefullname'] = 'The fullname of the course the user is accessing MHC from.';
$string['privacy:metadata:courseid'] = 'The ID of the course the user is accessing MHC from.';
$string['privacy:metadata:courseidnumber'] = 'The ID number of the course the user is accessing MHC from.';
$string['privacy:metadata:courseshortname'] = 'The shortname of the course the user is accessing MHC from.';
$string['privacy:metadata:externalpurpose'] = 'The mhaairs plugin provides user information and context to MHC.';
$string['privacy:metadata:useremail'] = 'The email address of the user accessing MHC.';
$string['privacy:metadata:userfirstname'] = 'The firstname of the user accessing MHC.';
$string['privacy:metadata:userid'] = 'The ID of the user accessing MHC.';
$string['privacy:metadata:useridnumber'] = 'The ID number of the user accessing MHC.';
$string['privacy:metadata:userlastname'] = 'The lastname of the user accessing MHC.';
$string['privacy:metadata:username'] = 'The username of the user accessing MHC.';
$string['privacy:metadata:userrole'] = 'The role in the course for the user accessing MHC, normalized to MHC roles.';
$string['resetcaches'] = 'Reset caches';
$string['responseformat'] = 'Response format';
$string['secretlabel'] = 'Shared Secret';
$string['service_down_msg'] = 'One or more of the web services is currently down or your client access data are not correctly configured. Please contact McGraw-Hill help for further action.';
$string['services_desc'] = 'The services above will display as links in the MH AAIRS block. Select which system(s) should be available to courses on your site. The service(s) selected will appear as options in the block\'s instance settings.';
$string['services_displaylabel'] = 'Available Services';
$string['simple'] = 'Username/Password';
$string['sitenotconfig'] = 'The site requires further configuration. Please contact your site admin.';
$string['sslonlylabel'] = 'SSL Only';
$string['studentrolesdesc'] = 'By default student roles are those whose archetype is student. If you wish to designate other roles as instructor roles, enter their short names separated by comma (e.g. learner,trainee).';
$string['studentroleslabel'] = 'Student roles';
$string['tegrity_displaylabel'] = 'Tegrity Campus';
$string['token'] = 'Token';
$string['xml'] = 'XML';
