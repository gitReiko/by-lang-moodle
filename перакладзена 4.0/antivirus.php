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
 * Strings for component 'antivirus', language 'en', version '4.0'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Даступныя плагіны-антывірусы';
$string['antiviruscommonsettings'] = 'Агульныя антывірусныя налады';
$string['antiviruses'] = 'Плагіны-антывірусы';
$string['antivirussettings'] = 'Кіраваць плагінамі-антывірусамі';
$string['configantivirusplugins'] = 'Абярыць плагіны-антывірусы, якія жадаеце выкарыстоўваць і ўпарадкуйце іх у чарзе ўжываньня.';
$string['dataerrordesc'] = 'Адбылася памылка сканару дадзеных.';
$string['dataerrorname'] = 'Памылка сканару дадзеных';
$string['datainfecteddesc'] = 'Выяўлены заражаныя дадзеныя.';
$string['datainfectedname'] = 'Заражаныя дадзеныя';
$string['datastream'] = 'Дадзеныя';
$string['emailadditionalinfo'] = 'Дадатковыя дэталі, што вярнуў вірусны рухавік:';
$string['emailauthor'] = 'Запампаваны:';
$string['emailcontenthash'] = 'Хэш зьмесьціва:';
$string['emailcontenttype'] = 'Тып зьмесьціва:';
$string['emaildate'] = 'Дата запампоўкі:';
$string['emailfilename'] = 'Назва файлу:';
$string['emailfilesize'] = 'Памер файлу:';
$string['emailgeoinfo'] = 'Геалакацыя:';
$string['emailinfectedfiledetected'] = 'Выяўлены заражаны файл';
$string['emailipaddress'] = 'IP адрас:';
$string['emailreferer'] = 'Адпраўца:';
$string['emailreport'] = 'Справаздача:';
$string['emailscanner'] = 'Сканар:';
$string['emailscannererrordetected'] = 'Адбылася памылка сканару';
$string['emailsubject'] = '{$a} :: Антывірусная абвестка';
$string['enablequarantine'] = 'Уключыць карантын';
$string['enablequarantine_help'] = 'Калі ўключана, усе файлы, якія будуць выяўлены як вірусы, будуць перасунуты ў карантынную тэчку ([dataroot]/{$a}) дзеля наступнай праверкі. Запампоўка ў Moodle будзе няўдалай. Калі вы выкарыстоўваеце антывірусную праверку на ўзроўне файлавай сістэмы, карантынная тэчка мусіць быць выключана з антывіруснай праверкі, каб пазьбегнуць выяўленьня файлаў, што зьмешчаны ў карантын.';
$string['fileerrordesc'] = 'Адбылася памылка сканаваньня файлаў.';
$string['fileerrorname'] = 'Памылка сканаваньня файлаў';
$string['fileinfecteddesc'] = 'Выяўлены заражаны файл.';
$string['fileinfectedname'] = 'Заражаны файл';
$string['notifyemail'] = 'Імэйл дзеля антывірусных абвестак';
$string['notifyemail_help'] = 'Дасылаць абвесткі на імэйл пасьля выяўленьня віруса. Калі пакінуць пустым, абвесткі будуць дасылацца ўсім адміністратарам сайта.';
$string['notifylevel'] = 'Ровень абвяшчэньня';
$string['notifylevel_help'] = 'Розныя роўні інфармацыі, на якіх вы жадаеце атрымліваць абвесткі';
$string['notifylevelerror'] = 'Выяўлены пагрозы і памылкі сканеру';
$string['notifylevelfound'] = 'Выяўлены толькі пагрозы';
$string['privacy:metadata'] = 'Антывірусная сістэма не захоўвае аніякіх асабістых дадзеных.';
$string['quarantinedfiles'] = 'Файлы, зьмешчаныя ў карантын антывірусам';
$string['quarantinedisabled'] = 'Карантын адключаны. Файлы не захоўваюцца.';
$string['quarantinetime'] = 'Максімальны час карантыну';
$string['quarantinetime_desc'] = 'З карантыну будуць выдалены файлы, узрост якіх перасягае вызначаны час.';
$string['taskcleanup'] = 'Выдаліць файлы, зьмешчаныя ў карантын.';
$string['threshold'] = 'Мяжа праверкі статусу';
$string['threshold_desc'] = 'Як далёка назад праверыць папярэднія вынікі на наяўнасьць памылак і падобнага, пра якія паведамлялася ў {$a}.';
$string['unknown'] = 'Невядома';
$string['virusfound'] = '{$a->item} прасканаваны антывірусам і прызнаны заражаным!';
