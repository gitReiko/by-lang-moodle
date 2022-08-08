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
 * Strings for component 'repository_owncloud', language 'en', version '4.0'.
 *
 * @package     repository_owncloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Internal and external';
$string['cannotconnect'] = 'The user could not be authenticated, please log in and then upload the file.';
$string['chooseissuer'] = 'Issuer';
$string['chooseissuer_help'] = 'To add a new issuer visit the admin OAuth 2 services page. <br>
For additional help with the OAuth 2 API please refer to the Moodle documentation.';
$string['configplugin'] = 'ownCloud configuration';
$string['configuration_exception'] = 'An error in the configuration of the OAuth 2 client occurred: {$a}';
$string['confirmmigration'] = 'Are you sure you want to migrate all configuration and files to the Nextcloud repository? The Nextcloud repository must be installed for files to continue working as before. Warning: This action cannot be undone!';
$string['contactadminwith'] = 'The requested action could not be executed. In case this happens frequently please contact the site administrator with the following additional information:<br>"<i>{$a}</i>"';
$string['couldnotmove'] = 'The requested file could not be moved in the {$a} folder.';
$string['defaultreturntype'] = 'Default return type';
$string['external'] = 'External (only links stored in Moodle)';
$string['filenotaccessed'] = 'The requested file could not be accessed. Please check whether you have chosen a valid file and you are authenticated with the right account.';
$string['fileoptions'] = 'The types and defaults for returned files is configurable here. Note that all files linked externally will be updated so that the owner is the Moodle system account.';
$string['foldername'] = 'Name of folder created in ownCloud users\' private space that holds all access controlled links';
$string['foldername_help'] = 'To assure users find files shared with them, shares are saved into a specific folder. <br>
This setting determines the name of the folder. It is recommended to chose a name associated with your Moodle instance.';
$string['internal'] = 'Internal (files stored in Moodle)';
$string['issuervalidation_invalid'] = 'Currently the {$a} issuer is active, however it does not implement all necessary endpoints. The repository will not work.';
$string['issuervalidation_valid'] = 'Currently the {$a} issuer is active.';
$string['issuervalidation_without'] = 'You have not selected an ownCloud server as the OAuth 2 issuer yet.';
$string['migration'] = 'Migrate repository';
$string['migrationexplanation'] = 'Starting with Moodle 3.6, the ownCloud repository is integrated into Moodle and is now called Nextcloud repository. It caters for both ownCloud and Nextcloud. As a consequence, this plugin is not maintained anymore. Please migrate files and configuration to the newer repository plugin using the following option.';
$string['migrationlink'] = 'Start migration';
$string['no_right_issuers'] = 'None of the existing issuers implement all required endpoints. Please register an appropriate issuer.';
$string['notauthorized'] = 'You are not authorized to execute the demanded request. Please ensure you are authenticated with the right account.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">OAuth 2 services configuration</a>';
$string['owncloud'] = 'ownCloud';
$string['owncloud:view'] = 'View ownCloud';
$string['owncloudfilesmigrated'] = 'All configuration and files have been migrated to the Nextcloud repository. The ownCloud repository plugin can be deleted safely.';
$string['owncloudfilesnotmigrated'] = 'An error occurred when trying to migrate all configuration and files to the Nextcloud repository.';
$string['pluginname'] = 'ownCloud';
$string['pluginname_help'] = 'ownCloud repository';
$string['privacy:metadata'] = 'The ownCloud repository plugin neither stores any personal data nor transmits user data to the remote system.';
$string['request_exception'] = 'A request to {$a->instance} has failed. {$a->errormessage}';
$string['requestnotexecuted'] = 'The request could not be executed. If this happens frequently please contact the course or site administrator.';
$string['right_issuers'] = 'The following issuers implement the required endpoints: <br> {$a}';
$string['supportedreturntypes'] = 'Supported files';
