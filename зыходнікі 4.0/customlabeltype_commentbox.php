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
 * Strings for component 'customlabeltype_commentbox', language 'en', version '4.0'.
 *
 * @package     customlabeltype_commentbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['comment'] = 'Comment';
$string['commentbox:addinstance'] = 'Can add an instance';
$string['commentbox:view'] = 'Can view the content';
$string['configtypename'] = 'Enable subtype Comment boxes';
$string['family'] = 'generic';
$string['initiallyvisible'] = 'Initially visible';
$string['pluginname'] = 'Course element : Comment';
$string['readmorecontent'] = 'Read more content';
$string['template'] = '<div class="custombox-commentbox">
<%%comment%%>
</div>
<%if %%readmorecontent%% %>
<div class="custombox-commentbox readmorelink">
    <a href="javascript:togglecustomstring(\'<%%customid%%>\', \'Read more...\', \'Read less...\')"><span id="customctl<%%customid%%>"><%%initialstring%%></span></a>
</div>
<div class="custombox-commentbox readmore" id="custom<%%customid%%>">
<%%readmorecontent%%>
</div>
<%endif %>
<script type="text/javascript">
setupcustomstring(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'Read more...\', \'Read less...\');
</script>';
$string['typename'] = 'Comment boxes';
