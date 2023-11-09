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
$string['indicator:socialbreadthdef_help'] = 'Удзельнік дасягную гэтага адсотку сацыяльнай шырыні, прапанаванай актыўнасьцю-Слоўнікам у аналізаваны тэрмін (Роўні = Без удзельнікаў, Самотны удзел, Сумесны зь іншымі ўдзел)';
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
$string['modulenameplural'] = 'Водгук';
$string['move_item'] = 'Move this question';
$string['multichoice'] = 'Multiple choice';
$string['multichoice_values'] = 'Multiple choice values';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Multiple choice (rated)';
$string['multichoicetype'] = 'Multiple choice type';
$string['multiplesubmit'] = 'Allow multiple submissions';
$string['multiplesubmit_help'] = 'If enabled for anonymous surveys, users can submit feedback an unlimited number of times.';
$string['name'] = 'Name';
$string['name_required'] = 'Name required';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Next page';
$string['no_handler'] = 'No action handler exists for';
$string['no_itemlabel'] = 'No label';
$string['no_itemname'] = 'No itemname';
$string['no_items_available_yet'] = 'No questions have been set up yet';
$string['no_templates_available_yet'] = 'No templates available yet';
$string['non_anonymous'] = 'User\'s name will be logged and shown with answers';
$string['non_anonymous_entries'] = 'Non anonymous entries ({$a})';
$string['non_respondents_students'] = 'Non-respondent students ({$a})';
$string['not_completed_yet'] = 'Not completed yet';
$string['not_selected'] = 'Not selected';
$string['not_started'] = 'Not started';
$string['numberoutofrange'] = 'Number out of range';
$string['numeric'] = 'Numeric answer';
$string['numeric_range_from'] = 'Range from';
$string['numeric_range_to'] = 'Range to';
$string['of'] = 'of';
$string['oldvaluespreserved'] = 'All old questions and the assigned values will be preserved';
$string['oldvalueswillbedeleted'] = 'Current questions and all responses will be deleted.';
$string['only_one_captcha_allowed'] = 'Only one captcha is allowed in a feedback';
$string['openafterclose'] = 'You have specified an open date after the close date';
$string['overview'] = 'Overview';
$string['page'] = 'Page';
$string['page-mod-feedback-x'] = 'Any feedback module page';
$string['page_after_submit'] = 'Completion message';
$string['pagebreak'] = 'Page break';
$string['pluginadministration'] = 'Feedback administration';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Position';
$string['previewquestions'] = 'Preview questions';
$string['previous_page'] = 'Previous page';
$string['privacy:metadata:completed'] = 'A record of the submissions to the feedback';
$string['privacy:metadata:completed:anonymousresponse'] = 'Whether the submission is to be used anonymously.';
$string['privacy:metadata:completed:timemodified'] = 'The time when the submission was last modified.';
$string['privacy:metadata:completed:userid'] = 'The ID of the user who completed the feedback activity.';
$string['privacy:metadata:completedtmp'] = 'A record of the submissions which are still in progress.';
$string['privacy:metadata:value'] = 'A record of the answer to a question.';
$string['privacy:metadata:value:value'] = 'The chosen answer.';
$string['privacy:metadata:valuetmp'] = 'A record of the answer to a question in a submission in progress.';
$string['public'] = 'Public';
$string['question'] = 'Question';
$string['questionandsubmission'] = 'Question and submission settings';
$string['questions'] = 'Questions';
$string['questionslimited'] = 'Showing only {$a} first questions, view individual answers or download table data to view all.';
$string['radio'] = 'Multiple choice - single answer';
$string['radio_values'] = 'Responses';
$string['ready_feedbacks'] = 'Ready feedbacks';
$string['required'] = 'Required';
$string['resetting_data'] = 'Reset feedback responses';
$string['resetting_feedbacks'] = 'Resetting feedbacks';
$string['response_nr'] = 'Response number';
$string['responses'] = 'Responses';
$string['responsetime'] = 'Responses time';
$string['save_as_new_item'] = 'Save as new question';
$string['save_as_new_template'] = 'Save as new template';
$string['save_entries'] = 'Submit your answers';
$string['save_item'] = 'Save question';
$string['saving_failed'] = 'Saving failed';
$string['search:activity'] = 'Feedback - activity information';
$string['search_course'] = 'Search course';
$string['searchcourses'] = 'Search courses';
$string['searchcourses_help'] = 'Search for the code or name of the course(s) that you wish to associate with this feedback.';
$string['selected_dump'] = 'Selected indexes of $SESSION variable are dumped below:';
$string['send'] = 'Send';
$string['send_message'] = 'Send notification';
$string['show_all'] = 'Show all';
$string['show_analysepage_after_submit'] = 'Show analysis page';
$string['show_entries'] = 'Show responses';
$string['show_entry'] = 'Show response';
$string['show_nonrespondents'] = 'Show non-respondents';
$string['site_after_submit'] = 'Site after submit';
$string['sort_by_course'] = 'Sort by course';
$string['started'] = 'Started';
$string['startedon'] = 'Started on {$a}';
$string['subject'] = 'Subject';
$string['switch_item_to_not_required'] = 'Set as not required';
$string['switch_item_to_required'] = 'Set as required';
$string['template'] = 'Template';
$string['template_deleted'] = 'Template deleted';
$string['template_saved'] = 'Template saved';
$string['templates'] = 'Templates';
$string['textarea'] = 'Longer text answer';
$string['textarea_height'] = 'Number of lines';
$string['textarea_width'] = 'Width';
$string['textfield'] = 'Short text answer';
$string['textfield_maxlength'] = 'Maximum characters accepted';
$string['textfield_size'] = 'Textfield width';
$string['there_are_no_settings_for_recaptcha'] = 'There are no settings for captcha';
$string['this_feedback_is_already_submitted'] = 'You\'ve already completed this activity.';
$string['typemissing'] = 'Missing value "type"';
$string['update_item'] = 'Save changes to question';
$string['url_for_continue'] = 'Link to next activity';
$string['url_for_continue_help'] = 'After submitting the feedback, a continue button is displayed, which links to the course page. Alternatively, it may link to the next activity if the URL of the activity is entered here.';
$string['use_one_line_for_each_value'] = 'Use one line for each answer!';
$string['use_this_template'] = 'Use this template';
$string['using_templates'] = 'Use a template';
$string['vertical'] = 'Vertical';
$string['whatfor'] = 'What do you want to do?';
