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
 * Strings for component 'repository_nextcloud', language 'en', version '4.0'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Internal and external';
$string['cannotconnect'] = 'The user could not be authenticated. Please log in and then upload the file.';
$string['chooseissuer'] = 'Issuer';
$string['chooseissuer_help'] = 'To add a new issuer, go to Site administration / Server / OAuth 2 services.';
$string['configplugin'] = 'Nextcloud repository configuration';
$string['configuration_exception'] = 'An error in the configuration of the OAuth 2 client occurred: {$a}';
$string['contactadminwith'] = 'The requested action could not be executed. If this happens repeatedly, please contact the site administrator with the following additional information:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'The requested file could not be moved in the {$a} folder.';
$string['defaultreturntype'] = 'Default return type';
$string['endpointnotdefined'] = 'Endpoint {$a} not defined.';
$string['external'] = 'External (only links stored in Moodle)';
$string['externalpubliclinkwarning'] = 'Warning: This file will become public.';
$string['filenotaccessed'] = 'The requested file could not be accessed. Please check whether you have chosen a valid file and you are authenticated with the right account.';
$string['fileoptions'] = 'The types and defaults for returned files is configurable here. Note that all files linked externally will be updated so that the owner is the Moodle system account.';
$string['foldername'] = 'Name of folder created in Nextcloud users\' private space that holds all access-controlled links.';
$string['foldername_help'] = 'To ensure that users find files shared with them, shares are saved into a specific folder.

This setting determines the name of the folder. It is recommended to choose a name associated with your Moodle instance.';
$string['internal'] = 'Internal (files stored in Moodle)';
$string['invalidresponse'] = 'Invalid server response.';
$string['issuervalidation_invalid'] = 'Currently the {$a} issuer is active, however it does not implement all necessary endpoints. The repository will not work.';
$string['issuervalidation_valid'] = 'Currently the {$a} issuer is active.';
$string['issuervalidation_without'] = 'You have not yet selected a Nextcloud server as the OAuth 2 issuer.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'View Nextcloud';
$string['no_right_issuers'] = 'None of the existing issuers implement all required endpoints. Please register an appropriate issuer.';
$string['noclientconnection'] = 'The OAuth clients could not be connected.';
$string['notauthorized'] = 'You are not authorised to execute this request. Please ensure you are authenticated with the correct account.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">OAuth 2 services configuration</a>';
$string['pathnotcreated'] = 'Folder path {$a} could not be created in the system account.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud repository';
$string['privacy:metadata'] = 'The Nextcloud repository plugin neither stores any personal data nor transmits user data to the remote system.';
$string['request_exception'] = 'A request to {$a->instance} has failed. {$a->errormessage}';
$string['requestnotexecuted'] = 'The request could not be executed. If this happens repeatedly, please contact the site administrator.';
$string['right_issuers'] = 'The following issuers implement the required endpoints: <br> {$a}';
$string['supportedreturntypes'] = 'Supported files';
