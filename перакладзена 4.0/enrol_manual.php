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
 * Strings for component 'enrol_manual', language 'en', version '4.0'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Прасунутае';
$string['alterstatus'] = 'Зьмяніць статус';
$string['altertimeend'] = 'Зьмяніць час сканчэньня';
$string['altertimestart'] = 'Зьмяніць час пачынаньня';
$string['assignrole'] = 'Прызначыць ролю';
$string['assignroles'] = 'Прызначыць ролі';
$string['browsecohorts'] = 'Агляд кагорт';
$string['browseusers'] = 'Агляд карыстальнікаў';
$string['confirmbulkdeleteenrolment'] = 'Вы ўпэўненыя, што жадаеце выдаліць залічэньні гэтых карыстальнікаў?';
$string['defaultperiod'] = 'Стандартная працягласьць залічэньня';
$string['defaultperiod_desc'] = 'Стандартная працягласьць дзеяньня залічэньня. Калі ўсталяваць нуль, то стандартная працягласьць залічэньня будзе бясконцай.';
$string['defaultperiod_help'] = 'Стандартная працягласьць дзеяньня залічэньня з моманту старту залічэньня. Калі адключыць, то стандартная працягласьць залічэньня будзе бясконцай.';
$string['defaultstart'] = 'Стандартны старт залічэньня';
$string['deleteselectedusers'] = 'Выдаліць абраныя залічэньні карыстальнікаў';
$string['editselectedusers'] = 'Рэдагаваць абраныя залічэньні карыстальнікаў';
$string['enrolledincourserole'] = 'Залічаны ў "{$a->course}" з рольлю "{$a->role}"';
$string['enrolusers'] = 'Залічыць карыстальнікаў';
$string['enroluserscohorts'] = 'Залічыць абраных карыстальнікаў і кагорты';
$string['expiredaction'] = 'Дзеяньне пасьля сканчэньня залічэньня';
$string['expiredaction_help'] = 'Абярыце дзеяньне, якое трэба выканаць пасьля сканчэньня залічэньня. Зьвярніце ўвагу, што пасьля адлічэньня частка дадзеных і наладаў карыстальніка выдаляецца з курса.';
$string['expirymessageenrolledbody'] = 'Паважаны(ая) {$a->user},

Паведамляем вам, што {$a->timeend} вашае залічэньне у курсе \'{$a->course}\' скончыцца.

Калі вам патрэбная дапамога, калі ласка, зьвярніцеся да {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Абвестка пра сканчэньне залічэньня';
$string['expirymessageenrollerbody'] = 'Залічэньне ў курс \'{$a->course}\' скончыцца цягам наступных {$a->threshold} для гэтых карыстальнікаў:

{$a->users}

Каб працягнуць іхняе залічэньне, прайдзіце па {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Абвестка пра сканчэньне залічэньне';
$string['manual:config'] = 'Наладзіць экзэмпляры ручнога залічэньня';
$string['manual:enrol'] = 'Залічыць карыстальнікаў';
$string['manual:manage'] = 'Кіраваць залічэньнямі карыстальнікаў';
$string['manual:unenrol'] = 'Адлічыць карыстальнікаў з курса';
$string['manual:unenrolself'] = 'Адлічыць сябе з курса';
$string['manualpluginnotinstalled'] = 'Плагін "Ручное залічэньне" пакуль не ўсталяваны';
$string['messageprovider:expiry_notification'] = 'Абвесткі пра сканчэньне ручнога залічэньня';
$string['now'] = 'Зараз';
$string['pluginname'] = 'Ручные залічэньні';
$string['pluginname_desc'] = 'Плагін ручные залічэньні даваляе ўручную залічаць карыстальнікаў у курс праз спасылку ў наладах адміністраваньня, карыстальнікам з адпаведнымі дазволамі, напрыклад, настаўнікам. Па стандарту плагін мусіць быць уключаны, бо частка іншых плагінаў залічэньня выкарыстоўваюць яго, напрыклад, самастойныя залічэньні.';
$string['privacy:metadata'] = 'Плагін Ручные залічэньні не захоўвае аніякіх асабістых дадзеных.';
$string['selectcohorts'] = 'Абраць кагорты';
$string['selection'] = 'Абраньне';
$string['selectusers'] = 'Абраць карыстальнікаў';
$string['sendexpirynotificationstask'] = 'Заданьне адпраўленьня абвестак пра сканчэньне ручнога залічэньня';
$string['status'] = 'Уключыць ручные залічэньні';
$string['status_desc'] = 'Дазваляе доступ да курса залічанным карыстальнікам. Трэба трымаць уключанным ў большасьці выпадкаў.';
$string['status_help'] = 'Гэтая налада вызначае, ці льга уручную залічваць карыстальнікаў праз спасылку ў наладах адміністраваньня курса, карыстальнікам з адпаведнымі дазволамі, напрыклад, настаўнікам.';
$string['statusdisabled'] = 'Адключана';
$string['statusenabled'] = 'Уключана';
$string['syncenrolmentstask'] = 'Заданьне сінхранізаваньня ручных залічэньняў';
$string['unenrol'] = 'Адлічыць карыстальніка';
$string['unenrolselectedusers'] = 'Адлічыць абраных карыстальнікаў';
$string['unenrolselfconfirm'] = 'Вы сапраўды жадаеце адлічыць сябе з курса "{$a}"?';
$string['unenroluser'] = 'Вы сапраўды жадаеце адлічыць "{$a->user}" з курса "{$a->course}"?';
$string['unenrolusers'] = 'Адлічыць карыстальнікаў';
$string['wscannotenrol'] = 'Экзэмпляр плагіна ня можа ўручную залічыць карыстальніка у курс с id = {$a->courseid}';
$string['wsnoinstance'] = 'Экзэмпляр плагіна ручное залічэньне не існуе ці адключаны ў курсе (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Вы ня маеце дазволу на прызначэньне ролі ({$a->roleid}) карыстальніку ({$a->userid}) у курсе ({$a->courseid}).';
