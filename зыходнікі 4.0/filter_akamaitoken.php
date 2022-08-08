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
 * Strings for component 'filter_akamaitoken', language 'en', version '4.0'.
 *
 * @package     filter_akamaitoken
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addservice'] = 'Add streaming service';
$string['errordomain'] = 'Please specify valid domain name';
$string['errorkey'] = 'Please specify valid encryption key';
$string['filtername'] = 'Akamai Media Services tokenized stream protection';
$string['filtersettings'] = 'Filter settings';
$string['privacy:metadata'] = 'The Akamai Media Services Authorization Token stream protection plugin does not store any personal data.';
$string['restrictip'] = 'Restrict token to IP address';
$string['restrictipdesc'] = 'If enabled, token will be restricted to client IP address.';
$string['servicedomain'] = 'Streaming domain';
$string['servicedomain_help'] = 'Akamai Media Services streaming domain from which HLS media is served, e.g. example-lh.akamaihd.net or example-vh.akamaihd.net.';
$string['servicekey'] = 'Service key';
$string['servicekey_help'] = 'Encryption key required to produce EdgeAuth token for the stream. It must be hexadecimal digit string of even-length.';
$string['streams'] = 'Streams';
$string['streamsinstruction'] = 'You can specify unlimited number of streaming services. Each service requires domain and encryption key. In order to remove service from the list, set both key and domain to empty and save changes.';
$string['streamssettings'] = 'Streams settings';
$string['window'] = 'Validity time window';
$string['windowdesc'] = 'The number of seconds the token will be valid for.';
