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
 * Strings for component 'discourse', language 'en', version '4.0'.
 *
 * @package     discourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activephase'] = 'Active phase';
$string['autoswitch'] = 'The phases are changed automatically at the times specified';
$string['backtooverview'] = 'Back to overview';
$string['closegroup'] = 'Minimize {$a}';
$string['currentsubmission'] = 'Current submission';
$string['currentversion'] = 'Current version';
$string['deadlinephasefour'] = 'Completion of the collaborative phase';
$string['deadlinephaseone'] = 'Completion of the solo phase';
$string['deadlinephasethree'] = 'Completion of the 2nd group phase';
$string['deadlinephasetwo'] = 'Completion of the 1st group phase';
$string['deletealluserdata'] = 'Delete all user data';
$string['discourse:addinstance'] = 'Add new DisCourse';
$string['discourse:editphase'] = 'Edit phase information';
$string['discourse:editsubmission'] = 'Submit or edit group text';
$string['discourse:potentialparticipant'] = 'Enter DisCourse as participant';
$string['discourse:switchphase'] = 'Toogle DisCourse phase';
$string['discourse:viewallgroups'] = 'View all groups';
$string['discourse:viewgroupparticipants'] = 'View group participants';
$string['editsubmission'] = 'Edit submission';
$string['errfilloutfield'] = 'Please fill out this field';
$string['group'] = 'Group';
$string['groupfor'] = 'Group for {$a}';
$string['groupingdescription'] = 'Grouping for DisCourse activity {$a}';
$string['groupingmaybedeleted'] = 'The grouping of the DisCourse was deleted or is invalid. All course groups (from other DisCourses or activities as well) will be displayed.';
$string['groupinvalid'] = 'Group not found';
$string['groupparticipants'] = 'Participants';
$string['groupview'] = 'Group view';
$string['hint'] = 'Hint';
$string['hintphasefour'] = 'Note on the collaborative phase';
$string['hintphaseone'] = 'Note on the solo phase';
$string['hintphasethree'] = 'Note on the 2nd group phase';
$string['hintphasetwo'] = 'Note on the 1st group phase';
$string['modeautoswitch'] = 'Activate mode "Automatic phase switch"';
$string['modulename'] = 'DisCourse';
$string['modulename_help'] = 'The DisCourse activity offers the possibility to conduct group discussions in a multi-step procedure.

Based on the concept of the pyramid discussion, the participants of the DisCourse initially write their own text on the discussed topic in a first phase. In the next two phases, they then combine their own positions with those of other participants and thus develop more differentiated texts together, incorporating other points of view. Finally, in the last phase, all DisCourse participants collaborate to develop a final position on the discussed topic based on their previous results.

In this way, the DisCourse enables the participants to work together to develop arguments and perspectives on a topic and to weigh them against and with each other. This allows the participants to develop differentiated positions on a complex topic in a reflexive exchange while making the progress of the discussion visible by displaying the previous preliminary positions.

On the overview page teachers can …

* See all phases and their deadlines and hints specified when the activity was created
* See a brief summary of all DisCourse groups and their submission states and open the group pages for each of these groups
* Switch phases (phases can also be switched automatically by Moodle at the specified deadline)

Students can …

* Also see all phases, their deadlines and the phase hints
* View only their own groups in the different phases and open the group pages for these

On the group page teachers can see …

* The members, the submission state and (if already handed in) the submission of the selected group
* The hint for the phase of the selected group
* The position of each group from the last phase included in this group

Students can additionally hand in a submission for the group if the phase of the group corresponds to the current phase of the DisCourse (the positions of the pre-groups are already pre-filled in the editor).';
$string['modulename_link'] = 'mod/discourse/view';
$string['modulenameplural'] = 'DisCourses';
$string['noautoswitch'] = 'The automatic phase switch is deactivated. The phases must therefore be changed manually.';
$string['nogroupmember'] = 'Not possible because not a group member';
$string['nogroups'] = 'No groups available';
$string['nonewmodules'] = 'No new modules';
$string['nosubmission'] = 'No submission yet';
$string['notsubmitted'] = 'Not submitted yet';
$string['opengroup'] = 'Maximize {$a}';
$string['openhint'] = 'Open or close hint for {$a}';
$string['phasecompletion'] = 'Phase completion';
$string['phasefour'] = 'Collaborative phase';
$string['phasehint'] = 'Phase hint';
$string['phaseone'] = 'Solo phase';
$string['phaseshints'] = 'Hints for the phases';
$string['phaseswitched'] = 'Phase switched.';
$string['phasethree'] = '2nd group phase';
$string['phasetwo'] = '1st group phase';
$string['pluginadministration'] = 'Administration of DisCourse';
$string['pluginname'] = 'DisCourse';
$string['positionsfromlastphase'] = 'Positions from the last phase';
$string['privacy:metadata:core_group'] = 'The DisCourse activity creates and uses groups and groupings';
$string['privacy:metadata:discourse_participants'] = 'Contains the groups of all DisCourse participants.';
$string['privacy:metadata:discourse_participants:discourse'] = 'ID of the DisCourse of the participant';
$string['privacy:metadata:discourse_participants:groupids'] = 'IDs of the DisCourse groups of the participant';
$string['privacy:metadata:discourse_participants:userid'] = 'User ID of the participant';
$string['privacy:metadata:discourse_submissions'] = 'Contains data of all DisCourse submissions.';
$string['privacy:metadata:discourse_submissions:currentversion'] = 'Current version of the submission';
$string['privacy:metadata:discourse_submissions:discourse'] = 'ID of the DisCourse in which the submission was made';
$string['privacy:metadata:discourse_submissions:format'] = 'Submission format';
$string['privacy:metadata:discourse_submissions:groupid'] = 'ID of the group from which the submission was made';
$string['privacy:metadata:discourse_submissions:submission'] = 'Submission content';
$string['privacy:metadata:discourse_submissions:timecreated'] = 'Date on which the submission was made';
$string['privacy:metadata:discourse_submissions:timemodified'] = 'Time of the last revision of the submission';
$string['resetting_data'] = 'Participants and submissions deleted';
$string['sheduledend'] = 'Sheduled end';
$string['shouldswitchphaseto'] = 'The automatic phase switch is deactivated. The next phase should be activated by now.';
$string['submission'] = 'Submission';
$string['submissioncontent'] = 'Content of submission';
$string['submissionfaileddoubled'] = 'Submission failed. Another group member has already made a submission recently.';
$string['submissionreceived'] = 'Submission handed in';
$string['submissionstate'] = 'State';
$string['submitsubmission'] = 'Hand in submission';
$string['submitted'] = 'Submitted at';
$string['switchto'] = 'Switch to';
$string['task_switchphases'] = 'Automatic phase switch';
$string['toggleallgroups'] = 'Toggle all groups in phase {$a}';
$string['updated'] = 'Updated at';
$string['usedeadlines'] = 'Use deadlines for phases';
$string['useridinvalid'] = 'User ID invalid';
$string['view'] = 'Overview';
