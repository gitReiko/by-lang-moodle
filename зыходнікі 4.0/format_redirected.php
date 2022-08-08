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
 * Strings for component 'format_redirected', language 'en', version '4.0'.
 *
 * @package     format_redirected
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['format_redirected_defaultnoticeforstudents'] = 'The teacher has merged several Moodle courses into other shared courses. Below are the courses where the actual teaching takes place.';
$string['format_redirected_defaultnoticeforteachers'] = 'If you change the course format your students will be able to enter this course and also your merged course. Both spaces are different and separate. It may lead to confusion.';
$string['format_redirected_noticeforstudents'] = 'Message for general public';
$string['format_redirected_noticeforstudents_desc'] = 'Text to be shown to all the users in the redirection page. It is designed to tell the reason of the redirection';
$string['format_redirected_noticeforteachers'] = 'Message for teachers';
$string['format_redirected_noticeforteachers_desc'] = 'Text to be shown to teachers in the redirection page';
$string['metalinked'] = 'This course is metalinked by the following courses:';
$string['metalinktext'] = '<div>Merged at {$a->creationtime}</div>';
$string['notredirected_error'] = 'This course is incorrectly configured as "Redirected" but no redirection is possible. Need teacher or admin intervention.';
$string['pluginname'] = 'Redirected format';
$string['privacy:metadata'] = 'The Redirected to METAs format plugin does not store any personal data.';
$string['redirectedcourse'] = 'This course is configured as "Redirected".';
$string['redirectedhelp'] = 'This course format redirects students to one or more courses. If there is only one target course the redirection is done silently. Else, a list of links to the target courses is shown.';
$string['sectionname'] = '';
