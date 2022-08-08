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
 * Strings for component 'paygw_paynl', language 'en', version '4.0'.
 *
 * @package     paygw_paynl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apitoken'] = 'Secret';
$string['apitoken_help'] = 'The API token that PAY. generated for your application.';
$string['cannotprocessstatus'] = 'Your payment has a status we cannot (yet) process. Please contact system administrator';
$string['environment'] = 'Gateway mode';
$string['environment_help'] = 'Use this field to distinquish between sandbox testing and production mode. Please do note that sandbox testing mode does not perform actual real payments.';
$string['err:nopaymentmethods'] = 'You don\'t have any payment methods enabled for PAY. It\'s also possible, if you do have payment methods enabled for PAY.,
that these are not available for the current country.';
$string['err:validatetransaction:component'] = 'Transaction invalid: component mismatch';
$string['err:validatetransaction:itemid'] = 'Transaction invalid: itemid mismatch';
$string['err:validatetransaction:paymentarea'] = 'Transaction invalid: paymentarea mismatch';
$string['err:validatetransaction:userid'] = 'Transaction invalid: user mismatch';
$string['gatewaydescription'] = 'PAY. is an authorised payment gateway provider for processing credit card transactions.';
$string['gatewayname'] = 'PAY.';
$string['internalerror'] = 'An internal error has occurred. Please contact the system administrator.';
$string['live'] = 'Production';
$string['payment:returnpage'] = 'Processing payment status.';
$string['paymentalreadypaid'] = 'Payment already performed';
$string['paymentcancelled'] = 'Your payment was cancelled';
$string['paymentpending'] = 'Your payment is pending. We will process the payment status later';
$string['paymentsuccessful'] = 'Your payment was successful';
$string['pluginname'] = 'PAY.';
$string['pluginname_desc'] = 'The Pay plugin allows you to receive payments via Pay.';
$string['privacy:metadata'] = 'The PAY. plugin does not store any personal data.';
$string['privacy:metadata:paygw_paynl'] = 'The PAY. payment plugin stores external transactionid\'s and payment references for the Moodle user needed to identity and synchronize payments.';
$string['privacy:metadata:paygw_paynl:component'] = 'Payment component';
$string['privacy:metadata:paygw_paynl:itemid'] = 'Payment item ID';
$string['privacy:metadata:paygw_paynl:paymentarea'] = 'Payment area';
$string['privacy:metadata:paygw_paynl:paymentid'] = 'Payment ID (internal)';
$string['privacy:metadata:paygw_paynl:paymentreference'] = 'Pay Payment reference (external)';
$string['privacy:metadata:paygw_paynl:status'] = 'Order status name';
$string['privacy:metadata:paygw_paynl:statuscode'] = 'Order status code';
$string['privacy:metadata:paygw_paynl:testmode'] = 'Whether or not payment was done in test/sandbox mode';
$string['privacy:metadata:paygw_paynl:timecreated'] = 'Time the order record was created';
$string['privacy:metadata:paygw_paynl:timemodified'] = 'Time the order record was last updated';
$string['privacy:metadata:paygw_paynl:transactionid'] = 'Pay Transaction ID (external)';
$string['privacy:metadata:paygw_paynl:userid'] = 'User ID';
$string['redirect-notify'] = 'Please note that starting a payment redirects you to an external payment page.';
$string['sandbox'] = 'Sandbox/testing';
$string['selectpaymentmethod'] = 'Select payment method';
$string['selectpaymentmethod_help'] = 'You can make a selection for the payment method here if you wish to do so.<br/>
If you don\'t select one, don\'t worry! In that case you will be able to select the payment method after you have been redirected to PAY.';
$string['serviceid'] = 'Service ID';
$string['serviceid_help'] = 'The service ID that PAY. generated for your application (starts with "SL-").';
$string['startpayment'] = 'Start payment';
$string['startpayment:failed:btncancel'] = 'Close';
$string['startpayment:failed:title'] = 'Payment could not be started.';
$string['task:processopenorders'] = 'Process open orders.';
$string['tokencode'] = 'Token code';
$string['tokencode_help'] = 'The token code that PAY. generated for your application (starts with "AT-").';
$string['transactionrecordnotfound'] = 'Reference to this payment cannot be found in our system.';
$string['unknownerror'] = 'An unknown error has occurred. Please contact the system administrator.';
