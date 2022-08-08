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
 * Strings for component 'tool_componentlibrary', language 'en', version '4.0'.
 *
 * @package     tool_componentlibrary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['copied'] = 'Copied!';
$string['copy'] = 'Copy';
$string['copytoclipboard'] = 'Copy to clipboard';
$string['installer'] = '<h3>Component library setup</h3>
    <p>Before you can see the content of the component library you will need to have shell access to your Moodle installation and be able to write to folder /admin/tool/componentlibrary and have npm installed on your Moodle server.</p>
    <p>If you meet these requirements you can navigate to your Moodle root folder and run:</p>
    <pre>$ npm install</pre>
    <pre>$ npm install grunt</pre>
    <p>This will fetch all the required packages for building the component library docs.</p>
    <p>Once they are installed you can run:</p>
    <pre>$ grunt componentlibrary</pre>
    <p>For more info see the README.md file in this plugin.</p>';
$string['pluginname'] = 'UI Component library';
$string['privacy:metadata'] = 'The Component library plugin does not store any personal data.';
$string['runjsdoc'] = 'JavaScript documentation is generated separately to the component library. To generate it please run `grunt jsdoc`';
$string['showboth'] = 'Show with both';
$string['showdefault'] = 'Show default';
$string['showhelp'] = 'Show with help';
$string['showmixed'] = 'Show mixed';
$string['showrequired'] = 'Show with required';
$string['toggleviewinfo'] = 'Toggle the view of this form instance';
