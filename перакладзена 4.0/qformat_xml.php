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
 * Strings for component 'qformat_xml', language 'en', version '4.0'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Хібны XML-файл - чакаўся радок (выкарыстоўваецца CDATA?)';
$string['pluginname'] = 'Фармат Moodle XML';
$string['pluginname_help'] = 'Гэта адмысловы фармат Moodle дзеля імпарту і экспарту пытаньняў.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Плагін фармату пытаньняў Moodle XML не захоўвае аніякіх асабістых дадзеных.';
$string['truefalseimporterror'] = '<b>Увага</b>: Пытаньне праўда/няпраўда \'{$a->questiontext}\' не было імпартавана належным чынам, бо было незразумела, якой адказ праўдзівы. Пытаньне імпартавана са здагадкай, што слушны адказ - \'{$a->answer}\'. Калі тое ня так, адрэдагуйце пытаньне.';
$string['unsupportedexport'] = 'Тып пытаньня {$a} не падтрымліваецца XML-экспартам';
$string['xmlimportnoname'] = 'Адсутнічае назва пытаньня ў XML-файле';
$string['xmlimportnoquestion'] = 'Адсутнічае тэкст пытаньня ў XML-файле';
$string['xmltypeunsupported'] = 'Тып пытаньня {$a} не падтрымліваецца XML-імпартам';
