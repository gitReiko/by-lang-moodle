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
 * Strings for component 'course', language 'en', version '4.0'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Спод выбарніка актыўнасці';
$string['activitychooseractivefooter_desc'] = 'Выбарнік актыўнасці можа падтрымліваць плагіны, якія дадаюць прадметы ў спод.';
$string['activitychoosercategory'] = 'Выбарнік актыўнасці';
$string['activitychooserhidefooter'] = 'Без споду';
$string['activitychooserrecommendations'] = 'Рэкамендаваныя актыўнасці';
$string['activitychoosersettings'] = 'Налады выбарніка актыўнасці';
$string['activitychoosertabmode'] = 'Укладкі выбарніка актыўнасці';
$string['activitychoosertabmode_desc'] = 'Выбарнік актыўнасці дазваляе настаўніку лёгка абіраць актыўнасці і рэсурсы для дадання ў свой курс. Гэтая налада вызначае, якія ўкладкі павінны адлюстроўвацца ў выбарніку. Звярніце ўвагу, што ўкладка з зорачкамі адлюстроўваецца толькі для карыстальніка, калі ён адзначыў адну ці некалькі актыўнасцяў, а ўкладка з рэкамендацыямі адлюстроўваецца толькі ў тым выпадку, калі адміністратар сайта ўказаў рэкамендаваныя актыўнасці.';
$string['activitychoosertabmodeone'] = 'Зорачкі, Усе, Актыўнасці, Рэсурсы, Рэкамендаваныя';
$string['activitychoosertabmodethree'] = 'Зорачкі, Актыўнасці, Рэсурсы, Рэкамендаваныя';
$string['activitychoosertabmodetwo'] = 'Зорачкі, Усе, Рэкамендаваныя';
$string['activitydate:closed'] = 'Закрыты:';
$string['activitydate:closes'] = 'Закрываецца:';
$string['activitydate:opened'] = 'Адкрыты:';
$string['activitydate:opens'] = 'Адкрываецца:';
$string['aria:coursecategory'] = 'Катэгорыя курса';
$string['aria:courseimage'] = 'Выява курса';
$string['aria:coursename'] = 'Назва курса';
$string['aria:courseshortname'] = 'Кароткая назва курса';
$string['aria:defaulttab'] = 'Актыўнасці па змоўчаннні';
$string['aria:favourite'] = 'Курс з зорачкай';
$string['aria:favouritestab'] = 'Актыўнасці з зорачкай';
$string['aria:modulefavourite'] = 'Адзначыць зорачкай {$a} актыўнасць';
$string['aria:recommendedtab'] = 'Рэкамендаваныя актыўнасці';
$string['browsecourseadminindex'] = 'Прагляд адміністрацыі курса з дапамогай гэтага індэкса.';
$string['browsesettingindex'] = 'Прагляд наладаў з дапамогай гэтага індэкса.';
$string['completion_automatic:done'] = 'Выкананы:';
$string['completion_automatic:failed'] = 'Правалены:';
$string['completion_automatic:todo'] = 'Трэба зрабвыканацьіць:';
$string['completion_manual:aria:done'] = '{$a} адзначаны як выкананы. Націсніце, каб скасаваць.';
$string['completion_manual:aria:markdone'] = 'Адзначыць {$a} як выкананы';
$string['completion_manual:done'] = 'Выкананы';
$string['completion_manual:markdone'] = 'Адзначыць як выкананы';
$string['completion_setby:auto:done'] = 'Выкананы: {$a->condition} (усталяваны {$a->setby})';
$string['completion_setby:auto:todo'] = 'Трэба выканаць: {$a->condition} (усталяваны {$a->setby})';
$string['completion_setby:manual:done'] = 'Актыўнасць {$a->activityname} адзначана {$a->setby} як выкананая. Націсніце, каб скасаваць.';
$string['completion_setby:manual:markdone'] = 'Актыўнасць {$a->activityname} адзначана {$a->setby} як не выкананая. Націсніце, каб адзначыць як выкананая.';
$string['completionrequirements'] = 'Патрабаванні выканання для {$a}';
$string['coursealreadyfinished'] = 'Курс ужо завершаны';
$string['coursecontentnotification'] = 'Адправіць паведамленне пра змену змесціва';
$string['coursecontentnotification_help'] = 'Пастаўце галачку, каб паведаміць удзельнікаў курса пра новую ці змененую актыўнасць або рэсурс. Паведамленне атрымаюць толькі тыя карыстальнікі, якія могуць атрымаць доступ да актыўнасці ці рэсурсу.';
$string['coursecontentnotifnew'] = '{$a->coursename} новае змесціва';
$string['coursecontentnotifnewbody'] = '<p>Модуль <a href="{$a->link}">{$a->modulename}</a> тыпу {$a->moduletypename} быў даданы ў курсе <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Змяніць перавагі паведамленняў</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} змесціва зменена';
$string['coursecontentnotifupdatebody'] = '<p>Модуль <a href="{$a->link}">{$a->modulename}</a> тыпу {$a->moduletypename} быў зменены ў курсе <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Змяніць перавагі паведамленняў</a></p>';
$string['coursenotyetfinished'] = 'Курс дагэтуль не завершаны';
$string['coursenotyetstarted'] = 'Курс яшчэ не пачаты';
$string['coursetoolong'] = 'Курс задоўгі';
$string['customfield_islocked'] = 'Заблакаваны';
$string['customfield_islocked_help'] = 'Калі поле заблакавана, толькі карыстальнікі са здольнасцю змены заблакаваных карыстальніцкіх палёў (па змаўчанні карыстальнікі з роллю кіроўны (якая наладжана па змаўчанні) змогуць змяніць яго ў наладах курса.';
$string['customfield_notvisible'] = 'Аніхто';
$string['customfield_visibility'] = 'Бачны для';
$string['customfield_visibility_help'] = 'Гэта налада вызначае, хто можа праглядаць назву і значэнне карыстальніцкага поля ў спісе курсаў ці ў фільтры даступных карыстальніцкіх палёў у Адукаванні.';
$string['customfield_visibletoall'] = 'Усіх';
$string['customfield_visibletoteachers'] = 'Настаўнікаў';
$string['customfieldsettings'] = 'Агульныя налады ўласных палёў курса';
$string['downloadcontent'] = 'Уключыць у спампоўку змесціва курса';
$string['downloadcontent_help'] = 'Ці трэба ўключаць гэтую актыўнасць ці рэсурс у zip-файл са змесцівам курса, даступны для спампоўкі? Файл, Тэчка, Старонка і Цэтлік могуць быць цалкам спампованы. Для ўсіх астатніх тыпаў актыўнасцяў і рэсурсаў спампоўваецца толькі назва і апісанне. Гэтая опцыя патрабуе, каб у наладах курса была ўключана функцыя спампоўвання змесціва курса.

Гэтая налада не ўплывае на спампоўванне змесціва ў мабільным дадатку для афлайн выкарыстання.';
$string['downloadcourseconfirmation'] = 'Вы збіраецеся спампаваць zip-файл са змесцівам курса (за выняткам прадметаў, якія нельга спампаваць, і ўсіх файлаў памерам больш за {$a}).';
$string['downloadcoursecontent'] = 'Спампаваць змесціва курса';
$string['downloadcoursecontent_help'] = 'Гэтая налада вызначае, ці могуць спампоўваць змесціва курса карыстальнікі са здольнасцю спампоўкі змесціва курса (па змаўчанні - гэта карыстальнікі з роллю студэнт ці настаўнік).';
$string['enabledownloadcoursecontent'] = 'Дазволіць спампоўку змесціва курса';
$string['errorendbeforestart'] = 'Дата сканчэння ({$a}) стаіць раней за дату пачатку курса.';
$string['favourite'] = 'Упадабаны курс';
$string['gradetopassnotset'] = 'Для гэтага курса не усталявана прахадная адзнака. Яе льга ўсталяваць ў прадмеце адзнакі курса (налада Журнала адзнак).';
$string['informationformodule'] = 'Інфармацыя пра актыўнасць {$a}';
$string['module'] = 'Актыўнасць';
$string['noaccesssincestartinfomessage'] = 'Прывітанне {$a->userfirstname},
<p>{$a->coursename} студэнтаў ніколі не захадзіла ў курс.</p>';
$string['nocourseactivity'] = 'У курсе недастаткова актыўнасцяў між пачаткам і канцом курса';
$string['nocourseendtime'] = 'Курс не мае дату сканчэння';
$string['nocoursesections'] = 'Курс не мае падзелаў';
$string['nocoursestudents'] = 'Курс не мае студэнтаў';
$string['norecentaccessesinfomessage'] = 'Прывітанне {$a->userfirstname},
<p>{$a->coursename} студэнтаў не захадзіла ў курс апошнім часам.</p>';
$string['noteachinginfomessage'] = 'Прывітанне {$a->userfirstname},
<p>Курсы, якія пачынаюцца на наступным тыдні, не маюць залічаных настаўнікаў ці студэнтаў.</p>';
$string['participants:perpage'] = 'Колькасць удзельнікаў на старонцы';
$string['participants:perpage_help'] = 'Колькасць карыстальнікаў, якая будзе адлюстроўвацца на старонцы ўдзельнікаў у кожным курсе.';
$string['participantsnavigation'] = 'Удзельнікі трацёвай навігацыі.';
$string['privacy:completionpath'] = 'Выкананне курса';
$string['privacy:favouritespath'] = 'Інфармацыя пра ўпадабанае курса';
$string['privacy:metadata:activityfavouritessummary'] = 'Сістэма курса ўтрымлівае інфармацыю пра прадметы, якія ўпадабалі карыстальнікі праз выбарнік актыўнасці.';
$string['privacy:metadata:completionsummary'] = 'Курс утрымлівае інфармацыю выканання карыстальніка.';
$string['privacy:metadata:favouritessummary'] = 'Курс утрымлівае інфармацыю, звязаную з упадабаным карыстальніка ў курсе.';
$string['privacy:perpage'] = 'Колькасць курсаў, што будзе адлюстроўвацца на старонцы.';
$string['recommend'] = 'Рэкамендаваць';
$string['recommendcheckbox'] = 'Рэкамендаваць актыўнасць: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} пасля пачатку курса';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} да пачатку курса';
$string['searchactivitiesbyname'] = 'Шукаць актыўнасці па назве';
$string['searchresults'] = 'Вынікі пошуку: {$a}';
$string['studentsatriskincourse'] = 'Студэнты рызыкуюць у курсе {$a}';
$string['studentsatriskinfomessage'] = 'Прывітанне {$a->userfirstname},
<p>{$a->coursename} студэнтаў у курсе знаходзяцца ў зоне рыска.</p>';
$string['submitsearch'] = 'Спраўдзіць пошук';
$string['target:coursecompetencies'] = 'Студэнты рызыкуюць не дасягнуць кампетэнцыяў, замацаваныя за курсам';
$string['target:coursecompetencies_help'] = 'Гэтая мэта характарызуе, ці мае студэнт рызыку не дасягнуць кампетэнцыяў, замацаваных за курсам. Гэтая мэта лічыць, што ўсе кампетэнцыі, замацаваныя за курсам, трэба дасягнуць да сканчэння курса.';
$string['target:coursecompletion'] = 'Студэнты рызыкуюць не выканаць умовы выканання курса';
$string['target:coursecompletion_help'] = 'Гэтая мэта характарызуе, ці мае студэнт рызыку не выканаць умовы выканання курса.';
$string['target:coursedropout'] = 'Студэнты рызыкуюць адлічыцца';
$string['target:coursedropout_help'] = 'Гэтая мэта характарызуе, ці мае студэнт рызыку адлічыцца з курса.';
$string['target:coursegradetopass'] = 'Студэнты рызыкуюць не атрымаць мінімальную прахадную адзнаку курса';
$string['target:coursegradetopass_help'] = 'Гэтая мэта характарызуе, ці мае студэнт рызыку не атрымаць мінімальную прахадную адзнаку курса.';
$string['target:noaccesssincecoursestart'] = 'Студэнты, якія дагэтуль не атрымалі доступ у курс';
$string['target:noaccesssincecoursestart_help'] = 'Гэтая мэта адлюстроўвае студэнтаў, якія ніколі не ўваходзілі у курс, у які яны залічаны.';
$string['target:noaccesssincecoursestartinfo'] = 'Наступныя студэнты залічаны ў курс, што пачаўся, але яны ніколі не ўваходзілі ў курс.';
$string['target:norecentaccesses'] = 'Студэнты, якія не ўваходзілі ў курс апошнім часам';
$string['target:norecentaccesses_help'] = 'Гэтая мэта вызначае студэнтаў, якія не ўваходзілі ў курс, у які яны залічаны, цягам усталяванага інтэрвалу аналізу (па змаўчанні, за апошні месяц).';
$string['target:norecentaccessesinfo'] = 'Наступныя студэнты не ўваходзілі ў курс, у які яны залічаны, цягам усталяванага інтэрвалу аналізу (па змаўчанні, за апошні месяц).';
$string['target:noteachingactivity'] = 'Курсы, якія рызыкуюць не пачацца';
$string['target:noteachingactivity_help'] = 'Гэтая мэта вызначае, ці будзе ў курсах, якія мусяць пачацца на наступным тыдні, весціся выкладніцкая актыўнасць.';
$string['target:noteachingactivityinfo'] = 'Наступныя курсы, мусяць пачацца ў найблізкія дні, але рызыкуюць не пачацца, бо ў іх не залічаны студэнты ці настаўнікі.';
$string['targetlabelstudentcompetenciesno'] = 'Студэнт хутчэй за ўсё дасягне кампетэнцыі, замацаваныя за курсам';
$string['targetlabelstudentcompetenciesyes'] = 'Студэнт рызыкуе не дасягнуць кампетэнцыі, замацаваныя за курсам';
$string['targetlabelstudentcompletionno'] = 'Студэнт хутчэй за ўсё выканае ўмовы выканання курса';
$string['targetlabelstudentcompletionyes'] = 'Студэнт рызыкуе не выканаць умовы выканання курса';
$string['targetlabelstudentdropoutno'] = 'Не рызыкуе';
$string['targetlabelstudentdropoutyes'] = 'Студэнт рызыкуе адлічыцца';
$string['targetlabelstudentgradetopassno'] = 'Студэнт хутчэй за ўсё атрымае мінімальную прахадную адзнаку курса.';
$string['targetlabelstudentgradetopassyes'] = 'Студэнт рызыкуе не атрымаць мінімальную прахадную адзнаку курса.';
$string['targetlabelteachingno'] = 'Куосы рызыкуюць не пачацца';
$string['targetlabelteachingyes'] = 'Карыстальнікі са здольнасцямі настаўніка, якія маюць доступ да курса';
