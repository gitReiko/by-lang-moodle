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
 * Strings for component 'local_mailtest', language 'en', version '4.0'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Always show log of communications with mail server, even if there are no errors.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['divertedto'] = 'Diverted to {$a}';
$string['errorcommunications'] = 'Moodle could not communicate with your mail server.</p><p><strong>Recommendation:</strong></p><p>Start by checking your Moodle <a href="{$a}" target="_blank">SMTP mail settings</a>.</p><p>If they look correct, check your SMTP Server and/or firewall settings to ensure that they are configured to accept SMTP connections from your Moodle web server and from your no-reply email address. For more help, see the FAQ section in the documentation.';
$string['errorsend'] = 'The test email message could not be delivered to the mail server.</p><p><strong>Recommendation:</strong></p><p>Check your Moodle <a href="{$a}" target="blank">Email settings</a>. For more help, see the FAQ section in the documentation.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'From email address';
$string['heading'] = 'Email configuration test';
$string['message'] = '<p>This is a test message. Please disregard.</p>
<p>If you received this email, it means that you have successfully configured your Moodle site\'s email settings.</p>
<hr><p><strong>Additional User Information</strong></p>
<ul>
<li><strong>Registration status :</strong> {$a->regstatus}</li>
<li><strong>Preferred language :</strong> {$a->lang}</li>
<li><strong>User\'s web browser :</strong> {$a->browser}</li>
<li><strong>Message submitted from :</strong> {$a->referer}</li>
<li><strong>Moodle version :</strong> {$a->release}</li>
<li><strong>User\'s IP address :</strong> {$a->ip}</li>
</ul>';
$string['noemailever'] = '<p>Email on this site has been disabled by way of <strong>$CFG-&gt;noemailever = true;</strong>.</p>';
$string['nologavailable'] = '<p>Logging is not available when using PHP mail() function. However, may find logs on your server. Most common locations on Linux include:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>Alernatively, a custom location may be specified using the mail.log setting in php.ini.</p>';
$string['notregistered'] = 'Not registered or not logged in.';
$string['phpmethod'] = 'PHP default method';
$string['pluginname'] = 'eMail Test';
$string['pluginname_help'] = 'eMail Test will verify the email settings for this Moodle site by sending a test email message to the address you specify. For Site Administrators only.';
$string['primaryadminemail'] = 'Primary admin email';
$string['privacy:metadata'] = 'The eMail Test plugin does not store any personal data about any user.';
$string['recipientisrequired'] = 'You must specify the recipient\'s email address.';
$string['registered'] = 'Registered user ({$a}).';
$string['sendmethod'] = 'Email send method';
$string['sendtest'] = 'Send a test message';
$string['sentmail'] = 'Moodle successfully delivered the test message to the SMTP mail server.';
$string['sentmailphp'] = 'The Moodle test message was successfully accepted by PHP Mail.';
$string['smtpmethod'] = 'SMTP hosts: {$a}';
$string['toemail'] = 'To email address';
$string['winsyslog'] = 'Event Log on Windows';
$string['youremail'] = 'Your email address';
