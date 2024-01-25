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
 * Strings for component 'chat', language 'en', version '4.0'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Вы маеце наступныя сэсіі чату';
$string['ajax'] = 'Версія з выкарыстаньнем AJAX';
$string['autoscroll'] = 'Аўтапрагортка';
$string['beep'] = 'Сігнал';
$string['bubble'] = 'Бурбалка';
$string['cantlogin'] = 'Нельга ўвасьці ў пакой чату!!';
$string['chat:addinstance'] = 'Дадаць новы чат';
$string['chat:chat'] = 'Доступ у пакой чату';
$string['chat:deletelog'] = 'Выдаліць логі чату';
$string['chat:exportparticipatedsession'] = 'Экспартаваць сэсію чату, у якой вы бралі ўдзел';
$string['chat:exportsession'] = 'Экспартаваць любую сэсію чату';
$string['chat:readlog'] = 'Глядзець логі чату';
$string['chat:talk'] = 'Гутарыць у чаце';
$string['chat:view'] = 'Глядзець актыўнасьць-чат';
$string['chatintro'] = 'Апісаньне';
$string['chatname'] = 'Назва гэтага пакою чату';
$string['chatreport'] = 'Сэсіі чату';
$string['chattime'] = 'Час наступнага чату';
$string['compact'] = 'Кампактна';
$string['composemessage'] = 'Скласьці паведамленьне';
$string['configmethod'] = 'Метад чату AJAX забясьпечвае інтэрфейс чату на грунце AJAX, які рэгулярна зьвяртаецца да сэрвера за абновамі. Звычайны метад прадугледжвае рэгулярнае зьвяртаньне кліента да сэрвера за абновамі (трэба абнавіць старонку, каб убачыць зьмены). Ён не патрабуе наладкі і працуе ўсюды, але можа ствараць вялікую нагрузку на сэрвер, калі ў чаце ўдзельнічае шмат карыстальнікаў. Выкарыстаньне дэмана сэрвера патрабуе доступ да Unix, але дазваляе атрымаць хутка маштабоўнае асяродзьдзе чату.';
$string['confignormalupdatemode'] = 'Абнаўленьне чату звычайна эфектыўна ажыцяўляецца з дапамогай функцыі <em>Сталае Злучэньне</em>, прадугледжанай HTTP 1.1, але гэты метад стварае досыць высокую нагрузку на сэрвер. Больш прасунутым метадам з\'яўляецца выкарыстаньне стратэгіі <em>Струмень</em> дзеля перадачы абноваў карыстальнікам. Выкарыстаньне <em>Струменя</em> маштабуецца значна лепш (аналагічна метаду chatd), але можа не падтрымлівацца вашым сэрверам.';
$string['configoldping'] = 'Максімальны час, які можа прайсьці, перш чым здарыцца выяўленьне адключэньня карыстальніка (у сякундах)? Вызначаецца толькі верхняя мяжа, бо адключэньні звычайна выяўляюцца вельмі хутка. Больш нізкія значэньні зьніжаюць патрабаваньні да вашага сэрвера. Калі вы выкарыстоўваеце звычайны метад, <strong>ніколі</strong> не ўсталёўваеце гэтае значэньне ніжэй за * chat_refresh_room.';
$string['configrefreshroom'] = 'Частата абнаўленьня пакою чату (у сякундах)? Калі ўсталяваць нізкае значэньне, то чат будзе працаваць хутчэй, але гэта можа прывесьці да павелічэньня нагрузкі на вэб-сэрвер, калі ў чаце ўдзельнічае шмат людзей. Калі вы выкарыстоўваеце абнаўленьні <em>Струмень</em>, то льга абраць больш высокую частату абнаўленьня - паспрабуйце з 2.';
$string['configrefreshuserlist'] = 'Як часта мусіць абнаўляцца сьпіс карыстальнікаў (у сякундах)?';
$string['configserverhost'] = 'Назва хаста кампутара, на якім знаходзіцца дэман сэрвера';
$string['configserverip'] = 'Лічбавы IP-адрас, адпаведны азначанай вышэй назьве хаста';
$string['configservermax'] = 'Макс колькасьць дазволеных кліентаў';
$string['configserverport'] = 'Порт, што выкарыстоўваецца на сэрверы дэмана';
$string['coursetheme'] = 'Тэма курса';
$string['crontask'] = 'Фонавая апрацоўка для модуля чату';
$string['currentchats'] = 'Актыўныя сэсіі чату';
$string['currentusers'] = 'Цяперашнія карыстальнікі';
$string['deletesession'] = 'Выдаліць сэсію';
$string['deletesessionsure'] = 'Вы ўпэўнены, што жадаеце выдаліць гэтую сэсію?';
$string['donotusechattime'] = 'Не публікаваць аніякі час у чаце';
$string['enterchat'] = 'Увайсьці ў чат';
$string['entermessage'] = 'Надрукуйце вашае паведамленьне';
$string['errornousers'] = 'Нельга знайсьці ніякіх карыстальнікаў!';
$string['eventmessagesent'] = 'Паведамленьне адпраўлена';
$string['eventsessionsviewed'] = 'Прагледжаныя сэсіі';
$string['explaingeneralconfig'] = 'Гэтыя налады <strong>заўжды</strong> выкарыстоўваюцца';
$string['explainmethoddaemon'] = 'Гэта налада дзейнічае толькі калі, абраны метад чату \'Дэман сэрверу чату\'.';
$string['explainmethodnormal'] = 'Гэта налада дзейнічае толькі калі, абраны Нармальны метад.';
$string['generalconfig'] = 'Агульная канфігурацыя';
$string['idle'] = 'Прастой';
$string['indicator:cognitivedepth'] = 'Пазнаваньне чату';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік заснаваны на глыбіні пазнаваньня, якую дасягнуў студэнт у актыўнасьці-чат.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне чату';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягнуў гэтага адсотку пазнавальнага ўцягненьня, прапанаваны актыўнасьцю-Чатам у аналізаваны тэрмін (Роўні = Без прагляду, Прагляд, Адпраўка, Прагляд водгука, Каментаваньне водгука)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць чату';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік заснаваны на сацыяльнай шырыні, якую дасягнуў студэнт у актыўнасьці-Чаце.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць чату';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай актыўнасьцю-Чатам у аналізаваны тэрмін (Роўні = Адсутнасьць удзелу, Самотны удзел, Удзел зь іншымі)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Вобласьць уводу';
$string['invalidid'] = 'Нельга знайсьці гэты пакой чату!';
$string['list_all_sessions'] = 'Пералік усіх сэсіяў.';
$string['list_complete_sessions'] = 'Пералік выкананых сэсіяў.';
$string['listing_all_sessions'] = 'Пералічэньне ўсіх сэсіяў.';
$string['messagebeepseveryone'] = '{$a} сігналізуе ўсім!';
$string['messagebeepsyou'] = '{$a} сігналізаваў вам!';
$string['messageenter'] = '{$a} толькі што ўвайшоў у гэты чат';
$string['messageexit'] = '{$a} толькі што пакінуў гэты чат';
$string['messages'] = 'Паведамленьні';
$string['messageyoubeep'] = 'Вы сігналізавалі {$a}';
$string['method'] = 'Метад чату';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Дэман сэрверу чату';
$string['methodnormal'] = 'Нармальны';
$string['modulename'] = 'Чат';
$string['modulename_help'] = 'Модуль актыўнасьць-чат дазваляе ўдзельнікам весьці тэкставыя сінхронныя абмеркаваньні ў рэжыме рэальнага часу.

Чат можа быць аднаразовым ці паўтарацца ў адзін і той жа час кожны дзень ці кожны тыдзень. Сэсіі чату захоўваюцца і могуць быць даступныя для прагляду ўсім жадаючым ці абмежаваныя карыстальнікам, што маюць здольнасьць прагледжваць логі сэсіяў чату.

Чаты асабліва карысны, калі групы, што камунікуюць, ня могуць сустрэцца твар у твар, напрыклад

* Дзеля рэгулярных сустрэч студэнтаў, што ўдзельнічаюць у анлайн-курсах, якія дазваляюць ім абменьвацца досьведам зь іншымі слухачамі таго ж курса, але знаходзяцца ў іншым месцы
* Дзеля студэнтаў, што часова ня маюць здольнасьці прысутнічаць на занятках і камунікаваць з настаўнікам, каб нагнаць прапушчанае
* Дзеля студэнтаў, што праходзяць вытворчую практыку і зьбіраюцца разам, каб абмеркаваць свой досьвед адзін з адным і з настаўнікам
* Дзеля выкарыстаньня малымі дзецьмі чату дома па вечарам у якасьці кантраляванага (кіраванага) знаёмства са сьветам сацыяльных сетак
* Дзеля сэсіі пытаньняў і адказаў з запрошанымі прамоўцамі зь іншага месца
* Дзеля падрыхтоўчых заняткаў студэнтаў да тэстаў, на якіх настаўнік ці іншыя студэнты задаюць прыкладныя пытаньні';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Чаты';
$string['neverdeletemessages'] = 'Ніколі не выдаляць паведамленьні';
$string['nextchattime'] = 'Наступны час чату:';
$string['nextsession'] = 'Наступная запланаваная сэсія';
$string['no_complete_sessions_found'] = 'Выкананых сэсіяў ня знойдзена.';
$string['nochat'] = 'Чат ня знойдзены.';
$string['noguests'] = 'Чат закрыты для гасьцей';
$string['nomessages'] = 'Пакуль няма паведамленьняў';
$string['nopermissiontoseethechatlog'] = 'Вы ня маеце дазвола на прагляд логаў чату.';
$string['normalkeepalive'] = 'Сталае Злучэньне';
$string['normalstream'] = 'Струмень';
$string['noscheduledsession'] = 'Няма запланаваных сэсіяў';
$string['notallowenter'] = 'Вам забаронены ўваход у пакой чату.';
$string['notlogged'] = 'Вы не ўвайшлі!';
$string['oldping'] = 'Таймаўт адключэньня';
$string['page-mod-chat-x'] = 'Усякая старонка модуля чат';
$string['pastchats'] = 'Мінулыя сэсіі чату';
$string['pastsessions'] = 'Мінулыя сэсіі';
$string['pluginadministration'] = 'Адміністраваньне чату';
$string['pluginname'] = 'Чат';
$string['privacy:metadata:chat_messages_current'] = 'Цяперашняя сэсія чату. Гэтыя дадзеныя з\'яўляюцца часовымі і выдаляюцца пасьля выдаленьня сэсіі чату';
$string['privacy:metadata:chat_users'] = 'Адсочвае, якія карыстальнікі знаходзяцца ў тых ці іншых пакоях чату';
$string['privacy:metadata:chat_users:firstping'] = 'Час першага доступа да пакоя чату';
$string['privacy:metadata:chat_users:ip'] = 'IP карыстальніка';
$string['privacy:metadata:chat_users:lang'] = 'Мова карыстальніка';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Час апошняга паведамленьня ў гэтым пакоі чату';
$string['privacy:metadata:chat_users:lastping'] = 'Час апошняга доступа ў пакой чату';
$string['privacy:metadata:chat_users:userid'] = 'ID карыстальніка';
$string['privacy:metadata:chat_users:version'] = 'Шлях доступа да чату (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Запіс паведамленьняў дасланых падчас сэсіі чату';
$string['privacy:metadata:messages:issystem'] = 'Ці з\'яўляецца паведамленьне згенераваным сістэмай';
$string['privacy:metadata:messages:message'] = 'Паведамленьне';
$string['privacy:metadata:messages:timestamp'] = 'Час адпраўленьня паведамленьня.';
$string['privacy:metadata:messages:userid'] = 'ID карыстальніка-аўтара паведамленьня';
$string['refreshroom'] = 'Абнавіць пакой';
$string['refreshuserlist'] = 'Абнавіць сьпіс карыстальнікаў';
$string['removemessages'] = 'Выдаліць усе паведамленьні';
$string['repeatdaily'] = 'У адзін і той жа час кожны дзень';
$string['repeatnone'] = 'Без паўтораў, публікаваць толькі азначаны час';
$string['repeattimes'] = 'Паўтор/публікацыя часу сэсіяў';
$string['repeatweekly'] = 'У адзін і той жа час кожны тыдзень';
$string['saidto'] = 'сказана да';
$string['savemessages'] = 'Захаваць мінулыя сэсіі';
$string['search:activity'] = 'Чат - інфармацыя актыўнасьці';
$string['seesession'] = 'Праглядзець гэтую сэсію';
$string['send'] = 'Адправіць';
$string['sending'] = 'Адпраўленьне';
$string['serverhost'] = 'Назва сэрвера';
$string['serverip'] = 'IP сэрвера';
$string['servermax'] = 'Макс карыстальнікаў';
$string['serverport'] = 'Порт сэрвера';
$string['sessions'] = 'Сэсіі чату';
$string['sessionstart'] = 'Наступная сэсія чату пачнёцца {$a->date}, ({$a->fromnow} з гэтага моманту)';
$string['sessionstartsin'] = 'Наступная сэсія чату пачнёцца праз {$a} з гэтага моманту.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Усе могуць бачыць мінулыя сэсіі';
$string['studentseereports_help'] = 'Калі ўсталявана Не, толькі карыстальнікі са здольнасьцю mod/chat:readlog будуць здольныя бачыць логі чату';
$string['talk'] = 'Гаварыць';
$string['updatemethod'] = 'Метад абнаўленьня';
$string['updaterate'] = 'Частата абнаўленьня:';
$string['userlist'] = 'Сьпіс карыстальнікаў';
$string['usingchat'] = 'Выкарыстаньне чату';
$string['usingchat_help'] = 'Модуль чату мае функцыі, якія дазваляюць зрабіць камунікаваньне ў чаце больш прыемным.

* Смайлікі - Усякія смайлікі (эматыконы), якія льга ўводзіць у іншых месцах Moodle, напрыклад, :-)
* Спасылкі - Адрасы вэб-сайтаў будуць аўтаматычна ператварацца ўва спасылкі
* Эмоцыі - Вы можаце пачаць радок з "/me" ці ":", каб праявіць эмоцыю, напрыклад, калі вашае імя Кім і вы надрукуеце ":laughs!" ці "/me laughs!" усе убачаць "Кім сьмяецца!"
* Сігналы - Вы можаце дасылаць гукі іншым удзельнікам, націснуўшы на спасылку "сігнал" побач зь імём. Каб адправіць сігнал усім удзельнакам чату адначасова, льга надрукаваць "beep all"
* HTML - Калі вы ведаеце HTML код, вы можаце выкарыстоўваць яго ў вашым тэксьце, каб рабіць розныя рэчы, напрыклад, устаўляць выявы, прайграваць гукі ці ствараць тэкст с рознымі колерамі';
$string['viewreport'] = 'Мінулыя сэсіі';
