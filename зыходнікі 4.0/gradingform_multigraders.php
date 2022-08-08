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
 * Strings for component 'gradingform_multigraders', language 'en', version '4.0'.
 *
 * @package     gradingform_multigraders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Add frequently used comment';
$string['auto_calculate_final_method'] = 'Method of auto calculating the next grade and outcomes';
$string['auto_calculate_final_method_0'] = 'last previous grade';
$string['auto_calculate_final_method_1'] = 'minimum previous grade';
$string['auto_calculate_final_method_2'] = 'maximum previous grade';
$string['auto_calculate_final_method_3'] = 'average over previous grades';
$string['auto_calculate_final_method_help'] = 'The final grade is decided by the last grader, however the system will auto calculate the next grade depending on the previous based on the algorithm chosen here. The same method is used for deciding the nest outcome as well.';
$string['backtoediting'] = 'Back to editing';
$string['blind_marking'] = 'Blind marking';
$string['blind_marking_explained'] = 'Blind marking is activated, secondary graders can not see previous grades, only the initial/primary grader can. However, when grade is published, everyone involved can see all grades.';
$string['blind_marking_help'] = 'If checked, intermediary graders can not see previous grades, only the original grader can.';
$string['clicktocopy'] = 'Copy notes to feedback comments';
$string['clicktodeleteadmin'] = 'Delete all grade data for this assignment';
$string['clicktoedit'] = 'Click to edit';
$string['comment'] = 'Comment';
$string['criteria'] = 'Grading criteria';
$string['definition'] = 'Definition';
$string['description'] = 'Template Description';
$string['editdefinition'] = 'Edit multiple graders options';
$string['err_gradeinvalid'] = 'Invalid grade';
$string['err_gradeoutofbounds'] = 'Grade is not in the allowed range';
$string['err_noformula'] = 'There is no formula defined for calculating the grade from the outcomes. Please visit Gradebook setup to define the formula.';
$string['feedback_label'] = 'Notes';
$string['final_grade_check'] = 'Publish grade?';
$string['final_grade_message'] = 'Grade is published';
$string['finalgradefinished_noaccess'] = '{$a} completed grading this item. You are not allowed to make changes.';
$string['finalgradenotdecidedyet'] = 'Final grade not yet published';
$string['finalgradestarted_noaccess'] = '{$a} started grading this item and you are not in the list of second graders. You are not allowed to make changes.';
$string['finalgradestarted_nosecond'] = '{$a} started grading this item and no further grading was requested.';
$string['graderdetails_display'] = 'Graded by {$a}';
$string['gradingdisabled'] = 'Grading is disabled for this item, it was either locked or overridden.';
$string['gradingof'] = '{$a} grading';
$string['instancedetails_display'] = '{$a} grades added.';
$string['maxscore'] = 'Maximum score';
$string['message_assign_name'] = 'Assignment {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[automated message generated by multigraders plugin]</span><br/>';
$string['message_header'] = '<br/>';
$string['message_smallmessage1'] = '{$a} has requested second grading.';
$string['message_smallmessage2'] = 'Please take a moment to grade this item.';
$string['message_smallmessage3'] = '{$a} has completed second grading.';
$string['message_smallmessage4'] = 'Please take a look and decide the final grade.';
$string['message_student_name'] = 'Student {$a}';
$string['message_subject'] = 'Second grading required for {$a}';
$string['message_subject_to_initial'] = 'Second grading completed for {$a}';
$string['messageprovider:secondgrading'] = 'Notifications of assignments that require second grading.';
$string['needregrademessage'] = 'The multigraders definition was changed after this student had been graded. The student can not see the outcome until {$a} checks the published grade.';
$string['no_grade'] = 'No grade';
$string['pluginname'] = 'Multiple graders';
$string['previewdefinition'] = 'Preview definition';
$string['privacy:metadata'] = 'This plugin does not store any personal user data. Any user information displayed is stored elsewhere in Moodle.';
$string['require_second_grader'] = 'Request second grader';
$string['restoredfromdraft'] = 'NOTE: The last attempt to grade this person was not saved properly so draft grades have been restored.';
$string['save'] = 'Save';
$string['score'] = 'score';
$string['secondary_graders'] = 'Secondary graders';
$string['secondary_graders_help'] = 'This is a list of teachers to be notified in case a second grader is required for an assignment';
$string['secondary_graders_list'] = 'Secondary graders defined: {$a}.';
$string['show_intermediary_to_students'] = 'Show second graders notes to students?';
$string['show_intermediary_to_students_explained'] = 'The student can also see all secondary notes when the grade is published.';
$string['show_intermediary_to_students_help'] = 'If checked, second graders may choose if their notes can be seen by the students when the grade is published.';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = 'You already graded this item, someone else needs to decide the final grade and feedback comments.';
$string['useralreadygradedthisitemfinal'] = 'Only {$a} may change the final grade and notes.';
$string['visible_to_students'] = 'Show notes to student?';
