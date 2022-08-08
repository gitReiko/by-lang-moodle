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
 * Strings for component 'courseguide', language 'en', version '4.0'.
 *
 * @package     courseguide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addguide'] = 'Add guide';
$string['addguidehelp'] = 'To add a guide add an activity from any course main page.';
$string['addtemplate'] = 'Add template';
$string['any'] = 'Any';
$string['author'] = 'Original author';
$string['cancel'] = 'Cancel';
$string['cannotaccessguide'] = 'You can not access the guide, the guide organization is probably set to a different organization. Contact your administrator.';
$string['collapsable'] = 'Collapsable';
$string['confirmdeleteguide'] = 'Delete guide confirmation';
$string['confirmdeleteguidetext'] = 'Do you really want to delete this guide: {$a->name} ?';
$string['confirmdeletetemplate'] = 'Delete template confirmation';
$string['confirmdeletetemplatetext'] = 'Do you really want to delete this template: {$a->name} ?';
$string['course'] = 'Course';
$string['courseguide'] = 'Course guide';
$string['courseguide:addinstance'] = 'Add a new course guide';
$string['courseguide:editguide'] = 'Can edit a Course Guide guide';
$string['courseguide:edittemplate'] = 'Can edit a Course Guide template';
$string['courseguide:submit'] = 'Submit a course guide';
$string['courseguide:view'] = 'View a course guide';
$string['courseguide:viewguide'] = 'Can view a Course Guide guide';
$string['courseguide:viewtemplate'] = 'Can view a Course Guide template';
$string['courseguidefieldset'] = 'Custom example fieldset';
$string['courseguidename'] = 'Course guide name';
$string['courseguidename_help'] = 'This is the content of the help tooltip associated with the course guide name field. Markdown syntax is supported.';
$string['defaultdisplaymode'] = 'Default display mode';
$string['defaultguidename'] = 'Suggested guide name';
$string['delete'] = 'Delete';
$string['description'] = 'Description';
$string['displaymode'] = 'Display mode';
$string['editguide'] = 'Edit guide';
$string['edittemplate'] = 'Edit template';
$string['guide'] = 'Guide';
$string['guides'] = 'Guides';
$string['hide'] = 'Hide';
$string['inline'] = 'Inline';
$string['manageguides'] = 'Manage guides';
$string['managetemplates'] = 'Manage templates';
$string['managetemplatesdesc'] = '<strong>Hide</strong>: the template will not be not available anymore to create the guides. However existing guides are still available.<br/>
<strong>Delete</strong>: it will delete the template - only available when no activities use the template.<br/>
<strong>Edit</strong>: only the name, organization and description will be editable when a guide activity has been created with this template.<br/>
<strong>Guides</strong>: only available when a guide activity has been created with this template.';
$string['modulename'] = 'Course guide';
$string['modulename_help'] = 'The course guide module allows to create guide forms template to be used by teachers to create any sort of guide for the student.';
$string['modulenameplural'] = 'Course guides';
$string['moodle'] = 'Link';
$string['mustaddguide'] = 'Click on "Edit Guide" to select a template and create the guide.';
$string['name'] = 'Name';
$string['noguide'] = 'No guides have been created yet.';
$string['notemplate'] = 'No templates - your administrator must create and show at least one template first.';
$string['organization'] = 'Organization';
$string['organizations'] = 'Organizations';
$string['pluginadministration'] = 'Course guide administration';
$string['pluginname'] = 'Course guide';
$string['previewguide'] = 'Preview';
$string['show'] = 'Show';
$string['template'] = 'Template';
$string['templateexample'] = '<pre><i>This is an example, feel free to edit as you want.</i></pre>
	<h3>Advices for student</h3>
	<p>if you are a student this document will help you to know how to study this course.</p>
	<pre><i>The following line is a editor placeholder. It will be replaced by a Moodle HTML editor in the "Add/Edit guide" page:</i></pre>
	<p>[1:html]</p>
	<br/>
	<p>You must check these requirements:</p>
	<pre><i>The following lines are also an editor placeholder,however this more complex placeholder contains some default HTML (here requirements) that will be displayed inside the editor. It helps you to give some examples to the student.</i></pre>
	<p>[2:html:BEGIN]</p>
	<ul>
		<li>requirements A</li>
		<li>requirements B</li>
		<li>requirements C</li>
	</ul>
	<p>[2:html:END]</p>
	<br/>
	<p>We recommend you read these following files:</p>
	<pre><i>The following line is a file manager placeholder. It will be replaced by a Moodle file manager in the "Add/Edit guide" page:</i></pre>
	<p>[3:files]</p>
	<br/>
	<p>General study advices:</p>
	<pre><i>The following line is a link placeholder. It will be replaced by 2 text fields (url and link name) in the "Add/Edit guide" page:</i> </pre>
	<p>[4:link]</p>
	<br/>
	<pre><i>The following line is a link placeholder with a prefilled link name (only text will be displayed, html will be ignored):</i> </pre>
	<p>[5:link:BEGIN]<br/>Click here to access the teacher own webpage<br/>[5:link:END]</p>
	<p><br/>Thank You,<br>University of Science</p>';
$string['viewguides'] = 'Guide list';
$string['warningconfigmoderationdesc'] = '<br/><strong>Note:</strong> this setting is actually the moderation setting from the Moderator Guide block.
The Course Guide activity uses this Moderator Guide block setting. We display it on this page for your convenience, so you can save it from here too.';
$string['warningdeletetemplate'] = 'WARNING: you are also going to delete the following guides:';
$string['warningprofilerestrictiondesc'] = '<br/><strong>Note:</strong> this setting is actually the restriction setting from the Moderator Guide block.
The Course Guide activity uses this Moderator Guide block setting. We display it on this page for your convenience, so you can save it from here too.';
