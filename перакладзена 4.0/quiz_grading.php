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
 * Strings for component 'quiz_grading', language 'en', version '4.0'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = 'Усе абраныя спробы выкананьня былі ацэнены. Вяртаньне да сьпіса пытаньняў.';
$string['alreadygraded'] = 'Ужо ацэнена';
$string['alsoshowautomaticallygraded'] = 'Таксама паказваць пытаньні, што былі ацэнены аўтаматычна';
$string['attemptstograde'] = 'Спробы на ацэнку';
$string['automaticallygraded'] = 'Аўтаматычна ацэнена';
$string['backtothelistofquestions'] = 'Вярнуцца да сьпіса пытаньняў';
$string['bydate'] = 'Па даце';
$string['bystudentfirstname'] = 'Па імю студэнта';
$string['bystudentidnumber'] = 'Па ID нумару студэнта';
$string['bystudentlastname'] = 'Па прозьвішчу студэнта';
$string['cannotgradethisattempt'] = 'Нельга ацаніць гэтую спробу.';
$string['cannotloadquestioninfo'] = 'Нельга загрузіць інфармацыю пра тып пэўнага пытаньня';
$string['changeoptions'] = 'Опцыі зьмены';
$string['essayonly'] = 'Наступныя пытаньні трэба ацаніць уручную';
$string['grade'] = 'ацаніць';
$string['gradeall'] = 'ацаніць усё';
$string['gradeattemptsall'] = 'Усё ({$a})';
$string['gradeattemptsautograded'] = 'Тыя, хто быў ацэнены аўтаматычна ({$a})';
$string['gradeattemptsmanuallygraded'] = 'Тыя, хто загадзя быў ацэнены ўручную ({$a})';
$string['gradeattemptsneedsgrading'] = 'Тыя, каго трэба ацаніць ({$a})';
$string['graded'] = '(ацэнена)';
$string['gradenextungraded'] = 'Ацаніць {$a} наступных неацэненых спробаў';
$string['gradeungraded'] = 'Ацаніць усе {$a} неацэненыя спробы';
$string['grading'] = 'Ручное ацэньваньне';
$string['grading:viewidnumber'] = 'Бачыць асабістыя дадзеныя студэнтаў падчас ацэньваньня';
$string['grading:viewstudentnames'] = 'Бачыць студэнцкія імёны падчас ацэньваньня';
$string['gradingall'] = 'Усе {$a} спробаў гэтага пытаньня';
$string['gradingattempt'] = 'Нумар спробы {$a->attempt} для {$a->fullname}';
$string['gradingattemptsxtoyofz'] = 'Ацэньвае спробы з {$a->from} па {$a->to} з {$a->of}';
$string['gradingattemptwithcustomfields'] = 'Нумар спробы {$a->attempt} для {$a->fullname} ({$a->customfields})';
$string['gradingattemptwithidnumber'] = 'Нумар спробы {$a->attempt} для {$a->fullname} ({$a->idnumber})';
$string['gradingnextungraded'] = 'Наступныя {$a} неацэненых спробаў';
$string['gradingnotallowed'] = 'Вы ня маеце дазволу на ручное ацэньваньне водклічаў гэтага тэсту';
$string['gradingquestionx'] = 'Ацэньваемае пытаньне {$a->number}: {$a->questionname}';
$string['gradingreport'] = 'Справаздача ручнога ацэньваньня';
$string['gradingungraded'] = '{$a} неацэненых спробаў';
$string['gradinguser'] = 'Спробы для {$a}';
$string['hideautomaticallygraded'] = 'Хаваць пытаньні, што былі ацэнены аўтаматычна';
$string['inprogress'] = 'У прагрэсе';
$string['invalidattemptid'] = 'Гэты ID спробы не існуе';
$string['invalidquestionid'] = 'Пытаньні з ID, якія льга ацаніць, ня знойдзены';
$string['noquestionsfound'] = 'Уручную ацэненыя пытаньні ня знойдзены';
$string['nothingfound'] = 'Няма чаго паказваць';
$string['options'] = 'Опцыі';
$string['orderattempts'] = 'Упарадкаваць спробы';
$string['orderattemptsby'] = 'Упарадкаваць спробы па';
$string['pluginname'] = 'Ручное ацэньваньне';
$string['privacy:preference:order'] = 'У якой чарзе паказваць спробы, якія трэба ацаніць.';
$string['privacy:preference:pagesize'] = 'Колькі спробаў паказваць на ўсякай старонцы ацэньваньня.';
$string['qno'] = 'П #';
$string['questionname'] = 'Назва пытаньня';
$string['questionsperpage'] = 'Пытаньняў на старонцы';
$string['questionsthatneedgrading'] = 'Пытаньні, якія трэба ацаніць';
$string['questiontitle'] = 'Пытаньне {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} спробаў {$a->openspan}ацэнена{$a->closespan}).';
$string['random'] = 'Выпадкова';
$string['randomly'] = 'Выпадкова';
$string['saveandnext'] = 'Захаваць і перайсьці на наступную старонку';
$string['showstudentnames'] = 'Паказваць імёны студэнтаў';
$string['tograde'] = 'На ацэньваньне';
$string['total'] = 'Усяго';
$string['unknownquestion'] = 'Невядомае пытаньне';
$string['updategrade'] = 'абнавіць адзнакі';
