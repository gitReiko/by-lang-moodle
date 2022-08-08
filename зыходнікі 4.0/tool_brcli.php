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
 * Strings for component 'tool_brcli', language 'en', version '4.0'.
 *
 * @package     tool_brcli
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['directoryerror'] = 'Error: Destination directory does not exists or not writable!';
$string['helpoptionbck'] = 'Perform backup of the courses of a specific category.

Options:
--categoryid=INTEGER        Category ID for backup.
--destination=STRING        Path where to store backup file.
-h, --help                  Print out this help.

Example:
    sudo -u www-data /usr/bin/php admin/tool/brcli/backup.php --categoryid=1 --destination=/moodle/backup/';
$string['helpoptionres'] = 'Restore all backup files belong to a specific folder.

Options:
--categoryid=INTEGER        Category ID where the backup must be restored.
--source=STRING             Path where the backup files (.mbz) are.
-h, --help                  Print out this help.

Example:
    sudo -u www-data /usr/bin/php admin/tool/brcli/restore.php --categoryid=1 --source=/moodle/backup/';
$string['invalidbackupfile'] = 'Invalid backup file: {$a}';
$string['noadminaccount'] = 'Error: No admin account was found!';
$string['nocategory'] = 'Error: No category was found!';
$string['operationdone'] = 'Done!';
$string['performingbck'] = 'Performing backup of the {$a} course...';
$string['performingres'] = 'Restoring backup of the {$a} course...';
$string['pluginname'] = 'Backup and Restore Command-Line Interface';
$string['unknowoption'] = 'Unknow option: {$a}';
