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
 * Strings for component 'cleaner_sitedata', language 'en', version '4.0'.
 *
 * @package     cleaner_sitedata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcontextlevels'] = 'All context levels';
$string['allcontextlevelsdesc'] = 'Replace all files in every context level, with a generic default';
$string['allfiletypes'] = 'All file types';
$string['allfiletypesdesc'] = 'Replace all files, of all types, with a generic default';
$string['checkcontextsettings'] = 'Please check your settings. No context selected.';
$string['checkfiletypesettings'] = 'Please check your settings. No file types selected.';
$string['contextlevels'] = 'Context levels';
$string['contextlevelsdesc'] = 'Files in only the selected contexts will be replaced (if all context levels is not set).';
$string['filecopyerror'] = '-- ERROR -- An error was encountered while copying the placeholder file to sitedata. Please ensure you have the right permissions.';
$string['filetypes'] = 'File types';
$string['filetypesdesc'] = 'Files of only the selected types will be replaced (if All file types is not set).';
$string['nothingtoupdate'] = 'Nothing to update.';
$string['pluginname'] = 'Cleanup sitedata';
$string['privacy:metadata'] = 'The cleaner sitedata plugin does not store any personal data.';
$string['willreplace'] = 'Will update {$a->total} record(s) in files table.
 File type = \'{$a->mimetype}\'.
 File extension(s) = \'{$a->extensions}\'.
 Placeholder file = \'{$a->placeholderfilename}\'.';
$string['willreplaceunknowntype'] = 'Will update {$a->total} record(s) in files table.
 Unsupported file type = \'{$a->mimetype}\'.
 New file type = \'{$a->newmimetype}\'.
 File extension(s) = \'{$a->extensions}\'.
 Placeholder file = \'{$a->placeholderfilename}\'.';
$string['wouldreplace'] = 'Would update {$a->total} record(s) from the files table.
 File type = \'{$a->mimetype}\'.
 File extension(s) = \'{$a->extensions}\'.
 Placeholder file = \'{$a->placeholderfilename}\'.';
$string['wouldreplaceunknowntype'] = 'Would update {$a->total} record(s) from the files table.
 Unsupported file type = \'{$a->mimetype}\'.
 New file type = \'{$a->newmimetype}\'.
 File extension(s)= \'{$a->extensions}\'.
 Placeholder file = \'{$a->placeholderfilename}\'.';
