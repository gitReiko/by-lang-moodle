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
 * Strings for component 'customlabeltype_definition', language 'en', version '4.0'.
 *
 * @package     customlabeltype_definition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Definition';
$string['definition'] = 'Definition text';
$string['definition:addinstance'] = 'Can add an instance';
$string['definition:view'] = 'Can view the content';
$string['family'] = 'pedagogic';
$string['pluginname'] = 'Course element : Definition';
$string['subdef'] = 'Subdefinition';
$string['subdef0'] = 'Subdefinition 1';
$string['subdef1'] = 'Subdefinition 2';
$string['subdef2'] = 'Subdefinition 3';
$string['subdef3'] = 'Subdefinition 4';
$string['subdef4'] = 'Subdefinition 5';
$string['subdef5'] = 'Subdefinition 6';
$string['subdef6'] = 'Subdefinition 7';
$string['subdef7'] = 'Subdefinition 9';
$string['subdef9'] = 'Subdefinition 10';
$string['subdefsnum'] = 'Number of sub definitions';
$string['template'] = '<table class="custombox-definition" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb definition" style="background-image : url(<%%icon%%>);" width="2%" rowspan="2">
    </td>
    <td class="custombox-header-caption definition" width="98%">
        Definition
    </td>
</tr>
<tr valign="top">
    <td class="custombox-content definition">
        <%%definition%%>
    </td>
</tr>
<%if %%hassubdeflist%% %>
<tr valign="top">
    <td class="custombox-foo definition" width="2%"></td>
    <td class="custombox-subdefinitions definition">
        <%%subdeflist%%>
    </td>
</tr>
<%endif %>
</table>';
$string['typename'] = 'Definition';
