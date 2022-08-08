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
 * Strings for component 'auth_pwdexp', language 'en', version '4.0'.
 *
 * @package     auth_pwdexp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_expirationdays'] = 'Number of days after which the password needs to expire.';
$string['auth_expirationdays_key'] = 'Days until expiry';
$string['auth_pwdexpdescription'] = 'This authenticator checks if the user\'s password needs to expire.<br/>If so, it will set the flag to force the account to change its password and redirect to the given URL.<br/><br/>Be sure to save these settings at least once and after each change.';
$string['auth_pwdexptitle'] = 'Password Expiration Check';
$string['auth_redirecturl'] = 'URL to redirect to when password has expired.';
$string['auth_redirecturl_key'] = 'Redirect URL';
$string['auth_server_settings'] = 'Password expiration check settings';
$string['pluginname'] = 'Password Expiration Check';
