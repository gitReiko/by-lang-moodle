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
 * Strings for component 'assignsubmission_babelium', language 'en', version '4.0'.
 *
 * @package     assignsubmission_babelium
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskey'] = 'Babelium access key';
$string['accesskey_help'] = 'A unique key that identifies all your RPC-API requests against the Babelium server';
$string['apidomain'] = 'Babelium API domain';
$string['apidomain_help'] = 'The domain of the RPC-API that allows us to access the data stored in the Babelium server';
$string['apiendpoint'] = 'Babelium API endpoint';
$string['apiendpoint_help'] = 'The place inside the RPC-API domain that is used to manage all the calls';
$string['babelium'] = 'Babelium submissions';
$string['babeliumApiErrorCode200'] = 'Babelium Error 200. Malformed response';
$string['babeliumApiErrorCode400'] = 'Babelium Error 400. Malformed request';
$string['babeliumApiErrorCode403'] = 'Babelium Error 403. Wrong authorization credentials';
$string['babeliumApiErrorCode404'] = 'Babelium Error 404. Method not found. Invalid parameters';
$string['babeliumApiErrorCode500'] = 'Babelium Error 500. Internal server error';
$string['babeliumAvailableRecordableExercises'] = 'Babelium exercises';
$string['babeliumAvailableRecordableExercises_help'] = 'Choose the exercise you wish to assign to your students for later evaluation';
$string['babeliumChooseRecMethod'] = 'Choose recording method';
$string['babeliumChooseRole'] = 'Choose a role';
$string['babeliumChooseSubLang'] = 'Choose subtitle language';
$string['babeliumErrorConfigParameters'] = 'Babelium configuration parameters not set';
$string['babeliumMicOnly'] = 'Microphone only';
$string['babeliumNoExerciseAvailable'] = 'No exercises available';
$string['babeliumRecordAgain'] = 'Record Again';
$string['babeliumStartRecording'] = 'Start Recording';
$string['babeliumStopRecording'] = 'Stop Recording';
$string['babeliumViewExercise'] = 'View Exercise';
$string['babeliumViewRecording'] = 'View Recording';
$string['babeliumWebcamMic'] = 'Webcam and microphone';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this submission method will be enabled by default for all new assignments.';
$string['enabled'] = 'Babelium submissions';
$string['enabled_help'] = 'If enabled, students are able to save video-responses as their submission.';
$string['forcertmpt'] = 'Force RTMPT';
$string['forcertmpt_help'] = 'Enabling this option forces the player to use RTMPT (encapsulated RTMP) by default. Otherwise, the player first attempts to connect using the RTMP port (1935)';
$string['loginfo'] = 'Submission responseID: {$a->responseid}, responseHash: {$a->responsehash}';
$string['pluginname'] = 'Babelium submissions';
$string['responsehashnotset'] = 'You are attempting to submit an empty submission. Please review your submission and try again.';
$string['secretaccesskey'] = 'Babelium secret access key';
$string['secretaccesskey_help'] = 'The secret key that is used to validate your identity. Should never be put in the clear on useragent scripts';
$string['serverdomain'] = 'Babelium server domain';
$string['serverdomain_help'] = 'The domain of the Babelium server in which the resources are going to be stored';
$string['serverport'] = 'Babelium server port';
$string['serverport_help'] = 'Babelium server port';
