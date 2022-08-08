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
 * Strings for component 'qtype_vplquestion', language 'en', version '4.0'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allornothing'] = 'All or nothing';
$string['answertemplate'] = 'Answer template';
$string['answertemplate_help'] = 'Write here what code will be prefilled in the answer box for the student.';
$string['cannotimportquestionvplnotfound'] = 'Import warning: the VPL module id specified in VPL Question "{$a}" is invalid.';
$string['cannotimportquestionvplunreachable'] = 'Import warning: the VPL specified in VPL Question "{$a}" is not in this course.';
$string['cfg:deletevplsubmissions'] = 'Delete VPL submissions';
$string['cfg:deletevplsubmissions_help'] = 'Whether or not submissions of VPL Questions made on the VPL should be discarded on question evaluation.';
$string['cfg:generalsettings'] = 'General settings';
$string['cfg:generalsettings_help'] = '';
$string['choose'] = 'Choose...';
$string['compilation'] = 'Compilation:';
$string['correction'] = 'Correction';
$string['evaluation'] = 'Evaluation:';
$string['evaluationdetails'] = 'Evaluation details:';
$string['evaluationerror'] = 'Evaluation error:';
$string['execerror'] = 'Execution error:';
$string['execerrordetails'] = 'Operation aborted by VPL. Execution resources limits may have been exceeded.';
$string['execfiles'] = 'Execution files';
$string['execfiles_help'] = 'You can edit here execution files. These are only sent during evaluation (and Pre-check if files are the same), and not during run (except for files specified as "to keep when running" in the VPL).<br>
To add files, add them in the VPL as execution files.<br>
If there is a file you wish not to use, write "UNUSED" on its first line and it will be omitted.';
$string['execfilesevalsettings'] = 'Execution files and evaluate settings';
$string['execution'] = 'Execution error:';
$string['gradingmethod'] = 'Grading';
$string['gradingmethod_help'] = 'Determines grading method for this question.
<ul><li>If "All or nothing" is selected, the student will earn either 100% or 0% of the mark for this question, depending on whether they got perfect VPL grade or not.</li>
<li>If "Scaling" is selected, the student\'s mark for this question will scale with their VPL grade.</li></ul>';
$string['informationtext'] = 'VPL Question';
$string['lastservermessage'] = 'Last execution server message recieved: {$a}';
$string['merge'] = 'Merge';
$string['nogradeerror'] = 'An error occured during question grading (no grade obtained). {$a}.';
$string['noprecheck'] = 'No Pre-check';
$string['overwrite'] = 'Overwrite';
$string['pleaseanswer'] = 'Please provide an answer.';
$string['pluginname'] = 'VPL Question';
$string['pluginname_help'] = 'VPL Questions allow you to make simple coding exercises.<br>
It works with a VPL, but is designed to be a lot simpler on the students\' side.';
$string['pluginnameadding'] = 'Adding a VPL Question';
$string['pluginnameediting'] = 'Editing a VPL Question';
$string['pluginnamesummary'] = 'VPL Questions allow you to make simple coding exercises.<br>
It works with a VPL, but is designed to be a lot simpler on the students\' side.';
$string['possiblesolution'] = 'Possible solution:';
$string['precheck'] = 'Pre-check';
$string['precheckexecfiles'] = 'Pre-check execution files';
$string['precheckexecfiles_help'] = 'You can edit here execution files that will be used for Pre-check. For additional information, see help from "Execution files".';
$string['precheckhasownfiles'] = 'Pre-check uses its own execution files';
$string['precheckhassamefiles'] = 'Pre-check uses the same execution files as Check';
$string['precheckhelp'] = 'Evaluate your answer on a subset of tests';
$string['precheckisdebug'] = 'Pre-check is Debug';
$string['precheckpreference'] = 'Pre-check preference';
$string['precheckpreference_help'] = 'Determines whether the student will have access to a "Pre-check" button during question attempt (with unlimited use).
<ul><li>If "No Pre-check" is selected, no such button will be available.</li>
<li>If "Pre-check is Debug" is selected, the button will act as the "Debug" button on a VPL. Please note that it however does not provide usual graphic interface.</li>
<li>If "Pre-check uses the same execution files as Check" is selected, the button will evaluate the answer with execution files above.</li>
<li>If "Pre-check uses its own execution files" is selected, you will be able to edit specific execution files and they will be used for Pre-check. This is the recommended option, as it allows you to specify a subset of tests the student has access to during attempt.</li></ul>';
$string['privacy:metadata'] = 'The VPL Question plugin does not store any personal data itself. It however sends user-submitted data to the mod_vpl plugin, which may store it on its side.';
$string['qvplbase'] = 'VPL Question template';
$string['run'] = 'Run';
$string['scaling'] = 'Scaling';
$string['selectavpl'] = '<a href="{$a}">Select a template VPL</a> to edit execution files.';
$string['serverwassilent'] = 'Execution server was silent - no message received';
$string['teachercorrection'] = 'Teacher Correction';
$string['teachercorrection_help'] = 'Write here your correction for this question.';
$string['templatecontext'] = 'Edit template';
$string['templatecontext_help'] = 'You can edit here the code that will be executed (ie. the content of the required file).<br>
The "{{ANSWER}}" tag will be replaced by the student\'s answer. You can move the tag where you want, but please do not remove it!';
$string['templatevpl'] = 'Template VPL';
$string['templatevpl_help'] = 'Select the VPL this question will be based on.<br>
<b>Note:</b> Please select a VPL dedicated to this purpose, as student submissions on this VPL may be discarded if such setting has been checked by platform administrator.';
$string['templatevplchange'] = 'Template VPL change';
$string['templatevplchange_help'] = 'The template VPL code and execution files currently have content.<br>
Changing the template VPL will overwrite this content, unless you decide to merge the current content into the new one.<br>
Please note that the merge will only work on files with the same name. Files with no name correspondance will be overwritten.';
$string['templatevplchangeprompt'] = 'What do you want to do with the current content of template and execution files?';
$string['validateonsave'] = 'Validate';
$string['validateonsave_help'] = 'If checked, the provided code will be tested against provided test cases before saving this question.';
$string['vplnotavailablewarning'] = 'Warning! The VPL this question is based on is not available. The question may not function properly.';
$string['vplnotfounderror'] = 'Error! The VPL this question is based on could not be instantiated:<br>{$a}';
$string['vplnotincoursewarning'] = 'Warning! The VPL this question is based on is not located in this course. The question may not function properly.';
