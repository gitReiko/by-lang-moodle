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
$string['manageactiondeletedone'] = 'The form was successfully deleted';
$string['manageactionedit'] = 'Edit the current form definition';
$string['manageactionnew'] = 'Define new grading form from scratch';
$string['manageactionshare'] = 'Publish the form as a new template';
$string['manageactionshareconfirm'] = 'You are going to save a copy of the grading form \'{$a}\' as a new public template. Other users at your site will be able to create new grading forms in their activities from that template.';
$string['manageactionsharedone'] = 'The form was successfully saved as a template';
$string['noitemid'] = 'Grading not possible. The graded item does not exist.';
$string['nosharedformfound'] = 'No template found';
$string['privacy:metadata:grading_definitions'] = 'Basic information about an advanced grading form defined in a gradable area.';
$string['privacy:metadata:grading_definitions:areaid'] = 'The area ID where the advanced grading form is defined.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'The grading definition ID from where this was copied.';
$string['privacy:metadata:grading_definitions:description'] = 'The description of the advanced grading method.';
$string['privacy:metadata:grading_definitions:method'] = 'The grading method which is responsible for the definition.';
$string['privacy:metadata:grading_definitions:name'] = 'The name of the advanced grading definition.';
$string['privacy:metadata:grading_definitions:options'] = 'Some settings of this grading definition.';
$string['privacy:metadata:grading_definitions:status'] = 'The status of this advanced grading definition.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'The time when the grading definition was copied.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'The time when the grading definition was created.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'The time when the grading definition was last modified.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'The ID of the user who created the grading definition.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'The ID of the user who last modified the grading definition.';
$string['privacy:metadata:grading_instances'] = 'Assessment record for one gradable item assessed by one rater.';
$string['privacy:metadata:grading_instances:feedback'] = 'The feedback given by the user.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'The text format of the feedback given by the user.';
$string['privacy:metadata:grading_instances:raterid'] = 'The ID of the user who rated the grading instance.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'The grade for the grading instance.';
$string['privacy:metadata:grading_instances:status'] = 'The status of this grading instance.';
$string['privacy:metadata:grading_instances:timemodified'] = 'The time when the grading instance was last modified.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Data for the grading method.';
$string['searchownforms'] = 'include my own forms';
$string['searchtemplate'] = 'Grading forms search';
$string['searchtemplate_help'] = 'You can search for a grading form and use it as a template for the new grading form here. Simply type words that should appear somewhere in the form name, its description or the form body itself. To search for a phrase, wrap the whole query in double quotes.

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
