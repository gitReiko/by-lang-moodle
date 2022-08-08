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
 * Strings for component 'report_coursesize', language 'en', version '4.0'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'All courses';
$string['backupsize'] = 'Backup size';
$string['calcmethod'] = 'Update main report';
$string['calcmethodcron'] = 'Scheduled task';
$string['calcmethodhelp'] = 'If calculated by scheduled task, the report will update at the scheduled time and cache the results for later viewing. This is recommended over instant calculations because this can be an intensive/slow query to run.';
$string['calcmethodlive'] = 'On page load';
$string['catsystembackupuse'] = 'System and category backup use is {$a}.';
$string['catsystemuse'] = 'System and category use outside users and courses is {$a}.';
$string['coursebackupbytes'] = '{$a->backupbytes} bytes used for backup by course {$a->shortname}';
$string['coursebytes'] = '{$a->bytes} bytes used by course {$a->shortname}';
$string['coursereport'] = 'Summary of plugin types - NOTE this may be different than the main course listing and is probably more accurate.';
$string['coursesize'] = 'Course size';
$string['coursesize:view'] = 'View course size report';
$string['coursesize_desc'] = '<p>This report only provides approximate values, if a file is used multiple times within a course or in multiple courses the report counts each instance even though Moodle only stores one physical version on disk.</p>';
$string['coursesummary'] = '(view stats)';
$string['diskusage'] = 'Total';
$string['emptycourseshidden'] = 'Courses that do not use any file storage have been excluded from this report.';
$string['exportcsv'] = 'Export CSV';
$string['filearea'] = 'File area';
$string['lastupdate'] = '(Last updated {$a})';
$string['lastupdatenever'] = 'Waiting for scheduled task to generate stats.';
$string['nouserfiles'] = 'No user files listed.';
$string['pluginname'] = 'Course size';
$string['privacy:metadata'] = 'The Course size plugin does not store any personal data.';
$string['sharedusage'] = 'Shared Usage';
$string['sharedusagecourse'] = 'Approx {$a} is shared with other courses.';
$string['sitefilesusage'] = 'File usage report';
$string['sizepermitted'] = '(Permitted usage {$a}MB)';
$string['totalsitedata'] = 'Total sitedata usage: {$a}';
$string['userstopnum'] = 'Users (top {$a})';
