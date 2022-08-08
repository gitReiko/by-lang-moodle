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
 * Strings for component 'local_sitenotice', language 'en', version '4.0'.
 *
 * @package     local_sitenotice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['booleanformat:false'] = 'No';
$string['booleanformat:true'] = 'Yes';
$string['button:accept'] = 'Accept';
$string['button:close'] = 'Close';
$string['cachedef_enabled_notices'] = 'A list of enabled notices';
$string['cachedef_notice_view'] = 'A list of viewed notices';
$string['confirmation:deletenotice'] = 'Do you really want to delete the notice "{$a}"';
$string['event:acknowledge'] = 'acknowledge';
$string['event:create'] = 'create';
$string['event:delete'] = 'delete';
$string['event:disable'] = 'disable';
$string['event:dismiss'] = 'dismiss';
$string['event:enable'] = 'enable';
$string['event:reset'] = 'reset';
$string['event:timecreated'] = 'Time';
$string['event:update'] = 'update';
$string['modal:acceptbtntooltip'] = 'Please tick the above check box.';
$string['modal:checkboxtext'] = 'I have read and understand the notice (closing this notice will log you off this site).';
$string['notice:activefrom'] = 'Active from';
$string['notice:activefrom_help'] = 'The time and date from which the message will be active .';
$string['notice:cohort'] = 'Cohort';
$string['notice:cohort:all'] = 'All users';
$string['notice:content'] = 'Content';
$string['notice:create'] = 'Create new notice';
$string['notice:delete'] = 'Delete notice';
$string['notice:disable'] = 'Disable notice';
$string['notice:enable'] = 'Enable notice';
$string['notice:expiry'] = 'Expiry';
$string['notice:expiry_help'] = 'The time and date the messages expires and will not be shown to users anymore.';
$string['notice:forcelogout'] = 'Force logout';
$string['notice:forcelogout_help'] = 'If enabled, the user will be logged out after closing the notice. This setting does not affect the site administrator.';
$string['notice:hlinkcount'] = 'Hyperlink counts';
$string['notice:info'] = 'Notice information';
$string['notice:notice'] = 'Notice';
$string['notice:perpetual'] = 'Is perpetual';
$string['notice:perpetual_help'] = 'When set to yes, the notice will always be displayed (unless disabled). If set to no, a date and time range for the notice must be specified';
$string['notice:redirectmsg'] = 'Required Course not completed. Not allowed to submit assignment';
$string['notice:report'] = 'View report';
$string['notice:reqack'] = 'Requires acknowledgement';
$string['notice:reqack_help'] = 'If enabled, the user will need to accept the notice before they can continue to use the LMS site.
If the user does not accept the notice, he/she will be logged out of the site.';
$string['notice:reqcourse'] = 'Requires course completion';
$string['notice:reqcourse_help'] = 'If selected, the user will see the notice till the course is completed.';
$string['notice:reset'] = 'Reset notice';
$string['notice:resetinterval'] = 'Reset every';
$string['notice:resetinterval_help'] = 'The notice will be displayed to user again once the specified period elapses.';
$string['notice:timemodified'] = 'Time modified';
$string['notice:title'] = 'Title';
$string['notice:view'] = 'View notice';
$string['notification:noack'] = 'There is no acknowledgment for this notice';
$string['notification:nodeleteallowed'] = 'Notice deletion is not allowed';
$string['notification:nodis'] = 'There is no dismission for this notice';
$string['notification:noticedoesnotexist'] = 'The notice does not exist';
$string['notification:noupdateallowed'] = 'Notice update is not allowed';
$string['pluginname'] = 'Site notice';
$string['privacy:metadata:firstname'] = 'First name';
$string['privacy:metadata:idnumber'] = 'ID number';
$string['privacy:metadata:lastname'] = 'Last name';
$string['privacy:metadata:local_sitenotice_ack'] = 'Notice acknowledgement';
$string['privacy:metadata:local_sitenotice_hlinks_his'] = 'Hyperlink tracking';
$string['privacy:metadata:local_sitenotice_lastview'] = 'Notice last view';
$string['privacy:metadata:userid'] = 'User ID';
$string['privacy:metadata:username'] = 'Username';
$string['report:acknowledge_desc'] = 'List of users who acknowledged the notice.';
$string['report:acknowledged'] = 'notice_acknowledged_{$a}';
$string['report:button:ack'] = 'Notice acknowledgement report';
$string['report:button:dis'] = 'Notice dismiss report';
$string['report:dismissed'] = 'notice_dismissed_{$a}';
$string['report:dismissed_desc'] = 'List of users who dismissed the notice.';
$string['report:timecreated_server'] = 'Server time';
$string['report:timecreated_spreadsheet'] = 'Spreadsheet timestamp';
$string['report:timeformat:sortable'] = '%Y-%m-%d %H:%M:%S';
$string['setting:allow_delete'] = 'Allow notice deletion';
$string['setting:allow_deletedesc'] = 'Allow notice to be deleted';
$string['setting:allow_update'] = 'Allow notice update';
$string['setting:allow_updatedesc'] = 'Allow notice to be updated';
$string['setting:cleanup_deleted_notice'] = 'Clean up info related to the deleted notice';
$string['setting:cleanup_deleted_noticedesc'] = 'Requires "Allow notice deletion".
If enabled, other details related to the notice being deleted, such as hyperlinks, hyperlinks history, acknowledgement,
user last view will also be deleted';
$string['setting:enabled'] = 'Enabled';
$string['setting:enableddesc'] = 'Enable site notice';
$string['setting:managenotice'] = 'Manage notice';
$string['setting:settings'] = 'Settings';
$string['sitenotice:manage'] = 'Manage site notice';
$string['timeformat:resetinterval'] = '%a day(s), %h hour(s), %i minute(s) and %s second(s)';
