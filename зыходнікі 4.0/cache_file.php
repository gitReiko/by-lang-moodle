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
 * Strings for component 'cache_file', language 'en', version '4.0'.
 *
 * @package     cache_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Auto create directory';
$string['autocreate_help'] = 'If enabled the directory specified in path will be automatically created if it does not already exist.';
$string['path'] = 'Cache path';
$string['path_help'] = 'The directory that should be used to store files for this cache store. If left blank (default) a directory will be automatically created in the moodledata directory. This can be used to point a file store towards a directory on a better performing drive (such as one in memory).';
$string['pluginname'] = 'File cache';
$string['prescan'] = 'Prescan directory';
$string['prescan_help'] = 'If enabled the directory is scanned when the cache is first used and requests for files are first checked against the scan data. This can help if you have a slow file system and are finding that file operations are causing you a bottle neck.';
