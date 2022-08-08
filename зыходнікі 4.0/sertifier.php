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
 * Strings for component 'sertifier', language 'en', version '4.0'.
 *
 * @package     sertifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydescription'] = 'Select a previously configured Delivery or create a new one for the credentials that are going to be issued.</br></br>The list you can select from will only contain Deliveries created from this interface and have the “Active” status.</br></br>Once you have created and prepared one, you will be able to use it again for multiple Moodle activities. However, you can not edit a Delivery that has issued credentials.</br></br>For managing your issuing process please visit <a href="https://app.sertifier.com" target="_blank">https://app.sertifier.com</a>.';
$string['activityname'] = 'Activity name';
$string['apikeyhelp'] = 'Enter your API key from app.sertifier.com';
$string['apikeylabel'] = 'API key';
$string['cantchangedelivery'] = 'Delivery cannot be changed. Selected delivery: <b>{$a}</b>';
$string['chooseexam'] = 'Choose final quiz';
$string['completionissuecheckbox'] = 'Yes, issue upon course completion';
$string['completionissueheader'] = 'Auto-issue criteria: by course completion';
$string['createDelivery'] = 'Create new delivery';
$string['createdDelivery'] = 'New delivery has been created. After activating, refresh the page. <a href="https://app.sertifier.com/en/home/send/{$a}" target="_blank">Activate Delivery</a>';
$string['credentialNo'] = 'Credential No';
$string['datecreated'] = 'Date created';
$string['email'] = 'Recipient Email';
$string['existcertificate'] = 'Please use the button below to view your credential.';
$string['gotoreports'] = 'Go to the reports';
$string['gradeissueheader'] = 'Auto-issue criteria: by final quiz grade';
$string['indexheader'] = 'All certificates/badges for {$a}';
$string['issueDate'] = 'Issue Date';
$string['modulename'] = 'Sertifier certificates & badges';
$string['modulename_help'] = 'Help Text';
$string['modulenameplural'] = 'Sertifier certificates/badges';
$string['name'] = 'Recipient Name';
$string['nocertificates'] = 'There are no certificates/badges';
$string['nonexistcertificate'] = 'You have not earned this credential yet.';
$string['notFoundDelivery'] = 'You don’t have any active delivery yet.';
$string['overview'] = 'Overview';
$string['passinggrade'] = 'Percentage grade needed to pass course (%)';
$string['pluginname'] = 'Sertifier certificates & badges';
$string['privacy:metadata:sertifier'] = 'In order to integrate with sertifier, user data needs to be exchanged with that service.';
$string['privacy:metadata:sertifier:firstname'] = 'Your email is sent to the remote system to send credentials by email.';
$string['privacy:metadata:sertifier:fullname'] = 'Your full name is sent to the remote system to create credentials.';
$string['selectRecHeader'] = 'Select Recipients';
$string['selectedDelivery'] = 'Selected Delivery:';
$string['sertifier:addinstance'] = 'Add a certificate/badge instance';
$string['viewcredential'] = 'View Credential';
$string['viewmanagementdesc'] = 'You can view the recipients who currently have an active credential below. For more details about the credentials, please use the button to go to the reports page in the Sertifier app.';
