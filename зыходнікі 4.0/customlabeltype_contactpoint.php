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
 * Strings for component 'customlabeltype_contactpoint', language 'en', version '4.0'.
 *
 * @package     customlabeltype_contactpoint
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['any'] = 'Any method';
$string['anywritten'] = 'Any method but written';
$string['chat'] = 'Chat';
$string['configtypename'] = 'Enable subtype Contact point';
$string['contactpoint:addinstance'] = 'Can add an instance';
$string['contactpoint:view'] = 'Can view the content';
$string['contacttype'] = 'Contact type';
$string['facetoface'] = 'Physical meeting';
$string['family'] = 'special';
$string['instructions'] = 'Instructions';
$string['mail'] = 'Mail';
$string['meeting'] = 'Online meeting';
$string['onlinevocal'] = 'On line vocal';
$string['phone'] = 'Phone';
$string['pluginname'] = 'Course element : Contact Point';
$string['template'] = '<table class="custombox-contactpoint" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb contactpoint <%%contacttypeoption%%>" style="background-image : url(<%%icon%%>);" width="2%" rowspan="4">
    </td>
    <td class="custombox-header-caption contactpoint" width="98%" colspan="2">
        Contact point...<br/>
        <span class="custombox-header-caption contacttype">Method : <%%contacttype%%></span>
    </td>
</tr>
<tr>
    <td class="custombox-content contactpoint" colspan="2">
        <%%instructions%%>
    </td>
</tr>
</table>';
$string['typename'] = 'Contact point';
