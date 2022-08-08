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
 * Strings for component 'cleaner_replace_urls', language 'en', version '4.0'.
 *
 * @package     cleaner_replace_urls
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cleanconfig'] = 'Replace in config tables';
$string['cleanconfigdesc'] = 'This will enable replacing URLs in the config and config_plugins tables.';
$string['cleantext'] = 'Relace in database fields text / varchar';
$string['cleantextdesc'] = 'This will enable replacing URLs in all database columns of type text and varchar.';
$string['cleanwysiwyg'] = 'Replace in wysiwyg elements';
$string['cleanwysiwygdesc'] = 'This will enable replacing URLs in all rich text editor fields.';
$string['newsiteurl'] = 'New site URL';
$string['newsiteurldesc'] = 'The URL of the datacleansed site.';
$string['origsiteurl'] = 'Original site URL';
$string['origsiteurldesc'] = 'The URL of the production site.';
$string['pluginname'] = 'Replace URLs';
$string['privacy:metadata'] = 'The cleaner replace urls plugin does not store any personal data.';
$string['skiptables'] = 'Tables to skip';
$string['skiptablesdesc'] = 'Names of tables to skip, separated by a comma. E.g. user, log, config.';
