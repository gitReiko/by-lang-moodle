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
 * Strings for component 'local_syslogger', language 'en', version '4.0'.
 *
 * @package     local_syslogger
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enabled'] = 'Enabled';
$string['enabled_desc'] = 'Enable log duplication to syslog using the Linux logger command';
$string['path'] = 'logger Path';
$string['path_desc'] = 'The full path to the Linux logger binary.';
$string['pluginname'] = 'Syslogger';
$string['syslog_priority'] = 'Syslog Priority';
$string['syslog_priority_desc'] = 'The syslog priority argument to pass to the Linux logger command - should be for the form syslog_facility.syslog_priority, e.g. local7.info';
$string['syslog_tag'] = 'Syslog Tag';
$string['syslog_tag_desc'] = 'The syslog tag to pass to the Linux logger command - should be alphanumeric (including _ and -)';
$string['syslogger'] = 'Syslogger';
