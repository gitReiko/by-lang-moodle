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
 * Strings for component 'tool_cmdlinetools', language 'en', version '4.0'.
 *
 * @package     tool_cmdlinetools
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_assignment_capa_cli_help'] = 'add capability to take in charge visibility control of feedback or assignment plugins on contexts
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php add_assignment_capa

Options:
-h, --help                 print out this help';
$string['add_assignmentcapa_cli_capxcreated'] = 'capability {$a} created';
$string['add_assignmentcapa_cli_choose_plugin'] = 'choose the plugin for which a new add instance capability while be created :';
$string['add_assignmentcapa_cli_mustbeint'] = 'entered value must be an int';
$string['add_assignmentcapa_cli_noassignplugin'] = 'no assignment plugins';
$string['allow_assign_cli_allowed'] = 'Assign role allowed';
$string['allow_assign_cli_disallowed'] = 'Assign role disallowed';
$string['allow_assign_cli_help'] = 'Allow assign a target role for a role
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php allow_assign role targetrole

Options:
	-h, --help              print out this help';
$string['allow_assign_cli_rolexnotexists'] = 'Role {$a} not exists';
$string['apply_defaults_settings_to_all_plugins_cli_help'] = 'Apply default plugin settings to non defined plugin settings such like upgradesettings.php
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php apply_defaults_settings_to_all_plugins
Options:
-h, --help              print out this help';
$string['apply_defaults_settings_to_plugin_cli_notimplementedtype'] = 'plugin type {$a} not implemented';
$string['apply_defaults_settings_to_plugin_cli_pluginnotexists'] = 'plugin of type {$a->type} with name {$a->name} does not exist';
$string['apply_defaults_settings_to_plugin_cli_settingset'] = 'plugin {$a->plugin} key {$a->key} value {$a->value} set!';
$string['badnumberarguments'] = 'Bad number of arguments';
$string['badstoreinstancename_set_cache_cli'] = 'Bad store instance name mapping {$a} : does not exists or not usable for this cache mode';
$string['capabilitynotexists_set_capability_cli'] = 'Capability $a does not exists';
$string['clifailed_add_assignment_capa_cli'] = 'Add assignment capability failed';
$string['clifailed_allow_assign_cli'] = 'Allow assign role failed';
$string['clifailed_apply_defaults_settings_to_all_plugins_cli'] = 'Apply default plugin settings failed';
$string['clifailed_cmdlinecli'] = 'Command line moodle tool error';
$string['clifailed_create_role_cli'] = 'Set role context level failed';
$string['clifailed_create_user_cli'] = 'Create user failed';
$string['clifailed_delete_js_cache_cli'] = 'Delete js cache failed';
$string['clifailed_delete_plugin_cli'] = 'Plugin deletion failed';
$string['clifailed_delete_theme_cache_cli'] = 'Theme cache deletion failed';
$string['clifailed_hard_delete_js_cache_cli'] = 'Hard delete js cache failed';
$string['clifailed_hard_delete_theme_cache_cli'] = 'Theme cache hard deletion failed';
$string['clifailed_hideshow_plugin_cli'] = 'Hide/show plugin failed';
$string['clifailed_passwordaltmain_generator_cli'] = 'Passwordaltmain generation failed';
$string['clifailed_remove_assignment_capa_cli'] = 'Schedule task failed';
$string['clifailed_role_assign_cli'] = 'Assign role to user failed';
$string['clifailed_set_cache_cli'] = 'Cache mapping setter failed';
$string['clifailed_set_capability_cli'] = 'Set capability failed';
$string['clifailed_set_config_cli'] = 'Config setter failed';
$string['clisuccessfull_add_assignment_capa_cli'] = 'Add assignment capability sucessfully completed';
$string['clisuccessfull_allow_assign_cli'] = 'Sucessfully allow assign role';
$string['clisuccessfull_apply_defaults_settings_to_all_plugins_cli'] = 'Sucessfully apply default plugin settings';
$string['clisuccessfull_create_role_cli'] = 'Sucessfully create role';
$string['clisuccessfull_create_user_cli'] = 'Sucessfully create user';
$string['clisuccessfull_delete_js_cache_cli'] = 'Delete js cache sucessfull';
$string['clisuccessfull_delete_plugin_cli'] = 'PLugin deleted sucessfully';
$string['clisuccessfull_delete_theme_cache_cli'] = 'Theme cache deleted sucessfully';
$string['clisuccessfull_hard_delete_js_cache_cli'] = 'Hard delete js cache sucessfull';
$string['clisuccessfull_hard_delete_theme_cache_cli'] = 'Theme cache hardly deleted sucessfully';
$string['clisuccessfull_hideshow_plugin_cli'] = 'Hide/show plugin sucessfully proceed';
$string['clisuccessfull_passwordaltmain_generator_cli'] = 'Passwordaltmain generated sucessfully';
$string['clisuccessfull_remove_assignment_capa_cli'] = 'Remove assignment capability sucessfully completed';
$string['clisuccessfull_role_assign_cli'] = 'Sucessfully assign role to user';
$string['clisuccessfull_role_set_context_level_cli'] = 'Sucessfully set role context level';
$string['clisuccessfull_schedule_task_cli'] = 'Schedule task sucessfully completed';
$string['clisuccessfull_set_cache_cli'] = 'Cache mapping set';
$string['clisuccessfull_set_capability_cli'] = 'Capability set';
$string['clisuccessfull_set_config_cli'] = 'Config Set';
$string['clititle_'] = 'cli title';
$string['clititle_add_assignment_capa_cli'] = 'Add assignment capability';
$string['clititle_allow_assign_cli'] = 'Allow assign role';
$string['clititle_apply_defaults_settings_to_all_plugins_cli'] = 'Apply default plugin settings';
$string['clititle_cmdlinecli'] = 'Command line moodle tool';
$string['clititle_create_role_cli'] = 'Create role';
$string['clititle_create_user_cli'] = 'Create user';
$string['clititle_delete_js_cache_cli'] = 'Delete js cache';
$string['clititle_delete_plugin_cli'] = 'Delete plugin';
$string['clititle_delete_theme_cache_cli'] = 'Delete theme cache';
$string['clititle_hard_delete_js_cache_cli'] = 'Hard delete js cache';
$string['clititle_hard_delete_theme_cache_cli'] = 'Hard delete theme cache';
$string['clititle_hideshow_plugin_cli'] = 'Hide/show plugin';
$string['clititle_passwordaltmain_generator_cli'] = 'Passwordaltmain generator';
$string['clititle_remove_assignment_capa_cli'] = 'Remove assignment capability';
$string['clititle_role_assign_cli'] = 'Assign role to user';
$string['clititle_role_set_context_level_cli'] = 'Set role context level';
$string['clititle_schedule_task_cli'] = 'Schedule task utility';
$string['clititle_set_cache_cli'] = 'Cache mapping setter for cache definition';
$string['clititle_set_capability_cli'] = 'Set capability';
$string['clititle_set_config_cli'] = 'Config setter';
$string['cmdlinecli_help'] = 'command line tool to launch moodle commands :
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php [argument]
Argument(optional) : the name of a command to execute (listed bellow)
{$a}

Options:
-h, --help                 print out this help';
$string['create_role_cli_createrolexid'] = 'Role created with id {$a}';
$string['create_role_cli_help'] = 'Create a role with the given shortname
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php create_role shortname

Where shortname must be unique
Options:
	-h, --help              print out this help
	-n, --name				role name
	-d, --description		role description
	-a, --archetype			role archetype';
$string['create_role_cli_rolexexists'] = 'Role {$a} already exists';
$string['create_user_cli_createuserxid'] = 'User created with id {$a}';
$string['create_user_cli_help'] = 'Create a user with the given username
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php create_user username

Where username must be unique
Options:
	-h, --help              print out this help
	-a, --auth				auth method (default empty)
	-p, --password			password if necessary
	-e, --email				email (default empty)
	-c, --city				city (default empty)
	-C, --country			country (default empty)
	-f, --firstname			firstname
	-l, --lastname			lastname
	-i, --idnumber			idnumber (default empty)
	-d, --digest			maildigest (default 0)';
$string['create_user_cli_userxexists'] = 'User {$a} already exists';
$string['definitionmappingsrequired_set_cache_cli'] = 'defintion and mammpings are required';
$string['delete_js_cache_cli_help'] = 'Delete js cache
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php delete_js_cache

Options:
-h, --help            Print out this help';
$string['delete_plugin_cli_badtype'] = 'bad plugin type';
$string['delete_plugin_cli_cantremovexplugin'] = 'can\'t remove {$a} plugins';
$string['delete_plugin_cli_help'] = 'Delete a plugin

Usage:
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php delete_plugin plugintype pluginname

where :
plugintype is
		mod,
		block,
		qtype,
		qbehaviour,
		enrol,
		filter,
		editor,
		auth,
		license,
		repository,
		courseformat,
		assignfeedback or assignsubmission
		tool
pluginname is the name of the plugin (name of plugin directory)

Options:
-h, --help                 print out this help';
$string['delete_plugin_cli_notyetimplemented'] = 'not yet implemented because of hard impact';
$string['delete_plugin_cli_undeletableplugintype'] = '{$a->type} {$a->name} can\'t be deleted';
$string['delete_plugin_cli_undeletablerequiredplugintype'] = '{$a->type} {$a->name} can\'t be deleted because it\'s required';
$string['delete_plugin_cli_unreconizedplugintype'] = 'unrecognized {$a->type} {$a->name}';
$string['delete_theme_cache_cli_help'] = 'Delete theme cache
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php delete_theme_cache
Options:
-h, --help            Print out this help';
$string['hard_delete_js_cache_cli_help'] = 'Hardly delete js cache
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php hard_delete_cache
Options:
-h, --help            Print out this help';
$string['hard_delete_theme_cache_cli_help'] = 'hardly delete theme cache

Options:
-h, --help            Print out this help';
$string['hideshow_plugin_cli_authpluginnotexists'] = 'plugin {$a->type} {$a->name} does not exist';
$string['hideshow_plugin_cli_badplugintype'] = 'bad plugin type';
$string['hideshow_plugin_cli_courseformatcantenabledisable'] = 'can\'t enable/disable course format {$a}';
$string['hideshow_plugin_cli_courseformatnotexists'] = 'course format {$a} does not exist';
$string['hideshow_plugin_cli_editorpluginnotexists'] = 'editor {$a} does not exist';
$string['hideshow_plugin_cli_enrolmethodnotexists'] = 'enrol method {$a} not exists';
$string['hideshow_plugin_cli_filterpluginnotexists'] = 'filter {$a} does not exist';
$string['hideshow_plugin_cli_help'] = 'hide show a plugin
Usage:
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php hideshow_plugin plugintype pluginname hideshow

where :
plugintype is
		mod,
		block,
		qtype,
		qbehaviour,
		enrol,
		filter,
		editor,
		auth,
		license,
		repository,
		courseformat,
		assignfeedback or assignsubmission
pluginname is the name of the plugin (name of plugin directory)
hideshow is an int value 0 for false or off (filter plugin) , 1 for true or on (filter plugin), -9999 for disabled (filter plugin)

Options:
-h, --help                 print out this help';
$string['hideshow_plugin_cli_licensecantenabledisable'] = 'can\'t enable/disable license {$a}';
$string['hideshow_plugin_cli_licensepluginnotexists'] = 'editor {$a} does not exist';
$string['hideshow_plugin_cli_parametervalues'] = 'possible show/hide values are {$a}';
$string['hideshow_plugin_cli_pluginnotexists'] = '{$a->type} {$a->name} not exists';
$string['hideshow_plugin_cli_qbehaviourcantenabledisable'] = 'can\'t enable/disable qbehaviour {$a}';
$string['hideshow_plugin_cli_qbehaviournotexits'] = 'qbehaviour {$a} does not exist';
$string['hideshow_plugin_cli_qtypenotexits'] = 'qtype {$a} does not exist';
$string['hideshow_plugin_cli_repositorynotimplemented'] = 'not implemented because require repository setting form';
$string['manager_notexistingfilename'] = 'not existing filename {$a}';
$string['namevaluerequired_set_config_cli'] = 'you must enter either --name et --value parameters';
$string['notexistingdefinition_set_cache_cli'] = 'Not existing cache definition {$a}';
$string['passwordaltmain_generator_cli_help'] = 'Generate a passwordaltmain key for config.php  \\$CFG->passwordsaltmain
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php passwordaltmain_generator
Options:
-h, --help            Print out this help';
$string['permissionvalues_set_capability_cli'] = 'permission must be an int as follow {$CAP_INHERIT}, {$CAP_ALLOW}, {$CAP_PREVENT}, {$CAP_PROHIBIT}';
$string['pluginname'] = 'command line manager';
$string['remove_assignment_capa_cli_help'] = 'remove capability to take in charge visibility control of feedback or assignment plugins on contexts
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php remove_assignment_capa

Options:
-h, --help                 print out this help';
$string['remove_assignmentcapa_cli_cannotunassignrolex'] = 'cannot unassign capability on role {$a}';
$string['remove_assignmentcapa_cli_capaxnotremoved'] = 'capability $capaslist {$a} not removed';
$string['remove_assignmentcapa_cli_capxremoved'] = 'capability {$a} removed';
$string['remove_assignmentcapa_cli_choose_plugin'] = 'choose the plugin for which a new add instance capability while be removed :';
$string['remove_assignmentcapa_cli_mustbeint'] = 'entered value must be an int';
$string['remove_assignmentcapa_cli_noassignplugin'] = 'no assignment plugins';
$string['role_assign_cli_contextxnotexists'] = 'Context {$a} does not exists';
$string['role_assign_cli_help'] = 'Assign a given role to a given  user in a given context id
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php role_assign username shortname contextid

Where
		username : user username
		shortname : role shortname
		contextid : context id
Options:
	-h, --help              print out this help';
$string['role_assign_cli_rolexnotexists'] = 'Role {$a} does not exists';
$string['role_assign_cli_userxnotexists'] = 'User {$a} does not exists';
$string['role_set_context_level_cli_help'] = 'Set role context level
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php set_role_context_level shortname contextlevels

Where :
		shortname must be unique
		contextlevels must be a list of int separated by , values CONTEXT_COURSE (50), CONTEXT_COURSECAT(40), CONTEXT_SYSTEM(10),CONTEXT_BLOCK(80), CONTEXT_MODULE(70), CONTEXT_USER(30)

Options:
	-h, --help              print out this help';
$string['role_set_context_level_cli_rolexnotexists'] = 'Role {$a} already exists';
$string['schedule_task_cli_badtaskname'] = 'task {$a} not exists';
$string['schedule_task_cli_help'] = 'schedule task enable to set parameters for a given moodle scheduled task
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php schedule_task taskname [options]
taskname written as follow :  \\plugin\\task\\taskname e.g \\auth_cas\\task\\sync_task
Options:
-h, --help              print out this help
-M, --minute			    * Every minute (default value)
    						*/5 Every 5 minutes
    						2-10 Every minute between 2 and 10 past the hour (inclusive)
    						2,6,9 2 6 and 9 minutes past the hour

-H, --hour					* Every hour (default value)
    						*/2 Every 2 hours
    						2-10 Every hour from 2am until 10am (inclusive)
    						2,6,9 2am, 6am and 9am

-d, --day					* Every day (default value)
    						*/2 Every 2nd day
    						1 The first of every month
    						1,15 The first and fifteenth of every month

-m, --month					* Every month (default value)
    						*/2 Every second month
    						1 Every January
    						1,5 Every January and May

-w, --dayofweek				* Every day (default value)
    						0 Every Sunday
    						6 Every Saturday
    						1,5 Every Monday and Friday

-x, --disabled				0 not disabled (default value), 1 disabled

-r, --restoretodefaults		0 not restoring to default (default value), 1 restoring to default other options wiln not be taking into account';
$string['schedule_task_cli_tasklist'] = 'available taskname are :
{$a}';
$string['set_cache_cli_help'] = 'set cache mappings to a given cache definition
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php set_cache definition mappings

Where :
		definition : cache definition containing component and area separated by / . e.g core/userselections
		mappings : store names instance mapping separated by , and ordered e.g default_application,my_memcache_instance
Options:
-h, --help                 print out this help';
$string['set_capability_cli_help'] = 'set a capability for a role in a particular context

Usage:
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php set_capabiliy.php capability permission context role

where :
capability is an existing moodle capability
permission is capability permission as int value {$CAP_INHERIT}, {$CAP_ALLOW}, {$CAP_PREVENT}, {$CAP_PROHIBIT}
context is value to apply that capability
role is shortname role to apply that capability

Options:
-h, --help                 print out this help';
$string['set_config_cli_help'] = 'set a config var
Usage :
		\\$sudo -u www-data /usr/bin/php admin/cli/admin/tool/cmdlinetools/cli/cmdline_manager.php set_config [options]

Options:
-h, --help                 print out this help
-n, --name=config_name     config name if no prompt mode as config_param_name if general config parameter or plugintype_pluginname/config_param_name if plugin param name
-v, --value=config_value   config value if no prompt mode
-c, --check 				check if config name exists';
$string['settingsnamenotexists_set_config_cli'] = 'setting of name {$a} does not exists';
$string['toofewargs'] = 'to few arguments';
