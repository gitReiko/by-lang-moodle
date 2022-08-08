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
 * Strings for component 'ltisource_ecohub', language 'en', version '4.0'.
 *
 * @package     ltisource_ecohub
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abb_not_avaiable'] = 'N/A';
$string['cachedef_mod_ltisource_ecohub_configfile'] = 'Cache for EcoHub LTI Source configuration file location';
$string['cachedef_mod_ltisource_ecohub_configsettings'] = 'EcoHub LTI Source configuration settings cache, excluding LTI map';
$string['cachedef_mod_ltisource_ecohub_ltimap'] = 'LTI parameter map cache for EcoHub LTI Source';
$string['config_error_asdomain_invalid'] = 'Configuration file {$a} mandatory field as_domain is not a valid url';
$string['config_error_config_not_found'] = 'Configuration file config.json not found';
$string['config_error_file_newer'] = 'Configuration file {$a->filename} is newer ({$a->newversion}) than supported ({$a->supportedversion})';
$string['config_error_file_not_found'] = 'Configuration file {$a} not found';
$string['config_error_file_not_json'] = 'Configuration file {$a} is not a valid JSON file';
$string['config_error_missing_fields'] = 'Configuration file {$a} is missing mandatory fields (version, as_domain)';
$string['config_error_title'] = 'EcoHub configuration';
$string['ecohubltiinvalid'] = 'An error occured during LTI launch. {$a}';
$string['ecohubltilaunch'] = 'An error occured during LTI launch. The parameters for EcoHub could not be resolved.';
$string['launch_enabled'] = 'Enabled';
$string['launch_enabled_desc'] = 'Must be enabled to launch LTI on Laerdal EcoHub.';
$string['lti_param_invalid_empty_error'] = 'The parameter {$a} must contain a value.';
$string['lti_param_invalid_error'] = 'The parameter {$a->param} with value {a->value} is not valid.';
$string['lti_param_invalid_not_guid_error'] = 'The parameter {$a->param} is {$a->value}. Expected a GUID.';
$string['lti_param_invalid_not_in_range_error'] = 'The parameter {$a->param} is {$a->value} and is out of range. Range is {$a->range}.';
$string['lti_param_not_allowed_error'] = 'The parameter {$a->param} must not be modified.';
$string['pluginhelp'] = 'The EcoHub LTI Source plugin is like the External tool plugin. It makes it possible to add a Laerdal Medical course as an activity.';
$string['pluginname'] = 'EcoHub LTI Source';
$string['settings_as_domain'] = 'Endpoint for supplemental configuration';
$string['settings_developer_file_info'] = 'Config file information';
$string['settings_developer_file_modified'] = 'Last modified: {$a}';
$string['settings_developer_file_name'] = 'Full file name: {$a}';
$string['settings_developer_heading'] = 'Developer Mode';
$string['settings_file_version'] = 'Configuration version obtained from config file';
$string['settings_general_heading'] = 'General Settings';
$string['settings_general_readonly'] = 'The configuration file specifies a read-only configuration that cannot be edited.';
$string['settings_param_map_description'] = 'The expression **{$a->mapping}** is evaluated and inserted into LTI parameter **{$a->param}** before the course is launched. For this user the mapping is: **{$a->expression}**';
$string['settings_param_map_description_error'] = 'Error: The expression **{$a->mapping}** cannot be evaluated!';
$string['settings_param_map_description_static'] = 'The constant **{$a->mapping}** is inserted into LTI parameter **{$a->param}** before the course is launched.';
$string['settings_param_map_heading'] = 'Parameter Mapping';
$string['settings_param_map_title'] = 'LTI map entry';
$string['settings_param_map_title_warning'] = 'Evaluation error!';
$string['settings_param_map_with'] = '=';
