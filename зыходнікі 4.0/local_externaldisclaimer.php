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
 * Strings for component 'local_externaldisclaimer', language 'en', version '4.0'.
 *
 * @package     local_externaldisclaimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disclaimer'] = 'Disclaimer text';
$string['disclaimer_desc'] = 'Enter the text you wish to use for your disclaimer message.';
$string['enabled'] = 'Enabled';
$string['enabled_desc'] = 'Enable the External disclaimer plugin';
$string['external'] = 'External patterns';
$string['external_desc'] = 'Enter regular expression patterns for URLs that are internal but should still generate a disclaimer. This would typically be used for local pages that redirect to an external URL.';
$string['internal'] = 'Internal domains';
$string['internal_desc'] = 'Enter the domains that will count as internal, and thus not get a disclaimer. This should include your site\'s own domain(s) and any others in your network. One domain per line. http:// not required';
$string['pluginname'] = 'External disclaimer';
