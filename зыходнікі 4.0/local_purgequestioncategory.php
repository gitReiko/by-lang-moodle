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
 * Strings for component 'local_purgequestioncategory', language 'en', version '4.0'.
 *
 * @package     local_purgequestioncategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'You are going to purge question category. If you proceed, this category and all it\'s subcategories and unused questions will be permanently deleted. This action cannot be undone!';
$string['confirmpurge'] = 'Confirm question category purge';
$string['iconfirm'] = 'I confirm, that I understand what I am doing';
$string['infowithmove'] = 'The category \'{$a->name}\' contains {$a->subcategories} subcategories, {$a->unusedquestions} unused questions and {$a->usedquestions} questions, that cannot be deleted (questions that are still in use in some existing quizzes). Please choose another category to move undeletable questions to.';
$string['infowithoutmove'] = 'The category \'{$a->name}\' contains {$a->subcategories} subcategories and {$a->unusedquestions} unused questions.';
$string['pluginname'] = 'Purge question categories';
$string['privacy:metadata'] = 'The plugin does not store any personal data.';
$string['purgecategories'] = 'Purge categories';
$string['purgequestioncategory:purgecategory'] = 'Delete question category with all qustions and subcategories';
$string['purgethiscategory'] = 'Purge this category';
$string['validationcategory'] = 'Please select valid category';
$string['validationconfirm'] = 'You have to confirm this action';
