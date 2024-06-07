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
$string['autocommit_help'] = 'Калі ўключана, SCORM-дадзеныя аўтаматычна захоўваюцца ў базе дадзеных. Карысна для SCORM-мэтаў, якія не захоўваюць свае дадзеныя рэгулярна.';
$string['autocommitdesc'] = 'Аўтаматычнае захаваньне SCORM-дадзеных, калі SCORM-пакет не захоўвае іх.';
$string['autocontinue'] = 'Аўтапрацяг';
$string['autocontinue_help'] = 'Калі ўключана, наступныя навучальныя мэты запускаюцца аўтаматычна, у адваротным чыне трэба выкарыстоўваць кнопку Працягнуць.';
$string['autocontinuedesc'] = 'Калі ўключана, наступныя навучальныя мэты запускаюцца аўтаматычна, у адваротным чыне трэба выкарыстоўваць кнопку Працягнуць.';
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
$string['forcejavascript_desc'] = 'Калі ўключана (рэкамендуецца), яна прадухіляе доступ да SCORM-мэтаў, калі JavaScript выключаны альбо не падтрымліваецца браўзарам карыстальніка. Калі адключана, карыстальнік можа праглядаць SCORM, але камунікаваньне з API будзе парушана і інфармацыя пра адзнакі ня будзе захавана.';
$string['forcejavascriptmessage'] = 'Дзеля прагляду гэтай мэты патрабуецца JavaScript, калі ласка, уключыце JavaScript у вашым браўзары і паўтарыце спробу.';
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

* Навучальныя мэты - Колькасьць выкананых/пройдзеных навучальных мэтаў
* Найвысокая адзнака - Найвысокі бал, атрыманы за ўсе пройдзеныя навучальныя мэты
* Сярэдняя адзнака - Сярэняя з усіх балаў
* Сума адзнак - Сума ўсіх балаў';
$string['grademethoddesc'] = 'Метад ацэньваньня вызначае, як вызначаецца адзнака за адну спробу выкананьня актыўнасьці.';
$string['gradereported'] = 'Адзнака перадана';
$string['gradescoes'] = 'Навучальныя мэты';
$string['gradesettings'] = 'Налады ацэньваньня';
$string['gradesum'] = 'Сума адзнак';
$string['height'] = 'Вышыня';
$string['hidden'] = 'Схавана';
$string['hidebrowse'] = 'Адключыць рэжым прадпрагляду';
$string['hidebrowse_help'] = 'Рэжым прадпрагляду дазваляе студэнту праглядаць актыўнасьць да спрабаваньня выкананьня. Калі рэжым прадпрагляду адключаны, кнопка прадпрагляду схаваная.';
$string['hidebrowsedesc'] = 'Рэжым прадпрагляду дазваляе студэнту праглядаць актыўнасьць да спрабаваньня выкананьня.';
$string['hideexit'] = 'Схаваць спасылку выхаду';
$string['hidereview'] = 'Схаваць кнопку агляду';
$string['hidetoc'] = 'Адлюстроўваць структуру курса ў прайгравальніке';
$string['hidetoc_help'] = 'Шлях адлюстраваньня зьместу ў SCORM-прайгравальніке';
$string['hidetocdesc'] = 'Гэтая налада вызначае шлях адлюстраваньня зьместу ў SCORM-прайгравальніке.';
$string['highestattempt'] = 'Найвысокая спроба';
$string['identifier'] = 'Ідэнтыфікатар пытаньня';
$string['incomplete'] = 'Нявыканана';
$string['indicator:cognitivedepth'] = 'Пазнаваньне SCORM';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік згрунтаваны на глыбіні пазнаваньня, якую дасягнуў студэнт ўва SCORM-актыўнасьці.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне SCORM';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягную гэтага адсотку пазнавальнага ўцягненьня, прапанаваны SCORM-актыўнасьцямі ў аналізаваны тэрмін (Роўні = Без прагляду, Прагляд, Адпраўка, Прагляд водгуку)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць SCORM';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік згрунтаваны на сацыяльнай шырыні, якую дасягнуў студэнт ўва SCORM-актыўнасьці.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць SCORM';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай SCORM-актыўнасьцямі ў аналізаваны тэрмін (Роўні = Адсутнасьць удзелу, Самотны удзел)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Інфа';
$string['interactions'] = 'Узаемадзеяньні';
$string['invalidactivity'] = 'SCORM-актыўнасьць хібная';
$string['invalidhacpsession'] = 'Хібная HACP-сесія';
$string['invalidmanifestname'] = 'Льга абраць толькі файлы imsmanifest.xml ці .zip';
$string['invalidmanifestresource'] = 'УВАГА: На наступныя рэсурсы маюцца спасылкі ў вашым маніфесьце, але яны ня знойдзены:';
$string['invalidstatus'] = 'Хібны статус';
$string['invalidurl'] = 'Вызначана хібная спасылка';
$string['invalidurlhttpcheck'] = 'Вызначана хібная спасылка. Адладкавае паведамленьне:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Апошні доступ';
$string['lastaccess'] = 'Апошні доступ';
$string['lastattempt'] = 'Апошняя выкананая спроба';
$string['lastattemptlock'] = 'Блакаваньне пасьля апошняй спробы';
$string['lastattemptlock_help'] = 'Калі ўключана, студэнт ня зможа запусьціць SCORM-прайгравальнік пасьля выкарыстаньня ўсіх сваіх прапанаваных спробаў.';
$string['lastattemptlockdesc'] = 'Калі ўключана, студэнт ня зможа запусьціць SCORM-прайгравальнік пасьля выкарыстаньня ўсіх сваіх прапанаваных спробаў.';
$string['location'] = 'Паказаць радок месцаваньня';
$string['masteryoverride'] = 'Майстарскі бал перавызначае статус';
$string['masteryoverride_help'] = 'Калі ўключана і майстарскі бал паданы, падчас LMSFinish і ўсталёўкі чарнавога балу статус будзе пераразьлічаны з выкарыстаньнем сырога балу і майстарскага балу, а ўсякі статус, паданы SCORM (у тым ліку "нявыканана"), будзе скасаваны.';
$string['masteryoverridedesc'] = 'Гэтая перавага ўсталёўвае стандартнае значэньне для майстэрскага балу перавызначэньня налады';
$string['max'] = 'Максімальны бал';
$string['maximumattempts'] = 'Колькасьць спробаў';
$string['maximumattempts_help'] = 'Гэтая налада дазваляе абмежаваць колькасьць спробаў. Яна ўжывальная толькі для SCORM 1.2 і AICC-пакетаў.';
$string['maximumattemptsdesc'] = 'Гэтая перавага ўсталёўвае стандартную максімальную колькасьць спробаў для актыўнасьці';
$string['maximumgradedesc'] = 'Гэтая перавага ўсталёўвае стандартны максімальны бал за актыўнасьць';
$string['menubar'] = 'Паказаць радок меню';
$string['min'] = 'Мінімальны бал';
$string['missing_attribute'] = 'Адсутны атрыбут {$a->attr} у тэге {$a->tag}';
$string['missing_tag'] = 'Адсутны тэг {$a->tag}';
$string['missingparam'] = 'Адсутнічае ці хібны патрэбны параметр';
$string['mode'] = 'Рэжым';
$string['modulename'] = 'SCORM-пакет';
$string['modulename_help'] = 'SCORM-пакет - гэта калекцыя файлаў, упакаваная ў адпаведнасьці з узгодненым стандартам для навучальных мэтаў. Модуль SCORM-актыўнасьці дазваляе запампоўваць SCORM- ці AICC-пакеты ў фармаце zip-файла і дадаваць іх у курс.

Зьмесьціва звычайна адлюстроўваецца на некалькіх старонках з навігацыяй паміж імі. Існуюць розныя опцыі адлюстрованьня зьмесьціва ўва ўсплыўным акне: са зьместам, кнопкамі навігацыі і г.д. SCORM-актыўнасьць звычайна мае пытаньні, адзнакі за якія запісваюцца ў журнал адзнак.

SCORM-актыўнасьць льга выкарыстоўваць

* Для прэзентаваньня мультымедыя зьмесьціва і анімацыяў
* Як прыладу для ацэньваньня';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM-пакеты';
$string['myaiccsessions'] = 'Мае AICC-сесіі';
$string['myattempts'] = 'Мае спробы';
$string['nav'] = 'Паказаць навігацыю';
$string['nav_help'] = 'Гэтая налада вызначае ці трэба паказваць навігацыю, яе становішча.

Маецца 3 опцыі:

* Не - Кнопкі навігацыі схаваныя
* Пад зьмесьцівам - Кнопкі навігацыі паказаны пад зьмесьцівам SCORM-пакету
* Плывучая - Кнопкі навігацыі адлюстроўваюцца плывучымі, а іх становішча зьверху і зьлева вызначаецца пакетам.';
$string['navdesc'] = 'Гэтая налада вызначае ці трэба паказаць кнопкі навігацыі і іхняе становішча.';
$string['navigation'] = 'Навігацыя';
$string['navpositionleft'] = 'Становішча кнопак навігацыі зьлева ў пікселях.';
$string['navpositiontop'] = 'Становішча кнопак навігацыі зьверху ў пікселях.';
$string['networkdropped'] = 'SCORM-прайгравальнік вызначыў, што вашае далучэньне да Інтэрнэту ненадзейнае альбо пярэрвана. Калі вы працягнеце выкананьне гэтай SCORM-актыўнасьці, вашы прагрэс можа не захавацца.<br />Вы мусіце выйсьці з актыўнасьці зараз і вярнуцца, калі вы будзеце мець надзейнае далучэньне да Інтэрнэту.';
$string['newattempt'] = 'Пачаць новую спробу';
$string['next'] = 'Працягнуць';
$string['no_attributes'] = 'Тэг {$a->tag} мусіць мець атрыбуты';
$string['no_children'] = 'Тэг {$a->tag} мусіць мець дзяцей';
$string['noactivity'] = 'Няма пра што здаваць справаздачу';
$string['noattemptsallowed'] = 'Колькасьць дазволеных спробаў';
$string['noattemptsmade'] = 'Колькасьць, зробленых вамі, спробаў';
$string['nolimit'] = 'Бясконцыя спробы';
$string['nomanifest'] = 'Хібны файл пакету - адсутнічае imsmanifest.xml альбо структура AICC';
$string['noprerequisites'] = 'Прабачце, аде вы ня маеце патрэбных умоваў для доступа к гэтай актыўнасьці.';
$string['noreports'] = 'Няма справаздачы для паказу';
$string['normal'] = 'Нармальна';
$string['noscriptnoscorm'] = 'Вашы браўзар не падтрымлівае JavaScript альбо ў ім адключана JavaScript падтрымка. Гэты SCORM-пакет можа не прайгравацца альбо захоўваць дадзеныя належным чынам.';
$string['not_corr_type'] = 'Неадпаведнасьць тыпу для тэга {$a->tag}';
$string['notattempted'] = 'Спробы ня зроблены';
$string['notopenyet'] = 'Прабачце, гэтая актыўнасьць недаступная да {$a}';
$string['objectives'] = 'Мэты';
$string['openafterclose'] = 'Вы вызначылі дату адкрыцьця пазьней даты закрыцьця';
$string['optallstudents'] = 'усе карыстальнікі';
$string['optattemptsonly'] = 'толькі карыстальнікі са спробамі';
$string['options'] = 'Опцыі (Не падтрымлівае частка браўзараў)';
$string['optionsadv'] = 'Опцыі (Прасунутыя)';
$string['optionsadv_desc'] = 'Калі ўключана, шырыня і вышыня будуць у сьпісе прасунутых наладаў.';
$string['optnoattemptsonly'] = 'толькі карыстальнікі бяз спробаў';
$string['organization'] = 'Арганізацыя';
$string['organizations'] = 'Арганізацыі';
$string['othersettings'] = 'Дадатковыя налады';
$string['package'] = 'Файл пакету';
$string['package_help'] = 'Файл пакету - гэта zip-файл (альбо pif-файл), які ўтрымлівае SCORM/AICC-файлы вызначэньня курса.';
$string['packagedir'] = 'Памылка файлавай сістэмы: Нельга стварыць каталаг пакетаў';
$string['packagefile'] = 'Ня вызначаны файл пакету';
$string['packagehdr'] = 'Пакет';
$string['packageurl'] = 'Спасылка';
$string['packageurl_help'] = 'Гэтая налада дазваляе вызначаць спасылку SCORM-пакета, заміж абраньня файла праз выбранік файлаў.';
$string['page-mod-scorm-x'] = 'Усякая старонка модуля SCORM';
$string['pagesize'] = 'Памер старонкі';
$string['passed'] = 'Пройдзена';
$string['php5'] = 'PHP 5 (DOMXML родная бібліятэка)';
$string['pluginadministration'] = 'Адміністраваньне SCORM-пакету';
$string['pluginname'] = 'SCORM-пакет';
$string['popup'] = 'Новае акно';
$string['popuplaunched'] = 'Гэты SCORM-пакет запушчаны ўва ўсплыўным вакне, калі вы скончылі прагляд гэтага рэсурса, націсьніце тут, каб вярнуцца да старонкі курса';
$string['popupmenu'] = 'У выпадным меню';
$string['popupopen'] = 'Адкрываць пакет у новым вакне';
$string['popupsblocked'] = 'Здаецца, усплыўнае акно заблакавана, тое перашкаджае прайграваньню SCORM-пакету. Калі ласка, спраўдзіце налады вашага браўзара, перш чым паўтарыць спробу.';
$string['position_error'] = 'Тэг {$a->tag} ня можа быць дачэрнім да тэгу {$a->parent}';
$string['preferencespage'] = 'Перавагі толькі для гэтай старонкі';
$string['preferencesuser'] = 'Перавагі для гэтай справаздачы';
$string['prev'] = 'Папярэдняе';
$string['privacy:metadata:aicc:data'] = 'Асабістыя дадзеныя, што перадаюцца з падсістэмы AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Гэты плагін адпраўляе дадзеные звонку праз AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Статус занятка, які трэба адсочваць';
$string['privacy:metadata:aicc_session:scormmode'] = 'Рэжым элементу, які трэба адсочваць';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Статус элементу, які трэба адсочваць';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Час сэсіі, які трэба адсочваць';
$string['privacy:metadata:aicc_session:timecreated'] = 'Час, калі адсочны элемент, быў створаны';
$string['privacy:metadata:attempt'] = 'Нумар спробы';
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
$string['review'] = 'Агляд';
$string['reviewmode'] = 'Рэжым агляду';
$string['rightanswer'] = 'Right answer';
$string['scoes'] = 'Навучальныя мэты';
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
$string['skipview_help'] = 'This setting specifies whether the content structure page should ever be skipped (not displayed). If the package contains only one learning мэты, the content structure page can always be skipped.';
$string['skipviewdesc'] = 'This preference sets the default for when to skip content structure for a page';
$string['slashargs'] = 'WARNING: slash arguments is disabled on this site and мэты may not function as expected!';
$string['stagesize'] = 'Stage size';
$string['stagesize_help'] = 'These two settings specify the frame/window width and height for the learning мэты.';
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
$string['undercontent'] = 'Пад зьмесьцівам';
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
