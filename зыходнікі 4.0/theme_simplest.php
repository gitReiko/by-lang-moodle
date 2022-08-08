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
 * Strings for component 'theme_simplest', language 'en', version '4.0'.
 *
 * @package     theme_simplest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundimage'] = 'Background image';
$string['backgroundimage_desc'] = 'The image to display as a background of the site. The background image you upload here will override the background image in your theme preset files.';
$string['brandcolor'] = 'Use a dark style navbar';
$string['brandcolor_desc'] = 'Swaps text and background colours for the navbar at the top of the page between dark and light.';
$string['change_style'] = 'Change theme style';
$string['choosereadme'] = 'Theme Simplest is a child theme of the Classic.';
$string['configtitle'] = 'Simplest';
$string['disableinspirationalquotes'] = 'Disable quotation block';
$string['disableinspirationalquotesdesc'] = 'Checking this box will disable the quotes block';
$string['enddate'] = 'End date';
$string['enddate_desc'] = 'Date when style will be disable.';
$string['errordate'] = 'Wrong date. You have to enter the date according to the format YYYY-MM-DD e.g. 2022-03-17.';
$string['errormonth'] = 'Wrong number of days. This month of the year {$a->year} only has {$a->days} days.';
$string['generalsettings'] = 'General settings';
$string['inspirationalquotes'] = 'Inspirational quotes';
$string['inspirationalquotesdef'] = 'a computer would deserve to be called intelligent if it could deceive a human into believing that it was a human|en|Alan Turing
An unwillingness to admit the possibility that mankind can have any rivals in
intellectual power. This occurs as much amongst intellectual people as amongst
others: they have more to lose.|en|Alan Turing"
Mathematical reasoning may be regarded rather schematically as the exercise of a combination of two facilities, which we may call intuition and ingenuity|en|Alan Turing
Young Man, in mathematics you dont understand things. You just get used to them|en|John von neumann
The idea behind digital computers may be explained by saying that these machines are intended to carry out any operations which could be done by a human computer.|en|Alan Turing
Im not so much afraid of artificial intelligence as of natural stupidity.|en|joel de rosnay
computers will be able to read at human levels by 2029 and will also begin to have different human characteristics,|en|Raymond Kurzweil
artificial intelligence is far more dangerous than nukes.|en|Elon Musk
Computers will overtake humans with AI at some point within the next 100 years|en|Stephen Hawking
Success in creating AI would be the biggest event in human history,Unfortunately, it might also be the last, unless we learn how to avoid the risks.|en|Stephen Hawking
I imagine a world in which AI is going to make us work more productively, live longer, and have cleaner energy.|en|Fei - Fei Li';
$string['inspirationalquotesdesc'] = 'Each quote must be on a new line.<br>
Try to get quotes were not too long!
<br>Additionally, you can add after the sign "<strong>|</strong>" tags that extend the quote to be displayed on a specific language and quote author.
<br> Example:
<br><div style="border:solid 1px #DEDEDE;background:#f8f9fa;color:#222222;padding:4px;"><pre>
<br>First quote.<strong>|</strong>en<strong>|</strong>Joel de Rosnay
<br>First quote in Polish.<strong>|</strong>pl<strong>|</strong>Joel de Rosnay
<br>Second quote, no author.<strong>|</strong>en
<br>Quote for all languages.<strong>||</strong>Joel de Rosnay</pre></div>
<br> Your platform supports languages: <strong> {$a} </strong>';
$string['inspirationalquotesduration'] = 'Duration quiestes';
$string['inspirationalquotesdurationdesc'] = 'Duration visible quotes.';
$string['inspirationalquotessettings'] = 'Inspirational quotes settings';
$string['limitedbydate'] = 'Enable style limited by date';
$string['limitedbydate_desc'] = 'Enables the given style on the specified date. After this time, it reverts to the default style';
$string['madeby'] = 'Made by';
$string['navbardark'] = 'Use a dark style navbar';
$string['navbardark_desc'] = 'Swaps text and background colours for the navbar at the top of the page between dark and light.';
$string['othersettings'] = 'Other settings';
$string['pluginname'] = 'Simplest';
$string['preset'] = 'Theme preset';
$string['preset:default'] = 'Default';
$string['preset:easter'] = 'Easter';
$string['preset:mourning'] = 'Mourning';
$string['preset:spring'] = 'Spring';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
$string['presettemporary'] = 'Temporary style';
$string['presettemporary_desc'] = 'Select the style that is to be set in the given time period.';
$string['privacy:metadata'] = 'The Simplest theme does not store any personal data.';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['redir'] = 'Redirect to course';
$string['redir_desc'] = 'Redirect immediately to course if the user is enrolled only one.';
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['settingsother'] = 'Other settings:';
$string['settingspresettemporary'] = 'Preset temporaty settings:';
$string['simpleusermenu'] = 'Simplification of user menu';
$string['simpleusermenu_desc'] = 'Hides dashboard and profile link. Adds a link to change the password.';
$string['startdate'] = 'Start date';
$string['startdate_desc'] = 'Date when style will be enable.';
