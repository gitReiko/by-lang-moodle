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
 * Strings for component 'publication', language 'en', version '4.0'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Add files';
$string['allfiles'] = 'All files';
$string['allowedfiletypes'] = 'Accepted file types';
$string['allowedfiletypes_err'] = 'Check input! Invalid file extensions or seperators';
$string['allowedfiletypes_help'] = 'Accepted file types can be restricted by entering a comma-separated list of mimetypes, e.g. \'video/mp4, audio/mp3, image/png, image/jpeg\', or file extensions including a dot, e.g. \'.png, .jpg\'. If the field is left empty, then all file types are allowed.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'The assignment details and submission form will be available from <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'from';
$string['allowsubmissionsfromdate_import'] = 'Approval from';
$string['allowsubmissionsfromdate_upload'] = 'Upload from';
$string['allowsubmissionsfromdateh'] = 'Timeslot for upload/approval';
$string['allowsubmissionsfromdateh_help'] = 'You can determine the period of time during which students can upload files or give their approval for file publication. During this time period students can edit their files and can also withdraw their approval for publication.';
$string['allowsubmissionsfromdatesummary'] = 'This assignment will accept submissions from <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the assignment description above will only become visible to students at the "Upload/Approval from" date.';
$string['approval_timeover'] = 'You can only change your approval during the changeperiod.';
$string['approvalchange'] = 'Approval status changed';
$string['approved'] = 'Approved';
$string['approveusers'] = 'Visible for all';
$string['assignment'] = 'Assignment';
$string['assignment_help'] = 'Choose the assignment to import files from. In the moment group-assignments are not supported and therefore not selectable.';
$string['assignment_notfound'] = 'The assignment from which files were imported, could no longer be found.';
$string['assignment_notset'] = 'No assignment has been chosen.';
$string['autoimport'] = 'Sync automatically with assignment';
$string['autoimport_help'] = 'If activated, new submissions will in corresponding assigment will be imported automatically into student folder module. (Optional) Student approval has to be obtained again for the new files.';
$string['availability'] = 'Timeslot for upload/approval';
$string['choose'] = 'Please choose ...';
$string['configautoimport'] = 'If you prefer to have student submissions be automatically imported into student folder instances. This feature can be enabled/disabled for each student folder instance separately.';
$string['configmaxbytes'] = 'Default maximum size for all files in the student folder.';
$string['configmaxfiles'] = 'Default maximum number of attachments allowed per user.';
$string['configobtainstudentapproval'] = 'Documents are visible after the student´s consent.';
$string['configobtainteacherapproval'] = 'Documents of students are by default visible for all other participants.';
$string['configrequiremodintro'] = 'Disable this option if you do not want to force users to enter description of each activity.';
$string['courseuploadlimit'] = 'Course upload limit';
$string['currentlynotapproved'] = '* Currently not approved or disapproved.';
$string['cutoffdate'] = 'Cut-off date';
$string['cutoffdate_help'] = 'If set, the assignment will not accept submissions after this date without an extension.';
$string['cutoffdate_import'] = 'Last approval to';
$string['cutoffdate_upload'] = 'Last upload to';
$string['cutoffdatefromdatevalidation'] = 'Cut-off date must be after the allow submissions from date.';
$string['cutoffdatevalidation'] = 'The cut-off date cannot be earlier than the due date.';
$string['details'] = 'Details';
$string['downloadall'] = 'Download all files as ZIP';
$string['duedate'] = 'to';
$string['duedate_help'] = 'This is when the assignment is due. Submissions will still be allowed after this date but any assignments submitted after this date are marked as late. To prevent submissions after a certain date - set the assignment cut off date.';
$string['duedate_import'] = 'Approval to';
$string['duedate_upload'] = 'Upload to';
$string['duedatevalidation'] = 'Due date must be after the allow submissions from date.';
$string['edit_timeover'] = 'Files can only be edited during the changeperiod.';
$string['edit_uploads'] = 'Edit/upload files';
$string['emailstudentsmail'] = '{$a->username} has changed the approval status of \'{$a->filename}\'
for \'{$a->publication}\' to {$a->apstatus} on {$a->dayupdated} at {$a->timeupdated}.

It is available here:

    {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} has changed the approval status of \'{$a->filename}\'
for <i>\'{$a->publication}\'</i> to <b>{$a->apstatus}</b> on {$a->dayupdated} at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} has uploaded \'{$a->filename}\'
for \'{$a->publication}\' on {$a->dayupdated} at {$a->timeupdated}.

It is available here:

    {$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} has uploaded \'{$a->filename}\'
for <i>\'{$a->publication}\' on {$a->dayupdated} at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['entiresperpage'] = 'Participants shown per page';
$string['eventpublicationapprovalchanged'] = 'Publication file approval changed';
$string['eventpublicationduedateextended'] = 'Publication due-date extended';
$string['eventpublicationfiledeleted'] = 'Publication file delete';
$string['eventpublicationfileimported'] = 'Publication file import';
$string['eventpublicationfileuploaded'] = 'Publication file upload';
$string['extensionduedate'] = 'Extension due date';
$string['extensionnotafterduedate'] = 'Extension date must be after the due date';
$string['extensionnotafterfromdate'] = 'Extension date must be after the allow submissions from date';
$string['extensionto'] = 'Extension to';
$string['filedetails'] = 'Details';
$string['filesofthesetypes'] = 'Files of these types may be added:';
$string['go'] = 'Go';
$string['grantextension'] = 'Grant extension';
$string['groupapprovalmode'] = 'Groupapproval mode';
$string['groupapprovalmode_all'] = 'ALL members of the group have to approve';
$string['groupapprovalmode_help'] = 'Here you decide if approval of all group members or just approval of at least one group member is required for files to be visible. The files will only be visible after approval by all group members or at least one group member.';
$string['groupapprovalmode_single'] = 'At least ONE member has to approve';
$string['guideline'] = 'Visible for everybody:';
$string['hidden'] = 'Hidden';
$string['importfrom_err'] = 'You have to choose an assignment you want to import from.';
$string['maxbytes'] = 'Maximum attachment size';
$string['maxfiles'] = 'Maximum number of attachments';
$string['messageprovider:publication_updates'] = 'Publication notifications';
$string['mode'] = 'Mode';
$string['mode_help'] = 'Choose whether students can upload documents in the folder or documents of an assignment are the source of it.';
$string['modeimport'] = 'Take documents from an assignment';
$string['modeupload'] = 'Students can upload documents';
$string['modulename'] = 'Student folder';
$string['modulename_help'] = 'The student folder offers the following features:

* Participants can upload documents that are available to other participants immediately or after you have checked the documents and given your consent.
* An assignment can be chosen as a basis for a student folder. The teacher can decide which documents of the assignment are visible for all participants. Teachers can also let the participants decide whether their documents should be visible to others.';
$string['modulenameplural'] = 'Student folders';
$string['myfiles'] = 'Own files';
$string['mygroupfiles'] = 'My group\'s files';
$string['name'] = 'Student folder name';
$string['noentries'] = 'No entries';
$string['nofiles'] = 'No files available';
$string['nofilestozip'] = 'No files to zip';
$string['nonexistentfiletypes'] = 'The following file types were not recognised: {$a}';
$string['nopublicationsincourse'] = 'There are no student folder instances in this course.';
$string['nothing_to_show_groups'] = 'Nothing to display - no group available';
$string['nothing_to_show_users'] = 'Nothing to display - no students available';
$string['nothingtodisplay'] = 'No entries to display';
$string['notice'] = 'Notice:';
$string['notice_groupimportrequireallapproval'] = 'Decide whether your files are available for everyone. All group members must give their approval before the file will be visible.';
$string['notice_groupimportrequireoneapproval'] = 'Decide whether your files are available for everyone. A single group member\'s approval is enough for the file to be visible. Please discuss group internally if your file should be visible or not before approving it!';
$string['notice_importnoapproval'] = 'The following files are visible to all.';
$string['notice_importrequireapproval'] = 'Decide whether your files are available for everyone.';
$string['notice_uploadnoapproval'] = 'All files will be immediately visible to everyone upon upload. The teacher reserves the right to hide published files at any time.';
$string['notice_uploadrequireapproval'] = 'All uploaded files will be made visible only after the teacher’s review';
$string['notifications'] = 'Notifications';
$string['notifystudents'] = 'Notify students about approval changes';
$string['notifystudents_help'] = 'If enabled, students recieve a message whenever the approval status of one of their uploads changes. Message methods are configurable.';
$string['notifyteacher'] = 'Notify teachers about uploads';
$string['notifyteacher_help'] = 'If enabled, teachers receive a message whenever a student uploads a file. Message methods are configurable.';
$string['obtainstudentapproval'] = 'Obtain approval';
$string['obtainstudentapproval_help'] = 'Decide if students approval will be obtained: <br><ul><li> Yes - files will be visible to all only after the student approved. The teacher may select individual students/files to ask for approval.</li><li> No - the student’s approval will not be obtained via Moodle. The file’s visibility is solely the teacher’s decision.</li></ul>';
$string['obtainteacherapproval'] = 'Approved by default';
$string['obtainteacherapproval_help'] = 'Decide if files will be made visible immediately upon upload or not: <br><ul><li> Yes - all files will be visible to everyone right away</li><li> No - files will be published only after the teacher approved</li></ul>';
$string['optionalsettings'] = 'Options';
$string['pending'] = 'Pending';
$string['pluginadministration'] = 'Student folder administration';
$string['pluginname'] = 'Student folder';
$string['privacy:metadata:approval'] = 'Whether or not the group member approved or rejected the file.';
$string['privacy:metadata:contenthash'] = 'SHA1 hash of the file\'s content, used to determine if the file changed.';
$string['privacy:metadata:extduedates'] = 'Stores information about overridden/extended due dates for mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'The due date effective for the user due to it being overridden/extended.';
$string['privacy:metadata:fileid'] = 'Identifier of the file.';
$string['privacy:metadata:filename'] = 'The file\'s name.';
$string['privacy:metadata:files'] = 'Stores information (identifier, whom it belongs, where it came from, hash of content, file name and if approved by teacher and/or student) about the files uploaded/imported into mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Stores information about group members\' approval or rejection of files imported from group\'s submission.';
$string['privacy:metadata:publicationfileexplanation'] = 'Files and converted onlinetext-submissions for this plugin get stored via Moodle\'s file API.';
$string['privacy:metadata:publicationperpage'] = 'How many entries should be displayed on a single table page!';
$string['privacy:metadata:studentapproval'] = 'Whether or not the student approved or rejected the file.';
$string['privacy:metadata:teacherapproval'] = 'Whether or not the teacher approved or rejected the file.';
$string['privacy:metadata:timecreated'] = 'The time and date the data record was created.';
$string['privacy:metadata:timemodified'] = 'The most recent time and date the data record got updated/modified.';
$string['privacy:metadata:type'] = 'Marks the origin of the file (uploaded by student, imported from assignment submission or converted onlinetext from assignment submission).';
$string['privacy:metadata:userid'] = 'Identifier of the user.';
$string['privacy:path:files'] = 'Files';
$string['privacy:path:resources'] = 'Resources';
$string['privacy:type:import'] = 'Imported file';
$string['privacy:type:onlinetext'] = 'Imported onlinetext';
$string['privacy:type:upload'] = 'Uploaded file';
$string['publication:addinstance'] = 'Add a new student folder';
$string['publication:approve'] = 'Decide if files should be visible for every student';
$string['publication:grantextension'] = 'Grant extension';
$string['publication:receiveteachernotification'] = 'Receive notifications for teachers';
$string['publication:upload'] = 'Upload files to a student folder';
$string['publication:view'] = 'View student folder';
$string['publicfiles'] = 'Public files';
$string['published_aftercheck'] = 'No, only after approval by a teacher';
$string['published_immediately'] = 'Yes immediately, without approval by a teacher';
$string['rejected'] = 'Rejected';
$string['rejectusers'] = 'Invisible for all';
$string['requiremodintro'] = 'Require activity description';
$string['reset'] = 'Revert';
$string['reset_userdata'] = 'All data';
$string['resetstudentapproval'] = 'Reset status';
$string['save_changes'] = 'Save changes';
$string['saveapproval'] = 'Save approval';
$string['savestudentapprovalwarning'] = 'Are you sure you want to save these changes? You can not change the status once it is set.';
$string['saveteacherapproval'] = 'Save approval';
$string['search:activity'] = 'Student folder - activity information';
$string['show_details'] = 'Show details';
$string['status'] = 'Status';
$string['status:approved'] = 'Approved';
$string['status:approvednot'] = 'Rejected';
$string['student_approve'] = 'Approve';
$string['student_approved'] = 'Approved';
$string['student_pending'] = 'Not visible (not approved)';
$string['student_reject'] = 'Reject';
$string['student_rejected'] = 'Rejected';
$string['studentapproval'] = 'Status';
$string['studentapproval_help'] = 'The column status represents the students reply of the approval:

* ? - approval pending
* ✓ - approval given
* ✖ - approval declined';
$string['teacher_approved'] = 'Visible (approved)';
$string['teacher_pending'] = 'Confirmation pending';
$string['teacher_rejected'] = 'declined';
$string['teacherapproval'] = 'Approval';
$string['teacherapproval_help'] = 'Current decision on files, to be visible to all participants: <br /><ul><li>Choose... - not approved or disapproved yet, the files are not visible.</li><li>Yes - approved, the files are visible.</li><li>No - disapproved, the files are not visible.</li></ul>';
$string['total'] = 'Total';
$string['updatefiles'] = 'Update files';
$string['updatefileswarning'] = 'Files from an individual student in the student folder will be updated with his/her submission of the assignment. Already visible files from students will be replaced too, if they are deleted or refreshed - the settings of the student as to the visibility will not be changed.';
$string['uploaded'] = 'Uploaded';
$string['visibility'] = 'Visible for all';
$string['visible'] = 'Visible';
$string['visibleforstudents'] = 'Visible to all';
$string['visibleforstudents_no'] = 'This file is NOT visible to students';
$string['visibleforstudents_yes'] = 'Students can see this file';
$string['warning_changefromobtainstudentapproval'] = 'If you perform this change, only you can decide which files are visible to all students. The students are not asked for their approval. All files marked as approved will become visible to all students independent of the students\' decisions.';
$string['warning_changefromobtainteacherapproval'] = 'After activating this setting, all uploaded files will be visible to other participants. All uploaded will become visible. You can manually make files invisible to certain students.';
$string['warning_changetoobtainstudentapproval'] = 'If you perform this change, the students are asked for their approval for all files marked as visible. Files will only become visible after the students\' approval.';
$string['warning_changetoobtainteacherapproval'] = 'After deactivating this setting uploaded files will not be visible to other participants automatically. You will have to determine which files are visible. Already visible files will become invisible.';
$string['withselected'] = 'With selected...';
$string['zipusers'] = 'Download as ZIP';
