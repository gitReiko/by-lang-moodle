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
 * Strings for component 'block_metalink', language 'en', version '4.0'.
 *
 * @package     block_metalink
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocksettings'] = 'Block Settings';
$string['cantreadcsv'] = 'Unable to read CSV file';
$string['cantremoveold'] = 'Old cron file $a couldn\'t be removed. Please check file permissions.';
$string['childisparent'] = '{$a->child} is a parent of {$a->parent}, so cannot be added as its child.';
$string['childnotfound'] = 'Line {$a->line}: Child Course not found';
$string['cronfile'] = 'Location of file for automatic processing';
$string['cronfiledesc'] = 'If you enter a file location in here, it will be periodically
    checked for a file to process automatically.';
$string['cronmoved'] = '{$a->old} moved to {$a->new}';
$string['cronnotmoved'] = '{$a->old} couldn\'t be moved to {$a->new}. Please check folder permissions.';
$string['cronprocessed'] = 'Processed file location';
$string['csv'] = 'CSV File';
$string['csv_help'] = 'The file should be in CSV (comma-seperated value) format. Each assignment should
    be on 1 row, with 3 columns: operation (add or del), parent course idnumber, child course idnumber).
    For example, to add child course with idnumber 1234 to parent course with idnumber 4321, the line would
    read: add, 4321, 1234';
$string['csvfile'] = 'Select CSV file';
$string['invalidop'] = 'Line {$a->line}: Invalid operation {$a->op}';
$string['keepprocessed'] = 'Keep Processed files';
$string['keepprocessedfor'] = 'Days to keep processed files for';
$string['keepprocessedlong'] = 'If checked, processed files will be stored in the location below.';
$string['metadisabled'] = 'The Metacourse enrolment plugin is disabled. Enable it to use this block.';
$string['metalink:addinstance'] = 'Add a new MetaLink block';
$string['metalink:myaddinstance'] = 'Add a new MetaLink block to My Home Page';
$string['metalink:use'] = 'Use MetaLink block';
$string['metalink_log'] = 'Flatfile MetaLink Log';
$string['musthavefile'] = 'You must select a file';
$string['nocronfile'] = 'Cron file doesn\'t exist.';
$string['nodir'] = '{$a} does not exist or is not writable. Please check folder permissions.';
$string['nopermission'] = 'You do not have permission to upload tutor relationships.';
$string['parentnotfound'] = 'Line {$a->line}: Parent Course not found';
$string['pluginname'] = 'Upload Metacourse links';
$string['pluginnameplural'] = 'Upload Metacourse links';
$string['reladded'] = '{$a->child} sucessfully linked to {$a->parent}';
$string['reladderror'] = 'Error linking {$a->child} to {$a->parent}';
$string['relalreadyexists'] = '{$a->child} already linked to {$a->parent}';
$string['reldeleted'] = '{$a->child} unlinked from {$a->parent}';
$string['reldoesntexist'] = '{$a->child} not linked to {$a->parent}, so can\'t be removed';
$string['removedold'] = 'Removed {$a} old cron files';
$string['toofewcols'] = 'CSV file has too few columns on line {$a}, expecting 3.';
$string['toomanycols'] = 'CSV file has too many columns on line {$a}, expecting 3.';
