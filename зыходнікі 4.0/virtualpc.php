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
 * Strings for component 'virtualpc', language 'en', version '4.0'.
 *
 * @package     virtualpc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutuds'] = '<center><a href="{$a->umaurl}" target=_blank><img src="{$a->umalogo}"/></a></center><br /><a href="{$a->umaurl}" target=_blank>University of Malaga</a> has developed the open source Virtual PC module integrating Moodle and UDS.This integration is designed to simplify access to remote desktops from Moodle, providing a single login between the two systems, with easy creation and management of activities that allow access to different types of virtual computers.<br /><br /><em><a href="{$a->udsurl}" target=_blank>UDS</a></em> is a multiplatform virtual computer connection broker for:<br /><ul><li>eLearning<br /><li>VDI: Managing and Deploying Windows and Linux Virtual Desktops<br /><li>Manage users access to IT resources in Data Center or Cloud<br /><li>Consolidation of user services using new or existing modules</ul><br /><p>UDS Enterprise is used in different sectors and production environments such as education, public administration, call center, insurance, remote offices, etc.</p><p>More than 10,000 virtual desktops Windows and Linux are managed and deployed with UDS Enterprise every day, providing simplicity and flexibility to the VDI systems of different companies and entities.</p><p>Visit <a href="{$a->udsurl}" target=_blank>{$a->udsurl}</a>  for information on support for businesses.</p>';
$string['authsmallnameforactivity'] = 'UDS authenticator tag';
$string['authsmallnameforadmin'] = 'Administrator user UDS authenticator tag';
$string['configauthsmallnameforactivity'] = 'UDS authenticator tag where to create UDS users just before GOING from Moodle to UDS';
$string['configauthsmallnameforadmin'] = 'UDS authenticator tag to which the administrator user belongs';
$string['configfiltropool'] = 'Optional regular expression to filter from which UDS pools the teacher will be able to select when adding a Virtual PC activity';
$string['configgroupname'] = 'Name of the group in the UDS authenticator where the users will be created';
$string['configpassword'] = 'UDS user password with administrator permissions';
$string['configport'] = 'Port for REST requests';
$string['configurl'] = 'UDS server URL for REST requests (http[s]://hostname)';
$string['configusername'] = 'This module will use this UDS user to do REST requests to the UDS server. It must have administrator permissions.';
$string['courseorinstanceid'] = 'You must specify a course_module ID or an instance ID';
$string['errorconnection'] = 'Error connecting to Virtual PC UDS server: Try again later and, if the error remains, contact the moodle administrator';
$string['eventvirtualpcjoined'] = 'VirtualPC joined';
$string['filtropool'] = 'Pool filter regular expression';
$string['groupname'] = 'Group name';
$string['idpoolnotfound'] = 'Virtual PC type "{$a->poolname}" not found in UDS server. Contact Moodle administrator.';
$string['incorrectcourseid'] = 'Course Module ID was incorrect';
$string['incorrectcoursemodule'] = 'Course module is incorrect';
$string['joinvirtualpc'] = 'Access to Virtual PC';
$string['maxusers'] = 'Maximum {$a} users';
$string['misconfiguredcourse'] = 'Course is misconfigured';
$string['modifiable'] = 'The teacher can change the virtual PC selected';
$string['modulename'] = 'Virtual PC';
$string['modulename_help'] = '<div class="indent"><p><b>Virtual PC</b> It offers a virtual computer with an operating system and applications already installed selected by the teacher.</p><p>The module has been developed by the <a href="http://www.uma.es" target="_blank">Universidad de Málaga</a></p></div>';
$string['modulenameplural'] = 'Virtual PCs';
$string['password'] = 'UDS administrator user password';
$string['pluginadministration'] = 'Virtual PC Administration';
$string['pluginname'] = 'Virtual PC';
$string['poollabel'] = 'Select the virtual PC type:';
$string['poollabel_help'] = 'Select the virtual PC type from the list. Please note that there could be a maximum number of virtual PC of each type at once.';
$string['port'] = 'UDS server port number';
$string['url'] = 'UDS server URL';
$string['username'] = 'UDS administrator user';
$string['usernotenrolled'] = 'You are not allowed to access Virtual PC (your rol does not have capacity virtualpc:join)';
$string['viewpermission'] = 'You must have permission to VIEW this resource';
$string['virtualpc'] = 'Virtual PC';
$string['virtualpc:addinstance'] = 'Add Virtual PC activities';
$string['virtualpc:join'] = 'Access virtual PC';
$string['virtualpc:view'] = 'View Virtual PC activity';
$string['virtualpcerrorcreatingticketid'] = '{$a->username} can not access <b>{$a->poolname}</b>. Try again later and, if the problem remains, please contact the moodle administrator.';
$string['virtualpcfieldset'] = 'Virtual PC activity settings';
$string['virtualpchelp'] = '<p>After pressing the "Access to Virtual PC" button for the first time, the browser may show a new window to download a software needed to access the virtual PC. The download URL of the software is: {$a}</p>';
$string['virtualpcintro'] = '<b>Description:</b>';
$string['virtualpcname'] = 'Virtual PC name';
$string['virtualpcname_help'] = 'The Virtual PC name will be what will be seen on the course page linking to this activity';
$string['virtualpcnotfound'] = 'There is no virtual PC with this name on the UDS server';
$string['virtualpcresterror'] = 'Error connecting to Virtual PC UDS server: Error on "{$a}" REST request. Review virtualpc module settings';
