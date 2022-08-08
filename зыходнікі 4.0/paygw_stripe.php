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
 * Strings for component 'paygw_stripe', language 'en', version '4.0'.
 *
 * @package     paygw_stripe
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpromotioncodes'] = 'Allow Promotion Codes';
$string['apikey'] = 'API Key';
$string['apikey_help'] = 'The API key that we use to identifier ourselves with Stripe';
$string['customerdescription'] = 'Moodle User ID: {$a}';
$string['defaulttaxbehavior'] = 'Default tax behavior';
$string['defaulttaxbehavior_help'] = 'Default behavior of tax (inclusive, exclusive). Changeable in Stripe dashboard.';
$string['enableautomatictax'] = 'Enable automatic tax';
$string['enableautomatictax_desc'] = 'Automatic tax must be enabled and configured in the Stripe dashboard.';
$string['gatewaydescription'] = 'Stripe is an authorised payment gateway provider for processing credit card transactions.';
$string['gatewayname'] = 'Stripe';
$string['paymentcancelled'] = 'Payment was cancelled';
$string['paymentmethod:alipay'] = 'Alipay';
$string['paymentmethod:bancontact'] = 'Bancontact';
$string['paymentmethod:card'] = 'Card';
$string['paymentmethod:eps'] = 'EPS';
$string['paymentmethod:giropay'] = 'giropay';
$string['paymentmethod:ideal'] = 'iDEAL';
$string['paymentmethod:netbanking'] = 'NetBanking';
$string['paymentmethod:p24'] = 'P24';
$string['paymentmethod:sepa_debit'] = 'SEPA Direct Debit';
$string['paymentmethod:sofort'] = 'Sofort';
$string['paymentmethod:upi'] = 'UPI';
$string['paymentmethods'] = 'Payment Methods';
$string['paymentsuccessful'] = 'Payment was successful';
$string['pluginname'] = 'Stripe';
$string['pluginname_desc'] = 'The Stripe plugin allows you to receive payments via Stripe.';
$string['privacy:metadata:stripe_customers'] = 'Stores the relation from Moodle users to Stripe customer objects';
$string['privacy:metadata:stripe_customers:customerid'] = 'Customer ID returned from Stripe';
$string['privacy:metadata:stripe_customers:userid'] = 'Moodle user ID';
$string['privacy:metadata:stripe_intents'] = 'Stores payment intent data to track payment history';
$string['privacy:metadata:stripe_intents:userid'] = 'Moodle user ID';
$string['secretkey'] = 'Secret Key';
$string['secretkey_help'] = 'Secret key to authenticate with Stripe';
$string['stripeaccount'] = 'Stripe account ID';
$string['stripeaccount_help'] = 'For creating the direct charge branding page';
$string['taxbehavior:exclusive'] = 'Exclusive';
$string['taxbehavior:inclusive'] = 'Inclusive';
