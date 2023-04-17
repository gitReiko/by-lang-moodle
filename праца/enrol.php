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
 * Strings for component 'enrol', language 'en', version '4.0'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Даступныя плагіны залічэння ў курс';
$string['addinstance'] = 'Дадаць метад';
$string['addinstanceanother'] = 'Дадаць метад і стварыць яшчэ адзін';
$string['ajaxnext25'] = 'Наступныя 25...';
$string['ajaxoneuserfound'] = '1 карыстальнік знойдзены';
$string['ajaxxmoreusersfound'] = 'Знойдзена больш {$a} карыстальнікаў';
$string['ajaxxusersfound'] = '{$a} карыстальнікаў знойдзена';
$string['assignnotpermitted'] = 'Вы не маеце дазволу ці не можаце прызначаць ролі ў гэтым курсе.';
$string['bulkuseroperation'] = 'Масавыя карыстальніцкія дзеянні';
$string['configenrolplugins'] = 'Калі ласка, абярыце ўсе патрабаваныя плагіны і размясціце іх у адпаведным парадку.';
$string['custominstancename'] = 'Назва ўласнага экзэмпляра';
$string['defaultenrol'] = 'Дадаць экзэмпляр у новыя курсы';
$string['defaultenrol_desc'] = 'Льга дадаць гэты плагін ва ўсе новыя курсы па змаўчанні.';
$string['deleteinstanceconfirm'] = 'Вы збіраецеся выдаліць метад залічэння "{$a->name}". Усе {$a->users} карыстальнікаў, якія зараз залічаны з дапамогай гэтага метаду, будуць адлічаны, і ўсе дадзеныя, звязаныя з курсам, напрыклад, адзнакі карыстальнікаў, чалецтва ў групах ці падпіскі на форум, будуць выдалены.

Вы ўпэўнены, што жадаеце працягнуць?';
$string['deleteinstanceconfirmself'] = 'Вы сапраўды ўпэўнены, што жадаеце выдаліць экзэмпляр "{$a->name}", які дае вам доступ да гэтага курсу? Магчыма, вы не зможаце атрымаць доступ да гэтага курса, калі працягніце.';
$string['deleteinstancenousersconfirm'] = 'Вы збіраецеся выдаліць метад залічэння "{$a->name}". Вы ўпэўнены, што жадаеце працягнуць?';
$string['disableinstanceconfirmself'] = 'Вы сапраўды ўпэўнены, што жадаеце адключыць экзэмпляр "{$a->name}", які дае вам доступ да гэтага курсу? Магчыма, вы не зможаце атрымаць доступ да гэтага курса, калі працягніце.';
$string['durationdays'] = '{$a} дзён';
$string['editenrolment'] = 'Рэдагаваць залічэнне';
$string['edituserenrolment'] = 'Рэдагаваць залічэнне {$a}';
$string['enrol'] = 'Залічыць';
$string['enrolcandidates'] = 'Не залічаныя карыстальнікі';
$string['enrolcandidatesmatching'] = 'Адпаведныя не залічаныя карыстальнікі';
$string['enrolcohort'] = 'Залічыць кагорту';
$string['enrolcohortusers'] = 'Залічыць карыстальнікаў';
$string['enroldetails'] = 'Дэталі залічэння';
$string['enrollednewusers'] = 'Паспяхова залічана {$a} новых карыстальнікаў';
$string['enrolledusers'] = 'Залічаныя карыстальнікі';
$string['enrolledusersmatching'] = 'Адпаведныя залічаныя карыстальнікі';
$string['enrolme'] = 'Залічыць мяне ў гэты курс';
$string['enrolmentinstances'] = 'Метады залічэння';
$string['enrolmentmethod'] = 'Метад залічэння';
$string['enrolmentnew'] = 'Новае залічэнне ў {$a}';
$string['enrolmentnewuser'] = '{$a->user} залічаны(а) ў курс "{$a->course}"';
$string['enrolmentoptions'] = 'Налады залічэння';
$string['enrolments'] = 'Залічэнні';
$string['enrolmentupdatedforuser'] = 'Залічэнне карыстальніка "{$a->fullname}" было абноўлена';
$string['enrolnotpermitted'] = 'Вы не маеце дазволу ці не можаце залічыць кагосьці ў гэты курс';
$string['enrolperiod'] = 'Працягласць залічэння';
$string['enroltimecreated'] = 'Залічэнне створана';
$string['enroltimeend'] = 'Залічэнне канчаецца';
$string['enroltimeendinvalid'] = 'Дата сканчэння залічэння мусіць быць болей даты пачатку';
$string['enroltimestart'] = 'Залічэнне пачынаецца';
$string['enrolusage'] = 'Экземпляры / залічэнні';
$string['enrolusers'] = 'Залічыць карыстальнікаў';
$string['enrolxusers'] = 'Залічыць {$a} карыстальнікаў';
$string['errajaxfailedenrol'] = 'Не ўдалося залічыць карыстальніка';
$string['errajaxsearch'] = 'Памылка падчас пошуку карыстальнікаў';
$string['erroreditenrolment'] = 'An error occurred while trying to edit a users enrolment';
$string['errorenrolcohort'] = 'Error creating cohort sync enrolment instance in this course.';
$string['errorenrolcohortusers'] = 'Error enrolling cohort members in this course.';
$string['errorthresholdlow'] = 'Notification threshold must be at least 1 day.';
$string['errorwithbulkoperation'] = 'There was an error while processing your bulk enrolment change.';
$string['eventenrolinstancecreated'] = 'Enrolment instance created';
$string['eventenrolinstancedeleted'] = 'Enrolment instance deleted';
$string['eventenrolinstanceupdated'] = 'Enrolment instance updated';
$string['eventuserenrolmentcreated'] = 'User enrolled in course';
$string['eventuserenrolmentdeleted'] = 'User unenrolled from course';
$string['eventuserenrolmentupdated'] = 'User unenrolment updated';
$string['expirynotify'] = 'Notify before enrolment expires';
$string['expirynotify_help'] = 'This setting determines whether enrolment expiry notification messages are sent.';
$string['expirynotifyall'] = 'Enroller and enrolled user';
$string['expirynotifyenroller'] = 'Enroller only';
$string['expirynotifyhour'] = 'Hour to send enrolment expiry notifications';
$string['expirythreshold'] = 'Notification threshold';
$string['expirythreshold_help'] = 'How long before enrolment expiry should users be notified?';
$string['extremovedaction'] = 'External unenrol action';
$string['extremovedaction_help'] = 'Select action to carry out when user enrolment disappears from external enrolment source. Please note that some user data and settings are purged from course during course unenrolment.';
$string['extremovedkeep'] = 'Keep user enrolled';
$string['extremovedsuspend'] = 'Disable course enrolment';
$string['extremovedsuspendnoroles'] = 'Disable course enrolment and remove roles';
$string['extremovedunenrol'] = 'Unenrol user from course';
$string['finishenrollingusers'] = 'Finish enrolling users';
$string['foundxcohorts'] = 'Found {$a} cohorts';
$string['instanceadded'] = 'Method added';
$string['instanceeditselfwarning'] = 'Warning:';
$string['instanceeditselfwarningtext'] = 'You are enrolled into this course through this enrolment method, changes may affect your access to this course.';
$string['invalidenrolduration'] = 'Invalid enrolment duration';
$string['invalidenrolinstance'] = 'Invalid enrolment instance';
$string['invalidrequest'] = 'Invalid request';
$string['invalidrole'] = 'Invalid role';
$string['manageenrols'] = 'Manage enrol plugins';
$string['manageinstance'] = 'Manage';
$string['migratetomanual'] = 'Migrate to manual enrolments';
$string['nochange'] = 'No change';
$string['noexistingparticipants'] = 'No existing participants';
$string['nogroup'] = 'No group';
$string['noguestaccess'] = 'Guests cannot access this course. Please log in.';
$string['none'] = 'None';
$string['notenrollable'] = 'You cannot enrol yourself in this course.';
$string['notenrolledusers'] = 'Other users';
$string['otheruserdesc'] = 'The following users are not enrolled in this course but do have roles, inherited or assigned within it.';
$string['participationactive'] = 'Active';
$string['participationnotcurrent'] = 'Not current';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Suspended';
$string['periodend'] = 'until {$a}';
$string['periodnone'] = 'enrolled {$a}';
$string['periodstart'] = 'from {$a}';
$string['periodstartend'] = 'from {$a->start} until {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Enrolments';
$string['privacy:metadata:user_enrolments:enrolid'] = 'The instance of the enrolment plugin';
$string['privacy:metadata:user_enrolments:modifierid'] = 'The ID of the user who last modified the user enrolment';
$string['privacy:metadata:user_enrolments:status'] = 'The status of the user enrolment in a course';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'The core enrol plugin stores enrolled users.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'The time when the user enrolment was created';
$string['privacy:metadata:user_enrolments:timeend'] = 'The time when the user enrolment ends';
$string['privacy:metadata:user_enrolments:timemodified'] = 'The time when the user enrolment was modified';
$string['privacy:metadata:user_enrolments:timestart'] = 'The time when the user enrolment starts';
$string['privacy:metadata:user_enrolments:userid'] = 'The ID of the user';
$string['proceedtocourse'] = 'Proceed to course content';
$string['recovergrades'] = 'Recover user\'s old grades if possible';
$string['rolefromcategory'] = '{$a->role} (Inherited from course category)';
$string['rolefrommetacourse'] = '{$a->role} (Inherited from parent course)';
$string['rolefromsystem'] = '{$a->role} (Assigned at site level)';
$string['rolefromthiscourse'] = '{$a->role} (Assigned in this course)';
$string['sendfromcoursecontact'] = 'From the course contact';
$string['sendfromkeyholder'] = 'From the key holder';
$string['sendfromnoreply'] = 'From the no-reply address';
$string['startdatetoday'] = 'Today';
$string['synced'] = 'Synced';
$string['testsettings'] = 'Test settings';
$string['testsettingsheading'] = 'Test enrol settings - {$a}';
$string['totalenrolledusers'] = '{$a} enrolled users';
$string['totalotherusers'] = '{$a} other users';
$string['totalunenrolledusers'] = '{$a} unenrolled users';
$string['unassignnotpermitted'] = 'You do not have permission to unassign roles in this course';
$string['unenrol'] = 'Unenrol';
$string['unenrolconfirm'] = 'Do you really want to unenrol "{$a->user}" (previously enrolled via "{$a->enrolinstancename}") from "{$a->course}"?';
$string['unenrolleduser'] = 'The user "{$a->fullname}" was unenrolled from the course';
$string['unenrolme'] = 'Unenrol me from {$a}';
$string['unenrolnotpermitted'] = 'You do not have permission to unenrol this user from the course.';
$string['unenrolroleusers'] = 'Unenrol users';
$string['uninstallmigrating'] = 'Migrating "{$a}" enrolments';
$string['unknowajaxaction'] = 'Unknown action requested';
$string['unlimitedduration'] = 'Unlimited';
$string['userremovedfromselectiona'] = 'User "{$a}" was removed from the selection.';
$string['usersearch'] = 'Search';
$string['withselectedusers'] = 'With selected users';
$string['youenrolledincourse'] = 'You are enrolled in the course.';
$string['youunenrolledfromcourse'] = 'You are unenrolled from the course "{$a}".';
