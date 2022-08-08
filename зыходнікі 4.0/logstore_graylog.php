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
 * Strings for component 'logstore_graylog', language 'en', version '4.0'.
 *
 * @package     logstore_graylog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['background'] = 'Background';
$string['hostname'] = 'Graylog Input Hostname';
$string['lastran'] = 'Last ran';
$string['mode'] = 'Export mode';
$string['never'] = 'Never';
$string['nodestatus'] = 'Graylog Node Processing Status';
$string['pluginname'] = 'Graylog Logstore';
$string['pluginname_desc'] = 'A logstore plugin to ship logs to Graylog or any other GELF compatible logstores.';
$string['port'] = 'Input Port';
$string['progress'] = 'Progress';
$string['realtime'] = 'Realtime';
$string['reporttitle'] = 'Graylog Logstore Status';
$string['repstatus'] = 'Moodle->Graylog Status';
$string['taskexport'] = 'Export to Graylog';
$string['tcp'] = 'GELF TCP';
$string['tcptimeout'] = 'TCP Connection Timeout';
$string['tcptimeout_desc'] = 'Used only for TCP Transports. Seconds to wait for a TCP connection to be established before timing out. If using TCP transport in realtime mode, consider setting this to a low value so that when Graylog is not reachable, user experience is not affected severely.';
$string['transport'] = 'Input Transport Type';
$string['udp'] = 'GELF UDP';
