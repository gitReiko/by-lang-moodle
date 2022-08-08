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
 * Strings for component 'enrol_paymentpagseguro', language 'en', version '4.0'.
 *
 * @package     enrol_paymentpagseguro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cost'] = 'Price charged every month';
$string['cost2'] = 'Price for registration';
$string['cost2_help'] = 'Value the user must pay to access the course!';
$string['cost_help'] = 'Amount charged in each month in the monthly payment!';
$string['costerror'] = 'The subscription price must be number';
$string['costmonthly'] = 'Monthly cost: R$ {$a}';
$string['costunique'] = 'Cost: R$ {$a}';
$string['defaultrole'] = 'Assign role';
$string['defaultrole_help'] = 'Select the role that should be assigned to users during registrations paid via Pagseguro';
$string['email'] = 'PagSeguro Email';
$string['email_desc'] = 'PagSeguro Email';
$string['enrolenddate'] = 'Application Deadline';
$string['enrolenddate_help'] = 'If enabled, users can only subscribe by this date.';
$string['enrolperiod'] = 'Duration of enrollment';
$string['enrolperiod_help'] = 'The length of time the subscription is valid, starting at the time the user is enrolled. If disabled, the duration of registration shall be unlimited.';
$string['enrolstartdate'] = 'Start of entries';
$string['enrolstartdate_help'] = 'If enabled, users can only be enrolled as of this date.';
$string['errorapi'] = 'API PagSeguro!';
$string['errorlowvalue'] = 'Value is too low!';
$string['errornoenrolment'] = 'No matrices found!';
$string['expiredaction'] = 'Action upon expiration of enrollment';
$string['expiredaction_help'] = 'What action do you take when the registration expires?';
$string['faulback'] = 'Disable in default?';
$string['faulback_help'] = 'If payment of tuition fails, tuition must be disabled ?!';
$string['months'] = 'Number of months';
$string['months_help'] = 'If set to 0 (ZERO) the payment is unique. If you set more than 3 it will be monthly!';
$string['monthserror'] = 'Month must be an integer between 0 and 24!';
$string['monthsmaxerror'] = 'Maximum 24 months';
$string['nocost'] = '<span style=\'color: #ff0404\'>Nenhum preço definido pelo administrador!</span>';
$string['payforpagseguro'] = 'Pay now with PagSeguro';
$string['paymentpagseguro:config'] = 'Configure the enrollment method of the pagseguro';
$string['paymentpagseguro:manage'] = 'Manage subscribed users';
$string['paymentpagseguro:unenrol'] = 'Disenroll course users';
$string['paymentpagseguro:unenrolself'] = 'Remove me from course';
$string['paymentredirect'] = '<h2>Creating payment requisition</h2>
    <p>Payment URL: <strong>{$a}</strong></p>
    <p><a title=\\"Payment URL\\" href=\\"{$a}\\" target=\\_blank\\">Go to the payment URL.</a></p>';
$string['paytext'] = 'Every day {$a->date} will be charged R$ {$a->costlocaled} for the course {$a->fullname}';
$string['pluginname'] = 'Subscription with payment by Pagseguro';
$string['pluginname_desc'] = 'Free course for payment via Pagseguro!';
$string['privacy:metadata'] = 'Plugin compartilha dados com o PagSeguro';
$string['requestpayforpagseguro'] = 'This course requires payment of the registration fee before access.';
$string['signforpagseguro'] = 'Sign now with PagSeguro';
$string['status'] = 'Enable signatures?';
$string['subscriptions'] = 'Enable signatures on the form';
$string['subscriptions_desc'] = 'If checked, the subscription enables the signatures option.';
$string['token'] = 'Secure Pagen Token';
$string['token_desc'] = 'Secure Pagen Token';
$string['unenrolselfconfirm'] = 'Do you really want to uninstall from the course "{$ a}"?';
