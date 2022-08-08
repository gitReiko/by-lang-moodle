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
 * Strings for component 'local_changeloglib', language 'en', version '4.0'.
 *
 * @package     local_changeloglib
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deletion_backup_clean_task'] = 'Clean old backups';
$string['pluginname'] = 'Changelog Lib';
$string['settings_diff_available'] = '<p>The program diff was found and can be used to detect changes</p>';
$string['settings_diff_not_available'] = '<p>The program <code>diff</code> was not found at the given path. Please ask your server admin to install it and visit this page again. This message disappears if the tool is installed correctly.</p>';
$string['settings_diff_path'] = 'diff path';
$string['settings_diff_path_help'] = 'The path to the command line program diff. It is used to compare text documents.';
$string['settings_pdftotext_available'] = '<p>The program pdftotext was found and can be used to detect changes</p>';
$string['settings_pdftotext_not_available'] = '<p>The program <code>pdftotext</code> was not found at the given path. Please ask your server admin to run <code>apt-get install poppler-utils</code> and visit this page again. This message disappears if the tool is installed correctly.</p>';
$string['settings_pdftotext_path'] = 'pdftotext path';
$string['settings_pdftotext_path_help'] = 'The path to the command line program pdftotext. It is used to convert pdf documents before differences can be detected.';
$string['success'] = 'Success';
$string['warning'] = 'Warning';
