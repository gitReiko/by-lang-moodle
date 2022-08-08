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
 * Strings for component 'onlyoffice', language 'en', version '4.0'.
 *
 * @package     onlyoffice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedformats'] = 'Allowed formats';
$string['allowedformats_desc'] = '';
$string['docserverunreachable'] = 'ONLYOFFICE Document Server cannot be reached. Please contact admin.';
$string['documentpermissions'] = 'Document permissions';
$string['documentserversecret'] = 'Document Server Secret';
$string['documentserversecret_desc'] = 'The secret is used to generate the token (an encrypted signature) in the browser for the document editor opening and calling the methods and the requests to the document command service and document conversion service. The token prevents the substitution of important parameters in ONLYOFFICE Document Server requests.<br /> Refer to <a href="https://api.onlyoffice.com/editors/signature/" target="__blank">https://api.onlyoffice.com/editors/signature/</a> for information on how to edit the configuration file on the document server.';
$string['documentserverurl'] = 'Document Editing Service Address';
$string['documentserverurl_desc'] = 'The Document Editing Service Address specifies the address of the server with the document services installed. Please replace \'https://documentserver.url\' above with the correct server address';
$string['download'] = 'Document can be downloaded';
$string['download_desc'] = 'Allow documents to be downloaded via the ONLYOFFICE editor app';
$string['download_help'] = 'If this is off, documents will not be downloadable in the ONLYOFFICE editor app. Note, users with <strong>course:manageactivities</strong> capability are always able to download documents via the app';
$string['modulename'] = 'ONLYOFFICE document';
$string['modulename_help'] = 'The ONLYOFFICE module enables the users to edit office documents stored locally in Moodle using ONLYOFFICE Document Server, allows multiple users to collaborate in real time and to save back those changes to Moodle';
$string['modulenameplural'] = 'ONLYOFFICE documents';
$string['onlyoffice:addinstance'] = 'Add a new ONLYOFFICE document activity';
$string['onlyoffice:view'] = 'View ONLYOFFICE document activity';
$string['onlyofficeactivityicon'] = 'ONLYOFFICE icon';
$string['onlyofficename'] = 'Activity Name';
$string['pluginadministration'] = 'ONLYOFFICE document activity administration';
$string['pluginname'] = 'ONLYOFFICE document';
$string['print'] = 'Document can be printed';
$string['print_desc'] = 'Allow documents to be printed via the ONLYOFFICE editor app';
$string['print_help'] = 'If this is off, documents will not be printable via the ONLYOFFICE editor app. Note, users with <strong>course:manageactivities</strong> capability are always able to print documents via the app';
$string['printintro'] = 'Print intro text';
$string['printintroexplain'] = '';
$string['privacy:metadata'] = 'The ONLYOFFICE activity plugin does not store any user data.';
$string['privacy:metadata:core_files'] = 'ONLYOFFICE document activity stores documents which have been collaboratively edited with other users.';
$string['privacy:metadata:onlyoffice'] = 'A hash is used when communicating with the ONLYOFFICE document editing service.';
$string['privacy:metadata:onlyoffice:course'] = 'Course ONLYOFFICE activity belongs to.';
$string['privacy:metadata:onlyoffice:intro'] = 'General introduction of the ONLYOFFICE activity.';
$string['privacy:metadata:onlyoffice:introformat'] = 'Format of the ONLYOFFICE activity intro field (MOODLE, HTML, MARKDOWN...).';
$string['privacy:metadata:onlyoffice:name'] = 'The name of the ONLYOFFICE activity.';
$string['privacy:metadata:onlyoffice:userid'] = 'The userid is one of the values used when calculating the hash used for communicating with the ONLYOFFICE document editing service. The actual userid is not sent to the document editing service.';
$string['returntodocument'] = 'Return to course page.';
$string['selectfile'] = 'Select file';
