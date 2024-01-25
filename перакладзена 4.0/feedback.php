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
 * Strings for component 'feedback', language 'en', version '4.0'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Дадаць пытаньне';
$string['add_pagebreak'] = 'Дадаць разрыў старонкі';
$string['adjustment'] = 'Карэктаваньне';
$string['after_submit'] = 'Пасьля адпраўкі';
$string['allowfullanonymous'] = 'Дазволіць поўную ананімнасьць';
$string['analysis'] = 'Аналіз';
$string['anonymous'] = 'Ананімны';
$string['anonymous_edit'] = 'Запісваць імёны карыстальнікаў';
$string['anonymous_entries'] = 'Ананімныя запісы ({$a})';
$string['anonymous_user'] = 'Ананімны карыстальнік';
$string['answerquestions'] = 'Адкажыце на пытаньні';
$string['append_new_items'] = 'Дадаць новыя прадметы';
$string['autonumbering'] = 'Аўтанумераваньне пытаньняў';
$string['autonumbering_help'] = 'Уключае/адключае аўтанумераваньне кожнага пытаньня';
$string['average'] = 'Сярэдняе';
$string['bold'] = 'Тоўсты';
$string['calendarend'] = 'закрываецца {$a}';
$string['calendarstart'] = 'адкрываецца {$a}';
$string['cannotaccess'] = 'Вы можаце атрымаць доступ да гэтага водгука толькі з курса';
$string['cannotsavetempl'] = 'Захаваньне шаблонаў забаронена';
$string['captcha'] = 'Капча';
$string['captchanotset'] = 'Капча не ўсталявана.';
$string['check'] = 'Множны выбар - некалькі адказаў';
$string['check_values'] = 'Магчымыя водклічы';
$string['checkbox'] = 'Множны выбар - дазволена некалькі адказаў (сьцяжок)';
$string['choosefile'] = 'Абраць файл';
$string['chosen_feedback_response'] = 'Абярыце водкліч водгука';
$string['closebeforeopen'] = 'Вы азначылі дату сканчэньня ранейшую за дату пачынаньня.';
$string['complete_the_form'] = 'Адказаць на пытаньні';
$string['completed'] = 'Выканана';
$string['completed_feedbacks'] = 'Адпраўленыя адказы';
$string['completedon'] = 'Выканана {$a}';
$string['completiondetail:submit'] = 'Адправіць водгук';
$string['completionsubmit'] = 'Разгледжваць выкананым пасьля адпраўленьня водгука';
$string['configallowfullanonymous'] = 'Калі ўсталяваць \'так\', карыстальнікі могуць выконваць актыўнасьць у доме сайта без патрэбы ўвахода ў сістэму.';
$string['confirmdeleteentry'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэты запіс?';
$string['confirmdeleteitem'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэты элемент?';
$string['confirmdeletetemplate'] = 'Вы ўпэўненыя, што жадаеце выдаліць гэты шаблон?';
$string['confirmusetemplate'] = 'Вы ўпэўненыя, што жадаеце выкарыстоўваць гэты шаблон?';
$string['continue_the_form'] = 'Працягнуць адказваць на пытаньні';
$string['count_of_nums'] = 'Колькасьць нумароў';
$string['courseid'] = 'ID курса';
$string['creating_templates'] = 'Захаваць гэтыя пытаньні як новы шаблон';
$string['delete_entry'] = 'Выдаліць запіс';
$string['delete_item'] = 'Выдаліць пытаньне';
$string['delete_old_items'] = 'Выдаліць старыя пытаньні';
$string['delete_pagebreak'] = 'Выдаліць разрыў старонкі';
$string['delete_template'] = 'Выдаліць шаблон';
$string['delete_templates'] = 'Выдаленьне шаблона...';
$string['depending'] = 'Залежнасьці';
$string['depending_help'] = 'Льга паказваць прадмет у залежнасьці ад значэньня іншага прадмета.<br />
<strong>Вось прыклад.</strong><br />
<ul>
<li>Спачатку, стварыць прадмет, ад якога будзе залежыць іншы прадмет.</li>
<li>Потым, дадайце разрыў старонкі.</li>
<li>Потым, стварыце прадметы, якія будуць залежыць ад значэньне прадмета, створанага раней. Абярыце прадмет са сьпіса "Залежны прадмет", і запішыце патрэбнае значэньне ў тэкставае поле з назвай "Залежнае значэньне".</li>
</ul>
<strong>Структура прадмета мусіць выглядаць наступным чынам.</strong>
<ol>
<li>Прадмет П: Вы маеце машыну? А: так/не</li>
<li>Разрыў старонкі</li>
<li>Прадмет Q: Які колер мае вашая старонка?<br />
(гэты прадмет залежыць ад прадмета 1 са значэньнем = так)</li>
<li>Прадмет Q: Чаму вы ня маеце машыну?<br />
(гэты прадмет залежыць ад прадмета 1 са значэньнем = не)</li>
<li> ... іншыя прадметы</li>
</ol>';
$string['dependitem'] = 'Залежны прадмет';
$string['dependvalue'] = 'Залежнае значэньне';
$string['description'] = 'Апісаньне';
$string['do_not_analyse_empty_submits'] = 'Не аналізаваць пустыя адпраўкі';
$string['downloadresponseas'] = 'Спампаваць усе водклічы як:';
$string['drop_feedback'] = 'Выдаліць з гэтага курса';
$string['dropdown'] = 'Множны выбар - дазволены адзін адказ (выпадное меню)';
$string['dropdown_values'] = 'Адказы';
$string['dropdownlist'] = 'Множны выбар - адзін адказ (выпадное меню)';
$string['dropdownrated'] = 'Выпадное меню (з ацэнкай)';
$string['edit_item'] = 'Рэдагаваць пытаньне';
$string['edit_items'] = 'Рэдагаваць пытаньні';
$string['email_notification'] = 'Уключыць абвесткі пра адпраўленьні';
$string['email_notification_help'] = 'Калі ўключана, настаўнікі будуць атрымліваць абвесткі пра адпраўленьні водгукаў.';
$string['emailteachermail'] = '{$a->username} выканаў водгук актыўнасьці : \'{$a->feedback}\'

Вы можаце праглядзець яго тут:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} выканаў водгук актыўнасьці : <i>\'{$a->feedback}\'</i>.</p>
<p>Ён <a href="{$a->url}">даступны на сайце</a>.</p>';
$string['entries_saved'] = 'Вашыя адказы былі захаваныя. Дзякуй.';
$string['eventresponsedeleted'] = 'Водкліч выдалены';
$string['eventresponsesubmitted'] = 'Водкліч адпраўлены';
$string['export_questions'] = 'Экспартаваць пытаньні';
$string['export_to_excel'] = 'Экспартаваць у Excel';
$string['feedback:addinstance'] = 'Даданьне новы водгук';
$string['feedback:complete'] = 'Выкананьне водгука';
$string['feedback:createprivatetemplate'] = 'Стварэньне прыватнага шаблону';
$string['feedback:createpublictemplate'] = 'Стварэньне публічнага шаблону';
$string['feedback:deletesubmissions'] = 'Выдаленьне выкананых адпраўленьняў';
$string['feedback:deletetemplate'] = 'Выдаленьне шаблон';
$string['feedback:edititems'] = 'Рэдагаваньне прадметы';
$string['feedback:mapcourse'] = 'Прывязваньне курсаў да глабальных водгукаў';
$string['feedback:receivemail'] = 'Атрыманьне імэйл абвесткі';
$string['feedback:view'] = 'Праглядзець водгук';
$string['feedback:viewanalysepage'] = 'Прагляд старонкі аналізу пасьля адпраўкі';
$string['feedback:viewreports'] = 'Прагляд справаздач';
$string['feedback_is_not_for_anonymous'] = 'Водгук не ананімны';
$string['feedback_is_not_open'] = 'Водгук закрыты';
$string['feedbackclose'] = 'Дазволіць адказы да';
$string['feedbackcompleted'] = '{$a->username} выканаў(ла) {$a->feedbackname}';
$string['feedbackopen'] = 'Дазволіць адказы з';
$string['feedbackupdated'] = 'Водгук абноўлены.';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Фільтраваць па курсу';
$string['handling_error'] = 'Адбылася памылка падчас апрацоўкі дзеяньня модуля водгук';
$string['hide_no_select_option'] = 'Схаваць опцыю "Не абрана"';
$string['horizontal'] = 'Гарызантальна';
$string['import_questions'] = 'Імпартаваць пытаньні';
$string['import_successfully'] = 'Імпартаваньне пасьпяховае';
$string['importfromthisfile'] = 'Імпартаваць з гэтага файла';
$string['includeuserinrecipientslist'] = 'Уключыць {$a} у сьпіс атрымальнікаў';
$string['indicator:cognitivedepth'] = 'Пазнаваньне водгука';
$string['indicator:cognitivedepth_help'] = 'Гэты паказьнік заснаваны на глыбіні пазнаваньня, якую дасягнуў студэнт у актыўнасьці-Водгуке.';
$string['indicator:cognitivedepthdef'] = 'Пазнаваньне водгука';
$string['indicator:cognitivedepthdef_help'] = 'Удзельнік дасягнуў гэтага адсотку пазнавальнага ўцягненьня, прапанаваны актыўнасьцю-Слоўнікам у аналізаваны тэрмін (Роўні = Без прагляду, Прагляд, Адпраўка)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Сацыяльнасьць водгука';
$string['indicator:socialbreadth_help'] = 'Гэты паказьнік заснаваны на сацыяльнай шырыні, якую дасягнуў студэнт у актыўнасьці-Водгуке.';
$string['indicator:socialbreadthdef'] = 'Сацыяльнасьць водгука';
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай актыўнасьцю-Слоўнікам у аналізаваны тэрмін (Роўні = Адсутнасьць удзелу, Самотны удзел, Сумесны зь іншымі ўдзел)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Інфармацыя';
$string['infotype'] = 'Тып інфармацыі';
$string['insufficient_responses'] = 'недастатковыя водклічы';
$string['insufficient_responses_for_this_group'] = 'Для гэтай групы недастаткова водклічаў';
$string['insufficient_responses_help'] = 'Каб водгук быў ананімным, мусіць мець прынамсі 2 водкліча.';
$string['item_label'] = 'Цэтлік';
$string['item_name'] = 'Пытаньне';
$string['label'] = 'Цэтлік';
$string['labelcontents'] = 'Зьмесьціва';
$string['mapcourse'] = 'Прывязаць водгук да курсаў';
$string['mapcourse_help'] = 'Па стандарту на вашай дамашняй старонцы ствараюцца формы водгукаў, даступныя па ўсім сайце і даступныя ў блоке водгук ува ўсіх курсах. Вы можаце прымусіць форму водгука стаць даступнай, стварыўшы ліпкі блок ці абмежаваўшы курсы, у якіх форма водгука мусіць з\'явіцца дзеля параўнаньня пэўных курсаў.';
$string['mapcourseinfo'] = 'Гэта водгук, які даступны па ўсім сайце на ўсіх курсах праз блок водгук. Але вы можаце вызначыць курсы, у якіх ён будзе паказвацца, шляхам стварэньня прывязкі. Знайдзіце курс і прывяжыце яго да гэтага водгука.';
$string['mapcoursenone'] = 'Прывязкі да курсаў не існуюць. Водгук даступны ўва ўсіх курсах';
$string['mapcourses'] = 'Прывязаць водгук да курсаў';
$string['mappedcourses'] = 'Прывязаныя курсы';
$string['mappingchanged'] = 'Прывязкі да курсаў былі зьменены';
$string['maximal'] = 'Максімум';
$string['messageprovider:message'] = 'Напамінальнік пра водгукі';
$string['messageprovider:submission'] = 'Абвесткі водгука';
$string['minimal'] = 'Мінімум';
$string['mode'] = 'Рэжым';
$string['modulename'] = 'Водгук';
$string['modulename_help'] = 'Актыўнасьць-водгук дазваляе настаўніку ствараць уласную апытанку дзеля збору дадзеных ад удзельнікаў з дапамогай розных тыпаў пытаньніяў, сярод якіх маюцца: множны выбар, так/не і тэкставае поле.

Водгук па жаданьню льга зрабіць ананімным. Вынікі льга паказваць усім удзельнікам ці толькі настаўнікам. На дамашняй старонцы актыўнасьці-водгукі могуць выконваць карыстальнікі, якія не ўвайшлі на сайт.

Актыўнасьць-водгук льга выкарыстоўваць дзеля

* ацэнкі курса і далейшага паляпшэньня зьмесьціва курса
* наступнага залічэньня ўдзельнікаў на модулі курсаў, падзеі і г.д. 
* гасьцявых апытанак для абраньня курсаў, школьнай палітыкі і г.д.
* змаганьня з гвалтам (вучні змогуць пакідаць ананімныя паведамленьні пра здарэньні)';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Водгукі';
$string['move_item'] = 'Перасунуць гэтае пытаньне';
$string['multichoice'] = 'Множны выбар';
$string['multichoice_values'] = 'Значэньні множнага выбару';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Множны выбар (рэйтынг)';
$string['multichoicetype'] = 'Тып множнага выбару';
$string['multiplesubmit'] = 'Дазволіць неаднаразовае адпраўленьне';
$string['multiplesubmit_help'] = 'Калі ўключаны ананімныя апытанкі, карыстальнікі могуць пакідаць водгук неабмежаваную колькасьць разоў.';
$string['name'] = 'Назва';
$string['name_required'] = 'Назва патрабуецца';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Наступная старонка';
$string['no_handler'] = 'Не існуе апрацоўніка дзеяньняў';
$string['no_itemlabel'] = 'Няма цэтліка';
$string['no_itemname'] = 'Няма назвы прадмета';
$string['no_items_available_yet'] = 'Пытаньні дагэтуль ня вызначаны';
$string['no_templates_available_yet'] = 'Дагэтуль не існуе даступных шаблонаў';
$string['non_anonymous'] = 'Імя карыстальніка будзе залагавана і паказана з адказамі';
$string['non_anonymous_entries'] = 'Не ананімныя запісы ({$a})';
$string['non_respondents_students'] = 'Студэнты-нерэспандэнты ({$a})';
$string['not_completed_yet'] = 'Дагэтуль ня выканана';
$string['not_selected'] = 'Не абрана';
$string['not_started'] = 'Не пачалось';
$string['numberoutofrange'] = 'Нумар за межамі дыяпазону';
$string['numeric'] = 'Лічбавы адказ';
$string['numeric_range_from'] = 'Дыяпазон ад';
$string['numeric_range_to'] = 'Дыяпазон да';
$string['of'] = 'з';
$string['oldvaluespreserved'] = 'Усе старыя пытаньні і прызначаныя значэньні будуць захаваныя';
$string['oldvalueswillbedeleted'] = 'Цяперашнія пытаньні і ўсе водклічы будуць выдалены.';
$string['only_one_captcha_allowed'] = 'Толькі адна капча дазволена ў водгуке';
$string['openafterclose'] = 'Вы вызначылі дату адкрыцьця пасьля даты закрыцьця';
$string['overview'] = 'Агляд';
$string['page'] = 'Старонка';
$string['page-mod-feedback-x'] = 'Усякая старонка модуля водгук';
$string['page_after_submit'] = 'Паведамленьне выкананьня';
$string['pagebreak'] = 'Разрыў старонкі';
$string['pluginadministration'] = 'Адміністраваньне водгука';
$string['pluginname'] = 'Водгук';
$string['position'] = 'Пазіцыя';
$string['previewquestions'] = 'Прадпрагляд пытаньняў';
$string['previous_page'] = 'Папярэдняя старонка';
$string['privacy:metadata:completed'] = 'Запіс адпраўленьняў у водгук';
$string['privacy:metadata:completed:anonymousresponse'] = 'Патрэба ананімнага адпраўленьня.';
$string['privacy:metadata:completed:timemodified'] = 'Час апошняй зьмены адпраўленьня.';
$string['privacy:metadata:completed:userid'] = 'ID карыстальніка, што выканаў актыўнасьць-водгук.';
$string['privacy:metadata:completedtmp'] = 'Запіс адпраўленьняў дагэтуль у працэсе.';
$string['privacy:metadata:value'] = 'Запіс адказу на пытаньне.';
$string['privacy:metadata:value:value'] = 'Абраны адказ.';
$string['privacy:metadata:valuetmp'] = 'Запіс адказу на пытаньне ўва адпраўленьні ў працэсе.';
$string['public'] = 'Публічны';
$string['question'] = 'Пытаньне';
$string['questionandsubmission'] = 'Налады пытаньня і адпраўленьня';
$string['questions'] = 'Пытаньні';
$string['questionslimited'] = 'Паказана толькі {$a} першых пытаньняў, праглядзіце індывідуальныя адказы ці спампуйце дадзеныя табліцы дзеля прагляду ўсёга.';
$string['radio'] = 'Множны выбар - адзін адказ';
$string['radio_values'] = 'Водклічы';
$string['ready_feedbacks'] = 'Гатовыя водгукі';
$string['required'] = 'Патрабуецца';
$string['resetting_data'] = 'Скінуць водклічы водгука';
$string['resetting_feedbacks'] = 'Скідваньне водгукаў';
$string['response_nr'] = 'Нумар водкліча';
$string['responses'] = 'Водклічы';
$string['responsetime'] = 'Час адказу';
$string['save_as_new_item'] = 'Захаваць як новае пытаньне';
$string['save_as_new_template'] = 'Захаваць як новы шаблон';
$string['save_entries'] = 'Адправіць свае адказы';
$string['save_item'] = 'Захаваць пытаньне';
$string['saving_failed'] = 'Няўдалае захаваньне';
$string['search:activity'] = 'Водгук - інфармацыя актыўнасьці';
$string['search_course'] = 'Шукаць курс';
$string['searchcourses'] = 'Шукаць курсы';
$string['searchcourses_help'] = 'Шукаць код ці назву курса, які вы жадаеце зьвязаць з гэтым водгукам.';
$string['selected_dump'] = 'Абраныя індэксы зьменнай $SESSION прыведзены ніжэй:';
$string['send'] = 'Адправіць';
$string['send_message'] = 'Адправіць абвестку';
$string['show_all'] = 'Паказаць усё';
$string['show_analysepage_after_submit'] = 'Паказаць старонку аналізу';
$string['show_entries'] = 'Паказаць водклічы';
$string['show_entry'] = 'Паказаць водкліч';
$string['show_nonrespondents'] = 'Паказаць нерэспандэнтаў';
$string['site_after_submit'] = 'Перайсьці пасьля адпраўкі';
$string['sort_by_course'] = 'Сартаваць па курсу';
$string['started'] = 'Пачата';
$string['startedon'] = 'Пачынаецца {$a}';
$string['subject'] = 'Аб\'ект';
$string['switch_item_to_not_required'] = 'Усталяваць як не запатрабаванае';
$string['switch_item_to_required'] = 'Усталяваць як запатрабаванае';
$string['template'] = 'Шаблон';
$string['template_deleted'] = 'Шаблон выдалены';
$string['template_saved'] = 'Шаблон захаваны';
$string['templates'] = 'Шаблоны';
$string['textarea'] = 'Даўжэйшы тэкставы адказ';
$string['textarea_height'] = 'Колькасьць радкоў';
$string['textarea_width'] = 'Шырыня';
$string['textfield'] = 'Карацейшы тэкставы адказ';
$string['textfield_maxlength'] = 'Максімальная колькасьць прыймальных знакаў';
$string['textfield_size'] = 'Шырыня тэкставага поля';
$string['there_are_no_settings_for_recaptcha'] = 'Налады капчі адсутнічаюць';
$string['this_feedback_is_already_submitted'] = 'Вы ўжо выканалі гэтую актыўнасьць.';
$string['typemissing'] = 'Адсутнічае значэньне "тып"';
$string['update_item'] = 'Захаваць зьмены пытаньня';
$string['url_for_continue'] = 'Спасылка на наступную актыўнасьць';
$string['url_for_continue_help'] = 'Пасьля адпраўленьня водгука паказваецца кнопка працягу, якая вядзе на старонку курса. Алтэрнатыўна, яна можа спасылацца на наступную актыўнасьць, калі тут увесьці спасылку на актыўнасьць.';
$string['use_one_line_for_each_value'] = 'Выкарыстоўвайце адзін радок для кожнага адказу!';
$string['use_this_template'] = 'Выкарыстоўваць гэты шаблон';
$string['using_templates'] = 'Выкарыстоўваць шаблон';
$string['vertical'] = 'Вертыкальна';
$string['whatfor'] = 'Што вы жадаеце рабіць?';
