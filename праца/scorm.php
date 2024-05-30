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
 * Strings for component 'scorm', language 'en', version '4.0'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Актывацыя';
$string['activityloading'] = 'Вы будзеце аўтаматычна перанакіраваны ў актыўнасьць з';
$string['activityoverview'] = 'Вы маеце SCORM-пакеты, якія патрабуюць увагі';
$string['activitypleasewait'] = 'Загрузка актыўнасьці, калі ласка, чакайце ...';
$string['adminsettings'] = 'Налады адміністраваньня';
$string['advanced'] = 'Параметры';
$string['aicchacpkeepsessiondata'] = 'Дадзеныя сесіі AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Працягласьць часу ў днях дзеля захаваньня вонкавых дадзеных сесіі AICC HACP (больш высокае значэньне прывядзе да запаўненьня табліцы старымі дадзенымі, але можа быць карысна подчас адладкі)';
$string['aicchacptimeout'] = 'Таймаўт AICC HACP';
$string['aicchacptimeout_desc'] = 'Працягласьць часу ў мінутах, падчас якой вонкавая сесія AICC HACP можа заставацца адкрытай';
$string['aiccuserid'] = 'Лічбавы id карыстальніка з пропускам AICC';
$string['aiccuserid_desc'] = 'Стандарты AICC для логінаў вельмі абмежаваныя ў параўнаньні з Moodle і дазваляюць толькі алфавітна-лічбавыя знакі, працяжнік і падкрэсленьне. Кропкі, прабелы і знак @ забаронены. Калі ўключана, то заміж логінаў карыстальнікаў у AICC-пакет перадаюцца ID-нумары карыстальнікаў.';
$string['aliasonly'] = 'Падчас абраньня файлу imsmanifest.xml з рэпазітара вы мусіце выкарыстоўваць мянушку/ярлык для гэтага файлу.';
$string['allowapidebug'] = 'Актываваць адладку і адсочваньне API (усталюйце маску захопу з дапамогай apidebugmask)';
$string['allowtypeaicchacp'] = 'Уключыць вонкавы AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Калі ўключана, дазваляе AICC HACP вонкавае камунікаваньне без патрэбы ўваходу карыстальніка дзеля post-запытаў ад вонкавага AICC-пакета.';
$string['allowtypeexternal'] = 'Уключыць вонкавы тып пакетаў';
$string['allowtypeexternalaicc'] = 'Уключыць прамы AICC URL';
$string['allowtypeexternalaicc_desc'] = 'Калі ўключана, гэта дазваляе прама перайсьці да простага AICC-пакету';
$string['allowtypelocalsync'] = 'Уключыць спампаваны тып пакетаў';
$string['apidebugmask'] = 'Наладкавая маска захопу API - выкарыстоўваце простыя рэгулярныя выразы (regex) &lt;username&gt;:&lt;activityname&gt; напрыклад, admin:.* будзе адладжваць толькі карыстальніка admin';
$string['areacontent'] = 'Файлы кантэнту';
$string['areapackage'] = 'Файл пакету';
$string['asset'] = 'Ассэт';
$string['assetlaunched'] = 'Ассэт - Прагледжаны';
$string['attempt'] = 'Спроба';
$string['attempt1'] = '1 спроба';
$string['attempts'] = 'Спробы';
$string['attemptsmanagement'] = 'Кіраваньне спробамі';
$string['attemptstatusall'] = 'Прыладавая і старонка ўваходу';
$string['attemptstatusentry'] = 'Толькі старонка ўваходу';
$string['attemptstatusmy'] = 'Толькі прыладавая';
$string['attemptsx'] = '{$a} спробаў';
$string['attr_error'] = 'Дрэннае значэньне для атрыбута ({$a->attr}) у тэге {$a->tag}.';
$string['autocommit'] = 'Аўтазьдзяйсьненьне';
$string['autocommit_help'] = 'Калі ўключана, SCORM-дадзеныя аўтаматычна захоўваюцца ў базе дадзеных. Карысна для SCORM-аб\'ектаў, якія не захоўваюць свае дадзеныя рэгулярна.';
$string['autocommitdesc'] = 'Аўтаматычнае захаваньне SCORM-дадзеных, калі SCORM-пакет не захоўвае іх.';
$string['autocontinue'] = 'Аўтапрацяг';
$string['autocontinue_help'] = 'Калі ўключана, наступныя вучэбныя аб\'екты запускаюцца аўтаматычна, у адваротным чыне трэба выкарыстоўваць кнопку Працягнуць.';
$string['autocontinuedesc'] = 'Калі ўключана, наступныя вучэбныя аб\'екты запускаюцца аўтаматычна, у адваротным чыне трэба выкарыстоўваць кнопку Працягнуць.';
$string['averageattempt'] = 'Сярэднія спробы';
$string['badarchive'] = 'Вы мусіце падаць слушны zip-файл';
$string['badimsmanifestlocation'] = 'Быў знойдзены imsmanifest.xml файл, але ён не знаходзіцца ў корні вашага zip-файла, калі ласка, перапакуйце вашы SCORM';
$string['badmanifest'] = 'Памылкі маніфестаў: глядзіце лог памылак';
$string['browse'] = 'Прадпрагляд';
$string['browsed'] = 'Прагледжана';
$string['browsemode'] = 'Рэжым прадпрагляду';
$string['browserepository'] = 'Праглядзець рэпазітар';
$string['calculatedweight'] = 'Разьлічаная вага';
$string['calendarend'] = 'закрываецца {$a}';
$string['calendarstart'] = 'адкрываецца {$a}';
$string['cannotaccess'] = 'Вы ня можаце выклікаць гэты скрыпт такім чынам';
$string['cannotfindsco'] = 'Нельга знайсьці SCO';
$string['chooseapacket'] = 'Абярыце ці абнавіце пакет';
$string['closebeforeopen'] = 'Вы вызначылі дату закрыцьця да даты адкрыцьця.';
$string['collapsetocwinsize'] = 'Згарнуць TOC падчас зьмяншэньня памеру вакна';
$string['collapsetocwinsizedesc'] = 'Гэтая налада дазваляе вызначыць памер вакна, ніжэй якога TOC мусіць аўтаматычна згортвацца.';
$string['compatibilitysettings'] = 'Налады сумяшчальнасьці';
$string['completed'] = 'Выканана';
$string['completiondetail:allscos'] = 'Выканайце ўсе часткі гэтай актыўнасьці';
$string['completiondetail:completionscore'] = 'Атрымайце бал {$a} ці болей';
$string['completiondetail:completionstatuscompleted'] = 'Выканайце актыўнасьць';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Выканайце ці прайдзіце актыўнасьць';
$string['completiondetail:completionstatuspassed'] = 'Прайдзіце актыўнасьць';
$string['completionscorerequired'] = 'Патрабуецца мінімальны бал';
$string['completionscorerequired_help'] = 'Уключэньне гэтай налады патрабуе атрыманьня карыстальнікам прынамсі мінімальнага балу дзеля выкананьня гэтай SCORM-актыўнасьці, а таксама выкананьня ўсіх іншых патрабаваньняў Выкананьня Актыўнасьці.';
$string['completionscorerequireddesc'] = 'Дзеля выкананьня патрабуецца мінімальны бал {$a}';
$string['completionstatus_completed'] = 'Выканана';
$string['completionstatus_passed'] = 'Пройдзена';
$string['completionstatusallscos'] = 'Патрабаваць усе scos дзеля вяртаньня статусу выкананьня';
$string['completionstatusallscos_help'] = 'Некаторыя SCORM-пакеты ўтрымліваюць некалькі кампанентаў ці "scos". Калі гэтая налада ўключана, усе scos пакеты мусяць вяртаць адпаведны lesson_status для гэтай актыўнасьці дзеля яе выкананьня.';
$string['completionstatusrequired'] = 'Патрабаваць статус';
$string['completionstatusrequired_help'] = 'Праверка аднаго ці некалькіх статусаў будзе патрабаваць ад карыстальніка атрыманьня прынамсі аднаго з правераных статусаў дзеля выкананьня гэтай SCORM-актыўнасьці, а таксама ўсіх іншых патрабаваньняў Выкананьня Актыўнасьці.';
$string['completionstatusrequireddesc'] = 'Студэнт мусіць атрымаць прынамсі адзін з наступных статусаў: {$a}';
$string['confirmloosetracks'] = 'УВАГА: здаецца пакет зьменены ці мадыфікаваны. Калі структура пакета зьменена, у працэсе абнаўленьня могуць быць страчаны некаторыя карыстальніцкія дадзеныя.';
$string['contents'] = 'Зьмесьціва';
$string['coursepacket'] = 'Пакет курса';
$string['coursestruct'] = 'Структура курса';
$string['crontask'] = 'Фонавая апрацоўка SCORM';
$string['currentwindow'] = 'Цяперашняе вакно';
$string['datadir'] = 'Памылка файлавай сістэмы: Нельга стварыць тэчку для дадзеных курса';
$string['defaultdisplaysettings'] = 'Стандартныя налады адлюстраваньня';
$string['defaultgradesettings'] = 'Стандартныя налады ацэньваньня';
$string['defaultothersettings'] = 'Іншыя стандартныя налады';
$string['deleteallattempts'] = 'Выдаліць усе SCORM-спробы';
$string['deleteattemptcheck'] = 'Вы сапраўды ўпэўнены, што жадаеце цалкам выдаліць гэтыя спробы?';
$string['deleteselected'] = 'Выдаліць абраныя спробы';
$string['deleteuserattemptcheck'] = 'Вы сапраўды ўпэўнены, што жадаеце цалкам выдаліць усе свае спробы?';
$string['details'] = 'Дэталі адсочваньня';
$string['directories'] = 'Паказаць спасылкі на тэчку';
$string['disabled'] = 'Адключана';
$string['display'] = 'Адлюстраваць пакет';
$string['displayactivityname'] = 'Адлюстраваць назву актыўнасьці';
$string['displayactivityname_help'] = 'Вызначае, ці трэба адлюстроўваць назву актыўнасьці над SCORM-прайгравальнікам.';
$string['displayattemptstatus'] = 'Адлюстраваць статус спробы';
$string['displayattemptstatus_help'] = 'Гэтая перавага дазваляе адлюстроўваць агляд спробаў карыстальнікаў у блоке агляду ў Прыладавай і/альбо на старонке ўваходу SCORM.';
$string['displayattemptstatusdesc'] = 'Вызначае, ці трэба адлюстроўваць агляд спробаў карыстальнікаў у блоке агляду ў Прыладавай і/альбо на старонке ўваходу SCORM.';
$string['displaycoursestructure'] = 'Адлюстраваць структуру курса на старонцы ўваходу';
$string['displaycoursestructure_help'] = 'Калі ўключана, табліца зьмесьціва адлюстроўваецца на старонцы зьместу SCORM.';
$string['displaycoursestructuredesc'] = 'Калі ўключана, табліца зьмесьціва адлюстроўваецца на старонцы зьместу SCORM.';
$string['displaydesc'] = 'Вызначае, ці трэба адлюстроўваць SCORM-пакет у новым акне.';
$string['displaysettings'] = 'Налады адлюстраваньня';
$string['dnduploadscorm'] = 'Дадаць SCORM-пакет';
$string['domxml'] = 'Вонкавая бібліятэка DOMXML';
$string['element'] = 'Элемент';
$string['enter'] = 'Увайсьці';
$string['entercourse'] = 'Увайсьці ў курс';
$string['errorlogs'] = 'Лог памылак';
$string['eventattemptdeleted'] = 'Спроба выдалена';
$string['eventinteractionsviewed'] = 'Узаемадзеяньні прагледжаны';
$string['eventreportviewed'] = 'Справаздача прагледжана';
$string['eventscolaunched'] = 'Sco запушчаны';
$string['eventscorerawsubmitted'] = 'Адпраўлены чарнавы SCORM-бал';
$string['eventstatussubmitted'] = 'Адпраўлены SCORM-статус';
$string['eventtracksviewed'] = 'Адсочваньні прагледжаны';
$string['eventuserreportviewed'] = 'Справаздача пра карыстальніка прагледжана';
$string['everyday'] = 'Кожны дзень';
$string['everytime'] = 'Кожны раз падчас выкарыстаньня';
$string['exceededmaxattempts'] = 'Вы дасягнулі максімальнай колькасьці спробаў.';
$string['exit'] = 'Выйсьці з курса';
$string['exitactivity'] = 'Выйсьці з актыўнасьці';
$string['expired'] = 'Прабачце, гэтая актыўнасьць закрыта з {$a} і болей не даступна';
$string['external'] = 'Абнавіць час вонкавых пакетаў';
$string['failed'] = 'Правалена';
$string['finishscorm'] = 'Калі вы скончылі прагляд гэтага рэсурса, {$a}';
$string['finishscormlinkname'] = 'націсьніце тут, каб вярнуцца на старонку курса';
$string['firstaccess'] = 'Першы доступ';
$string['firstattempt'] = 'Першая спроба';
$string['floating'] = 'Плывучая';
$string['forceattemptalways'] = 'Заўжды';
$string['forceattemptoncomplete'] = 'Калі папярэдняя спроба выканана, пройдзена ці правалена';
$string['forcecompleted'] = 'Прымусова выканана';
$string['forcecompleted_help'] = 'Калі ўключана, статус цяперашняй спробы прымусова "выкананы" (Дастасоўна толькі да пакетаў SCORM 1.2).';
$string['forcecompleteddesc'] = 'Гэтая перавага ўсталёўвае стандартнае значэньне для налады прымусовага выкананьня';
$string['forcejavascript'] = 'Прымусіць карыстальнікаў уключаць JavaScript';
$string['forcejavascript_desc'] = 'Калі ўключана (рэкамендуецца), яна прадухіляе доступ да SCORM-аб\'ектаў, калі JavaScript выключаны альбо не падтрымліваецца браўзарам карыстальніка. Калі адключана, карыстальнік можа праглядаць SCORM, але камунікаваньне з API будзе парушана і інфармацыя пра адзнакі ня будзе захавана.';
$string['forcejavascriptmessage'] = 'Дзеля прагляду гэтага аб\'екту патрабуецца JavaScript, калі ласка, уключыце JavaScript у вашым браўзары і паўтарыце спробу.';
$string['forcenewattempts'] = 'Прымусіць пачаць новую спробу';
$string['forcenewattempts_help'] = 'Маецца 3 опцыі:

* Не - Калі папярэдняя спроба выканана, пройдзена ці правалена, студэнту будзе падана магчымасьць перайсьці ў рэжым прагляду ці пачаць новую спробу.
* Калі папярэдняя спроба выканана, пройдзена ці правалена. Гэта залежыць ад таго, ці ўсталюе SCORM-пакет статус \'выканана\', \'пройдзена\' альбо \'правалена\'.
* Заўжды - Падчас кожнага новага ўвахода ў SCORM-актыўнасьць будзе стварацца новая спроба, і студэнт ня будзе вяртацца ў кропку, якой дасягнуў падчас папярэдняй спробы.';
$string['found'] = 'Маніфест знойдзены';
$string['frameheight'] = 'Вышыня фрэйму альбо акна.';
$string['framewidth'] = 'Шырыня фрэйму альбо акна.';
$string['fromleft'] = 'Злева';
$string['fromtop'] = 'Справа';
$string['fullscreen'] = 'Запоўніць увесь экран';
$string['general'] = 'Агульныя дадзеныя';
$string['gradeaverage'] = 'Сярэдняя адзнака';
$string['gradeforattempt'] = 'Адзнака за спробу';
$string['gradehighest'] = 'Найвысокая адзнака';
$string['grademethod'] = 'Метад ацэньваньня';
$string['grademethod_help'] = 'Метад ацэньваньня вызначае, як вызначаецца адзнака за адну спробу выкананьня актыўнасьці.

Маецца 4 метаду ацэньваньня:

* Навучальныя аб\'екты - Колькасьць выкананых/пройдзеных навучальных аб\'ектаў
* Найвысокая адзнака - Найвысокі бал, атрыманы за ўсе пройдзеныя навучальныя аб\'екты
* Сярэдняя адзнака - Сярэняя з усіх балаў
* Сума адзнак - Сума ўсіх балаў';
$string['grademethoddesc'] = 'Метад ацэньваньня вызначае, як вызначаецца адзнака за адну спробу выкананьня актыўнасьці.';
$string['gradereported'] = 'Адзнака перадана';
$string['gradescoes'] = 'Навучальныя аб\'екты';
$string['gradesettings'] = 'Налады ацэньваньня';
$string['gradesum'] = 'Сума адзнак';
$string['height'] = 'Вышыня';
$string['hidden'] = 'Схавана';
$string['hidebrowse'] = 'Disable preview mode';
$string['hidebrowse_help'] = 'Preview mode allows a student to browse an activity before attempting it. If preview mode is disabled, the preview button is hidden.';
$string['hidebrowsedesc'] = 'Preview mode allows a student to browse an activity before attempting it.';
$string['hideexit'] = 'Hide exit link';
$string['hidereview'] = 'Hide review button';
$string['hidetoc'] = 'Display course structure in player';
$string['hidetoc_help'] = 'How the table of contents is displayed in the SCORM player';
$string['hidetocdesc'] = 'This setting specifies how the table of contents is displayed in the SCORM player.';
$string['highestattempt'] = 'Highest attempt';
$string['identifier'] = 'Question identifier';
$string['incomplete'] = 'Incomplete';
$string['indicator:cognitivedepth'] = 'SCORM cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a SCORM activity.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitive';
$string['indicator:cognitivedepthdef_help'] = 'The participant has reached this percentage of the cognitive engagement offered by the SCORM activities during this analysis interval (Levels = No view, View, Submit, View feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a SCORM activity.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'The participant has reached this percentage of the social engagement offered by the SCORM activities during this analysis interval (Levels = No participation, Participant alone)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Info';
$string['interactions'] = 'Interactions';
$string['invalidactivity'] = 'SCORM activity is incorrect';
$string['invalidhacpsession'] = 'Invalid HACP session';
$string['invalidmanifestname'] = 'Only imsmanifest.xml or .zip files may be selected';
$string['invalidmanifestresource'] = 'WARNING: The following resources were referenced in your manifest but couldn\'t be found:';
$string['invalidstatus'] = 'Invalid status';
$string['invalidurl'] = 'Invalid URL specified';
$string['invalidurlhttpcheck'] = 'Invalid URL specified. Debug message:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Last accessed on';
$string['lastaccess'] = 'Last access';
$string['lastattempt'] = 'Last completed attempt';
$string['lastattemptlock'] = 'Lock after final attempt';
$string['lastattemptlock_help'] = 'If enabled, a student is prevented from launching the SCORM player after using up all their allocated attempts.';
$string['lastattemptlockdesc'] = 'If enabled, a student is prevented from launching the SCORM player after using up all their allocated attempts.';
$string['location'] = 'Show the location bar';
$string['masteryoverride'] = 'Mastery score overrides status';
$string['masteryoverride_help'] = 'If enabled and a mastery score is provided, when LMSFinish is called and a raw score has been set, status will be recalculated using the raw score and mastery score and any status provided by the SCORM (including "incomplete") will be overridden.';
$string['masteryoverridedesc'] = 'This preference sets the default for the mastery score override setting';
$string['max'] = 'Max score';
$string['maximumattempts'] = 'Number of attempts';
$string['maximumattempts_help'] = 'This setting enables the number of attempts to be restricted. It is only applicable for SCORM 1.2 and AICC packages.';
$string['maximumattemptsdesc'] = 'This preference sets the default maximum attempts for an activity';
$string['maximumgradedesc'] = 'This preference sets the default maximum grade for an activity';
$string['menubar'] = 'Show the menu bar';
$string['min'] = 'Minimum score';
$string['missing_attribute'] = 'Missing attribute {$a->attr} in tag {$a->tag}';
$string['missing_tag'] = 'Missing tag {$a->tag}';
$string['missingparam'] = 'A required parameter is missing or wrong';
$string['mode'] = 'Mode';
$string['modulename'] = 'SCORM package';
$string['modulename_help'] = 'A SCORM package is a collection of files which are packaged according to an agreed standard for learning objects. The SCORM activity module enables SCORM or AICC packages to be uploaded as a zip file and added to a course.

Content is usually displayed over several pages, with navigation between the pages. There are various options for displaying content in a pop-up window, with a table of contents, with navigation buttons etc. SCORM activities generally include questions, with grades being recorded in the gradebook.

SCORM activities may be used

* For presenting multimedia content and animations
* As an assessment tool';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM packages';
$string['myaiccsessions'] = 'My AICC sessions';
$string['myattempts'] = 'My attempts';
$string['nav'] = 'Show Navigation';
$string['nav_help'] = 'This setting specifies whether to show or hide the navigation buttons and their position.

There are 3 options:

* No - Navigation buttons are not shown
* Under content - Navigation buttons are shown below the SCORM package content
* Плывучая - Navigation buttons are shown floating, with the position from the top and from the left determined by the package.';
$string['navdesc'] = 'This setting specifies whether to show or hide navigation buttons and their position.';
$string['navigation'] = 'Navigation';
$string['navpositionleft'] = 'Position of navigation buttons from left in pixels.';
$string['navpositiontop'] = 'Position of navigation buttons from top in pixels.';
$string['networkdropped'] = 'The SCORM player has determined that your Internet connection is unreliable or has been interrupted. If you continue in this SCORM activity, your progress may not be saved.<br />
You should exit the activity now, and return when you have a dependable Internet connection.';
$string['newattempt'] = 'Start a new attempt';
$string['next'] = 'Continue';
$string['no_attributes'] = 'Tag {$a->tag} must have attributes';
$string['no_children'] = 'Tag {$a->tag} must have children';
$string['noactivity'] = 'Nothing to report';
$string['noattemptsallowed'] = 'Number of attempts allowed';
$string['noattemptsmade'] = 'Number of attempts you have made';
$string['nolimit'] = 'Unlimited attempts';
$string['nomanifest'] = 'Incorrect file package - missing imsmanifest.xml or AICC structure';
$string['noprerequisites'] = 'Sorry but you don\'t have the required prerequisites to access this activity.';
$string['noreports'] = 'No report to display';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Your browser does not support JavaScript or it has JavaScript support disabled. This SCORM package may not play or save data correctly.';
$string['not_corr_type'] = 'Type mismatch for tag {$a->tag}';
$string['notattempted'] = 'Not attempted';
$string['notopenyet'] = 'Sorry, this activity is not available until {$a}';
$string['objectives'] = 'Objectives';
$string['openafterclose'] = 'You have specified an open date after the close date';
$string['optallstudents'] = 'all users';
$string['optattemptsonly'] = 'users with attempts only';
$string['options'] = 'Options (Prevented by some browsers)';
$string['optionsadv'] = 'Options (Advanced)';
$string['optionsadv_desc'] = 'If checked the width and height will be listed as advanced settings.';
$string['optnoattemptsonly'] = 'users with no attempts only';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisations';
$string['othersettings'] = 'Additional settings';
$string['package'] = 'Package file';
$string['package_help'] = 'The package file is a zip (or pif) file containing SCORM/AICC course definition files.';
$string['packagedir'] = 'Filesystem error: Can\'t create package directory';
$string['packagefile'] = 'No package file specified';
$string['packagehdr'] = 'Package';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'This setting enables a URL for the SCORM package to be specified, rather than choosing a file via the file picker.';
$string['page-mod-scorm-x'] = 'Any SCORM module page';
$string['pagesize'] = 'Page size';
$string['passed'] = 'Пройдзена';
$string['php5'] = 'PHP 5 (DOMXML native library)';
$string['pluginadministration'] = 'SCORM package administration';
$string['pluginname'] = 'SCORM-пакет';
$string['popup'] = 'New window';
$string['popuplaunched'] = 'This SCORM package has been launched in a popup window, If you have finished viewing this resource, click here to return to the course page';
$string['popupmenu'] = 'In a drop-down menu';
$string['popupopen'] = 'Open package in a new window';
$string['popupsblocked'] = 'It appears that popup windows are blocked, stopping this SCORM package from playing. Please check your browser settings before trying again.';
$string['position_error'] = 'The {$a->tag} tag can\'t be child of {$a->parent} tag';
$string['preferencespage'] = 'Preferences just for this page';
$string['preferencesuser'] = 'Preferences for this report';
$string['prev'] = 'Previous';
$string['privacy:metadata:aicc:data'] = 'Personal data passed through from the AICC/SCORM subsystem.';
$string['privacy:metadata:aicc:externalpurpose'] = 'This plugin sends data externally using the AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'The lesson status to be tracked';
$string['privacy:metadata:aicc_session:scormmode'] = 'The mode of the element to be tracked';
$string['privacy:metadata:aicc_session:scormstatus'] = 'The status of the element to be tracked';
$string['privacy:metadata:aicc_session:sessiontime'] = 'The session time to be tracked';
$string['privacy:metadata:aicc_session:timecreated'] = 'The time when the tracked element was created';
$string['privacy:metadata:attempt'] = 'The attempt number';
$string['privacy:metadata:scoes_track:element'] = 'The name of the element to be tracked';
$string['privacy:metadata:scoes_track:value'] = 'The value of the given element';
$string['privacy:metadata:scorm_aicc_session'] = 'The session information of the AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'The tracked data of the SCOes belonging to the activity';
$string['privacy:metadata:timemodified'] = 'The time when the tracked element was last modified';
$string['privacy:metadata:userid'] = 'The ID of the user who accessed the SCORM activity';
$string['protectpackagedownloads'] = 'Protect package downloads';
$string['protectpackagedownloads_desc'] = 'If enabled, SCORM packages can be downloaded only if the user has the course:manageactivities capability. If disabled, SCORM packages can always be downloaded (by mobile or other means).';
$string['raw'] = 'Raw score';
$string['regular'] = 'Regular manifest';
$string['report'] = 'Report';
$string['reportcountallattempts'] = '{$a->nbattempts} attempts for {$a->nbusers} users, out of {$a->nbresults} results';
$string['reportcountattempts'] = '{$a->nbresults} results ({$a->nbusers} users)';
$string['reports'] = 'Reports';
$string['repositorynotsupported'] = 'This repository does not support linking directly to an imsmanifest.xml file.';
$string['response'] = 'Response';
$string['result'] = 'Result';
$string['results'] = 'Results';
$string['review'] = 'Review';
$string['reviewmode'] = 'Review mode';
$string['rightanswer'] = 'Right answer';
$string['scoes'] = 'Learning objects';
$string['score'] = 'Score';
$string['scorm:addinstance'] = 'Add a new SCORM package';
$string['scorm:deleteownresponses'] = 'Delete own attempts';
$string['scorm:deleteresponses'] = 'Delete SCORM attempts';
$string['scorm:savetrack'] = 'Save tracks';
$string['scorm:skipview'] = 'Skip overview';
$string['scorm:viewreport'] = 'View reports';
$string['scorm:viewscores'] = 'View scores';
$string['scormclose'] = 'Available to';
$string['scormcourse'] = 'Learning course';
$string['scormloggingoff'] = 'API logging is off';
$string['scormloggingon'] = 'API logging is on';
$string['scormopen'] = 'Available from';
$string['scormresponsedeleted'] = 'Deleted user attempts';
$string['scormstandard'] = 'SCORM standards mode';
$string['scormstandarddesc'] = 'When disabled, Moodle allows SCORM 1.2 packages to store more than the specification allows, and uses Moodle full name format settings when passing the users name to the SCORM package.';
$string['scormtype'] = 'Type';
$string['scormtype_help'] = 'This setting determines how the package is included in the course. There are up to 4 options:

* Uploaded package - Enables a SCORM package to be chosen via the file picker
* External SCORM manifest - Enables an imsmanifest.xml URL to be specified. Note: If the URL has a different domain name than your site, then "Downloaded package" is a better option, since otherwise grades are not saved.
* Downloaded package - Enables a package URL to be specified. The package will be unzipped and saved locally, and updated when the external SCORM package is updated.
* External AICC URL - this URL is the launch URL for a single AICC Activity.  A psuedo package will be constructed around this.';
$string['scrollbars'] = 'Allow the window to be scrolled';
$string['search:activity'] = 'SCORM package - activity information';
$string['selectall'] = 'Select all';
$string['selectnone'] = 'Deselect all';
$string['show'] = 'Show';
$string['sided'] = 'To the side';
$string['skipview'] = 'Student skip content structure page';
$string['skipview_help'] = 'This setting specifies whether the content structure page should ever be skipped (not displayed). If the package contains only one learning object, the content structure page can always be skipped.';
$string['skipviewdesc'] = 'This preference sets the default for when to skip content structure for a page';
$string['slashargs'] = 'WARNING: slash arguments is disabled on this site and objects may not function as expected!';
$string['stagesize'] = 'Stage size';
$string['stagesize_help'] = 'These two settings specify the frame/window width and height for the learning objects.';
$string['started'] = 'Started on';
$string['status'] = 'Status';
$string['statusbar'] = 'Show the status bar';
$string['student_response'] = 'Response';
$string['subplugintype_scormreport'] = 'Report';
$string['subplugintype_scormreport_plural'] = 'Reports';
$string['suspended'] = 'Suspended';
$string['syntax'] = 'Syntax error';
$string['tag_error'] = 'Unknown tag ({$a->tag}) with this content: {$a->value}';
$string['time'] = 'Time';
$string['title'] = 'Title';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Tag {$a->tag} has too many attributes';
$string['too_many_children'] = 'Tag {$a->tag} has too many children';
$string['toolbar'] = 'Show the toolbar';
$string['totaltime'] = 'Time';
$string['trackcorrectcount'] = 'Correct count';
$string['trackcorrectcount_help'] = 'Number of correct results for the question';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'This is the identifier set by your SCORM package for this question, the SCORM specification doesn\'t allow the full question text to be provided.';
$string['trackingloose'] = 'WARNING: The tracking data of this package will be lost!';
$string['tracklatency'] = 'Latency';
$string['tracklatency_help'] = 'The time elapsed between the time the question was made available to the learner for a response and the time of the first response.';
$string['trackpattern'] = 'Pattern';
$string['trackpattern_help'] = 'This is what a correct response to this question would be, it does not show the learners response.';
$string['trackresponse'] = 'Response';
$string['trackresponse_help'] = 'This is the response made by the learner for this question';
$string['trackresult'] = 'Result';
$string['trackresult_help'] = 'Shows if the learner entered a correct response.';
$string['trackscoremax'] = 'Maximum score';
$string['trackscoremax_help'] = 'Maximum value that can be assigned for the raw score';
$string['trackscoremin'] = 'Minimum score';
$string['trackscoremin_help'] = 'Minimum value that can be assigned for the raw score';
$string['trackscoreraw'] = 'Raw score';
$string['trackscoreraw_help'] = 'Number that reflects the performance of the learner relative to the range bounded by the values of min and max';
$string['tracksuspenddata'] = 'Suspend data';
$string['tracksuspenddata_help'] = 'Provides space to store and retrieve data between learner sessions';
$string['tracktime'] = 'Time';
$string['tracktime_help'] = 'Time at which the attempt was started';
$string['tracktype'] = 'Type';
$string['tracktype_help'] = 'Type of the question, for example "choice" or "shortanswer".';
$string['trackweight'] = 'Weight';
$string['trackweight_help'] = 'Weight assigned to the question when calculating score.';
$string['type'] = 'Type';
$string['typeaiccurl'] = 'External AICC URL';
$string['typeexternal'] = 'External SCORM manifest';
$string['typelocal'] = 'Uploaded package';
$string['typelocalsync'] = 'Downloaded package';
$string['undercontent'] = 'Under content';
$string['unziperror'] = 'An error occurs during package unzip';
$string['updatefreq'] = 'Auto-update frequency';
$string['updatefreq_error'] = 'Auto-update frequency can only be set when the package file is hosted externally';
$string['updatefreq_help'] = 'This allows the external package to be automatically downloaded and updated';
$string['updatefreqdesc'] = 'This preference sets the default auto-update frequency of an activity';
$string['validateascorm'] = 'Validate a package';
$string['validation'] = 'Validation result';
$string['validationtype'] = 'This preference set the DOMXML library used for validating SCORM Manifest. If you don\'t know leave the selected choice.';
$string['value'] = 'Value';
$string['versionwarning'] = 'The manifest version is older than 1.3, warning at {$a->tag} tag';
$string['viewallreports'] = 'View reports for {$a} attempts';
$string['viewalluserreports'] = 'View reports for {$a} users';
$string['whatgrade'] = 'Attempts grading';
$string['whatgrade_help'] = 'If multiple attempts are allowed, this setting specifies whether the highest, average (mean), first or last completed attempt is recorded in the gradebook. The last completed attempt option does not include attempts with a \'failed\' status.

Notes on handling of multiple attempts:

* The option to start a new attempt is provided by a checkbox above the Enter button on the content structure page, so be sure you\'re providing access to that page if you want to allow more than one attempt.
* Some SCORM packages are intelligent about new attempts, many are not. What this means is that if the learner re-enters an existing attempt, if the SCORM content does not have internal logic to avoid overwriting previous attempts they can be overwritten, even though the attempt was \'completed\' or \'passed\'.
* The settings "Force completed", "Force new attempt" and "Lock after final attempt" also provide further management of multiple attempts.';
$string['whatgradedesc'] = 'Whether the highest, average (mean), first or last completed attempt is recorded in the gradebook if multiple attempts are allowed.';
$string['width'] = 'Width';
$string['window'] = 'Window';
$string['youmustselectastatus'] = 'You must select a status to require';
