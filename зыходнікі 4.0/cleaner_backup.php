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
 * Strings for component 'cleaner_backup', language 'en', version '4.0'.
 *
 * @package     cleaner_backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fastdelete'] = 'Fast delete';
$string['fastdelete_desc'] = 'Perform a fast delete. This will remove file references from the file table, but will not remove the actual files on disk. This is useful when the filesystem stores files in a remote location, or files are shared between environments.';
$string['pluginname'] = 'Delete backup files';
$string['privacy:metadata'] = 'The Delete backup files plugin does not store any personal data.';
