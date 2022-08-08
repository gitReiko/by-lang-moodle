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
 * Strings for component 'block_formal_langs', language 'en', version '4.0'.
 *
 * @package     block_formal_langs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewlanguage'] = 'Add new language';
$string['affectedcourses'] = 'Affected courses:';
$string['changevisibility'] = 'Change visibility in current context';
$string['clanguagemulticharliteral'] = 'There are several characters in character literal at {$a->line}:{$a->col}';
$string['clanguageunknownsymbol'] = 'There is unknown character "{$a->symbol}" at {$a->line}:{$a->position}';
$string['clanguageunmatchedquote'] = 'There is unmatched quote at {$a->line}:{$a->col}';
$string['clanguageunmatchedsquote'] = 'There is unmatched single quote at {$a->line}:{$a->col}';
$string['defaultlangdescription'] = 'Language selected by default when creating a new {$a}';
$string['defaultlanglabel'] = 'Default language';
$string['deletelanguage'] = 'Delete language "{$a}"';
$string['editinglanguage'] = 'Editing language "{$a}"';
$string['editingnewlanguage'] = 'Editing new language';
$string['editlanguage'] = 'Edit language "{$a}"';
$string['editpermissionslink'] = 'Edit permissions in current context';
$string['editpermissionspagename'] = 'Edit permissions';
$string['extraseparatormsg'] = 'there may be an extra separator inside {$a->correct0}';
$string['formal_langs:addinstance'] = 'Add new formal languages block to current module';
$string['formal_langs:addlanguage'] = 'Can add new formal language';
$string['formal_langs:changelanguagevisibility'] = 'Can change language visibility in forms';
$string['formal_langs:editalllanguages'] = 'Can edit all registered formal languages (except for system)';
$string['formal_langs:editownlanguages'] = 'Can edit only own created formal languages';
$string['formal_langs:viewlanguagelist'] = 'Can view formal language list';
$string['formallangsglobalsettings'] = 'Site settings for formal language block';
$string['formallangsvisibilitysettings'] = 'Global settings for language visibility';
$string['inherited'] = '(Inherited)';
$string['inherited_course'] = 'Course';
$string['inherited_site'] = 'Site';
$string['lang_c_language'] = 'C programming language';
$string['lang_c_language_help'] = 'C programming language. Scanning only.';
$string['lang_cpp_language'] = 'C++ programming language';
$string['lang_cpp_language_help'] = 'C++ programming language. Scanning only.';
$string['lang_cpp_parseable_language'] = 'C++ programming language';
$string['lang_cpp_parseable_language_help'] = 'C++ programming language with basic preprocessor support';
$string['lang_not_found'] = 'Language not found';
$string['lang_printf_language'] = 'Language for formatting string (C language, like in printf).';
$string['lang_printf_language_help'] = 'Language for formatting string (C language, like in printf). Scanning only.';
$string['lang_simple_english'] = 'English';
$string['lang_simple_english_help'] = 'English Language with support for words, numbers and punctuation marks. Scanning only.';
$string['language_editing_field_description'] = 'Description:';
$string['language_editing_field_lexemname'] = 'Name of token in language';
$string['language_editing_field_name'] = 'Idenrifying  name for a language';
$string['language_editing_field_parserules'] = 'Parsing rules for language';
$string['language_editing_field_scanrules'] = 'Lexical rules for language';
$string['language_editing_field_uiname'] = 'Visible name';
$string['language_editing_field_version'] = 'Version';
$string['language_editing_field_visible'] = 'Visible in global context of site';
$string['language_editing_submit_add'] = 'Add language and return';
$string['language_editing_submit_edit'] = 'Edit language and return';
$string['language_editing_submit_save_as_new'] = 'Save language as new';
$string['lexeme'] = 'lexeme';
$string['lexical_error_message'] = 'Cannot match input {$a->symbol} near {$a->line}:{$a->position}';
$string['maximumlexicalbacktrackingexecutuiontimesettingdescription'] = 'Maximal execution time for recursive backtracking for analysis for typos. An algortithm for recursive backtracking can be very time-consuming, so you can constrain it to avoid problems with very long answers';
$string['maximumlexicalbacktrackingexecutuiontimesettingname'] = 'Maximal execution time for recursive backtracking for analysis for typos (in seconds)';
$string['maximumvariationsoftypocorrectionsettingdescription'] = 'Sometimes, when student makes a lot of typos in answer, plugin can generate plenty of variations to fix them, taking too much time to analyze them all. In such cases, you should decrease this setting. Note, that this affects amount of found typos. If you set it too low, it could fail to found some typos';
$string['maximumvariationsoftypocorrectionsettingname'] = 'Maximum amount of variations of typo correction in student response';
$string['missingseparatormsg'] = 'there is no separator between {$a->correct0} and {$a->correct1}';
$string['missingseparatornodescriptionmsg'] = 'there is missing separator in {$a->compared}';
$string['part'] = 'part';
$string['pluginname'] = 'Formal languages block';
$string['privacy:metadata'] = 'The \'Formal languages block\' do not store user data.';
$string['quote'] = '"{$a}"';
$string['quoteat'] = '"{$a->value}" starting from position {$a->line}:{$a->column}';
$string['quoteatsingleline'] = '"{$a->value}" starting from character {$a->column}';
$string['tokenseparatorpart'] = '{$a->correct0} and {$a->correct1}';
$string['typomsg'] = 'there may be a typo in {$a->correct0}';
$string['visiblelangsdescription'] = 'Users on you site could only use these languages, other languages will be hidden from them';
$string['visiblelangslabel'] = 'Visible languages';
$string['word'] = 'word';
