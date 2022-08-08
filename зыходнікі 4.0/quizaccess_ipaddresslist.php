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
 * Strings for component 'quizaccess_ipaddresslist', language 'en', version '4.0'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Add location';
$string['allowedsubnets'] = 'Allowed locations';
$string['allowedsubnets_help'] = 'Quiz access may be restricted to particular locations depending on user\'s IP address. List of locations and corresponding IP subnets is defined by site administrator. Select none to disable this location check.';
$string['editsubnet'] = 'Editing location';
$string['managesubnets'] = 'Locations management';
$string['pluginname'] = 'IP address list quiz access rule';
$string['privacy:metadata'] = 'This plugin does not store any personal data.';
$string['subnet'] = 'IP subnet';
$string['subnet_help'] = 'Specify comma-separated list of partial or full IP address numbers.

Examples:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'This quiz is only accessible from certain locations, and this computer is not on the allowed list.';
