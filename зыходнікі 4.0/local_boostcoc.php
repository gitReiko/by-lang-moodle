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
 * Strings for component 'local_boostcoc', language 'en', version '4.0'.
 *
 * @package     local_boostcoc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activefiltershiddencourses'] = 'Hidden courses';
$string['activefiltershintnotshowdisabled'] = 'This course list shows all courses which you are enrolled in. Filters and hidden courses are not applied.';
$string['activefiltershintnotshowenabledactivefilters'] = 'Active course filters:';
$string['activefiltershintnotshowenabledchangelink'] = 'Change filters or re-show hidden courses';
$string['activefiltershintnotshowenablednoactivefilters'] = 'No active course filters';
$string['pluginname'] = 'Boost course overview on campus';
$string['privacy:metadata'] = 'The Boost course overview on campus provides extended functionality to Moodle users, but does not store any personal data itself. It consumes the personal data stored by the Course overview on Campus (block_course_overview_campus) plugin.';
$string['setting_addactivefiltershint'] = 'Add active filters hint';
$string['setting_addactivefiltershint_desc'] = 'Enabling this setting will add a node to the end of the mycourses list in Boost\'s nav drawer telling the user why the mycourses list looks as it is (e.g. which filters and if hidden courses produced the current mycourses list).';
$string['setting_addchangefilterslink'] = 'Add change filters link';
$string['setting_addchangefilterslink_desc'] = 'Enabling this setting will add a node to the end of the mycourses list in Boost\'s nav drawer telling the user where to change the current filters and hidden courses.';
$string['setting_changefilterslinktarget'] = 'Change filters link target';
$string['setting_changefilterslinktarget_desc'] = 'With this setting, you control the change filters link\'s target. You can set it to the site home page or to the user\'s dashboard. This matches the two locations where block_course_overview_campus can be placed.<br />Please note: To avoid user confusion, please make sure that block_course_overview_campus is always placed on the target page by placing it there as a sticky block.<br /><em>This setting is only processed when "Add change filters link" is activated.</em>';
$string['setting_disableinprogressfilter'] = 'Disable Moodle built-in in-progress filter';
$string['setting_disableinprogressfilter_desc'] = 'Moodle\'s standard behavior is to only display in-progress courses in the mycourses list in Boost\'s nav drawer. The course list in block_course_overview_campus displays all courses regardless of their in-progress status. In combination, this may lead to confusing results, e.g. courses visible in block_course_overview_campus but not in Boost\'s nav drawer. Enabling this setting disables Moodle\'s standard in-progress filter.';
$string['setting_disableinprogressfilterperformancehint'] = 'Please note: If you enable this setting and have also enabled the setting <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, showing all course nodes takes more time and you should consider disabling the navshowmycoursecategories setting.';
$string['setting_enablenotshown'] = 'Don\'t show filtered or hidden courses';
$string['setting_enablenotshown_desc'] = 'Enabling this setting will modify the mycourses list in Boost\'s nav drawer to only show the courses which are currently shown in block_course_overview_campus according to the user\'s current filter settings and to the courses which the user has marked as hidden.';
$string['setting_enablenotshownperformancehint'] = 'Please note: If you enable this setting and have also enabled the setting <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, removing the course nodes takes more time and you should consider disabling the navshowmycoursecategories setting.';
$string['setting_enablenotshowntechnicalhint'] = 'Technically, this is done by setting the course node\'s showinflatnavigation attribute to false. Thus, the course node will only be hidden from the nav drawer, but it will remain in the navigation tree and can still be accessed by other parts of Moodle.';
$string['setting_filterstatusheading'] = 'Filter status';
$string['setting_generalfunctionalityheading'] = 'General functionality';
