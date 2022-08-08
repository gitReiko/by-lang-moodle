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
 * Strings for component 'plagiarism_vericite', language 'en', version '4.0'.
 *
 * @package     plagiarism_vericite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced_settings'] = 'Advanced Settings';
$string['disable_dynamic_inline'] = 'Disable dynamic inline submissions';
$string['disable_dynamic_inline_help'] = 'Disabling dynamic inline submissions will result in one-time submissions only. Modifications to the inline text by the student will not be re-submitted to VeriCite.';
$string['enable_debugging'] = 'Enable debugging';
$string['enable_debugging_help'] = 'Enable debugging for the VeriCite module. Errors will be printed to a vericite.log file in the Moodle dataroot.';
$string['enablestupreviewvericite'] = 'Enable Student Preview';
$string['enablestupreviewvericite_help'] = 'Set the default for all reports submitted to this assignment. If you choose to enable student preview, users will be able to review and resubmit their papers until the due date. Instructors will only be able to see the final submission but a record of the scores for each paper will show in the report logs. If the assignment has a due date, the student’s most recent draft will automatically be submitted if there are no submissions from a student.';
$string['enablestupreviewvericite_hideinstructor'] = 'Hide setting for "Enable Student Preview" from instructor';
$string['enablestupreviewvericite_hideinstructor_help'] = 'Lock the setting for "Enable Student Preview", so that when creating a new assignment, the instructor cannot see or change the setting.';
$string['excludequotesvericite'] = 'Exclude Quotes';
$string['excludequotesvericite_help'] = 'Set the default for all reports submitted to this assignment. To reduce the number of false matches, we recommend excluding quotes by default. Instructors will still retain the ability to toggle this option for each individual report after submission.';
$string['excludequotesvericite_hideinstructor'] = 'Hide setting for "Exclude Quotes" from instructor.';
$string['excludequotesvericite_hideinstructor_help'] = 'Lock the settings for Exclude Quotes, so that when creating a new assignment, the instructor cannot see or change the setting.';
$string['excludeselfplagvericite'] = 'Exclude Self Plagiarism';
$string['excludeselfplagvericite_help'] = 'Set the default for all reports submitted to this assignment. To reduce the number of false matches, we recommend excluding self plagiarism in the same course by default. Instructors will still retain the ability to toggle this option for each individual report after submission. Self plagiarism will always be checked against the user’s reports in other courses.';
$string['excludeselfplagvericite_hideinstructor'] = 'Hide setting for "Exclude Self Plagiarism" from Instructor';
$string['excludeselfplagvericite_hideinstructor_help'] = 'Lock the setting for Exclude Self Plagiarism, so that an when creating a new assignment, the instructor cannot see or change the setting.';
$string['pluginname'] = 'VeriCite';
$string['preliminaryreportvericite'] = 'Show the preliminary similarity score';
$string['preliminaryreportvericite_help'] = 'Enable to show the preliminary (non-final) similarity score. If disabled then a score will not be displayed until the final score has been determined, which could take several hours.';
$string['savedconfigsuccess'] = 'Plagiarism Settings Saved';
$string['sendfiles'] = 'VeriCite cron job to submit files';
$string['similarity'] = 'Similarity';
$string['storeinstindexvericite'] = 'Store in Institutional Index';
$string['storeinstindexvericite_help'] = 'Set the default for all reports submitted to this assignment. If you choose not to store reports in your institutional index, the reports will not be used to check for plagiarism against other student reports in your institution. Once a report has been submitted, you cannot change this option for that report.';
$string['storeinstindexvericite_hideinstructor'] = 'Hide setting for "Store in Institutional Index" from instructor';
$string['storeinstindexvericite_hideinstructor_help'] = 'Lock the setting for Store in Institutional index, so that when creating a new assignment, the instructor cannot see or change the setting.';
$string['studentdisclosure'] = 'Student Disclosure';
$string['studentdisclosure_help'] = '';
$string['studentdisclosuredefault'] = 'Text and file submissions will be uploaded to a plagiarism detection service for instructor review.';
$string['studentreportvericite'] = 'Allow students to view reports';
$string['studentreportvericite_help'] = 'Enable to allow students to view the full VeriCite report including context on matches found.';
$string['studentscorevericite'] = 'Allow students to view score';
$string['studentscorevericite_help'] = 'Enable to allow students to see their VeriCite similarity score. Similarity scores range from 0-100 and represent the amount of content that matches against other student papers or web content.';
$string['usevericite'] = 'Enable VeriCite Plagiarism Service';
$string['usevericite_help'] = 'Enable if you want new assignments to have VeriCite enabled by default.';
$string['vericite'] = 'VeriCite plagiarism plugin';
$string['vericiteaccountid'] = 'Account Id';
$string['vericiteaccountid_help'] = 'The id provided as part of a trial agreement with VeriCite';
$string['vericiteapi'] = 'API URL';
$string['vericiteapi_help'] = 'The API URL provided as part of a trial agreement with VeriCite';
$string['vericitedefaultsettings'] = 'Default settings for new assignments:';
$string['vericitedefaultsettingsforums'] = 'Default settings for new forums:';
$string['vericiteexplain'] = 'VeriCite is a cloud-based service that identifies plagiarism by comparing submitted work against an ever-increasing database of sources. VeriCite is a commercial service and requires a valid subscription. 60-days trials are available at <a href="https://vericite.com" target="_blank">VeriCite.com</a>.<br/><br/>VeriCite is continuously monitored and <a href="http://status.vericite.com/" target="_blank"">status updates are available</a>.<br/><br/>News and system updates are available at <a href="https://updates.vericite.com" target="_blank"/>updates.vericite.com</a>.<br/><hr/>';
$string['vericitesecretkey'] = 'Secret Key';
$string['vericitesecretkey_help'] = 'The secret provided as part of a trial agreement with VeriCite';
