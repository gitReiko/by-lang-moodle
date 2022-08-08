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
 * Strings for component 'enrol_stripepayment', language 'en', version '4.0'.
 *
 * @package     enrol_stripepayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Apply Code';
$string['assignrole'] = 'Assign role';
$string['buy_now'] = 'Buy Now';
$string['canntenrol'] = 'Enrolment is disabled or inactive';
$string['charge_description1'] = 'create customer for email receipt';
$string['charge_description2'] = 'Charge for Course Enrolment Cost.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['couponcode'] = 'Coupon Code';
$string['create_user_token'] = 'To make Stripe callback works, kindly  enable Moodle REST protocol on your site';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Stripe enrolments';
$string['enable_coupon_section'] = 'Enable coupon section';
$string['enabled_rest_protocol'] = 'Also kindly create your token';
$string['enrol'] = 'Enrol';
$string['enrol_now'] = 'Enrol Now';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['final_cost'] = 'Final Cost';
$string['from_here'] = 'from here';
$string['invalidcouponcode'] = 'Invalid Coupon Code';
$string['invalidcouponcodevalue'] = 'Coupon Code {$a} is not valid!';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can stripepayment enrol. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to stripepayment-enrol was already reached.';
$string['messageprovider:stripe_enrolment'] = 'Stripe enrolment messages';
$string['messageprovider:stripepayment_enrolment'] = 'Message Provider';
$string['newcost'] = 'New Cost';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['please_wait'] = 'Please wait...';
$string['pluginname'] = 'Stripe Payment';
$string['pluginname_desc'] = 'The Stripe module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['publishablekey'] = 'Stripe Publishable Key';
$string['publishablekey_desc'] = 'The API Publishable Key of Stripe account';
$string['secretkey'] = 'Stripe Secret Key';
$string['secretkey_desc'] = 'The API Secret Key of Stripe account';
$string['sendpaymentbutton'] = 'Send payment via Stripe';
$string['status'] = 'Allow Stripe enrolments';
$string['status_desc'] = 'Allow users to use Stripe to enrol into a course by default.';
$string['stripe:config'] = 'Configure Stripe enrol instances';
$string['stripe:manage'] = 'Manage enrolled users';
$string['stripe:unenrol'] = 'Unenrol users from course';
$string['stripe:unenrolself'] = 'Unenrol self from the course';
$string['stripe_sorry'] = 'Sorry, you can not use the script that way.';
$string['stripeaccepted'] = 'Stripe payments accepted';
$string['stripepayment:config'] = 'Configure stripepayment';
$string['stripepayment:manage'] = 'Manage stripepayment';
$string['stripepayment:unenrol'] = 'Unenrol stripepayment';
$string['stripepayment:unenrolself'] = 'Unenrolself stripepayment';
$string['token_empty_error'] = 'Web service token could not be empty';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['webservice_token_string'] = 'User Token';
