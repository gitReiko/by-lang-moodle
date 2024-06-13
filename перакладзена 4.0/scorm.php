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
$string['aicchacpkeepsessiondata'] = 'Дадзеныя сэсіі AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Працягласьць часу ў днях дзеля захаваньня вонкавых дадзеных сэсіі AICC HACP (больш высокае значэньне прывядзе да запаўненьня табліцы старымі дадзенымі, але можа быць карысна подчас адладкі)';
$string['aicchacptimeout'] = 'Таймаўт AICC HACP';
$string['aicchacptimeout_desc'] = 'Працягласьць часу ў мінутах, падчас якой вонкавая сэсія AICC HACP можа заставацца адкрытай';
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
$string['invalidhacpsession'] = 'Хібная HACP-сэсія';
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
$string['myaiccsessions'] = 'Мае AICC-сэсіі';
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
$string['privacy:metadata:scoes_track:element'] = 'Назва элементу, які трэба адсочваць';
$string['privacy:metadata:scoes_track:value'] = 'Значэньне паданага элементу';
$string['privacy:metadata:scorm_aicc_session'] = 'Інфармацыя сэсіі AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'Адсочныя дадзеныя SCO, што належаць актыўнасьці';
$string['privacy:metadata:timemodified'] = 'Час апошняй зьмены, які трэба адсочваць';
$string['privacy:metadata:userid'] = 'ID карыстальніка, што атрымаў доступ да SCORM-актыўнасьці';
$string['protectpackagedownloads'] = 'Абарона спамповак пакетаў';
$string['protectpackagedownloads_desc'] = 'Калі ўключана, SCORM-пакеты змогуць спампоўваць толькі карыстальнікі са здольнасьцю course:manageactivities. Калі адключана, SCORM-пакеты льга заўжды спампоўваць (смартфонам і па іншым нагодам).';
$string['raw'] = 'Чарнавы бал';
$string['regular'] = 'Шэраговы маніфест';
$string['report'] = 'Справаздача';
$string['reportcountallattempts'] = '{$a->nbattempts} спробаў для {$a->nbusers} карыстальнікаў, з {$a->nbresults} вынікаў';
$string['reportcountattempts'] = '{$a->nbresults} вынікаў ({$a->nbusers} карыстальнікаў)';
$string['reports'] = 'Справаздачы';
$string['repositorynotsupported'] = 'Гэты рэпазітар не падтрымлівае прамое спасыланьне на файл imsmanifest.xml.';
$string['response'] = 'Водкліч';
$string['result'] = 'Вынік';
$string['results'] = 'Вынікі';
$string['review'] = 'Агляд';
$string['reviewmode'] = 'Рэжым агляду';
$string['rightanswer'] = 'Слушны адказ';
$string['scoes'] = 'Навучальныя мэты';
$string['score'] = 'Бал';
$string['scorm:addinstance'] = 'Дадаць новы SCORM-пакет';
$string['scorm:deleteownresponses'] = 'Выдаліць уласныя спробы';
$string['scorm:deleteresponses'] = 'Выдаліць SCORM-спробы';
$string['scorm:savetrack'] = 'Захаваць адсочваньні';
$string['scorm:skipview'] = 'Прапусьціць агляд';
$string['scorm:viewreport'] = 'Праглядзець справаздачы';
$string['scorm:viewscores'] = 'Праглядзець балы';
$string['scormclose'] = 'Даступна да';
$string['scormcourse'] = 'Навучальны курс';
$string['scormloggingoff'] = 'API лагаваньне адключана';
$string['scormloggingon'] = 'API лагаваньне ўключана';
$string['scormopen'] = 'Даступна з';
$string['scormresponsedeleted'] = 'Выдаленыя спробы карыстальніка';
$string['scormstandard'] = 'Стандартны рэжым SCORM';
$string['scormstandarddesc'] = 'Калі адключана, Moodle дазваляе SCORM-пакетам 1.2 захоўваць болей за дазволенае сьпецыфікацыяй, і выкарыстоўвае налады фармату поўнага імя Moodle падчас перадачы імён карыстальнікаў у SCORM-пакет.';
$string['scormtype'] = 'Тып';
$string['scormtype_help'] = 'Гэтая налада вызначае, якім чынам пакет будзе даданы ў курс. Льга абраць 4 опцыі:

* Запампаваны пакет - Дазваляе абраць SCORM-пакет праз абіральнік файлаў
* Вонкавы SCORM-маніфест - Дазваляе вызначыць спасылку на imsmanifest.xml. Нататка: Калі спасылка мае адрозны дамен ад дамену вашага сайту, лепей абраць "Спампаваны пакет", бо ў адрозным выпадку адзнакі ня будуць захоўвацца.
* Спампаваны пакет - Дазваляе вызначыць спасылку на пакет. Пакет будзе распакаваны і захаваны лакальна, а потым абноўлены падчас абнаўленьня вонкавага SCORM-пакету.
* Вонкавая AICC-спасылка - Гэтая спасылка - спасылка запуску адной AICC-актыўнасьці. Дзеля гэтага будзе створаны псеўдапакет.';
$string['scrollbars'] = 'Дазволіць прагортку вакна';
$string['search:activity'] = 'SCORM-пакет - інфармацыя пра актыўнасьць';
$string['selectall'] = 'Абраць усё';
$string['selectnone'] = 'Скасаваць усё абраньне';
$string['show'] = 'Паказаць';
$string['sided'] = 'Убок';
$string['skipview'] = 'Пропуск студэнтам старонкі структуры зьмесьціва';
$string['skipview_help'] = 'Гэтая налада вызначае, ці варта прапускаць (не адлюстроўваць) старонку структуры зьмесьціва. Калі пакет утрымлівае толькі адну навучальную мэту, старонку структуры зьмесьціва льга заўжды прапускаць.';
$string['skipviewdesc'] = 'Гэтая перавага вызначае стандартнае значэньне дзеля пропуску старонкі структуры зьмесьціва';
$string['slashargs'] = 'УВАГА: на гэтым сайце адключаны слэш-аргументы, таму мэты могуць функцыянаваць не чаканым чынам!';
$string['stagesize'] = 'Памер фрэйму';
$string['stagesize_help'] = 'Гэныя дзьве налады вызначаюць вышыню и шырыню фрэйма/акна навучальнай мэты.';
$string['started'] = 'Пачатак';
$string['status'] = 'Статус';
$string['statusbar'] = 'Паказваць радок статусу';
$string['student_response'] = 'Водкліч';
$string['subplugintype_scormreport'] = 'Справаздача';
$string['subplugintype_scormreport_plural'] = 'Справаздачы';
$string['suspended'] = 'Заблакавана';
$string['syntax'] = 'Сінтаксічная памылка';
$string['tag_error'] = 'Невядомы тэг ({$a->tag}) у гэтым зьмесьціве: {$a->value}';
$string['time'] = 'Час';
$string['title'] = 'Назва';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Тэг {$a->tag} мае занадта шмат атрыбутаў';
$string['too_many_children'] = 'Тэг {$a->tag} мае занадта шмат дзяцей';
$string['toolbar'] = 'Паказаць прыладавую панэль';
$string['totaltime'] = 'Час';
$string['trackcorrectcount'] = 'Слушны падлік';
$string['trackcorrectcount_help'] = 'Колькасьць слушных вынікаў для пытаньня';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Гэты ідэнтыфікатар усталяваны вашым SCORM-пакетам дзеля гэнага пытаньня. Сьпецыфікацыя SCORM не давзаляе падаваць поўны тэкст пытаньня.';
$string['trackingloose'] = 'УВАГА: Дадзеныя адсочваньня гэтага пакету будуць страчаны!';
$string['tracklatency'] = 'Затрымка';
$string['tracklatency_help'] = 'Час, што мінуў з моманту паданьня пытаньня навучэнцу на водкліч, да моманту першага адказу.';
$string['trackpattern'] = 'Паттэрн';
$string['trackpattern_help'] = 'Вызначае, якім мусіць слушны водкліч на гэтае пытаньне, ён не паказвае водкліч навучэнца.';
$string['trackresponse'] = 'Водкліч';
$string['trackresponse_help'] = 'Гэта водкліч, які зрабіў навучэнец на гэтае пытаньне';
$string['trackresult'] = 'Вынік';
$string['trackresult_help'] = 'Паказвае, ці слушны зрабіў водкліч навучэнец.';
$string['trackscoremax'] = 'Максімальны бал';
$string['trackscoremax_help'] = 'Максімальнае значэньне, якое льга ўвесьці ў чарнавы бал';
$string['trackscoremin'] = 'Мінімальны бал';
$string['trackscoremin_help'] = 'Мінімальны значэньне, якое льга ўвесьці ў чарнавы бал';
$string['trackscoreraw'] = 'Чарнавы бал';
$string['trackscoreraw_help'] = 'Лічба, што адлюстроўвае прадукцыйнасьць новучэнца адносна дыяпазону, абмежаванае мінімальным і максімальным значэньнем  ';
$string['tracksuspenddata'] = 'Заблакаваныя дадзеныя';
$string['tracksuspenddata_help'] = 'Падае прастору для захоўваньня і атрыманьня дадзеных паміж навучальнымі сэсіямі';
$string['tracktime'] = 'Час';
$string['tracktime_help'] = 'Час пачынаньня спробы';
$string['tracktype'] = 'Тып';
$string['tracktype_help'] = 'Тып пытаньня, напрыклад, "выбар" ці "кароткі адказ".';
$string['trackweight'] = 'Вага';
$string['trackweight_help'] = 'Вага, прызначаная пытаньню падчас разьліку балу.';
$string['type'] = 'Тып';
$string['typeaiccurl'] = 'Вонкавая AICC-спасылка';
$string['typeexternal'] = 'Вонкавы SCORM-маніфест';
$string['typelocal'] = 'Запампаваны пакет';
$string['typelocalsync'] = 'Спампаваны пакет';
$string['undercontent'] = 'Пад зьмесьцівам';
$string['unziperror'] = 'Падчас распакоўкі пакету ўзьнікла памылка';
$string['updatefreq'] = 'Частата аўтаабнаўленьня';
$string['updatefreq_error'] = 'Частата аўтаабнаўленьня можа быць усталявана толькі ў выпадке, калі файл пакету зьмесцаваны на вонкавым хостынге';
$string['updatefreq_help'] = 'Гэта дазваляе аўтаматычна запампоўваць і абнаўляць вонкавы пакет';
$string['updatefreqdesc'] = 'Гэтая перавага ўсталёўвае стандартную частату аўтаабнаўленьня актыўнасьці';
$string['validateascorm'] = 'Валідаваць (праверыць) пакет';
$string['validation'] = 'Вынікі валідацыі';
$string['validationtype'] = 'Гэтая перавага ўсталёўвае DOMXML-бібліятэку, што выкарыстоўваецца для праверкі SCORM Manifest. Калі вы ня ведаеце, пакіньце абраны выбар.';
$string['value'] = 'Значэньне';
$string['versionwarning'] = 'Версія маніфесту старэйшая за 1.3, папярэджаньне ў тэге {$a->tag}';
$string['viewallreports'] = 'Праглядзець справаздачы па {$a} спробам';
$string['viewalluserreports'] = 'Праглядзець справаздачы па {$a} карыстальнікам';
$string['whatgrade'] = 'Ацэньваньне спробаў';
$string['whatgrade_help'] = 'Калі дазволена некалькі спробаў, гэтая налада вызначае, якая спроба будзе запісана ў журнал адзнак: найвысокая, сярэдняя, першая ці апошняя. Опцыя апошняй выкананай спробы не ўключае спробы са статусам \'правалена\'.

Нататкі па апрацоўцы некалькіх спробаў:

* Магчымасьць пачаць новую спробу падаецца з дапамогай сьцяжка над кнопкай Enter на старонцы структуры зьмесьціва, таму пераканайцеся, што вы падаеце доступ да гэтай старонцы, калі жадаеце дазволіць некалькі спробаў.
* Некаторыя SCORM-пакеты ўмеюць распазнаваць новыя спробы, іншыя не ўмеюць. Гэта азначае, што калі навучэнец паўторнае праходзіць існую спробу, то калі SCORM-зьмесьціва ня мае ўнутранай логікі, каб пазьбегнуць перазапісу папярэдніх спроб, то спроба можа быць перазапісана, нават калі яна была \'выканана\' ці \'пройдзена\'.
* Налады "Прымусова выканана", "Прымусіць пачаць новую спробу" і "Блакаваньне пасьля апошняй спробы" таксама забясьпечваюць далейшае кіраваньне некалькімі спробамі.';
$string['whatgradedesc'] = 'Вызначае, якая спроба будзе запісвацца ў журнал адзнак (першая, апошняя, сярэдняя ці найвысокая), калі маецца некалькі спробаў.';
$string['width'] = 'Шырыня';
$string['window'] = 'Акно';
$string['youmustselectastatus'] = 'Вы мусіце абараць статус, каб патрабаваць';
