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
 * Strings for component 'local_autogroup', language 'en', version '4.0'.
 *
 * @package     local_autogroup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addtonewcourses'] = 'Add to new courses';
$string['addtorestoredcourses'] = 'Add to restored courses';
$string['auth'] = 'Authentication Method';
$string['autogroup:managecourse'] = 'Manage autogroup settings on course';
$string['autogroupdescription'] = '"Auto Groups" will automatically assign your users to groups within a course based upon information within their user profile.';
$string['city'] = 'City';
$string['cleanupold'] = 'Clean up old groups?';
$string['confirmdelete'] = 'Are you sure you wish to remove this auto group set?';
$string['coursesettings'] = 'Auto Groups';
$string['coursesettingstitle'] = 'Auto Groups: {$a}';
$string['create'] = 'Create new group set:';
$string['defaultroles'] = 'Default Eligible Roles';
$string['defaults'] = 'Default Settings';
$string['department'] = 'Department';
$string['dontgroup'] = 'Don\'t group users';
$string['enabled'] = 'Enabled';
$string['events'] = 'Event triggers';
$string['events_help'] = 'Customise the events listened for by AutoGroup to improve site performance and tailor behaviour to your site\'s usage';
$string['general'] = 'General Configuration';
$string['institution'] = 'Institution';
$string['lang'] = 'Preferred Language';
$string['listenforgroupchanges'] = 'Groups';
$string['listenforgroupchanges_help'] = 'Listen for modifications to groups on a course. This can prevent issues caused by manual changes but will also slow down AutoGroup as it double checks its own actions. Previously configured as "Strict Enforcement".';
$string['listenforgroupmembership'] = 'Group Membership';
$string['listenforgroupmembership_help'] = 'Listen for changes to group membership. This can prevent issues caused by manual changes but will also slow down AutoGroup as it double checks its own actions. Previously configured as "Strict Enforcement".';
$string['listenforrolechanges'] = 'Role Assignment';
$string['listenforrolechanges_help'] = 'Listen for new role assignments or changes to role assignments on a course.';
$string['listenforuserpositionchanges'] = 'User Position';
$string['listenforuserpositionchanges_help'] = 'Listen for changes to a learners position, such as a new organisation or position assignment.';
$string['listenforuserprofilechanges'] = 'User Profiles';
$string['listenforuserprofilechanges_help'] = 'Listen for the changes to a user\'s profile which may impact group membership.';
$string['newsettingsintro'] = 'To start grouping your users, simply select a profile field from the "Group by" option below and click "Save Changes".';
$string['pluginname'] = 'Auto Group';
$string['preservemanual'] = 'Manually added Users are not removed when autogroups are updated.';
$string['set_groupby'] = 'Group by';
$string['set_groups'] = 'Number of groups';
$string['set_roles'] = 'Eligible Roles';
$string['set_type'] = 'Group set type';
$string['sort_module:profile_field'] = 'Profile field';
$string['sort_module:user_info_field'] = 'Custom profile field';
$string['updatesettingsintro'] = 'This course is already grouping users with {$a} rule set(s). You can either edit or remove these existing rule sets, or add a new one to the course.';
