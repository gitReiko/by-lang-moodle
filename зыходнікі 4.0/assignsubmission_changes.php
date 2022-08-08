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
 * Strings for component 'assignsubmission_changes', language 'en', version '4.0'.
 *
 * @package     assignsubmission_changes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_diff'] = 'Enable Difference Detection by default';
$string['admin_diff_help'] = 'If set, the generation of the differences between the uploades will be enabled by default for all new assignments.<br>Diff generation requires the changelog generation.';
$string['allow_changelog'] = 'Allow detection of changes in student submissions';
$string['allow_changelog_help'] = 'If set, a changelog with all updates of the submission can be generated. You can set this option in the submission settings. If this option is deactivated, a changelog can not be generated.';
$string['default'] = 'Enable Changelog by default';
$string['default_help'] = 'If set, the changelog will be enabled by default for all new assignments.';
$string['diff'] = 'Auto detect diff';
$string['diff_help'] = 'Detect differences in student submissions';
$string['diff_not_available'] = '<p>The detection for changes in PDF files is not available because the tool <code>diff</code> could not be found on your system. If you have enabled the setting above, have a look in the admin settings of the local Plugin ChangelogLib to specify the correct path. This message disappears if the tool could be found.</p>';
$string['diff_prefix'] = 'The following pages of the new file were changed:';
$string['diff_requires_changelog'] = 'You must enable the changelog for the diff generation';
$string['edit_form_changes'] = 'Changelog entry';
$string['edit_form_changes_help'] = 'Describe the changed parts in your submission.';
$string['edit_form_error_empty'] = 'The changelog entry must not be empty.';
$string['edit_form_error_too_long'] = 'You can not use more than {$a->max} chars as description text. You submitted {$a->used} chars.';
$string['edit_form_headline'] = 'Edit the displayed changelog text for your submission on {$a}.';
$string['edit_form_link'] = 'edit';
$string['enabled'] = 'Changelog';
$string['enabled_help'] = 'Enable the detection of changes.';
$string['is_an_update'] = 'is an update of';
$string['last_grading'] = 'The last grading was on';
$string['long_diff'] = '{$a} pages were changed';
$string['max_filesize'] = 'Max filesize in MB for diff detection';
$string['max_filesize_help'] = 'The maximum filesize of the submission where differences to a predecessor will be detected. A higher value can impact the server response time and workload. Set this value to zero to disable the diff detection.';
$string['new_changes_prefix'] = 'The following changes were performed by the user after the last grading';
$string['no_changes'] = 'There are no detected changes.';
$string['no_last_grading'] = 'There is no grading until now.';
$string['no_new_changes'] = 'There are no changes of the submission after the last grading';
$string['no_old_changes'] = 'The student has not submitted any changes before the last grading';
$string['no_ungraded_changes'] = 'No ungraded changes';
$string['old_changes_prefix'] = 'The following changes were performed by the user before the last grading';
$string['pdftotext_not_available'] = '<p>The detection for changes in PDF files is not available because the tool <code>pdftotext</code> could not be found on your system. If you have enabled the setting above, have a look in the admin settings of the local Plugin ChangelogLib to specify the correct path. This message disappears if the tool could be found.</p>';
$string['pluginname'] = 'Changes';
$string['pluginname_desc'] = 'AssignSubmission Changes';
$string['pluginname_help'] = 'AssignSubmission Changes';
$string['pluginname_link'] = 'https://github.com/hwuerz/moodle-assignsubmission_changes';
$string['replaces'] = 'replaces';
$string['ungraded_changes'] = 'There are ungraded changes';
$string['warning'] = 'Warning';
$string['was_added'] = 'was added';
$string['was_deleted'] = 'was deleted';
