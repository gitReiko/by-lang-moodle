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
 * Strings for component 'kalmediaassign', language 'en', version '4.0'.
 *
 * @package     kalmediaassign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_media'] = 'Add media';
$string['all'] = 'All';
$string['allowdeleting'] = 'Allow resubmitting';
$string['allowdeleting_help'] = 'If enabled, students may replace submitted media. Whether it is possible to submit after the due date is controlled by the \'Prevent late submissions\' setting';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the Assignment Description above will only become visible to students at the "Allow submissions from" date.';
$string['assignmentexpired'] = 'Submission cancelled.  The assignment due date has passed';
$string['assignmentsubmitted'] = 'Success, your assignment has been submitted';
$string['availabledate'] = 'Available from';
$string['cancel'] = 'Close';
$string['cannotdisplaythumbnail'] = 'Unable to display thumbnail';
$string['checkconversionstatus'] = 'Check media conversion status';
$string['currentgrade'] = 'Current grade';
$string['deleteallsubmissions'] = 'Delete all media submissions';
$string['description'] = 'Description';
$string['duedate'] = 'Due Date';
$string['early'] = '{$a} early';
$string['emailteachermail'] = '{$a->username} has updated their assignment submission
for \'{$a->assignment}\' at {$a->timeupdated}

It is available here:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} has updated their assignment submission
for <i>\'{$a->assignment}\'  at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['emailteachers'] = 'Email alerts to teachers';
$string['emailteachers_help'] = 'If enabled, teachers receive email notification whenever students add or update an assignment submission. Only teachers who are able to grade the particular assignment are notified. So, for example, if the course uses separate groups, teachers restricted to particular groups won\'t receive notification about students in other groups.';
$string['emptyentryid'] = 'Media assignment was not submitted correctly.  Please try to resubmit.';
$string['event_grades_updated'] = 'Grades of Media submission updated';
$string['event_media_submitted'] = 'Media submitted';
$string['event_submission_detail_viewed'] = 'Media submission detail viewed';
$string['event_submission_page_viewed'] = 'Media submission page viewed';
$string['feedback'] = 'Feedback';
$string['feedbackcomment'] = 'Feedback comment';
$string['finalgrade'] = 'Final grade';
$string['fullname'] = 'Name';
$string['grade'] = 'Grade';
$string['grade_media_not_cache'] = 'This media may still be in the process of converting...';
$string['gradedby'] = 'Graded by';
$string['gradedon'] = 'Graded on';
$string['grademodified'] = 'Last modified (Grade)';
$string['grades'] = 'Grades';
$string['gradesubmission'] = 'Grade submissions';
$string['gradingstatus'] = 'Grading status';
$string['gradingsummary'] = 'Grading summary';
$string['group_filter'] = 'Group Filter';
$string['invalidid'] = 'Invalid ID';
$string['invalidperpage'] = 'Enter a number greater than zero';
$string['kalmediaassign:addinstance'] = 'Add a Kaltura Media Assignment';
$string['kalmediaassign:gradesubmission'] = 'Grade media submissions';
$string['kalmediaassign:screenrecorder'] = 'Screen recorder';
$string['kalmediaassign:submit'] = 'Submit media';
$string['lastgrade'] = 'Last grade';
$string['late'] = '{$a} late';
$string['latesubmission'] = 'Lated';
$string['media_converting'] = 'The media is still converting.  Please check the status of the media at a later time.';
$string['media_preview_header'] = 'Submission preview';
$string['messageprovider:kalmediaassign_updates'] = 'Kaltura Media assignment notifications';
$string['modulename'] = 'Kaltura Media Assignment';
$string['modulename_help'] = 'The Kaltura Media Assignment enables a teacher to create assignments that require students to upload and submit Kaltura videos. Teachers can grade student submissions and provide feedback.';
$string['modulenameplural'] = 'Kaltura Media Assignments';
$string['name'] = 'Name';
$string['noassignments'] = 'No Kaltura media assignments found in the course';
$string['noenrolledstudents'] = 'No students are enrolled in the course';
$string['nosubmission'] = 'No submission';
$string['nosubmissions'] = 'No submissions';
$string['not_insert'] = 'Failed to insert submission data.';
$string['not_update'] = 'Failed to update submission data.';
$string['notsubmittedyet'] = 'Not submitted yet';
$string['numberofmembers'] = 'Number of members';
$string['numberofrequiregrading'] = 'Number of require grading';
$string['numberofsubmissions'] = 'Number of submissions';
$string['optionalsettings'] = 'Optional settings';
$string['outlinegrade'] = 'Grade: {$a}';
$string['pagesize'] = 'Submissions shown per page';
$string['pagesize_help'] = 'Set the number of assignment to display per page';
$string['pluginadministration'] = 'Kaltura Media Assignment';
$string['pluginname'] = 'Kaltura Media Assignment';
$string['preventlate'] = 'Prevent late submissions';
$string['previewmedia'] = 'Preview';
$string['privacy:metadata:kalmediaassign_submission'] = 'Information about submission and grading to media assignment.';
$string['privacy:metadata:kalmediaassign_submission:grade'] = 'Score to the media submission.';
$string['privacy:metadata:kalmediaassign_submission:mediaassignid'] = 'Media assignment ID which is linked to Media assignment module.';
$string['privacy:metadata:kalmediaassign_submission:submissioncomment'] = 'Comment from teacher to student.';
$string['privacy:metadata:kalmediaassign_submission:teacher'] = 'The Id of teacher who grade the submitted media.';
$string['privacy:metadata:kalmediaassign_submission:timecreated'] = 'Time when the media was submitted.';
$string['privacy:metadata:kalmediaassign_submission:timemarked'] = 'Time when the media was graded by teacher.';
$string['privacy:metadata:kalmediaassign_submission:timemodified'] = 'Time when the media was modified.';
$string['privacy:metadata:kalmediaassign_submission:userid'] = 'The ID of the user who submit a media';
$string['quickgrade'] = 'Allow quick grade';
$string['quickgrade_help'] = 'If enabled, multiple assignments can be graded on one page. Add grades and comments then click the "Save all my feedback" button to save all changes for that page.';
$string['remainingtime'] = 'Remaining time';
$string['replace_media'] = 'Replace media';
$string['reqgrading'] = 'Require grading';
$string['reset_userdata'] = 'All data';
$string['reviewmedia'] = 'Review submission';
$string['save'] = 'Save Changes';
$string['savedchanges'] = 'Changed Saved';
$string['savefeedback'] = 'Save grade and feedback';
$string['savepref'] = 'Save preferences';
$string['scr_loading'] = 'Loading...';
$string['show'] = 'Show';
$string['show_help'] = 'If filter is set to \'All\' then all student submissions will be displayed; even if the student didn\'t submit anything.  If set to \'Require grading\' only submissions that has not been graded or submissions that were updated by the student after it was graded will be shown.  If set to \'Submitted\' only students who submitted a media assignment.';
$string['singlegrade'] = 'Add help text';
$string['singlegrade_help'] = 'Add help text';
$string['singlesubmissionheader'] = 'Grade submission';
$string['status'] = 'Status';
$string['status_marked'] = 'Graded';
$string['status_nomarked'] = 'Not graded';
$string['status_nosubmission'] = 'No submission';
$string['status_submitted'] = 'Submitted for grading';
$string['status_timemodified'] = 'Last modified';
$string['submission'] = 'Submission';
$string['submissionclosed'] = 'Closed';
$string['submissioncomment'] = 'Comment';
$string['submissionexpired'] = 'Assignment is expired';
$string['submissionnotopened'] = 'Not opened yet';
$string['submissionsettings_hdr'] = 'Submission settings';
$string['submissionstatus'] = 'Submission status';
$string['submit_media'] = 'Submit media';
$string['submitted'] = 'Submitted';
$string['table_failed'] = 'Submission table cannot be displayed due to an error.';
$string['timemodified'] = 'Last modified (Submission)';
