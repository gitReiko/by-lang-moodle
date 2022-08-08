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
 * Strings for component 'diary', language 'en', version '4.0'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Access denied';
$string['addtofeedback'] = 'Add to feedback';
$string['alias'] = 'Keyword';
$string['aliases'] = 'Keyword(s)';
$string['aliases_help'] = 'Each diary entry can have an associated list of keywords (or aliases).

Enter each keyword on a new line (not separated by commas).';
$string['alwaysopen'] = 'Always open';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the diary description above will only become visible to students on the "Open time" date.';
$string['and'] = 'and';
$string['attachment'] = 'Attachment';
$string['attachment_help'] = 'You can optionally attach one or more files to a diary entry.';
$string['autorating'] = 'Auto-rating';
$string['autorating_descr'] = 'If enabled, the rating for an entry will be automatically entered based on the other autorating settings.';
$string['autorating_help'] = 'These settings define the defaults for autorating in all new diarys.';
$string['autorating_title'] = 'Auto-rating enable';
$string['autoratingitemdetails'] = 'The item for the auto-rating is {$a->one} or more {$a->two} with a possible {$a->three}% penalty for each missing one.<br>You have {$a->four}. You need to come up with {$a->five}.';
$string['autoratingitempenaltymath'] = 'The automatic item rating penalty math is (max({$a->one} - {$a->two}, 0)) * {$a->three} =  {$a->four}.<br> Note: max prevents negative numbers caused by having more than is required.';
$string['autoratingitempercentset'] = 'Auto-rating Item percent setting {$a}%';
$string['availabilityhdr'] = 'Availability';
$string['avgsylperword'] = 'Average syllables per word {$a}';
$string['avgwordlenchar'] = 'Average word length {$a} characters';
$string['avgwordpara'] = 'Average words per paragraph {$a}';
$string['blankentry'] = 'Blank entry';
$string['calendarend'] = '{$a} closes';
$string['calendarstart'] = '{$a} opens';
$string['cancel'] = 'Cancel transfer';
$string['chars'] = 'Characters';
$string['charspersentence'] = 'Characters per sentence';
$string['clearfeedback'] = 'Clear feedback';
$string['commonerrorpercentset'] = 'Common error percent setting {$a}%';
$string['commonerrors'] = 'Common errors';
$string['commonerrors_help'] = 'The common errors are defined in the "Glossary of errors" associated with this question.';
$string['configdateformat'] = 'This defines how dates are shown in diary reports. The default value, "M d, Y G:i" is Month, day, year and 24 hour format time. Refer to Date in the PHP manual for more examples and predefined date constants.';
$string['created'] = 'Created {$a->one} days and {$a->two} hours ago.';
$string['crontask'] = 'Background processing for Diary module';
$string['csvexport'] = 'Export to .csv';
$string['currententry'] = 'Current diary entries:';
$string['currpotrating'] = 'Your current potential rating is: {$a}%';
$string['dateformat'] = 'Default date format';
$string['daysavailable'] = 'Days available';
$string['daysavailable_help'] = 'If using Weekly format, you can set how many days the diary is open for use.';
$string['deadline'] = 'Days Open';
$string['details'] = 'Details:';
$string['detectcommonerror'] = 'Detected at least {$a->one}, {$a->two} They are: {$a->three}
<br>If allowed, you should fix and re-submit.';
$string['diary:addentries'] = 'Add diary entries';
$string['diary:addinstance'] = 'Add diary instances';
$string['diary:manageentries'] = 'Manage diary entries';
$string['diary:rate'] = 'Rate diary entries';
$string['diaryclosetime'] = 'Close time';
$string['diaryclosetime_help'] = 'If enabled, you can set a date for the diary to be closed and no longer open for use.';
$string['diarydescription'] = 'Diary description';
$string['diaryentrydate'] = 'Set date for this entry';
$string['diaryid'] = 'diaryid to transfer to';
$string['diarymail'] = 'Greetings {$a->user},
{$a->teacher} has posted some feedback on your diary entry for \'{$a->diary}\'.

You can see it appended to your diary entry:

    {$a->url}';
$string['diarymailhtml'] = 'Greetings {$a->user},
{$a->teacher} has posted some feedback on your
diary entry for \'<i>{$a->diary}</i>\'.<br /><br />
You can see it appended to your <a href="{$a->url}">diary entry</a>.';
$string['diaryname'] = 'Diary name';
$string['diaryopentime'] = 'Open time';
$string['diaryopentime_help'] = 'If enabled, you can set a date for the diary to be opened for use.';
$string['editall'] = 'Edit all entries';
$string['editall_help'] = 'When enabled, users can edit any entry.';
$string['editdates'] = 'Edit entry dates';
$string['editdates_help'] = 'When enabled, users can edit the date of any entry.';
$string['editingended'] = 'Editing period has ended';
$string['editingends'] = 'Editing period ends';
$string['editthisentry'] = 'Edit this entry';
$string['edittopoflist'] = 'Edit top of the list';
$string['enableautorating'] = 'Enable automatic rating';
$string['enableautorating_help'] = 'Enable, or disable, automatic ratings';
$string['enablestats'] = 'Enable statistics';
$string['enablestats_descr'] = 'If enabled, the statistics for each entry will be shown.';
$string['enablestats_help'] = 'Enable, or disable, viewing statistics for each entry.';
$string['enablestats_title'] = 'Enable statistics';
$string['entries'] = 'Entries';
$string['entry'] = 'Entry';
$string['entrybgc'] = 'Diary entry/feedback background color';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'This sets the background color of a diary entry/feedback.';
$string['entrybgc_help'] = 'This sets the overall background color of each diary entry and feedback.';
$string['entrybgc_title'] = 'Diary entry/feedback background color';
$string['entrycomment'] = 'Entry comment';
$string['entrytextbgc'] = 'Diary text background color';
$string['entrytextbgc_colour'] = '#EEFC84';
$string['entrytextbgc_descr'] = 'This sets the background color of the text in a diary entry.';
$string['entrytextbgc_help'] = 'This sets the background color of the text in a diary entry.';
$string['entrytextbgc_title'] = 'Diary text background color';
$string['errorbehavior'] = 'Error matching behavior';
$string['errorbehavior_help'] = 'These settings refine the matching behavior for entries in the Glossary of common errors.';
$string['errorcmid'] = 'Glossary of errors';
$string['errorcmid_help'] = 'Choose the Glossary that contains a list of common errors. Each time one of the errors is found in the essay response, the specified penalty will be deducted from the student\'s rating for this entry.';
$string['errorpercent'] = 'Penalty per error';
$string['errorpercent_help'] = 'Select the percentage of total rating that should be deducted for each error that is found in the response.';
$string['eventdiarycreated'] = 'Diary created';
$string['eventdiarydeleted'] = 'Diary deleted';
$string['eventdiaryviewed'] = 'Diary viewed';
$string['eventdownloadentriess'] = 'Download entries';
$string['evententriesviewed'] = 'Diary entries viewed';
$string['evententrycreated'] = 'Diary entry created';
$string['evententryupdated'] = 'Diary entry updated';
$string['eventfeedbackupdated'] = 'Diary feedback updated';
$string['eventinvalidentryattempt'] = 'Diary invalid entry attempt';
$string['eventxfrentries'] = 'Journal to Diary entry transfer';
$string['exportfilename'] = 'entries.csv';
$string['exportfilenamep1'] = 'All_Site';
$string['exportfilenamep2'] = '_Diary_Entries_Exported_On_';
$string['feedbackupdated'] = 'Feedback updated for {$a} entries';
$string['files'] = 'Files';
$string['firstentry'] = 'First diary entries:';
$string['fkgrade'] = 'FK Grade';
$string['fkgrade_help'] = 'Flesch Kincaid grade level indicates the number of years of education generally required to understand this text. Try to aim for a grade level below 10.';
$string['fogindex'] = 'Fog index';
$string['fogindex_help'] = 'The Gunning fog index is a measure of readability. It is calculated using the following formula.

 ((words per sentence) + (long words per sentence)) x 0.4

Try to aim for a grade level below 10. For more information see: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['format'] = 'Format';
$string['freadingease'] = 'Flesch reading ease';
$string['freadingease_help'] = 'Flesch reading ease: high scores indicate your text is easier to read while lower scores indicate your text is more difficult to read. Try to aim for a reading ease over 60.';
$string['generalerror'] = 'There has been an error.';
$string['generalerrorinsert'] = 'Could not insert a new diary entry.';
$string['generalerrorupdate'] = 'Could not update your diary.';
$string['gradeingradebook'] = 'Current rating in gradebook';
$string['highestgradeentry'] = 'Highest rated entries:';
$string['incorrectcourseid'] = 'Course ID is incorrect';
$string['incorrectmodule'] = 'Course Module ID was incorrect';
$string['invalidaccess'] = 'Invalid access';
$string['invalidaccessexp'] = 'You do not have permission to view the page you attempted to access! The attempt was logged!';
$string['invalidtimechange'] = 'An invalid attempt to change this entry\'s, Time created, has been detected.';
$string['invalidtimechangenewtime'] = 'The changed time was: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'The original time was: {$a->one}.';
$string['invalidtimeresettime'] = 'The time was reset to the original time of: {$a->one}.';
$string['itemcount'] = 'Expected number of items';
$string['itemcount_help'] = 'The minimum number of countable items that must be in the essay text in order to achieve the maximum rating for this entry.

Note, that this value may be rendered ineffective by the rating bands, if any, defined below.';
$string['itempercent'] = 'Penalty per item';
$string['itempercent_help'] = 'Select the percentage of total rating that should be deducted for each missing countable item.';
$string['itemtype'] = 'Type of countable items';
$string['itemtype_desc'] = 'The type of items in the essay text that will contribute to the auto-rating is, <strong>{$a->one}</strong>, and for full marks you must use, <strong>{$a->two}</strong>, of them.';
$string['itemtype_descr'] = 'Select the type of items in the essay text that will contribute to the auto-rating.';
$string['itemtype_help'] = 'Select the type of items in the essay text that will contribute to the auto-rating.';
$string['itemtype_title'] = 'Type of countable items';
$string['itemtypefiles'] = 'Files';
$string['itemtypenchars'] = 'Characters';
$string['itemtypenone'] = 'None';
$string['itemtypensentences'] = 'Sentences';
$string['itemtypeparagraphs'] = 'Paragraphs';
$string['itemtypewords'] = 'Words';
$string['journalid'] = 'journalid to transfer from';
$string['journalmissing'] = 'Currently, there are not any Journal activities in this course.';
$string['journaltodiaryxfrdid'] = '<br>This is a list of each Diary activity in this course.<br><b>    ID</b> | Course | Diary name<br>';
$string['journaltodiaryxfrjid'] = 'This is a list of each Journal activity in this course.<br><b>    ID</b> | Course | Journal name<br>';
$string['journaltodiaryxfrp1'] = 'This is an admin user only function to transfer Journal entries to Diary entries. Entries from multiple Journal\'s can be transferred to a single Diary or to multiple separate Diary\'s. This is a new capability and is still under development.<br><br>';
$string['journaltodiaryxfrp2'] = 'If you use the, <b>Transfer and send email</b>, checkbox, any journal entry transferred to a diary activity will mark the new entry as needing an email sent to the user so they know the entry has been transferred to a diary activity.<br><br>';
$string['journaltodiaryxfrp3'] = 'If you use the, <b>Transfer without email</b>, button an email will NOT be sent to each user even though the process automatically adds feedback in the new Diary entry, even if the original Journal entry had not feedback included.<br><br>';
$string['journaltodiaryxfrp4'] = 'The name of this course you are working in is: <b> {$a->one}</b>, with a Course ID of: <b> {$a->two}</b><br><br>';
$string['journaltodiaryxfrp5'] = 'If you elect to include feedback regarding the transfer and the journal entry does not already have any feedback, you will automatically be added as the teacher for the entry to prevent an error.<br><br>';
$string['journaltodiaryxfrtitle'] = 'Journal to Diary xfr';
$string['lastnameasc'] = 'Last name ascending:';
$string['lastnamedesc'] = 'Last name descending:';
$string['latestmodifiedentry'] = 'Most recently modified entries:';
$string['lexicaldensity'] = 'Lexical density';
$string['lexicaldensity_help'] = 'The lexical density is a percentage calculated using the following formula.

 100 x (number of unique words) / (total number of words)

Thus, an essay in which many words are repeated has a low lexical density, while a essay with many unique words has a high lexical density.';
$string['longwords'] = 'Unique long words';
$string['longwords_help'] = 'Long words are words that have three or more syllables. Note that the algorithm for determining the number of syllables yields only approximate results.';
$string['longwordspersentence'] = 'Long words per sentence';
$string['lowestgradeentry'] = 'Lowest rated entries:';
$string['mailed'] = 'Mailed';
$string['mailsubject'] = 'Diary feedback';
$string['maxcharacterlimit'] = 'Character count maximum';
$string['maxcharacterlimit_desc'] = 'Note: This entry can use a <strong>maximum of {$a} characters.</strong>';
$string['maxcharacterlimit_help'] = 'If a number is entered, the user must use less characters than the maximum number listed.';
$string['maxparagraphlimit'] = 'Paragraph count maximum';
$string['maxparagraphlimit_desc'] = 'Note: This entry can use a <strong>maximum of {$a} paragraphs.</strong>';
$string['maxparagraphlimit_help'] = 'If a number is entered, the user must use less paragraphs than the maximum number listed.';
$string['maxpossrating'] = 'The maximum possible rating for this entry is {$a} points.';
$string['maxsentencelimit'] = 'Sentence count maximum';
$string['maxsentencelimit_desc'] = 'Note: This entry can use a <strong>maximum of {$a} sentences.</strong>';
$string['maxsentencelimit_help'] = 'If a number is entered, the user must use less sentences than the maximum number listed.';
$string['maxwordlimit'] = 'Word count maximum';
$string['maxwordlimit_desc'] = 'Note: This entry can use a <strong>maximum of {$a} words.</strong>';
$string['maxwordlimit_help'] = 'If a number is entered, the user must use less words than the maximum number listed.';
$string['mediumwords'] = 'Unique medium words';
$string['mediumwords_help'] = 'Medium words are words that have two syllables. Note that the algorithm for determining the number of syllables yields only approximate results.';
$string['mincharacterlimit'] = 'Character count minimum';
$string['mincharacterlimit_desc'] = 'Note: This entry must use a <strong>minimum of {$a} characters.</strong>';
$string['mincharacterlimit_help'] = 'If a number is entered, the user must use more characters than the minimum number listed.';
$string['minmaxcharpercent'] = 'Character penalty per Min/Max count error';
$string['minmaxcharpercent_help'] = 'Select the percentage of total rating that should be deducted for each Min/Max character count error.';
$string['minmaxhdr'] = 'Min/Max counts';
$string['minmaxhdr_help'] = 'These settings define the defaults for minimum and maximum character and word counts in all new diarys.';
$string['minmaxparapercent'] = 'Paragraph penalty per Min/Max count error';
$string['minmaxparapercent_help'] = 'Select the percentage of total rating that should be deducted for each Min/Max paragraph count error.';
$string['minmaxpercent'] = 'Penalty per Min/Max count error';
$string['minmaxpercent_help'] = 'Select the percentage of total rating that should be deducted for each Min/Max count error.';
$string['minmaxsentpercent'] = 'Sentence penalty per Min/Max count error';
$string['minmaxsentpercent_help'] = 'Select the percentage of total rating that should be deducted for each Min/Max sentence count error.';
$string['minmaxwordpercent'] = 'Word penalty per Min/Max count error';
$string['minmaxwordpercent_help'] = 'Select the percentage of total rating that should be deducted for each Min/Max word count error.';
$string['minparagraphlimit'] = 'Paragraph count minimum';
$string['minparagraphlimit_desc'] = 'Note: This entry must use a <strong>minimum of {$a} paragraphs.</strong>';
$string['minparagraphlimit_help'] = 'If a number is entered, the user must use more paragraphs than the minimum number listed.';
$string['minsentencelimit'] = 'Sentence count minimum';
$string['minsentencelimit_desc'] = 'Note: This entry must use a <strong>minimum of {$a} sentences.</strong>';
$string['minsentencelimit_help'] = 'If a number is entered, the user must use more sentences than the minimum number listed.';
$string['minwordlimit'] = 'Word count minimum';
$string['minwordlimit_desc'] = 'Note: This entry must use a <strong>minimum of {$a} words.</strong>';
$string['minwordlimit_help'] = 'If a number is entered, the user must use more words than the minimum number listed.';
$string['missing'] = 'Missing';
$string['modulename'] = 'Diary';
$string['modulename_help'] = 'The diary activity enables teachers to obtain students feedback
 over a period of time.';
$string['modulenameplural'] = 'Diary\'s';
$string['needsgrading'] = 'This entry has not been given feedback or rated yet.';
$string['needsregrade'] = 'This entry has changed since feedback or a rating was given.';
$string['newdiaryentries'] = 'New diary entries';
$string['nextentry'] = 'Next entry';
$string['nodeadline'] = 'Always open';
$string['noentriesmanagers'] = 'There are no teachers';
$string['noentry'] = 'No entry';
$string['noratinggiven'] = 'No rating given';
$string['notextdetected'] = '<b>No text detected!</b>';
$string['notopenuntil'] = 'This diary won\'t be open until';
$string['notstarted'] = 'You have not started this diary yet';
$string['numwordscln'] = '{$a->one} clean text words using {$a->two} characters, NOT including {$a->three} spaces.';
$string['numwordsnew'] = 'New calculation: {$a->one} raw text words using {$a->two} characters, in {$a->three} sentences, in {$a->four} paragraphs.';
$string['numwordsraw'] = '{$a->one} raw text words using  {$a->two} characters, including {$a->three} spaces.';
$string['numwordsstd'] = '{$a->one} standardized words using {$a->two} characters, including {$a->three} spaces.';
$string['outof'] = 'out of {$a} entries.';
$string['overallrating'] = 'Overall rating';
$string['pagesize'] = 'Entries per page';
$string['paragraphs'] = 'Paragraphs';
$string['percentofentryrating'] = '{$a}% of the entry rating.';
$string['phrasecasesensitiveno'] = 'Match is case-insensitive.';
$string['phrasecasesensitiveyes'] = 'Match is case-sensitive.';
$string['phrasefullmatchno'] = 'Match full or partial words.';
$string['phrasefullmatchyes'] = 'Match full words only.';
$string['phraseignorebreaksno'] = 'Recognize line breaks.';
$string['phraseignorebreaksyes'] = 'Ignore line breaks.';
$string['pluginadministration'] = 'Diary module administration';
$string['pluginname'] = 'Diary';
$string['popoverhelp'] = 'click for info';
$string['potautoratingerrpen'] = 'Potential Autorating error penalty: {$a->one} * {$a->two} = {$a->three}% or {$a->four} points off.';
$string['potcommerrpen'] = 'Potential Common error penalty: {$a->one} * {$a->two} = {$a->three}% or {$a->four} points off.';
$string['present'] = 'Present';
$string['previousentry'] = 'Previous entry';
$string['rate'] = 'Rate';
$string['rating'] = 'Rating for this entry';
$string['reload'] = 'Reload and show from current to oldest diary entry';
$string['removeentries'] = 'Remove all entries';
$string['removemessages'] = 'Remove all Diary entries';
$string['reportsingle'] = 'Get all Diary entries for this user.';
$string['reportsingleallentries'] = 'All Diary entries for this user.';
$string['returnto'] = 'Return to {$a}';
$string['returntoreport'] = 'Return to report page for - {$a}';
$string['saveallfeedback'] = 'Save all my feedback';
$string['savesettings'] = 'Save settings';
$string['search'] = 'Search';
$string['search:activity'] = 'Diary - activity information';
$string['search:entry'] = 'Diary - entries';
$string['search:entrycomment'] = 'Diary - entry comment';
$string['selectentry'] = 'Select entry for marking';
$string['sentences'] = 'Sentences';
$string['sentencesperparagraph'] = 'Sentences per paragraph';
$string['shortwords'] = 'Unique short words';
$string['shortwords_help'] = 'Short words are words that have only one syllable. Note that the algorithm for determining the number of syllables yields only approximate results.';
$string['shownone'] = 'Show none';
$string['showoverview'] = 'Show diarys overview on my moodle';
$string['showrecentactivity'] = 'Show recent activity';
$string['showstudentsonly'] = 'Show students only';
$string['showteacherandstudents'] = 'Show teacher and students';
$string['showteachersonly'] = 'Show teachers only';
$string['showtextstats'] = 'Show text statistics?';
$string['showtextstats_help'] = 'If this option is enabled, statistics about the text will be shown.';
$string['showtostudentsonly'] = 'Yes, show to students only';
$string['showtoteachersandstudents'] = 'Yes, show to teachers and students';
$string['showtoteachersonly'] = 'Yes, show to teachers only';
$string['sortcurrententry'] = 'From current diary entry to the first entry.';
$string['sortfirstentry'] = 'From first diary entry to the latest entry.';
$string['sorthighestentry'] = 'From highest rated diary entry to the lowest rated entry.';
$string['sortlastentry'] = 'From latest modified diary entry to the oldest modified entry.';
$string['sortlowestentry'] = 'From lowest rated diary entry to the highest entry.';
$string['sortoptions'] = 'Sort options:';
$string['sortorder'] = 'Sort order is:';
$string['startnewentry'] = 'Start new entry';
$string['startoredit'] = 'Start new or edit today\'s entry';
$string['statshdr'] = 'Text statistics';
$string['statshdr_help'] = 'These settings dfine the defaults for the statistics in all new diarys.';
$string['teacher'] = 'Teacher';
$string['text'] = 'Text';
$string['textstatitems'] = 'Statistical items';
$string['textstatitems_help'] = 'Select any items here that you wish to appear in the text statistics that are shown on a view page, report page, and reportsingle page.';
$string['timecreated'] = 'Time created';
$string['timemarked'] = 'Time marked';
$string['timemodified'] = 'Time modified';
$string['toolbar'] = 'Toolbar:';
$string['totalsyllables'] = 'Total Syllables {$a}';
$string['transfer'] = 'Transfer entry\'s';
$string['transferwemail'] = 'Transfer and send email. <b>Default: Do not send email</b>';
$string['transferwfb'] = 'Transfer and include feedback regarding the transfer. <b>Default: Do not include feedback</b>';
$string['transferwfbmsg'] = '<br> This entry was transferred from the Journal named:  {$a}';
$string['transferwoe'] = 'Transfer without email';
$string['uniquewords'] = 'Unique words';
$string['userid'] = 'User id';
$string['usertoolbar'] = 'User toolbar:';
$string['viewalldiaries'] = 'View all course diaries';
$string['viewallentries'] = 'View {$a} diary entries';
$string['viewentries'] = 'View entries';
$string['words'] = 'Words';
$string['wordspersentence'] = 'Words per sentence';
$string['xfrresults'] = 'There were {$a->one} entry\'s processed, and {$a->two} of them transferred.';
