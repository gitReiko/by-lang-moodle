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
 * Strings for component 'repository_panopto', language 'en', version '4.0'.
 *
 * @package     repository_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationkey'] = 'Identity Provider Application Key';
$string['applicationkeydesc'] = 'Application Key from Panopto Identity Providers settings, e.g. \'00000000-0000-0000-0000-000000000000\'.';
$string['bouncepageurl'] = 'Bounce page URL';
$string['bouncepageurldesc'] = 'In the Panopto Identity Providers Instance settings, set Bounce Page URL to {$a} in order to enable SSO.';
$string['bouncepageurlnotreadydesc'] = 'Visit this page after saving plugin configuration to look up Bounce Page URL you need to use in Panopto Identity Providers settings.';
$string['cachedef_folderstree'] = 'Panopto folders tree for the user.';
$string['configplugin'] = 'Panopto configuration';
$string['connectionsettings'] = 'Connection settings';
$string['created'] = 'Created';
$string['duration'] = 'Duration';
$string['errornosessionaccess'] = 'You do not have access rights to this session, this activity might have been added by the different staff member who has access to this video. You still can choose a different video and save, but you won\'t be able to revert to this one after that.';
$string['errorsessionnotfound'] = 'This session is not found on Panopto. It might have been deleted.';
$string['folderstreecachettl'] = 'Folders tree cache TTL';
$string['folderstreecachettldesc'] = 'Set duration in seconds when folders tree cache will be valid (300 seconds by default). This speeds up folders navigation in repository interface, but changes made remotely on Panopto (e.g. new folder created) will be reflected in the interface when local cache has expired. Setting to 0 will disable folders tree cache.';
$string['instancename'] = 'Identity Provider Instance Name';
$string['instancenamedesc'] = 'Instance name from Panopto Identity Providers settings.';
$string['panopto:view'] = 'View Panopto repository';
$string['password'] = 'Panopto API user password';
$string['passworddesc'] = 'Password for API user authentication.';
$string['pluginname'] = 'Panopto';
$string['pluginnotice'] = 'Notice, this repository plugin is designed to work with <a href="https://github.com/lucisgit/moodle-mod_panopto">Panopto Activity module</a> only. Please make sure you have mod_panopto installed. This repositiry can\'t be used outside mod_panopto at the moment.';
$string['serverhostname'] = 'Panopto server hostname';
$string['serverhostnamedesc'] = 'FQDN of your Panopto server, e.g. \'demo.hosted.panopto.com\'.';
$string['showorphanedsessions'] = 'Show orphaned sessions';
$string['showorphanedsessionsdesc'] = 'If ticked, Panopto repository root directory will contain all sessions user has access to, but does not have access to folder containing those sessions (otherwise they would be listed within folders as normal). Orphaned sessions are still remain searchable irrespective of this setting.';
$string['title'] = 'Title';
$string['userkey'] = 'Panopto API username';
$string['userkeydesc'] = 'User on the Panopto server to use for API calls, it needs to have Administrator rights.';
$string['videothumbnail'] = 'Video thumbnail';
$string['viewerurl'] = 'URL';
$string['viewonpanopto'] = 'View this video on Panopto';
