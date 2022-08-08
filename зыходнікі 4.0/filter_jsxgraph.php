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
 * Strings for component 'filter_jsxgraph', language 'en', version '4.0'.
 *
 * @package     filter_jsxgraph
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HTMLentities'] = 'HTML entities';
$string['HTMLentities_desc'] = 'Decide wether HTMLentities like "&", "<",... are supported within the JavaScript code for JSXGraph.';
$string['convertencoding'] = 'convert encoding';
$string['convertencoding_desc'] = 'Decide wether the encoding of the text between the JSXGraph tags should be converted to UTF-8 or not.';
$string['divid'] = 'div id';
$string['divid_desc'] = 'ID of the division containing JSXGraph. Number is added automatically, e.g. box0, box1,...';
$string['error'] = 'ERROR:';
$string['error0.99.5'] = 'Unfortunately the JSX filter does not support JSXGraph core version 0.99.5 due to a CDN error. Please contact your admin.';
$string['error0.99.6'] = 'Unfortunately the JSX filter does not support JSXGraph core version 0.99.6. Please contact your admin.';
$string['errorNotFound_post'] = 'on CDN. The JSXGraph core could not be loaded. Please contact your admin.';
$string['errorNotFound_pre'] = 'There is no JSX version';
$string['filtername'] = 'JSXGraph';
$string['globalJS'] = 'global JavaScript';
$string['globalJS_desc'] = 'Define a general JavaScript code that is loaded in each JSXGraph tag before the code contained in it. To type special characters like "<" use HTMLentities.';
$string['height'] = 'height';
$string['height_desc'] = 'Height of JSXGraph container.';
$string['jsxfromserver'] = 'JSXGraph from server';
$string['jsxfromserver_desc'] = 'Select whether the plugin is using the server version of JSXGraph core, or the locally provided one supplied with the plugin. <b>Attention:</b> there must be entered a valid version number in "<a href="#admin-filter_jsxgraph_serverversion">server version</a>"!';
$string['no'] = 'no';
$string['privacy'] = 'This plugin is only used to display JSXGraph constructions typed in the editor using the jsxgraph tag. It does not store or transmit any personally identifiable information. The possibly externally integrated library jsxgraphcore.js does not process any personal data either.';
$string['serverversion'] = 'server version';
$string['serverversion_desc'] = 'If "<a href="#admin-filter_jsxgraph_jsxfromserver">JSXGraph from server</a>" is checked, the version entered here is loaded by the server. Look at <a href="http://jsxgraph.uni-bayreuth.de/wp/previousreleases/" target="_blank">http://jsxgraph.uni-bayreuth.de/wp/previousreleases/</a> to see, which version is loaded from CDN. Type only the version number (0.99.5 and 0.99.6 are not supported).';
$string['width'] = 'width';
$string['width_desc'] = 'Width of JSXGraph container.';
$string['yes'] = 'yes';
