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
$string['cantlogin'] = 'Нельга ўвасьці ў пакой чата!!';
$string['chat:addinstance'] = 'Дадаць новы чат';
$string['chat:chat'] = 'Доступ у пакой чата';
$string['chat:deletelog'] = 'Выдаліць логі чата';
$string['chat:exportparticipatedsession'] = 'Экспартаваць сэсію чата, у якой вы бралі ўдзел';
$string['chat:exportsession'] = 'Экспартаваць любую сэсію чата';
$string['chat:readlog'] = 'Глядзець логі чата';
$string['chat:talk'] = 'Гутарыць у чаце';
$string['chat:view'] = 'Глядзець актыўнасьць-чат';
$string['chatintro'] = 'Апісаньне';
$string['chatname'] = 'Назва гэтага пакою чата';
$string['chatreport'] = 'Сэсіі чата';
$string['chattime'] = 'Час наступнага чату';
$string['compact'] = 'Кампактна';
$string['composemessage'] = 'Скласьці паведамленьне';
$string['configmethod'] = 'Метад чата AJAX забясьпечвае інтэрфейс чата на грунце AJAX, які рэгулярна зьвяртаецца да сэрвера за абновамі. Звычайны метад прадугледжвае рэгулярнае зьвяртаньне кліента да сэрвера за абновамі (трэба абнавіць старонку, каб убачыць зьмены). Ён не патрабуе наладкі і працуе ўсюды, але можа ствараць вялікую нагрузку на сэрвер, калі ў чаце ўдзельнічае шмат карыстальнікаў. Выкарыстаньне дэмана сэрвера патрабуе доступ да Unix, але дазваляе атрымаць хутка маштабоўнае асяродзьдзе чату.';
$string['confignormalupdatemode'] = 'Абнаўленьне чату звычайна эфектыўна ажыцяўляецца з дапамогай функцыі <em>Сталае Злучэньне</em>, прадугледжанай HTTP 1.1, але гэты метад стварае досыць высокую нагрузку на сэрвер. Больш прасунутым метадам з\'яўляецца выкарыстаньне стратэгіі <em>Струмень</em> дзеля перадачы абноваў карыстальнікам. Выкарыстаньне <em>Струменя</em> маштабуецца значна лепш (аналагічна метаду chatd), але можа не падтрымлівацца вашым сэрверам.';
$string['configoldping'] = 'Максімальны час, які можа прайсьці, перш чым здарыцца выяўленьне адключэньня карыстальніка (у сякундах)? Вызначаецца толькі верхняя мяжа, бо адключэньні звычайна выяўляюцца вельмі хутка. Больш нізкія значэньні зьніжаюць патрабаваньні да вашага сэрвера. Калі вы выкарыстоўваеце звычайны метад, <strong>ніколі</strong> не ўсталёўваеце гэтае значэньне ніжэй за * chat_refresh_room.';
$string['configrefreshroom'] = 'Частата абнаўленьня пакою чата (у сякундах)? Калі ўсталяваць нізкае значэньне, то чат будзе працаваць хутчэй, але гэта можа прывесьці да павелічэньня нагрузкі на вэб-сэрвер, калі ў чаце ўдзельнічае шмат людзей. Калі вы выкарыстоўваеце абнаўленьні <em>Струмень</em>, то льга абраць больш высокую частату абнаўленьня - паспрабуйце з 2.';
$string['configrefreshuserlist'] = 'Як часта мусіць абнаўляцца сьпіс карыстальнікаў (у сякундах)?';
$string['configserverhost'] = 'Назва хаста кампутара, на якім знаходзіцца дэман сэрвера';
$string['configserverip'] = 'Лічбавы IP-адрас, адпаведны азначанай вышэй назьве хаста';
$string['configservermax'] = 'Макс колькасьць дазволеных кліентаў';
$string['configserverport'] = 'Порт, што выкарыстоўваецца на сэрверы дэмана';
$string['coursetheme'] = 'Тэма курса';
$string['crontask'] = 'Фонавая апрацоўка для модуля чата';
$string['currentchats'] = 'Актыўныя сэсіі чата';
$string['currentusers'] = 'Цяперашнія карыстальнікі';
$string['deletesession'] = 'Выдаліць сэсію';
$string['deletesessionsure'] = 'Вы ўпэўнены, што жадаеце выдаліць гэтую сэсію?';
$string['donotusechattime'] = 'Не публікаваць час у чаце';
$string['enterchat'] = 'Увайсьці ў чат';
$string['entermessage'] = 'Надрукуйце вашае паведамленьне';
$string['errornousers'] = 'Нельга знайсьці ніякіх карыстальнікаў!';
$string['eventmessagesent'] = 'Паведамленьне адпраўлена';
$string['eventsessionsviewed'] = 'Прагледжаныя сэсіі';
$string['explaingeneralconfig'] = 'Гэтыя налады <strong>заўжды</strong> выкарыстоўваюцца';
$string['explainmethoddaemon'] = 'Гэта налада дзейнічае толькі калі, абраны метад чату \'Дэман сэрверу чата\'.';
$string['explainmethodnormal'] = 'Гэта налада дзейнічае толькі калі, абраны Нармальны метад.';
$string['generalconfig'] = 'Агульная канфігурацыя';
$string['idle'] = 'Прастой';
$string['indicator:cognitivedepth'] = 'Пазнаваньне чата';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік заснаваны на глыбіні пазнаваньня, якую дасягнуў студэнт у актыўнасьці-чат.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне чата';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягнуў гэтага адсотку пазнавальнага ўцягненьня, прапанаваны актыўнасьцю-Чатам у аналізаваны тэрмін (Роўні = Без прагляду, Прагляд, Адпраўка, Прагляд водгука, Каментаваньне водгука)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць чата';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік заснаваны на сацыяльнай шырыні, якую дасягнуў студэнт у актыўнасьці-Чаце.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць чата';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаваны актыўнасьцю-Чатам у аналізаваны тэрмін (Роўні = Без удзельнікаў, Самотны удзел, Удзел зь іншымі)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Вобласьць уводу';
$string['invalidid'] = 'Нельга знайсьці гэты пакой чата!';
$string['list_all_sessions'] = 'Пералік усіх сэсіяў.';
$string['list_complete_sessions'] = 'Пералік выкананых сэсіяў.';
$string['listing_all_sessions'] = 'Пералічэньне ўсіх сэсіяў.';
$string['messagebeepseveryone'] = '{$a} сігналізуе ўсім!';
$string['messagebeepsyou'] = '{$a} сігналізаваў вам!';
$string['messageenter'] = '{$a} толькі што ўвайшоў у гэты чат';
$string['messageexit'] = '{$a} толькі што пакінуў гэты чат';
$string['messages'] = 'Паведамленьні';
$string['messageyoubeep'] = 'Вы сігналізавалі {$a}';
$string['method'] = 'Метад чата';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Дэман сэрверу чата';
$string['methodnormal'] = 'Нармальны';
$string['modulename'] = 'Чат';
$string['modulename_help'] = 'Модуль актыўнасьць-чат дазваляе ўдзельнікам увесьці тэкставыя сінхронныя абмеркаваньні ў рэжыме рэальнага часу.

Чат можа быць аднаразовым ці паўтарацца ў адзін і той жа час кожны дзень ці кожны тыдзень. Сэсіі чата захоўваюцца і могуць быць даступныя для прагляду ўсім жадаючым ці абмежаваныя карыстальнікам, што маюць здольнасьць прагледжваць логі сэсіяў чату.

Чаты асабліва карысны, калі групы, што камунікуюць, ня могуць сустрэцца твар у твар, напрыклад

* Дзеля рэгулярных сустрэч студэнтаў, што ўдзельнічаюць у анлайн-курсах, якія дазваляюць ім абменьвацца досьведам зь іншымі слухачамі таго ж курса, але знаходзяцца ў іншым месцы
* Дзеля студэнтаў, што часова ня маюць здольнасьці прысутнічаць на занятках і камунікаваць з настаўнікам, каб нагнаць прапушчанае
* Дзеля студэнтаў, што праходзяць производственную практыку і зьбіраюцца разам, каб абмеркаваць свой досьвед адзін з адным і з настаўнікам
* Дзеля выкарыстаньня малымі дзецьмі чату дома па вечарам у якасьці кантраляванага (кіраванага) знаёмства са сьветам сацыяльных сетак
* Дзеля сэсіі пытаньняў і адказаў з запрошанымі прамоўцамі зь іншага месца
* Дзеля падрыхтоўчых заняткаў студэнтаў да тэстаў, на якіх настаўнік ці іншыя студэнты задаюць прыкладныя пытаньні';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Чаты';
$string['neverdeletemessages'] = 'Never delete messages';
$string['nextchattime'] = 'Next chat time:';
$string['nextsession'] = 'Next scheduled session';
$string['no_complete_sessions_found'] = 'No complete sessions found.';
$string['nochat'] = 'No chat found';
$string['noguests'] = 'The chat is not open to guests';
$string['nomessages'] = 'No messages yet';
$string['nopermissiontoseethechatlog'] = 'You don\'t have permission to see the chat logs.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Струмень';
$string['noscheduledsession'] = 'No scheduled session';
$string['notallowenter'] = 'You are not allowed to enter the chat room.';
$string['notlogged'] = 'You are not logged in!';
$string['oldping'] = 'Disconnect timeout';
$string['page-mod-chat-x'] = 'Any chat module page';
$string['pastchats'] = 'Past chat sessions';
$string['pastsessions'] = 'Past sessions';
$string['pluginadministration'] = 'Chat administration';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Current chat session. This data is temporary and is deleted after the chat session is deleted';
$string['privacy:metadata:chat_users'] = 'Keeps track of which users are in which chat rooms';
$string['privacy:metadata:chat_users:firstping'] = 'Time of the first access to chat room';
$string['privacy:metadata:chat_users:ip'] = 'User IP';
$string['privacy:metadata:chat_users:lang'] = 'User language';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Time of the last message in this chat room';
$string['privacy:metadata:chat_users:lastping'] = 'Time of the last access to chat room';
$string['privacy:metadata:chat_users:userid'] = 'The user ID';
$string['privacy:metadata:chat_users:version'] = 'How user accessed the chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'A record of the messages sent during a chat session';
$string['privacy:metadata:messages:issystem'] = 'Whether the message is a system-generated message';
$string['privacy:metadata:messages:message'] = 'The message';
$string['privacy:metadata:messages:timestamp'] = 'The time when the message was sent.';
$string['privacy:metadata:messages:userid'] = 'The user ID of the author of the message';
$string['refreshroom'] = 'Refresh room';
$string['refreshuserlist'] = 'Refresh user list';
$string['removemessages'] = 'Remove all messages';
$string['repeatdaily'] = 'At the same time every day';
$string['repeatnone'] = 'No repeats - publish the specified time only';
$string['repeattimes'] = 'Repeat/publish session times';
$string['repeatweekly'] = 'At the same time every week';
$string['saidto'] = 'said to';
$string['savemessages'] = 'Save past sessions';
$string['search:activity'] = 'Chat - activity information';
$string['seesession'] = 'See this session';
$string['send'] = 'Send';
$string['sending'] = 'Sending';
$string['serverhost'] = 'Server name';
$string['serverip'] = 'Server ip';
$string['servermax'] = 'Max users';
$string['serverport'] = 'Server port';
$string['sessions'] = 'Chat sessions';
$string['sessionstart'] = 'The next chat session will start on {$a->date}, ({$a->fromnow} from now)';
$string['sessionstartsin'] = 'The next chat session will start {$a} from now.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Everyone can view past sessions';
$string['studentseereports_help'] = 'If set to No, only users have mod/chat:readlog capability are able to see the chat logs';
$string['talk'] = 'Talk';
$string['updatemethod'] = 'Update method';
$string['updaterate'] = 'Update rate:';
$string['userlist'] = 'User list';
$string['usingchat'] = 'Using chat';
$string['usingchat_help'] = 'The chat module contains some features to make chatting a little nicer.

* Smilies - Any smiley faces (emoticons) that you can type elsewhere in Moodle can also be typed here, for example :-)
* Links - Website addresses will be turned into links automatically
* Emoting - You can start a line with "/me" or ":" to emote, for example if your name is Kim and you type ":laughs!" or "/me laughs!" then everyone will see "Kim laughs!"
* Beeps - You can send a sound to other participants by clicking the "beep" link next to their name. A useful shortcut to beep all the people in the chat at once is to type "beep all".
* HTML - If you know some HTML code, you can use it in your text to do things like insert images, play sounds or create different coloured text';
$string['viewreport'] = 'Past sessions';
