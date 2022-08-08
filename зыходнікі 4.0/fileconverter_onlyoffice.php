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
 * Strings for component 'fileconverter_onlyoffice', language 'en', version '4.0'.
 *
 * @package     fileconverter_onlyoffice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'ONLYOFFICE document converter';
$string['settings:internalmoodleurl'] = 'Internal Moodle URL';
$string['settings:internalmoodleurl_help'] = 'Optionally, specify the URL at which the ONLYOFFICE document server will be able to find Moodle (modified wwwroot). If left blank, it will use the normal wwwroot as usual. Typically, this setting does not need to be set, unless the wwwroot in the browser differs from that in the local network (which is usually the case in containerised setups).';
$string['settings:internaloodsurl'] = 'Internal ONLYOFFICE Document Server URL';
$string['settings:internaloodsurl_help'] = 'Specify the URL at which the ONLYOFFICE document server can be reached *by Moodle*. The URL is never resolved in the browser, only in CURL requests by Moodle, so it will be resolved only in  the local network.';
