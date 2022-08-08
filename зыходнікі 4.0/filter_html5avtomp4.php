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
 * Strings for component 'filter_html5avtomp4', language 'en', version '4.0'.
 *
 * @package     filter_html5avtomp4
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audioffmpegsettings'] = 'ffmpeg settings for audio conversion';
$string['audioffmpegsettings_desc'] = 'This should contain at least "-i {%INPUTFILE%} {%OUTPUTFILE%}"; place your options around these as needed';
$string['convertaudio'] = 'Convert audio';
$string['convertaudio_desc'] = 'Convert audio OGG files to MP4 (M4A)';
$string['convertonlyexts'] = 'convert only these extensions';
$string['convertonlyexts_desc'] = 'Comma-separated list of file extensions to be converted to mp4';
$string['convertvideo'] = 'Convert video';
$string['convertvideo_desc'] = 'Convert video WEBM files to MP4';
$string['deleteoriginalfiles'] = 'Delete source files';
$string['deleteoriginalfiles_desc'] = 'Delete source files and keep only converted files.';
$string['filtername'] = 'HTML5 audio/video to MP4 filter';
$string['pathtoffmpeg'] = 'Path to ffmpeg';
$string['pathtoffmpeg_desc'] = 'Path to the ffmpeg executable';
$string['privacy:metadata'] = 'The HTML5 audio/video to MP4 filter does not store any personal data.';
$string['processjobs_task'] = 'Process reencoding non-MP4 files';
$string['videoffmpegsettings'] = 'ffmpeg settings for video conversion';
$string['videoffmpegsettings_desc'] = 'This should contain at least "-i {%INPUTFILE%} {%OUTPUTFILE%}"; place your options around these as needed';
