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
 * Strings for component 'antivirus_clamav', language 'en', version '4.0'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Зараз маецца праблема сканаваньня АнтыВіруса. Вашы файл {$a->item} ня быў запампованы. Калі ласка, атрымайце спробу зноў.';
$string['clamfailed'] = 'ClamAV не ўдалося запусьціць. Паведамленьне памылкі "{$a}". Вось вынікі працы ClamAV:';
$string['clamfailureonupload'] = 'Падчас збою ClamAV';
$string['configclamactlikevirus'] = 'Разглядаць файлы пагрозы як вірусы';
$string['configclamdonothing'] = 'Дазваляць файлы пагрозы';
$string['configclamfailureonupload'] = 'Калі абрана \'Дазваляць файлы пагрозы\', файлы будуць перасунуты ў тэчку. Калі абрана \'Скасаваць спампоўваньне і паспрабаваць зноў\', карыстальніку будзе прапанавана паспрабаваць спробу пазьней. Калі абрана \'Разглядаць файлы пагрозы як вірусы\', файлы будуць перасунуты ў карантынную вобласьць ці выдалены. Папярэджаньне: Падчас выкарыстаньня гэтай налады, калі па нейкай нагодзе clam ня зможа запусьціцца (звычайна з-за хібнага шляху да clam (pathtoclam)), то ўсе запампованыя файлы будуць перасунуты ў карантынную вобласьць ці выдалены.';
$string['configclamtryagain'] = 'Скасаваць спампоўваньне і паспрабаваць зноў';
$string['errorcantopensocket'] = 'Далучэньне да сакету дамену Unix прывяло да памылкі {$a}';
$string['errorclamavnoresponse'] = 'ClamAV не адказвае; праверце статус працы дэмана.';
$string['errornounixsocketssupported'] = 'Транспартаваньне сакету дамену Unix не падтрымліваецца гэтай сістэмай. Калі ласка, заміж гэтага выкарыстайце наладу камандны радок.';
$string['invalidpathtoclam'] = 'Шлях да ClamAV, {$a}, хібны.';
$string['pathtoclam'] = 'Камандны радок';
$string['pathtoclamdesc'] = 'Калі выкарыстоўваецца метад "камандны радок", увядзіце шлях да ClamAV тут. Для Linux шлях звычайна такі /usr/bin/clamscan ці /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Сакет дамену Unix';
$string['pathtounixsocketdesc'] = 'Калі выкарыстоўваецца метад "Сакет дамену Unix", увядзіце шлях да сакету ClamAV Unix тут. Для Debian Linux гэта /var/run/clamav/clamd.ctl. Калі ласка, пераканайцеся, што дэман clamav мае доступ на чытаньне запампованых файлаў, найпросты шлях пераканацца - дадаць карыстальніка \'clamav\' да групы вашага ўэб-сэрвера (\'www-data\' у Debian Linux).';
$string['pluginname'] = 'Антывірус ClamAV';
$string['privacy:metadata'] = 'Антывірусны плагін ClamAV не захоўвае аніякіх асабовых дадзеных.';
$string['quarantinedir'] = 'Карантынная тэчка';
$string['runningmethod'] = 'Метад запуску';
$string['runningmethodcommandline'] = 'Камандны радок';
$string['runningmethoddesc'] = 'Метад запуску ClamAV. Камандны радок - стандартны метад, але ў Unix сістэмах лепшую прадукцыйнасьць забясьпечвае выкарыстаньне сакетаў.';
$string['runningmethodtcpsocket'] = 'TCP сакет';
$string['runningmethodunixsocket'] = 'Сакет дамену Unix';
$string['tcpsockethost'] = 'Назва хасту (hostname) сакету TCP';
$string['tcpsockethostdesc'] = 'Даменная назва ClamAV сэрверу';
$string['tcpsocketport'] = 'Порт сакету TCP';
$string['tcpsocketportdesc'] = 'Сакет, што выкарыстоўваецца для далучэньня да ClamAV';
$string['tries'] = 'Спробы сканаваньня';
$string['tries_desc'] = 'Колькасьць спробаў ClamAV падчас узьнікненьня памылкі пры сканаваньні.';
$string['tries_notice'] = 'Clamav спрабаваў сканаваць {$a->tries} раз.
{$a->notice}';
$string['unknownerror'] = 'Адбылася невядомая памылка з ClamAV.';
