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
 * Strings for component 'qtype_multianswer', language 'en', version '4.0'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Я пацьвярджаю, што жадаю захаваць пытаньне адрэдагаваным';
$string['confirmsave'] = 'Пацьвердзіце, потым захавайце {$a}';
$string['correctanswer'] = 'Слушны адказ';
$string['correctanswerandfeedback'] = 'Слушны адказ і водгук';
$string['corruptedquestion'] = 'Гэтае пытаньне пашкоджанае і ўтрымлівае падпытаньні, якіх няма ў вашай сістэме.';
$string['decodeverifyquestiontext'] = 'Дэкадаваць і спраўдзіць тэкст пытаньня';
$string['invalidmultianswerquestion'] = 'Хібныя ўбудаваныя (закрытыя) адказы на пытаньне ({$a}).';
$string['layout'] = 'Пласт';
$string['layouthorizontal'] = 'Гарызантальны радок радыёкнопак';
$string['layoutmultiple_horizontal'] = 'Гарызантальны радок сьцяжок';
$string['layoutmultiple_vertical'] = 'Вертыкальны слупок сьцяжкоў';
$string['layoutselectinline'] = 'Выпадное меню, убудаванае ў тэкст';
$string['layoutundefined'] = 'Нявызначаны пласт';
$string['layoutvertical'] = 'Вертыкальны слупок радыёкнопак';
$string['missingsubquestion'] = 'Гэтае падпытаньне адсутнічае ў вашай сістэме і ня можа быць адлюстрована.';
$string['nooptionsforsubquestion'] = 'Нельга атрымаць опцыі для часткі пытаньня # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Закрытае пытаньне (мульціадказ) "<strong>{$a}</strong>" не ўтрымлівае ніводнага пытаньня';
$string['pleaseananswerallparts'] = 'Калі ласка, адкажыце на ўсе часткі пытаньня.';
$string['pluginname'] = 'Убудаваныя (закрытыя) адказы';
$string['pluginname_help'] = 'Убудаваныя (закрытыя) адказы складаюцца з урыўкаў тэкста, у якія ўбудаваны пытаньні тыпу множны выбар альбо кароткі адказ.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Даданьне убудаваных (закрытых) адказаў на пытаньне';
$string['pluginnameediting'] = 'Рэдагаваньне убудаваных (закрытых) адказаў на пытаньне';
$string['pluginnamesummary'] = 'Пытаньні гэтага тыпа вельмі гнуткія, але іх льга ствараць толькі ўводам тэкста, што ўтрымлівае адмысловыя коды, якія ствараюць убудаваныя пытаньні: множны выбар, кароткі адказ альбо лікавае.';
$string['privacy:metadata'] = 'Плагін тып пытаньня Убудаваныя (закрытыя) адказы не захоўвае аніякіх асабістых дадзеных.';
$string['qtypenotrecognized'] = 'Тып пытаньня {$a} не распазнаны';
$string['questiondefinition'] = 'Вызначэньне пытаньня';
$string['questiondeleted'] = 'Пытаньне выдалена';
$string['questioninquiz'] = '<ul>
  <li>дадаць ці выдаліць пытаньні, </li>
  <li>зьмяніць месцаваньне пытаньняў у тэксьце,</li>
  <li>зьмяніць тып пытаньняў (лікавае, кароткі адказ, множны выбар). </li></ul>';
$string['questionnotfound'] = 'Нельга знайсьці пытаньне з часткі пытаньня #{$a}';
$string['questionsadded'] = 'Пытаньне дадана';
$string['questionsaveasedited'] = 'Пытаньне будзе захавана ў адрэдагаваным стане';
$string['questionsless'] = 'у базе дадзеных захоўваецца на {$a} пытаньняў болей';
$string['questionsmissing'] = 'Тэкст пытаньня мусіць мець прынамсі адзін убудаваны адказ.';
$string['questionsmore'] = 'у базе дадзеных захоўваецца на {$a} пытаньняў меней';
$string['questiontypechanged'] = 'Тып пытаньня зьменены';
$string['questiontypechangedcomment'] = 'Прынамсі тып аднога пытаньня быў зьменены.<br />Вы дадавалі, выдалялі ці перасоўвалі пытаньні?<br />Праглядзіце.';
$string['questionusedinquiz'] = 'Гэтае пытаньне выкарыстоўваецца ў {$a->nb_of_quiz} тэстах, усяго спробаў выкананьня: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Зьмянілась колькасьць убудаваных падпытаньняў у пытаньні.';
$string['storedqtype'] = 'Тып захаванага пытаньня {$a}';
$string['subqresponse'] = 'частка {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Невядомы тып пытаньня: {$a->type} з часткі пытаньня # {$a->sub}';
$string['warningquestionmodified'] = '<b>УВАГА</b>';
$string['youshouldnot'] = '<b>ВЫ НЯ МУСІЦЕ</b>';
