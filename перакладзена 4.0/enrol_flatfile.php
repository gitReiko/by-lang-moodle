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
 * Strings for component 'enrol_flatfile', language 'en', version '4.0'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Кадоўка файла';
$string['expiredaction'] = 'Дзеяньне пасьля пратэрмінаваньня залічэньня';
$string['expiredaction_help'] = 'Абярыце дзеяньне, якое трэба выканаць пасьля пратэрміраваньня залічэньня. Зьвярніце ўвагу, пасьля адлічэньня з курса частка карыстальніцкіх дадзеных і наладаў будуць выдалены.';
$string['filelockedmail'] = 'Тэкставы файлы, якія вы выкарыстоўваеце для залічэньня файлам ({$a}), ня можа быць выдалены працэсам cron. Звычайна гэта значыць, што дазволы наладжаны хібна. Калі ласка, выпраўце дазволы, каб Moodle мог выдаліць файл, іначай ён можа быць апрацаваны паўторна.';
$string['filelockedmailsubject'] = 'Важная памылка: Файл залічэньня';
$string['flatfile:manage'] = 'Кіраваць залічэньнямі карыстальніка ўручную';
$string['flatfile:unenrol'] = 'Адлічыць карыстальнікаў з курса ўручную';
$string['flatfileenrolments'] = 'CSV файл залічэньняў';
$string['flatfilesync'] = 'Сінхранізаваньне залічэньня файлам';
$string['location'] = 'Месцаваньне файла';
$string['location_desc'] = 'Азначце поўны шлях да файлу залічэньня. Файл аўтаматычна выдаляецца пасьля апрацоўкі.';
$string['mapping'] = 'Супастаўленьне роляў у файле';
$string['messageprovider:flatfile_enrolment'] = 'Паведамленьні залічэньня з файлу';
$string['notifyadmin'] = 'Абвяшчаць адміністратара';
$string['notifyenrolled'] = 'Абвяшчаць залічаных карыстальнікаў';
$string['notifyenroller'] = 'Абвяшчаць карыстальніка адказнага за залічэньні';
$string['pluginname'] = 'CSV файл';
$string['pluginname_desc'] = 'Гэты метад будзе паўторна правяраць наяўнасьць і апрацоўваць адмыслова адфарматаваны тэкставы файл у азначаным вамі месцы.
Файл пададзены ў форме чатырма ці шасьці поляў у радке:

operation, role, user idnumber, course idnumber [, starttime [, endtime]]

дзе:

* operation = add | del - (дадаць | выдаліць)
* role = student | teacher | teacheredit - (студэнт, настаўнік, настаўнік з правамі рэдагаваньня)
* user idnumber - idnumber з табліцы карыстальнікаў NB, не id
* course idnumber - idnumber з табліцы курсаў NB, не id
* starttime - дата пачынаньня (у сякундах з epoch (timestamp)) - неабавязковае
* endtime - дата сканчэньня (у сякундах з epoch (timestamp)) - неабавязковае

Можа выглядзець наступным чынам:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Плагін CSV файла можа захоўваць асабістыя дадзеныя, зьвязаныя з будучымі залічэньнямі, у табліцы enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Дзеяньне залічэньня чакаецца ў азначаную дату';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'ID курса, якога тычыцца залічэньне';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID ролі, якая будзе прызначана ці забрана';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Час сканчэньня залічэньня';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Час зьмяненьня залічэньня';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Час пачынаньня залічэньня';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID карыстальніка, да якой адносіцца прызначэньне ролі';
