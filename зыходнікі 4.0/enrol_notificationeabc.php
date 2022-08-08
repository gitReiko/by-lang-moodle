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
 * Strings for component 'enrol_notificationeabc', language 'en', version '4.0'.
 *
 * @package     enrol_notificationeabc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activar'] = 'Enable initial verification';
$string['activar_help'] = 'When activated will be verified by the immediate execution of cron later, users who were enrolled for the period specified above';
$string['activarglobal'] = 'Active global';
$string['activarglobal_help'] = 'Active enrol notification for all site';
$string['activarglobalenrolupdated'] = 'Active global';
$string['activarglobalenrolupdated_help'] = 'Active enrol updated notifications for all site';
$string['activarglobalunenrolalert'] = 'Active global';
$string['activarglobalunenrolalert_help'] = 'Active enrol notifications for all site';
$string['activeenrolalert'] = 'Active enrol alert';
$string['activeenrolalert_help'] = 'Active enrol alert';
$string['activeenrolupdatedalert'] = 'Active update enrol notifications';
$string['activeenrolupdatedalert_help'] = 'Active update enrol notifications';
$string['activeunenrolalert'] = 'Active unenrol notifications';
$string['activeunenrolalert_help'] = 'Active unenrol alert';
$string['emailsender'] = 'Email sender';
$string['emailsender_help'] = 'By default set to take the email user support';
$string['fecha'] = 'Period for verification of users enrolled courses';
$string['fecha_help'] = 'Place the period for which you want to perform the first virificación';
$string['filelockedmail'] = 'You has been enroled in {$a->fullname} ({$a->url})';
$string['location'] = 'Message';
$string['location_help'] = 'Personalize the message that users will come to be enrolled. This field accepts the following markers which then will be replaced by the corresponding values dynamically
<pre>
{COURSENAME} = course fullname
{USERNAME} = username
{NOMBRE} = firstname
{APELLIDO} = lastname
{URL} = course url
</pre>';
$string['messageprovider:notificationeabc_enrolment'] = 'Enrol notification messages';
$string['namesender'] = 'Name sender';
$string['namesender_help'] = 'By default it takes the name set to the user support';
$string['notificationeabc:manage'] = 'Manage notificationeabc';
$string['pluginname'] = 'Enrol Notification';
$string['pluginname_desc'] = 'Enrol notifications via mail';
$string['status'] = 'Active enrol notification';
$string['subject'] = 'Notificación de Matriculación';
$string['unenrolmessage'] = 'Custom Message';
$string['unenrolmessage_help'] = 'Personalize the message that users will come to be unenrolled. This field accepts the following markers which then will be replaced by the corresponding values dynamically
<pre>
{COURSENAME} = course fullname
{USERNAME} = username
{NOMBRE} = firstname
{APELLIDO} = lastname
{URL} = course url
</pre>';
$string['unenrolmessagedefault'] = 'You has been unenrolled from {$a->fullname} ({$a->url})';
$string['updatedenrolmessage'] = 'Mensaje personalizado';
$string['updatedenrolmessage_help'] = 'Personalize the message that users will come to be updated. This field accepts the following markers which then will be replaced by the corresponding values dynamically
<pre>
{COURSENAME} = course fullname
{USERNAME} = username
{NOMBRE} = firstname
{APELLIDO} = lastname
{URL} = course url
</pre>';
$string['updatedenrolmessagedefault'] = 'Your enrolment from {$a->fullname} has been updated ({$a->url})';
