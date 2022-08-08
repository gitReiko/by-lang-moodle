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
 * Strings for component 'local_recompletion', language 'en', version '4.0'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedrecompletiontitle'] = 'Advanced';
$string['archive'] = 'Archive old attempts';
$string['archivecompletiondata'] = 'Archive completion data';
$string['archivecompletiondata_help'] = 'Writes completion data to the local_recompletion_cc, local_recompletion_cc_cc and local_recompletion_cmc tables. Completion data will be permanently deleted if this is not selected.';
$string['archivequestionnaire'] = 'Archive old questionnaire attempts';
$string['archivequiz'] = 'Archive old quiz attempts';
$string['archivescorm'] = 'Archive old SCORM attempts';
$string['assignattempts'] = 'Assign attempts';
$string['assignattempts_help'] = 'How to handle assignment attempts within the course.
If the setting \'Update on grade change\' is used, when a teacher updates the grade inside an assignment activity and the user has already completed the course, their course completion date will be updated to use the date of the assignment grade change.';
$string['assignevent'] = 'Update course completion on grade change';
$string['bulkchangedate'] = 'Change completion date for selected users';
$string['completionnotenabled'] = 'Completion is not enabled in this course';
$string['completionresetuser'] = 'Completion for {$a} in this course has been reset.';
$string['completionupdated'] = 'Course completion dates were updated';
$string['coursecompletiondate'] = 'New course completion date';
$string['defaultsettings'] = 'Recompletion default settings';
$string['delete'] = 'Delete existing attempts';
$string['deletegradedata'] = 'Delete all grades for the user';
$string['deletegradedata_help'] = 'Delete current grade completion data from grade_grades table. Grade recompletion data is permanently deleted but data retained in Grade history data table.';
$string['donothing'] = 'Do nothing';
$string['editcompletion'] = 'Edit course completion date';
$string['editcompletion_desc'] = 'Modify the course completion date for the following users:';
$string['editrecompletion'] = 'Edit course recompletion settings';
$string['emailrecompletiontitle'] = 'Custom recompletion message settings';
$string['enablerecompletion'] = 'Enable recompletion';
$string['enablerecompletion_help'] = 'The recompletion plugin allows a course completion details to be reset after a defined period.';
$string['eventrecompletion'] = 'Course recompletion';
$string['extraattempt'] = 'Give student extra attempt/s';
$string['forcearchivecompletiondata'] = 'Force archive completion data';
$string['forcearchivecompletiondata_help'] = 'If enabled, completion data archiving will be forced on for all course recompletions. This can prevent accidental data loss.';
$string['modifycompletiondates'] = 'Modify course completion dates';
$string['noassigngradepermission'] = 'Your completion was reset, but this course contains an assignment that could not be reset, please ask your teacher to do this for you if required.';
$string['nousersselected'] = 'No users were selected';
$string['pluginname'] = 'Course recompletion';
$string['privacy:metadata:attempt'] = 'The attempt number';
$string['privacy:metadata:completionstate'] = 'If the activity has been completed';
$string['privacy:metadata:course'] = 'The course ID linked to this table.';
$string['privacy:metadata:coursemoduleid'] = 'The activity ID';
$string['privacy:metadata:coursesummary'] = 'Stores the course completion data for a user.';
$string['privacy:metadata:gradefinal'] = 'Final grade received for course completion';
$string['privacy:metadata:local_recompletion_cc'] = 'Archive of previous course completions.';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archive of previous course_completion_crit_compl';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archive of previous course module completions.';
$string['privacy:metadata:local_recompletion_ltia'] = 'User access log and gradeback data.';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'The time when the user last accessed the course.';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'The last grade the user was recorded of having.';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'The time when the user was enrolled.';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'The ID of the tool of LTI enrolment method.';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'The ID of the user.';
$string['privacy:metadata:local_recompletion_qr'] = 'Recompletion Questionnaire response table';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'complete';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Grade';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'Questionnaire id';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Submitted';
$string['privacy:metadata:overrideby'] = 'The user ID of the person who overrode the activity completion';
$string['privacy:metadata:quiz_attempts'] = 'Archived details about each attempt on a quiz.';
$string['privacy:metadata:quiz_attempts:attempt'] = 'The attempt number.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'The current page that the user is on.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Whether this is a preview of the quiz.';
$string['privacy:metadata:quiz_attempts:state'] = 'The current state of the attempt.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'The sum of grades in the attempt.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'The time that the state was checked.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'The time that the attempt was completed.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'The time that the attempt was updated.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'The time that the attempt was updated via an offline update.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'The time that the attempt was started.';
$string['privacy:metadata:quiz_grades'] = 'Archived details about the overall grade for previous quiz attempts.';
$string['privacy:metadata:quiz_grades:grade'] = 'The overall grade for this quiz.';
$string['privacy:metadata:quiz_grades:quiz'] = 'The quiz that was graded.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'The time that the grade was modified.';
$string['privacy:metadata:quiz_grades:userid'] = 'The user who was graded.';
$string['privacy:metadata:reaggregate'] = 'If the course completion was reaggregated.';
$string['privacy:metadata:scoes_track:element'] = 'The name of the element to be tracked';
$string['privacy:metadata:scoes_track:value'] = 'The value of the given element';
$string['privacy:metadata:scorm_scoes_track'] = 'Archive of the tracked data of the SCOes belonging to the activity';
$string['privacy:metadata:timecompleted'] = 'The time that the course was completed.';
$string['privacy:metadata:timeenrolled'] = 'The time that the user was enrolled in the course';
$string['privacy:metadata:timemodified'] = 'The time that the record was modified';
$string['privacy:metadata:timestarted'] = 'The time the course was started.';
$string['privacy:metadata:unenroled'] = 'If the user has been unenrolled from the course';
$string['privacy:metadata:userid'] = 'The user ID linked to this table.';
$string['privacy:metadata:viewed'] = 'If the activity was viewed';
$string['questionnaireattempts'] = 'Questionnaire attempts';
$string['questionnaireattempts_help'] = 'What to do with existing Questionnaire attempts. If delete and archive is selected, the old Questionnaire attempts will be archived in the local_recompletion tables.';
$string['quizattempts'] = 'Quiz attempts';
$string['quizattempts_help'] = 'What to do with existing Quiz attempts. If delete and archive is selected, the old quiz attempts will be archived in the local_recompletion tables,
 if set to give extra attempts this will add a quiz override to allow the user to have the maximum number of allowed attempts set.';
$string['recompletion'] = 'recompletion';
$string['recompletion:manage'] = 'Allow course recompletion settings to be changed';
$string['recompletion:resetmycompletion'] = 'Reset my own completion';
$string['recompletionemailbody'] = 'Recompletion message body';
$string['recompletionemailbody_help'] = 'A custom recompletion email subject may be added as plain text or Moodle-auto format, including HTML tags and multi-lang tags

The following placeholders may be included in the message:

* Course name {$a->coursename}
* Link to course {$a->link}
* Link to user\'s profile page {$a->profileurl}
* User email {$a->email}
* User fullname {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Hi there, please recomplete the course {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = 'Course {$a->coursename} recompletion required';
$string['recompletionemailenable'] = 'Send recompletion message';
$string['recompletionemailenable_help'] = 'Enable email messaging to notifiy users that recompletion is required';
$string['recompletionemailsubject'] = 'Recompletion message subject';
$string['recompletionemailsubject_help'] = 'A custom recompletion email subject may be added as plain text

The following placeholders may be included in the message:

* Course name {$a->coursename}
* User fullname {$a->fullname}';
$string['recompletionnotenabled'] = 'Recompletion is not enabled in this course';
$string['recompletionrange'] = 'Recompletion period';
$string['recompletionrange_help'] = 'Set the period of time before a users completion results are reset.';
$string['recompletionsettingssaved'] = 'Recompletion settings saved';
$string['recompletiontask'] = 'Check for users that need to recomplete';
$string['resetallcompletion'] = 'Reset all completion';
$string['resetcompletionconfirm'] = 'Are you sure you want to reset all completion data in this course for {$a}?  Warning - this may permanently delete some submitted content.';
$string['resetcompletionfor'] = 'Reset completion for {$a}';
$string['resetlti'] = 'Reset LTI grades';
$string['resetltis'] = 'LTI grades';
$string['resetltis_help'] = 'How to handle LTI grades within the course.
If the setting \'Reset LTI grades\' is used, all grade LTI results will be reset to 0.
When user achieved new completion in the course, the updated course grade will be resend to the LTI provider.';
$string['resetmycompletion'] = 'Reset my activity completion';
$string['scormattempts'] = 'SCORM attempts';
$string['scormattempts_help'] = 'Should existing SCORM attempts be deleted - if archive is selected, the old SCORM attempts will be archived in the local_recompletion_sst table.';
