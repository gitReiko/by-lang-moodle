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
 * Strings for component 'auth_uniquelogin', language 'en', version '4.0'.
 *
 * @package     auth_uniquelogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aplly_to_admin'] = 'Apply to Administrators';
$string['aplly_to_teacher'] = 'Apply to Teachers';
$string['auth_uniquelogerror'] = 'There is already an active session so it is not possible to login.';
$string['auth_uniquelogindescription'] = 'This plugin ensures thar each user only has one active session.<br /><br />Every time a user makes a successful login, all other sessions belonging to that user will be terminated.<br><br /><div style="font-weight: bold;">Note 1: For this plugin to work, the user sessions must be stored on the database. This configuration is set in <a href="settings.php?section=sessionhandling">Sessions.</a></div><br />';
$string['auth_uniquelogintitle'] = 'Unique login';
$string['configaplly_to_admin'] = 'Apply the unique login restriction to users with Administrator role in the system context.';
$string['configaplly_to_teacher'] = 'Apply the unique login restriction to users with Teacher role in any Moodle course.';
$string['pluginname'] = 'Unique Login';
