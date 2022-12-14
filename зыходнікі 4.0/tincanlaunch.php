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
 * Strings for component 'tincanlaunch', language 'en', version '4.0'.
 *
 * @package     tincanlaunch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apCreationFailed'] = 'Failed to create Watershed Activity Provider.';
$string['badarchive'] = 'You must provide a valid zip file';
$string['badimsmanifestlocation'] = 'A tincan.xml file was found but it was not in the root of your zip file, please re-package your course';
$string['badmanifest'] = 'Some manifest errors: see errors log';
$string['behaviorheading'] = 'Module behavior';
$string['checkcompletion'] = 'Check Completion';
$string['completionexpiry'] = 'Expiry';
$string['completionexpirygroup'] = 'Completion Expires After (days)';
$string['completionexpirygroup_help'] = 'If checked, when looking for completion Moodle will only look at data stored in the LRS in the previous X days. It will unset completion for learners who had previously completed but whose completion has now expired.';
$string['completionverb'] = 'Verb';
$string['completionverbgroup'] = 'Track completion by verb';
$string['completionverbgroup_help'] = 'Moodle will look for statements where the actor is the current user, the object is the specified activity id and the verb is the one set here. If it finds a matching statement, the activity will be marked complete.';
$string['eventactivitycompleted'] = 'Activity completed';
$string['eventactivitylaunched'] = 'Activity launched';
$string['expirecredentials'] = 'Expire credentials';
$string['idmissing'] = 'You must specify a course_module ID or an instance ID';
$string['lrsdefaults'] = 'LRS Default Settings';
$string['lrsheading'] = 'LRS settings';
$string['lrssettingdescription'] = 'By default, this activity uses the global LRS settings found in Site administration > Plugins > Activity modules > Tin Can Launch Link. To change the settings for this specific activity, select Unlock Defaults.';
$string['modulename'] = 'Tin Can Launch Link';
$string['modulename_help'] = 'A plug in for Moodle that allows the launch of Tin Can (xAPI) content which is then tracked to a separate LRS.';
$string['modulenameplural'] = 'Tin Can Launch Links';
$string['nomanifest'] = 'Incorrect file package - missing tincan.xml';
$string['overridedefaults'] = 'Unlock Defaults';
$string['overridedefaults_help'] = 'Allows activity to have different LRS settings than the site-wide, default LRS settings.';
$string['pluginadministration'] = 'Tin Can Launch Link administration';
$string['pluginname'] = 'Tin Can Launch Link';
$string['tincanactivityid'] = 'Activity ID';
$string['tincanactivityid_help'] = 'The identifying IRI for the primary activity being launched.';
$string['tincanlaunch'] = 'Tin Can Launch Link';
$string['tincanlaunch:addinstance'] = 'Add a new Tin Can (xAPI) activity to a course';
$string['tincanlaunch_attempt'] = 'Start New Registration';
$string['tincanlaunch_completed'] = 'Experience complete!';
$string['tincanlaunch_notavailable'] = 'The Learning Record Store is not available. Please contact a system administrator.

If you are the system administrator, go to Site admin / Development / Debugging and set Debug messages to DEVELOPER. Set it back to NONE or MINIMAL once the error details have been recorded.';
$string['tincanlaunch_progress'] = 'Attempt in progress.';
$string['tincanlaunch_regidempty'] = 'Registration id not found. Please close this window.';
$string['tincanlaunchcustomacchp'] = 'Custom account homePage';
$string['tincanlaunchcustomacchp_default'] = '';
$string['tincanlaunchcustomacchp_help'] = 'If entered, Moodle will use this homePage in conjunction with the ID number user profile field to identify the learner.
If the ID number is not entered for a learner, they will instead be identified by email or Moodle ID number.
Note: If a learner\'s id changes, they will lose access to registrations associated with former ids and completion data may be reset. Reports in your LRS may also be affected.';
$string['tincanlaunchlrsauthentication'] = 'LRS integration';
$string['tincanlaunchlrsauthentication_help'] = 'Use additional integration features to create new authentication credentials for each launch for supported LRSs.';
$string['tincanlaunchlrsauthentication_option_0'] = 'None';
$string['tincanlaunchlrsauthentication_option_1'] = 'Watershed';
$string['tincanlaunchlrsauthentication_option_2'] = 'Learning Locker 1';
$string['tincanlaunchlrsauthentication_watershedhelp'] = 'Note: for Watershed integration, the Activity Provider does not require API access enabled.';
$string['tincanlaunchlrsauthentication_watershedhelp_label'] = 'Watershed integration';
$string['tincanlaunchlrsduration'] = 'Duration';
$string['tincanlaunchlrsduration_default'] = '9000';
$string['tincanlaunchlrsduration_help'] = 'Used with \'LRS integrated basic authentication\'. Requests the LRS to keep credentials valid for this number of minutes.';
$string['tincanlaunchlrsendpoint'] = 'Endpoint';
$string['tincanlaunchlrsendpoint_default'] = '';
$string['tincanlaunchlrsendpoint_help'] = 'The LRS endpoint (e.g. http://lrs.example.com/endpoint/). Must include trailing forward slash.';
$string['tincanlaunchlrsfieldset'] = 'Default values for TinCan Launch Link activity settings';
$string['tincanlaunchlrsfieldset_help'] = 'These are site-wide, default values used when creating a new activity. Each activity has the ability to override and provide alternative values.';
$string['tincanlaunchlrslogin'] = 'Basic Login';
$string['tincanlaunchlrslogin_default'] = '';
$string['tincanlaunchlrslogin_help'] = 'Your LRS login key.';
$string['tincanlaunchlrspass'] = 'Basic Password';
$string['tincanlaunchlrspass_default'] = '';
$string['tincanlaunchlrspass_help'] = 'Your LRS password (secret).';
$string['tincanlaunchname'] = 'Launch link name';
$string['tincanlaunchname_help'] = 'The name of the launch link as it will appear to the user.';
$string['tincanlaunchurl'] = 'Launch URL';
$string['tincanlaunchurl_help'] = 'The base URL of the Tin Can activity you want to launch (e.g. http://example.com/content/index.html).';
$string['tincanlaunchuseactoremail'] = 'Identify by email';
$string['tincanlaunchuseactoremail_help'] = 'If selected, learners will be identified by their email address if they have one recorded in Moodle.';
$string['tincanlaunchviewfirstlaunched'] = 'First launched';
$string['tincanlaunchviewlastlaunched'] = 'Last launched';
$string['tincanlaunchviewlaunchlink'] = 'launch';
$string['tincanlaunchviewlaunchlinkheader'] = 'Launch link';
$string['tincanmultipleregs'] = 'Allow multiple registrations.';
$string['tincanmultipleregs_help'] = 'If selected, allow the learner to start more than one registration for the activity. Learners can always return to any registrations they have started, even if this setting is unchecked.';
$string['tincanpackage'] = 'Zip package';
$string['tincanpackage_help'] = 'If you have a packaged Tin Can course, you can upload it here. If you upload a package, the Launch URL and Activity ID fields above will be automatically populated when you save using data from the tincan.xml file contained in the zip. You can edit these settings at any time, but should not change the Activity ID (either directly or by file upload) unless you understand the consequences.';
$string['tincanpackagetext'] = 'You can populate the Launch URL and Activity ID settings directly, or by uploading a zip package containing a tincan.xml file. The launch url defined in the tincan.xml may point to other files in the zip package, or to an external URL. The Activity ID must always be a full URL (or other IRI).';
$string['tincanpackagetitle'] = 'Launch settings';
