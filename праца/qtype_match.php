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
 * Strings for component 'qtype_match', language 'en', version '4.0'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Адказ {$a}';
$string['availablechoices'] = 'Даступныя выбары';
$string['blanksforxmorequestions'] = 'Пустэчы дзеля {no} дадатковых пытаньняў';
$string['correctansweris'] = 'Слушны адказ: {$a}';
$string['deletedchoice'] = '[Выдалены выбар]';
$string['deletedsubquestion'] = 'Гэтая частка пытаньня была выдалена пасьля пачынаньня спробы.';
$string['filloutthreeqsandtwoas'] = 'Вы мусіце падаць прынамсі два пытаньня і тры адказы. Вы можаце падаць дадатковыя хібныя адказы шляхам пакіданьня адказу на пустое пытаньне. Існасьці, што маюць пытаньне і адказ, будуць ігнаравацца.';
$string['nomatchinganswer'] = 'Вы мусіце вызначыць адказ, што будзе адпавядаць пытаньню \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Вы мусіце вызначыць адказ на гэтае пытаньне.';
$string['notenoughqsandas'] = 'Вы мусіце падаць прынамсі {$a->q} пытаньняў і {$a->a} адказаў.';
$string['notenoughquestions'] = 'Вы мусіце падаць прынамсі {$a} пытаньняў і адказаў-пар.';
$string['pleaseananswerallparts'] = 'Калі ласка, адкажыце на ўсе часткі пытаньня.';
$string['pluginname'] = 'Адпаведнасьць';
$string['pluginname_help'] = 'Matching questions require the respondent to correctly match a list of names or statements (questions) to another list of names or statements (answers).';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Adding a Matching question';
$string['pluginnameediting'] = 'Editing a Matching question';
$string['pluginnamesummary'] = 'The answer to each of a number of sub-question must be selected from a list of possibilities.';
$string['privacy:metadata'] = 'Matching question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:penalty'] = 'The penalty for each incorrect try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Whether the answers should be automatically shuffled.';
$string['regradeissuenumchoiceschanged'] = 'The number of choices has changed.';
$string['regradeissuenumstemschanged'] = 'The number of sub-questions has changed.';
$string['shuffle'] = 'Shuffle';
$string['shuffle_help'] = 'If enabled, the order of the questions is randomly shuffled for each attempt, provided that "Shuffle within questions" in the activity settings is also enabled. In a matching question, only the questions are affected by this parameter. The answer choices will always be shuffled.';
