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
 * Strings for component 'local_ws_enrolcohort', language 'en', version '4.0'.
 *
 * @package     local_ws_enrolcohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinstance:201'] = 'Cohort enrolment instance added.';
$string['addinstance:400'] = 'Could not add cohort enrolment instance.';
$string['addinstance:courseissite'] = 'Can not add instance to the site course.';
$string['addinstance:usingdefaultname'] = 'Using system generated name.';
$string['cohortenrolmethodnotavailable'] = 'The cohort enrolment method is not available.';
$string['cohortnotavailableatcontext'] = 'Cohort cannot be added to this course.';
$string['cohortnotexists'] = 'Cohort does not exist.';
$string['cohortnullcontext'] = 'Cohort cannot be added because the context is null.';
$string['coursenotexists'] = 'Course does not exist.';
$string['deleteinstance:200'] = 'Cohort enrolment instance deleted.';
$string['deleteinstance:400'] = 'Could not delete cohort enrolment instance.';
$string['enrolcohortalreadysyncedwithrole'] = 'A cohort enrol instance for this role already exists';
$string['enrolcohortalreadysyncedwithrole:message'] = 'A cohort enrol instance with id {$a->enrolid} is already synchronised with the role {$a->roleid}';
$string['enrolmentmethodnotavailable'] = 'Could not instantiate enrol_cohort.';
$string['getinstance:200'] = 'Found {$a->numberofenrolmentinstances} cohort enrolment instances for the course with id {$a->courseid}.';
$string['getinstances:200'] = 'Found {$a->numberofenrolmentinstances} cohort enrolment instances in {$a->numberofcourses} courses (All courses).';
$string['getinstances:400'] = 'Could not get cohort enrolment instances.';
$string['getinstances:courseissite'] = 'Can not get instances for the site course.';
$string['groupnotexists'] = 'Group does not exist.';
$string['instancegroupnone'] = 'Enrol instance group none.';
$string['instancenotexists'] = 'Unknown enrolment instance.';
$string['invalidcourse'] = 'Course is invalid!';
$string['invalidcourse:issite'] = 'Can not add instance to the site course.';
$string['invalidstatus'] = 'Invalid enrolment instance status!';
$string['invalidstatus:message'] = 'Possible values for enrolment instance status are: {$a->enabled} - Enabled, {$a->disabled} - Disabled. Got {$a->actual}.';
$string['objectnotfound'] = 'Object does not exist!';
$string['objectnotfound:message'] = 'Could not find {$a->object} with {$a->key} {$a->value}';
$string['pluginname'] = 'Extended enrol cohort webservices';
$string['privacy:metadata'] = 'The local webservices cohort enrolment plugin does not store any personal data.';
$string['rolenotassignablehere'] = 'Role is not assignable here.';
$string['rolenotexists'] = 'Role does not exist.';
$string['statusinvalid'] = 'Invalid status {$a}. Possible statuses are: 0 - active, 1 - not active.';
$string['unavailableatcontext'] = 'Object is not available at this context!';
$string['unavailableatcontext:message'] = '{$a->object} with id {$a->id} is not {$a->word} at this context.';
$string['unknownstatuscode'] = 'Unknown status code {$a}.';
$string['updateinstance:200'] = 'Cohort enrolment instance updated.';
$string['updateinstance:400'] = 'Could not update cohort enrolment instance.';
$string['updateinstance:nochange'] = 'No changes were made to the cohort enrolment instance.';
$string['usermissinganycapability'] = 'User is missing one of the following capabilities at the course context: {$a}.';
$string['usermissingrequiredcapability'] = 'User is missing the required capability \'{$a}\' at the course context.';
