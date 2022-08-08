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
 * Strings for component 'local_recyclebin', language 'en', version '4.0'.
 *
 * @package     local_recyclebin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = '{$a->name} has been deleted';
$string['alertemptied'] = 'Recycle bin has been emptied';
$string['alertrestored'] = '{$a->name} has been restored';
$string['autohide'] = 'Auto hide?';
$string['autohide_desc'] = 'Automatically hides the recycle bin link when the bin is empty.';
$string['cleancategoryrecyclebin'] = 'Clean category recycle bins';
$string['cleancourserecyclebin'] = 'Clean course recycle bins';
$string['course_expiry'] = 'Course lifetime';
$string['course_expiry_desc'] = 'How long should a deleted course remain in the recycle bin?';
$string['deleteconfirm'] = 'Are you sure you want to delete the selected item from the recycle bin?';
$string['deleted'] = 'Date deleted';
$string['description_course'] = 'Items that have been deleted from a course can be restored if they are still in the recycle bin, and will appear at the bottom of the section from which they were deleted.';
$string['description_coursecat'] = 'Items that have been deleted from a category can be restored if they are still in the recycle bin.';
$string['descriptionexpiry'] = 'Contents will be permanently deleted after {$a} days.';
$string['empty'] = 'Delete all';
$string['emptybin'] = 'There are no items in the recycle bin.';
$string['emptyconfirm'] = 'Are you sure you want to delete all items in the recycle bin?';
$string['enablecategory'] = 'Enable category recycle bin';
$string['enablecategory_desc'] = 'Enables or disables the category recycle bin';
$string['enablecourse'] = 'Enable course recycle bin';
$string['enablecourse_desc'] = 'Enables or disables the course recycle bin';
$string['event_purged_description'] = 'Item with ID {$a->objectid} purged.';
$string['event_purged_name'] = 'Item purged';
$string['event_restored_description'] = 'Item with ID {$a->objectid} restored.';
$string['event_restored_name'] = 'Item restored';
$string['event_stored_description'] = 'Item stored with ID {$a->objectid}.';
$string['event_stored_name'] = 'Item stored';
$string['expiry'] = 'Activity lifetime';
$string['expiry_desc'] = 'How long should a deleted mod remain in the recycle bin?';
$string['invalidcontext'] = 'Invalid context supplied.';
$string['neverdelete'] = 'Never delete recycled items';
$string['notenabled'] = 'Sorry, but the recycle bin has been disabled by the administrator.';
$string['pluginname'] = 'Recycle bin';
$string['protectedmods'] = 'Protected modules';
$string['protectedmods_desc'] = 'Protected modules will not be automatically deleted.';
$string['recyclebin:delete_course'] = 'Delete category recycle bin items';
$string['recyclebin:delete_item'] = 'Delete course recycle bin items';
$string['recyclebin:delete_protected_item'] = 'Delete protected course recycle bin items';
$string['recyclebin:restore_course'] = 'Restore category recycle bin items';
$string['recyclebin:restore_item'] = 'Restore course recycle bin items';
$string['recyclebin:view_course'] = 'View category recycle bin items';
$string['recyclebin:view_item'] = 'View course recycle bin items';
