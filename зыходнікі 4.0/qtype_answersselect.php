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
 * Strings for component 'qtype_answersselect', language 'en', version '4.0'.
 *
 * @package     qtype_answersselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answersselectmode'] = 'Number of correct and incorrect answers';
$string['answersselectmode_help'] = 'Select how many correct and incorrect answers will be displayed to the student. IMPORTANT.- When you create a new question, you need to click the "Save changes and continue editing" button in order for those menu items to become active.';
$string['automaticselection'] = 'Automatic random selection';
$string['blankspace'] = 'blank space';
$string['comma'] = 'comma';
$string['correctanswer'] = 'Correct';
$string['correctchoicesseparator'] = 'Separator to be used for the right answers display';
$string['correctchoicesseparator_help'] = '<p>This separator will be used to separate the right answers displayed to the student if that review option is selected in the Quiz.</p>
<ul><li>The comma is the default option, to be used for short right answers.</li>
<li>Use the blank space if the (ordered) right answers are single words making up a sentence.</li>
<li>Use the line break for longer right answers making a better display on separate lines.</li></ul>';
$string['linebreak'] = 'line break';
$string['manualselection'] = 'Manual selection';
$string['notenoughcorrectanswers'] = 'You must select at least one correct choice';
$string['pluginname'] = 'Random select answers';
$string['pluginname_help'] = 'A multiple-choice, multiple-response question type allowing random selection from a "pool" of correct/incorrect answers.';
$string['pluginname_link'] = 'question/type/answersselect';
$string['pluginnameadding'] = 'Adding a Random select answers question';
$string['pluginnameediting'] = 'Editing a Random select answers question';
$string['pluginnamesummary'] = '<p>A multiple-choice, multiple-response question type with particular scoring rules.</p>
<p>Recommended if your question has a "pool" of correct and incorrect answers from which a set number can be selected at runtime.</p>';
$string['privacy:metadata'] = 'The Random select answers plugin does not store any personal data.';
$string['randomselectcorrect'] = 'Number of correct answers';
$string['randomselectcorrect_help'] = 'Number of correct answers which will be displayed to the student.';
$string['randomselectincorrect'] = 'Number of incorrect answers';
$string['randomselectincorrect_help'] = 'Number of incorrect answers which will be displayed to the student.';
$string['showeachanswerfeedback'] = 'Show the feedback for the selected responses.';
$string['showstandardinstruction'] = 'Show standard instruction';
$string['showstandardinstruction_help'] = 'With this setting enabled, standard instruction will be supplied as part of the selection area (e.g. "Select one or more:"). If disabled, question authors can instead include instructions in the question content, if required.';
$string['toomanyoptions'] = 'You have selected too many options.';
$string['useallanswers'] = 'Use all answers (default mode)';
$string['yougot1right'] = 'You have correctly selected one option.';
$string['yougotnright'] = 'You have correctly selected {$a->num} options.';
