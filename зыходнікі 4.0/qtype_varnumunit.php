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
 * Strings for component 'qtype_varnumunit', language 'en', version '4.0'.
 *
 * @package     qtype_varnumunit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreunits'] = 'Blanks for {no} more units';
$string['anyotherunit'] = 'Any other unit';
$string['correctansweris'] = 'The correct numerical part of the question is: {$a}.';
$string['notenoughunits'] = 'You have not entered any expressions to match units. You must enter at least one expression to match
 units';
$string['notvalidnumberprepostfound'] = 'Your answer should start with a number.';
$string['percentgradefornumandunit'] = 'Value : {$a->num}, Units : {$a->unit}';
$string['pluginname'] = 'Variable numeric set with units';
$string['pluginname_help'] = 'In response to a question the respondent types a number and appropriate units.

This question is similar to the \'Variable numeric set\' question type but it accepts, grades and gives feedback for units too.

Numbers used in the question and used to calculate the answer are chosen from predefined sets which can be precalculated from
mathematical expressions.

All expressions are calculated at the time of question creation and values from random functions are the same for all users.';
$string['pluginname_link'] = 'question/type/varnumunit';
$string['pluginnameadding'] = 'Adding a Variable numeric set question with units';
$string['pluginnameediting'] = 'Editing a Variable numeric set question with units';
$string['pluginnamesummary'] = 'Allows a numeric response with units, question can have several \'variants\',
expressions are pre evaluated for each question variant';
$string['preservespacenotrequire'] = 'Preserve spaces, but don\'t require them';
$string['preservespacerequire'] = 'Preserve spaces, and require a space between the number and the unit';
$string['privacy:metadata'] = 'Variable numeric set with units question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:penalty'] = 'The penalty for each Variable numeric set with units try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:unitfraction'] = 'How the distribution of \'Relative weightings of answer parts\' (value and unit in persentage) is set.';
$string['removeallspace'] = 'Remove all spaces before grading';
$string['replacedash'] = 'Replace dashes';
$string['spaceinunit'] = 'Spaces in units';
$string['spacesfeedbackmustbegiven'] = 'You have select option "Preserve spaces, and require a space between the number and the unit" but not specified feedback for this option. Please enter a feedback.';
$string['spacingfeedback'] = 'Spacing feedback';
$string['spacingfeedback_default'] = 'You are required to put a space between the number and the unit.';
$string['spacingfeedback_help'] = 'Messages to display when "Space and units" is "Preserve spaces, and require a space between the number and the unit"';
$string['summarise_response'] = 'Number : "{$a->numeric}", Unit : "{$a->unit}"';
$string['superscriptallowed'] = 'Allow, but not require, superscripts';
$string['superscriptnone'] = 'No superscripts';
$string['superscripts'] = 'In student response';
$string['superscriptscinotationrequired'] = 'Require scientific notation';
$string['unitduplicate'] = 'Same pmatch expression used more than once.';
$string['unitmustbegiven'] = 'You have supplied a grade and / or feedback here but not specified an expression to match units with.
Enter an expression or reset the grade to zero and remove feedback.';
$string['unitno'] = 'Unit {$a}';
$string['units'] = 'Units';
$string['units_help'] = 'Use Pattern match syntax to describe matching units.';
$string['unitsfractionsnomax'] = 'One of the units should have a score of 100% so it is possible to get full marks for the unit
part of the question.';
$string['unitweighting'] = 'Relative weightings of answer parts';
$string['value'] = 'Value';
$string['value_help'] = 'Enter values for \'Predefined variables\' here or you will see calculated values displayed here for a
\'Calculated variable\'.';
