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
 * Strings for component 'leganto', language 'en', version '4.0'.
 *
 * @package     leganto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API key';
$string['apikey_desc'] = 'Your Alma API key (see <a href="https://developers.exlibrisgroup.com/alma/apis#defining" target="_blank">https://developers.exlibrisgroup.com/alma/apis#defining</a> to obtain one).';
$string['apinotconfigured'] = 'The Alma API settings are not fully configured. Please contact your Moodle administrator, quoting the error message(s) above.';
$string['apisettings'] = 'API settings';
$string['apiurl'] = 'API URL';
$string['apiurl_default'] = 'https://api-xx.hosted.exlibrisgroup.com';
$string['apiurl_desc'] = 'The URL of your regional Alma API according to <a href="https://developers.exlibrisgroup.com/alma/apis#calling" target="_blank">https://developers.exlibrisgroup.com/alma/apis#calling</a>.';
$string['authorsinconfig'] = 'Include authors in config form';
$string['authorsinconfig_desc'] = 'Should citation descriptions in module configuration forms include the names of authors? By default only the citation title is included, to save space on the form.';
$string['cachedef_listdata'] = 'Cached Leganto reading list / citation data fetched from Alma API';
$string['citationbookauthor'] = 'Book author: {$a}';
$string['citationbooktitle'] = 'Book title: {$a}';
$string['citationchapter'] = 'Chapter: {$a}';
$string['citationcount'] = '{$a} citation';
$string['citationcountplural'] = '{$a} citations';
$string['citationnote'] = 'Note: {$a}';
$string['codecolumn'] = 'Alma course code column';
$string['codecolumn_desc'] = 'Optional. The name of the column in the custom table containing your Alma course codes';
$string['coderegex'] = 'Alma course code regex';
$string['coderegex_desc'] = 'Optional. If using the Moodle course ID number or short name as your code source, this is a regular expression (including delimiters) matching the Alma course code part of it. If no regex is provided here it will be assumed that the field contains the Alma course code only.';
$string['codesettings'] = 'Course code settings';
$string['codesource'] = 'Alma course code source';
$string['codesource_desc'] = 'Select the source of your Alma course codes. If you choose to use a custom database table you must also specify the table, columns and course attribute details in the fields below. If no code is found in the custom table for a particular course, the course ID number will be checked as a fallback.';
$string['codetable'] = 'Custom database table';
$string['codetable_desc'] = 'Optional. The name of a custom table in the Moodle database containing your Alma course codes mapped against a Moodle course attribute.';
$string['contentheader'] = 'Reading list selection';
$string['courseattribute'] = 'Course attribute';
$string['courseattribute_desc'] = 'Optional. The unique course attribute that is mapped against your Alma course codes in the custom table (normally id, idnumber or shortname).';
$string['coursecolumn'] = 'Course column';
$string['coursecolumn_desc'] = 'Optional. The name of the column in the custom table containing the course attribute that is mapped against your Alma course codes.';
$string['defaultdisplay'] = 'Default display mode';
$string['defaultdisplay_desc'] = 'By default, should new reading lists be displayed on a separate page via a link, or inline on the course page (initially collapsed or expanded)?';
$string['display'] = 'Display reading list contents';
$string['display_help'] = 'If you choose to display the reading list contents on the course page, there will be no link to a separate page. The description will be displayed only if "Display description on course page" is checked.<br>Additionally, if displayed inline and automatically expanded, participants\' view actions will not be logged (unless the list is collapsed and re-expanded). As a result, this particular display mode is not recommended to be used in conjunction with automatic activity completion.';
$string['displayinlinecollapsed'] = 'Inline on the course page (initially collapsed)';
$string['displayinlineexpanded'] = 'Inline on the course page (automatically expanded)';
$string['displaypage'] = 'On a separate page';
$string['displaypublicnotes'] = 'Display public notes';
$string['displaypublicnotes_help'] = 'Display any public notes associated with your selected citations.';
$string['errorcodecolumn'] = 'You must specify the code column if you want to use a custom database table as your Alma course code source.';
$string['errorcodesource'] = 'You must provide all the table and column details below if you want to use a custom database table as your Alma course code source.';
$string['errorcodetable'] = 'You must specify the table name if you want to use a custom database table as your Alma course code source.';
$string['errorcourseattribute'] = 'You must specify a course attribute if you want to use a custom database table as your Alma course code source.';
$string['errorcoursecolumn'] = 'You must specify the course column if you want to use a custom database table as your Alma course code source.';
$string['generalsettings'] = 'General settings';
$string['includechildcodes'] = 'Include meta child codes';
$string['includechildcodes_desc'] = 'Check for course meta links and include the Alma course codes associated with any child courses found.';
$string['insufficientapidata'] = 'Insufficient data to call API method "{$a->method}". Missing params: {$a->params}.';
$string['invalidapimethod'] = 'Invalid API method "{$a}".';
$string['leganto'] = 'Reading list: {$a}';
$string['leganto:addinstance'] = 'Add a new reading list';
$string['leganto:view'] = 'View reading list content';
$string['listname'] = 'Reading list name';
$string['modulename'] = 'Leganto reading list';
$string['modulename_help'] = '<p>The Leganto reading list module enables a teacher to include a selection of citations from associated Leganto reading lists directly within the content of their course.</p><p>The reading list can be displayed either in a separate, linked page, or embedded in the course page itself (hidden initially, with a link to toggle visibility).</p>';
$string['modulename_link'] = 'mod/leganto/view';
$string['modulenameplural'] = 'Leganto reading lists';
$string['nolists'] = 'Sorry, there are no reading lists associated with this {$a}.';
$string['page-mod-leganto-view'] = 'Reading list module main page';
$string['page-mod-leganto-x'] = 'Any reading list module page';
$string['pluginadministration'] = 'Leganto reading list administration';
$string['pluginname'] = 'Leganto reading list';
$string['privacy:metadata'] = 'The Leganto reading list module does not store any personal data';
$string['requiremodintro'] = 'Require reading list description';
$string['requiremodintro_desc'] = 'Enable this option if you want to force users to enter a description for each reading list.';
$string['sectionheading'] = '{$a->name} {$a->count}';
$string['selectcitations'] = 'Select citations from "{$a}"';
$string['settingnotconfigured'] = 'Error: Leganto module admin setting "{$a}" empty or misconfigured.';
$string['showhide'] = 'Show/hide reading list';
$string['viewcitation'] = 'View citation record in Leganto';
$string['viewonline'] = 'View online';
$string['yearregex'] = 'Year code regex';
$string['yearregex_desc'] = 'Optional. This is a regular expression (including delimiters) matching the year code part of your course ID numbers or short names (both will be checked), and can be used irrespective of the source of the Alma course codes. If no regex is provided here it will be assumed that there is no year code, and the latest version of each list will be used.';
