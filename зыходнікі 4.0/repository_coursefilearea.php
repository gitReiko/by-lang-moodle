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
 * Strings for component 'repository_coursefilearea', language 'en', version '4.0'.
 *
 * @package     repository_coursefilearea
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowinternaldesc'] = 'This option allows the course file area to act as an internal repository type.';
$string['allowinternaltitle'] = 'Allow Internal use';
$string['configplugin'] = 'Configuration for course file area repository';
$string['coursefilearea:view'] = 'Access Files';
$string['emptyfilelist'] = 'There are no files to show';
$string['notitle'] = 'notitle';
$string['pluginname'] = 'Course file area';
$string['pluginname_help'] = 'Course file area';
$string['redirectpatchdetected'] = 'Warning: The file store redirection patch has been detected on the system, this will cause files to be read directly from the course files area, instead of being copied into the Moodle file store. This patch should only be used for development/testing systems, it has not yet been properly tested, may cause backups to fail and will cause broken files if it is subsequently removed from the system.';
$string['redirectpatchnotdetected'] = 'The original file in the course file area will be copied into the regular file store when it is selected, so changes to the file within the course files area will not be reflected in the resource which uses the file, unless it is re-added to the relevant resource.';
$string['remember'] = 'Remember me';
