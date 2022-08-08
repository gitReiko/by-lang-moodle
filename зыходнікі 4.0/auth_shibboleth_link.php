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
 * Strings for component 'auth_shibboleth_link', language 'en', version '4.0'.
 *
 * @package     auth_shibboleth_link
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth:createaccount'] = 'Create account';
$string['auth:createaccount:description'] = 'Create a new account for your shibboleth login.';
$string['auth:createaccount:error'] = 'Could not create account.';
$string['auth:createaccount:success'] = 'Account created.';
$string['auth:createaccount:userexists'] = 'Sorry, a user with your username already exists. If that is you, please choose the option "Link another account" and log in as this user.';
$string['auth:linkaccount'] = 'Link current account';
$string['auth:linkaccount:description'] = 'Link the shibboleth login with the account you are currently using.';
$string['auth:linkotheraccount'] = 'Link another, existing account';
$string['auth:linkotheraccount:description'] = 'Link the shibboleth login with another account.';
$string['auth:replacelink'] = 'Check this to replace an existing link between your remote and local accounts.';
$string['auth:shibboleth:welcome'] = 'Welcome';
$string['auth:shibboleth:welcome:question'] = 'How would you like to use this login on our site?';
$string['auth:warning:usergone'] = 'Your shibboleth account has been linked to a user account that does not exist anymore. Therefore it has been unlinked.';
$string['auth:warning:userreplaced'] = 'As requested your shibboleth login has been unlinked from your moodle account.';
$string['auth:warning:userreplacenotallowed'] = 'Access to this account is only possible with Shibboleth. Consequently the link can not be removed!';
$string['cachedef_userinfo'] = 'Holds the userinfo after shibboleth';
$string['pluginname'] = 'Shibboleth Link';
$string['privacy:metadata:db'] = 'Stores the username from the Identity Provider.';
$string['privacy:metadata:db:idp'] = 'The Identity Provider';
$string['privacy:metadata:db:idpusername'] = 'The username from the Identity Provider';
$string['privacy:metadata:db:userid'] = 'Your userid within this Moodle-instance.';
$string['settings:hooks'] = 'Hooks';
$string['settings:hooks:description'] = 'If you have other plugins that rely on certain profile data granted by Shibboleth, you can list php-files here as a relative path to the dirroot. Delimit your list with ";".';
$string['settings:loginpath'] = 'Login Path';
$string['settings:loginpath:description'] = 'Login Path that Shibboleth uses to launch the authentication';
$string['settings:update_profile_always'] = 'Update always';
$string['settings:update_profile_always:description'] = 'List profile fields that should always be updated from shibboleth. Delimit by comma.';
$string['settings:update_profile_shibbonly'] = 'Update Shibb Only';
$string['settings:update_profile_shibbonly:description'] = 'List profile fields that should only be updated for shibboleth accounts. Delimit by comma.';
