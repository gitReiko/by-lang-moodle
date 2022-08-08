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
 * Strings for component 'tool_userrestore', language 'en', version '4.0'.
 *
 * @package     tool_userrestore
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'Back to course';
$string['button:backtoform'] = 'Back to userrestore form';
$string['button:userrestore:continue'] = 'Restore users';
$string['cache:fill'] = 'Full cache refill';
$string['cache:fill:smart'] = 'Append missing information to cache';
$string['cache:fill:smart:limited'] = 'Append missing information to cache (max. 10 records)';
$string['cache:fillneeded'] = 'The cache required to keep track of the deleted user information is not filled.<br/>
This cache is needed to speed up rendering the user restore form and prevents timeouts.<br/>
Please be aware that filling the cache, depending on your configuration and the size of your installation can be a <i>very</i> lengthy process.<br/>
On huge installations the whole process can take several minutes or longer to complete.<br/><br/>
When the cache has been filled in full, the restore form should be loaded within seconds.<br/><br/>
You can choose to add to the cache or to completely refill the cache.<br/>
The difference is that adding to the cache will <i>not</i> purge the cache in advance, whereas a full refill will purge the cache.';
$string['cache:iscomplete'] = 'Cache has all required information';
$string['cache:missing:numusers'] = 'Deleted user cache is missing {$a} records/users.';
$string['cache:purge'] = 'Purge cache';
$string['config:cleanlogs:disabled'] = 'Automatic logcleaning is disabled in global configuration';
$string['config:tool:disabled'] = 'User Restore Utility is disabled in global tool configuration';
$string['deletedby'] = 'Deleted by';
$string['email:user:restore:body'] = '<p>Dear {fullname}</p>
<p>Your account has been restored</p>
<p>However, your username may not have been retrieved correctly due to how moodle handles user deletion
and whether or not event logs have been cleaned. Your username is {username}</p>
<p>If you feel this is unintended or have any questions,
please contact {contact}</p>
<p>You should be able to use your old password to log in to the site.<br/>
If not, use the email address to which this email was sent to request a password reset.<br/>
Please log in to the site to re-enter all your information using the link below:<br/>
{loginlink}</p>
<p>Regards<br/>{signature}</p>';
$string['email:user:restore:subject'] = 'Your account has been restored';
$string['err:statustable:set_sql'] = 'set_sql() is disabled. This table defines it\'s own and is not customomizable';
$string['form:label:email'] = 'E-mail body';
$string['form:label:sendmail'] = 'Send E-mail';
$string['form:label:subject'] = 'E-mail subject';
$string['form:static:email:template'] = 'You can use the following template strings in your email.
They will automatically be replaced with the correct variables. Please use the exactly as indicated, or the result might be unexpected.
<ul>
<li>{firstname} - First name of the user that\'s restored</li>
<li>{lastname} - Last name of the user that\'s restored</li>
<li>{fullname} - Full name of the user that\'s restored</li>
<li>{username} - Restored user\'s username (this MAY be different from before the account was deleted)</li>
<li>{signature} - Signature (full name of the support user for the moodle site)</li>
<li>{contact} - Contact emailaddress (based on the support user for the moodle site)</li>
<li>{loginlink} - Login link for the site (based on restored username)</li>
</ul>';
$string['hasloginfo'] = 'Has log info?';
$string['label:users:potential'] = 'Potential users';
$string['link:cache'] = 'Cache';
$string['link:currentstatus:overview'] = 'View current status changes';
$string['link:log'] = 'Restore users logs';
$string['link:log:overview'] = 'View status change logs';
$string['link:restore'] = 'Restore users';
$string['link:viewstatus'] = 'View statuslist';
$string['msg:no-users-to-restore'] = 'There are no deleted user accounts found to restore.';
$string['page:view:log.php:introduction'] = 'The table below shows the logs of statusses that users have been restored.';
$string['page:view:restore.php:introduction'] = 'This form enables you to select users to restore and optionally send them an
email about their user accounts being restored. Please note, in the table below the username and emailaddress represents the original
information of the user as retreived from the event log records.';
$string['pluginname'] = 'User Restore';
$string['privacy:metadata:tool_userrestore:mailedto'] = 'E-mail address of the restored user';
$string['privacy:metadata:tool_userrestore:mailsent'] = 'Whether or not an email has been sent';
$string['privacy:metadata:tool_userrestore:restored'] = 'Whether or not the account was restored';
$string['privacy:metadata:tool_userrestore:timecreated'] = 'Time the record was created.';
$string['privacy:metadata:tool_userrestore:userid'] = 'The primary key of the Moodle user for which account has been restored.';
$string['privacy:metadata:tool_userrestore_log'] = 'The userrestore log contains historic/logging information about restored users';
$string['privacy:metadata:tool_userrestore_status'] = 'The userrestore status contains information about restored users';
$string['promo'] = 'userrestore plugin for Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['restore:deleted-user-not-found'] = 'Can\'t restore user: deleted user was not found';
$string['restore:email-exists'] = 'Can\'t restore user: email address \'{$a->email}\' already exists for a different active user';
$string['restore:user-mnet-not-local'] = 'Can\'t restore user: mnet host for user to be restored is not the configured local mnet host';
$string['restore:user-restored'] = 'User <i>\'{$a->username}\'</i> (\'{$a->email}\') was successfully restored';
$string['restore:username-exists'] = 'Can\'t restore user: username \'{$a->username}\' already exists for a different active user';
$string['restoresettings'] = 'User Restore Settings';
$string['restoresettingsdesc'] = '';
$string['setting:cleanlogsafter'] = 'Clean logs frequency';
$string['setting:desc:cleanlogsafter'] = 'Configure the frequency after which logs are cleaned. Any logs older than this setting will physically be removed.';
$string['setting:desc:enablecleanlogs'] = 'Enables or disables automatic cleaning of the history log.';
$string['setting:desc:enableuserdeletedobserver'] = 'If enabled, this will perform a cache fill of deleted user data
at the very moment a user is deleted.<br/>
This has the potential of causing long running times or even timeouts when you are deleting users in bulk from the user administration.<br/>
It should be treated very carefully. If you have this setting enabled and you delete users in bulk quite often, it might be time to disable the event observer.';
$string['setting:desc:maxrestoreusers'] = 'This sets the maximum number of users displayed on the restore users form.';
$string['setting:enablecleanlogs'] = 'Enable logcleaning';
$string['setting:enableuserdeletedobserver'] = 'Enable user deleted observer?';
$string['setting:maxrestoreusers'] = 'Maximum restore users';
$string['table:log:all'] = 'Historic restore log';
$string['table:log:latest'] = 'Latest restore logs';
$string['table:logs'] = 'Logs';
$string['task:filldeletedcache'] = 'Fill deleteds cache for user restore';
$string['task:logclean'] = 'Clean logs for user restore';
$string['th:action'] = 'Action';
$string['th:mailedto'] = 'E-mailed to';
$string['th:mailsent'] = 'E-mail sent';
$string['th:name'] = 'Name';
$string['th:restored'] = 'Restored';
$string['th:timecreated'] = 'Created on';
$string['th:userid'] = 'User ID';
$string['timedeleted'] = 'Deleted at';
