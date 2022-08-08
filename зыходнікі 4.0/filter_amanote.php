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
 * Strings for component 'filter_amanote', language 'en', version '4.0'.
 *
 * @package     filter_amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymous'] = 'Anonymous';
$string['anonymous_help'] = 'With this option, users are anonymous in Amanote and no authentication is required. However, the collaboration and podcast features will no longer be available. Finally, to activate this feature you must enable the saving in the private files and add an activation key.';
$string['autosaveperiod'] = 'Auto-save period';
$string['autosaveperiod_help'] = 'Configure the period of time in minutes between automatic saves (min.: 1, max.: 30). Setting the period to 0 means no auto-save.';
$string['downloadnotes'] = 'Download annotated file';
$string['filtername'] = 'Amanote';
$string['importantinformationdescription'] = 'In order for the module to work properly, please check that the following requirements are met on your Moodle site:

1. Amanote filter is enabled (Site administration > Plugins > Filters > Manage filters)

2. Web services are enabled (Site administration > Advanced feature)

3. *Moodle mobile web service* is enabled (Site administration > Plugins > Web services > External services)

4. REST protocol is activated (Site administration > Plugins > Web services > Manage protocols)

5. Capability *webservice/rest:use* is allowed for *authenticated users* (Site administration > Users > Permissions > Define Roles > Authenticated Users > Manage roles)';
$string['importantinformationheading'] = 'Important installation information';
$string['key'] = 'Activation key';
$string['key_help'] = 'This key is required for advanced features such as Podcast Creator.';
$string['openanalytics'] = 'Open Learning Analytics';
$string['openinamanote'] = 'Open in Amanote';
$string['openpodcast'] = 'Open Podcast Creator';
$string['openwithbutton'] = 'Open with button';
$string['openwithbutton_help'] = 'When disabled, the resource is opened in Amanote when the user clicks on the resource\'s link. When enabled, it instead displays a button next to the resource to open it in Amanote and preserves Moodle\'s default behavior when the user clicks on the resource. Enable this option if you do not want the PDF to be downloadable.';
$string['pluginadministration'] = 'Amanote module administration';
$string['privacy:metadata'] = 'In order to integrate with Amanote, some user data need to be sent to the Amanote client application (remote system).';
$string['privacy:metadata:access_token'] = 'The user\'s access token is required to save the notes in the Moodle\'s private files space.';
$string['privacy:metadata:access_token_expiration'] = 'The access token\'s expiration is sent to prevent the user to use the app with an expired token.';
$string['privacy:metadata:email'] = 'The user\'s email is sent to the remote system to allow a better user experience (note sharing, etc.).';
$string['privacy:metadata:fullname'] = 'The user\'s full name is sent to the remote system to allow a better user experience.';
$string['privacy:metadata:subsystem:corefiles'] = 'Files (PDF, AMA) are stored using Moodle\'s file system.';
$string['privacy:metadata:userid'] = 'The userid is sent from Moodle to Amanote in order to speed up the authentication process.';
$string['saveinprivate'] = 'Save notes in private files';
$string['saveinprivate_help'] = 'Save the annotated file in the private files of the user. This will allow the user to get back its notes the next time he opens the annotatable file in Amanote.';
$string['target'] = 'Target';
$string['target_help'] = 'Select the location where the user will be redirected to annotate the resource.';
$string['target_inamanote'] = 'Amanote site (best user experience)';
$string['target_inmoodle'] = 'Embedded in Moodle';
$string['target_inmoodlefullscreen'] = 'Moodle in full screen';
$string['teacher'] = 'Teacher';
