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
 * Strings for component 'wooclap', language 'en', version '4.0'.
 *
 * @package     wooclap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskeyid'] = 'Platform Id (accessKeyId)';
$string['accesskeyid-description'] = 'Access key id used to communicate with Wooclap. Should start with \'ak.\'.';
$string['baseurl'] = 'Base URL';
$string['baseurl-description'] = 'This is for debugging or testing only. Only change this value at the request of the Wooclap support team.';
$string['consent-screen:agree'] = 'I agree';
$string['consent-screen:description'] = '<b>Wooclap</b> makes students play an active role in their learning experience.';
$string['consent-screen:disagree'] = 'I disagree';
$string['consent-screen:explanation'] = 'In order for some features to work, such as sending a personalised report at the end of a session, Wooclap is asking for your email address. It will never be used for marketing purposes. Click "I agree" to share your email address with Wooclap, or "I disagree" to continue without the extended features.';
$string['customcompletion'] = 'Completion state updated only by Wooclap';
$string['customcompletiongroup'] = 'Wooclap custom completion';
$string['error-auth-nosession'] = 'Missing session in authentication';
$string['error-callback-is-not-url'] = 'Callback parameter is not a valid URL';
$string['error-couldnotauth'] = 'Could not get user or course during authentication';
$string['error-couldnotloadevents'] = 'Could not load user\'s Wooclap events';
$string['error-couldnotperformv3upgradestep1'] = 'Could not perform Step 1 of the V3 Upgrade. Make sure that the accesskeyid, the baseurl and the secretaccesskey are configured in the plugin settings.';
$string['error-couldnotperformv3upgradestep2'] = 'Could not perform Step 2 of the V3 Upgrade';
$string['error-couldnotredirect'] = 'Could not redirect';
$string['error-couldnotupdatereport'] = 'Could not update report';
$string['error-invalid-callback-url'] = 'The callback URL provided does not match the baseurl domain name defined in the settings.';
$string['error-invalidjoinurl'] = 'Invalid join URL';
$string['error-invalidtoken'] = 'Invalid token';
$string['error-missingparameters'] = 'Missing parameters';
$string['error-noeventid'] = 'Could not determine event id';
$string['error-reportdeprecated'] = 'report_wooclap.php is deprecated. Use report_wooclap_v3.php instead.';
$string['modulename'] = 'Wooclap';
$string['modulename_help'] = 'This module provides a Wooclap interactive platform integration to Moodle';
$string['modulenameplural'] = 'Wooclap';
$string['modulenamepluralformatted'] = 'List of Wooclap activities';
$string['nowooclap'] = 'There are no Wooclap instances';
$string['pingNOTOK'] = 'The connection could not be established with Wooclap. Please check your settings.';
$string['pingOK'] = 'Connection established with Wooclap';
$string['pluginadministration'] = 'Wooclap administration';
$string['pluginname'] = 'Wooclap';
$string['privacy:metadata:wooclap_server'] = 'In order to integrate with Wooclap, user data needs to be exchanged.';
$string['privacy:metadata:wooclap_server:userid'] = 'The user id is sent from Moodle to allow you to access your data on Wooclap.';
$string['quiz'] = 'Import a Moodle quiz';
$string['secretaccesskey'] = 'API Key (secretAccessKey)';
$string['secretaccesskey-description'] = 'Secret access key used to communicate with Wooclap. Should start with \'sk.\'.';
$string['showconsentscreen'] = 'Show consent screen?';
$string['showconsentscreen-description'] = 'If active, Wooclap will ask participants for their consent before collecting their email address.';
$string['testconnection'] = 'Test Connection';
$string['warn-missing-config-during-upgrade-to-v3'] = 'In order to run the migration, the accesskeyid, the baseurl and the secretaccesskey should be configured in the settings. Skipping the migration for now: you can run it later via the cli/v3_upgrade.php script. Note: if you want to use the plugin, this migration is required.';
$string['wooclap:addinstance'] = 'Add a Wooclap activity to a course';
$string['wooclap:view'] = 'Access a Wooclap activity';
$string['wooclapeventid'] = 'Duplicate a Wooclap event';
$string['wooclapintro'] = 'Description';
$string['wooclapname'] = 'Name';
$string['wooclapsettings'] = 'Settings';
