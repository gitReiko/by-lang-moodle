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
 * Strings for component 'gradeexport_apogee', language 'en', version '4.0'.
 *
 * @package     gradeexport_apogee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apogee:publish'] = 'Publish Apogée grade export';
$string['apogee:view'] = 'Use Apogée grade export';
$string['delimiter'] = 'Column delimiter';
$string['delimiter_help'] = 'Column delimiter used in the source file. This delimiter will be also used in the export with users grades.';
$string['eventgradeexported'] = 'Apogée grade exported';
$string['examplecsv'] = 'Example .csv file from Apogée';
$string['examplecsv_help'] = 'Example .csv file from Apogée with an expected structure example.';
$string['mapping_type'] = 'Students mapping';
$string['mapping_type_desc'] = 'How do you map course enrolled students to students listed in the given .csv file.';
$string['mapping_type_idnumber'] = 'Student number-Id number';
$string['mapping_type_name'] = 'Lastname-firstname';
$string['pluginname'] = 'File for Apogée';
$string['privacy:metadata'] = 'The Apogée export plugin does not store any personal data.';
$string['select_file'] = 'Source file';
$string['select_file_help'] = 'Source file extracted from Apogée with the list of students whose we want to add grade for the selected grade item.';
$string['source_file'] = 'Source';
$string['startlist_delimiter'] = 'Users list start delimiter';
$string['startlist_delimiter_desc'] = 'Delimiter (string) which indicate the users list will start at the line just after the one with this delimiter.<br/>
                                                It can be set to empty/null if you do not want use delimiter and run every lines if the given file.';
$string['timeexported'] = 'Last downloaded from this course';
