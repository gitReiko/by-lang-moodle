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
 * Strings for component 'tutorialbooking', language 'en', version '4.0'.
 *
 * @package     tutorialbooking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Add participants';
$string['adminlockhelp'] = 'Select to make all signup sheets locked by default';
$string['adminlockprompt'] = 'Select to lock signup sheets by default';
$string['adminnumbershelp'] = 'Enter the default number of participants for sessions - can be overridden when configuring sessions';
$string['adminnumbersprompt'] = 'Select default number of participants';
$string['adminservicehelp'] = 'NOTICE: Swiching this on will mean that emails/notifications will be sent to participants - when off only main admin (id=2) gets notifications';
$string['adminserviceprompt'] = 'Mark this instance as a live Moodle service';
$string['after'] = 'After {$a->session}';
$string['ajax_invalid_slots'] = 'The sessions are not for the correct signup sheet';
$string['ajax_slots_not_exist'] = 'The sessions do not exist';
$string['alreadysignedup'] = 'You have already signed up to a session.';
$string['attendcoltitle'] = 'Attendance';
$string['attendees'] = 'Participants';
$string['availabletoadd'] = 'Available to add';
$string['backtosession'] = 'Messages sent, click here to go back to signup list';
$string['cancel'] = 'Cancel';
$string['completionsignedup'] = 'Users must signup to a session';
$string['completionsignedupgroup'] = 'Require signup';
$string['confirm'] = 'Confirm';
$string['confirmmessage'] = 'Are you sure you wish to remove {$a->name} from {$a->timeslot}?';
$string['confirmremovefromslot'] = 'Are you sure you wish to remove your signup?';
$string['confirmusersignupremoval'] = 'Confirm signup removal';
$string['copysession'] = 'Copy session';
$string['cronfixduplicates'] = 'Fix duplicate signups in signup sheet';
$string['defaultdescription'] = 'Session {$a}';
$string['deletepageheader'] = 'Confirm delete';
$string['deletesession'] = 'Delete';
$string['deletewarningtext'] = 'Are you sure you want to delete "{$a}"';
$string['editsession'] = 'Edit';
$string['editsessionheading'] = 'Edit existing session';
$string['editsessionhelp'] = 'To modify the session, please fill in the form below.';
$string['editspaceserror'] = 'ERROR: You cannot reduce the number of places ({$a->spaces}) to less that the number of signups ({$a->signedup})';
$string['emailgroupprompt'] = 'Message participants';
$string['emailpagetitle'] = 'Message participants';
$string['eventexport'] = 'Signups exported';
$string['eventexportall'] = 'All signups exported';
$string['eventsessionadded'] = 'Session added';
$string['eventsessiondeleted'] = 'Session deleted';
$string['eventsessionmessage'] = 'Messaged users in session';
$string['eventsessionupdated'] = 'Session updated';
$string['eventsignupadded'] = 'Signup';
$string['eventsignupcapabilityremoved'] = 'Signup capability lost';
$string['eventsignupremoved'] = 'Signup removed';
$string['eventsignupteacheradded'] = 'Signup forced';
$string['eventsignupteacherremoved'] = 'Signup revoked';
$string['exportcsvlistallprompt'] = 'Export signups from all signup sheets on this course';
$string['exportlistprompt'] = 'Export signup sheet';
$string['first'] = 'First';
$string['freespaces'] = 'Free places';
$string['indexnoid'] = 'A course id must be stipulated to view all signup sheets';
$string['instancedesc'] = 'Signup sheet notes';
$string['instancedeschelp'] = 'Information participants need to know when signing up, such as duration of session.';
$string['instanceheading'] = 'General settings';
$string['instancenamehelp'] = 'e.g. Tutorial 1 or Computer Labs or Fortnightly Tutorials';
$string['instancetitle'] = 'Signup sheet title';
$string['last'] = 'Last';
$string['linktomanagetext'] = 'Manage sessions';
$string['liveservicemsg'] = 'Live service recognised, notification being sent to all participants';
$string['locked'] = 'Unlock signup sheet';
$string['lockederror'] = 'The signup sheet is locked. You may not signup at this time.';
$string['lockedprompt'] = 'Locked';
$string['lockhelp'] = 'If locked users will not be able to change signups on this signup sheet.
Locking it now will effectively freeze the sessions in their current state.';
$string['lockwarning'] = 'This signup sheet has been locked by the teacher. You cannot modify signups to session.';
$string['messageprompt'] = 'Message';
$string['messageprovider:notify'] = 'Signup sheet notification';
$string['messagessent'] = 'Messages sent';
$string['messagewillbesent'] = 'Message to the participant being removed';
$string['moduleadminname'] = 'Signup sheet';
$string['modulename'] = 'Signup sheet';
$string['modulename_help'] = 'The signup sheet activity allows users to signup to a single session.

Teachers can:

* Set if the names of participants of a session are visible to other users.
* Print registers of participants signed up to sessions.
* Generate a csv file of the signups.
* Manually add and remove participants from sessions.
* Lock and unlock the ability to signup.
* Send a message to everyone signed up to a session.';
$string['modulenameplural'] = 'Signup sheets';
$string['movedownsession'] = 'Move down';
$string['moveslot'] = 'Move session {$a}';
$string['moveupsession'] = 'Move up';
$string['newsessionheading'] = 'New session';
$string['newsessionhelp'] = 'To create a new session in the above signup sheet, please fill in the form below.';
$string['newtimslotprompt'] = 'Add new session';
$string['nosignup'] = 'You are not signed up to the signup sheet.';
$string['noslots'] = 'There are no sessions for this signup sheet.';
$string['numbersline'] = '{$a->total} places available in total ({$a->taken} used, {$a->left} free)';
$string['numbersline_oversubscribed'] = '{$a->total} places available in total ({$a->taken} used, oversubscribed by {$a->left})';
$string['option_spaces_high'] = 'The number of places must be less than 65536';
$string['option_spaces_low'] = 'The number of places must be greater than 0';
$string['oversubscribed'] = 'There are {$a->freeslots} places left on {$a->timeslotname}. You tried to add {$a->numbertoadd} atendee.';
$string['oversubscribedby'] = 'Over subscribed by';
$string['pagecrumb'] = 'Sessions';
$string['pagetitle'] = 'Signup sheet';
$string['pluginadministration'] = 'Signup sheet';
$string['pluginname'] = 'Signup sheet';
$string['positionfirst'] = 'Top of the page';
$string['positionlast'] = 'Bottom of the page';
$string['positionprompt'] = 'Position';
$string['privacy'] = 'Privacy';
$string['privacy:export:messages'] = 'Messages';
$string['privacy:export:signups'] = 'Signups';
$string['privacy:metadata:core_message'] = 'Messages sent to participants via the messaging system';
$string['privacy:metadata:tutorialbooking_messages'] = 'Stores messages sent to participants through the signup sheet plugin';
$string['privacy:metadata:tutorialbooking_messages:message'] = 'The message that was sent';
$string['privacy:metadata:tutorialbooking_messages:sentby'] = 'The user who sent the message';
$string['privacy:metadata:tutorialbooking_messages:senttime'] = 'The time the message was sent';
$string['privacy:metadata:tutorialbooking_messages:sentto'] = 'The users that the message was sent to';
$string['privacy:metadata:tutorialbooking_messages:subject'] = 'The subject of the message';
$string['privacy:metadata:tutorialbooking_signups'] = 'Stores the signups that participants have made to signup sheet activities';
$string['privacy:metadata:tutorialbooking_signups:sessionid'] = 'The session the user signed up to';
$string['privacy:metadata:tutorialbooking_signups:signupdate'] = 'The date the user signed up';
$string['privacy:metadata:tutorialbooking_signups:userid'] = 'The user who signed up';
$string['privacy_showall'] = 'Users can see all signups';
$string['privacy_showown'] = 'Users can only see their signup';
$string['reasonrequired'] = 'You must provide the reason you are removing the participant.';
$string['registerdateline'] = 'Please enter date of session (dd/mm/yy):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_&nbsp;_&nbsp;&nbsp;_&nbsp;_&nbsp;&nbsp;_&nbsp; _';
$string['registerfooter'] = 'Please sign next to your name to indicate attendance. If your name is not on the list then please do
not add it without asking first.';
$string['registerprintdate'] = 'Print register (by signup)';
$string['registerprintname'] = 'Print register (by name)';
$string['removalmessagesubject'] = 'You have been removed from {$a->timeslot}';
$string['removalreason'] = 'Reason for removal';
$string['remove'] = 'Confirm removal';
$string['removefromslot'] = 'Remove my signup';
$string['removeuserfromslot'] = 'Remove from this session';
$string['reset'] = 'Undo';
$string['save'] = 'Save';
$string['saveasnew'] = 'Save as new session';
$string['search:activity'] = 'Signup sheet - activity information';
$string['search:session'] = 'Signup sheet - session information';
$string['selectformat'] = 'Select export format';
$string['sendmessage'] = 'Send message';
$string['sentby'] = 'Sender';
$string['senttime'] = 'Sent on';
$string['sentto'] = 'Recipients';
$string['sessiondescriptionhelp'] = 'Date, time and location e.g. 10:00am on Thursday 14th Aug in Room B35, Business School or 10:00am on Thursday 14th & 21st Aug, and 4th Sep in Room B35, Business School.';
$string['sessiondescriptionhelp2'] = 'Please ensure you have included the name of the building!<br/>
Module convenors should make sure that they have booked the room!';
$string['sessiondescriptionprompt'] = 'Title';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'No places left, please pick another session.';
$string['sessionpagetitle'] = 'Session management';
$string['sessionsummaryprompt'] = 'Details';
$string['showallmessages'] = 'Show all messages';
$string['showalltutorialbookings'] = 'Signup sheet index';
$string['showmymessages'] = 'Show my messages only';
$string['signuotosession'] = 'Sign up to a session';
$string['signupforslot'] = 'Sign me up for this session';
$string['signuprequired'] = 'Sign up to the signup sheet';
$string['spacesprompt'] = 'Number of places';
$string['statsline'] = 'The signup sheet has {$a->places} places, with {$a->signedup} participants';
$string['studentcoltitle'] = 'Participant name';
$string['subjecttitleprompt'] = 'Subject';
$string['testservicemsg'] = 'Non live service - notification being sent to Admin (id=2)';
$string['thereareno'] = 'There are no signup sheets in this course';
$string['timeslottitle'] = 'Session title';
$string['totalspaces'] = 'Total spaces';
$string['tutorialbooking'] = 'Signup sheet';
$string['tutorialbooking:addinstance'] = 'Allows a user to add this activity to a course';
$string['tutorialbooking:adduser'] = 'Allows the user to add participants to a session.';
$string['tutorialbooking:editsignuplist'] = 'Allow users to edit sessions.';
$string['tutorialbooking:export'] = 'Allow the user to export signups';
$string['tutorialbooking:exportallcoursetutorials'] = 'Required to export list for all signups in a course.';
$string['tutorialbooking:message'] = 'Allows the user send messages to attendess via the signup sheet activity.';
$string['tutorialbooking:oversubscribe'] = 'Allows the user to add participants to a session even if this will take it over its maximum places.';
$string['tutorialbooking:printregisters'] = 'Allows the user to print registers for the activity.';
$string['tutorialbooking:removeuser'] = 'Allows the user to remove participants from a session.';
$string['tutorialbooking:submit'] = 'Required to signup to a session.';
$string['tutorialbooking:viewadminpage'] = 'Allows the user to see the admin page of the activity.';
$string['tutorialbooking:viewallmessages'] = 'Required to view messages other users sent to attendess of a session.';
$string['unauthorised'] = 'You do not have permission to signup.';
$string['unlocked'] = 'Lock signup sheet';
$string['usedspaces'] = 'Used places';
$string['useralreadysignedup'] = 'User {$a->id} is already signed up to a session.';
$string['userdisplay'] = '{$a->name} ({$a->username})';
$string['viewmessages'] = 'View sent messages';
$string['you'] = 'You';
$string['yousignedup'] = 'You are signed up to this session';
