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
$string['enablequarantine_help'] = 'If enabled, any files which are detected as viruses will be placed in a quarantine folder ([dataroot]/{$a}) for later inspection. The upload into Moodle will fail. If you have any file system level virus scanning in place, the quarantine folder should be excluded from the antivirus check to avoid detecting the quarantined files.';
$string['fileerrordesc'] = 'File scanner error occurred.';
$string['fileerrorname'] = 'File scanner error';
$string['fileinfecteddesc'] = 'An infected file was detected.';
$string['fileinfectedname'] = 'File infected';
$string['notifyemail'] = 'Antivirus alert notification email';
$string['notifyemail_help'] = 'The email address for notifications of when a virus is detected. If left blank, then all site administrators will be sent notifications.';
$string['notifylevel'] = 'Notification level';
$string['notifylevel_help'] = 'The different levels of information you want to be notified about';
$string['notifylevelerror'] = 'Detected threats and scanner errors';
$string['notifylevelfound'] = 'Detected threats only';
$string['privacy:metadata'] = 'The Antivirus system does not store any personal data.';
$string['quarantinedfiles'] = 'Antivirus quarantined files';
$string['quarantinedisabled'] = 'Quarantine is disabled. The file is not stored.';
$string['quarantinetime'] = 'Maximum quarantine time';
$string['quarantinetime_desc'] = 'Quarantined files older than the specified period will be removed.';
$string['taskcleanup'] = 'Clean up quarantined files.';
$string['threshold'] = 'Threshold for status check';
$string['threshold_desc'] = 'How far back to check against previous results for errors etc. as reported in {$a}.';
$string['unknown'] = 'Unknown';
$string['virusfound'] = '{$a->item} has been scanned by a virus checker and found to be infected!';
