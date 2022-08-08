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
 * Strings for component 'block_yammer', language 'en', version '4.0'.
 *
 * @package     block_yammer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocktitle'] = 'Block title';
$string['config_help'] = 'You can display My Feed, a Group Feed, a Topic Feed, a User Feed or an OG object feed. Users will need to log in to view the feed.  Additionally, the feed is restricted to users of the network specified.</br>To retrieve the feed ID and network permalink, please navigate to the feed in the <a href="https://www.yammer.com" target="_blank">Yammer web application</a> and copy it from the URL.</br>Detailed documentation for the embedded feed specifcation is available <a href="https://developer.yammer.com/docs/embed" target="_blank">here</a>.';
$string['defaultgroupid'] = 'Default Group ID';
$string['defaultgroupid_help'] = 'The default group ID to post to.';
$string['defaultnetwork'] = 'Default network';
$string['defaultnetwork_desc'] = 'The default Yammer network for this site. This is usually your company email domain, e.g. username@<strong>companyname.com</strong>. All new Yammer block instances will use this by default.';
$string['defaulttocanonical'] = 'Default to Canonical Network';
$string['defaulttocanonical_desc'] = 'Default to Canonical Network';
$string['defaulttocanonical_help'] = 'Default to Canonical Network';
$string['feed_settings'] = 'Feed display settings';
$string['feedid'] = 'Feed ID';
$string['feedid_help'] = 'The feed ID to display.';
$string['feedtype'] = 'Feed Type';
$string['feedtype_help'] = 'The type of feed to display.This can be <em>my</em>, <em>group</em>, <em>topic</em>, <em>user</em>, or <em>open-graph</em>.';
$string['fetch'] = 'Fetch metadata';
$string['fetch_desc'] = 'Fetch OpenGraph object metadata';
$string['fetch_help'] = 'Fetch OpenGraph object metadata';
$string['height'] = 'Height';
$string['height_help'] = 'Set the height of the feed in pixels (px). This may be over-ridden by the theme or the block placement.';
$string['hideNetworkName'] = 'Hide network in header';
$string['hideNetworkName_desc'] = 'Hide network name in the header.';
$string['ignore_canonical_url'] = 'Ignore canonical URL';
$string['ignore_canonical_url_desc'] = 'Ignore the OpenGraph object canonical URL';
$string['ignore_canonical_url_help'] = 'Ignore canonical URL';
$string['network'] = 'Network permalink';
$string['network_help'] = 'This is the name of your Network, e.g. yammer.com/<strong>my-company-name.net</strong>.';
$string['notconfigured'] = 'This block instance has not been configured';
$string['og-audio'] = 'Audio';
$string['og-department'] = 'Department';
$string['og-document'] = 'Document';
$string['og-file'] = 'File';
$string['og-folder'] = 'Folder';
$string['og-image'] = 'Image';
$string['og-page'] = 'Page';
$string['og-person'] = 'Person';
$string['og-place'] = 'Place';
$string['og-project'] = 'Project';
$string['og-team'] = 'Team';
$string['og-video'] = 'Video';
$string['ogtype'] = 'OpenGraph type';
$string['ogtype_help'] = 'Select the OpenGraph object type.';
$string['ogurl'] = 'Open Graph URL';
$string['ogurl_help'] = 'If the feed type is <em>open-graph</em>, the feed URL must be specified.';
$string['opengraph_settings'] = 'OpenGraph settings';
$string['pluginname'] = 'Yammer';
$string['private'] = 'Mark as private';
$string['private_desc'] = 'Mark the OpenGraph object as private';
$string['private_help'] = 'Mark as private';
$string['prompttext'] = 'Prompt Text';
$string['prompttext_help'] = 'You can encourage your users to post more by providing custom publisher watermark text.';
$string['scriptsource'] = 'Script source';
$string['scriptsource_desc'] = 'The location of the Yammer embed script. This should be left as default.';
$string['showfooter'] = 'Show footer';
$string['showfooter_desc'] = 'Show the footer.';
$string['showheader'] = 'Show header';
$string['showheader_desc'] = 'Show the network ID header.';
$string['showogpreview'] = 'Show OG preview';
$string['showogpreview_desc'] = 'Show open graph object preview.';
$string['showogpreview_help'] = 'Display an Open Graph preview of the target URL beneath the new message publisher, which provides users with a preview of the Open Graph summary they will see in the conversation they are starting.';
$string['width'] = 'Width';
$string['width_help'] = 'Set the width of the feed in pixels (px). This may be over-ridden by the theme or the block placement.';
$string['yammer'] = 'Yammer';
$string['yammer:addinstance'] = 'Add a new Yammer block';
$string['yammer_settings'] = 'Yammer network settings';
