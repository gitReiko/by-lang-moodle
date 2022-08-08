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
 * Strings for component 'search_azure', language 'en', version '4.0'.
 *
 * @package     search_azure
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfail'] = 'Failed to add document to index';
$string['adminsettings'] = 'Plugin settings';
$string['apikey'] = 'API key';
$string['apikey_help'] = 'An Azure Search Admin API related to the service you want to use.';
$string['apiversion'] = 'API version';
$string['apiversion_help'] = 'The Azure Search Admin API version to use, (normally the this should alwasy be the default).';
$string['azuresettings'] = 'Azure Search settings';
$string['deletefail'] = 'Failed to delete document from index';
$string['enrichsettings'] = 'Data enrichment settings';
$string['fileindexing'] = 'Enable file indexing';
$string['fileindexing_help'] = 'Enables file indexing for this plugin. With this option checked you will need to enter details of the Tika service in the "File indexing settings" below.<br/>
You will need to reindex all site contents after enabling this option for all files to be added.';
$string['fileindexsettings'] = 'File indexing settings';
$string['fileindexsettings_help'] = 'Enter the details for the Tika service. These are required if file indexing is enabled above.';
$string['index'] = 'Index';
$string['index_help'] = 'Namespace index to store search data in backend';
$string['noconfig'] = 'Azure Search configuration missing';
$string['noserver'] = 'Azure Search endpoint unreachable';
$string['pluginname'] = 'Azure Search';
$string['pluginname_help'] = 'Search backend for the Azure Search search engine';
$string['pluginsettings'] = 'Plugin settings';
$string['searchinfo'] = 'Search queries';
$string['searchinfo_help'] = 'The field to be searched may be specified by prefixing the search query with \'title:\', \'content:\', \'name:\', or \'intro:\'. For example, searching for \'title:news\' would return results with the word \'news\' in the title.

Boolean operators (\'AND\', \'OR\') may be used to combine or exclude keywords.';
$string['searchurl'] = 'URL';
$string['searchurl_help'] = 'The FQDN of the Azure Search engine endpoint';
$string['tikahostname'] = 'Tika hostname';
$string['tikahostname_help'] = 'The FQDN of the Apache Tika endpoint';
$string['tikaport'] = 'Tika port';
$string['tikaport_help'] = 'The port of the Apache Tika endpoint';
$string['tikasendsize'] = 'Maximum file size';
$string['tikasendsize_help'] = 'Sending large files to Tika can cause out of memory issues. Therefore we limit it to a size in bytes.';
