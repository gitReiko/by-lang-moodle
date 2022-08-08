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
 * Strings for component 'forumngfeature_delete', language 'en', version '4.0'.
 *
 * @package     forumngfeature_delete
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmdeletediscussion'] = 'Are you sure you want to delete this discussion?';
$string['confirmundeletediscussion'] = 'Are you sure you want to undelete this discussion?';
$string['deleteandemail'] = 'Delete and email';
$string['deletediscussion'] = 'Delete discussion';
$string['emailcontenthtml'] = 'This is a notification to advise you that a discussion you have
started  with the following details has been deleted by \'{$a->firstname} {$a->lastname}\':<br />
<br />
Subject: {$a->subject}<br />
Forum: {$a->forum}<br />
Module: {$a->course}<br/>
<br/>';
$string['emailcontentplain'] = 'This is a notification to advise you that a discussion you have
started with the following details has been deleted by \'{$a->firstname} {$a->lastname}\':

Subject: {$a->subject}
Forum: {$a->forum}
Module: {$a->course}';
$string['notifycontributors'] = 'Notify other contributors';
$string['notifycontributors_help'] = 'Notify contributors who have posted or replied to posts';
$string['notifycontributorsemailcontenthtml'] = 'This is a notification to advise you that  a discussion you have contributed to
with the following details has been deleted by \'{$a->firstname} {$a->lastname}\':<br />
<br />
Subject: {$a->subject}<br />
Forum: {$a->forum}<br />
Module: {$a->course}<br/>
<br/>';
$string['notifycontributorsemailcontentplain'] = 'This is a notification to advise you that a discussion you have contributed to
with the following details has been deleted by \'{$a->firstname} {$a->lastname}\':

Subject: {$a->subject}
Forum: {$a->forum}
Module: {$a->course}';
$string['pluginname'] = 'Delete/undelete discussion';
$string['undeletediscussion'] = 'Undelete discussion';
