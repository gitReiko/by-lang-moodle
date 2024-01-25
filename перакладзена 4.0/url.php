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
$string['displayselect_help'] = 'Гэтая налада, разам з тыпам спасылкі на файл і дазволам браўзара ўбудоўваць, вызначаюць шлях адлюстраваньня спасылкі. Існуюць наступныя опцыі:

* Аўта - Лепшая опцыя адлюстраваньня спасылкі абіраецца аўтаматычна
* Убудоўваць - Спасылка адлюстроўваецца пад панэлью навігацыі разам з апісаньнем спасылкі і ўсімі блокамі
* Адкрываць - У вакне браўзара адлюстроўваецца толькі спасылка
* Ва ўсплыўным акне - Спасылка адлюстроўваецца ў новым вакне браўзара без меню ці адраснага радка
* У рамцы - Спасылка адлюстроўваецца ў рамцы пад панэлью навігацыі і апісаньнем спасылкі
* Новае акно - Спасылка адлюстроўваецца ў новым вакне браўзара з меню і адрасным радком';
$string['displayselectexplain'] = 'Абярыце тып адлюстраваньня, на жаль, не ўсе тыпы падыходзяць для ўсіх спасылак.';
$string['externalurl'] = 'Вонкавая спасылка';
$string['framesize'] = 'Вышыня рамкі';
$string['indicator:cognitivedepth'] = 'Пазнаваньне спасылкі';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік заснаваны на глыбіні пазнаваньня, якую дасягнуў студэнт у рэсурсе-Спасылцы.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне спасылкі';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягнуў гэтага адсотку пазнавальнага ўцягненьня, прапанаваны рэсурсам-Спасылкай у аналізаваны тэрмін (Роўні = Без прагляду, Прагляд)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць спасылкі';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік заснаваны на сацыяльнай шырыні, якую дасягнуў студэнт у рэсурсе-Спасылцы.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць спасылкі';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай рэсурсам-Спасылкай у аналізаваны тэрмін (Роўні = Адсутнасьць удзелу, Самотны удзел)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Нельга адлюстраваць гэты рэсурс, спасылка хібная.';
$string['invalidurl'] = 'Уведзеная спасылка хібная.';
$string['modulename'] = 'Спасылка';
$string['modulename_help'] = 'Модуль-спасылка дазваляе настаўнікам ствараць вэб-спасылку ў форме рэсурса курса. У якасьці спасылкі льга выкарыстоўваць любыя дакументы і выявы, што знаходзяцца ў вольным доступе ўва Інтэрнэце. Пры гэтым спасылка не абавязкова мусіць спасылацца на галоўную старонку сайта. Спасылка пэўнай вэб-старонкі можа быць скапіявана і ўстаўлена, альбо настаўнік можа скарыстацца функцыяй выбару файлаў з рэпазытара, напрыклад, Flickr, YouTube ці Wikimedia (у залежнасьці ад таго, якія рэпазітары ўключаны для дадзенага сайта).

Існуе некалькі опцыяў адлюстраваньня спасылкі, напрыклад, убудова ці адкрыцьцё ў новым вакне, а таксама прасунутыя магчымасьці перадачы інфармацыі ўва спасылцы, напрыклад, імя студэнта. калі тое неабходна.

Памятайце, спасылкі таксама льга дадаць да любога рэсурса ці актыўнасьці з дапамогай тэкставага рэдактара.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'Спасылкі';
$string['page-mod-url-x'] = 'Усякая старонка модуля-спасылка';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Зьменныя спасылкі';
$string['parametersheader_help'] = 'Гэты падзел дазваляе вам перадаваць унутраную інфармацыю як частку спасылцы. Гэта зручна, калі спасылка з\'яўляецца інтэрактыўнай вэб-старонкай, якая прынімае параметры, і вы перадаеце гэныя параметры, напрыклад, імя цяперашняга карыстальніка. Увядзіце назву параметра спасылкі ў тэкставае поле, потым абярыце адпаведную зьменную сайта.';
$string['pluginadministration'] = 'Адміністраваньне модуля-спасылкі';
$string['pluginname'] = 'Спасылка';
$string['popupheight'] = 'Вышыня ўсплыўнага акна (у пікселях)';
$string['popupheightexplain'] = 'Вызначае стандартную вышыню ўсплыўнага акна.';
$string['popupwidth'] = 'Шырыня ўсплыўнага акна (у пікселях)';
$string['popupwidthexplain'] = 'Вызначае стандартную шырыню ўсплыўнага акна.';
$string['printintro'] = 'Адлюстроўваць апісаньне спасылкі';
$string['printintroexplain'] = 'Ці трэба адлюстроўваць апісаньне спасылкі пад зьмесьцівам? Некаторыя тыпы адлюстраваньня не паказваюць апісаньне, нават калі гэтая функція ўключана.';
$string['privacy:metadata'] = 'Плагін рэсурс-Спасылка не захоўвае аніякіх асабістых дадзеных.';
$string['rolesinparams'] = 'Уключаць назвы роляў у параметры';
$string['search:activity'] = 'Спасылка';
$string['serverurl'] = 'Спасылка сэрвера';
$string['url:addinstance'] = 'Дадаць новы рэсурс-спасылку';
$string['url:view'] = 'Праглядзець спасылку';
