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
 * Strings for component 'block_html_placeholders', language 'en', version '4.0'.
 *
 * @package     block_html_placeholders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowadditionalcssclasses'] = 'Allow additional CSS classes';
$string['configallowadditionalcssclasses'] = 'Adds a configuration option to HTML block instances allowing additional CSS classes to be set.';
$string['configclasses'] = 'Additional CSS classes';
$string['configclasses_help'] = 'The purpose of this configuration is to aid with theming by helping distinguish HTML blocks from each other. Any CSS classes entered here (space delimited) will be appended to the block\'s default classes.';
$string['configcontent'] = 'Content';
$string['configtitle'] = 'HTML with placeholders block title';
$string['html_placeholders:addinstance'] = 'Add a new HTML with placeholders block';
$string['html_placeholders:myaddinstance'] = 'Add a new HTML with placeholders block to Dashboard';
$string['newhtml_placeholdersblock'] = '(new HTML with placeholders block)';
$string['placeholders'] = 'Placeholders';
$string['placeholders_desc'] = 'A list of supported placeholders. The placeholder name followed by a pipe (|) and the default value of that placeholder. Only one placehoder per line, separated by a line break in between each placeholder.
For example:
<pre>
profession | Doctor
type | On-line
</pre>';
$string['pluginname'] = 'HTML with placeholders';
$string['privacy:metadata:block'] = 'The HTML with placeholders block stores all of its data within the block subsystem.';
$string['search:content'] = 'HTML with placeholders block content';
$string['shortcodes'] = 'Displays the placeholder.';
$string['shortcodes_help'] = 'Wrap your placeholder into [htmlplaceholder] tag.

Example:
    [htmlplaceholder]{{profession}}[/htmlplaceholder]';
