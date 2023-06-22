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
 * Strings for component 'assignfeedback_offline', language 'en', version '4.0'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Пацьвердзіць імпарт адзнак';
$string['default'] = 'Уключана па стандарту';
$string['default_help'] = 'Калі ўсталявана, афлайн ацэньваньне працоўнымі лістамі будзе ўключана па стандарту для ўсіх новых заданьняў.';
$string['downloadgrades'] = 'Спампаваць працоўныя лісты ацэньваньня';
$string['enabled'] = 'Афлайн працоўныя лісты ацэньваньня';
$string['enabled_help'] = 'Калі ўключана, настаўнік здольны спампоўваць і запампоўваць працоўныя лісты з адзнакамі студэнтаў падчас ацэньваньня заданьня.';
$string['feedbackupdate'] = 'Зьмяніць поле "{$a->field}" для "{$a->student}" на "{$a->text}"';
$string['gradelockedingradebook'] = 'Адзнака была заблакавана ў журнале адзнак для {$a}';
$string['graderecentlymodified'] = 'Адзнака была зьменена ў Moodle пазьней, чым у працоўным лісьце ацэньваньня для {$a}';
$string['gradesfile'] = 'Працоўныя лісты ацэньваньня (csv фармат)';
$string['gradesfile_help'] = 'Працоўныя лісты ацэньваньня са зьмененымі адзнакамі. Гэты файл мусіць быць CSV файлам з UTF-8 кадаваньнем запампаваны з заданьнем і слупкамі для адзнак студэнтаў і ідэнтыфікатараў.';
$string['gradeupdate'] = 'Зьмяніць адзнаку для {$a->student} на {$a->grade}';
$string['ignoremodified'] = 'Дазваляе абнаўляць запісы, якія былі зьменены ў Moodle пазьней, чым у працоўным лісьце.';
$string['ignoremodified_help'] = 'Калі працоўны ліст ацэньваньня спампаваны з Moodle, ён утрымлівае дату апошняй зьмены для кожнай адзнакі. Калі хоць якая адзнака абноўлена ў Moodle пасьля спампоўваньня працоўнага ліста, па стандарту Moodle адмовіцца перазапісваць гэтую абноўленую інфармацыю падчас імпарту адзнак. Абраньне гэтай опцыі Moodle адключыць гэтую праверку бесьпекі, і можа ўзьнікнуць магчымасьць некалькім пазнакам перазапісаць адзнакі адзін аднаго.';
$string['importgrades'] = 'Пацьвердзіць зьмены ў працоўным лісьце ацэньваньня';
$string['invalidgradeimport'] = 'Moodle ня змог прачытаць запампаваны працоўны ліст. Пераканайцеся, што ён захаваны ў фармаце значэньняў падзеленых коскамі (.csv) ды паспрабуйце зноў.';
$string['nochanges'] = 'У запампаваным працоўным лісьце ня знодзена зьмененых адзнак';
$string['offlinegradingworksheet'] = 'Адзнакі';
$string['pluginname'] = 'Афлайн працоўныя лісты ацэньваньня';
$string['privacy:nullproviderreason'] = 'Гэты плагін ня мае базы дадзеных, каб захоўваць інфармацыю карыстальніка. Ён толькі выкарыстоўвае API плагіна mod_assign для дапамогі ў адлюстраваньні інтэрфейсу ацэньваньня.';
$string['processgrades'] = 'Імпартаваць адзнакі';
$string['skiprecord'] = 'Прапусьціць запіс';
$string['updatedgrades'] = 'Абноўлена <strong>{$a->gradeupdatescount}</strong> адзнак і <strong>{$a->feedbackupdatescount}</strong> экзэмпляраў водгукаў.';
$string['updaterecord'] = 'Абнавіць запіс';
$string['uploadgrades'] = 'Запампаваць працоўны ліст ацэньваньня';
