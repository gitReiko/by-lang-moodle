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
 * Strings for component 'profilefield_dynamicmultiselect', language 'en', version '4.0'.
 *
 * @package     profilefield_dynamicmultiselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dynamicmultiselect:caneditsql'] = 'Can edit sql query for dynamic multiselect user custom field';
$string['numbersqlvalues'] = 'Number of possible values';
$string['numbersqlvalueshelp'] = 'Note';
$string['numbersqlvalueshelp_help'] = 'Max 20 in this sample set, no limit on real usage';
$string['param1sqlhelp'] = 'Sql query';
$string['param1sqlhelp_help'] = 'The query should return two column: data and id. Furthermore, it should return at least one value. Example: "select 1 id, \'hallo\' data"';
$string['pluginname'] = 'Dynamic Multi Select';
$string['queryerrordatamissing'] = 'data column is missing in query return values';
$string['queryerrordefaultmissing'] = 'Default value does not exists among the list of allowed values';
$string['queryerrorempty'] = 'No results found executing the query: cannnot validate';
$string['queryerrorfalse'] = 'Error executing the query: return value is false';
$string['queryerroridmissing'] = 'id column is missing in query return values';
$string['samplesqlvalues'] = 'Sample of possible values';
$string['sqlerror'] = 'Error executing the query';
$string['sqlquery'] = 'Sql query';
