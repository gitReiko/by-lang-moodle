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
 * Strings for component 'local_learning_analytics', language 'en', version '4.0'.
 *
 * @package     local_learning_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_customfield_category'] = 'Rename the category';
$string['admin_customfield_category_hint'] = 'click on the pencil icon next to the category to rename';
$string['admin_customfield_info'] = 'You can change the name of the option in the course settings yourself, by renaming them on the following pages:';
$string['admin_customfield_no_manual_delete'] = 'Do not delete the category or the option. You may only rename them. If you want to remove the option change the status above instead.';
$string['admin_customfield_option'] = 'Rename the option';
$string['admin_customfield_option_hint'] = 'you may only change the name and description text';
$string['customfield_category_description'] = 'This category was automatically created by the Learning Analytics plugin (local_learning_analytics). You should not manually delete this.';
$string['customfield_category_name'] = 'Learning Analytics';
$string['customfield_field_description'] = 'Enabling adds the link "Usage Statistics" to your course navigation.';
$string['customfield_field_name'] = 'Enable Usage Statistics';
$string['dataprivacy_threshold_description'] = 'This value determines how many "data points" a data set needs to contain before the data is displayed.';
$string['general_settings'] = 'General Settings';
$string['help_faq'] = 'Frequently Asked Questions (FAQ)';
$string['help_faq_data_storage_answer'] = 'The data presented is from two data sources.
Both sources are stored in the internal Moodle database.
The first data source is the internal Moodle database, such as the number of students in the course (left box in the dashboard).
Some of these data sets can be viewed on other Moodle pages and are just visualized differently on these pages.
The second data source is data that is collected specifically for presentation on the Usage Statistics page.
All data collected for that purpose is stored anonymously and cannot be traced back to individual users.
Specifically, the following data is stored with each request in Moodle:';
$string['help_faq_data_storage_answer_list'] = 'Type of action (e.g. "Resource viewed")
Time (exact to the second)
Corresponding course in which the action happened
Corresponding context (e.g. the resource that was viewed)
Operating system and browser (e.g. "Windows 10" and "Firefox"), detailed browser or operating system versions are not stored';
$string['help_faq_data_storage_question'] = 'Which data is stored and displayed by the service?';
$string['help_faq_datapoints_answer'] = 'The shown numbers indicate the number of hits/accesses. These can vary greatly depending on the material type.
For example, only one hit is logged when a PDF is downloaded.
However, in the case of a test where the questions are spread over several pages, there will also be several hits logged in the course of a single test run.';
$string['help_faq_datapoints_question'] = 'Why are the number of hits so different for different types of materials?';
$string['help_faq_developer_answer'] = 'The Learning Analytics service is developed by the Center for Teaching and Learning Services at RWTH Aachen University.
The development is Open Source. Therefore you can check the used algorithms yourself. On the following pages you can access further information:';
$string['help_faq_developer_question'] = 'Who develops the service and where can I get further information?';
$string['help_faq_personal_data_answer'] = 'For data privacy reasons, the Learning Analytics service does not collect personalized data. Therefore, most of the displayed statistics (e.g. the most used activities) only contain information about how often a resource was accessed, but not by how many participants.
An exception to this are the statistics about participants and quizzes/assignments, which also display Moodle internal data.';
$string['help_faq_personal_data_question'] = 'Why are no personalized statistics, like clicks per user, displayed?';
$string['help_faq_privacy_threshold_answer'] = 'For data privacy reasons, aggregated data is only displayed if at least {$a} data points are present.';
$string['help_faq_privacy_threshold_question'] = 'Why do some values shown as "< {$a}"?';
$string['help_faq_visibility_answer'] = 'To ensure maximum transparency, the displayed data can be viewed by the course owners as well as by the participants of the course.';
$string['help_faq_visibility_question'] = 'Who can access the Usage Statistics?';
$string['help_faq_week_start_answer'] = 'The visualization in the dashboard depends on the setting "Course start date" in the course settings. If the date specified there does not correspond to the actual start of the lecture, the display in the dashboard will not be correct either.
The manager of this course can correct the setting in the course settings (in General / Course start date).';
$string['help_faq_week_start_question'] = 'Why does the first week in the dashboard graph not correspond to the actual start of the lecture?';
$string['help_take_tour'] = 'Take the interactive tour';
$string['help_text'] = 'The page "Usage Statistics" of the Learning Analytics service shows you the key metrics of your course.

The shown statistics are live and display data that was collected by the service as well as data from the Moodle course itself. All data collected by the Learning Analytics service is collected fully anonymously and cannot be traced back to users.';
$string['help_title'] = 'Help';
$string['hits'] = 'Hits';
$string['learners'] = 'Learners';
$string['learning_analytics'] = 'Learning Analytics';
$string['learning_analytics:view_statistics'] = 'Access usage statistics in courses';
$string['navigation_position_beforekey_description'] = 'Allows to specify where in the course navigation the link to the page is added. By default, the link is added before the first "section" node. Example value: <code>grades</code> to be shown before the link to grades. You can find the key of a node in the navigation by using the developer tools. Right-click on a link in the navigation, press <em>Inspect</em> and check the attribute <code>data-key</code> of the corresponding <code>a</code> element.';
$string['navigationlink'] = 'Usage Statistics';
$string['pluginname'] = 'Learning Analytics';
$string['privacy:metadata'] = 'This plugin does not store any personal data.';
$string['sessions'] = 'Sessions';
$string['setting_course_ids_description'] = 'Use this option, when you select the second option above to decide for which courses the user interface should be enabled.';
$string['setting_dashboard_boxes'] = 'Determines which boxes are displayed in the dashboard, in which order and how big the boxes are. The specification is in the format <code>reportname:width</code>, separated by commas. A line has a maximum width of 12, after which it breaks. Example: <code>learners:8,activities:4</code> displays two boxes in the dashboard, where the first one is much wider than the second one. In most cases, the value only needs to be changed if other subplugins are installed.';
$string['setting_status_course_customfield'] = 'Add option to the course settings so that teachers can enable it on their own';
$string['setting_status_description'] = 'This value sets whether the user interface should be activated and whether a links should be shown in the navigation. By default, the link and page are visible if logging is enabled for the course. You can use this option, if you want to enabled logging in all courses, but only want to enable the user interface on specific courses.';
$string['setting_status_option_disable'] = 'Hide navigation link and disable the page for all courses';
$string['setting_status_option_hidelink'] = 'Hide navigation link but keep the page enabled for all courses (only if you know the link, you can access the page)';
$string['setting_status_option_show_always'] = 'Show navigation link for all courses, even if logging is disabled for the course (only enable this, if you already logged data before)';
$string['setting_status_option_show_courseids'] = 'Show navigation link if course is specified below via course_ids';
$string['setting_status_option_show_if_enabled'] = 'Show navigation link if logging is enabled for the course';
$string['setting_student_enrols_groupby_description'] = 'This option defines which courses are merged together in the "Previous/Parallel course" page and which value is used to show the names.';
$string['setting_student_rolenames_description'] = 'In case the role(s) for students/users in a course is not <code>student</code>, you can specify the corresponding role name. In case there are multiple roles that students have, use a single comma. Example: <code>student,customrole</code>';
$string['show_full_list'] = 'Expand list';
$string['subplugintype_lalog'] = 'L.A. Log';
$string['subplugintype_lalog_plural'] = 'L.A. Logs';
$string['subplugintype_lareport'] = 'L.A. Report';
$string['subplugintype_lareport_plural'] = 'L.A. Reports';
$string['tour_activities'] = 'The last view shows the three most used activities of the last 7 days.

By clicking on the link you can view details of the course activities.';
$string['tour_box_hits'] = 'This indicator shows the number of actions within the last 7 days. Below you can see the changes over the previous 7 days.

By clicking on the link you can open a heat map, which visualizes the number of actions over the whole semester.';
$string['tour_box_learners'] = 'The first indicator shows the total number of participants. Below the large number, the change from the previous week is shown.';
$string['tour_box_learnerslink'] = 'Click on the link to view more information about the participants.';
$string['tour_box_quiz_assign'] = 'This shows the number of quiz attempts and assignment submissions of the last 7 days. Below, the change from the previous 7 days is shown again.

By clicking on the link you can view details about the quizzes and assignments of the course.';
$string['tour_dashboard_boxes'] = 'In the bottom area, important key figures of the course are displayed.

In addition, each box contains a link through which further information is available.';
$string['tour_dashboard_graph'] = 'The graph shows the number of all actions in the respective week.

If it is a running course, the beginning of the current week is marked by a dotted line. Numbers of the current week are not displayed.';
$string['tour_more_information'] = 'The interactive tour is now complete. We hope we could give you a good overview of the features.

More answers to frequently asked questions can be found on the help page.';
$string['tour_title'] = 'Learning Analytics';
