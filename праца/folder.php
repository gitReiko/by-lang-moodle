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
$string['displayinline'] = 'Убудова на старонку курса';
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
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаваны рэсурсам-тэчкай у аналізаваны тэрмін (Роўні = Без удзельнікаў, Самотны удзел)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Максімальны памер спампоўкі тэчцы (MB)';
$string['maxsizetodownload_help'] = 'Максімальны памер тэчцы, які можа быць спампаваны ў форме zip-файла. Калі ўсталяваны нуль, памер тэчкі не абмежаваны.';
$string['modulename'] = 'Тэчка';
$string['modulename_help'] = 'The folder module enables a teacher to display a number of related files inside a single folder, reducing scrolling on the course page. A zipped folder may be uploaded and unzipped for display, or an empty folder created and files uploaded into it.

A folder may be used

* For a series of files on one topic, for example a set of past examination papers in pdf format or a collection of image files for use in student projects
* To provide a shared uploading space for teachers on the course page (keeping the folder hidden so that only teachers can see it)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Folders';
$string['newfoldercontent'] = 'New folder content';
$string['noautocompletioninline'] = 'Automatic completion on viewing of activity can not be selected together with "Display inline" option';
$string['page-mod-folder-view'] = 'Folder module main page';
$string['page-mod-folder-x'] = 'Any folder module page';
$string['pluginadministration'] = 'Folder administration';
$string['pluginname'] = 'Folder';
$string['privacy:metadata'] = 'The Folder resource plugin does not store any personal data.';
$string['search:activity'] = 'Folder';
$string['showdownloadfolder'] = 'Show download folder button';
$string['showdownloadfolder_help'] = 'If set to \'yes\', a button will be displayed allowing the contents of the folder to be downloaded as a zip file.';
$string['showexpanded'] = 'Show subfolders expanded';
$string['showexpanded_help'] = 'If set to \'yes\', subfolders are shown expanded by default; otherwise they are shown collapsed.';
