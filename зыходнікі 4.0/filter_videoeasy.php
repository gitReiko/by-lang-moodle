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
 * Strings for component 'filter_videoeasy', language 'en', version '4.0'.
 *
 * @package     filter_videoeasy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Bundle';
$string['cleartemplate'] = 'Clear template';
$string['defaultposterimage'] = 'Default poster image';
$string['defaultposterimage_desc'] = 'The standard default poster image is just a grey box. Here you can upload a custom image that better suits your site. A default poster image will only be shown if the player template specifies it.';
$string['extensionheading'] = 'File Extension Handlers';
$string['extensions'] = 'File Extensions';
$string['extensions_desc'] = 'A CSV (comma separated value) list of file extensions this filter can parse.';
$string['filterdescription'] = 'Convert video links strings into players';
$string['filtername'] = 'Video Easy';
$string['handle'] = 'Handle {$a}';
$string['player'] = 'Player {$a}';
$string['player_flowplayer'] = 'Flowplayer';
$string['player_jplayervideo'] = 'JPlayer (Video)';
$string['player_jwplayer'] = 'JW Player';
$string['player_mediaelement'] = 'MediaElement.js';
$string['player_playereight'] = 'Player 8';
$string['player_playereleven'] = 'Player 11';
$string['player_playerfifteen'] = 'Player 15';
$string['player_playerfourteen'] = 'Player 14';
$string['player_playernine'] = 'Player 9';
$string['player_playerseven'] = 'Player 7';
$string['player_playersix'] = 'YouTube Lightbox';
$string['player_playerten'] = 'Player 10';
$string['player_playerthirteen'] = 'Player 13';
$string['player_playertwelve'] = 'Player 12';
$string['player_sublimevideo'] = 'Sublime Video';
$string['player_videojs'] = 'Video.js';
$string['pluginname'] = 'Video Easy';
$string['presets'] = 'Autofill template with a Preset';
$string['presets_desc'] = 'VideoEasy comes with some default presets you can use out of the box, or to help you get started with your own template. Choose one of those here, or just create your own template from scratch. You can export a template as a bundle by clicking on the green box above. You can import a bundle by dragging it onto the green box.';
$string['privacy:metadata'] = 'The VideoEasy filter plugin does not store any personal data.';
$string['sitedefault'] = 'Site Default';
$string['template'] = 'template';
$string['template_desc'] = 'Put the template here, define variables by surrounding them with @@ marks at either e. eg @@variable@@';
$string['templatealternate'] = 'Alternate content';
$string['templatealternate_desc'] = 'Content that can be used when the custom and uploaded CSS and javascript content is not available. Currently this is used when the template is processed by a webservice, probably for content on the mobile app';
$string['templatecount'] = 'Template Count';
$string['templatecount_desc'] = 'The number of templates you can have. Default is 15.';
$string['templatedefaults'] = 'defaults';
$string['templatedefaults_desc'] = 'Default values for custom variables in the template/script. Usually just width, and height. Enter comma delimited sets of name=value pairs. eg width=800,height=900,feeling=joy';
$string['templateheading'] = 'Settings for {$a}';
$string['templateinstructions'] = 'Instructions (template {$a})';
$string['templateinstructions_desc'] = 'Use this area for any instructions or description of the template. It is only shown here and on the templates list table.';
$string['templatekey'] = 'Template Key';
$string['templatekey_desc'] = 'The id that identifies this template. Must be unique on the site. Users never see this. If you change it you will need to reallocate the template/player to the appropriate file extension. Try not to change it. Use alphanumeric characters only (no spaces)';
$string['templatename'] = 'Template Name';
$string['templatename_desc'] = 'The name of this template.';
$string['templatepageheading'] = 'Template: {$a}';
$string['templatepageheading_handlers'] = 'General Settings';
$string['templaterequire_amd'] = 'Load via AMD';
$string['templaterequire_amd_desc'] = 'AMD is a javascript loading mechanism. If you upload or link to javascript libraries in your template, you might have to uncheck this. It only applies if on Moodle 2.9 or greater';
$string['templaterequirecss'] = 'CSS URL';
$string['templaterequirecss_desc'] = 'This is the URL of any required CSS file. Try to start with // .';
$string['templaterequirejs'] = 'javascript URL';
$string['templaterequirejs_desc'] = 'This is the URL of any required javascript library. Try to start with // .';
$string['templaterequirejsshim'] = 'Require Shim export';
$string['templaterequirejsshim_desc'] = 'Leave blank unless you know what shimming is';
$string['templates'] = 'Templates';
$string['templatescript'] = 'load script';
$string['templatescript_desc'] = 'Put the load script (if any) here, define variables by surrounding them with @@ marks at either end. eg @@variable@@';
$string['templatestyle'] = 'Custom CSS (template {$a})';
$string['templatestyle_desc'] = 'Enter any custom CSS that your template uses here. Template variables will not work here. Just plain old css.';
$string['templateupdated'] = '{$a} Poodll Templates Updated.';
$string['templateuploadjsshim'] = 'Upload Shim export';
$string['templateuploadjsshim_desc'] = 'Leave blank unless you know what shimming is';
$string['templateversion'] = 'The version of this template {$a}';
$string['templateversion_desc'] = 'When sharing templates it is best to maintain a clear version per release. The version format is up to you.';
$string['updateall'] = 'Update all templates';
$string['updatetoversion'] = 'Update to version: {$a}';
$string['uploadcss'] = 'Upload CSS';
$string['uploadcss_desc'] = 'You can upload one CSS file which will be loaded for your template. Only one.';
$string['uploadjs'] = 'Upload JS';
$string['uploadjs_desc'] = 'You can upload one js library file which will be loaded for your template. Only one.';
$string['useplayer'] = '{$a} Player';
$string['useplayerdesc'] = 'The player selected will use the information from the appropriate template.';
$string['videoeasytemplatesadmin'] = 'VideoEasy Templates Admin';
