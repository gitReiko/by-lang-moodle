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
$string['downloadcourseconfirmation'] = 'You are about to download a zip file of course content (excluding items which cannot be downloaded and any files larger than {$a}).';
$string['downloadcoursecontent'] = 'Download course content';
$string['downloadcoursecontent_help'] = 'This setting determines whether course content may be downloaded by users with the download course content capability (by default users with the role of student or teacher).';
$string['enabledownloadcoursecontent'] = 'Enable download course content';
$string['errorendbeforestart'] = 'The end date ({$a}) is before the course start date.';
$string['favourite'] = 'Starred course';
$string['gradetopassnotset'] = 'This course does not have a grade to pass set. It may be set in the grade item of the course (Gradebook setup).';
$string['informationformodule'] = 'Information about the {$a} activity';
$string['module'] = 'Activity';
$string['noaccesssincestartinfomessage'] = 'Hi {$a->userfirstname},
<p>A number of students in {$a->coursename} have never accessed the course.</p>';
$string['nocourseactivity'] = 'Not enough course activity between the start and the end of the course';
$string['nocourseendtime'] = 'The course does not have an end time';
$string['nocoursesections'] = 'No course sections';
$string['nocoursestudents'] = 'No students';
$string['norecentaccessesinfomessage'] = 'Hi {$a->userfirstname},
<p>A number of students in {$a->coursename} have not accessed the course recently.</p>';
$string['noteachinginfomessage'] = 'Hi {$a->userfirstname},
<p>Courses with start dates in the next week have been identified as having no teacher or student enrolments.</p>';
$string['participants:perpage'] = 'Number of participants per page';
$string['participants:perpage_help'] = 'The number of users shown per page on the participants page in each course.';
$string['participantsnavigation'] = 'Participants tertiary navigation.';
$string['privacy:completionpath'] = 'Course completion';
$string['privacy:favouritespath'] = 'Course starred information';
$string['privacy:metadata:activityfavouritessummary'] = 'The course system contains information about which items from the activity chooser have been starred by the user.';
$string['privacy:metadata:completionsummary'] = 'The course contains completion information about the user.';
$string['privacy:metadata:favouritessummary'] = 'The course contains information relating to the course being starred by the user.';
$string['privacy:perpage'] = 'The number of courses to show per page.';
$string['recommend'] = 'Recommend';
$string['recommendcheckbox'] = 'Recommend activity: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} after course start';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} before course start';
$string['searchactivitiesbyname'] = 'Search for activities by name';
$string['searchresults'] = 'Search results: {$a}';
$string['studentsatriskincourse'] = 'Students at risk in {$a} course';
$string['studentsatriskinfomessage'] = 'Hi {$a->userfirstname},
<p>Students in the {$a->coursename} course have been identified as being at risk.</p>';
$string['submitsearch'] = 'Submit search';
$string['target:coursecompetencies'] = 'Students at risk of not achieving the competencies assigned to a course';
$string['target:coursecompetencies_help'] = 'This target describes whether a student is at risk of not achieving the competencies assigned to a course. This target considers that all competencies assigned to the course must be achieved by the end of the course.';
$string['target:coursecompletion'] = 'Students at risk of not meeting the course completion conditions';
$string['target:coursecompletion_help'] = 'This target describes whether the student is considered at risk of not meeting the course completion conditions.';
$string['target:coursedropout'] = 'Students at risk of dropping out';
$string['target:coursedropout_help'] = 'This target describes whether the student is considered at risk of dropping out.';
$string['target:coursegradetopass'] = 'Students at risk of not achieving the minimum grade to pass the course';
$string['target:coursegradetopass_help'] = 'This target describes whether the student is at risk of not achieving the minimum grade to pass the course.';
$string['target:noaccesssincecoursestart'] = 'Students who have not accessed the course yet';
$string['target:noaccesssincecoursestart_help'] = 'This target describes students who never accessed a course they are enrolled in.';
$string['target:noaccesssincecoursestartinfo'] = 'The following students are enrolled in a course which has started, but they have never accessed the course.';
$string['target:norecentaccesses'] = 'Students who have not accessed the course recently';
$string['target:norecentaccesses_help'] = 'This target identifies students who have not accessed a course they are enrolled in within the set analysis interval (by default the past month).';
$string['target:norecentaccessesinfo'] = 'The following students have not accessed a course they are enrolled in within the set analysis interval (by default the past month).';
$string['target:noteachingactivity'] = 'Courses at risk of not starting';
$string['target:noteachingactivity_help'] = 'This target describes whether courses due to start in the coming week will have teaching activity.';
$string['target:noteachingactivityinfo'] = 'The following courses due to start in the upcoming days are at risk of not starting because they don\'t have teachers or students enrolled.';
$string['targetlabelstudentcompetenciesno'] = 'Student who is likely to achieve the competencies assigned to a course';
$string['targetlabelstudentcompetenciesyes'] = 'Student at risk of not achieving the competencies assigned to a course';
$string['targetlabelstudentcompletionno'] = 'Student who is likely to meet the course completion conditions';
$string['targetlabelstudentcompletionyes'] = 'Student at risk of not meeting the course completion conditions';
$string['targetlabelstudentdropoutno'] = 'Not at risk';
$string['targetlabelstudentdropoutyes'] = 'Student at risk of dropping out';
$string['targetlabelstudentgradetopassno'] = 'Student who is likely to meet the minimum grade to pass the course.';
$string['targetlabelstudentgradetopassyes'] = 'Student at risk of not meeting the minimum grade to pass the course.';
$string['targetlabelteachingno'] = 'Courses at risk of not starting';
$string['targetlabelteachingyes'] = 'Users with teaching capabilities who have access to the course';
