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
 * Strings for component 'datalynxfield_datalynxview', language 'en', version '4.0'.
 *
 * @package     datalynxfield_datalynxview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['css'] = 'Custom css';
$string['css_help'] = 'Custom css';
$string['customsearch'] = 'Custom search';
$string['customsearch_help'] = 'You can add custom search criteria that would be applied to the displayed view. Each criterion is a comma separated AND/OR,remote field pattern,0/1,operator,local field pattern/value. One criterion per line. The pattern must be included in the selected view template. For example, assuming the patterns ##author:firstname## is included in the selected view template, by the following criteria the view will display only entries by the author first name:
AND,##author:firstname##,0,=,##author:firstname##';
$string['customsort'] = 'Custom sort';
$string['customsort_help'] = 'You can add custom sort criteria that would be applied to the displayed view. Each criterion is a comma separated [[field name]],ASC/DESC pair. One criterion per line. The pattern must be included in the selected view template. For example, assuming the patterns ##author:firstname## and [[Count]] are included in the selected view template, by the following criteria the view will display the entries sorted by the author first name in ascending order and counts in descending order:
<br />##author:firstname##,ASC
<br />[[Count]],DESC';
$string['datalynx'] = 'Datalynx';
$string['datalynx_help'] = 'Choose the Datalynx whose view you want to display. You can select any Datalynx in this site for which you have \'managetemplates\' capability.';
$string['entryauthor'] = 'Entry author';
$string['entrygroup'] = 'Entry group';
$string['filter'] = 'Filter';
$string['filter_help'] = 'Choose a filter of the selected Datalynx. This filter will be applied to the selected view before displaying the view.';
$string['filterby'] = 'Filter by';
$string['filterby_help'] = 'Select Entry author to include in the displayed view only entries by the author of the hosting entry.
<br />Select Entry group to include in the displayed view only entries by members of the hosting entry author\'s group.';
$string['missingview'] = 'Please select a view';
$string['nodatalynxs'] = 'No datalynxs are found in this course';
$string['noviews'] = 'No views are found for the selected datalynx';
$string['pluginname'] = 'Datalynx view';
$string['privacy:metadata'] = 'Datalynx Views do not store personal data.';
$string['textfield'] = 'Textfield';
$string['textfield_help'] = 'Choose a textfield of the selected Datalynx instance to be able to fetch the value of this textfield in every entry with specific criteria.';
$string['view'] = 'View';
$string['view_help'] = 'Choose the view you want to display from the selectd Datalynx.';
$string['viewbutton'] = 'View';
