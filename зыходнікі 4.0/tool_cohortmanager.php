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
 * Strings for component 'tool_cohortmanager', language 'en', version '4.0'.
 *
 * @package     tool_cohortmanager
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_breadcrumb'] = 'Add new rule';
$string['addcondition'] = 'Add a condition';
$string['addrule'] = 'Add a new rule';
$string['broken'] = 'Broken';
$string['brokenruleswarning'] = 'There are some broken rules require your attention.  <br /> To fix a broken rule you should remove all broken conditions. <br />Sometimes a rule becomes broken when matching users SQL failed. In this case all condition are ok, but the rule is marked as broken. You should check Moodle logs for "Matching users failed" event and related SQL errors. <br />Please note, that in any case you have to re-save the rule to mark it as unbroken.';
$string['cachedef_rules'] = 'Cohort manager rules cache.';
$string['cohortid'] = 'Cohort';
$string['cohortid_help'] = 'A cohort to manage as part of this rule. Only cohorts that are not managed by other plugins are displayed in this list.';
$string['cohortmanager:managerules'] = 'Manage rules';
$string['condition_cohort_membership'] = 'Cohort membership';
$string['condition_cohort_membership_broken_description'] = 'Condition is broken. Using the same cohort that the given rule is configured to manage to.';
$string['condition_cohort_membership_description'] = 'A user {$a->operator} {$a->locations}';
$string['condition_user_custom_profile'] = 'User custom profile field';
$string['condition_user_profile'] = 'User standard profile field';
$string['conditionchnagesnotapplied'] = 'Condition changes are not applied until you save the rule form';
$string['conditionformtitle'] = 'Rule condition';
$string['conditions'] = 'Conditions';
$string['conditionsformtitle'] = 'Rule conditions';
$string['delete_breadcrumb'] = 'Delete rule';
$string['delete_confirm'] = 'Are you sure you want to delete rule {$a}?';
$string['delete_confirm_condition'] = 'Are you sure you want to delete this condition?';
$string['description'] = 'Description';
$string['description_help'] = 'As short description of this rule';
$string['edit_breadcrumb'] = 'Edit rule';
$string['enabled'] = 'Rule enabled';
$string['enabled_help'] = 'Only enabled rules will be processed';
$string['event:conditioncreated'] = 'Condition created';
$string['event:conditiondeleted'] = 'Condition deleted';
$string['event:conditionupdated'] = 'Condition updated';
$string['event:matchingfailed'] = 'Matching users failed';
$string['event:rulecreated'] = 'Rule created';
$string['event:ruledeleted'] = 'Rule deleted';
$string['event:ruleupdated'] = 'Rule updated';
$string['include_missing_data_help'] = 'Some users may not have a custom field data set yet. This option includes those user in the final result.';
$string['includeusersmissingdata'] = 'include users with missing data';
$string['includingmissingdatadesc'] = '(including users with missing data)';
$string['invalidfieldvalue'] = 'Invalid field value';
$string['ismemberof'] = 'is member of';
$string['isnotempty'] = 'is not empty';
$string['isnotmemberof'] = 'is not member of';
$string['managecohorts'] = 'Manage cohorts';
$string['managerules'] = 'Manage dynamic cohort rules';
$string['matchingusers'] = 'Matching users';
$string['name'] = 'Rule name';
$string['name_help'] = 'A human readable name of this rule.';
$string['operator'] = 'Operator';
$string['or'] = 'OR';
$string['pleaseselectcohort'] = 'Please select a cohort';
$string['pleaseselectfield'] = 'Please select a field';
$string['pluginname'] = 'Cohort manager';
$string['privacy:metadata:tool_cohortmanager'] = 'Information about cohort rules created or updated by a user';
$string['privacy:metadata:tool_cohortmanager:name'] = 'Rule name';
$string['privacy:metadata:tool_cohortmanager:usermodified'] = 'The ID of the user who created or updated a rule';
$string['privacy:metadata:tool_cohortmanager_cond'] = 'Information cohort rule conditions created or updated by a user';
$string['privacy:metadata:tool_cohortmanager_cond:ruleid'] = 'ID of the rule name';
$string['privacy:metadata:tool_cohortmanager_cond:usermodified'] = 'The ID of the user who created or updated a condition';
$string['processinchunks'] = 'Process in chunks';
$string['processinchunks_help'] = 'If this option is enabled, users will be added and removed from cohort in chunks. This will significantly improve processing performance. However, using this option will supress triggering events when users added or removed from cohort.';
$string['processrulestask'] = 'Process all rules';
$string['profilefield'] = 'Profile field';
$string['ruledisabledpleasereview'] = 'Newly created or updated rules are disabled by default. Please review the rule below and enable it when ready.';
$string['usersforrule'] = 'Users match rule "{$a}"';
