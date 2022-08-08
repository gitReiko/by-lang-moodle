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
 * Strings for component 'auth_azureb2c', language 'en', version '4.0'.
 *
 * @package     auth_azureb2c
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_azureb2cdescription'] = 'The Azure AD B2C Connect plugin provides single-sign-on functionality using Azure Active Directory (Azure AD) B2C identity providers.';
$string['azureb2c:manageconnection'] = 'Allow Azure AD B2C Connection and Disconnection';
$string['azureb2c:manageconnectionconnect'] = 'Allow Azure AD B2C Connection';
$string['azureb2c:manageconnectiondisconnect'] = 'Allow OpenID Disconnection';
$string['cfg_authendpoint_desc'] = 'The URI of the Authorization endpoint from your identity provider to use.';
$string['cfg_authendpoint_key'] = 'Authorization Endpoint';
$string['cfg_autoappend_desc'] = 'Automatically append this string when logging in users using the "Resource Owner Password Credentials" authentication method. This is useful when your identity provider requires a common domain, but don\'t want to require users to type it in when logging in. For example, if the full Azure AD B2C Connect user is "james@example.com" and you enter "@example.com" here, the user will only have to enter "james" as their username. <br /><b>Note:</b> In the case where conflicting usernames exist - i.e. a Moodle user exists wth the same name, the priority of the authentication plugin is used to determine which user wins out.';
$string['cfg_autoappend_key'] = 'Auto-Append';
$string['cfg_azureb2cresource_desc'] = 'The Azure AD B2C Connect resource for which to send the request.';
$string['cfg_azureb2cresource_key'] = 'Resource';
$string['cfg_clientid_desc'] = 'Your registered Client ID on the identity provider';
$string['cfg_clientid_key'] = 'Client ID';
$string['cfg_clientsecret_desc'] = 'Your registered Client Secret on the identity provider. On some providers, it is also referred to as a key.';
$string['cfg_clientsecret_key'] = 'Client Secret';
$string['cfg_customicon_desc'] = 'If you\'d like to use your own icon, upload it here. This overrides any icon chosen above. <br /><br /><b>Notes on using custom icons:</b><ul><li>This image will <b>not</b> be resized on the login page, so we recommend uploading an image no bigger than 35x35 pixels.</li><li>If you have uploaded a custom icon and want to go back to one of the stock icons, click the custom icon in the box above, then click "Delete", then click "OK", then click "Save Changes" at the bottom of this form. The selected stock icon will now appear on the Moodle login page.</li></ul>';
$string['cfg_customicon_key'] = 'Custom Icon';
$string['cfg_debugmode_desc'] = 'If enabled, information will be logged to the Moodle log that can help in identifying problems.';
$string['cfg_debugmode_key'] = 'Record debug messages';
$string['cfg_domainhint_desc'] = 'When using the "Authorization Code" authentication method, pass this value as the "domain_hint" parameter. "domain_hint" is used by some Azure AD B2C Connect providers to make the login process easier for users. Check with your provider to see whether they support this parameter.';
$string['cfg_domainhint_key'] = 'Domain Hint';
$string['cfg_editprofileendpoint_desc'] = 'The URI of the edit profile endpoint from Azure AD B2C, used to edit the profile field.';
$string['cfg_editprofileendpoint_key'] = 'Edit profile endpoint';
$string['cfg_err_invalidauthendpoint'] = 'Invalid Authorization Endpoint';
$string['cfg_err_invalidclientid'] = 'Invalid client ID';
$string['cfg_err_invalidclientsecret'] = 'Invalid client secret';
$string['cfg_err_invalidtokenendpoint'] = 'Invalid Token Endpoint';
$string['cfg_icon_desc'] = 'An icon to display next to the provider name on the login page.';
$string['cfg_icon_key'] = 'Icon';
$string['cfg_iconalt_check'] = 'Checkmark icon';
$string['cfg_iconalt_go'] = 'Green circle';
$string['cfg_iconalt_group'] = 'Group icon';
$string['cfg_iconalt_group2'] = 'Group icon alternate';
$string['cfg_iconalt_key'] = 'Key icon';
$string['cfg_iconalt_lock'] = 'Lock icon';
$string['cfg_iconalt_locked'] = 'Locked icon';
$string['cfg_iconalt_mnet'] = 'MNET icon';
$string['cfg_iconalt_o365'] = 'Azure AD B2C icon';
$string['cfg_iconalt_plus'] = 'Plus icon';
$string['cfg_iconalt_rightarrow'] = 'Right-facing arrow icon';
$string['cfg_iconalt_stop'] = 'Red circle';
$string['cfg_iconalt_user'] = 'User icon';
$string['cfg_iconalt_user2'] = 'User icon alternate';
$string['cfg_iconalt_userlock'] = 'User with lock icon';
$string['cfg_loginflow_authcode'] = 'Authorization Code Flow (recommended)';
$string['cfg_loginflow_authcode_desc'] = 'Using this flow, the user clicks the name of the identity provider (See "Provider Name" above) on the Moodle login page and is redirected to the provider to log in. Once successfully logged in, the user is redirected back to Moodle where the Moodle login takes place transparently. This is the most standardized, secure way for the user log in.';
$string['cfg_loginflow_key'] = 'Authentication Method';
$string['cfg_loginflow_rocreds'] = 'Resource Owner Password Credentials Grant';
$string['cfg_loginflow_rocreds_desc'] = 'Using this flow, the user enters their username and password into the Moodle login form like they would with a manual login. This will authorize the user with the identity provider, but will not create a session on the identity provider\'s site. For example, if using Azure AD B2C with Azure AD B2C Connect, the user will be logged in to Moodle but not the Azure AD B2C web applications. Using the authorization request is recommended if you want users to be logged in to both Moodle and the identity provider.  Note that not all identity providers support this flow. This option should only be used when other authorization grant types are not available.';
$string['cfg_opname_desc'] = 'This is an end-user-facing label that identifies the type of credentials the user must use to login. This label is used throughout the user-facing portions of this plugin to identify your provider.';
$string['cfg_opname_key'] = 'Provider Name';
$string['cfg_redirecturi_desc'] = 'This is the URI to register as the "Redirect URI". Your Azure AD B2C Connect identity provider should ask for this when registering Moodle as a client. <br /><b>NOTE:</b> You must enter this in your Azure AD B2C Connect provider *exactly* as it appears here. Any difference will prevent logins using Azure AD B2C Connect.';
$string['cfg_redirecturi_key'] = 'Redirect URI';
$string['cfg_resetpassendpoint_desc'] = 'The URI of the Forgot Password endpoint from Azure AD B2C, used to reset the password';
$string['cfg_resetpassendpoint_key'] = 'Forgot Password Endpoint';
$string['cfg_scope_desc'] = 'Enter the Scope value for Azure Active Directory (Azure AD) B2C, which will be used to authenticate users.';
$string['cfg_scope_key'] = 'Azure B2C Scope';
$string['cfg_tokenendpoint_desc'] = 'The URI of the token endpoint from your identity provider to use.';
$string['cfg_tokenendpoint_key'] = 'Token Endpoint';
$string['cfg_userrestrictions_desc'] = 'Only allow users to log in that meet certain restrictions. <br /><b>How to use user restrictions: </b> <ul><li>Enter a <a href="https://en.wikipedia.org/wiki/Regular_expression">regular expression</a> pattern that matches the usernames of users you want to allow.</li><li>Enter one pattern per line</li><li>If you enter multiple patterns a user will be allowed if they match ANY of the patterns.</li><li>The character "/" should be escaped with "\\".</li><li>If you don\'t enter any restrictions above, all users that can log in to the Azure AD B2C Connect provider will be accepted by Moodle.</li><li>Any user that does not match any entered pattern(s) will be prevented from logging in using Azure AD B2C Connect.</li></ul>';
$string['cfg_userrestrictions_key'] = 'User Restrictions';
$string['errorauthdisconnectemptypassword'] = 'Password cannot be empty';
$string['errorauthdisconnectemptyusername'] = 'Username cannot be empty';
$string['errorauthdisconnectifmanual'] = 'If using the manual login method, enter credentials below.';
$string['errorauthdisconnectinvalidmethod'] = 'Invalid login method received.';
$string['errorauthdisconnectnewmethod'] = 'Use Login Method';
$string['errorauthdisconnectusernameexists'] = 'That username is already taken. Please choose a different one.';
$string['errorauthgeneral'] = 'There was a problem logging you in. Please contact your administrator for assistance.';
$string['errorauthinvalididtoken'] = 'Invalid id_token received.';
$string['errorauthloginfailednouser'] = 'Invalid login: User not found in Moodle. If this site has the "authpreventaccountcreation" setting enabled, this may mean you need an administrator to create an account for you first.';
$string['errorauthnoauthcode'] = 'No authorization code was received from the identity server. The error logs may have more information.';
$string['errorauthnocreds'] = 'Please configure Azure AD B2C Connect client credentials.';
$string['errorauthnoendpoints'] = 'Please configure Azure AD B2C Connect server endpoints.';
$string['errorauthnohttpclient'] = 'Please set an HTTP client.';
$string['errorauthnoidtoken'] = 'Azure AD B2C Connect id_token not received.';
$string['errorauthunknownstate'] = 'Unknown state.';
$string['errorauthuseralreadyconnected'] = 'You\'re already connected to a different Azure AD B2C Connect user.';
$string['errorauthuserconnectedtodifferent'] = 'The Azure AD B2C Connect user that authenticated is already connected to a Moodle user.';
$string['errorazureb2ccall'] = 'Error in Azure AD B2C Connect. Please check logs for more information.';
$string['errorazureb2ccall_message'] = 'Error in Azure AD B2C Connect: {$a}';
$string['errorazureb2cclientinsecuretokenendpoint'] = 'The token endpoint must be using SSL/TLS for this.';
$string['errorazureb2cclientinvalidendpoint'] = 'Invalid Endpoint URI received.';
$string['errorazureb2cclientnoauthendpoint'] = 'No authorization endpoint set. Please set with $this->setendpoints';
$string['errorazureb2cclientnocreds'] = 'Please set client credentials with setcreds';
$string['errorazureb2cclientnotokenendpoint'] = 'No token endpoint set. Please set with $this->setendpoints';
$string['errorazureb2cnotenabled'] = 'The Azure AD B2C Connect authentication plugin is not enabled.';
$string['errorbadloginflow'] = 'Invalid authentication type specified. Note: If you are receiving this after a recent installation or upgrade, please clear your Moodle cache.';
$string['errorinvalidredirect_message'] = 'The URL you are trying to redirect to does not exist.';
$string['errorjwtbadpayload'] = 'Could not read JWT payload.';
$string['errorjwtcouldnotreadheader'] = 'Could not read JWT header';
$string['errorjwtempty'] = 'Empty or non-string JWT received.';
$string['errorjwtinvalidheader'] = 'Invalid JWT header';
$string['errorjwtmalformed'] = 'Malformed JWT received.';
$string['errorjwtunsupportedalg'] = 'JWS Alg or JWE not supported';
$string['errorlogintoconnectedaccount'] = 'This Azure AD B2C user is connected to a Moodle account, but Azure AD B2C Connect login is not enabled for this Moodle account. Please log in to the Moodle account using the account\'s defined authentication method to use Azure AD B2C features';
$string['errornodisconnectionauthmethod'] = 'Cannot disconnect because there is no enabled authentication plugin to fall back to. (either user\'s previous login method or the manual login method).';
$string['errorrestricted'] = 'This site has restrictions in place on the users that can log in with Azure AD B2C Connect. These restrictions currently prevent you from completing this login attempt.';
$string['errorucpinvalidaction'] = 'Invalid action received.';
$string['event_debug'] = 'Debug message';
$string['eventuserauthed'] = 'User Authorized with Azure AD B2C Connect';
$string['eventuserconnected'] = 'User connected to Azure AD B2C Connect';
$string['eventusercreated'] = 'User created with Azure AD B2C Connect';
$string['eventuserdisconnected'] = 'User disconnected from Azure AD B2C Connect';
$string['eventuserloggedin'] = 'User Logged In with Azure AD B2C Connect';
$string['gender'] = 'Gender';
$string['lang'] = 'Language';
$string['pluginname'] = 'Azure AD B2C Connect';
$string['privacy:metadata:auth_azureb2c'] = 'Azure AD B2C Connect Authentication';
$string['privacy:metadata:auth_azureb2c_prevlogin'] = 'Previous login methods to undo Azure AD B2C connections';
$string['privacy:metadata:auth_azureb2c_prevlogin:method'] = 'The previous login method';
$string['privacy:metadata:auth_azureb2c_prevlogin:password'] = 'The previous (encrypted) user password field.';
$string['privacy:metadata:auth_azureb2c_prevlogin:userid'] = 'The ID of the Moodle user';
$string['privacy:metadata:auth_azureb2c_token'] = 'Azure AD B2C Connect tokens';
$string['privacy:metadata:auth_azureb2c_token:authcode'] = 'The auth code for the token';
$string['privacy:metadata:auth_azureb2c_token:azureb2cuniqid'] = 'The azureb2c unique user identifier.';
$string['privacy:metadata:auth_azureb2c_token:azureb2cusername'] = 'The username of the azureb2c user';
$string['privacy:metadata:auth_azureb2c_token:expiry'] = 'The token expiry';
$string['privacy:metadata:auth_azureb2c_token:idtoken'] = 'The token id token';
$string['privacy:metadata:auth_azureb2c_token:refreshtoken'] = 'The token refresh token';
$string['privacy:metadata:auth_azureb2c_token:resource'] = 'The resource of the token';
$string['privacy:metadata:auth_azureb2c_token:scope'] = 'The scope of the token';
$string['privacy:metadata:auth_azureb2c_token:token'] = 'The token';
$string['privacy:metadata:auth_azureb2c_token:userid'] = 'The user ID of the Moodle user';
$string['privacy:metadata:auth_azureb2c_token:username'] = 'The username of the Moodle user';
$string['source_of_info'] = 'How did you learn about us?';
$string['ucp_disconnect_details'] = 'This will disconnect your Moodle account from {$a}. You\'ll need to create a username and password to log in to Moodle.';
$string['ucp_disconnect_title'] = '{$a} Disconnection';
$string['ucp_general_intro'] = 'Here you can manage your connection to {$a}. If enabled, you will be able to use your {$a} account to log in to Moodle instead of a separate username and password. Once connected, you\'ll no longer have to remember a username and password for Moodle, all log-ins will be handled by {$a}.';
$string['ucp_login_start'] = 'Start using {$a} to log in to Moodle';
$string['ucp_login_start_desc'] = 'This will switch your account to use {$a} to log in to Moodle. Once enabled, you will log in using your {$a} credentials - your current Moodle username and password will not work. You can disconnect your account at any time and return to logging in normally.';
$string['ucp_login_status'] = '{$a} login is:';
$string['ucp_login_stop'] = 'Stop using {$a} to log in to Moodle';
$string['ucp_login_stop_desc'] = 'You are currently using {$a} to log in to Moodle. Clicking "Stop using {$a} login" will disconnect your Moodle account from {$a}. You will no longer be able to log in to Moodle with your {$a} account. You\'ll be asked to create a username and password, and from then on you will then be able to log in to Moodle directly.';
$string['ucp_o365accountconnected'] = 'This Azure AD B2C account is already connected with another Moodle account.';
$string['ucp_status_disabled'] = 'Disabled';
$string['ucp_status_enabled'] = 'Enabled';
$string['ucp_title'] = '{$a} Management';
