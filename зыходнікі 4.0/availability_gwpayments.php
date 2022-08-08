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
 * Strings for component 'availability_gwpayments', language 'en', version '4.0'.
 *
 * @package     availability_gwpayments
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cost'] = 'Cost';
$string['currency'] = 'Currency';
$string['description'] = 'Require users to make a payment via a payment gateway to access the activity or resource.';
$string['disablepaymentonmisconfig'] = 'Do not display payment button when no (valid) payment can be made.';
$string['disablepaymentonmisconfig_help'] = 'When enabled, the payment button will be hidden from view when a payment cannot be made, e.g. on currency mismappings or no gateways are available';
$string['eitherdescription'] = 'you make a payment with a payment gateway.<br/>{$a}';
$string['err:no-payment-account-set'] = 'No payment account is set for this activity.';
$string['err:payment-account-not-exists'] = 'The payment account for this activity no longer exists.';
$string['err:payment-account-unavailable'] = 'The payment account for this activity is unavailable.';
$string['err:payment-no-available-gateways'] = 'No gateway available for this activity. This is usually the case when the expected currency is not available for any gateway or one or more gateway(s) is/are disabled.';
$string['err:payment:misconfiguration'] = 'Due to a misconfiguration no payment can be made at this time.<br/>
If this message persists, please notify the system administrator.';
$string['error_cost'] = 'Cost field has an invalid value.';
$string['error_vat'] = 'VAT field has an invalid value (must be 0 or greater and below 100).';
$string['notdescription'] = 'you have not made a payment yet with a payment gateway.<br/>{$a}';
$string['paymentaccount'] = 'Payment account';
$string['paymentaccount_help'] = 'Enrolment fees will be paid to this account.';
$string['paymentrequired'] = 'This resource requires a payment';
$string['pluginname'] = 'PaymentS availability condition for paid access';
$string['privacy:metadata'] = 'The PaymentS payment for conditional access availability plugin does not store any personal data.';
$string['promo'] = 'PaymentS availability plugin for Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
(<a href=\'https://www.sebsoft.nl/\' target=\'_new\'>https://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['purchasedescription'] = 'Access to {$a}';
$string['sendpaymentbutton'] = 'Select payment type';
$string['title'] = 'PaymentS payment';
$string['vat'] = 'VAT';
$string['vat_help'] = 'VAT percentage of cost (note: cost is including VAT so this is purely indicative).';
