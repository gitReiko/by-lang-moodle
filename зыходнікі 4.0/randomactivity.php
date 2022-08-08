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
 * Strings for component 'randomactivity', language 'en', version '4.0'.
 *
 * @package     randomactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhasissue'] = 'At least one activity in this Random activity pool has the following issue: {$a}.';
$string['addactivities'] = 'Add activities';
$string['addselectedactivities'] = 'Add selected activities';
$string['applychangesreassign'] = 'Apply changes and re-assign';
$string['assignedactivity'] = 'Assigned activity';
$string['assignees'] = 'Assignees';
$string['changesapplied'] = 'Changes have been applied.';
$string['completiontrackactivity'] = 'Require assigned activity completion';
$string['completiontrackactivity_desc'] = 'Students must complete their assigned activity';
$string['completiontrackactivity_help'] = 'If enabled, this Random Activity will attempt to track completion of assigned activities and automatically update its completion accordingly.<br>
<b>Note:</b> This may override some of the other completion tracking methods.';
$string['confirmreassign'] = 'You are about to change the pool of activities used by this Random activity. Students will be re-assigned to new activities.<br>
Students who started working on their previously assigned activity will lose their progress if they are assigned to an other one.<br>
Students who earned a grade for their previously assigned activity will lose their grade for this activity if they are assigned to an other one.';
$string['continuetoactivity'] = 'Continue to activity';
$string['duedate'] = 'Due date';
$string['duedate_help'] = 'Deadline for students for this Random activity to be completed (this will appear in the calendar).<br>
Beyond this date, students will be notified that the due date is over when accessing this Random activity.
They will still be able to access their assigned activity, if the latter allows it.
However, no new grade will be registered for this Random activity.';
$string['duedatefor'] = 'Due date for {$a}';
$string['duedatefor_desc'] = 'Deadline to complete and submit this activity!';
$string['duedateover'] = 'The deadline for this activity is over.<br>
You can still access the activity if you want, however no new grade will be registered.';
$string['dynamicdisplay'] = 'Dynamic display on course page';
$string['dynamicdisplay_help'] = 'If set to "Yes", this activity will display on the course page as the activity it points to. This will only affect students.';
$string['filters'] = 'Filters:';
$string['groupbyseeding'] = 'Group by seeding';
$string['grouping'] = 'grouping {$a}';
$string['groupmode'] = 'Group mode';
$string['groupmode_help'] = 'This activity is set to use groups. Members of a same group will be assigned to the same activity.<br>
If a grouping is set, then only the groups of this grouping will be considered.<br>
If a user doesn\'t belong to any group, or belongs to more than one group, they will be assigned individually.';
$string['groupmodedetails'] = 'Group mode ({$a}).';
$string['invalidsesskeyorpermission'] = 'This action has been prevented for security reasons. Either you do not have the required permission, or you session key could not be confirmed.';
$string['modulename'] = 'Random activity';
$string['modulename_help'] = 'The Random activity module enables the teacher to define a pool of activities,
from which students will randomly draw one to take.<br><br>
Activity grade will be retrieved for each student and used as the Random activity grade.<br>
The seed for random can be customized in order to guarantee consistence between activities for each student.';
$string['modulenameplural'] = 'Random activities';
$string['modulenotfound'] = 'Module not found';
$string['noactivityerror'] = 'No activity has been configured.';
$string['noactivitytoadd'] = 'No activity available to add.';
$string['nogradesetup'] = 'No grade has been set up for this activity.';
$string['notgraded'] = 'Not graded';
$string['notsupported'] = 'Not supported';
$string['orderbyappearanceincourse'] = 'Order by appearance in course';
$string['orderbyselect'] = 'order by or group by';
$string['orderbyselect_help'] = 'If "Order by appearance in course" is selected, Random Activities will show up as they appear in course.<br><br>
If "Group by seeding" is selected, Random Activities will be grouped in several tables, with all Random Activities in the same table having the same seeding.<br>
Random Activities with the same seeding means they have the same seed and the same number of activities. Any student participating in several
of these Random Activities will be assigned to the same n-th activity (for example, to the first activity of every Random Activity with the same seeding).';
$string['originalgrade'] = 'Original grade';
$string['pluginadministration'] = 'Random activity administration';
$string['pluginname'] = 'Random activity';
$string['pluginname_help'] = 'You can define here the pool of activities to use for this Random activity.<br>Only teachers can see this page.
Students accessing this activity will be redirected to the randomly drawn activity they are assigned to.';
$string['privacy:metadata'] = 'The Random activity plugin does not store any personal data.';
$string['randomactivity:addinstance'] = 'Add Random activity instance';
$string['randomactivity:manage'] = 'Manage a Random activity';
$string['randomactivity:viewactivities'] = 'View Random activity pool of activities';
$string['randomactivity:viewgrades'] = 'View Random activity grades';
$string['refresh_help'] = 'Refresh assignees preview. This does not apply any changes.';
$string['returntocourse'] = 'Return to course';
$string['seed'] = 'Seed';
$string['seed_help'] = 'The seed is what decides which student is assigned to which activity.<br>
You can set up several Random activities with <b>the same number of activities</b> and <b>the same seed</b>.
Such Random activities will assign students in the same way:
students assigned to the first activity of one Random activity will be assigned to the first activity in the others Random activities as well.<br>';
$string['seedingn'] = 'Seeding #{$a}';
$string['seedtobalance'] = 'Seed to balance users';
$string['seedtotimestamp'] = 'Seed to current timestamp';
$string['showonlymembersof'] = 'Show only members of:';
$string['unknown'] = 'Unknown';
$string['viewall'] = 'View all';
$string['viewingradebook'] = 'View in gradebook';
