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
 * Strings for component 'block_edureportbook', language 'en', version '4.0'.
 *
 * @package     block_edureportbook
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignstudents'] = 'Assign students';
$string['assignstudents:description'] = 'On the left side you see the students in your course. Please select the appropriate legal guardians for each student!';
$string['assignstudents:generalgroup:description'] = 'The following group is meant to connect everybody within this reportbook as a general means of exchange. It is recommended to select everybody for this group, but of course you can make a selection on your own!';
$string['assistant_descr_about'] = '<p>
        This assistant helps you to setup a reportbook to communicate with the
        parents of your pupils. To allow fluent communication, two Moodle forums
        will be used. One of those will be open for all users and allows a
        mutual information exchange. The second one provides one Moodle group per pupil
        and allows private communication with the parents of the respective pupil.
    </p>
    <p>
        Using this reportbook you have a communication channel for all stakeholders,
        and an additional private channel for sensitive information!
    </p>
    <p>
        All users receive notifications by default to the e-mail address that is
        given in the Moodle user profile. Additionally, the use of the Moodle Mobile
        App is recommended, which allows instant notifications on mobile devices.
    </p>
    <p>
        More information regarding the Moodle Mobile App can be obtained at
        <a href="https://moodle.com/de/app/" target="_blank">https://moodle.com/de/app/</a>!
    </p>';
$string['assistant_finish_btn'] = 'Close assistant';
$string['assistant_finish_done'] = '<p>
        Great, all steps of this assistant have been processed. You can now close
        this assistant. We hope, that this assistant was helpful for you.
        You can always re-enable this assistant by adding the block to your course page.
    </p>';
$string['assistant_invalid_stage'] = 'Invalid process stage given.';
$string['assistant_stage_about'] = 'About';
$string['assistant_stage_finish'] = 'Finish';
$string['assistant_stage_protection'] = 'Privacy';
$string['assistant_stage_users'] = 'Users';
$string['assistant_users_enrolments'] = 'Enrol users';
$string['assistant_users_enrolments_description'] = 'You can use any enrolment-method your Moodle site provides. Please ensure, that parents are assigned the role "{$a->rolename_legalguardian}" and students the role "{$a->rolename_student}"!';
$string['assistant_users_relation'] = 'Trigger relations between students and legal guardians';
$string['assistant_users_relation_description'] = '<p>
        Please select one of your pupils from the left side first. All related legal
        guardians will be marked as active on the right side, if there is already
        a relation set up between those two. You can enable and disable the relation
        just by clicking on the name of the respective legal guardian.
    </p>
    <p>
        Attention, the selected legal guardians will also be able to obtain
        messages that were exchanged in the past regarding to respective student.
    </p>';
$string['assistant_users_relation_nouserwarning'] = 'You must enrol users before you can proceed!';
$string['condition'] = 'Condition';
$string['condition_coursegroupmode'] = 'Group mode of course';
$string['condition_coursegroupmode_description'] = 'The group mode for all activities can be forced by course settings. This should <strong>not</strong> be active.';
$string['condition_forcedsubscription'] = 'Forced subscription of:';
$string['condition_forcedsubscription_description'] = 'The subscription of the forum should be enforced, so that all users are notified about new postings.';
$string['condition_generalforum'] = 'Forum for general exchange';
$string['condition_generalforum_defaultname'] = 'Forum for general exchange';
$string['condition_generalforum_description'] = 'The general exchange forum allows communication between all participants of that course. It can be used to share general information and discuss general topics.';
$string['condition_groupforum'] = 'Forum for private exchange';
$string['condition_groupforum_defaultname'] = 'Forum for private exchange';
$string['condition_groupforum_description'] = 'The forum for private exchange relies on separated groups and allows private communication with students and their respective legal guardians.';
$string['default_group_all'] = 'General group for all';
$string['edureportbook:addinstance'] = 'Add eduReportbook';
$string['edureportbook:manage'] = 'Manage';
$string['edureportbook:myaddinstance'] = 'Add eduReportbook';
$string['invalid_forum'] = 'Invalid forum given.';
$string['missing_configuration'] = 'Missing appropriate configuration by Moodle-Admins';
$string['pluginname'] = 'eduReportbook';
$string['privacy:metadata'] = 'This plugin does not store any personal data';
$string['proceed_to_course'] = 'Proceed to course';
$string['proceed_to_enrolments'] = 'Course enrolments page';
$string['proceed_to_last_step'] = 'Back to previous step';
$string['proceed_to_next_step'] = 'Proceed to next step';
$string['resolve'] = 'resolve';
$string['role_legalguardian'] = 'Legal guardian';
$string['role_legalguardian:description'] = 'Select the role a legal guardian will have within a course.';
$string['role_missing_configuration'] = 'The edureportbook assistant works best if roles have been dedicated to students and parents. Please ask your Moodle administrator to do this configuration for you!';
$string['role_student'] = 'Student';
$string['role_student:description'] = 'Select the role a student will have within a course.';
$string['separate'] = 'Separation';
$string['separate:description'] = 'If you want to have private communication channels to the legal guardians of each of your students you can enable the groupmode. It is recommended to choose "separated groups" to ensure, that private communication will not be visible to others. What ever you choose here will be mandatory for the whole course!';
$string['separate:error'] = 'Could not set up privacy mode';
$string['separate:success'] = 'Successfully set privacy mode';
$string['step_enrol'] = 'Enrol users';
$string['step_enrol_legalguardians'] = 'Enrol legal guardians';
$string['step_remove_block'] = 'Remove this block';
$string['step_separate_groups'] = 'Enable separation';
$string['step_studentassign'] = 'Manage relations';
