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
 * Strings for component 'filter_cloudfront_signurl', language 'en', version '4.0'.
 *
 * @package     filter_cloudfront_signurl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['distributionurl'] = 'Distribution base URLs';
$string['distributionurldesc'] = 'The cloudfront URLs of the distributions e.g. d111111abcdef8.cloudfront.net';
$string['errornokeyid'] = 'Missing Key Pair ID';
$string['errornoprivatekey'] = 'Missing Key Private SSH Key File';
$string['errornourl'] = 'No distribution URL provided';
$string['filtername'] = 'Cloudfront URL Signer';
$string['keyid'] = 'Key Pair ID';
$string['keyiddesc'] = 'The ID of the AWS Key Pair to use for signing';
$string['privatekey'] = 'SSH Private Key';
$string['privatekeydesc'] = 'SSH Private Key file to use for signing';
$string['validduration'] = 'Validity Duration';
$string['validdurationdesc'] = 'How long should the signed URL be valid for';
