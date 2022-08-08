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
 * Strings for component 'local_assignsubmission_download', language 'en', version '4.0'.
 *
 * @package     local_assignsubmission_download
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'All';
$string['assignsubmission_download:view'] = 'Grant access to file renaming and submission export';
$string['clean_filerenaming'] = 'Clean filenames';
$string['clean_filerenaming_help'] = 'Removes white spaces and special characters from filenames and rewrites umlauts, e.g. \'Übung 1-Gruppe$4\' becomes \'Uebung1-Gruppe\'';
$string['data_preview'] = 'Data preview';
$string['data_preview_help'] = 'Click on [+] or [-] for showing or hiding columns in the print-preview.';
$string['datapreviewtitle'] = 'Data preview';
$string['datasettingstitle'] = 'Data settings';
$string['dateinthefutureerror'] = 'Submission newer as cannot be in the future';
$string['defaultfilerenamingpattern'] = '[filename]';
$string['downloadprintpreviewtable'] = 'Download submission export table.';
$string['exportformat'] = 'Format';
$string['filenumberinfo'] = 'Maximum number of uploaded files is larger than 1. Consider using [filenumber] to number all uploads of a student in order to improve sorting.';
$string['filerenamesettingstitle'] = 'Download renamed submissions';
$string['filerenamingpattern'] = 'Naming scheme';
$string['filerenamingpattern_help'] = 'The parameter \'naming scheme\' determines the naming of the filenames. The following bracket terms (\'tags\') are available:<br>
    <br>
    [filename] original filename<br>
    [firstname] first name<br>
    [lastname] last name<br>
    [fullname] full name<br>
    [idnumber] matriculation number<br>
    [assignmentname] name of the assignment<br>
    [group] group, in case the participant is enroled into a group<br>
    [filenumber] sequential number for files uploaded by a single student<br>
    <br>
    If you add any alphanumeric characters (without brackets), these characters will be added to all the uploaded/downloaded assignments<br>
    <br>
    Example:<br>
    The entry \'[idnumber]-[lastname]_[assignmentname]\' will result the following filename: \'01234567-Muster_assignmentname\'';
$string['hiddenuser'] = 'Participant';
$string['labelgroup'] = 'Focus download on group';
$string['labelgroup_help'] = 'Download assignments of students from a specific group only.';
$string['labelgrouping'] = 'Focus download on grouping';
$string['labelgrouping_help'] = 'Download assignments of students from a specific group only.';
$string['lastdownloaded_title'] = 'User\'s last download';
$string['lastdownloaded_title_help'] = 'The date shows the last download of the user.';
$string['nodownloadsyet'] = 'no downloads yet';
$string['nosubmissionneweras'] = 'No submission was made after {$a}';
$string['notreuploadable_hint'] = 'Note, if one of the feedback types \'Feedback files\' or \'Offline grading worksheet\' is checked, the renamed download files of this page cannot be uploaded anymore.';
$string['onlinetext_defaultfilename'] = 'Onlinetext';
$string['onlypdf'] = 'PDF Settings';
$string['optimum'] = 'Optimum';
$string['pdf_assignment'] = 'Assignment';
$string['pdf_availablefrom'] = 'Available from';
$string['pdf_course'] = 'Course';
$string['pdf_duedate'] = 'Due date';
$string['pdf_group'] = 'Group';
$string['pdf_nogroup'] = 'keine Gruppe';
$string['pdf_notactive'] = 'not activated';
$string['pdf_view'] = 'Print preview';
$string['perpage'] = 'Submissions shown per page';
$string['perpage_help'] = 'This sets the number of submissions which are displayed per page in the pdf.
Choose "Optimum" to optimize the distribution of list entries according to the chosen textsize and page orientation, if there are plenty of participants registered in your course.';
$string['perpage_propertydefault'] = '100';
$string['perpage_propertydescription'] = 'This sets the number of submissions which are displayed per page, when teachers are viewing assignment submissions.
<br>It is overwritten by the teacher\'s individual preferences. Input will be absolute-valued.';
$string['perpage_propertyname'] = 'Default - Displayed Submissions';
$string['pluginname'] = 'Export- and file renaming of submissions';
$string['pluginname_print'] = 'Export';
$string['pluginname_submissions'] = 'Download renamed submissions';
$string['printpreview'] = 'Export';
$string['printpreviewtabledownloaded'] = 'Export table downloaded';
$string['printpreviewtabledownloaded_description'] = 'The user with id {$a->userid} downloaded the export table for the assignment with the course module id {$a->contextinstanceid}.';
$string['printpreviewtableviewed'] = 'Export table viewed';
$string['printpreviewtableviewed_description'] = 'The user with id {$a->userid} viewed the export table for the assignment with the course module id {$a->contextinstanceid}.';
$string['printsettingstitle'] = 'Export settings';
$string['privacy:metadata:preference:clean_filerenaming'] = 'Preference on whether to additionaly clean file names from special chars in downloaded submissions.';
$string['privacy:metadata:preference:exportformat'] = 'Preference on which format to use when exporting to a file.';
$string['privacy:metadata:preference:filerenamingpattern'] = 'Preference for the naming scheme used for file renaming on downloaded submissions.';
$string['privacy:metadata:preference:optimum'] = 'Preference on whether to automatically decide how many sumbissions to display per page when exporting to a pdf file.';
$string['privacy:metadata:preference:pageorientation'] = 'Preference on which page orientation to use when exporting to a pdf file.';
$string['privacy:metadata:preference:perpage'] = 'Preference on how many submissions to display per page when exporting to a pdf file.';
$string['privacy:metadata:preference:printheader'] = 'Preference on whether to print header and footer when exporting to a pdf file.';
$string['privacy:metadata:preference:textsize'] = 'Preference on which text size to use when exporting to a pdf file.';
$string['privacy:metadata:preference:userfilter'] = 'Preference on which users are filtered for when exporting to a file.';
$string['rename_propertydescription'] = 'Available tags: {$a}';
$string['show'] = 'Show';
$string['show_propertydescription'] = 'Used to show or hide the \'{$a->entrytoshow}\' menu entry';
$string['show_propertyname'] = 'Show \'{$a->entrytoshow}\'';
$string['strallononepage'] = 'print all on one page';
$string['strfilerenaming'] = 'Download submissions';
$string['strlandscape'] = 'landscape';
$string['strlarge'] = 'large';
$string['strmedium'] = 'medium';
$string['stror'] = 'or';
$string['strpageorientation'] = 'Page orientation';
$string['strpapersizes'] = 'Papersize';
$string['strportrait'] = 'portrait';
$string['strprint'] = 'Download file';
$string['strprintheader'] = 'Print header/footer';
$string['strprintheader_help'] = 'Prints header and footer if checked';
$string['strprintheaderlong'] = 'print header and footer if checked';
$string['strrefreshdata'] = 'Update data preview';
$string['strsmall'] = 'small';
$string['strtextsize'] = 'Textsize';
$string['submissionneweras'] = 'Submission newer as';
$string['submissionneweras_help'] = 'Only download files that were modified after a given time. If a submissiontype does not have
                                     a timestamp (like onlinetext), the timestamp of the submission is used.';
$string['submissions'] = 'Submissions';
$string['userfilter'] = 'User filter';
$string['viewprintpreviewtable'] = 'View submission export table.';
