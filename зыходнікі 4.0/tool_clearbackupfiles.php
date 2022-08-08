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
 * Strings for component 'tool_clearbackupfiles', language 'en', version '4.0'.
 *
 * @package     tool_clearbackupfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcompletedlog'] = 'During this operation {$a->filecount} course backup files of total size {$a->filesize} were deleted.';
$string['backupremovedlog'] = 'Course backup file {$a->filename} of size {$a->filesize} was deleted.';
$string['clearbackupcompleted'] = 'Clear backup completed';
$string['coursebackupremoved'] = 'Course backup deleted';
$string['filedeletedempty'] = 'There are no backup files to delete.';
$string['filedeletedfooter'] = 'In total {$a->filecount} backup files were deleted and {$a->filesize} of server space was cleared.';
$string['filedeletedheader'] = 'The course backup files deleted during this operation are as follows:';
$string['filename'] = 'File name';
$string['filesize'] = 'File size';
$string['pluginname'] = 'Clear backup files';
$string['warningalert'] = 'Are you sure you want to continue?';
$string['warningmsg'] = 'Please note, clearing of backup files is an irreversible process, you will not be able to restore deleted backup files.';
