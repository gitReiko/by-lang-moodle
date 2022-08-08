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
 * Strings for component 'customlabeltype_remind', language 'en', version '4.0'.
 *
 * @package     customlabeltype_remind
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Remind';
$string['family'] = 'pedagogic';
$string['pluginname'] = 'Course element: Reminder';
$string['remind:addinstance'] = 'Can add an instance';
$string['remind:view'] = 'Can view the reminder';
$string['remindtext'] = 'Remind text';
$string['template'] = '<table class="custombox-remind" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb remind" style="background-image : url(<%%icon%%>);" width="2%" rowspan="2">
    </td>
    <td class="custombox-header-caption remind" width="98%">
        Remind !
    </td>
</tr>
<tr valign="top">
    <td class="custombox-content remindtext">
        <%%remindtext%%>
    </td>
</tr>
</table>';
$string['typename'] = 'Remind';
