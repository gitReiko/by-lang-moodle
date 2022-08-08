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
 * Strings for component 'allocationform', language 'en', version '4.0'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Allocation form Access denied';
$string['add_option'] = 'Add new option';
$string['al_notwant'] = 'Do not want';
$string['al_notwant_help'] = 'Select an option that you do not wish to be allocated to';
$string['allocationform'] = 'Allocation form';
$string['allocationform:addinstance'] = 'Add a new allocation form';
$string['allocationform:edit'] = 'Edit allocation forms';
$string['allocationform:exportallocations'] = 'Export allocations';
$string['allocationform:exportchoices'] = 'Export choices';
$string['allocationform:reallocate'] = 'Force a reallocation';
$string['allocationform:viewallocations'] = 'View all the allocations made';
$string['allocationform:viewform'] = 'View allocation forms';
$string['allocationformname'] = 'Allocation form name';
$string['allocationformname_help'] = 'The name of this allocation form, it will be used to link to the form.';
$string['allocations'] = 'Allocations';
$string['allocations_not_visible'] = 'The allocations can only be seen by editors.';
$string['allocationsexported'] = 'Allocations exported';
$string['allocationviewed'] = 'Allocation form viewed';
$string['aria:delete'] = 'Delete {a}';
$string['aria:edit'] = 'Edit {$a}';
$string['aria:restrict'] = 'Restrict {$a}';
$string['availabilityheading'] = 'Form availability';
$string['back_to_edit'] = 'Switch to edit mode';
$string['back_to_edit_warning'] = 'This will delete all information submitted to the form.';
$string['before_start'] = 'The start date of this allocation form has not yet passed.';
$string['calendar:avaliable'] = 'Allocations released for {$a}';
$string['calendar:deadline'] = 'Deadline for {$a}';
$string['cannoteditinapp'] = 'The allocation form cannot be edited in the Moodle App';
$string['changestateto'] = 'Are you sure you wish to change the form to the {$a} state?';
$string['choice'] = 'Choice {$a->choice}';
$string['choice_help'] = 'Select an option that you would wish to be allocated to.';
$string['choicealreadyselected'] = 'An option may only be slected one time';
$string['choiceheading'] = 'Setup choices';
$string['choiceincorrectstate'] = 'The form is not open. Please refresh the page.';
$string['choiceinvalid'] = 'You have selected an option that is not part of the form';
$string['choicerequired'] = 'Make a choice';
$string['choicesexported'] = 'Choices exported';
$string['cron'] = 'Background processing for Allocation forms';
$string['csvgenerated'] = 'CSV generated';
$string['deadline'] = 'Deadline';
$string['deadline_help'] = 'The latest time that users will be able to select their allocations, it is also the earliest time that a allocation form will be queued for the allocation process to happen.';
$string['deadline_message'] = 'The deadline for completing this form is: {$a->deadline}';
$string['deadline_passed'] = 'The deadline for this form has passed, if you make it active now it will begin processing immediately.';
$string['defaultrole'] = 'Default role';
$string['defaultrole_help'] = 'Set the default role that will be used for selecting users who will be allocated using the activity';
$string['deleteuserdata'] = 'Delete user data';
$string['disallow_list'] = 'Disallow list';
$string['disallow_list_help'] = 'All checked users will not be able to select {$a->option_name}';
$string['duplicate_choice'] = 'You may only select a choice one time';
$string['duplicateoption'] = 'Your changes could not be saved to the database. This is most likely due to a duplicate option name being entered';
$string['editingmode'] = 'Editing';
$string['editingoption'] = 'Editing option';
$string['event:optiondcreated'] = 'Option created';
$string['event:optiondeleted'] = 'Option deleted';
$string['form_allocation_error'] = 'ERROR in formid {$a->formid}:';
$string['form_allocation_error2'] = 'ERROR: Unable to allocate userid {$a->userid}';
$string['generate_allocation_csv'] = 'Generate csv of user allocations';
$string['generate_csv'] = 'Generate csv of user choices';
$string['in_editingmode'] = 'The form is being edited, stage 1 of 5.';
$string['in_processedmode'] = 'The allocations have been released, stage 5 of 5.';
$string['in_processmode'] = 'Users are being allocated, stage 3 of 5.';
$string['in_readymode'] = 'The form is active, stage 2 of 5.';
$string['in_reviewmode'] = 'The allocations are being reviewed, stage 4 of 5.';
$string['incorrectnumberofchoices'] = 'The form does not have the correct number of choices';
$string['instructions'] = 'You must rank {$a->choices} options, you will be allocated to {$a->allocation} of the options.';
$string['instructionsnotwant'] = 'You must rank {$a->choices} options, you will be allocated to {$a->allocation} of the options. You may select 1 option you do not wish to be allocated to.';
$string['invalidstate'] = 'An invalid state change was passed to the allocation form';
$string['invalidstatechange'] = 'Attempted invalid state change';
$string['make_active'] = 'Make the form active';
$string['makechoice'] = 'Make your choices';
$string['modulename'] = 'Allocation form';
$string['modulename_help'] = 'The allocation form can be used to assign students to between one and ten options (for example modules, assignments, placements...)

The teacher defines:

* The list of options available to students.
* The number of students who can be assigned to an option.
* How many options students are assigned to (between one and ten)
* How many options a student can rank (between one and ten)
* If students are able to select an option that they do not wish to be allocated to.
* The last point at which students can submit a choice.

Warning: When switching the activity from active mode back into editing mode, any choices made by students will be deleted.

After the close date the form will attempt to do a \'best fit\' allocation of the students so that:

* As many students get assigned to options as high on their ranking as possible.
* Students will never be assigned to a choice they select as \'Do not want\'.
* Students will not be assigned to options that they have been restricted from selecting.
* Students who do not make a choice will be allocated last.

After the allocations have been processed teachers may:

* Review the result and ammend the number of students allocated to options before they release the results to students.
* Get a csv of the student choices.
* Get a csv of the allocations.';
$string['modulenameplural'] = 'Allocation forms';
$string['no_allocations'] = 'No allocations found';
$string['noallocationforms'] = 'No allocation forms found for this course';
$string['noformdatapassed'] = 'No form data was passed.  No update performed.';
$string['nopermission'] = 'You cannot be allocated to the form, your choices have not been saved';
$string['not_active'] = 'The allocation form is not available, please try again later.';
$string['not_enough_slots'] = 'Not enough slots are available for all the people eligible for assignment';
$string['not_set'] = 'You must make a choice';
$string['notrequired'] = 'Not required';
$string['notwant'] = 'Include do not want';
$string['notwant_help'] = 'If selected a user will be given the oportunity to specify an option they do not wish to be allocated to';
$string['nousersallocated'] = 'No users allocated';
$string['numberofallocations'] = 'Allocations per user';
$string['numberofallocations_help'] = 'The number of options a user will be allocated to';
$string['numberofchoices'] = 'Number of choices';
$string['numberofchoices_help'] = 'The number of options a user will have to choose';
$string['ok_to_continue'] = 'Are you sure you wish to continue?';
$string['option_form_header'] = 'New option';
$string['option_heading'] = 'Heading';
$string['option_heading_help'] = 'A heading to be displayed imediatly above this option.';
$string['option_list'] = 'Option list';
$string['option_maxallocation'] = 'Maximum allocations';
$string['option_maxallocation_help'] = 'The maximum number of people that can be allocated to this option.';
$string['option_maxallocation_invalid'] = 'Maximum allocations not set';
$string['option_name'] = 'Option name';
$string['option_name_help'] = 'The name of the option as it will be displayed to the user.';
$string['option_restricted'] = 'Restricted users';
$string['optioncreated'] = 'Created option: {$a}';
$string['optiondeleted'] = 'Deleted option: {$a}';
$string['optionedited'] = 'Option edited';
$string['optionmodified'] = 'Modified option: {$a}';
$string['optionnamenumber'] = '{$a->name} ({$a->allocation})';
$string['overviewclose'] = 'Close date: {$a->closedate}';
$string['overviewname'] = 'Allocation: {$a->link}';
$string['overviewready'] = 'Your allocation is available.';
$string['overviewreview'] = 'Ready for review. The people allocated cannot see the results.';
$string['people'] = 'Number of people to be allocated';
$string['permissionedited'] = 'Permission edited';
$string['permissionviewed'] = 'Permission viewed';
$string['pluginadministration'] = 'Allocation form administration';
$string['pluginname'] = 'Allocation forms (eForms)';
$string['privacy:export:allocations'] = 'Allocations';
$string['privacy:export:choices'] = 'Choices';
$string['privacy:export:restrictions'] = 'Restrictions';
$string['privacy:metadata:allocationform_allocations'] = 'Stores the allocations made for the user';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'The option the user was allocated to';
$string['privacy:metadata:allocationform_allocations:userid'] = 'The user being allocated';
$string['privacy:metadata:allocationform_choices'] = 'Stores the choices a user has made on an allocation form';
$string['privacy:metadata:allocationform_choices:choice1'] = 'The user\'s first preference';
$string['privacy:metadata:allocationform_choices:choice10'] = 'The user\'s tenth preference';
$string['privacy:metadata:allocationform_choices:choice2'] = 'The user\'s second preference';
$string['privacy:metadata:allocationform_choices:choice3'] = 'The user\'s third preference';
$string['privacy:metadata:allocationform_choices:choice4'] = 'The user\'s fourth preference';
$string['privacy:metadata:allocationform_choices:choice5'] = 'The user\'s fifth preference';
$string['privacy:metadata:allocationform_choices:choice6'] = 'The user\'s sixth preference';
$string['privacy:metadata:allocationform_choices:choice7'] = 'The user\'s seventh preference';
$string['privacy:metadata:allocationform_choices:choice8'] = 'The user\'s eighth preference';
$string['privacy:metadata:allocationform_choices:choice9'] = 'The user\'s ninth preference';
$string['privacy:metadata:allocationform_choices:notwant'] = 'An option the user does not wish to be allocated to';
$string['privacy:metadata:allocationform_choices:userid'] = 'The user making the choices';
$string['privacy:metadata:allocationform_disallow'] = 'Stores the options a user has been stopped from choosing';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'The option the user is restricted from selecting';
$string['privacy:metadata:allocationform_disallow:userid'] = 'The user being restricted';
$string['processedmode'] = 'Processed';
$string['processmode'] = 'Processing';
$string['queued_for_processing'] = 'The allocation form is waiting to be processed... please come back later.';
$string['readymode'] = 'Active';
$string['reprocess'] = 'Force reallocation';
$string['reprocess_warning'] = 'This will delete all current allocations';
$string['requirechoice'] = 'Require choice';
$string['resetstate'] = 'Reset to editing state';
$string['restrict'] = 'Restrict';
$string['restrictionsexceeded'] = 'You have exceeded the number of workable restrictions for {$a->users} users.  At least {$a->numberofchoices} available options are required per user.';
$string['restrictionsmodified'] = 'Restrictions updated.';
$string['reviewmode'] = 'Review';
$string['roleselect'] = 'Role to be allocated';
$string['roleselect_help'] = 'Select the role of users on this course that will be allocated using this form.';
$string['saved'] = 'Your choices have been saved.';
$string['savefail'] = 'Your choices could not be saved in Moodle';
$string['search:activity'] = 'Allocation form - activity information';
$string['show_allocations'] = 'Make allocations available';
$string['slots'] = 'Number of spaces for allocation';
$string['startdate'] = 'Start date';
$string['startdate_help'] = 'The earliest time that users will be able to select their allocations.';
$string['statechanged'] = 'State changed';
$string['statechangefailed'] = 'Could not change the state';
$string['trackcompletion'] = 'Require choice submission to complete this activity?';
$string['unallocated'] = 'Unallocated';
$string['youralloactions'] = 'You have been allocated to:';
