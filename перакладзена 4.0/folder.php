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
 * Strings for component 'folder', language 'en', version '4.0'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = '{$a->name} - {$a->date}';
$string['contentheader'] = 'Зьмесьціва';
$string['display'] = 'Адлюстроўваць зьмесьціва тэчкі';
$string['display_help'] = 'Калі вы абралі адлюстраваньне зьмесьціва тэчкі на старонцы курса, ня будзе спасылкі на асобную старонку. Апісаньне будзе адлюстроўвацца, толькі калі ўсталявана \'Адлюстроўваць апісаньне на старонцы курса\'. Зьвярніце ўвагу, у гэтым выпадку дзеяньні прагляду ўдзельнікаў ня будуць лагавацца ў журнал.';
$string['displayinline'] = 'Убудаваць на старонку курса';
$string['displaypage'] = 'На асобнай старноцы';
$string['dnduploadmakefolder'] = 'Разархіваваць файлы і стварыць тэчку';
$string['downloadfolder'] = 'Спампаваць тэчку';
$string['eventallfilesdownloaded'] = 'Zip-архіў тэчкі спампаваны';
$string['eventfolderupdated'] = 'Тэчка абноўлена';
$string['folder:addinstance'] = 'Дадаць новую тэчку';
$string['folder:managefiles'] = 'Кіраваць файламі ў модулі тэчка';
$string['folder:view'] = 'Глядзець зьмесьціва тэчкі';
$string['foldercontent'] = 'Файлы і падтэчкі';
$string['forcedownload'] = 'Прымусова спампоўваць файлы';
$string['forcedownload_help'] = 'Вызначае, ці мусяць пэўныя файлы, напрыклад, выявы альбо HTML-файлы, адлюстроўвацца ў браўзары, а не спампоўвацца. Зьвярніце ўвагу, у мэтах бясьпекі гэтую наладу лепей не ўключаць, за выняткаў выпадкаў, калі ўсе карыстальнікі маюць здольнасьць кіраваньня файламі і з\'яўляюцца даверанымі карыстальнікамі.';
$string['indicator:cognitivedepth'] = 'Пазнаваньне тэчкі';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік заснаваны на глыбіні пазнаньня, дасягнутай студэнтам падчас вывучэньня рэсурсу-тэчка.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне тэчкі';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягнуў наступнага адсотка пазнавальнага ўцягненьня ў прапанаванай Тэчцы падчас тэрміна аналізаваньня (Роўні = Няма прагляда, Прагляд)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць тэчкі';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік згрунтаваны на сацыяльнай шырыні, якую дасягнуў студэнт ў рэсурсе-тэчцы.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць тэчкі';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай рэсурсам-тэчкай у аналізаваны тэрмін (Роўні = Адсутнасьць удзелу, Самотны удзел)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Максімальны памер спампоўкі тэчцы (MB)';
$string['maxsizetodownload_help'] = 'Максімальны памер тэчцы, які можа быць спампаваны ў форме zip-файла. Калі ўсталяваны нуль, памер тэчкі не абмежаваны.';
$string['modulename'] = 'Тэчка';
$string['modulename_help'] = 'Модуль тэчка дазваляе настаўніку паказваць адразу некалькі, зьвязаных файлаў, у адной тэчцы. Тое скарачае прагортку старонкі. Тэчку льга запампаваць і разархіваваць ува zip-архіве, альбо стварыць пустую тэчку і запампаваць ува яе файлы.

Тэчку льга выкарыстоўваць дзеля

* Збору файлаў па аднолькавай тэме, напрыклад, збору экзаменацыйных прац ува фармаце pdf ці калекцыі выяваў для выкарыстаньня ў студэнцкіх працах
* Забесьпячэньня агульнага месца для настаўнікаў, у якое будуць запампоўвацца файлы на старонцы курса (у гэтым выпадку тэчка мусіць быць схаванай, каб яе ня бачылі студэнты)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Тэчкі';
$string['newfoldercontent'] = 'Зьмесьціва новай тэчкі';
$string['noautocompletioninline'] = 'Аўтаматычнае выкананьне прагляду актыўнасьці нельга абраць разам з наладай "Убудаваць на старонку курса"';
$string['page-mod-folder-view'] = 'Галоўная старонка модуля тэчка';
$string['page-mod-folder-x'] = 'Усякая старонка модуля тэчка';
$string['pluginadministration'] = 'Адміністраваньне тэчкі';
$string['pluginname'] = 'Тэчка';
$string['privacy:metadata'] = 'Тэчка-рэсурс Тэчка не захоўвае аніякіх асабістых дадзеных.';
$string['search:activity'] = 'Тэчка';
$string['showdownloadfolder'] = 'Паказаць кнопку спампаваць тэчку';
$string['showdownloadfolder_help'] = 'Калі ўсталявана \'так\', будзе адлюстроўвацца кнопка, што дазваляе спампаваць усё зьмесьціва тэчкі ў zip-файле.';
$string['showexpanded'] = 'Паказваць укладзеныя падтэчкі разгорнута';
$string['showexpanded_help'] = 'Калі ўсталявана \'так\', падтэчкі будуць разгорнуты па-стандарту; іначай яны будуць паказвацца згорнутымі.';
