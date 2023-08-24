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
 * Strings for component 'gradingform_rubric', language 'en', version '4.0'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Дадаць крытэр';
$string['additionalfeedback'] = 'Дадатковы водгук';
$string['alwaysshowdefinition'] = 'Дазволіць карыстальнікам прадпраглядваць рубрыку (іншым чынам яе будзе льга праглядзець толькі пасьля ацэньваньня)';
$string['backtoediting'] = 'Вярнуцца да рэдагаваньня';
$string['confirmdeletecriterion'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэты крытэр?';
$string['confirmdeletelevel'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэты ровень?';
$string['criterion'] = 'Крытэр {$a}';
$string['criterionaddlevel'] = 'Дадаць ровень';
$string['criteriondelete'] = 'Выдаліць крытэр';
$string['criterionduplicate'] = 'Дубляваць крытэр';
$string['criterionempty'] = 'Націсьніце, каб рэдагаваць крытэр';
$string['criterionmovedown'] = 'Апусьціць уніз';
$string['criterionmoveup'] = 'Падняць уверх';
$string['criterionremark'] = 'Заўвага для крытэра {$a->description}: {$a->remark}';
$string['definerubric'] = 'Вызначыць рубрыку';
$string['description'] = 'Апісаньне';
$string['enableremarks'] = 'Дазволіць адзначніку дадаваць тэкставыя заўвагі для кожнага крытэра';
$string['err_mintwolevels'] = 'Кожны крытэр мусіць мець прынамсі два роўня';
$string['err_nocriteria'] = 'Рубрыка мусіць мець прынамсі адзін крытэр';
$string['err_nodefinition'] = 'Вызначэньне роўня ня можа быць пустым';
$string['err_nodescription'] = 'Вызначэньне апісаньня ня можа быць пустым';
$string['err_novariations'] = 'Роўні крытэраў ня могуць мець аднолькавую колькасьць балаў';
$string['err_scoreformat'] = 'Колькасьць балаў для кожнага роўня мусіць быць валідным нумарам';
$string['err_totalscore'] = 'Максімальная магчымая колькасьць балаў падчас ацэньваньня рубрыкі мусіць быць болей за нуль';
$string['gradingof'] = 'ацэньваньне {$a}';
$string['level'] = '{$a->definition} ровень, {$a->score} балаў.';
$string['leveldefinition'] = 'Вызначэньне {$a} роўня';
$string['leveldelete'] = 'Выдаліць ровень {$a}';
$string['levelempty'] = 'Націсьніце, каб рэдагаваць ровень';
$string['levelsgroup'] = 'Група роўней';
$string['lockzeropoints'] = 'Разьлічыць адзнаку, што мае мінімальны магчымы бал у рубрыке';
$string['lockzeropoints_help'] = 'Гэтая налада ўжываецца толькі ў выпадку, калі сума мінімальнай колькасьці балаў па кожнаму крытэру болей за 0. Калі сьцяжок усталяваны, мінімальны бал за актыўнасьць будзе супастаўлены з мінімальным магчымым балам для гэтай актыўнасьці (які роўны 0, калі не выкарыстоўваецца шкала).';
$string['name'] = 'Назва';
$string['needregrademessage'] = 'Вызначэньне рубрыкі было зьменена пасьля таго, як студэнт атрымаў адзнаку. Студэнт ня можа бачыць гэтую рубрыку, пакуль вы не праверыце яе і не абнавіце адзнаку.';
$string['notset'] = 'Не ўсталявана';
$string['pluginname'] = 'Рубрыка';
$string['pointsvalue'] = '{$a} балаў';
$string['previewrubric'] = 'Прадпрагляд рубрыкі';
$string['privacy:metadata:criterionid'] = 'Індэнтыфікатар для пэўнага крытэра, што ацэнены.';
$string['privacy:metadata:fillingssummary'] = 'Захоўвае інфармацыю пра адзнаку карыстальніка для рубрыкі.';
$string['privacy:metadata:instanceid'] = 'Індэнтыфікатар адзнакі, што выкарыстоўваецца актыўнасьцю.';
$string['privacy:metadata:levelid'] = 'Ровень, дасягнуты ў рубрыке.';
$string['privacy:metadata:remark'] = 'Заўвагі, зьвязаныя з крытэрам рубрыкі, што ацэньваецца.';
$string['regrademessage1'] = 'Вы зьбіраецеся захаваць зьмены для рубрыкі, якая ўжо была выкарыстана для ацэньваньня. Азначце, ці трэба пераглядзець існыя адзнакі. Калі вы ўсталюеце гэтае, то рубрыка будзе схавана ад студэнтаў да моманту, пакуль іх прадмет ня будзе ацэнены паўторна.';
$string['regrademessage5'] = 'Вы зьбіраецеся захаваць зьмены істотныя зьмены для рубрыкі, якая ўжо была выкарыстана для ацэньваньня. Значэньні ў журнале адзнак ня будуць зьменены, але рубрыка будзе схавана ад студэнтаў, пакуль іх прадмет ня будзе ацэнены паўторна.';
$string['regradeoption0'] = 'Не адзначаць для пераацэнкі';
$string['regradeoption1'] = 'Адзначыць для пераацэнкі';
$string['restoredfromdraft'] = 'НАТАТКА: Апошняя спроба ацаніць гэтую асобу не была захавана належным чынам, таму чарнавыя адзнакі былі адноўлены. Калі вы жадаеце скасаваць гэтыя зьмены, скарыстайцеся ніжэйшай кнопкай \'Скасаваць\'.';
$string['rubric'] = 'Рубрыка';
$string['rubricmapping'] = 'Score to grade mapping rules';
$string['rubricmappingexplained'] = 'The minimum possible score for this rubric is <b>{$a->minscore} points</b>. It will be converted to the minimum grade available for the activity (which is 0 unless a scale is used). The maximum score of <b>{$a->maxscore} points</b> will be converted to the maximum grade. Intermediate scores will be converted respectively.

If a scale is used for grading, the score will be rounded and converted to the scale elements as if they were consecutive integers.

This grade calculation may be changed by editing the form and ticking the box \'Calculate grade having a minimum score of the minimum achievable grade for the rubric\'.';
$string['rubricnotcompleted'] = 'Please choose something for each criterion';
$string['rubricoptions'] = 'Rubric options';
$string['rubricstatus'] = 'Current rubric status';
$string['save'] = 'Save';
$string['saverubric'] = 'Save rubric and make it ready';
$string['saverubricdraft'] = 'Save as draft';
$string['scoreinputforlevel'] = 'Score input for level {$a}';
$string['scorepostfix'] = '{$a} points';
$string['showdescriptionstudent'] = 'Display rubric description to those being graded';
$string['showdescriptionteacher'] = 'Display rubric description during evaluation';
$string['showremarksstudent'] = 'Show remarks to those being graded';
$string['showscorestudent'] = 'Display points for each level to those being graded';
$string['showscoreteacher'] = 'Display points for each level during evaluation';
$string['sortlevelsasc'] = 'Sort order for levels:';
$string['sortlevelsasc0'] = 'Descending by number of points';
$string['sortlevelsasc1'] = 'Ascending by number of points';
$string['zerolevelsabsent'] = 'Warning: The minimum possible score for this rubric is not 0; this can result in unexpected grades for the activity. To avoid this, each criterion should have a level with 0 points.<br>
This warning may be ignored if a scale is used for grading, and the minimum levels in the rubric correspond to the minimum value of the scale.';
