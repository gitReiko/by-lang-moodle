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
 * Strings for component 'local_wsmanagesections', language 'en', version '4.0'.
 *
 * @package     local_wsmanagesections
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['courseformatwithoutsections'] = 'Course format {$a} does not use sections';
$string['invalidcourseid'] = 'You are trying to use an invalid course ID ({$a})';
$string['invalidsectionnumber'] = 'A section with sectionnumber {$a->sectionnumber} does not exist. The highest sectionnumber is {$a->lastsectionnumber}.';
$string['movesectionerror'] = 'Moving the section raised an unknwon error';
$string['pluginname'] = 'Webservice manage sections';
$string['privacy:metadata'] = 'The local_wsmanagesections plugin does not store any personal data.';
$string['sectionnotfound'] = 'A section with the desired number/id ($a) not found.';
$string['toomanysections'] = 'You are trying to create too many sections. Allowed: {$a->max}, desired: {$a->desired}';
