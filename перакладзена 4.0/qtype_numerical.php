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
 * Strings for component 'qtype_numerical', language 'en', version '4.0'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Прыймальная памылка';
$string['addmoreanswerblanks'] = 'Пустэчы дзеля {no} дадатковых адказаў';
$string['addmoreunitblanks'] = 'Пустэчы дзеля {no} дадатковых адзінак вымярэньня';
$string['answercolon'] = 'Адказ:';
$string['answererror'] = 'Памылка';
$string['answermustbenumberorstar'] = 'Адказ мусіць быць лічбай, напрыклад, -1.234, альбо 3e8, альбо \'*\'.';
$string['answerno'] = 'Адказ {$a}';
$string['decfractionofquestiongrade'] = 'як частка (0-1) ад адзнакі пытаньня';
$string['decfractionofresponsegrade'] = 'як частка (0-1) ад адзнакі водкліча';
$string['decimalformat'] = 'дзесяткавыя';
$string['editableunittext'] = 'элемент уводу тэкста';
$string['errornomultiplier'] = 'Вы мусіце вызначыць множнік для гэтай адзінкі вымярэньня.';
$string['errorrepeatedunit'] = 'Нельга мець дзьве адзінкі вымярэньня з аднолькавай назвай.';
$string['geometric'] = 'Геаметрычны';
$string['invalidnumber'] = 'Вы мусіце ўвесьці слушную лічбу.';
$string['invalidnumbernounit'] = 'Вы мусіце ўвесьці слушную лічбу. Не ўключайце ў свой водкліч адзінку вымярэньня.';
$string['invalidnumericanswer'] = 'Адзін з уведзеных вамі адказаў ня з\'яўляецца слушнай лічбай.';
$string['invalidnumerictolerance'] = 'Адзін з уведзеных вамі допускаў ня з\'яўляецца слушнай лічбай.';
$string['leftexample'] = 'зьлева, напрыклад, $1.00 ці £1.00';
$string['manynumerical'] = 'Адзінкі вымярэньня не абавязковыя. Калі адзінка вымярэньня ўведзена, яна будзе ўжывацца дзеля канвертаваньня водкліча ў адзінку вымярэньне перад ацэньваньнем.';
$string['multiplier'] = 'Множнік';
$string['nominal'] = 'Намінальны';
$string['noneditableunittext'] = 'НЕ рэдагоўны тэкст адзінкі вымярэньня №1';
$string['nonvalidcharactersinnumber'] = 'ХІБНЫЯ знакі ў лічбе';
$string['notenoughanswers'] = 'Вы мусіце ўвесьці прынамсі адзін адказ.';
$string['nounitdisplay'] = 'Без ацэньваньня адзін вымярэньня';
$string['numericalmultiplier'] = 'Множнік';
$string['numericalmultiplier_help'] = 'Множнік - гэта каэфіцыент, на які будзе памножаны слушны лікавы водкліч.

Першая адзінка вымярэньня мае стандартны множнік 1. Такім чынам, калі слушны лікавы водкліч роўны 5500 і вы ўсталявалі Вт як адзінку вымярэньня 1 са стандартным множнікам 1, то слушны водкліч будзе роўны 5500 Вт.

Калі вы дадалі адзінку вымярэньня кВт з множнікам 0.001, то слушны водкліч будзе роўны 5,5 кВт. То бок адказы 5500 Вт і 5.5 кВт будуць лічыцца слушнымі.

Зьвярніце ўвагу, прыймальная памылка таксама памнажаецца, таму прыймальная памылка дзеля 100 Вт будзе роўнай 0.1 кВт.';
$string['oneunitshown'] = 'Адзінка вымярэньня 1 аўтаматычна адлюстроўваецца перад полем адказу.';
$string['onlynumerical'] = 'Адзінкі вымярэньня навогул не выкарыстоўваюцца. Ацэньваюцца толькі лікавыя значэньні.';
$string['pleaseenterananswer'] = 'Калі ласка, увядзіце адказ.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Калі ласка, увядзіце адказ без выкарыстаньня падзяляльніка тысяч ({$a}).';
$string['pluginname'] = 'Лікавае';
$string['pluginname_help'] = 'З пункту погляду студэнта, лікавае пытаньне выглядае гэтак жа, як пытаньне кароткі адказ. Розьніца палягае ў тым, што лікавыя адказы могуць мець прыймальную памылку. Гэта дазваляе ацэньваць вызначаны дыяпазон адказаў як адзін адказ. Напрыклад, калі адказ 10 з прыймальнай памылкай 2, то ўсякая лічба паміж 8 і 12 будзе слушным прыймальным адказам.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Даданьне лікавага пытаньня';
$string['pluginnameediting'] = 'Рэдагаваньне лікавага пытаньня';
$string['pluginnamesummary'] = 'Дазваляе адказваць лічбай з мажлівасьцю выкарыстаньня адзінак вымярэньня. Водклічы ацэньваюцца шляхам параўнаньня з рознымі мадэлямі адказаў, з мажлівымі допускамі.';
$string['privacy:metadata'] = 'Плагін тып пытаньня Лікавае пытаньне дазваляе аўтарам усталёўваць стандартныя опцыі ў якасьці карыстальніцкіх пераваг.';
$string['privacy:preference:defaultmark'] = 'Стандартная адзнака, вызначаная для паданага пытаньня.';
$string['privacy:preference:multichoicedisplay'] = 'Шлях адлюстраваньня адзінак вымярэньня ў полі ўводу (множны выбар, выпадное меню).';
$string['privacy:preference:penalty'] = 'Штраф за кожную хібную спробу выкананьня пытаньня ў рэжымах паводзінаў \'Інтэрактыўны з некалькімі спробамі\' і \'Адаптыўны рэжым\'.';
$string['privacy:preference:unitgradingtypes'] = 'Патрэба ўжываньня штрафу за адзінку вымярэньня як часткі (0-1) адзнакі за водкліч ці пытаньне.';
$string['privacy:preference:unitpenalty'] = 'Якую частку (0-1) адзнакі водкліча ці пытаньня трэба выкарыстоўваць?';
$string['privacy:preference:unitrole'] = 'Адзінка вымярэньня: асноўная, дадатковая ці нечаканая?';
$string['privacy:preference:unitsleft'] = 'Дзе адлюстроўваць адзінкі вымярэньня ($, £, кг, км і г.д.), зьлева ці справа?';
$string['relative'] = 'Адносны';
$string['rightexample'] = 'справа, напрыклад, 1.00 см ці 1.00 км';
$string['selectunit'] = 'Абярыце адну адзінку вымярэньня';
$string['selectunits'] = 'Абярыце адзінкі вымярэньня';
$string['studentunitanswer'] = 'Адзінкі вымярэньня ўводяцца ў поле';
$string['tolerancetype'] = 'Тып допускаў';
$string['unit'] = 'Адзінка вымярэньня';
$string['unitappliedpenalty'] = 'Гэтыя адзнакі маюць штраф {$a} за выкарыстаньне дрэнных адзінак вымярэньня.';
$string['unitchoice'] = 'множны выбар';
$string['unitedit'] = 'Рэдагаваць адзінку вымярэньня';
$string['unitgraded'] = 'Трэба падаць адзінку вымярэньня, яна будзе ацэньвацца.';
$string['unithandling'] = 'Апрацоўка адзінкі вымярэньня';
$string['unitincorrect'] = 'Вы не падалі слушную адзінку вымярэньня.';
$string['unitmandatory'] = 'Абавязкова';
$string['unitmandatory_help'] = '* Водкліч будзе ацэньвацца праз вызначаную адзінку вымярэньня. 

* За пустое поле адзінкі вымярэньня будзе ўжыты штраф.';
$string['unitnotselected'] = 'Вы мусіце абраць адзінку вымярэньня.';
$string['unitonerequired'] = 'Вы мусіце ўвесьці прынамсі адну адзінку вымярэньня';
$string['unitoptional'] = 'Дадатковая';
$string['unitoptional_help'] = '* Калі поле не пустое, водкліч будзе ацэньвацца з выкарыстаньнем гэтай адзінкі вымярэньня.

* Калі адзінка вымярэньня надрукавана хібна ці невядома, водкліч будзе лічыцца хібным.';
$string['unitpenalty'] = 'Штраф адзінкі вымярэньня';
$string['unitpenalty_help'] = 'Штраф ужываецца калі

* назва адзінкі вымярэньня надрукавана памылкова ў поле ўвода адзінкі вымярэньня, альбо
* адзінка вымярэньня ўведзена ў поле ўвода значэньня';
$string['unitposition'] = 'Адзінкі вымярэньня тычацца';
$string['units'] = 'Адзінкі вымярэньня';
$string['unitselect'] = 'выпадное меню';
$string['unitx'] = 'Адзінка вымярэньня {no}';
$string['xmustbenumeric'] = '{$a} мусіць быць лічбай.';
$string['xmustnotbenumeric'] = '{$a} ня можа быць лічбай.';
$string['youmustenteramultiplierhere'] = 'Тут трэба ўвесьці множнік.';
