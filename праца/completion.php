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
$string['completion_help'] = 'If enabled, activity completion is tracked, either manually or automatically, based on certain conditions. Multiple conditions may be set if desired. If so, the activity will only be considered complete when ALL conditions are met.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Students can manually mark the activity as completed';
$string['completion_none'] = 'Do not indicate activity completion';
$string['completionactivitydefault'] = 'Use activity default';
$string['completiondefault'] = 'Default completion tracking';
$string['completiondisabled'] = 'Disabled, not shown in activity settings';
$string['completionduration'] = 'Enrolment';
$string['completionenabled'] = 'Enabled, control via completion and activity settings';
$string['completionexpected'] = 'Expect completed on';
$string['completionexpected_help'] = 'This setting specifies the date when the activity is expected to be completed. When the date is upcoming, the activity is listed in the Timeline block on the Dashboard.';
$string['completionexpecteddesc'] = 'Completion expected on {$a}';
$string['completionexpectedfor'] = '{$a->instancename} should be completed';
$string['completionicons'] = 'Completion tick boxes';
$string['completionicons_help'] = 'A tick next to an activity name may be used to indicate when the activity is complete.

If a box with a dotted border is shown, a tick will appear automatically when you have completed the activity according to conditions set by the teacher.

If a box with a solid border is shown, you can click it to tick the box when you think you have completed the activity. (Clicking it again removes the tick if you change your mind.)';
$string['completionmenuitem'] = 'Completion';
$string['completionnotenabled'] = 'Completion is not enabled';
$string['completionnotenabledforcourse'] = 'Completion is not enabled for this course';
$string['completionnotenabledforsite'] = 'Completion is not enabled for this site';
$string['completionondate'] = 'Date';
$string['completionondatevalue'] = 'Date when course will be marked as complete';
$string['completionpassgrade'] = 'Require passing grade';
$string['completionpassgrade_desc'] = 'Student must receive a passing grade to complete this activity';
$string['completionpassgrade_help'] = 'If enabled, the activity is considered complete when a student receives a passing grade.';
$string['completionsettingslocked'] = 'Completion settings locked';
$string['completionupdated'] = 'Updated completion for activity <b>{$a}</b>';
$string['completionusegrade'] = 'Require grade';
$string['completionusegrade_desc'] = 'Student must receive a grade to complete this activity';
$string['completionusegrade_help'] = 'If enabled, the activity is considered complete when a student receives a grade. If a pass grade for the activity is set, then pass and fail icons are displayed in the activity completion report.';
$string['completionview'] = 'Require view';
$string['completionview_desc'] = 'Student must view this activity to complete it';
$string['configcompletiondefault'] = 'The default setting for completion tracking when creating new activities.';
$string['configenablecompletion'] = 'If enabled, course and activity completion conditions may be set. Setting activity completion conditions is recommended so that meaningful data is displayed for users in their course overview on the Dashboard.';
$string['confirmselfcompletion'] = 'Confirm self completion';
$string['courseaggregation'] = 'Condition requires';
$string['courseaggregation_all'] = 'ALL selected courses to be completed';
$string['courseaggregation_any'] = 'ANY selected courses to be completed';
$string['coursealreadycompleted'] = 'You have already completed this course';
$string['coursecomplete'] = 'Course complete';
$string['coursecompleted'] = 'Course completed';
$string['coursecompletedmessage'] = '<p>Congratulations!</p><p>You have completed the course <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Course completion';
$string['coursecompletioncondition'] = 'Condition: {$a}';
$string['coursecompletionnavigation'] = 'Course completion tertiary navigation';
$string['coursegrade'] = 'Course grade';
$string['coursesavailable'] = 'Courses available';
$string['coursesavailableexplaination'] = 'Note: Course completion conditions must be set for a course to appear in the above list.';
$string['criteria'] = 'Criteria';
$string['criteriagroup'] = 'Criteria group';
$string['criteriarequiredall'] = 'All criteria below are required';
$string['criteriarequiredany'] = 'Any criteria below are required';
$string['csvdownload'] = 'Download in spreadsheet format (UTF-8 .csv)';
$string['datepassed'] = 'Date passed';
$string['days'] = 'Days';
$string['daysoftotal'] = '{$a->days} of {$a->total}';
$string['defaultcompletion'] = 'Default activity completion';
$string['defaultcompletionupdated'] = 'Changes saved';
$string['deletecompletiondata'] = 'Delete completion data';
$string['dependencies'] = 'Dependencies';
$string['dependenciescompleted'] = 'Completion of other courses';
$string['detail_desc:receivegrade'] = 'Receive a grade';
$string['detail_desc:receivepassgrade'] = 'Receive a passing grade';
$string['detail_desc:view'] = 'View';
$string['done'] = 'Done';
$string['editcoursecompletionsettings'] = 'Edit course completion settings';
$string['enablecompletion'] = 'Enable completion tracking';
$string['enablecompletion_help'] = 'If enabled, activity completion conditions may be set in the activity settings and/or course completion conditions may be set. It is recommended to have this enabled so that meaningful data is displayed in the course overview on the Dashboard.';
$string['enrolmentduration'] = 'Enrolment duration';
$string['enrolmentdurationlength'] = 'User must remain enrolled for';
$string['err_noactivities'] = 'Completion information is not enabled for any activity, so none can be displayed. You can enable completion information by editing the settings for an activity.';
$string['err_nocourses'] = 'Course completion is not enabled for any other courses, so none can be displayed. You can enable course completion in the course settings.';
$string['err_nograde'] = 'A course pass grade has not been set for this course. To enable this criteria type you must create a pass grade for this course.';
$string['err_noroles'] = 'There are no roles with the capability moodle/course:markcomplete in this course.';
$string['err_nousers'] = 'There are no students in this course or group for whom completion information is displayed. (Completion information is displayed only for users with the capability \'Be shown on completion reports\'. The capability is allowed for the default role of student only, so if there are no students, you will see this message.)';
$string['err_settingslocked'] = 'One or more students have already completed a criterion so the settings have been locked. Unlocking the settings will delete user completion data and may cause confusion.';
$string['err_system'] = 'An internal error occurred in the completion system. (System administrators can enable debugging information to see more detail.)';
$string['eventcoursecompleted'] = 'Course completed';
$string['eventcoursecompletionupdated'] = 'Course completion updated';
$string['eventcoursemodulecompletionupdated'] = 'Course activity completion updated';
$string['eventdefaultcompletionupdated'] = 'Default for course activity completion updated';
$string['excelcsvdownload'] = 'Download in Excel-compatible format (.csv)';
$string['failed'] = 'Failed';
$string['fraction'] = 'Fraction';
$string['graderequired'] = 'Required course grade';
$string['gradexrequired'] = '{$a} required';
$string['hiddenrules'] = 'Some settings specific to <b>{$a}</b> have been hidden. To view unselect other activities';
$string['inprogress'] = 'In progress';
$string['manual'] = 'Ручное';
$string['manualcompletionby'] = 'Manual completion by others';
$string['manualcompletionbynote'] = 'Note: The capability moodle/course:markcomplete must be allowed for a role to appear in the list.';
$string['manualselfcompletion'] = 'Manual self completion';
$string['manualselfcompletionnote'] = 'Note: The self completion block should be added to the course if manual self completion is enabled.';
$string['markcomplete'] = 'Mark complete';
$string['markedcompleteby'] = 'Marked complete by {$a}';
$string['markingyourselfcomplete'] = 'Marking yourself complete';
$string['modifybulkactions'] = 'Modify the actions you wish to bulk edit';
$string['moredetails'] = 'More details';
$string['nocriteriaset'] = 'No completion criteria set for this course';
$string['nogradeitem'] = 'Require grade can\'t be enabled for <b>{$a}</b> because the activity is not graded.';
$string['notcompleted'] = 'Not completed';
$string['notenroled'] = 'You are not enrolled in this course';
$string['nottracked'] = 'You are currently not being tracked by completion in this course';
$string['notyetstarted'] = 'Not yet started';
$string['overallaggregation'] = 'Completion requirements';
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
