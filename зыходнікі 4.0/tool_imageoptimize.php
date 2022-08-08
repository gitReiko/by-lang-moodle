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
 * Strings for component 'tool_imageoptimize', language 'en', version '4.0'.
 *
 * @package     tool_imageoptimize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundoptimizingheading'] = 'Settings for background optimizing';
$string['cantcopyfile'] = 'The file could not be stored.';
$string['cantfindfile'] = 'The file could not be found in filestorage.';
$string['create_desc'] = 'Apply optimization on a first file upload';
$string['enablebackgroundoptimizing'] = 'Enable background optimizing';
$string['enablebackgroundoptimizing_desc'] = 'When backgroundoptimizing is enabled there will be no optimiziation during upload.';
$string['exec_warning'] = 'For the functioning of this plugin, you need to make some settings of your server
                        <ol>
                            <li>Enable php core function <strong>
                            <a href="https://www.php.net/manual/en/function.exec.php"
                            target="_blank">exec()</a></strong>
                                <ol>
                                    <li>find the path to the configuration file <strong>php.ini</strong></li>
                                    <li>edit the list of disabled functions in this directive <strong>
                                    <a href="https://www.php.net/manual/en/ini.core.php#ini.disable-functions"
                                    target="_blank">disable_functions</a></strong> in this file, delete from the list
                                    <strong>exec</strong> and save changes</li>
                                    <li>restart php</li>
                                </ol>
                            </li>
                            <li>Install the packages necessary for compression for each image type on the server</li>
                        </ol>';
$string['filecheckfailed'] = 'The filecheck failed.';
$string['filehasnofilesize'] = 'The file has no filesize or filesize 0. Abort!';
$string['files_types'] = 'Files types';
$string['files_types_desc'] = 'Select the file types to which optimization will be applied';
$string['filesortorder'] = 'Select filesortorder';
$string['filesortorder_id_asc'] = 'Start with oldest files';
$string['filesortorder_id_desc'] = 'Start with newest files';
$string['gifsicle'] = '<strong><a href="http://www.lcdf.org/gifsicle/" target="_blank">Gifsicle</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install gifsicle</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install gifsicle</code></li>
                        </ul>';
$string['info_title'] = 'To extend the format compression function <strong>{$a}</strong>, you can install additional packages for compression';
$string['jpegoptim'] = '<strong><a href="http://freshmeat.sourceforge.net/projects/jpegoptim" target="_blank">JpegOptim</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install jpegoptim</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install jpegoptim</code></li>
                        </ul>';
$string['maxchunksize'] = 'Maximum number of files processed with one task call.';
$string['maxchunksizeimport'] = 'Maximum number of files written to the processing table with one task call.';
$string['more_than'] = 'Optimize files more than, Kb';
$string['optipng'] = '<strong><a href="http://optipng.sourceforge.net/" target="_blank">OptiPNG</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install optipng</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install optipng</code></li>
                        </ul>';
$string['os_warning'] = 'At the moment, the plugin does not support working with the operating system of your server: <strong>{$a}</strong>';
$string['pathnamehashchanged'] = 'The Pathnamehash has changed. Abort!';
$string['pluginname'] = 'Image optimization';
$string['privacy:metadata'] = 'The image optimize tool plugin does not store any personal data.';
$string['taskoptimize'] = 'Backgrond image optimization task';
$string['taskoptimize_fill_table'] = 'Populating the tool_imageoptimize_files table';
$string['update_desc'] = 'Apply optimization on a file update';
$string['warning_title'] = 'For the option to appear, install one of the packages on your server or all together';
$string['webp'] = '<strong><a href="https://developers.google.com/speed/webp" target="_blank">WebP</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install webp</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install libwebp-tools</code></li>
                        </ul>';
