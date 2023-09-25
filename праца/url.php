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
 * Strings for component 'url', language 'en', version '4.0'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Абярыце зьменную...';
$string['clicktoopen'] = 'Націсьніце па спасылцы {$a}, каб адкрыць рэсурс.';
$string['configdisplayoptions'] = 'Абярыце ўсе опцыя, якія мусяць быць даступнымі, існыя налады ня зьменяцца. Утрымлівайце кнопку CTRL дзеля абраньня некалькіх палёў.';
$string['configframesize'] = 'Падчас адлюстраваньня странкі ці запампованага файла ў фрэйме, гэтае значэньне вызначае вышыню верхняга фрэйма (у пікселях, фрэйм мае навігацыю).';
$string['configrolesinparams'] = 'Уключыце, калі вы жадаеце дадаць лакалізаваныя назвы роляў у сьпіс даступных параметраў-зьменных.';
$string['configsecretphrase'] = 'Гэта таемная фраза выкарыстоўваецца дзеля стварэньня зашыфраванага кодавага значэньня, якое можа быць адпраўлена на некаторыя сэрверы ў якасьці параметра. Зашыфраваны код фармуецца з md5-значэньня IP-адраса цяперашняга карыстальніка, аб\'яднанага з вашай таемнай фразай. То бок код = md5(IP.secretphrase). Зьвярніце ўвагу, гэты спосаб ня з\'яўляецца надзейным, бо IP-адрас можа мяняцца і часта выкарыстоўвацца агульна рознымі кампутарамі.';
$string['contentheader'] = 'Зьмесьціва';
$string['createurl'] = 'Стварыць спасылку';
$string['displayoptions'] = 'Даступныя опцыі адлюстраваньня';
$string['displayselect'] = 'Адлюстраваньне';
$string['displayselect_help'] = 'This setting, together with the URL file type and whether the browser allows embedding, determines how the URL is displayed. Options may include:

* Automatic - The best display option for the URL is selected automatically
* Embed - The URL is displayed within the page below the navigation bar together with the URL description and any blocks
* Open - Only the URL is displayed in the browser window
* In pop-up - The URL is displayed in a new browser window without menus or an address bar
* In frame - The URL is displayed within a frame below the navigation bar and URL description
* New window - The URL is displayed in a new browser window with menus and an address bar';
$string['displayselectexplain'] = 'Choose display type, unfortunately not all types are suitable for all URLs.';
$string['externalurl'] = 'External URL';
$string['framesize'] = 'Frame height';
$string['indicator:cognitivedepth'] = 'URL cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a URL resource.';
$string['indicator:cognitivedepthdef'] = 'URL cognitive';
$string['indicator:cognitivedepthdef_help'] = 'The participant has reached this percentage of the cognitive engagement offered by the URL resources during this analysis interval (Levels = No view, View)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a URL resource.';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'The participant has reached this percentage of the social engagement offered by the URL resources during this analysis interval (Levels = No participation, Participant alone)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Cannot display this resource, URL is invalid.';
$string['invalidurl'] = 'Entered URL is invalid';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'The URL module enables a teacher to provide a web link as a course resource. Anything that is freely available online, such as documents or images, can be linked to; the URL doesn’t have to be the home page of a website. The URL of a particular web page may be copied and pasted or a teacher can use the file picker and choose a link from a repository such as Flickr, YouTube or Wikimedia (depending upon which repositories are enabled for the site).

There are a number of display options for the URL, such as embedded or opening in a new window and advanced options for passing information, such as a student\'s name, to the URL if required.

Note that URLs can also be added to any other resource or activity type through the text editor.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['page-mod-url-x'] = 'Any URL module page';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'URL variables';
$string['parametersheader_help'] = 'This section allows you to pass internal information as part of the URL. This is useful if the URL is an interactive web page that takes parameters, and you want to pass something like the name of the current user, for example. Enter the name of the URL\'s parameter in the text box then select the corresponding site variable.';
$string['pluginadministration'] = 'URL module administration';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Pop-up height (in pixels)';
$string['popupheightexplain'] = 'Specifies default height of popup windows.';
$string['popupwidth'] = 'Pop-up width (in pixels)';
$string['popupwidthexplain'] = 'Specifies default width of popup windows.';
$string['printintro'] = 'Display URL description';
$string['printintroexplain'] = 'Display URL description below content? Some display types may not display description even if enabled.';
$string['privacy:metadata'] = 'The URL resource plugin does not store any personal data.';
$string['rolesinparams'] = 'Include role names in parameters';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Server URL';
$string['url:addinstance'] = 'Add a new URL resource';
$string['url:view'] = 'View URL';
