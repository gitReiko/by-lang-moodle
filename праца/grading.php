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
 * Strings for component 'grading', language 'en', version '4.0'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' абраны ў якасьці актыўнага метаду ацэньваньня для вобласьці \'{$a->area}\'';
$string['activemethodinfonone'] = 'Для вобласьці \'{$a->area}\' не абраны прасунуты метад ацэньваньня. Таму будзе выкарыстоўвацца наўпростае ацэньваньне.';
$string['changeactivemethod'] = 'Зьмяніць актыўны метад ацэньваньня на';
$string['clicktoclose'] = 'націсьніце, каб закрыць';
$string['error:gradingunavailable'] = 'Хібна наладжаны прасунуты метад ацэньваньня. Калі ласка, праверце ўсе параметры налад форума.';
$string['error:notinrange'] = 'Пададзена хібная адзнака \'{$a->grade}\'. Адзнакі мусяць быць між 0 і {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Нельга стварыць элемент формы ацэньваньня';
$string['formnotavailable'] = 'Абраны прасунуты метад ацэньваньня, але форму ацэньваньня дагэтуль трэба вызначыць.';
$string['gradingformunavailable'] = 'Калі ласка зьвярніце ўвагу: форма прасунутага ацэньваньня не гатовая дагэтуль. Наўпростае ацэньваньне будзе выкарыстоўвацца да моманту слушанага статусу формы.';
$string['gradingmanagement'] = 'Прасунутае ацэньваньне';
$string['gradingmanagementtitle'] = 'Прасунутае ацэньваньне: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Метад ацэньваньня';
$string['gradingmethod_help'] = 'Абярыце прасунуты метад ацэньваньня, які трэба выкарыстоўваць для разьліку адзнак у дадзеным кантэксьце.

Для адключэньня прасунутага ацэньваньня і вяртаньня да стандартнага механізму ацэньваньня, абярыце \'Наўпростае ацэньваньне\'.';
$string['gradingmethodnone'] = 'Наўпростае ацэньваньне';
$string['gradingmethods'] = 'Метады ацэньваньня';
$string['manageactionclone'] = 'Стварыць новую форму ацэньваньня з шаблону';
$string['manageactiondelete'] = 'Выдаліць вызначаную на гэты момант форму';
$string['manageactiondeleteconfirm'] = 'Вы зьбіраецеся выдаліць форму ацэньваньня \'{$a->formname}\' і ўсю асацыяваную інфармацыю з \'{$a->component} ({$a->area})\'. Калі ласка, пераканайцеся, што вы разумееце наступствы:

* Не існуе шляху скасаваньня гэтай аперацыі.
* Вы можаце зьмяніць метад ацэньваньня, у тым ліку на \'Наўпростае ацэньваньне\' без выдаленьня гэтай формы.
* Уся інфармацыя надрукаваная ў формы ацэньваньня будзе страчана.
* Разьлічаныя выніковыя адзнакі, што захоўваюцца ў журнале адзнак, ня будуць закранутыя. Але будуць адсутнічаць тлумачэньні іхняга разьліку.
* Гэтая аперацыя не ўплывае на магчымыя копіі гэтай формы ў іншых актыўнасьцях.';
$string['manageactiondeletedone'] = 'Форма была пасьпяхова выдалена';
$string['manageactionedit'] = 'Зьмяніць цяперашняе вызначэньне формы';
$string['manageactionnew'] = 'Вызначыць новую форму ацэньваньня з нуля';
$string['manageactionshare'] = 'Апублікаваць форму як новы шаблон';
$string['manageactionshareconfirm'] = 'Вы зьбіраецеся захаваць копію формы ацэньваньня \'{$a}\' як новы публічны шаблон. Іншыя карыстальнікі на вашым сайце змогуць ствараць новыя формы ацэньваньня ўва сваіх актыўнасьцях на грунце гэтага шаблону.';
$string['manageactionsharedone'] = 'Форма была пасьпяхова захавана як шаблон';
$string['noitemid'] = 'Оцэньваньне не магчымае. Прадмет ацэньваньня не існуе.';
$string['nosharedformfound'] = 'Шаблон ня знойдзены';
$string['privacy:metadata:grading_definitions'] = 'Базавая інфармацыя пра прасунутую форму ацэньваньня, вызначаная ўва вобласьці ацэньваньня.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID вобласьці, у якой вызначана прасунутая форма ацэньваньня.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID вызначэньня ацэньваньня адкуль было гэтае капіяваньне.';
$string['privacy:metadata:grading_definitions:description'] = 'Апісаньне прасунутага метада ацэньваньня.';
$string['privacy:metadata:grading_definitions:method'] = 'Метад ацэньваньня, які адказвае за вызначэньне.';
$string['privacy:metadata:grading_definitions:name'] = 'Назва вызначэньня прасунутага ацэньваньня.';
$string['privacy:metadata:grading_definitions:options'] = 'Параметры гэтага вызначэньня ацэньваньня.';
$string['privacy:metadata:grading_definitions:status'] = 'Статус гэтага вызначэньня прасунутага ацэньваньня.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Час капіяваньня вызначэньня ацэньваньня.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Час стварэньня вызначэньня ацэньваньня.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Час апошняга зьмяненьня вызначэньня ацэньваньня.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID карыстальніка, які стварыў вызначэньне ацэньваньня.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID карыстальніка, які апошнім зьмяняў вызначэньне ацэньваньня.';
$string['privacy:metadata:grading_instances'] = 'Запіс адзнакі аднога прадмета адзнакі, што ацэньваецца аднім карыстальнікам.';
$string['privacy:metadata:grading_instances:feedback'] = 'Водгук дадзены карыстальнікам.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Тэкставы фармат водгука дадзенага карыстальнікам.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID карыстальніка, які ацаніў экзэмпляр ацэньваньня.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Адзнака экзэмпляра ацэньваньня.';
$string['privacy:metadata:grading_instances:status'] = 'Статус гэтага экзэмпляра ацэньваньня.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Час апошняй зьмены экзэмпляра ацэньваньня.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Дадзеныя метаду ацэньваньня.';
$string['searchownforms'] = 'уключыць мае ўласныя формы';
$string['searchtemplate'] = 'Пошук форм ацэньваньня';
$string['searchtemplate_help'] = 'Тут вы можаце знайсьці форму ацэньваньня і выкарыстаць яе ў якасьці шаблону для новай формы ацэньваньня. Проста надрукуйце словы, якія мусяць знаходзіцца ў назве формы, ці апісаньні, ці ў целе формы. Каб знайсьці фразу ўключыце ўвесь запыт у двайныя двухкосьсі.

By default, only the grading forms that have been saved as shared templates are included in the search results. You can also include all your own grading forms in the search results. This way, you can simply re-use your grading forms without sharing them. Only forms marked as \'Ready for use\' can be re-used this way.';
$string['statusdraft'] = 'Draft';
$string['statusready'] = 'Ready for use';
$string['templatedelete'] = 'Delete';
$string['templatedeleteconfirm'] = 'You are going to delete the shared template \'{$a}\'. Deleting a template does not affect existing forms that were created from it.';
$string['templateedit'] = 'Edit';
$string['templatepick'] = 'Use this template';
$string['templatepickconfirm'] = 'Do you want to use the grading form \'{$a->formname}\' as a template for the new grading form in \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Use this form as a template';
$string['templatesource'] = 'Location: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Own form';
$string['templatetypeshared'] = 'Shared template';
