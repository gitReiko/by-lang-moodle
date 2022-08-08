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
 * Strings for component 'tool_asynccourseimport', language 'en', version '4.0'.
 *
 * @package     tool_asynccourseimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event_importcourse_error'] = 'A course could not be imported during the Async course import process.';
$string['import_footer_count'] = '{$a} course(s) is/are scheduled to be imported';
$string['import_footer_message'] = 'Your courses have been scheduled to be imported. You need to wait as the task is processed by a cron.';
$string['pluginname'] = 'Asynchronous course import';
$string['report_errors_header'] = '<p>The following courses could not be imported:</p>';
$string['report_header'] = 'A course import task you scheduled has finished.\\n';
$string['task_complete'] = 'The asynchronous courses import finished.';
$string['task_incomplete'] = 'Unable to complete the course import (Task id: {$a}).';
