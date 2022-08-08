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
 * Strings for component 'helixmedia', language 'en', version '4.0'.
 *
 * @package     helixmedia
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignfeedltititle'] = 'Feedback for {$a}';
$string['assignsubltititle'] = 'Assignment Submission ({$a})';
$string['choosemedia_title'] = 'Choose Media';
$string['cleanup'] = 'Cleanup MEDIAL resource link ID table';
$string['consumer_key'] = 'MEDIAL Consumer Key';
$string['consumer_key2'] = 'The consumer key used for access to the MEDIAL LTI server.';
$string['forcedebug'] = 'Force LTI Launch Debug mode on';
$string['forcedebug_help'] = 'Allows you to debug LTI launch problems by showing the launch parameters.';
$string['helixmedia:addinstance'] = 'Add a new MEDIAL Resource';
$string['helixmedia:manage'] = 'Manage MEDIAL Resources';
$string['helixmedia:view'] = 'View MEDIAL Resources';
$string['helixmediasummary'] = 'Summary';
$string['helixmediatext'] = 'Activity name';
$string['hml_in_new_window'] = 'Open MEDIAL Resource';
$string['hml_in_new_window_message'] = 'If a new window doesn\'t open automatically containing the resource you wish to view, please use the link below to open it.';
$string['invalid_launch'] = 'Invalid parameters supplied for MEDIAL LTI launch request. Aborting.';
$string['invalid_mobile_token'] = 'The MoodleMobile access token for this video has expired, please use the menu you on the top right to refresh this activity.';
$string['launch_url'] = 'MEDIAL LTI Launch URL';
$string['launch_url2'] = 'Put the LTI launch URL of the MEDIAL server here. This should be a URL in the format: https://upload.mymedialserver.org/Lti/Launch';
$string['launcher'] = 'MEDIAL LTI Launcher';
$string['log_launch'] = 'MEDIAL LTI Launch';
$string['log_launchedit'] = 'MEDIAL LTI Edit Launch';
$string['log_launcheditnew'] = 'MEDIAL LTI New Instance Edit Launch';
$string['lti_settings_title'] = 'MEDIAL LTI Settings';
$string['mobiletokens'] = 'Clean up MEDIAL MoodleMobile access tokens';
$string['modal_delay'] = 'Video add dialog box close delay in seconds';
$string['modal_delay2'] = 'By default the modal dialogue box used to add videos will automatically close once the video has been chosen. You can optionally delay the closing of this dialogue by the number of seconds specified here, or disable the auto-close by setting this value to -1. Please note, this setting will have no effect on the modal dialogs used by the plugins for the TinyMCE and ATTO editors which will continue to remain open until closed by the user.';
$string['modulename'] = 'MEDIAL';
$string['modulename_help'] = 'The MEDIAL module provides a customised LTI based Moodle for the integration of MEDIAL server into Moodle';
$string['modulename_link'] = 'mod/helixmedia/view';
$string['modulenameplural'] = 'MEDIAL';
$string['modulenamepluralformatted'] = 'MEDIAL Instances';
$string['moodlemobile'] = 'MEDIAL videos embedded in other activity modules are not available via MoodleMobile. Please use the open in browser option to view this video.';
$string['nohelixmedias'] = 'No MEDIAL Instances found.';
$string['not_authorised'] = 'You are not authorised to perform this MEDIAL operation.';
$string['org_id'] = 'Organisation ID';
$string['org_id2'] = 'The organisation ID or name which will be sent to the MEDIAL server. The URL of your Moodle installation will be sent if this is left blank.';
$string['pleasewait'] = 'Media Loading - Please Wait';
$string['pleasewaitup'] = 'Loading - Please Wait';
$string['pluginadministration'] = 'MEDIAL';
$string['pluginname'] = 'MEDIAL';
$string['restrictdebug'] = 'Restrict the LTI debugging information to admin users.';
$string['restrictdebug_help'] = 'If forced LTI debugging is on, enabling this will restrict the forced debug mode to admins so that you can debug live systems without confusing users.';
$string['search:activity'] = 'MEDIAL Activity Videos';
$string['shared_secret'] = 'MEDIAL Shared Secret';
$string['shared_secret2'] = 'The shared secret used for comunications between Moodle and the MEDIAL server via LTI.';
$string['uploadedby'] = 'Video upload by {$a->name} on {$a->date}';
$string['version_check_fail'] = 'The MEDIAL server version could not be retrived. Please check the MEDIAL activity module is correctly configured.';
$string['version_check_message'] = 'This version of the MEDIAL plugin is reccomended for MEDIAL versions {$a->min} or better. You are using MEDIAL version {$a->actual}.';
$string['version_check_not_done'] = 'The MEDIAL activity has not been configured, version check skipped.';
$string['version_check_title'] = 'MEDIAL Version Check';
$string['version_check_upgrade'] = 'WARNING: You are recomended to upgrade your MEDIAL version for use with this plugin.';
