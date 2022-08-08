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
 * Strings for component 'tool_langpackdropper', language 'en', version '4.0'.
 *
 * @package     tool_langpackdropper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlangpackinstalled'] = 'Language pack installed';
$string['eventlangpackinstalled_desc'] = 'The language pack \'{$a->name}\' was installed from {$a->url}';
$string['eventlangpackupdated'] = 'Language pack updated';
$string['eventlangpackupdated_desc'] = 'The language pack \'{$a->name}\' was updated from {$a->url}';
$string['pluginname'] = 'Language pack dropper';
$string['privacy:metadata'] = 'The Language pack dropper plugin does not store any personal data.';
$string['setting_downloadtimeout'] = 'Language pack download timeout';
$string['setting_downloadtimeout_desc'] = 'Moodle will try to download the language pack(s) from the given URL(s) until this timeout is hit.';
$string['setting_langpackdropperstatic_desc'] = 'With this plugin, you are able to download language packs which are not part of the official Moodle language pack (which means that they are not maintained in AMOS, the central Moodle translation system). This is especially relevant if you are running a large number of language string modifications and want to manage these on your own code management server rather than in the language customization interface of your particular Moodle instance. This is also relevant if you want to run the same language string modifications on multiple Moodle instances simultaneously.';
$string['setting_langpackurls'] = 'Language pack URLs';
$string['setting_langpackurls_desc'] = 'This setting expects a list of language packs to be used on this Moodle installation.
Each line contains one language pack. The line consists of the language pack identifier and a URL where the language pack can be downloaded. Both values are separated by a pipe.<br/><br/>
For example:<br/>
de_mysublangpack|https://github.com/lernlink/moodle-tool_langpackdropper/raw/master/tests/fixtures/de_droppertest_toplevel.zip
<br/><br/>
Further information to the parameters:
<ul>
<li><b>Identifier:</b> This is the name of the folder below your MOODLEDATA/lang directory where this language pack will be stored.</li>
<li><b>URL:</b> This is the full download URL from where Moodle can download a valid ZIP file with the language pack. URLs to Github repository downloads work particularly fine.</li>
</ul>
Please note:
<ul>
<li>Configuration lines with an invalid format or an invalid URL will be silently ignored when the settings are processed.</li>
<li>The language pack ZIP file has to contain all language pack files on its top level or within one single subfolder. In the second case, the subfolder can have any name. If the ZIP file does not match these requirements, the language pack will not be processed and an error will be logged.</li>
<li>With this tool, Moodle will download PHP code from the given URL and will execute its content as language pack PHP files. <em>The Moodle administrator has to make sure to only configure download URLs which do not contain anything else than language pack files. Additionally, the Moodle administrator has to make sure that an attacker cannot infiltrate malicious code into the ZIP file anytime in the future.</em></li>
<li>If you plan to use this tool to drop a language pack with an identifier which is an official Moodle language pack - which is perfectly possible - please evaluate if you have to disable the \\tool_langimport\\task\\update_langpacks_task scheduled task. This would help to avoid any interference of both language pack updating mechanisms.</li>
<li>if you remove a configuration line from this setting again, the downloaded language pack will not be removed automatically. To finally remove a downloaded language pack, please go to the <a href="{$a->managepage}">manage language packs</a> page.</li>
</ul>';
$string['taskupdatelanguagepacks'] = 'Update dropped language packs';
$string['updatedcallbacknotification'] = 'The language pack URLs were updated. An ad-hoc task to download / update the language pack(s) based on the stored settings was scheduled and will be processed shortly.';
