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
 * Strings for component 'rocketchat', language 'en', version '4.0'.
 *
 * @package     rocketchat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apitoken'] = 'Rocket.Chat API token';
$string['apitoken_desc'] = 'Rocket.Chat API associated token';
$string['apiuser'] = 'Rocket.Chat API user';
$string['apiuser_desc'] = 'Rocket.Chat API user / Token mode : Rocket.Chat User Id';
$string['background_add_instance'] = 'Pass Rocket.Chat enrolments to background task while creating a new module instance';
$string['background_add_instance_desc'] = 'This will prevent waiting of the module creation page';
$string['background_enrolment_task'] = 'Pass user enrolment/unenrolments to remote Rocket.Chat as background tasks.';
$string['background_enrolment_task_desc'] = 'This is to solve performance issue while enrolling large amounts of users.</br>This will prevent the enroller to wait on course enrolment page while enrolling/unenrolling large amount of users.</br>Choice of enrol cohort and flatfile, if enabled, are strongly advised';
$string['background_restore'] = 'Pass Rocket.Chat enrolments to background task while dupplicating a rocket.chat modules';
$string['background_restore_desc'] = 'This will prevent waiting while dupplicating a Rocket.Chat module';
$string['background_synchronize'] = 'Pass Rocket.Chat enrolments to background task while synchronizing enrollees.';
$string['background_synchronize_desc'] = 'This occurs after a course or a Rocket.Chat module is restored from recyclebin,';
$string['background_user_update'] = 'Pass Rocket.Chat enrolments to background task while updating user informations such as activation/deactivation.';
$string['background_user_update_desc'] = 'Pass Rocket.Chat enrolments to background task while updating user informations such as activation/deactivation.';
$string['connection-success'] = 'Connection succesfully establish';
$string['connectiontestresult'] = 'Connection test result';
$string['create_user_account_if_not_exists'] = 'Create Rocket.Chat user account';
$string['create_user_account_if_not_exists_desc'] = 'While enrolling user, create Rocket.Chat corresponding user account(username), if it does not exist';
$string['datastransmittedtorc'] = 'data transmitted to Rocketchat';
$string['days'] = 'days';
$string['defaultmoderatorroles'] = 'Rocket.Chat moderators';
$string['defaultmoderatorroles_desc'] = 'Moodle roles in course that will be Rocket.Chat moderators';
$string['defaultuserroles'] = 'Rocket.Chat users.';
$string['defaultuserroles_desc'] = 'Moodle roles in course that will be Rocket.Chat users (with normal user rights)';
$string['description'] = 'Module interfacing Rockat.Chat and Moodle';
$string['details'] = 'Details';
$string['displaycurrent'] = 'Display in current window';
$string['displaynew'] = 'Display in new window';
$string['displaypopup'] = 'Display in popup window';
$string['displaysection'] = 'Display settings';
$string['displaytype'] = 'Display type';
$string['embedded_display_mode'] = 'Rocket.Chat embedded display mode';
$string['embedded_display_mode_desc'] = 'If checked, it will remove left panel on Rocket.Chat web interface (hidding other channels)';
$string['embedded_display_mode_setting'] = 'Rocket.Chat embedded display mode';
$string['embedded_display_mode_setting_desc'] = 'If checked, it will remove left panel on Rocket.Chat web interface (hidding other channels)';
$string['error'] = 'Error !';
$string['errorintestwhilegconnection'] = 'Error while testing connection';
$string['excludepinned'] = 'Exclude pinned messages';
$string['excludepinned_desc'] = 'If enabled, pinned messages are not deleted. For example, if you pinned a few messages with important links, they stay intact.';
$string['filesonly'] = 'Prune files only, keep messages';
$string['filesonly_desc'] = 'if enabled, messages are not be deleted, but files are; they are replaced by a simple File removed by automatic prune message. When used together with Exclude pinned messages, only unpinned files are deleted.';
$string['groupecreationerror'] = 'Error while creating Rocket.Chat remote group';
$string['groupnametoformat'] = 'Formatted group name';
$string['groupnametoformat_desc'] = 'String format {$a->parameter} is possible with the following parameters : moodleid, moodleshortname, moodlefullname, moduleid, modulemoodleid (unique whitin all your possible moodle), courseid, courseshortname, coursefullname';
$string['header_details'] = 'Details for module :';
$string['instanceurl'] = 'Rocket.Chat instance URL';
$string['instanceurl_desc'] = 'Rocket.Chat instance URL (ex: https://rocketchat.univ.fr)';
$string['joinrocketchat'] = 'Join Rocket.Chat session';
$string['limit_override'] = 'Retention time exceeded maximum setting of {$a}';
$string['maxage'] = 'Retention time value (maxAge) for the Rocket.Chat group';
$string['maxage_desc'] = 'If retention is enalbled, the following retention value will override Rocket.Chat server global one. WARNING : 0 will trigger regular deletion of messages : global Rocket.Chat retention value.';
$string['maxage_limit'] = 'Maximum retention time value (maxAge) for the Rocket.Chat group';
$string['maxage_limit_desc'] = 'Maximum retention time value (maxAge) for the Rocket.Chat group';
$string['mod/rocketchat:canactivateretentionpolicy'] = 'Can acivate local retention policy on Rocket.Chat group';
$string['mod/rocketchat:candefineadvancedretentionparamaters'] = 'Can override avanced Rocket.Chat local retention policy paramaters';
$string['moderatorroles'] = 'Moodle roles in course that will be Rocket.Chat moderators';
$string['modulename'] = 'Rocket.Chat';
$string['modulename_help'] = 'Adding this activity to a Moodle course will create a private channel in Rocket.Chat and push Moodle users associated to this activity as members of this newly created channel.

The list of members will then be kept up to date.

It will be possible to access to this Rocket.Chat channel directly from Moodle or through any Rocket.Chat client.

Module restrictions through avaibility  are not available at the moment.';
$string['modulename_link'] = 'mod/rocketchat';
$string['modulenameplural'] = 'Rocket.Chat instances';
$string['name'] = 'Instance name (in the course)';
$string['no'] = 'No';
$string['norocketchats'] = 'No Rocket.Chat module instances.';
$string['pluginadministration'] = 'Rocket.Chat administration';
$string['pluginname'] = 'Rocket.Chat';
$string['pluginname_admin'] = 'Rocketchat admin interface';
$string['popupheight'] = 'Pop-up height';
$string['popupwidth'] = 'Pop-up width';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server'] = 'Data transmitted to remote Rocket.Chat servers';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:email'] = 'User email';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:firstname'] = 'User firstname';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:lastname'] = 'User lastname';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:rocketchatids'] = 'Rocket.Chat remote private groups ids where user is enrolled in';
$string['privacy:metadata:mod_rocketchat:rocket_chat_server:username'] = 'User username';
$string['rcgrouperror'] = 'Remote Rocket.Chat group can\'t be retrieved. Please contact your system administrator. Error code {$a}.';
$string['recyclebin_patch'] = 'Is recyclebin moodle core patch installed?';
$string['recyclebin_patch_desc'] = 'the mod rocketchat recyclebin patch is a patch located in admin/tool/recyclebin/classes/course_bin.php file enabling to pass cmid and module instanceid to recyclebin item created event. It enables the deletion of remote Rocket.Chat groups';
$string['removeditem'] = 'removed messages on {$a->rocketchatid}';
$string['removemessages'] = 'Remove all messages';
$string['restapiroot'] = 'Rocket.Chat REST API root';
$string['restapiroot_desc'] = 'Rocket.Chat REST API root';
$string['retentionenabled'] = 'Message retention';
$string['retentionenabled_desc'] = 'Activate message retention';
$string['retentionfeature'] = 'Retention feature';
$string['retentionfeature_desc'] = 'Activate retention feature settings. Warning this Rocket.Chat feature will only be available from 3.10.3 version of Rocket.Chat server.';
$string['retentionsection'] = 'Message retention settings';
$string['rocketchat:addinstance'] = 'Add a Rocket.Chat instance';
$string['rocketchat:canactivateretentionpolicy'] = 'Can override retention policy activation on a Rocket.Chat instance';
$string['rocketchat:candefineadvancedretentionparamaters'] = 'Can override global override settings on a Rocket.Chat instance';
$string['rocketchat:candefineroles'] = 'Override role mapping through module instance definition';
$string['rocketchat:change_embedded_display_mode'] = 'Can change the display mode (embedded) of each module instance';
$string['rocketchat:view'] = 'View the Rocket.Chat module instances';
$string['rocketchat_nickname'] = '{$a->firstname} {$a->lastname}';
$string['rocketchat_synchronise_task'] = 'Synchronise all rocketchat rooms';
$string['rolessection'] = 'Roles definition settings';
$string['settings'] = 'Rocket.Chat plugin settings';
$string['testconnection'] = 'Test connection to Rocket.Chat';
$string['testconnectionfailure'] = 'Connection test require following settings :</br> instanceurl, restapiroot, apiuser and apitoken.</br>Please check that theses are all filled in.';
$string['testerrorcode'] = 'Error code : {$a}';
$string['testerrormessage'] = 'Error message :</br>{$a}';
$string['testtitle'] = 'Rocket.Chat connection test.';
$string['usernamehook'] = 'Activate username hook.';
$string['usernamehook_desc'] = 'By activating this option it will be possible to chang moodle username to fit Rocket.Chat username.</br>Create a hooklib.php file in the module rocketchat installation directory.</br>code a moodle_username_to_rocketchat function that will return the transformed moodle username to fit Rocket.Chat one.</br>hooklib-example.php is given as example.';
$string['userroles'] = 'Moodle roles in course that will be Rocket.Chat users (with normal user rights)';
$string['validationgroupnameregex'] = 'Rocket.Chat group validation name regular expression to remove invalid characters';
$string['validationgroupnameregex_desc'] = 'Moodle will replace every unauthorized caracters by _. This regexp is the exact negation of the Rocket.Chat server one concerning group name validation';
$string['warningapiauthchanges'] = 'Warning, Rocket.Chat moodle plugin changes in auth methods, Only token auth is now taken into acount.\\nPlease change the Rocket.Chat plugin settings.';
$string['welcome_string'] = 'Rocketchat admin interface';
$string['yes'] = 'Yes';
