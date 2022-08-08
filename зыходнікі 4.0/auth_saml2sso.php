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
 * Strings for component 'auth_saml2sso', language 'en', version '4.0'.
 *
 * @package     auth_saml2sso
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml2ssodescription'] = 'Users can login using SAML2 Identity Provider';
$string['error_create_user'] = 'A error occured when create a user account. Please, contact the administrator.';
$string['error_entityid'] = 'A SP source name must be given';
$string['error_field_idp_firstname'] = 'The Firstname field from IdP is mandatory';
$string['error_field_idp_lastname'] = 'The lastname field from IdP is mandatory';
$string['error_idpattr'] = 'A Username mapping attribute must be given';
$string['error_lockconfig_field_map_email'] = 'The Email address in Data mapping fields is mandatory';
$string['error_lockconfig_field_map_firstname'] = 'The First name in Data mapping fields is mandatory';
$string['error_lockconfig_field_map_lastname'] = 'The Surname in Data mapping fields is mandatory';
$string['error_sp_path'] = 'A SAML2 Service Provider (SP) path must be given in config';
$string['help_autocreate'] = 'Allow create new users?';
$string['help_dual_login'] = 'Define if users can log-in directly to Moodle. To bypass IdP you should add saml=off parameter. Ex.: /login/index.php?saml=off';
$string['help_edit_profile'] = 'If users cannot edit profile, they won\'t see the link to profile';
$string['help_entityid'] = 'SP source name available in /config/authsources.php';
$string['help_field_idp_firstname'] = 'Field from IdP containing the user first name';
$string['help_field_idp_fullname'] = 'The username from IdP is a single field? If yes, fill with the same value in the fields firstname and lastname below';
$string['help_field_idp_lastname'] = 'Field from IdP containing the user last name';
$string['help_idpattr'] = 'Which attribute from IdP should be used for username?';
$string['help_logout_url_redir'] = 'URL to redirect users on logout. If the URL is invalid or empty, it will redirect to Moodle main page. (ex.: https://go.to/another/url)';
$string['help_moodle_mapping'] = 'Where to check if the username exists? If using idnumber, remember to mapping in Data mapping below';
$string['help_single_signoff'] = 'Single Sign Off users from Moodle and IdP?';
$string['help_sp_path'] = 'Absolute path to SP installation. Ex.: /var/www/simplesamlphp/';
$string['help_username_mapping'] = 'Which attribute from IdP should be used for username?';
$string['label_autocreate'] = 'Auto create users';
$string['label_dual_login'] = 'Dual login';
$string['label_edit_profile'] = 'Can user edit profile?';
$string['label_entityid'] = 'SP source name';
$string['label_field_idp_firstname'] = 'Firstname field from IdP';
$string['label_field_idp_fullname'] = 'Full name from IdP';
$string['label_field_idp_lastname'] = 'Lastname field from IdP';
$string['label_idpattr'] = 'Username mapping';
$string['label_instructions_p1'] = '<p>You must fill the following Data mapping fields as:</p><ul><li>Firstname => givenName</li><li>Surname => surname</li><li>Email address: => email</li></ul><p>You can change this in <code>$stringMapping</code> array in <code>auth.php</code></p>';
$string['label_instructions_title'] = 'Instructions';
$string['label_logout'] = 'Click here to logout';
$string['label_logout_url_redir'] = 'Logout URL';
$string['label_moodle_mapping'] = 'Username checking';
$string['label_single_signoff'] = 'Single Sign Off';
$string['label_sp_path'] = 'SAML2 Service Provider (SP)';
$string['label_username_mapping'] = 'Username mapping';
$string['nouser'] = 'There\'s no user with the provided Id and auto signup is not allowed. The provided Id is:';
$string['pluginname'] = 'SAML2 SSO Auth';
$string['settings_saml2sso'] = '';
$string['success_config'] = 'All the config fields were saved successfully';
