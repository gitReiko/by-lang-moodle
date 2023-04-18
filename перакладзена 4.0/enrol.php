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
$string['erroreditenrolment'] = 'Падчас спробы рэдагавання залічэння карыстальнікаў здарылася памылка';
$string['errorenrolcohort'] = 'Памылка стварэння экземпляра сінхранізавання з кагортай у гэтым курсе.';
$string['errorenrolcohortusers'] = 'Памылка залічэння чальцоў кагорты ў гэты курс.';
$string['errorthresholdlow'] = 'Мяжа паведамлення мусіць быць прынамсі 1 дзень.';
$string['errorwithbulkoperation'] = 'Падчас апрацоўкі вашай масавай змены залічэння здарылася памылка.';
$string['eventenrolinstancecreated'] = 'Экземпляр залічэння створаны';
$string['eventenrolinstancedeleted'] = 'Экземпляр залічэння выдалены';
$string['eventenrolinstanceupdated'] = 'Экземпляр залічэння абноўлены';
$string['eventuserenrolmentcreated'] = 'Карыстальнік залічаны ў курс';
$string['eventuserenrolmentdeleted'] = 'Карыстальнік адлічаны з курса';
$string['eventuserenrolmentupdated'] = 'Залічэнне карыстальніка абноўлена';
$string['expirynotify'] = 'Павядамляць пра заканчэнне залічэння';
$string['expirynotify_help'] = 'Гэтая налада вызначае, калі трэба адпраўляць паведамленні пра заканчэнне залічэння.';
$string['expirynotifyall'] = 'Залічальнік і залічаемы';
$string['expirynotifyenroller'] = 'Толькі залічальнік';
$string['expirynotifyhour'] = 'Гадзіна для адпраўлення паведамленняў пра заканчэнне залічэння';
$string['expirythreshold'] = 'Мяжа паведамлення';
$string['expirythreshold_help'] = 'За які час да заканчэння залічэння варта апавяшчаць карыстальнікаў?';
$string['extremovedaction'] = 'Вонкавае дзеянне адлічэнне';
$string['extremovedaction_help'] = 'Абярыце дзеянне, якое трэба зрабіць пасля знікнення карыстальніка з вонкавай крыніцы залічэння. Калі ласка, памятайце, што частка дадзеных і наладаў карыстальнікаў выдаляецца з курса падчас адлічэння.';
$string['extremovedkeep'] = 'Захоўваць карыстальніка залічаным';
$string['extremovedsuspend'] = 'Адключыць залічэнне курса';
$string['extremovedsuspendnoroles'] = 'Адключыць залічэнне курса і выдаліць ролі';
$string['extremovedunenrol'] = 'Адлічыць карыстальніка з курса';
$string['finishenrollingusers'] = 'Скончыць залічэнне карыстальнікаў';
$string['foundxcohorts'] = 'Знойдзена кагорт: {$a}';
$string['instanceadded'] = 'Метад даданы';
$string['instanceeditselfwarning'] = 'Увага:';
$string['instanceeditselfwarningtext'] = 'Вы залічаны ў гэты курс з дапамогай гэтага метаду залічэння, змены могуць паўплываць на вашы доступ у гэты курс.';
$string['invalidenrolduration'] = 'Хібная працягласць залічэння';
$string['invalidenrolinstance'] = 'Хібны экземпляр залічэння';
$string['invalidrequest'] = 'Хібны запыт';
$string['invalidrole'] = 'Хібная роля';
$string['manageenrols'] = 'Кіраваць плагінамі залічэння';
$string['manageinstance'] = 'Кіраваць';
$string['migratetomanual'] = 'Міграваць на ручное залічэнне';
$string['nochange'] = 'Без змен';
$string['noexistingparticipants'] = 'Удзельнікі адсутнічаюць';
$string['nogroup'] = 'Без групы';
$string['noguestaccess'] = 'Госці не могуць увайсці ў гэты курс. Калі ласка, увайдзіце на сайт.';
$string['none'] = 'Адсутнічае';
$string['notenrollable'] = 'Вы не можаце залічыць сябе на гэты курс.';
$string['notenrolledusers'] = 'Іншыя карыстальнікі';
$string['otheruserdesc'] = 'Наступныя карыстальнікі не залічаны ў гэты курс, але маюць ролі, успадкаваныя ці прызначаныя ў ім.';
$string['participationactive'] = 'Актіўны';
$string['participationnotcurrent'] = 'Неактыўны';
$string['participationstatus'] = 'Статус';
$string['participationsuspended'] = 'Заблакаваны';
$string['periodend'] = 'да {$a}';
$string['periodnone'] = 'залічаны {$a}';
$string['periodstart'] = 'з {$a}';
$string['periodstartend'] = 'з {$a->start} да {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Залічэнні';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Экземпляр плагіна залічэння';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID карыстальніка, які апошнім мадыфікаваў залічэнне';
$string['privacy:metadata:user_enrolments:status'] = 'Статус залічэння карыстальніка ў курсе';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Ядровы плагін залічэння захоўвае залічаных карыстальнікаў.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Час стварэння залічэння карыстальніка';
$string['privacy:metadata:user_enrolments:timeend'] = 'Час заканчэння залічэння карыстальніка';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Час мадыфікацыі залічэння карыстальніка';
$string['privacy:metadata:user_enrolments:timestart'] = 'Час пачатку залічэння карыстальніка';
$string['privacy:metadata:user_enrolments:userid'] = 'ID карыстальніка';
$string['proceedtocourse'] = 'Перайсці да змесціва курса';
$string['recovergrades'] = 'Аднавіць старыя адзнакі карыстальніка, калі магчыма';
$string['rolefromcategory'] = '{$a->role} (Успадкавана ад катэгорыі курса)';
$string['rolefrommetacourse'] = '{$a->role} (Успадкавана ад бацькоўскага курса)';
$string['rolefromsystem'] = '{$a->role} (Прызначана на ўзроўні сайта)';
$string['rolefromthiscourse'] = '{$a->role} (Прызначана ў гэтым курсе)';
$string['sendfromcoursecontact'] = 'Ад кантакту курса';
$string['sendfromkeyholder'] = 'Ад трымальніка ключа';
$string['sendfromnoreply'] = 'Ад адраса без адказу';
$string['startdatetoday'] = 'Сёння';
$string['synced'] = 'Сінхранізавана';
$string['testsettings'] = 'Налады тэсту';
$string['testsettingsheading'] = 'Тэставаць налады залічэння - {$a}';
$string['totalenrolledusers'] = '{$a} карыстальнікаў залічана';
$string['totalotherusers'] = '{$a} іншых карыстальнікаў';
$string['totalunenrolledusers'] = '{$a} карыстальнікаў адлічана';
$string['unassignnotpermitted'] = 'Вы не маеце дазволу прызначаць ролі ў гэтым курсе';
$string['unenrol'] = 'Адлічыць';
$string['unenrolconfirm'] = 'Вы сапраўды жадаеце адлічыць "{$a->user}" (раней залічаны праз "{$a->enrolinstancename}") з "{$a->course}"?';
$string['unenrolleduser'] = 'Карыстальнік "{$a->fullname}" адлічаны з курса';
$string['unenrolme'] = 'Адлічыць мяне з {$a}';
$string['unenrolnotpermitted'] = 'Вы не маеце дазволу адлічаць карыстальнікаў з курса.';
$string['unenrolroleusers'] = 'Адлічыць карыстальнікаў';
$string['uninstallmigrating'] = 'Міграванне "{$a}" залічэнняў';
$string['unknowajaxaction'] = 'Запрошана невядомае дзеянне';
$string['unlimitedduration'] = 'Без мяжы';
$string['userremovedfromselectiona'] = 'Карыстальнік "{$a}" выдалены з абрання.';
$string['usersearch'] = 'Шукаць';
$string['withselectedusers'] = 'З абранымі карыстальнікамі';
$string['youenrolledincourse'] = 'Вы залічаны ў курс.';
$string['youunenrolledfromcourse'] = 'Вы адлічаны з курса "{$a}".';
