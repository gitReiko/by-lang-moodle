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
 * Strings for component 'enrol_extendedguest', language 'en', version '4.0'.
 *
 * @package     enrol_extendedguest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authenticated_users'] = 'Allow guest access to authenticated users ?';
$string['extendedguest:config'] = 'Configure extended guest access instances';
$string['guestaccess_withoutpassword'] = 'Extended guest access';
$string['localnet'] = 'Allow guest access to local users ?';
$string['pluginname'] = 'Extended guest access';
$string['pluginname_desc'] = 'This plugin gives guest access to specific IP, networks or authentified users.';
$string['privacy:metadata'] = 'The Extended guest access plugin does not store any personal data.';
$string['settings_list_ip'] = 'Allowed IP list';
$string['settings_list_ip_helptext'] = 'Put every entry on one line. Valid entries are either full IP address (such as <b>192.168.10.1</b>) which matches a single host; or partial address (such as <b>192.168</b>) which matches any address starting with those numbers; or CIDR notation (such as <b>231.54.211.0/20</b>); or a range of IP addresses (such as <b>231.3.56.10-20</b>) where the range applies to the last part of the address. Text domain names (like \'example.com\') are not supported. Blank lines are ignored.';
$string['status'] = 'Enable extended guest access';
$string['status_desc'] = 'If you turn this on, extended guest access will be automatically enabled.';
