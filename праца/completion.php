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
 * Strings for component 'completion', language 'en', version '4.0'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Дасягненне адзнакі';
$string['achievingpassinggrade'] = 'Дасягненне прахадной адзнакі';
$string['activities'] = 'Актыўнасці';
$string['activitiescompleted'] = 'Выкананне актыўнасці';
$string['activitiescompletednote'] = 'Нататка: Каб актыўнасць з\'явілася ў вышэйшым спісе, трэба ўсталяваць выкананне актыўнасці.';
$string['activitieslabel'] = 'Актыўнасці / рэсурсы';
$string['activityaggregation'] = 'Умова патрабуе';
$string['activityaggregation_all'] = 'УСЕ абраныя актыўнасці мусяць быць выкананы';
$string['activityaggregation_any'] = 'ЛЮБАЯ абраная актыўнасць мусіць быць выканана';
$string['activitycompletion'] = 'Выкананне актыўнасці';
$string['activitycompletionupdated'] = 'Змены захаваны';
$string['activitygradenotrequired'] = 'Адзнака не патрабуецца';
$string['activitygradetopassnotset'] = 'Гэтая актыўнасць не мае валіднай прахадной адзнакі. Яе льга ўсталяваць у наладах актыўнасць, падзеле Адзнака.';
$string['affectedactivities'] = 'Змены закрануць наступныя <b>{$a}</b> актыўнасці і рэсурсы:';
$string['aggregationmethod'] = 'Метад агрэгацыі';
$string['all'] = 'Усе';
$string['any'] = 'Любая';
$string['approval'] = 'Ухвалена';
$string['areyousureoverridecompletion'] = 'Вы ўпэўнены, што жадаеце скасаваць цяперашні стан выканання гэтай актыўнасці для гэтага карыстальніка і пазначыць яго "{$a}"?';
$string['badautocompletion'] = 'Падчас абрання аўтаматычнага выканання вы таксама мусіце ўключыць прынамсі адно патрабаванне (гл. ніжэй).';
$string['badcompletiongradeitemnumber'] = 'Патрабаванне адзнакі не можа быць уключана для <b>{$a}</b>, бо для {$a} не уключана адзнака.';
$string['bulkactivitycompletion'] = 'Масавае рэдагаванне выканання актыўнасці';
$string['bulkactivitydetail'] = 'Абярыце актыўнасці, якія жадаеце масава рэдагаваць.';
$string['bulkcompletiontracking'] = 'Адсочванне выканання';
$string['bulkcompletiontracking_help'] = '<strong>Ніякае:</strong> Не паказвае выкананне актыўнасці

<strong>Ручное:</strong> Студэнты могуць уручную адзначаць актыўнасць як выкананую

<strong>З умовамі:</strong> Паказвае актыўнасць як выкананую пасля выканання ўмоваў';
$string['checkactivity'] = 'Сцяжок для актыўнасці / рэсурсу: {$a}';
$string['checkall'] = 'Усталюйце ці здыміце сцяжкі для ўсіх актыўнасцяў і рэсурсаў';
$string['checkallsection'] = 'Усталюйце ці здыміце сцяжкі для ўсіх актыўнасцяў і рэсурсаў у наступным падзеле: {$a}';
$string['completeactivity'] = 'Выканаць актыўнасць';
$string['completed'] = 'Выканана';
$string['completedunlocked'] = 'Разблакаваныя варыянты выканання';
$string['completedunlockedtext'] = 'Калі вы захаваеце змены, стан завяршэння для ўсіх студэнтаў будзе сцёрты. Калі вы раздумалі, не захоўвайце форму.';
$string['completedwarning'] = 'Заблакаваныя варыянты выканання';
$string['completedwarningtext'] = 'Гэтая актыўнасць ужо была адзначана як выкананая для {$a} удзельніка(ў). Змена варыянтаў выканання сатрэ стан выканання і можа прывесці да блытаніны. Таму варыянты былі заблакаваныя і не павінны адблакоўвацца без пільнай патрэбы.';
$string['completion'] = 'Адсочванне выканання';
$string['completion-alt-auto-enabled'] = 'Сістэма адзначае выкананне гэтага прадмета ў адпаведнасці з умовамі: {$a}';
$string['completion-alt-auto-fail'] = 'Выканана: {$a} (не набраны прахадны бал)';
$string['completion-alt-auto-n'] = 'Нявыканана: {$a}';
$string['completion-alt-auto-n-override'] = 'Нявыканана: {$a->modname} (усталявана {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Выканана: {$a} (набраны прахадны бал)';
$string['completion-alt-auto-y'] = 'Выканана: {$a}';
$string['completion-alt-auto-y-override'] = 'Выканана: {$a->modname} (усталявана {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Студэнты могуць уручную адзначыць гэты прадмет як выкананы: {$a}';
$string['completion-alt-manual-n'] = 'Нявыканана: {$a}. Абярыце, каб адзначыць як выканана.';
$string['completion-alt-manual-n-override'] = 'Нявыканана: {$a->modname} (усталявана {$a->overrideuser}). Абярыце, каб адзначыць як выканана.';
$string['completion-alt-manual-y'] = 'Выканана: {$a}. Абярыце, каб адзначыць як нявыканана.';
$string['completion-alt-manual-y-override'] = 'Выканана: {$a->modname} (усталявана {$a->overrideuser}). Абярыце, каб адзначыць як нявыканана.';
$string['completion-fail'] = 'Выканана (не набраны прахадны бал)';
$string['completion-n'] = 'Нявыканана';
$string['completion-n-override'] = 'Нявыканана (усталявана {$a})';
$string['completion-pass'] = 'Выканана (набраны прахадны бал)';
$string['completion-y'] = 'Выканана';
$string['completion-y-override'] = 'Выканана (усталявана {$a})';
$string['completion_automatic'] = 'Паказвае актыўнасць як выкананую пасля выканання ўмоваў';
$string['completion_help'] = 'Калі ўключана, выкананне актыўнасці будзе адсочвацца ўручную ці аўтаматычна на падставе вызначаных умоваў. Пры жаданні вы можаце задаць некалькі ўмоваў. У гэтым выпадку актыўнасць будзе лічыцца выкананай толькі пасля выканання ЎСІХ умоваў.';
$string['completion_link'] = 'актыўнасць/выкананне';
$string['completion_manual'] = 'Студэнты могуць уручную адзначаць актыўнасць як выкананую';
$string['completion_none'] = 'Не адлюстроўваць выкананне актыўнасці';
$string['completionactivitydefault'] = 'Ужываць актыўнасць па змоўчанні';
$string['completiondefault'] = 'Адсочванне выканання па змоўчанні';
$string['completiondisabled'] = 'Адключана, не адлюстроўваецца ў наладах актыўнасці';
$string['completionduration'] = 'Залічэнне';
$string['completionenabled'] = 'Уключана, кіраванне праз выкананне і налады актыўнасці';
$string['completionexpected'] = 'Чакае выканання';
$string['completionexpected_help'] = 'Гэтая налада вызначае дату, чаканага выканання актыўнасці. Калі падыходзіць дата, актыўнасць адлюстроўваецца ў блоке Часовая шкала ў Адукаванне.';
$string['completionexpecteddesc'] = 'Выкананне чакаецца {$a}';
$string['completionexpectedfor'] = '{$a->instancename} мусіць быць выканана';
$string['completionicons'] = 'Галочкі выканання';
$string['completionicons_help'] = 'Галочка каля назвы актыўнасці выкарыстоўваецца для адлюстравання выканання актыўнасці.

Калі поле адлюстроўваецца з пункцірнымі межамі, галочка будзе адлюстроўвацца аўтаматычна пасля выканання актыўнасці ў адпаведнасці з умовамі, якія ўсталяваў настаўнік.

Калі поле адлюстроўваецца з суцэльнымі межамі, вы можаце націснуць па яму, каб паставіць галочку, калі лічыце, што актыўнасць выканана (Пасля паўторнага націску галочка будзе знята).';
$string['completionmenuitem'] = 'Выкананне';
$string['completionnotenabled'] = 'Выкананне выключана';
$string['completionnotenabledforcourse'] = 'Выкананне выключана для гэтага курса';
$string['completionnotenabledforsite'] = 'Выкананне выключана для гэтага сайта';
$string['completionondate'] = 'Дата';
$string['completionondatevalue'] = 'Дата, пасля якой курс будзе лічыцца выкананым';
$string['completionpassgrade'] = 'Патрабаваць прахадную адзнаку';
$string['completionpassgrade_desc'] = 'Студэнт мусіць атрымаць прахадную адзнаку, каб выканаць актыўнасць';
$string['completionpassgrade_help'] = 'Калі ўключана, актыўнасць лічыцца выкананнай пасля атрымання студэнтам прахадной адзнакі.';
$string['completionsettingslocked'] = 'Налады выканання заблакаваны';
$string['completionupdated'] = 'Абнавіць выкананне для актыўнасці <b>{$a}</b>';
$string['completionusegrade'] = 'Патрабуе адзнаку';
$string['completionusegrade_desc'] = 'Студэнт мусіць атрымаць адзнаку, каб выканаць актыўнасць';
$string['completionusegrade_help'] = 'Калі ўключана, актыўнасць разгледжваецца выкананай пасля атрымання студэнтам адзнакі. Калі для актыўнасці ўсталявана прахадная адзнака, выявы праходу і правалу адлюстроўваюцца ў справаздачы выканання актыўнасці.';
$string['completionview'] = 'Патрабуе прагляд';
$string['completionview_desc'] = 'Студэнт мусіць праглядзець гэтую актыўнасць, каб выканаць яе';
$string['configcompletiondefault'] = 'Налады па змоўчанні для адсочвання выканання падчас стварэння новай актыўнасці.';
$string['configenablecompletion'] = 'Калі ўключана, льга ўсталяваць умовы выканання курса і актыўнасці. Налада ўмоваў выканання актыўнасці рэкамендуецца, каб істотныя дадзеныя паказваліся для карыстальнікаў у аглядзе курсаў у Адукаванне.';
$string['confirmselfcompletion'] = 'Пацвердзіць самастойнае выкананне';
$string['courseaggregation'] = 'Патрабуюцца ўмовы';
$string['courseaggregation_all'] = 'УСЕ абраныя курсы мусяць быць выкананыя';
$string['courseaggregation_any'] = 'ЛЮБЫ абраны курс мусіць быць выкананы';
$string['coursealreadycompleted'] = 'Вы ўжо выканалі гэты курс';
$string['coursecomplete'] = 'Курс выкананы';
$string['coursecompleted'] = 'Курс выкананы';
$string['coursecompletedmessage'] = '<p>Віншаванні!</p><p>Вы выканалі курс <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Выкананне курса';
$string['coursecompletioncondition'] = 'Умова: {$a}';
$string['coursecompletionnavigation'] = 'Троесная навігацыя выканання курса';
$string['coursegrade'] = 'Адзнака курса';
$string['coursesavailable'] = 'Даступныя курсы';
$string['coursesavailableexplaination'] = 'Нататка: Каб курс з\'явіўся ў прыведзеным спісе, мусяць быць усталяваны умовы выканання курса.';
$string['criteria'] = 'Крытэрыі';
$string['criteriagroup'] = 'Група крытэрыяў';
$string['criteriarequiredall'] = 'Патрабуецца выкананне ўсіх пералічаных крытэрыяў';
$string['criteriarequiredany'] = 'Патрабуецца выкананне любага пералічанага крытэрыя';
$string['csvdownload'] = 'Спампаваць у фармаце электроннай табліцы (UTF-8 .csv)';
$string['datepassed'] = 'Дата пройдзена';
$string['days'] = 'Дзён';
$string['daysoftotal'] = '{$a->days} з {$a->total}';
$string['defaultcompletion'] = 'Выкананне актыўнасці па змоўчанні';
$string['defaultcompletionupdated'] = 'Змены захаваныя';
$string['deletecompletiondata'] = 'Выдаліць дадзеныя выканання';
$string['dependencies'] = 'Залежнасці';
$string['dependenciescompleted'] = 'Выкананне іншых курсаў';
$string['detail_desc:receivegrade'] = 'Атрымаць адзнаку';
$string['detail_desc:receivepassgrade'] = 'Атрымаць прахадную адзнаку';
$string['detail_desc:view'] = 'Агляд';
$string['done'] = 'Гатова';
$string['editcoursecompletionsettings'] = 'Рэдагаваць налады выканання курса';
$string['enablecompletion'] = 'Уключыць адсочванне выканання';
$string['enablecompletion_help'] = 'Калі ўключана, умовы выканання актыўнасці льга ўсталяваць у наладах актыўнасці і/ці ўмовы выканання курса. Рэкамендуецца ўключыць гэтую наладу, каб істотныя дадзеныя адлюстроўваліся ў аглядзе курса ў Адукаванні.';
$string['enrolmentduration'] = 'Працягласць залічэння';
$string['enrolmentdurationlength'] = 'Карыстальнік павінен заставацца залічаным цягам';
$string['err_noactivities'] = 'Інфармацыя выканання не ўключана для усіх актыўнасцяў, таму не можа адлюстравацца. Вы можаце ўключыць інфармацыю выканання адрэдагаваўшы налады актыўнасці.';
$string['err_nocourses'] = 'Выкананне курса выключана для ўсіх іншых курсамы, таму яны не могуць быць адлюстраваны. Вы можаце ўключыць выкананне курса ў наладах курса.';
$string['err_nograde'] = 'Для гэтага курса не была ўсталявана прахадная адзнака. Каб уключыць гэты тып крытэрыяў, вы мусіце стварыць прахадную адзнаку для гэтага курса.';
$string['err_noroles'] = 'Гэты курс не мае роляў са здольнасцю moodle/course:markcomplete.';
$string['err_nousers'] = 'Гэты курс ці група не мае студэнтаў, для якіх льга адлюстраваць інфармацыю выканання (Інфармацыя выканання адлюстроўваецца толькі для карыстальніказ са здольнасцю \'Адлюстроўвацца ў справаздачах выканання\'. Гэта здольнасць па змоўчанні дазволена толькі для ролі студэнт, таму, калі тут няма студэнтаў, вы ўбачыце гэтае паведамленне).';
$string['err_settingslocked'] = 'Адзін ці некалькі студэнтаў ужо выканалі гэты крытэрый, таму налады заблакаваны. Разблакаванне налады выдаліць дадзеныя выканання карыстальнікаў і можа выклікаць блытаніну.';
$string['err_system'] = 'У сістэме выканання адбылася ўнутраная памылка (Сістэмныя адміністратары могуць уключыць наладачную інфармацыю, каб убачыць больш дэталяў).';
$string['eventcoursecompleted'] = 'Курс выкананы';
$string['eventcoursecompletionupdated'] = 'Выкананне курса абноўлена';
$string['eventcoursemodulecompletionupdated'] = 'Выкананне актыўнасці курса абноўлена';
$string['eventdefaultcompletionupdated'] = 'Обноўлена па змоўчанні для выканання актыўнасці курса';
$string['excelcsvdownload'] = 'Спампаваць у фармаце, сумяшчальным з Excel (.csv)';
$string['failed'] = 'Няшчасце';
$string['fraction'] = 'Фракцыя';
$string['graderequired'] = 'Патрабуецца адзнака курса';
$string['gradexrequired'] = 'Патрабуецца {$a}';
$string['hiddenrules'] = 'Частка наладаў, спецыфічных для <b>{$a}</b>, была схавана. Каб праглядзець, скасуйце выбар іншых актыўнасцяў';
$string['inprogress'] = 'У працэсе';
$string['manual'] = 'Ручное';
$string['manualcompletionby'] = 'Ручное выкананне іншымі';
$string['manualcompletionbynote'] = 'Нататка: Здольнасць moodle/course:markcomplete мусіць быць дазволена для ролі, каб з\'явіцца ў спісе.';
$string['manualselfcompletion'] = 'Ручное асабістае выкананне';
$string['manualselfcompletionnote'] = 'Нататка: Блок самастойнага выканання трэба дадаць у курса, калі ўключана ручное самастойнае выкананне.';
$string['markcomplete'] = 'Адзначыць як выканана';
$string['markedcompleteby'] = '{$a} адзначыў(ла) як выканана';
$string['markingyourselfcomplete'] = 'Адзначыць як выканана для сябе';
$string['modifybulkactions'] = 'Змяніце дзеянні, якія вы жадаеце масава рэдагаваць';
$string['moredetails'] = 'Больш дэталяў';
$string['nocriteriaset'] = 'Для гэтага курса не ўсталяваны крытэрыі выканання';
$string['nogradeitem'] = 'Патрабаванне адзнакі не можа быць уключана для <b>{$a}</b>, бо гэтую актыўнасць нельга ацэньваць.';
$string['notcompleted'] = 'Не выканана';
$string['notenroled'] = 'Вы не залічаны ў гэты курс';
$string['nottracked'] = 'Зараз вы не адсочваецеся выкананнем гэтага курса';
$string['notyetstarted'] = 'Дагэтуль не пачата';
$string['overallaggregation'] = 'Патрабаванні выканання';
$string['overallaggregation_all'] = 'Course is complete when ALL conditions are met';
$string['overallaggregation_any'] = 'Course is complete when ANY of the conditions are met';
$string['pending'] = 'Pending';
$string['periodpostenrolment'] = 'Period post enrolment';
$string['privacy:metadata:completionstate'] = 'If the activity has been completed';
$string['privacy:metadata:course'] = 'A course identifier';
$string['privacy:metadata:coursecompletedsummary'] = 'Stores information about users who have completed criteria in a course';
$string['privacy:metadata:coursemoduleid'] = 'The activity ID';
$string['privacy:metadata:coursemodulesummary'] = 'Stores activity completion data for a user';
$string['privacy:metadata:coursesummary'] = 'Stores the course completion data for a user.';
$string['privacy:metadata:gradefinal'] = 'Final grade received for course completion';
$string['privacy:metadata:overrideby'] = 'The user ID of the person who overrode the activity completion';
$string['privacy:metadata:reaggregate'] = 'If the course completion was reaggregated.';
$string['privacy:metadata:timecompleted'] = 'The time that the course was completed.';
$string['privacy:metadata:timeenrolled'] = 'The time that the user was enrolled in the course';
$string['privacy:metadata:timemodified'] = 'The time that the activity completion was modified';
$string['privacy:metadata:timestarted'] = 'The time the course was started.';
$string['privacy:metadata:unenroled'] = 'If the user has been unenrolled from the course';
$string['privacy:metadata:userid'] = 'The user ID of the person with course and activity completion data';
$string['privacy:metadata:viewed'] = 'If the activity was viewed';
$string['progress'] = 'Student progress';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progress: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Recognition of prior learning';
$string['remainingenroledfortime'] = 'Remaining enrolled for a specified period of time';
$string['remainingenroleduntildate'] = 'Remaining enrolled until a specified date';
$string['reportpage'] = 'Showing users {$a->from} to {$a->to} of {$a->total}.';
$string['requiredcriteria'] = 'Required criteria';
$string['resetactivities'] = 'Clear all checked activities and resources';
$string['restoringcompletiondata'] = 'Writing completion data';
$string['roleaggregation'] = 'Condition requires';
$string['roleaggregation_all'] = 'ALL selected roles to mark when the condition is met';
$string['roleaggregation_any'] = 'ANY selected roles to mark when the condition is met';
$string['roleidnotfound'] = 'Role ID {$a} not found';
$string['saved'] = 'Saved';
$string['seedetails'] = 'See details';
$string['select'] = 'Select';
$string['self'] = 'Self';
$string['selfcompletion'] = 'Self completion';
$string['showcompletionconditions'] = 'Show activity completion conditions';
$string['showcompletionconditions_help'] = 'Activity completion conditions are always shown on the activity page. This setting determines whether activity completion conditions are also shown below each activity on the course page.';
$string['showinguser'] = 'Showing user';
$string['todo'] = 'To do';
$string['unenrolingfromcourse'] = 'Unenrolling from course';
$string['unenrolment'] = 'Unenrolment';
$string['unit'] = 'Unit';
$string['unlockcompletion'] = 'Unlock completion settings';
$string['unlockcompletiondelete'] = 'Unlock completion settings and delete user completion data';
$string['updateactivities'] = 'Update completion status of checked activities';
$string['usealternateselector'] = 'Use the alternate course selector';
$string['usernotenroled'] = 'User is not enrolled in this course';
$string['viewcoursereport'] = 'View course report';
$string['viewingactivity'] = 'Viewing the {$a}';
$string['withconditions'] = 'With conditions';
$string['writingcompletiondata'] = 'Writing completion data';
$string['xdays'] = '{$a} days';
$string['yourprogress'] = 'Your progress';
