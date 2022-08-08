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
 * Strings for component 'qtype_matrix', language 'en', version '4.0'.
 *
 * @package     qtype_matrix
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Subpoints';
$string['allow_dnd_ui'] = 'Allow usage of Drag&Drop UI';
$string['allow_dnd_ui_descr'] = 'If allowed, the teachers will have the possibility to enable the Drag&Drop feature to any Matrix questions';
$string['cols_description'] = 'Description';
$string['cols_shorttext'] = 'Response';
$string['colsheader'] = 'Matrix columns';
$string['colsheader_desc'] = '<p>Shorttext will be used when it\'s present, with the longer text as a tooltip.<br />Be mindful of how this will be displayed.</p>
<p>Students can select multiple or single columns per row, depending on how the question has been configured, and each row receives a grade, defined by one of the grading methods.</p>
<p>The final grade for the question is an average of their grades for each of the rows with the exeption of the Kprime type where all answers have to be correct.</p>';
$string['false'] = 'False';
$string['grademethod'] = 'Scoring method';
$string['grademethod_help'] = '<ul>
<li><b>Kprime</b>: The student receives one point, if all responses are correct, half a point if one response is wrong and the rest of responses are correct, and zero points otherwise.
<li><b>Kprime1/0</b>: The student receives one point, if all responses are correct, and zero points otherwise.
<li><b>Subpoints</b>: The student is awarded subpoints for each correct response.
</ul>';
$string['kany'] = 'Kprime (at least one correct, no wrong answer)';
$string['kprime'] = 'Kprime1/0';
$string['matrixheader'] = 'Response matrix';
$string['multipleallowed'] = 'Allow multiple responses per answer statement?';
$string['mustaddupto100'] = 'The sum of all non negative weights in each row must be 100%';
$string['mustdefine1by1'] = 'You must define at least a 1 x 1 matrix; with either short or long answer defined for each row and column';
$string['oneanswerperrow'] = 'You must provide an answer for each row';
$string['pluginname'] = 'Kprime';
$string['pluginname_help'] = '<p>Kprime questions consist of an item stem and four corresponding answer statements. For each answer statement students have to decide whether it is right or wrong.</p>';
$string['pluginname_link'] = 'question/type/matrix';
$string['pluginnameadding'] = 'Adding a Kprime question';
$string['pluginnameediting'] = 'Editing a Kprime question';
$string['pluginnamesummary'] = 'In Kprime questions exactly four such statements have to be correctly rated as “true” or “false”.';
$string['privacy:metadata'] = 'The Kprime/Matrix Question Type plugin does not store any personal data.';
$string['refresh_matrix'] = 'Refresh response matrix';
$string['rows_description'] = 'Description';
$string['rows_feedback'] = 'Feedback';
$string['rows_shorttext'] = 'Answer statement';
$string['rowsheader'] = 'Matrix rows';
$string['rowsheader_desc'] = '<p>Shorttext will be used when it\'s present, with the longer text as a tooltip.<br />Be mindful of how this will be displayed</p>
<p>Students can select multiple or single columns per row, depending on how the question has been configured, and each row receives a grade, defined by one of the grading methods.</p>
<p>The final grade for the question is an average of their grades for each of the rows with the exeption of the Kprime type where all answers have to be correct.</p>';
$string['show_non_kprime_gui'] = 'Show graphical user interface for options which are not strictly kprime matrix options (more than four rows, more than two columsn, multiple options).';
$string['shuffleanswers'] = 'Shuffle answer statements?';
$string['shuffleanswers_help'] = 'If enabled, the order of the answer statements is randomly shuffled for each attempt, provided that “Shuffle within questions” in the activity settings is also enabled.';
$string['true'] = 'True';
$string['use_dnd_ui'] = 'Use drag &amp; drop ?';
$string['weightednomultiple'] = 'It doesn\'t make sense to choose weighted grading with multiple answers not allowed';
