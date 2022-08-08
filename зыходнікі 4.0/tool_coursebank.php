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
 * Strings for component 'tool_coursebank', language 'en', version '4.0'.
 *
 * @package     tool_coursebank
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERROR_MAX_ATTEMPTS_REACHED'] = 'Maximum attempts reached.';
$string['ERROR_TIMEOUT'] = 'The connection has timed out.';
$string['backupdate'] = 'Backup date';
$string['backupfailed'] = 'Failed sending backup {$a}.';
$string['backupfilename'] = 'File name';
$string['backupfiles'] = '{$a} file(s)';
$string['backupqueue'] = 'Course Bank backups transfer queue';
$string['backupsummary'] = 'Course Bank backups transfer report';
$string['check_delete'] = 'Are you sure you want to delete {$a} from the transfer queue?';
$string['check_go'] = 'Are you sure you want to resume transferring of {$a}?';
$string['check_stop'] = 'Are you sure you want to put transferring of {$a} on hold?';
$string['checking'] = 'Checking...';
$string['completion'] = 'Completion';
$string['conncheckbutton'] = 'Check connection';
$string['conncheckfail'] = 'Connection to "{$a}" failed. Please confirm that your external course bank settings and network configuration are correct.';
$string['connchecksuccess'] = 'Connection check to "{$a}" passed!';
$string['connchecktitle'] = 'Connection check';
$string['coursebank:download'] = 'Download course bank backup files';
$string['coursebank:edit'] = 'Edit course bank backup files';
$string['coursebank:view'] = 'View a list of course bank backup files';
$string['coursebank:viewlogs'] = 'View Course Bank logs';
$string['coursebanklogging'] = 'Course Bank Logging';
$string['coursefullname'] = 'Course name';
$string['coursename'] = 'Course name';
$string['cron_duplicate'] = 'Duplicate cron lock';
$string['cron_force'] = 'The lock can be removed by running this script with --force as an argument.';
$string['cron_lock_cleared'] = 'Clearing old cron lock record in database because it is considered stale.';
$string['cron_locked'] = 'Cron lock record is in the database. The process may have been interrupted recently or still running.';
$string['cron_removinglock'] = 'Removing cron lock in the database...';
$string['cron_sending'] = 'Sending backups...';
$string['cron_skippingexternal'] = 'The tool is not configured to be run via CLI. Exiting...';
$string['cron_skippingmoodle'] = 'Configured to use an external cron. Skipping...';
$string['crontimeout'] = 'Cron execution time limit reached! Deferring transfer of remaining courses to next run.';
$string['delete'] = 'Delete from the queue';
$string['deletefailed'] = 'Failed deleting backup {$a}.';
$string['disabled'] = 'Sending of course backups is disabled.';
$string['download'] = 'Download backup file';
$string['downloadsummary'] = 'External Course Bank download backups';
$string['errordownloading'] = 'Error downloading the backup file.';
$string['errorgetdownloadlist'] = 'Can\'t get a list of backups from external course bank. Please confirm that your external course bank settings and network configuration are correct.';
$string['errorsonly'] = 'Errors only';
$string['errorupdatingstatus'] = 'Error updating status';
$string['event_backup_chunk_interrupted'] = 'Transfer of backup with {$a} interrupted by chunk failure.';
$string['event_backup_init_completed'] = 'Course backup with {$a} has already been transferred to Coursebank.';
$string['event_backup_init_exists_data'] = 'Course backup with {$a} already exists in Coursebank. Existing data will be overwritten.';
$string['event_backup_init_exists_nodata'] = 'Course backup with {$a} already exists in Coursebank, but no data has been transferred yet.';
$string['event_backup_init_interrupted'] = 'Transfer of backup with {$a} interrupted during backup initialisation';
$string['event_backup_transfer_completed'] = 'Transfer of course backup with {$a} completed.';
$string['event_backup_transfer_started'] = 'Transfer of course backup with {$a} started.';
$string['event_backup_update'] = 'Transfer record of backup with {$a} updated.';
$string['event_backup_update_interrupted'] = 'Transfer of backup with {$a} interrupted by backup update failure.';
$string['event_download_view_failed'] = 'The user with id \'{$a}\' attempted to view the backup downloads page but an error occurred.';
$string['event_downloads_viewed'] = 'The user with id \'{$a}\' viewed the backup downloads page.';
$string['event_transfer_queue_populated'] = '{$a} course backup files added to the transfer queue.';
$string['eventbackupdeleted'] = 'Backup file deleted';
$string['eventbackupdeletefailed'] = 'Backup delete failed';
$string['eventbackupdeleteskipped'] = 'Backup delete skipped';
$string['eventbackupdownloaded'] = 'Backup downloaded';
$string['eventbackupdownloadfailed'] = 'Backup download failed';
$string['eventbackupsendfailed'] = 'Backup send failed';
$string['eventbackupupdated'] = 'Backup record updated';
$string['eventconnectionchecked'] = 'Connection checked';
$string['eventconnectioncheckfailed'] = 'Connection check failed';
$string['eventcroncompleted'] = 'Coursebank scheduled task completed';
$string['eventcronstarted'] = 'Coursebank scheduled task started';
$string['eventdownloadsviewed'] = 'Download page viewed';
$string['eventdownloadviewfailed'] = 'Download page view failed';
$string['eventgetsession'] = 'New session key created.';
$string['eventgetsessionfailed'] = 'Session key creation failed.';
$string['eventhttprequest'] = 'HTTP request';
$string['eventhttprequestfailed'] = 'HTTP request failed';
$string['eventloggedas'] = '{$a->realusername} as {$a->asusername}';
$string['eventname'] = 'Event name';
$string['eventorigin'] = 'Origin';
$string['eventqueuepopulated'] = 'Course backup queue populated';
$string['eventstatusupdated'] = 'Backup status updated';
$string['eventstatusupdatefailed'] = 'Backup status update failed';
$string['eventtimeoutreached'] = 'Cron time out reached';
$string['eventtimeoutreached_desc'] = 'Cron execition time limit reached during transfer of course {$a}.';
$string['eventtransfercompleted'] = 'Backup transfer completed';
$string['eventtransferinterrupted'] = 'Backup transfer interrupted';
$string['eventtransferresumed'] = 'Backup transfer resumed';
$string['eventtransferstarted'] = 'Backup transfer started';
$string['eventtransferstartfailed'] = 'Backup transfer start failed';
$string['filename'] = 'File name';
$string['filesize'] = 'File size';
$string['filetimemodified'] = 'Backup date';
$string['filterisequalto'] = 'is equal to';
$string['filterlessthan'] = 'less than';
$string['filtermorethan'] = 'more than';
$string['go'] = 'Resume transferring';
$string['identify_backup'] = 'UUID \'{$a->uuid}\' and file name \'{$a->filename}\\';
$string['limiterfor'] = '{$a} field limiter';
$string['localdeletesuccess'] = '{$a} deleted successfully from the designated storage area.';
$string['moodledeleteskip'] = 'Skip deleting {$a} from the automated backup filearea as the last automated backup for the course is not successful.';
$string['moodledeletesuccess'] = '{$a} deleted successfully from the automated backup filearea.';
$string['nav_download'] = 'Download backups';
$string['nav_queue'] = 'Transfer queue';
$string['nav_report'] = 'Course Bank logs';
$string['nav_summary'] = 'Backups transfer report';
$string['noaccesstofeature'] = 'Sorry, only admin or CLI has access to this feature.';
$string['nologreaderenabled'] = 'No log reader enabled';
$string['notavailable'] = 'Not available';
$string['notcompleted'] = 'Not completed';
$string['notstarted'] = 'Not started';
$string['pluginname'] = 'Course Bank';
$string['reportpageheader'] = 'Course Bank logs';
$string['return'] = 'Go to settings page';
$string['selectlogreader'] = 'Select log reader';
$string['sendcoursebackups'] = 'External course backups';
$string['settings_authtoken'] = 'Authentication token';
$string['settings_authtoken_desc'] = 'Authentication token for use in communication with external course bank instance.';
$string['settings_chunksize'] = 'Chunk size';
$string['settings_chunksize_desc'] = 'Size of individual backup chunks to be sent to the backup server.';
$string['settings_deletelocalbackup'] = 'Delete local backups';
$string['settings_deletelocalbackup_desc'] = 'If enabled a local backup file will be deleted once it has been sent to coursebank.';
$string['settings_disablestring'] = 'Disable';
$string['settings_displaypages'] = 'Display pages';
$string['settings_displaypages_desc'] = 'Hide/Display Course Bank pages in the navigation menu under Site administration > Courses > Backups > Course Bank';
$string['settings_enable'] = 'Active';
$string['settings_enable_desc'] = 'Enable or disable sending of course backups.';
$string['settings_enablestring'] = 'Enable';
$string['settings_externalcron'] = 'Use external cron';
$string['settings_externalcron_desc'] = 'If checked the process will be triggered by external cron.
    <br />Server administrators have to set up external cron.
    <br />The simple example: <PRE>2-57/5 * * * * www-data php /path/to/your/moodle/admin/tool/coursebank/cli/backup.php >> /var/log/backup.log</PRE>';
$string['settings_header'] = 'Course Bank configuration options';
$string['settings_intro'] = 'Please see <a href="https://account.coursebank.biz/content/moodle-setup" target="_blank">Moodle setup documentation</a> to learn how to configure your plugin. There is also a <a href="https://account.coursebank.biz/content/faq" target="_blank">FAQ page</a>.';
$string['settings_proxyheader'] = 'Proxy configuration';
$string['settings_proxypass'] = 'Password';
$string['settings_proxypass_desc'] = 'Proxy password credential';
$string['settings_proxyport'] = 'Port';
$string['settings_proxyport_desc'] = 'Proxy port';
$string['settings_proxyurl'] = 'Proxy URL';
$string['settings_proxyurl_desc'] = 'Proxy provider URL';
$string['settings_proxyuser'] = 'Username';
$string['settings_proxyuser_desc'] = 'Proxy username credential';
$string['settings_requestretries'] = 'HTTP request retries';
$string['settings_requestretries_desc'] = 'Number of times to reattempt the sending of an individual failed request.';
$string['settings_sessionkey'] = 'Session key';
$string['settings_sessionkey_desc'] = 'Session key used by Course Bank (Moodle) to authenticate with External Course Bank.';
$string['settings_timeout'] = 'Web service time out';
$string['settings_timeout_desc'] = 'Time out (in seconds) for individual HTTP requests.';
$string['settings_url'] = 'Target URL';
$string['settings_url_desc'] = 'Location of the target backup server.';
$string['settingspage'] = 'Configuration';
$string['speedtestbutton'] = 'Test transfer speed';
$string['speedtestchunk'] = 'The recommended chunk size for your system is';
$string['speedtestfail'] = 'Connection to "{$a}" failed. Please confirm that your external course bank settings and network configuration are correct.';
$string['speedtestslow'] = 'Outbound transfers to "{$a}" are very slow. The test transfer speed was approximately';
$string['speedtestsuccess'] = 'Connection speed test to "{$a}" passed! The test transfer speed was approximately';
$string['speedtesttitle'] = 'Connection speed test';
$string['status'] = 'Status';
$string['statuscancelled'] = 'Transfer is cancelled';
$string['statuserror'] = 'Error';
$string['statusfinished'] = 'Transfer complete';
$string['statusinprogress'] = 'Transfer in progress';
$string['statusnotstarted'] = 'Transfer pending';
$string['statusonhold'] = 'Transfer is on hold';
$string['stop'] = 'Put on hold';
$string['timecompleted'] = 'Transfer completed';
$string['timecreated'] = 'Transfer started';
$string['timetransferstarted'] = 'Transfer started';
$string['transferinprogress'] = 'Can\'t continue. Transfer is in progress or may have been interrupted recently. The lock record is in the database.';
$string['valuefor'] = '{$a} value';
