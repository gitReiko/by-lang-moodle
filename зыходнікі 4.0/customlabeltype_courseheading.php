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
 * Strings for component 'customlabeltype_courseheading', language 'en', version '4.0'.
 *
 * @package     customlabeltype_courseheading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Course Heading';
$string['courseheading:addinstance'] = 'Can add an instance';
$string['courseheading:view'] = 'Can view the content';
$string['family'] = 'structure';
$string['image'] = 'Course Heading Image File';
$string['imageposition'] = 'Image position';
$string['imageurl'] = 'Course Heading Image Url';
$string['left'] = 'Left';
$string['moduletype'] = 'Module type';
$string['none'] = 'No image';
$string['overimagetext'] = 'Over image text';
$string['pluginname'] = 'Course element : Course Heading';
$string['right'] = 'Right';
$string['showcategory'] = 'Show category';
$string['showdescription'] = 'Show description';
$string['showidnumber'] = 'Show idnumber';
$string['showshortname'] = 'Show shortname';
$string['template'] = '<table class="custombox-courseheading">
<tr valign="middle" class="custombox-icon courseheading">
<%%imageL%%>
<td width="*">
<%if %%showcategory%% %><div class="custombox-category courseheading"><%%category%%></div><%endif %>
<div class="custombox-preheading courseheading"><%%moduletype%%></div>
<div class="custombox-heading courseheading"><%if %%showshortname%% %><%%shortname%%> - <%endif %> <%%courseheading%%> <%if %%showidnumber%% %>(<%%idnumber%%>)<%endif %></div>
<%if %%showdescription%% %><div class="custombox-description courseheading"><%%coursedesc%%></div><%endif %>
</td>
<%%imageR%%>
</tr>
</table>';
$string['trainingmodule'] = 'Training Module';
$string['typename'] = 'Course Heading';
