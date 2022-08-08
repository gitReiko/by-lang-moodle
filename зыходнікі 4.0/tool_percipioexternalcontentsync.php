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
 * Strings for component 'tool_percipioexternalcontentsync', language 'en', version '4.0'.
 *
 * @package     tool_percipioexternalcontentsync
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['baseurl'] = 'Percipio Base URL';
$string['baseurldesc'] = 'The base url of the Percipio site we are connecting to for syncing.';
$string['bearer'] = 'Percipio Bearer';
$string['bearerdesc'] = 'The bearer token for teh service account of the Percipio site we are connecting to for syncing.';
$string['cachedef_helper'] = 'Upload page helper caching';
$string['coursecategory'] = 'Parent Category';
$string['coursecategorydesc'] = 'This setting determines the parent category under which any new categories are created.';
$string['coursethumbnail'] = 'Course thumbnail';
$string['coursethumbnaildesc'] = 'Download the thumbnail image for the course?';
$string['errorapicall'] = 'Catalog API Call failed:"{$a}"';
$string['errorjsonparse'] = 'Could not parse response: JSON parsing error: "{$a}"';
$string['errornobaseurl'] = 'No Base URL has been set, please configure plugin';
$string['errornobearer'] = 'No Bearer has been set, please configure plugin';
$string['errornocategory'] = 'No Category has been set, please configure plugin';
$string['errornoorgid'] = 'No OrgId has been set, please configure plugin';
$string['errorservererror'] = 'Catalog API Call failed.  Server sent : "{$a}"';
$string['errorwebservice'] = 'API Client Exception:"{$a}"';
$string['invalidimportrecord'] = 'Invalid Import Record.';
$string['invalidparentcategoryid'] = 'Parent category is invalid.';
$string['max'] = 'Max assets per request';
$string['maxdesc'] = 'Maximum number of assets to retrieve per request.';
$string['orgid'] = 'Percipio OrgId';
$string['orgiddesc'] = 'The orgid of the Percipio site we are connecting to for syncing.';
$string['pluginname'] = 'Percipio External Content Sync';
$string['settingstitle'] = 'Percipio External Content Sync Settings';
$string['statuscoursecreated'] = 'Created. Visible: {$a}.';
$string['statuscoursenotupdated'] = 'Not Updated.';
$string['statuscourseupdated'] = 'Updated. Visible: {$a}.';
$string['statusextcreated'] = 'Created.';
$string['statusextnotupdated'] = 'Not Updated.';
$string['statusextupdated'] = 'Updated.';
$string['taskname'] = 'Percipio External Content Sync';
$string['thumbnailcreated'] = 'Created.';
$string['thumbnaildownloaded'] = 'Created.';
$string['thumbnaildownloaderror'] = 'Error. {$a}.';
$string['thumbnailinvalidext'] = 'Invalid type. {$a}.';
$string['thumbnailinvalidtype'] = 'Invalid type.';
$string['thumbnailnotupdated'] = 'Not updated.';
$string['thumbnailsamesource'] = 'Not updated.';
$string['thumbnailskipped'] = 'Skipped.';
$string['thumbnailupdated'] = 'Updated.';
$string['updatedsince'] = 'Return assets updated since';
$string['updatedsincedesc'] = 'The ISO8601 formatted date used to filter the assets returned. Leave empty to retrieve all assets. This will be automatically set by the task on last successful run. You can set this to any date manually.';
