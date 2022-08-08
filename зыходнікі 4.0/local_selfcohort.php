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
 * Strings for component 'local_selfcohort', language 'en', version '4.0'.
 *
 * @package     local_selfcohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecohorts'] = 'Cohorts with self registering';
$string['availablecohortsregister'] = 'Select which cohorts you would like to be part of:';
$string['cohortsintro'] = 'On this tab, you select the cohorts you want this plugin to manage. Once selected, you will not be able to manually update the members of these cohorts anymore. Furthermore, any users who are currently a member of these cohorts will be removed from the cohorts and the cohorts are then filled from scratch with the users matching the rule(s) you create with this plugin.<br>
If you decide to stop managing a cohort with this plugin and deselect it here, all users who are currently a member of this cohort will keep being a member. Additionally, you will be able to manually update the members of this cohort again.';
$string['invisiblecohortsnote'] = 'Please note: This plugin handles invisible cohorts completely equal to visible cohorts. Thus, the list of cohorts also includes cohorts which have been created as invisible.';
$string['members'] = 'Members';
$string['membersintro'] = 'On this tab, you can see the users who are currently members of the cohorts which are managed by this plugin.';
$string['messageprovider:sendnotifications'] = 'Send notifications to cohorts managed by self cohort local plugin';
$string['nocohorts'] = 'No cohorts available at the moment.';
$string['nousers'] = 'This cohort does not, currently, contain any users';
$string['pluginname'] = 'Self cohort';
$string['privacy:metadata'] = 'This plugin does not store any user data.';
$string['registerintro'] = 'In this page you can select the cohorts you want to make part of.';
$string['selectcohorts'] = 'Select cohorts to be managed';
$string['selfregisterintrostring'] = 'To edit the message displayed to users, edit the string with the identifier \'registerintro\' of this module (local_selfcohort).';
$string['selfregisterlink'] = 'The link to self register in cohorts is: <a href="{$a}">{$a}</a>';
