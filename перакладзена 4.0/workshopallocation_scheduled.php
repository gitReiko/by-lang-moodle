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
 * Strings for component 'workshopallocation_scheduled', language 'en', version '4.0'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Фонавая апрацоўка прызначэньня па раскладзе';
$string['currentstatus'] = 'Цяперашні статус';
$string['currentstatusexecution'] = 'Статус';
$string['currentstatusexecution1'] = 'Выканана {$a->datetime}';
$string['currentstatusexecution2'] = 'Будзе зноў выканана {$a->datetime}';
$string['currentstatusexecution3'] = 'Будзе выканана {$a->datetime}';
$string['currentstatusexecution4'] = 'Чакае выкананьня';
$string['currentstatusnext'] = 'Наступнае выкананьне';
$string['currentstatusnext_help'] = 'У некаторых выпадках, прызначэньне па раскладзе аўтаматычна выконваецца зноў пасьля выкананьня. Тое можа адбывацца, напрыклад, калі апошні тэрмін выкананьня быў падоўжаны.';
$string['currentstatusreset'] = 'Скінуць';
$string['currentstatusreset_help'] = 'Захаваньне формы з усталяваным гэтым сьцяжком прывядзе да скідваньня цяперашняга статуса. Уся інфармацыя пра папярэдняе выкананьне будзе выдалена, каб прызначэньне магло ажыцявіцца зноў (калі ўключана вышэй).';
$string['currentstatusresetinfo'] = 'Усталюйце сьцяжок і захавайце форму, каб скінуць вынікі выкананьня';
$string['currentstatusresult'] = 'Вынікі апошняга выкананьня';
$string['enablescheduled'] = 'Уключыць прызначэньне па раскладзе';
$string['enablescheduledinfo'] = 'Аўтаматычна прызначае адпраўленьні пасьля сканчэньня этапа адпраўленьня';
$string['pluginname'] = 'Прызначэньне па раскладзе';
$string['privacy:metadata'] = 'Плагін Прызначэньне па раскладзе не захоўвае аніякіх асабістых дадзеных. Актуальныя асабістыя дадзеныя пра тое, хто будзе ацэньваць, захоўваюцца ў модулі Майстэрня і фармуюць падмурак для экспарту дэталяў пра ацэньваньні.';
$string['randomallocationsettings'] = 'Налады прызначэньня';
$string['randomallocationsettings_help'] = 'Тут вызначаюцца параметры дзеля метаду выпадковага прызначэньня. Яны будуць выкарыстаны плагінам выпадковага прызначэньня для актуальных прызначэньняў адпраўленьняў.';
$string['resultdisabled'] = 'Прызначэньне па раскладзе выключана';
$string['resultenabled'] = 'Прызначэньне па раскладзе ўключана';
$string['resultexecuted'] = 'Посьпех';
$string['resultfailed'] = 'Нельга аўтаматычна прызначыць адпраўленьні';
$string['resultfailedconfig'] = 'Прызначэньне па раскладзе хібна сканфігуравана';
$string['resultfaileddeadline'] = 'Майстэрня ня мае вызначанага апошняга тэрміну адпраўленьня';
$string['resultfailedphase'] = 'Майстэрня ня мае этапа адпраўленьня';
$string['resultvoid'] = 'Адпраўленьні не прызначаны';
$string['resultvoiddeadline'] = 'Тэрмін сканчэньня адпраўленьня яшчэ ня скончаны';
$string['resultvoidexecuted'] = 'Прызначэньне ўжо было выканана';
$string['scheduledallocationsettings'] = 'Налады прызначэньня па раскладзе';
$string['scheduledallocationsettings_help'] = 'Калі ўключана, метад прызначэньня па раскладзе будзе аўтаматычна прызначаць адпраўленьні для ацэньваньняў пасьля сканчэньня этапа адпраўленьня. Канец этапу льга вызначыць у наладзе майстэрні \'Апошні тэрмін адпраўленьня\'.

Унутры метад выпадковага прызначэньня выконваецца па наладах загадзя вызначаных у гэтай форме. То бок, прызначэньне па раскладзе працуе нібы настаўнік выканаў сам выпадковае прызначэньне пасьля сканчэньня этапа адпраўленьня праз ніжэйшыя налады прызначэньня.

Зьвярніце ўвагу, прызначэньне па раскладзе *не* выконваецца, калі майстэрню ўручную пераключыць на этап ацэньваньня да сканчэньня тэрміну адпраўленьня. У гэтым выпадку вам прыйдзецца самастойна прызначаць адпраўленьні. Метад прызначэньне па раскладзе асабліва карысны, калі выкарыстоўваецца разам з функцыяй аўтаматычнага пераключэньня этапаў.';
$string['setup'] = 'Наладзьце прызначэньне па раскладзе';
