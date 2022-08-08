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
 * Strings for component 'cleaner_orphaned_sitedata', language 'en', version '4.0'.
 *
 * @package     cleaner_orphaned_sitedata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deletebackups'] = 'Delete backups';
$string['deletebackupsdesc'] = 'Delete all backups (orphaned or not) from site data and the files table.';
$string['deletecachedfiles'] = 'Delete cached files';
$string['deletecachedfilesdesc'] = 'Delete all cached files.';
$string['deleteorphanedfiles'] = 'Delete orphaned files';
$string['deleteorphanedfilesdesc'] = 'Delete all orphaned files in site data that are no longer referenced in the database.';
$string['deletetmpfiles'] = 'Delete temporary files';
$string['deletetmpfilesdesc'] = 'Delete all temporary files.';
$string['errordeletingfile'] = 'ERROR\\n\\n*** Cound not delete: {\\$a}\\n\\n';
$string['pluginname'] = 'Cleanup orphaned sitedata';
$string['privacy:metadata'] = 'The cleaner orphaned sitedata plugin does not store any personal data.';
$string['willdeletebackups'] = 'Will delete {$a} backup file(s).';
$string['willdeleteorphanedfiles'] = 'Will delete orphaned file(s).';
$string['willdeletetemp'] = 'Will delete temporary files: {$a}';
$string['willpurgecache'] = 'Will purge the cache.';
$string['woulddeletebackups'] = 'Would delete {$a} backup file(s).';
$string['woulddeleteorphanedfiles'] = 'Would delete orphaned file(s).';
$string['woulddeletetemp'] = 'Would delete temporary files from: {$a}';
$string['wouldpurgecache'] = 'Would purge the cache.';
