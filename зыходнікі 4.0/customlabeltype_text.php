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
 * Strings for component 'customlabeltype_text', language 'en', version '4.0'.
 *
 * @package     customlabeltype_text
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Simple Text';
$string['family'] = 'generic';
$string['initiallyvisible'] = 'Initally visible';
$string['pluginname'] = 'Course element: Simple Text';
$string['readless'] = 'Read less...';
$string['readmore'] = 'Read more...';
$string['readmorecontent'] = 'Read more content';
$string['template'] = '<!-- standard default template for unclassed label. Don\'t change -->
<div class="custombox-text">
<%%textcontent%%>
</div>
<%if %%readmorecontent%% %>
<div class="custombox-text readmorelink">
    <a href="javascript:togglecustomstring(\'<%%customid%%>\', \'Read more...\', \'Read less...\')" ><span id="customctl<%%customid%%>"><%%initialstring%%></span></a>
</div>
<div class="custombox-text readmore" id="custom<%%customid%%>">
<%%readmorecontent%%>
</div>
<%endif %>
<script type="text/javascript">
setupcustomstring(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'Read more...\', \'Read less...\');
</script>';
$string['text:addinstance'] = 'Can add an instance';
$string['text:view'] = 'Can view the content';
$string['textcontent'] = 'Content';
$string['typename'] = 'Simple Text';
