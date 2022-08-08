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
 * Strings for component 'tool_selfsignuphardlifecycle', language 'en', version '4.0'.
 *
 * @package     tool_selfsignuphardlifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['col_accountoverridden'] = 'Account periods overridden';
$string['col_accountstatus'] = 'Account status';
$string['col_auth'] = 'Authentication';
$string['col_nextstep'] = 'Next step';
$string['col_profile'] = 'User profile';
$string['col_timecreated'] = 'Account creation date';
$string['emptytable'] = 'There aren\'t any users who are currently covered by the hard user life cycle based on the tool configuration.';
$string['eventuserdeleted'] = 'User deleted';
$string['eventuserdeleted_desc'] = 'The user with the ID {$a->userid} has been deleted {$a->period} full days after the account creation date';
$string['eventuserdeletedoverridden_desc'] = 'The user with the ID {$a->userid} has been deleted based on an overridden deletion period';
$string['eventusersuspended'] = 'User suspended';
$string['eventusersuspended_desc'] = 'The user with the ID {$a->userid} has been suspended {$a->period} full days after the account creation date';
$string['eventusersuspendedoverridden_desc'] = 'The user with the ID {$a->userid} has been suspended based on an overridden suspension period';
$string['nextstep_deletioncomingup'] = 'Will be deleted on {$a->date}';
$string['nextstep_suspensioncomingup'] = 'Will be suspended on {$a->date}';
$string['nextstep_unknown'] = 'Unknown';
$string['pluginname'] = 'Hard life cycle for self-signup users';
$string['privacy:metadata'] = 'The hard life cycle for self-signup users plugin does not store any personal data.';
$string['profileedit'] = 'Edit';
$string['profileview'] = 'View';
$string['setting_authmethodsheading'] = 'Authentication methods';
$string['setting_coveredauth'] = 'Covered authentication methods';
$string['setting_coveredauth_desc'] = 'With this setting, you can configure which users are covered by this tool. If you select a particular authentication method, all users with this authentication method will become candidates for (suspension and) deletion. If you do not select a particular authentication method, all users with this authentication method will not be touched by this tool in any way.';
$string['setting_enableuseroverrides'] = 'Enable user overrides';
$string['setting_enableuseroverrides_desc'] = 'With this setting, you can allow the admin to override deletion and suspension dates for individual users.';
$string['setting_enableusersuspension'] = 'Enable user suspension before deletion';
$string['setting_enableusersuspension_desc'] = 'With this setting, you can configure the tool to suspend users before deleting them.';
$string['setting_userdeletionheading'] = 'User deletion';
$string['setting_userdeletionoverridefield'] = 'User deletion override profile field';
$string['setting_userdeletionoverridefield_desc'] = 'With this setting, you can configure the custom user profile field which will be used to override user deletion dates. Users who have this date profile field enabled and set will be deleted on the configured date and not based on the configured user deletion period.';
$string['setting_userdeletionperiod'] = 'User deletion period';
$string['setting_userdeletionperiod_desc'] = 'With this setting, you can configure the number of days after which a user will be deleted by the tool.';
$string['setting_userlifecyclestatic_desc'] = 'With this tool, users can be deleted (and optionally suspended) based on their account creation date. It is especially intended to get rid of users who have signed up themselves to Moodle based on a static schedule. The tool is quite simple and just acts on the user\'s account creation date. It does not consider if the user is still actively using his account or not. Furthermore, no notification emails are sent to the user before the account is suspended or deleted.';
$string['setting_useroverridesheading'] = 'User overrides';
$string['setting_useroverridesnofieldyet_desc'] = 'With this setting, you can configure the custom user profile field to be used for user overrides. There isn\'t any usable custom user profile field yet. Please go the <a href="{$a->url}">{$a->linktitle}</a> and create a {$a->fieldname} profile field first.';
$string['setting_useroverridesrelation_desc'] = 'Please note: Setting the \'User suspension override profile field\' setting to the same field than the \'User deletion override profile field\' setting is not prohibited by this admin setting interface. However such configurations are not really recommended as the behaviour of the tool might be somehow unexpected: Users will be suspended after the date which is set in the profile field and will not be deleted until the next run of the scheduled task. The same order applies when the admin sets the deletion date before the suspension date: The user is always first suspended and then deleted.';
$string['setting_userperiodscalc_desc'] = 'This period is calculated based the user\'s account creation date. The configured period is interpreted as full days. This means that the first, incomplete day when the user registers to Moodle, is not counted.';
$string['setting_userperiodsrelation_desc'] = 'Please note: Setting the \'User suspension period\' setting to the same or a greater value than the \'User deletion period\' setting is not prohibited by this admin setting interface. However such configurations are not really recommended as the behaviour of the tool might be somehow unexpected: Users will be suspended after the configured suspension period and will then be deleted directly at the subsequent run of the scheduled task.';
$string['setting_usersuspensionheading'] = 'User suspension';
$string['setting_usersuspensionoverridefield'] = 'User suspension override profile field';
$string['setting_usersuspensionoverridefield_desc'] = 'With this setting, you can configure the custom user profile field which will be used to override user suspension dates. Users who have this date profile field enabled and set will be suspended on the configured date and not based on the configured user suspension period.';
$string['setting_usersuspensionperiod'] = 'User suspension period';
$string['setting_usersuspensionperiod_desc'] = 'With this setting, you can configure the number of days after which a user will be suspended by the tool.';
$string['settingsuserlist'] = 'User list';
$string['status_active'] = 'Active';
$string['status_suspended'] = 'Suspended';
$string['status_unknown'] = 'Unknown';
$string['taskprocesslifecycle'] = 'Process life cycle for self-signup users';
