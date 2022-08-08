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
 * Strings for component 'filter_codepen', language 'en', version '4.0'.
 *
 * @package     filter_codepen
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'CodePen';
$string['preview_desc'] = 'Save your settings to see the result.';
$string['privacy:metadata'] = 'The CodePen plugin does not store any personal data.';
$string['settingdefaulttab'] = 'Default tabs';
$string['settingdefaulttab_css'] = 'CSS';
$string['settingdefaulttab_desc'] = 'Default tabs to display.<br>
Maximum 2 at time, and only one if you set "Embed version" to "1".<br>
"Result" tab is displayed if nothing is selected.';
$string['settingdefaulttab_html'] = 'HTML';
$string['settingdefaulttab_js'] = 'JavaScript';
$string['settingdefaulttab_result'] = 'Result';
$string['settingembedactivelinkcolor'] = 'Active link color';
$string['settingembedactivelinkcolor_desc'] = 'Active tab text color.';
$string['settingembedactivetabcolor'] = 'Active tab color';
$string['settingembedactivetabcolor_desc'] = 'Active tab background color.';
$string['settingembedborder'] = 'Border';
$string['settingembedborder_desc'] = 'Border style.';
$string['settingembedborder_thick'] = 'Thick';
$string['settingembedborder_thin'] = 'Thin';
$string['settingembedbordercolor'] = 'Border color';
$string['settingembedbordercolor_desc'] = 'Embed Pen border color. Ignored if "Border" is set to "none".';
$string['settingembedlinklogocolor'] = 'Link logo color';
$string['settingembedlinklogocolor_desc'] = 'CodePen edit logo color.';
$string['settingembedtabbarcolor'] = 'Tab bar color';
$string['settingembedtabbarcolor_desc'] = 'Tab bar background color.';
$string['settingembedtablinkcolor'] = 'Tab link color';
$string['settingembedtablinkcolor_desc'] = 'Tab bar text color.';
$string['settingembedtheme'] = 'Embed Theme';
$string['settingembedtheme_dark'] = 'Dark';
$string['settingembedtheme_desc'] = 'Embed Pen theme.';
$string['settingembedtheme_light'] = 'Light';
$string['settingembedversion'] = 'Embed version';
$string['settingembedversion_desc'] = 'Embed Pen version.';
$string['settingformats'] = 'Apply to formats';
$string['settingformats_desc'] = 'The filter will be applied only if the original text was inserted in one of the selected formats.';
$string['settingheading'] = 'Information';
$string['settingheading_info'] = '<p>This is a text filter to embed a CodePen from <a href="http://codepen.io">codepen.io</a> into a text area in Moodle. Simply enable the plugin and paste the direct URL to a Pen in your content (or heading if enabled). A standard URL looks like this: <pre>http://codepen.io/[username]/pen/[Pen ID]</pre> For example: <pre>http://codepen.io/thedannywahl/pen/Gbdaj</pre></p><h4>Notes</h4><ul><li>CodePen does not have an API so we cannot manipulate the appearance of embeds on a per-Pen basis, so settings here are global.</li><li>If a user does not have javascript enabled a text fallback is provided with a link to the Pen.</li><li>Links to Pens are escaped if you do not want to embed. E.g.:<br/><code>&lt;a href="http://codepen.io/thedannywahl/pen/Gbdaj"&gt;http://codepen.io/thedannywahl/pen/Gbdaj&lt;/a&gt;</code></li><li>Make sure that if you have the "urltolink" filter enabled that the CodePen filter is listed first because links are escaped.</li><li>Do not use www. or cdpn.io short-link, these are not valid pen URLs.  Visiting them in a browser always redirects to the full Pen URL path (as exampled above).</li><li>This filter only works with the /pen/ URL.  It will not embed from other views like /full/ /live/ etc...</li></ul>';
$string['settingheight'] = 'Pen height';
$string['settingheight_desc'] = 'Set the height of all embedded Pens.';
$string['theme_override'] = 'Theme override';
$string['theme_override_desc'] = 'Following settings can be used to override theme.';
