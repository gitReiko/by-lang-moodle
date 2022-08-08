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
 * Strings for component 'plagiarism_unplag', language 'en', version '4.0'.
 *
 * @package     plagiarism_unplag
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Attempts made';
$string['check_all_submitted_assignments'] = 'Manual check';
$string['check_confirm'] = 'Are you sure you want start checking by UNPLAG plagiarism plugin?';
$string['check_file'] = 'Start a scan';
$string['check_start'] = 'Unplag originality grading in progress';
$string['check_type'] = 'Sources';
$string['cronwarning'] = 'The <a href="../../admin/cron.php">cron.php</a> maintenance script has not been run for at least 30 min - Cron must be configured to allow UNPLAG to function correctly.';
$string['defaultsdesc'] = 'The following settings are the defaults set when enabling UNPLAG within an Activity Module';
$string['defaultupdated'] = 'Default values updated';
$string['delete'] = 'Delete';
$string['deletedwarning'] = 'This file could not be found - it may have been deleted by the user';
$string['exclude_citations'] = 'Identify citations and references';
$string['exclude_self_plagiarism'] = 'Exclude self-plagiarism';
$string['explainerrors'] = 'This page lists any files that are currently in an error state. <br/>When files are deleted on this page they will not be able to be resubmitted and errors will no longer display to teachers or students';
$string['file'] = 'File';
$string['filedeleted'] = 'File deleted from queue';
$string['filereset'] = 'A file has been reset for re-submission to UNPLAG';
$string['fileresubmitted'] = 'File Queued for resubmission';
$string['generalinfo'] = 'General information';
$string['getscore'] = 'Get score';
$string['heldevents'] = 'Held events';
$string['heldeventsdescription'] = 'These are events that did not complete on the first attempt and were queued for resubmission - this prevents subsequent events from completing and may need further investigation. Some of these events may not be relevant to UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Identifier';
$string['max_100000_words'] = 'File(s) should have no more than 100 000 words and be not larger than 70MB';
$string['max_supported_archive_files_count'] = 'Max supported archive files';
$string['max_supported_archive_files_count_help'] = 'The maximum number of supported files that will be extracted from the archives';
$string['min_30_words'] = 'At least 30 words are required';
$string['module'] = 'Module';
$string['my_library'] = 'Doc vs Library';
$string['name'] = 'Name';
$string['no_index_files'] = 'Draft assignment';
$string['noreceiver'] = 'No receiver address was specified';
$string['pending'] = 'This file is pending submission to UNPLAG';
$string['plagiarism'] = 'Potential plagiarism';
$string['plagiarism_run_success'] = 'File sent for plagiarism scan';
$string['pluginname'] = 'UNPLAG plagiarism plugin';
$string['previouslysubmitted'] = 'Previously submitted as';
$string['processing'] = 'This file has been submitted to UNPLAG, now waiting for the analysis to be available';
$string['progress'] = 'Scan';
$string['receivernotvalid'] = 'This is not a valid receiver address.';
$string['refresh'] = 'Refresh page to see results';
$string['report'] = 'View full report';
$string['reportready'] = 'Report ready';
$string['resubmit'] = 'Resubmit';
$string['savedconfigfailed'] = 'An incorrect Client ID/API Secret combination has been entered. UNPLAG has been disabled, please try again.';
$string['savedconfigsuccess'] = 'Plagiarism detection settings saved';
$string['scoreavailable'] = 'This file has been processed by UNPLAG and a report is now available.';
$string['scorenotavailableyet'] = 'This file has not been processed by UNPLAG yet.';
$string['showwhenclosed'] = 'When Activity closed';
$string['similarity'] = 'Similarity';
$string['similarity_sensitivity'] = 'Hide sources with a match less then (%)';
$string['status'] = 'Status';
$string['studentdisclosure'] = 'Familiarize students with the UNPLAG Privacy Policy';
$string['studentdisclosure_help'] = 'This text will be displayed to all students on the file upload page.';
$string['studentdisclosuredefault'] = 'All  uploaded files will be submitted to the plagiarism detection system UNPLAG.';
$string['studentemailcontent'] = 'The file you submitted to {$a->modulename} in {$a->coursename} has already been processed by the plagiarism detection system UNPLAG
{$a->modulelink}';
$string['studentemailsubject'] = 'File processed by UNPLAG';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends it for grading';
$string['sync_failed'] = 'Try to synchronize unprocessed files';
$string['toolarge'] = 'This file is too large for UNPLAG to process';
$string['unknownwarning'] = 'An error occurred when trying to send this file to UNPLAG';
$string['unplag'] = 'UNPLAG plagiarism plugin';
$string['unplag:checkfile'] = 'Allow check file for similarity';
$string['unplag:enable'] = 'Allow the teacher to enable/disable UNPLAG inside an activity';
$string['unplag:resetfile'] = 'Allow the teacher to resubmit the file to UNPLAG after an error occurred';
$string['unplag:vieweditreport'] = 'Allow the teacher to view and edit the full report from UNPLAG';
$string['unplag:viewreport'] = 'Allow the teacher to view the full report from UNPLAG';
$string['unplag:viewsimilarity'] = 'Allow to view similarity value from UNPLAG';
$string['unplag_api_secret'] = 'API Secret';
$string['unplag_api_secret_help'] = 'API Secret provided by UNPLAG to access the API you can find it on <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'Client ID';
$string['unplag_client_id_help'] = 'ID of Client provided by UNPLAG to access the API you can find it on <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_draft_submit'] = 'When should the file be submitted to UNPLAG';
$string['unplag_enableplugin'] = 'Enable UNPLAG for {$a}';
$string['unplag_lang'] = 'Language';
$string['unplag_lang_help'] = 'Language code provided by UNPLAG';
$string['unplag_settings_url_text'] = 'Open Unplag.com admin account to view/copy Client ID/API Secret';
$string['unplag_show_student_report'] = 'Show similarity report to student';
$string['unplag_show_student_report_help'] = 'The similarity report gives a breakdown on what parts of the submission were plagiarised and the location that UNPLAG found this content.';
$string['unplag_show_student_score'] = 'Show similarity score to student';
$string['unplag_show_student_score_help'] = 'The similarity score is the percentage of the submission that has been matched with other content.';
$string['unplag_studentemail'] = 'Send email to Student';
$string['unplag_studentemail_help'] = 'This will send an email to the student when a file has been processed to let them know that a report is available.';
$string['unplagdebug'] = 'Debugging';
$string['unplagdefaults'] = 'UNPLAG defaults';
$string['unplagfiles'] = 'Unplag Files';
$string['unsupportedfiletype'] = 'This filetype is not supported by UNPLAG';
$string['upload_error'] = 'File upload error';
$string['uploading'] = 'Uploading';
$string['use_unplag'] = 'Auto check';
$string['use_unplag_help'] = 'To use Unplag plugin, first set option Require students click submit button to Yes (Submissions settings).';
$string['useunplag'] = 'Enable UNPLAG';
$string['useunplag_assign_desc_param'] = 'To unlock Unplag settings';
$string['useunplag_assign_desc_value'] = 'Set Submissions settings → Require students click submit button = Yes';
$string['waitingevents'] = 'There are {$a->countallevents} events waiting for cron and {$a->countheld} events are being held for resubmission';
$string['web'] = 'Doc vs Internet';
$string['web_and_my_library'] = 'Doc vs Internet + Library';
