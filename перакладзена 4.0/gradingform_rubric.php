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
$string['rubricmapping'] = 'Правілы супастаўленьня балаў у адзнаку';
$string['rubricmappingexplained'] = 'Мінімальна магчымы бал для гэтай рубрыкі <b>{$a->minscore} балаў</b>. Ён будзе канвертаваны ў мінімальны бал даступны для актыўнасьці (які роўны 0 пакуль выкарыстоўваецца шкала). Максімальны бал з <b>{$a->maxscore} балаў</b> будзе канвертавацца ў максімальную адзнаку. Прамежкавыя балы будуць адпаведна канвертавацца.

Калі выкарыстоўваецца шкала ацэньваньня, бал будзе акруглены і канвертаваны ў элементы шкалы, нібы яны з\'яўляюцца пасьлядоўнымі цэлымі лічбамі.

Гэты разьлік адзнакі льга зьмяніць рэдагаваньнем формы і ўсталёўкай сьцяжка \'Разьлічыць адзнаку, што мае мінімальны магчымы бал у рубрыке\'.';
$string['rubricnotcompleted'] = 'Калі ласка, абярыце штосьці для кожнага крытэра';
$string['rubricoptions'] = 'Налады рубрыкі';
$string['rubricstatus'] = 'Цяперашні статус рубрыкі';
$string['save'] = 'Захаваць';
$string['saverubric'] = 'Захаваць рубрыку і зрабіць яе гатовай';
$string['saverubricdraft'] = 'Захаваць як чарнавік';
$string['scoreinputforlevel'] = 'Увод балаў за ровень {$a}';
$string['scorepostfix'] = '{$a} балаў';
$string['showdescriptionstudent'] = 'Паказваць апісаньне рубрыкі для тых, хто ацэнены';
$string['showdescriptionteacher'] = 'Паказваць апісаньне рубрыкі падчас ацэньваньня';
$string['showremarksstudent'] = 'Паказваць заўвагі для тых, хто ацэнены';
$string['showscorestudent'] = 'Паказваць балаў за кожны ровень для тых, хто ацэнены';
$string['showscoreteacher'] = 'Паказваць балаў за кожны ровень падчас ацэньваньня';
$string['sortlevelsasc'] = 'Чарга сартаваньня роўняў:';
$string['sortlevelsasc0'] = 'Па зьмяншэньню балаў';
$string['sortlevelsasc1'] = 'Па павелічэньню балаў';
$string['zerolevelsabsent'] = 'Увага: Мінімальна магчымы бал для гэтай рубрыкі ня роўны 0; тое можа прывесьці да нечаканых адзнак за працу. Каб пазьбегнуць гэтага, кожны крытэр мусіць мець ровень ровень з 0 баламі.<br>

Гэтае папярэджаньне льга ігнараваць, калі для ацэньваньня выкарыстоўваецца шкала, а мінімальныя роўні ў рубрыцы адпавядаюць мінімальнаму значэньню шкалы.';
