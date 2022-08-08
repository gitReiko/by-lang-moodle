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
 * Strings for component 'local_lessonexportepub', language 'en', version '4.0'.
 *
 * @package     local_lessonexportepub
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['covercolour'] = 'Front cover banner colour';
$string['covercolour_desc'] = 'The colour of the banner on the front cover that contains the lesson title.';
$string['created'] = 'Created on {$a}';
$string['customstyle'] = 'Custom EPUB style rules';
$string['customstyle_desc'] = 'Custom CSS to apply only to the exported EPUB';
$string['exportepub'] = 'Export as epub';
$string['exportstrict'] = 'Strict exporting';
$string['exportstrict_desc'] = 'Whether documents should throw exceptions or suppress them when erroring.';
$string['failedinsertimage'] = 'Failed to insert image: {$a}';
$string['filename'] = 'Export {$a->lessonname} {$a->timestamp}';
$string['lessonexportepub:export'] = 'Export lesson as epub';
$string['lessonexportfailed'] = 'Export of lesson \'{$a}\' failed';
$string['lessonexportfailed_body'] = 'The lesson \'{$a->name}\' has been updated, but the attempt to export and email it has failed, after {$a->exportattempts} attempts. If the lesson is updated again, then further attempts will be made to export it. The Lesson can be found at: {$a->url}.';
$string['lessonupdated'] = 'Lesson \'{$a}\' updated';
$string['lessonupdated_body'] = 'Updated export attached';
$string['modified'] = 'Last modified by {$a->modifiedby} on {$a->timemodified}';
$string['plugingroup'] = 'Lesson Export';
$string['pluginname'] = 'Lesson Export EPUB';
$string['printed'] = 'This document was downloaded on {$a}';
$string['publishername'] = 'Unknown';
