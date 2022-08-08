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
 * Strings for component 'aulaplanetastudynot', language 'en', version '4.0'.
 *
 * @package     aulaplanetastudynot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all_courses'] = 'All courses';
$string['all_subjects'] = 'All subjects';
$string['all_topics'] = 'All topics';
$string['always'] = 'Always';
$string['aulaplaneta'] = 'aulaPlaneta - Learning Notebook';
$string['aulaplaneta_activities'] = 'aulaPlaneta - Learning Notebook Activities';
$string['aulaplaneta_administration'] = 'aulaPlaneta - Learning Notebook Administration';
$string['aulaplaneta_endpoint'] = 'aulaPlaneta - Learning Notebook Launch Endpoint';
$string['aulaplaneta_errormsg'] = 'The tool returned the following error message: "{$a}"';
$string['aulaplaneta_in_new_window'] = 'Your activity has opened in a new window';
$string['aulaplaneta_intro'] = 'Activity Description';
$string['aulaplaneta_launch_error'] = 'An error occurred when launching the aulaPlaneta - Learning Notebook:';
$string['aulaplaneta_launch_error_tool_request'] = '<p>
To submit a request for an administrator to complete the tool configuration, click <a href="{$a->admin_request_url}" target="_top">here</a>.
</p>';
$string['aulaplaneta_launch_error_unsigned_help'] = '<p>
        This error may be a result of a missing consumer key and shared secret for the tool provider.
    </p>
    <p>
        If you have a consumer key and shared secret, you may enter it when editing the aulaPlaneta - Learning Notebook instance (make sure advanced options are visible).<br />
        Alternatively, you may create a course level tool provider configuration <a href="{$a->course_tool_editor}">here</a>.
    </p>';
$string['aulaplaneta_name'] = 'Activity Name';
$string['aulaplaneta_parameters'] = 'aulaPlaneta - Learning Notebook Launch Parameters';
$string['aulaplaneta_resource_title'] = 'aulaPlaneta - Learning Notebook Title';
$string['aulaplanetastudynot:addcoursetool'] = 'Add new aulaPlaneta - Learning Notebook activities';
$string['aulaplanetastudynot:addinstance'] = 'Add new aulaPlaneta - Learning Notebook activities';
$string['aulaplanetastudynot:create_from_ap'] = 'Create an aulaPlaneta Study Notebook on Moodle from aP platform';
$string['aulaplanetastudynot:delete_from_ap'] = 'Delete an aulaPlaneta Study Notebook  on Moodle from aP platform';
$string['aulaplanetastudynot:grade'] = 'View grades returned by the aulaPlaneta - Learning Notebook';
$string['aulaplanetastudynot:manage'] = 'Be an Instructor when the tool is launched';
$string['aulaplanetastudynot:modify_from_ap'] = 'Customize aulaPlaneta Study Notebook  on Moodle from aP platform';
$string['aulaplanetastudynot:view'] = 'Launch aulaPlaneta - Learning Notebook activities';
$string['course'] = 'Course';
$string['default'] = 'Default';
$string['delete'] = 'Delete';
$string['display_description'] = 'Display activity description when launched';
$string['display_description_help'] = 'If selected, the activity description (specified above) will display above the tool provider\'s content.

The description may be used to provide additional instructions for launchers of the tool, but it is not required.

The description is never displayed when the tool\'s launch container is in a new window.';
$string['display_name'] = 'Display activity name when launched';
$string['display_name_help'] = 'If selected, the activity name (specified above) will display above the tool provider\'s content.

It is possible that the tool provider may also display the title. This option can prevent the activity title from
being displayed twice.

The title is never displayed when the tool\'s launch container is in a new window.';
$string['embed'] = 'Embed';
$string['embed_no_blocks'] = 'Embed, without blocks';
$string['errormisconfig'] = 'Misconfigured tool. Please ask your Moodle administrator to fix the configuration of the tool.';
$string['event_course_module_launched'] = 'Course module launched';
$string['event_course_module_viewed'] = 'Course module viewed';
$string['event_instances_list_viewed'] = 'Instances list viewed';
$string['extensions'] = 'aulaPlaneta - Learning Notebook Extension Services';
$string['filterconfig'] = 'aulaPlaneta - Learning Notebook administration';
$string['filtername'] = 'aulaPlaneta - Learning Notebook';
$string['id'] = 'id';
$string['indicate_course_at_least'] = 'You must indicate the course to be able to access the preview';
$string['miscellaneous'] = 'Miscellaneous';
$string['modulename'] = 'AulaPlaneta - Learning Notebook';
$string['modulename_help'] = 'The aulaPlaneta Learning Notebook allows access to the whole content of the unit so that students have the reference material at their disposal at all times during the development of the subject. Teachers can also modify it partially or completely.
<p>
Use the search engine to locate the Learning Notebook of each unit. Select Course, Subject and Topic, and you will access the list of all the units that cover completely the curriculum.
</p>';
$string['modulename_link'] = 'https://bit.ly/2GHJiof';
$string['modulenameplural'] = 'aulaPlaneta - Learning Notebook';
$string['modulenamepluralformatted'] = 'aulaPlaneta - Learning Notebook Instances';
$string['never'] = 'Never';
$string['new_window'] = 'New window';
$string['noaccesstoken'] = 'Can\'t generate access token';
$string['noaulaplanetas'] = 'There are no aulaplaneta instances';
$string['organizationdescr'] = 'Organization Description';
$string['organizationid'] = 'Centre ID';
$string['organizationid_help'] = 'A unique identifier for this Centre.

If this field is left blank, the host name of this Moodle site will be used as the default value.';
$string['organizationurl'] = 'Centre URL';
$string['organizationurl_help'] = 'The base URL of this Moodle instance.

If this field is left blank, a default value will be used based on the site configuration.';
$string['pluginadministration'] = 'aulaPlaneta - Learning Notebook administration';
$string['pluginname'] = 'aulaPlaneta - Learning Notebook';
$string['press_to_submit'] = 'Press to launch this activity';
$string['preview'] = 'Preview';
$string['return_to_course'] = 'Click <a href="{$a->link}" target="_top">here</a> to return to the course.';
$string['secret_admin'] = 'Shared Secret';
$string['secret_admin_help'] = 'The shared secret can be thought of as a secret used to authenticate access to the tool. It should be provided
along with the consumer key from the tool provider.

Tools which do not require secure communication from Moodle and do not provide additional services (such as grade reporting)
may not require a shared secret.';
$string['select_one'] = 'Select one';
$string['subject'] = 'Subject';
$string['toggle_debug_data'] = 'Toggle Debug Data';
$string['topic'] = 'Topic';
$string['update'] = 'Update';
