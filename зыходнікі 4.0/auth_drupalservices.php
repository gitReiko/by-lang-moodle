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
 * Strings for component 'auth_drupalservices', language 'en', version '4.0'.
 *
 * @package     auth_drupalservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_drupalservices_cohort_view'] = 'The path to the cohort view.';
$string['auth_drupalservices_cohort_view_key'] = 'Path to cohort view';
$string['auth_drupalservices_cohorts'] = 'Create cohorts by looking at a custom view on drupal.';
$string['auth_drupalservices_cohorts_key'] = 'Create cohorts';
$string['auth_drupalservices_host_uri'] = 'Hostname and path of the Drupal site you use for SSO. Include protocol (http:// or https://) and no trailing slash.';
$string['auth_drupalservices_host_uri_key'] = 'Drupal Website URL';
$string['auth_drupalservices_logout_drupal'] = 'This should normally be checked. If your drupal site is using the masquerade or devel switch user modules, you will want to disable this to allow for easier switching between users.';
$string['auth_drupalservices_logout_drupal_key'] = 'Log out of Drupal when Moodle Logout happens';
$string['auth_drupalservices_remote_pw'] = 'This is the remote user password.';
$string['auth_drupalservices_remote_pw_key'] = 'Remote user password';
$string['auth_drupalservices_remote_user'] = 'This is the drupal user used to get index of all users when syncing. Must be able to get unlimited indexes, so set this permission for this user. See docs.';
$string['auth_drupalservices_remote_user_key'] = 'Remote username';
$string['auth_drupalservicescantinsert'] = 'Moodle DB error. Cannot insert user: {$a}';
$string['auth_drupalservicescantupdate'] = 'Moodle DB error. Cannot update user: {$a}';
$string['auth_drupalservicescreateaccount'] = 'Unable to create Moodle account for user {$a}';
$string['auth_drupalservicesdeleteuser'] = 'Deleted user {$a->name} id {$a->id}';
$string['auth_drupalservicesdeleteusererror'] = 'Error deleting user {$a}';
$string['auth_drupalservicesdescription'] = 'This authentication plugin enables Single Sign-on (SSO) with Drupal. This module will look for a Drupal cookie that represents a valid, authenticated session, and will use it to create an authenticated Moodle session for the same user. The Drupal user will be synchronized with the corresponding user in Moodle. If the user does not yet exist in Moodle, it will be created. Drupal services must be installed and configured on drupal. Please read the README file for installation instructions.';
$string['auth_drupalservicesnorecords'] = 'The Drupal database has no user records!';
$string['auth_drupalservicesremove_user'] = 'Specify what to do with internal user accounts during mass synchronization when users were removed from Drupal. Only suspended users are automatically revived if they reappear in Drupal.';
$string['auth_drupalservicesremove_user_key'] = 'Removed Drupal User';
$string['auth_drupalservicessuspenduser'] = 'Suspended user {$a->name} id {$a->id}';
$string['auth_drupalservicessuspendusererror'] = 'Error suspending user {$a}';
$string['auth_drupalservicesupdateuser'] = 'Updated user {$a}';
$string['auth_drupalservicesuserstoremove'] = 'User entries to remove: {$a}';
$string['auth_drupalservicesuserstoupdate'] = 'User entries to update: {$a}';
$string['fieldmap'] = 'Drupal value for {$a}';
$string['pluginname'] = 'Drupal Services';
$string['servicesettings_header'] = 'Drupal Webservice Settings';
$string['servicesettings_header_info'] = 'The following settings tell Moodle how to reach the Drupal Site to establish SSO.';
$string['servicesettings_header_info_firsttime'] = 'This appears to be the first time this plugin is being configured. Moodle has attempted to automatically discover
  the correct SSO configuration. Please check that the Drupal Host URL is correct.';
$string['servicestatus_header'] = 'Drupal Service Status';
$string['servicestatus_header_info'] = 'The status of the Moodle/Drupal SSO connection is listed below';
$string['userfieldmap_header'] = 'User field mappings';
$string['userfieldmap_header_desc'] = 'The user field mappings correlate Moodle user profile fields with Drupal user profile fields. Theses will be updated when users first log in to moodle, and each time the moodle session refreshes. Should bulk user importing be configured and enabled below, Moodle user profiles will also be updated on the next sync run after they are changed.';
$string['userimport_header'] = 'User import/migration settings';
$string['userimport_header_desc'] = 'These settings apply to bulk importing users from Drupal to Moodle via the sync_users.php script. A user account must be created in Drupal that has the "Moodle Services" role associated with it. That users credentials need to be supplied below. Each user imported will have profile values that use the field mappings set in the previous section.';
