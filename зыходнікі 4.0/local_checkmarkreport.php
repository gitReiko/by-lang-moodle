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
 * Strings for component 'local_checkmarkreport', language 'en', version '4.0'.
 *
 * @package     local_checkmarkreport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additional_columns'] = 'Additional columns';
$string['additional_information'] = 'Additional information';
$string['additional_settings'] = 'Additional settings';
$string['attendances'] = 'Attendances';
$string['by'] = 'by';
$string['checkmarkreport:view'] = 'View checkmark report';
$string['checkmarkreport:view_courseoverview'] = 'View checkmark coursereport';
$string['checkmarkreport:view_own_overview'] = 'View my checkmark report';
$string['checkmarkreport:view_students_overview'] = 'View checkmark userreport';
$string['error_retriefing_members'] = 'Error getting groupmembers';
$string['eventexported'] = 'Checkmarkreport exported';
$string['eventoverviewexported'] = 'Checkmarkreport overview exported';
$string['eventoverviewviewed'] = 'Checkmarkreport overview viewed';
$string['eventuseroverviewexported'] = 'Checkmarkreport useroverview exported';
$string['eventuseroverviewviewed'] = 'Checkmarkreport useroverview viewed';
$string['eventuserviewexported'] = 'Checkmarkreport userview exported';
$string['eventuserviewviewed'] = 'Checkmarkreport userview viewed';
$string['eventviewed'] = 'Checkmarkreport viewed';
$string['example'] = 'Example';
$string['examples'] = 'Examples';
$string['exportas'] = 'Export as';
$string['filter'] = 'Filter';
$string['grade'] = 'Grade';
$string['grade_help'] = 'Shows grade, summed up grade for shown checkmarks as well as theoretical points for checking the examples.';
$string['grade_useroverview'] = 'Grade';
$string['grade_useroverview_help'] = 'The grade shows the current grade given by the teacher for each checkmark.<br />The values in line with the examples show the theoretical amount of points earnable for checked examples.<br />The grade of the checkmark and the course sum of the shown checkmark grades can differ from the sum of example points due to teachers giving different grades (for example when students checked or unchecked examples at the beginning of the lesson, or if the checked examples have not been correctly solved).<br />The sum for a single checkmark (in the line "Σ checkmarks") shows the teacher\'s grade. A "-" equals no currently present grade.<br />The sum of all checkmarks (line "Σ total") sums up all shown teacher\'s grades.<br />Please mind these values are updating itself according to the current grading status.';
$string['groupings'] = 'Groupings';
$string['groups'] = 'Groups';
$string['groups_help'] = 'Use this to select the groups to be displayed. Empty groups are disabled and only members of selected groups are displayed in the users selection (after update).';
$string['loading'] = 'Loading...';
$string['noaccess'] = 'You have no access to this module. You\'re missing the required capabilities to view this content.';
$string['overview'] = 'Overview';
$string['overview_alt'] = 'View checkmark coursereport';
$string['overwritten'] = 'Overwritten';
$string['pluginname'] = 'Checkmark report';
$string['pluginname_help'] = 'Checkmark reports extend the functionality of mod_checkmark by making convenient course-overview reports for all checkmarks available.';
$string['pluginnameplural'] = 'Checkmark reports';
$string['privacy:metadata:showattendances'] = 'Persistently saved setting whether or not to show attendance infos.';
$string['privacy:metadata:showexamples'] = 'Persistently saved setting whether or not to show examples.';
$string['privacy:metadata:showgrade'] = 'Persistently saved setting whether or not to show grades.';
$string['privacy:metadata:showpoints'] = 'Persistently saved setting whether to show icons/symbols or points for checked examples.';
$string['privacy:metadata:showpresentationcounts'] = 'Persistently saved setting whether or not to show amount of graded presentations.';
$string['privacy:metadata:showpresentationgrades'] = 'Persistently saved setting whether or not to show presentation grades.';
$string['privacy:metadata:signature'] = 'Persistently saved setting whether or not to include a signature field.';
$string['privacy:metadata:sumabs'] = 'Persistently saved setting whether or not to show absolute values.';
$string['privacy:metadata:sumrel'] = 'Persistently saved setting whether or not to show percentage values.';
$string['seperatenamecolumns'] = 'Split fullname into single columns';
$string['seperatenamecolumns_help'] = 'If enabled, all fragments of the displayed fullname (i.e. first name and surname) will be split into single columns.';
$string['showattendances'] = 'Show attendances';
$string['showattendances_help'] = 'If enabled the students attendances will be included in the reports if at least one of the checkmark instances tracks the attendance. If the instances don\'t track the attendance no information will be shown for the instance!';
$string['showexamples'] = 'Show examples';
$string['showexamples_help'] = 'If enabled, examples of the checkmark instances with detailed information will be included in the reports.';
$string['showgrade'] = 'Show grade';
$string['showpoints'] = 'Show points';
$string['showpoints_help'] = 'Show corresponding points for each example instead of checked (☒) or unchecked (☐) symbols.';
$string['showpresentationcount'] = 'Show number of graded presentations';
$string['showpresentationcount_help'] = 'If activated, the column "# Presentation grades" shows for all users the number of presentations\' grades that were entered in all checkmark instances of the course. Empty grades were ignored and not counted.';
$string['showpresentationgrades'] = 'Show presentation grade';
$string['showpresentationgrades_help'] = 'Show the grade feedback given for student\'s presentations';
$string['showsignature'] = 'include signature fields in XLSX and ODS files';
$string['showsignature_help'] = 'If enabled areas reserved for students signatures will be included in XLSX and ODS exports. This is not available for TXT or XML exports.';
$string['signature'] = 'Signature';
$string['status'] = 'Status';
$string['sumabs'] = 'Show x/y examples';
$string['sumabs_help'] = 'Show how many examples have been checked in the whole course and for each checkmark.';
$string['sumrel'] = 'Show % of examples/grades';
$string['sumrel_help'] = 'Show relative values ( XX % ) of checked examples as well as grade calculated by checked examples for course in total and each checkmark.';
$string['update'] = 'Update';
$string['useroverview'] = 'Student Overview';
$string['useroverview_alt'] = 'View checkmark userreport';
$string['userview'] = 'Userview';
$string['userview_alt'] = 'View my checkmark report';
$string['xlsover256'] = 'XLS file format only supports 256 columns at maximum. The file you\'re about to generate exceeds this limitation. Please deselect some instances or avoid using XLS.';
