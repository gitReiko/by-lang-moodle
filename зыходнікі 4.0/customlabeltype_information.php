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
 * Strings for component 'customlabeltype_information', language 'en', version '4.0'.
 *
 * @package     customlabeltype_information
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Information';
$string['family'] = 'pedagogic';
$string['information:addinstance'] = 'Can add an instance';
$string['information:view'] = 'Can view the content';
$string['informationtext'] = 'Information text';
$string['pluginname'] = 'Course element: Information';
$string['template'] = '<table class="custombox-information" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb information" style="background-image : url(<%%icon%%>);" width="2%" rowspan="2">
    </td>
    <td class="custombox-header-caption information" width="98%">
        Information
    </td>
</tr>
<tr valign="top">
    <td class="custombox-content informationtext">
        <%%informationtext%%>
    </td>
</tr>
</table>';
$string['typename'] = 'Information';
