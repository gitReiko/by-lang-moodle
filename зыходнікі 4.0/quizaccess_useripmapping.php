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
 * Strings for component 'quizaccess_useripmapping', language 'en', version '4.0'.
 *
 * @package     quizaccess_useripmapping
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrules'] = 'Access rules';
$string['cancel'] = 'Cancel';
$string['confirm'] = 'Confirm mapping';
$string['csvdelimiter'] = 'CSV delimiter';
$string['editmapping'] = 'Edit user-IP mapping';
$string['encoding'] = 'Encoding';
$string['file'] = 'File';
$string['idnumber'] = 'User ID';
$string['importmapping'] = 'Import user-IP mappings';
$string['ipmismatchmessage1'] = 'You are being assigned : <b>';
$string['ipmismatchmessage2'] = '</b> IP Address to attempt the quiz and this computer\'s IP address does not match with the assigned one.';
$string['ipnotassignedmessage'] = 'You have not been assigned any IP address to attempt this quiz,please contact your
instructor to get it assigned in order to attempt this quiz.';
$string['notrequired'] = 'No';
$string['pluginname'] = 'User-IP Mapping quiz access rule';
$string['rowpreviewnum'] = 'Preview rows';
$string['subnetwrong'] = 'This computer\'s IP Address does not match with the assigned IP Address';
$string['uploadmappings'] = 'Upload mapping';
$string['uploadmappings_help'] = 'User-IP mapping should be uploaded via a CSV file.
The format of the file is as follows:
* First line is:username,ip
* Each following line contains one record containing the username and mapped IP address
* The field values are separated by a comma (or other delimiters)';
$string['uploadmappingspreview'] = 'Upload mappings preview';
$string['useripmapping'] = 'User-IP mapping';
$string['useripmappingrequired'] = 'Enable user-IP mapping';
$string['useripmappingrequired_help'] = 'If you enable this option, users will be able to attempt this quiz only from the
specific IP address mapped against their name. On enabling this,user-IP mapping can be managed in the quiz administration block.
If allow unmapped is checked,users who have not been mapped any IP will also be able to attempt the quiz';
$string['useripmappingrequiredoption'] = 'Yes';
$string['username'] = 'User name';
$string['viewthelist'] = 'View';
