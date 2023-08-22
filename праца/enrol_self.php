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
 * Strings for component 'enrol_self', language 'en', version '4.0'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Залічэньне адключана ці не актыўна';
$string['canntenrolearly'] = 'Пакуль нельга залічыцца; залічэньне пачынаецца {$a}.';
$string['canntenrollate'] = 'Ужо нельга залічыцца; залічэньне скончана з {$a}.';
$string['cohortnonmemberinfo'] = 'Толькі чальцы кагорты \'{$a}\' могуць самастойна залічыцца.';
$string['cohortonly'] = 'Толькі чальцы кагорты';
$string['cohortonly_help'] = 'Самастойнае залічэньне льга абмежаваць чальцамі пэўнай кагорты. Памятайце зьмена гэтай налады не ўплывае на існыя залічэньні.';
$string['confirmbulkdeleteenrolment'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэтыя залічэньні карыстальніка?';
$string['customwelcomemessage'] = 'Уласнае вітальнае паведамленьне';
$string['customwelcomemessage_help'] = 'Уласнае вітальнае паведамленьне льга дадаць у форме простага тэксту ці аўтафарматаваньня Moodle, з HTML тэгамі і мульцімоўнымі тэгамі.

Наступныя запаўняльнік льга выкарыстоўваць паведамленьне:

* Назва курса {$a->coursename}
* Спасылка на старонку профілю карыстальніка {$a->profileurl}
* Імэйл карыстальніка {$a->email}
* Поўнае імя карыстальніка {$a->fullname}';
$string['defaultrole'] = 'Стандартнае прызначэньне ролі';
$string['defaultrole_desc'] = 'Абярыце ролю, якая будзе прызначацца карыстальнікам падчас залічэньня';
$string['deleteselectedusers'] = 'Выдаліць абраныя залічэньні карыстальніка';
$string['editselectedusers'] = 'Рэдагаваць абраныя залічэньні карыстальніка';
$string['enrolenddate'] = 'Дата сканчэньня';
$string['enrolenddate_help'] = 'Калі ўключана, карыстальнікі могуць самастойна залічвацца толькі да гэтай даты.';
$string['enrolenddaterror'] = 'Дата сканчэньня залічэньня ня можа быць ранейшай за дату пачынаньня';
$string['enrolme'] = 'Залічыць мяне';
$string['enrolperiod'] = 'Працягласьць залічэньня';
$string['enrolperiod_desc'] = 'Стандартная працягласьць актыўнасьці залічэньня. Калі ўсталяваны нуль, працягласьць залічэньня будзе бясконцай па-стандарту.';
$string['enrolperiod_help'] = 'Працягласьць актыўнасьці залічэньня, пачыная з моманту самастойнага залічэньня. Калі адключана, працягласьць залічэньня будзе бясконцай.';
$string['enrolstartdate'] = 'Дата пачынаньня';
$string['enrolstartdate_help'] = 'Калі ўключана, карыстальнікі могуць самастойна залічвацца толькі з гэтай даты.';
$string['expiredaction'] = 'Дзеяньне пасьля сканчэньня залічэньня';
$string['expiredaction_help'] = 'Абярыце дзеяньне, якое трэба выканаць пасьля сканчэньня залічэньня. Зьвярніце ўвагу, што пасьля адлічэньня частка дадзеных і наладаў карыстальніка выдаляецца з курса.';
$string['expirymessageenrolledbody'] = 'Паважаны(ая) {$a->user},

Паведамляем вам, што {$a->timeend} вашае залічэньне у курсе \'{$a->course}\' скончыцца.

Калі вам патрэбная дапамога, калі ласка, зьвярніцеся да {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Абвестка пра сканчэньне самастойнага залічэньня';
$string['expirymessageenrollerbody'] = 'Самастойнае залічэньне ў курс \'{$a->course}\' скончыцца цягам наступных {$a->threshold} для гэтых карыстальнікаў:

{$a->users}

Каб працягнуць іхняе залічэньне, прайдзіце па {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Абвестка пра сканчэньне самастойнага залічэньня';
$string['expirynotifyall'] = 'Настаўнік і залічаныя карыстальнікі';
$string['expirynotifyenroller'] = 'Толькі настаўнік';
$string['groupkey'] = 'Выкарыстоўваць ключы групавых залічэньняў';
$string['groupkey_desc'] = 'Выкарыстоўваць ключы групавых залічэньняў па-стандарту.';
$string['groupkey_help'] = 'У дадатак да абмежаваньня доступа да курса толькі тымі, хто ведае ключ, ключы залічэньняў аўтаматычна дадаюць карыстальнікаў у групы падчас залічэньня у курс.

Нататка: Трэба ўсталяваць ключ залічэньня для курса ў наладах самастойнага залічэньня і ключы групавога залічэньня ў наладах груп.';
$string['keyholder'] = 'Вы мусілі атрымаць гэты ключ залічэньня ад:';
$string['longtimenosee'] = 'Адлічаць неактыўных пасьля';
$string['longtimenosee_help'] = 'Калі карыстальнікі не заходзяць у курс на працягу доўгага часу, яны аўтаматычна адлічаюцца. Гэтая налада вызначае тэрмін.';
$string['maxenrolled'] = 'Макс залічаных карыстальнікаў';
$string['maxenrolled_help'] = 'Вызначае максімальную колькасьць карыстальнікаў, што могуць самастойна залічыцца. 0 значыць без абмежаваньняў.';
$string['maxenrolledreached'] = 'Максімальная колькасьць карыстальнікаў, што можа самастойна залічыцца ўжо дасягнута.';
$string['messageprovider:expiry_notification'] = 'Абвесткі пра сканчэньне самастойнага залічэньня';
$string['newenrols'] = 'Дазволіць новыя залічэньні';
$string['newenrols_desc'] = 'Дазволіць карыстальнікам самастойна залічвацца ў новыя курсы па-стандарту.';
$string['newenrols_help'] = 'Гэтая налада вызначае, ці можа карыстальнік залічыцца ў гэты курс.';
$string['nopassword'] = 'Ключ залічэньня не патрабуецца.';
$string['password'] = 'Ключ залічэньня';
$string['password_help'] = 'Ключ залічэньня абмяжоўвае доступ да курсу тымі, хто ведае ключ.

Калі пакінуць поле пустым, усе карыстальнікі змогуць залічвацца на курс.

Калі ключ залічэньня вызначаны, то ўсім карыстальнікам для залічэньня на курс неабходна будзе ўвесьці гэты ключ. Зьвярніце ўвагу, ключ залічэньня трэба ўвесьці толькі АДЗІН раз, падчас залічэньня на курс.';
$string['passwordinvalid'] = 'Хібны ключ залічэньня, калі ласка, паспрабуйце зноў';
$string['passwordinvalidhint'] = 'Гэты ключ залічэньня хібны, калі ласка, паспрабуйце зноў<br />
(Вось падказка - ён пачынаецца з \'{$a}\')';
$string['pluginname'] = 'Самастойнае залічэньне';
$string['pluginname_desc'] = 'Плагін самастойнага залічэньня дазваляе карыстальнікам абіраць курсы, у якіх яны жадаюць удзельнічаць. Курсы льга абараніць ключом залічэньня. Унутры залічэньне ажыцяўляецца з дапамогай плагіна ручнога залічэньня, які мусіць быць уключаным у тым жа курсе.';
$string['privacy:metadata'] = 'Плагін Самастойнае залічэньне не захоўвае аніякіх карыстальніцкіх дадзеных.';
$string['requirepassword'] = 'Патрабаваць ключ залічэньня';
$string['requirepassword_desc'] = 'Патрабаваць ключы залічэньня ў новых курсах і прадухіляць выдаленьне ключоў залічэньня ў існых курсах.';
$string['role'] = 'Стандартная прызначаемая роля';
$string['self:config'] = 'Наладзіць экзэмпляры самастойнага залічэньня';
$string['self:enrolself'] = 'Самастойнае залічэньне ў курс';
$string['self:holdkey'] = 'Быць уласьнікам ключа самастойнага залічэньня';
$string['self:manage'] = 'Кіраваць залічанымі карыстальнікамі';
$string['self:unenrol'] = 'Адлічыць карыстальнікаў з курса';
$string['self:unenrolself'] = 'Адлічыць сябе з курса';
$string['sendcoursewelcomemessage'] = 'Адправіць вітальнае паведамленьне курса';
$string['sendcoursewelcomemessage_help'] = 'Падчас самастойнага залічэньня карыстальніка на курс, карыстальніку льга адпраўляць вітальнае паведамленьне на імэйл. Калі імэйл адпраўляецца ад кантакта курса (па-стандарту настаўніка), і існуе некалькі карыстальнікаў з гэтай рольлю, паведамленьне будзе адпраўляцца ад імэйла першага карыстальніка з гэтай рольлю.';
$string['sendexpirynotificationstask'] = 'Заданьне адпраўленьня абвестак пра сканчэньне самастойнага залічэньня';
$string['showhint'] = 'Паказваць падказку';
$string['showhint_desc'] = 'Паказваць першую літару ключа самастойнага доступа.';
$string['status'] = 'Allow existing enrolments';
$string['status_desc'] = 'Enable self enrolment method in new courses.';
$string['status_help'] = 'If enabled together with \'Allow new enrolments\' disabled, only users who self enrolled previously can access the course. If disabled, this self enrolment method is effectively disabled, since all existing self enrolments are suspended and new users cannot self enrol.';
$string['syncenrolmentstask'] = 'Synchronise self enrolments task';
$string['unenrol'] = 'Unenrol user';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['unenroluser'] = 'Do you really want to unenrol "{$a->user}" from course "{$a->course}"?';
$string['unenrolusers'] = 'Unenrol users';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for enrolment keys.';
$string['welcometocourse'] = 'Welcome to {$a}';
$string['welcometocoursetext'] = 'Welcome to {$a->coursename}!

If you have not done so already, you should edit your profile page so that we can learn more about you:

  {$a->profileurl}';
