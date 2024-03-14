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
 * Strings for component 'question', language 'en', version '4.0'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Дзеяньне';
$string['addanotherhint'] = 'Дадаць яшчэ падказку';
$string['addcategory'] = 'Дадаць катэгорыю';
$string['addmorechoiceblanks'] = 'Пустэчы дзеля {no} дадатковых выбараў';
$string['adminreport'] = 'Справаздача пра магчымыя праблемы ў вашай базе дадзеных пытаньняў.';
$string['advancedsearchoptions'] = 'Налады пошуку';
$string['alltries'] = 'Усе спробы';
$string['answer'] = 'Адказ';
$string['answers'] = 'Адказы';
$string['answersaved'] = 'Адказ захаваны';
$string['attemptfinished'] = 'Спроба завершана';
$string['attemptfinishedsubmitting'] = 'Адпраўленьне спробы завершана: {$a}';
$string['attemptoptions'] = 'Налады спроб';
$string['availableq'] = 'Даступна?';
$string['badbase'] = 'Дрэнны грунт да **: {$a}**';
$string['behaviour'] = 'Паводзіны';
$string['behaviourbeingused'] = 'Выкарастаныя паводзіны: {$a}';
$string['broken'] = 'Гэта "непрацуючая спасылка", яна спасылаецца на неіснуючы файл.';
$string['byandon'] = 'ад <em>{$a->user}</em> у <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Нельга скапіяваць файл рэзервовай копіі';
$string['cannotcreate'] = 'Нельга стварыць новы запіс у табліцы question_attempts';
$string['cannotcreatepath'] = 'Нельга стварыць шлях: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Нельга выдаліць паводзіны \'{$a}\'. Яны выкарыстоўваюцца спробамі пытаньня.';
$string['cannotdeletecate'] = 'Нельга выдаліць гэтую катэгорыю, бо яна з\'яўляецца стандартнай катэгорыяй для гэтага кантэксту.';
$string['cannotdeleteneededbehaviour'] = 'Нельга выдаліць паводзіны пытаньня \'{$a}\'. Бо існуюць іншыя паводзіны, якія залежаць ад паводзін.';
$string['cannotdeleteqtypeinuse'] = 'Нельга выдаліць тып пытаньняў \'{$a}\'. Бо існуюць пытаньні гэтага тыпу ў банке пытаньняў.';
$string['cannotdeleteqtypeneeded'] = 'Нельга выдаліць тып пытаньняў \'{$a}\'. Бо існуюць іншыя тыпы пытаньняў, якія разьлічваюць на яго.';
$string['cannotdeletetopcat'] = 'Верхнія катэгорыі нельга выдаліць.';
$string['cannotedittopcat'] = 'Верхнія катэгорыі нельга рэдагаваць.';
$string['cannotenable'] = 'Тып пытаньня {$a} нельга стварыць наўпрост.';
$string['cannotenablebehaviour'] = 'Паводзіны пытаньня {$a} нельга выкарыстоўваць наўпрост. Толькі для ўнутранага выкарыстаньня.';
$string['cannotfindcate'] = 'Нельга адшукаць запіс катэгорыі';
$string['cannotfindquestionfile'] = 'Нельга адшукаць файл дадзеных пытаньня ў zip архіве';
$string['cannotgetdsfordependent'] = 'Нельга атрымать вызначаны набор дадзеных для пытаньня, залежнага ад набору дадзеных! (пытаньне: {$a->id}, прадмет набору дадзеных: {$a->item})';
$string['cannotgetdsforquestion'] = 'Нельга атрымать вызначаны набор дадзеных для разьлічанага пытаньня! (пытаньне: {$a})';
$string['cannothidequestion'] = 'Нельга схаваць пытаньне';
$string['cannotimportformat'] = 'На жаль, імпартаваньне гэтага фармату дагэтуль не рэалізавана!';
$string['cannotinsertquestion'] = 'Нельга ўставіць новае пытаньне!';
$string['cannotinsertquestioncatecontext'] = 'Нельга ўставіць новую катэгорыю пытаньне {$a->cat} хібны contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Нельга загрузіць пытаньне';
$string['cannotmovequestion'] = 'Нельга выкарыстоўваць гэты скрыпт, каб перасунуць пытаньняў, зь якімі зьвязаны файлы з розных вобласьцяў.';
$string['cannotopenforwriting'] = 'Нельга аткрыць для запісу: {$a}';
$string['cannotpreview'] = 'Вы ня можаце перадпраглядзець гэтыя пытаньні!';
$string['cannotread'] = 'Нельга прачытаць файл імпарту (ці файл пусты)';
$string['cannotregradedifferentqtype'] = 'Нельга пераацаніць з пытаньнем іншага тыпу.';
$string['cannotretrieveqcat'] = 'Нельга атрымаць катэгорыю пытаньня';
$string['cannotunhidequestion'] = 'Памылка рабленьня пытаньня бачным.';
$string['cannotunzip'] = 'Нельга разархіваваць unzip файл.';
$string['cannotwriteto'] = 'Нельга запісаць экспартаваныя пытаньні ў {$a}';
$string['categories'] = 'Катэгорыі';
$string['category'] = 'Катэгорыя';
$string['categorycurrent'] = 'Цяперашняя катэгорыя';
$string['categorycurrentuse'] = 'Выкарыстоўваць гэтую катэгорыю';
$string['categorydoesnotexist'] = 'Гэтая катэгорыя не існуе';
$string['categoryinfo'] = 'Інфа катэгорыі';
$string['categorymove'] = 'Катэгорыя \'{$a->name}\' утрымлівае {$a->count} пытаньняў (частка пытаньняў можа быць схаваная ці мець выпадковыя пытаньні, што дагэтуль выкарыстоўваюцца ў тэсьце). Калі ласка, абярыце іншую катэгорыю для іхняга перасоўваньня.';
$string['categorymoveto'] = 'Захаваць у катэгорыі';
$string['categorynamecantbeblank'] = 'Назва катэгорыі ня можа быць пустой.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Зьмяніць опцыі';
$string['changepublishstatuscat'] = 'Статус супольнага выкарыстаньня <a href="{$a->caturl}">катэгорыі "{$a->name}"</a> у курсе "{$a->coursename}" будзе зьменены з {$a->changefrom} на {$a->changeto}.';
$string['check'] = 'Спраўдзіць';
$string['chooseqtypetoadd'] = 'Абярыце тып пытаньня, якое будзе дадана';
$string['clearwrongparts'] = 'Прыбраць хібныя водклічы';
$string['clickflag'] = 'Адзначыць сьцягам';
$string['clicktoflag'] = 'Адзначыць гэтае пытаньне для будучага выкарыстаньня';
$string['clicktounflag'] = 'Прыбраць сьцяг';
$string['clickunflag'] = 'Прыбраць сьцяг';
$string['closepreview'] = 'Закрыць перадпрагляд';
$string['combinedfeedback'] = 'Камбінаваны водгук';
$string['comment'] = 'Каментар';
$string['commented'] = 'Каментатар: {$a}';
$string['commentormark'] = 'Зрабіць каментар ці перавызначыць адзнаку';
$string['comments'] = 'Каментары';
$string['commentx'] = 'Каментар: {$a}';
$string['complete'] = 'Выкананы';
$string['contexterror'] = 'Вы ня мусілі трапіць сюды, калі б не перасунулі катэгорыю ў іншы кантэкст.';
$string['copy'] = 'Капіяваць з {$a} і зьмяніць спасылкі.';
$string['correct'] = 'Слушна';
$string['correctfeedback'] = 'Для ўсякага слушнага водкліча';
$string['correctfeedbackdefault'] = 'Вашы адказ слушны.';
$string['created'] = 'Створана';
$string['createdby'] = 'Створана';
$string['createdmodifiedheader'] = 'Створана / апошняе захаваньне';
$string['createnewquestion'] = 'Стварыць новае пытаньне ...';
$string['cwrqpfs'] = 'Выпадковыя пытаньні, абіраюць пытаньні з падкатэгорыяў.';
$string['cwrqpfsinfo'] = '<p>Падчас абнаўленьня да Moodle 1.9 пытаньні будуць падзелены па катэгорыям у розных кантэкстах. Статус супольнага выкарыстаньня часткі катэгорыяў пытаньняў і пытаньняў на вашым сайце будзе зьменены. Гэта патрэбна ў рэдкіх выпадках, калі абраньне аднога ці некалькіх \'выпадковых\' пытаньняў у тэсьце наладжана з мешаніны супольных і не супольных катэгорыяў (як гэта адбываецца на гэтым сайце). Тое адбываецца, калі \'выпадковае\' пытаньне ладзіць выбар з падкатэгорыяў, а адна ці некалькі падкатэгорыяў маюць іншы статус супольнага пытаньня, чым у бацькавай катэгорыі, зь якой створана выпадковае пытаньне.</p><p>Наступныя катэгорыі пытаньняў, зь якіх \'выпадковыя\' пытаньні ў бацькавых катэгорыях абіраюць пытаньні, будуць мець статус супольнага выкарыстаньня, які будзе зьменены на той жа статус супольнага выкарыстаньня, што і катэгорыя з \'выпадковым\' пытаньнем падчас абнаўленьня да Moodle 1.9. Статус супольнага выкарыстаньня будзе зьменены для наступных катэгорыяў. Пытаньні, якія будуць працягваць працаваць ува ўсіх існуючых тэстах, пакуль вы ня выдалены з гэтых тэстаў.</p>';
$string['cwrqpfsnoprob'] = 'Ніводная катэгорыя пытаньняў на вашым сайце не закранутая праблемай \'Выпадковыя пытаньні абіраюць пытаньні з падкатэгорыяў\'.';
$string['decimalplacesingrades'] = 'Лічбавыя знакі ў адзнаках';
$string['defaultfor'] = 'Стандартнае для {$a}';
$string['defaultinfofor'] = 'Стандартная катэгорыя для пытаньняў з супольным выкарыстаньнем у кантэксьце \'{$a}\'.';
$string['defaultmark'] = 'Стандартная адзнака';
$string['defaultmarkmustbepositive'] = 'Стандартная адзнака мусіць быць станоўчай.';
$string['deletecoursecategorywithquestions'] = 'У банке пытаньняў маюцца пытаньні, зьвязаныя з гэтай катэгорыяй курса. Калі вы працягнеце, яны будуць выдалены. Магчыма, вы пажадаеце спачатку перасунуць іх ува інтэрфэйсе банка пытаньняў.';
$string['deletequestioncheck'] = 'Вы абсалютна ўпэўнены, што жадаеце выдаліць \'{$a}\'?';
$string['deletequestionscheck'] = 'Вы абсалютна ўпэўнены, што жадаеце выдаліць наступныя пытаньні?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Выдаленьне паводзінаў пытаньня \'{$a}\'';
$string['deletingqtype'] = 'Выдаленьне тыпу пытаньня \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Не адпавядае ніводнаму адказу]';
$string['disabled'] = 'Адключана';
$string['displayoptions'] = 'Налады адлюстраваньня';
$string['disterror'] = 'Разьмеркаваньне {$a} выклікала праблемы';
$string['donothing'] = 'Не капіюйце, не перасоўвайце файлы і не зьмяняйце спасылкі.';
$string['editcategories'] = 'Рэдагаваць катэгорыі';
$string['editcategories_help'] = 'Заміж захоўваньня ўсяго ў адным вялікім сьпісе, пытаньні льга падзяліць на катэгорыі і падкатэгорыі.

Кожная катэгорыя мае кантэкст, які вызначае месца, дзе пытаньні гэтай катэгорыі льга выкарыстаць:

* Кантэкст актыўнасьці - Пытаньні будуць даступныя толькі ўва актыўнасьці
* Кантэкст курса - Пытаньні будуць даступныя ўва ўсіх актыўнасьцях курса
* Кантэкст катэгорыяў курса - Пытаньні будуць даступныя ўва ўсіх курсах і актыўнасьцях катэгорыі курсаў
* Кантэкст сістэмы - Пытаньні будуць даступныя ўва ўсіх актыўнасьцях і курсах сайта

Таксама катэгорыі выкарыстоўваюцца для стварэньня выпадковых пытаньняў, бо яны бяруцца з катэгорыяў.';
$string['editcategories_link'] = 'пытаньне/катэгорыя';
$string['editcategory'] = 'Рэдагаваць катэгорыю';
$string['editingcategory'] = 'Рэдагаваньне катэгорыі';
$string['editingquestion'] = 'Рэдагаваньне пытаньня';
$string['editquestion'] = 'Рэдагаваць пытаньне';
$string['editquestions'] = 'Рэдагаваць пытаньні';
$string['editthiscategory'] = 'Рэдагаваць гэтую катэгорыю';
$string['emptyxml'] = 'Невядомая памылка - пусты imsmanifest.xml';
$string['enabled'] = 'Уключана';
$string['erroraccessingcontext'] = 'Адсутнічае доступ да кантэксту';
$string['errordeletingquestionsfromcategory'] = 'Памылка выдаленьня пытаньняў з катэгорыі {$a}.';
$string['errorduringpost'] = 'Памылка адбылася падчас пост-апрацоўкі!';
$string['errorduringpre'] = 'Памылка адбылася падчас перад-апрацоўкі!';
$string['errorduringproc'] = 'Памылка адбылася падчас апрацоўкі!';
$string['errorduringregrade'] = 'Не ўдалося пераацаніць пытаньне {$a->qid}, вяртаньне да статусу {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Памылка: нельга капіяваць файл {$a}.';
$string['errorfilecannotbemoved'] = 'Памылка: нельга перасунуць файл {$a}.';
$string['errorfileschanged'] = 'Памылка: файлы, на якія спасылаюцца пытаньні, зьмяніліся з моманту адлюстраваньня формы.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Пытаньне ({$a}) выкарыстоўваецца некалькі разоў з рознай вагой у розных пазіцыях тэсту. Зараз такія паводзіны не падтрымліваюцца статыстычнай справаздачай і могуць зрабіць статыстыку па гэтаму пытаньню ненадзейнай.';
$string['errormanualgradeoutofrange'] = 'Адзнака {$a->grade} не знаходзіцца між 0 і {$a->maxgrade} для пытаньня {$a->name}. Адзнака і каментар не былі захаваныя.';
$string['errormovingquestions'] = 'Адбылася памылка падчас перасоўваньня пытаньняў зь ідэнтыфікатарамі {$a}.';
$string['errorpostprocess'] = 'Адбылася памылка падчас пост-апрацоўкі!';
$string['errorpreprocess'] = 'Адбылася памылка падчас перад-апрацоўкі!';
$string['errorprocess'] = 'Адбылася памылка падчас апрацоўкі!';
$string['errorprocessingresponses'] = 'Адбылася памылка падчас апрацоўкі вашых запытаў ({$a}). Нацьсьніце працягнуць, каб вярнуцца да старонкі, на якой вы былі, і паспрабаць зноў.';
$string['errorsavingcomment'] = 'Памылка захаваньня каментара ў базу дадзеных для пытаньня {$a->name}.';
$string['errorsavingflags'] = 'Памылка захаваньня стану сьцяга.';
$string['errorupdatingattempt'] = 'Памылка абнаўленьня спробы {$a->id} у базе дадзеных.';
$string['eventquestioncategorycreated'] = 'Катэгорыя пытаньняў створана';
$string['eventquestioncategorydeleted'] = 'Катэгорыя пытаньняў выдалена';
$string['eventquestioncategorymoved'] = 'Катэгорыя пытаньняў перасунута';
$string['eventquestioncategoryupdated'] = 'Катэгорыя пытаньняў абноўлена';
$string['eventquestioncategoryviewed'] = 'Катэгорыя пытаньняў прагледжана';
$string['eventquestioncreated'] = 'Пытаньне створана';
$string['eventquestiondeleted'] = 'Пытаньне выдалена';
$string['eventquestionmoved'] = 'Пытаньне перасунута';
$string['eventquestionsexported'] = 'Пытаньне экспартавана';
$string['eventquestionsimported'] = 'Пытаньне імпартавана';
$string['eventquestionupdated'] = 'Пытаньне абноўлена';
$string['eventquestionviewed'] = 'Пытаньне прагледжана';
$string['export'] = 'Экспарт';
$string['exportasxml'] = 'Экспартаваць як Moodle XML';
$string['exportcategory'] = 'Экспартаваць катэгорыю';
$string['exportcategory_help'] = 'Гэтая налада вызначае катэгорыю, зь якой будуць экспартавацца пытаньні.

Пэўныя фарматы імпарту, такія як GIFT ды Moodle XML, дазваляюць уключаць дадзеныя катэгорыі і кантэксту ў файл экспарту, што дазваляе (пры жаданьні) аднаўляць іх падчас імпарту. Калі тое патрабуецца, трэба ўсталяваць адпаведныя сьцяжкі.';
$string['exporterror'] = 'Адбыліся памылкі падчас экспарту!';
$string['exportfilename'] = 'пытаньні';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Спампаваць гэтае пытаньне ў фармаце Moodle XML';
$string['exportquestions'] = 'Экспартаваць пытаньні ў файл';
$string['exportquestions_help'] = 'Гэтая функцыя дазваляе экспартаваць катэгорыю пытаньняў цалкам у файл (і падкатэгорыі). Зьвярніце ўвагу, у залежнасьці ад абранага фармату файла частка дадзеных пытаньня і частка тыпаў пытаньняў могуць быць не экспартаваны.';
$string['exportquestions_link'] = 'пытаньне/экспарт';
$string['feedback'] = 'Водгук';
$string['filecantmovefrom'] = 'Файлы пытаньняў нельга перасунуць, бо вы ня маеце дазволу на выдаленьне файлаў з месца, адкуль вы намагаецеся перасунуць пытаньні.';
$string['filecantmoveto'] = 'Файлы пытаньняў нельга перасунуць ці скапіяваць, бо вы ня маеце дазволу на даданьне файлаў у месца, куды вы намагаецеся перасунуць пытаньні.';
$string['fileformat'] = 'Фармат файлу';
$string['filesareacourse'] = 'вобласьць файлаў курса';
$string['filesareasite'] = 'вобласьць файлаў сайта';
$string['filestomove'] = 'Перасунуць / капіяваць файлы ў {$a}?';
$string['fillincorrect'] = 'Запоўніць слушныя водклічы';
$string['filterbytags'] = 'Фільтраваць па тэгам...';
$string['firsttry'] = 'Першая спроба';
$string['flagged'] = 'Адзначана сьцягам';
$string['flagthisquestion'] = 'Адзначыць сьцягам гэтае пытаньне';
$string['formquestionnotinids'] = 'Форма ўтрымлівае пытаньні, якія не знаходзяцца ў questionids (id пытаньняў)';
$string['fractionsnomax'] = 'Адно пытаньне мусіць мець значэньне 100%, каб была магчымасьць атрымаць поўную адзнаку за гэтае пытаньне.';
$string['generalfeedback'] = 'Агульны водгук';
$string['generalfeedback_help'] = 'Агульны водгук паказваецца студэнтам пасьля выкананьня пытаньня. У адрозьненьні ад адмысловага водгука, які залежыць ад тыпу пытаньня і водкліча, што даў студэнт, агульны водгук паказвае ўсім студэнтам аднолькавы тэкст.

Вы можаце выкарыстоўваць агульны водгук, каб даць студэнтам поўнасьцю прапрацаваны адказ і, магчыма, спасылку з большай інфармацыяй, якую яны могуць выкарыстоўваць, калі яны не разумеюць пытаньні.';
$string['getcategoryfromfile'] = 'Атрымаць катэгорыю з файлу';
$string['getcontextfromfile'] = 'Атрымаць кантэкст з файлу';
$string['hintn'] = 'Падказка {no}';
$string['hintnoptions'] = 'Дадаць {no} падказак';
$string['hinttext'] = 'Тэкст падказкі';
$string['howquestionsbehave'] = 'Паводзіны пытаньняў';
$string['howquestionsbehave_help'] = 'Студэнты могуць узаемадзельнічаць з пытаньнямі тэсту рознымі шляхамі. Напрыклад, вы можаце жадаць, каб студэнты ўвялі адказ на кожнае пытаньне ды адправілі тэст цалкам, да моманту ацэньваньня ці атрыманьня водгука. Тое будзе рэжым \'Адтэрмінаваны водгук\'.

У якасьці альтэрнатывы вы можаце прапанаваць студэнтам адпраўляць кожнае пытаньне па меры выкананьня, каб яны маглі мець неадкладны водгук, а калі яны ня зладзяць адразу, то будуць мець чарговую спробу з меншай колькасьцю балаў. Тое будзе рэжым \'Неадклады з некалькімі спробамі\'.

Гэта, верагодна, два найбольш выкарыстоўваемых шляха паводзін.';
$string['howquestionsbehave_link'] = 'пытаньне/паводзіны';
$string['idnumber'] = 'ID нумар';
$string['idnumber_help'] = 'Калі выкарыстоўваецца, ID нумары мусяць быць унікальнымі для кожнай катэгорыі пытаньняў. Яны забясьпечваюць іншы шлях ідэнтыфікаваньня пытаньняў, які часам карысны, але яго льга пакінуць пустым.';
$string['ignorebroken'] = 'Ігнараваць зламаныя спасылкі';
$string['import'] = 'Імпарт';
$string['importcategory'] = 'Імпартаваць катэгорыі';
$string['importcategory_help'] = 'Гэтая налада вызначае катэгорыю, у якую будуць імпартаваны пытаньні.

Пэўныя фарматы імпарту, такія як GIFT і Moodle XML, могуць уключаць дадзеныя катэгорыі і кантэксту ў файле імпарту. Каб выкарыстоўваць гэтыя дадзеныя, а не абраную катэгорыю, трэба ўсталяваць адпаведныя сьцяжкі. Калі катэгорыі, азначаныя ў файле імпарту не існуюць, яны будуць створаны.';
$string['importerror'] = 'Падчас імпартаваньня адбылася памылка';
$string['importerrorquestion'] = 'Памылка імпартаваньня пытаньня';
$string['importfromcoursefiles'] = '... ці абярыце файл імпарту курса.';
$string['importfromupload'] = 'Абярыце файл, які трэба загрузіць ...';
$string['importingquestions'] = 'Імпартаваньне {$a} пытаньняў з файлу';
$string['importparseerror'] = 'Выялена памылка(і) апрацоўваньня файлу імпарту. Пытаньні не былі імпартаваныя. Для імпартаваньня добрых пытаньняў паспрабуйце імпартаваць зноў з опцыяй \'Не\' у наладзе \'Спыніцца пры памылке\'.';
$string['importquestions'] = 'Імпартаваць пытаньні з файлу';
$string['importquestions_help'] = 'Гэтая функцыя дазваляе імпартаваць пытаньні ў розных фарматах праз тэкставы файл. Памятайце файл мусіць мець кадваньне UTF-8.';
$string['importquestions_link'] = 'пытаньне/імпарт';
$string['importwrongfileencoding'] = 'Файл, які вы абралі, ня мае UTF-8 кадаваньня. {$a} файлаў мусяць мець UTF-8.';
$string['importwrongfiletype'] = 'Тып абранага файлу ({$a->actualtype}) не адпавядае тыпу, чакаемага гэтым фарматам імпарту ({$a->expectedtype}).';
$string['impossiblechar'] = 'Немажлівы знак {$a} выяўлены ў якасьці знаку дужкі';
$string['includesubcategories'] = 'Таксама паказваць пытаньні з падкатэгорыяў';
$string['incorrect'] = 'Хібна';
$string['incorrectfeedback'] = 'Для ўсякага хібнага водклічу';
$string['incorrectfeedbackdefault'] = 'Вашы адказ хібны.';
$string['information'] = 'Інфармацыя';
$string['invalidanswer'] = 'Няпоўны адказ';
$string['invalidarg'] = 'Адсутнічаюць слушныя аргументы ці хібная канфігурацыя сэрвера';
$string['invalidcategoryidforparent'] = 'Хібны id катэгорыі для бацькі!';
$string['invalidcategoryidtomove'] = 'Хібны id катэгорыі для перасоўваньня!';
$string['invalidconfirm'] = 'Радок пацьверджаньня быў хібным';
$string['invalidcontextinhasanyquestions'] = 'Хібны кантэкст перададзены ў question_context_has_any_questions.';
$string['invalidgrade'] = 'Адзнакі ({$a}) не адпавядаюць опцыям адзнак - пытаньне прапушчана.';
$string['invalidpenalty'] = 'Хібны штраф';
$string['invalidwizardpage'] = 'Хібная ці ня вызначаная старонка майстру!';
$string['lastmodifiedby'] = 'Апошнюю зьмену збрабіў';
$string['lasttry'] = 'Апошняя спроба';
$string['linkedfiledoesntexist'] = 'Файл-спасылка {$a} не існуе';
$string['makechildof'] = 'Зрабіць дзіцём \'{$a}\'';
$string['makecopy'] = 'Зрабіць копію';
$string['maketoplevelitem'] = 'Перасунуць на верхні ровень';
$string['manualgradeinvalidformat'] = 'Гэта хібны нумар.';
$string['manualgradeoutofrange'] = 'Гэтая адзнака знаходзіцца за межамі дапусьцімага дыяпазону.';
$string['manuallygraded'] = 'Ацэнена ўручную {$a->mark} з каментаром: {$a->comment}';
$string['mark'] = 'Пазнака';
$string['markedoutof'] = 'Пазначана з';
$string['markedoutofmax'] = 'Пазначана з {$a}';
$string['markoutofmax'] = 'Пазначыць {$a->mark} з {$a->max}';
$string['marks'] = 'Пазнакі';
$string['matchgrades'] = 'Супаставіць адзнакі';
$string['matchgrades_help'] = 'Імпартаваныя адзнакі мусяць адпавядаць фіксаванаму сьпісу слушных адзнак - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (таксама негатыўныя значэньні). Калі не, то існуе два варыянты:

* Памылка, калі адзнака адсутнічае ў сьпісе. Калі пытаньне ўтрымлівае ўсякіе адзнакі не знойдзенныя ў сьпісе, будзе паказана памылка і пытаньні ня будуць імпартаваныя
* Найблізкая адзнака, адсутнічае ў сьпісе. Калі знойдзена адзнака, што не адпавядае значэньню са сьпіса, адзнака будзе зьменена да найблізкага адпавядаючага значэньня ў сьпісе';
$string['matchgradeserror'] = 'Паказваць памылку, калі адзнака не са сьпіса';
$string['matchgradesnearest'] = 'Выкарыстоўваць найблізкія адзнакі са сьпіса';
$string['missingcourseorcmid'] = 'Трэба вызначыць courseid ці cmid для print_question.';
$string['missingcourseorcmidtolink'] = 'Трэба вызначыць courseid ці cmid для get_question_edit_link.';
$string['missingimportantcode'] = 'Для гэтага тыпу пытаньня адсутнічае важны код: {$a}.';
$string['missingoption'] = 'У закрытым пытаньні {$a} адсутнічаюць гэтыя опцыі';
$string['modified'] = 'Апошняе захаваньне';
$string['move'] = 'Перасунуць з {$a} і зьмяніць спасылкі.';
$string['movecategory'] = 'Перасунуць катэгорыю';
$string['movedquestionsandcategories'] = 'Пытаньні і катэгорыі пытаньняў перасунутыя з {$a->oldplace} у {$a->newplace}.';
$string['movelinksonly'] = 'Проста зьмяніце пункт спасыланьня, не перасоўваце ці капіюйце файлы.';
$string['moveq'] = 'Перасунуць пытаньні';
$string['moveqtoanothercontext'] = 'Перасунуць пытаньне ў іншы кантэкст.';
$string['moveto'] = 'Перасунуць у';
$string['movingcategory'] = 'Перасоўваньне катэгорыі';
$string['movingcategoryandfiles'] = 'Вы ўпэўненыя, што жадаеце перасунуць катэгорыю {$a->name} і ўсе даччыныя катэгорыі ў кантэкст для "{$a->contextto}"?<br />Мы выявілі {$a->urlcount} файлаў, зьвязаных з пытаньнямі ў {$a->fromareaname}, жадаеце скапіяваць ці перасунуць іх у {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Вы ўпэўненыя, што жадаеце перасунуць катэгорыю "{$a->name}" і ўсе даччыныя катэгорыі ў кантэкст для "{$a->contextto}"?';
$string['movingquestions'] = 'Перасоўваньне пытаньняў і ўсякіх файлаў';
$string['movingquestionsandfiles'] = 'Вы ўпэўненыя, што жадаеце перасунуць пытаньні {$a->questions} у кантэкст для <strong>"{$a->tocontext}"</strong>?<br />Мы выявілі <strong>{$a->urlcount} файлаў</strong>, зьвязаных з гэтымі пытаньнямі ў {$a->fromareaname}, жадаеце скапіяваць ці перасунуць іх у {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Вы ўпэўненыя, што жадаеце перасунуць пытаньні {$a->questions} у кантэкст для <strong>"{$a->tocontext}"</strong>?<br />Файлы, зьвязаныя з гэтымі пытаньнямі <strong>адсутнічаюць</strong> у {$a->fromareaname}.';
$string['needtochoosecat'] = 'Вы мусіце абраць катэгорыю для перасоўваньня гэтага пытаньня ці націснуць \'скасаваць\'.';
$string['nocate'] = 'Адсутнічае катэгорыя {$a}!';
$string['nopermissionadd'] = 'Вы ня маеце дазволу дадаваць тут пытаньні.';
$string['nopermissionedit'] = 'Вы ня маеце дазволу рэдагаваць тут пытаньні.';
$string['nopermissionmove'] = 'Вы ня маеце дазволу перасоўваць адсюль. Вы мусіце захаваць пытаньне ў гэтай катэгорыі ці захаваць яго як новае пытаньне.';
$string['noprobs'] = 'Праблемы ў вашай базе дадзеных пытаньняў ня выяўлены.';
$string['noquestionbanks'] = 'Плагін банку пытаньняў ня знойдзены.';
$string['noquestions'] = 'Ня знойдзены пытаньні, якія льга экспартаваць. Пераканайцеся, што абралі для экспарту катыгорыю, што ўтрымлівае пытаньні.';
$string['noquestionsinfile'] = 'У файле імпарту адсутнічаюць пытаньні';
$string['noresponse'] = '[Водкліч адсутнічае]';
$string['notagfiltersapplied'] = 'Фільтры тэгаў не выкарастаныя';
$string['notanswered'] = 'Адказ адсутнічае';
$string['notchanged'] = 'Бяз зьменаў з апошняй спробы';
$string['notenoughanswers'] = 'Гэты тып пытаньня патрабуе прынамсі {$a} адказаў';
$string['notenoughdatatoeditaquestion'] = 'Ня быў азначаны ні id пытаньня, ні id катэгорыі і тып пытаньня.';
$string['notenoughdatatomovequestions'] = 'Вам неабходна падаць ідэнтыфікатары пытаньняў, якія вы жадаеце перасунуць.';
$string['notflagged'] = 'Не адзначаны сьцягам';
$string['notgraded'] = 'Без адзнакі';
$string['notshown'] = 'Не паказана';
$string['notyetanswered'] = 'Дагэтуль без адказа';
$string['notyourpreview'] = 'Гэты перадпрагляд не належыць вам';
$string['novirtualquestiontype'] = 'Адсутнічае віртуальны тып для тыпу пытаньня {$a}';
$string['numqas'] = '№ спробы пытаньня';
$string['numquestions'] = '№ пытаньня';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} схавана +{$a->numdraft} чарнавы стан)';
$string['options'] = 'Опцыі';
$string['page-question-category'] = 'Старонка катэгорыі пытаньняў';
$string['page-question-edit'] = 'Старонка рэдагаваньня пытаньня';
$string['page-question-export'] = 'Старонка экспартаваньня пытаньня';
$string['page-question-import'] = 'Старонка імпартаваньня пытаньня';
$string['page-question-x'] = 'Усякая старонка пытаньня';
$string['parent'] = 'Бацька';
$string['parentcategory'] = 'Бацькавая катэгорыя';
$string['parentcategory_help'] = 'Бацькавая катэгорыя - гэта катэгорыя, у якую будзе зьмешчана новая катэгорыя. "Верхняя" азначае, што дадзеная катэгорыя не ўтрымліваецца ўва аніякай іншай катэгорыі. Кантэксты катэгорыяў вылучаны тлустым шрыфтам. У кожным кантэксьце мусіць быць прынамсі адна катэгорыя.';
$string['parentcategory_link'] = 'пытаньне/катэгорыя';
$string['parenthesisinproperclose'] = 'Дужка перад ** не зачынена належным чынам ува {$a}**';
$string['parenthesisinproperstart'] = 'Дужка перад ** не пачата належным чынам ува {$a}**';
$string['parsingquestions'] = 'Апрацоўка пытаньняў з файлу імпарту.';
$string['partiallycorrect'] = 'Часткова слушна';
$string['partiallycorrectfeedback'] = 'Для ўсіх часткова слушных водклічаў';
$string['partiallycorrectfeedbackdefault'] = 'Вашы адказ часткова слушны.';
$string['penaltyfactor'] = 'Штрафны каэфіцыент';
$string['penaltyfactor_help'] = 'Гэтая налада вызначае, якая доля ад набранага балу будзе адымацца за кожны хібны водкліч. Каэфіцыент ужываецца толькі падчас выкарыстаньня тэста ўва адаптыўным рэжыме.

Каэфіцыент мусіць быць між 0 і 1. Штрафны каэфіцыент 1 азначае, што студэнт мусіць атрымаць слушны адказ у яго першым водклічы, каб атрымаць за яго хоць нейкі бал. Штрафны каэфіцыент 0 азначае, што студэнт можа спрабаваць колькі заўгодна разоў ды ўсё адно атрымаць поўную адзнаку.';
$string['penaltyforeachincorrecttry'] = 'Штраф за кожную хібную спробу';
$string['penaltyforeachincorrecttry_help'] = 'Калі пытаньні выкарыстоўваюць паводзіны \'Інтэрактыўны рэжым са мноствам спробаў\' ці \'Адаптыўны рэжым\', то студэнты будуць мець некалькі спробаў, каб атрымаць слушны адказ. Гэтая опцыя вызначае, наколькі моцна ён будзе пакараны за кожную няслушную спробу.

Штраф - гэта доля ад агульнай адзнакі пытаньня, таму, калі пытаньне ацэньваецца трыма адзнакамі, а штраф складае 0.3333333, то студэнт атрымае 3 бала, калі слушна адкажа на пытаньне з першага разу, 2 бала, калі адкажуць з другой спробы, ды 1 бал, калі адкажа з трыцяй спробы.

Для некаторых пытаньняў, што складаюцца з некалькіх частак, гэтая логіка падліку балаў ужываецца асобна да кожнай часткі пытаньня. Дэталі залежаць ад тыпу пытаньня і могуць быць складанымі, але прынцып састаіць у тым, каб як мага справядлівей ацаніць веды, прадэманстраваныя студэнтамі.';
$string['permissionedit'] = 'Рэдагаваць гэтае пытаньне';
$string['permissionmove'] = 'Перасунуць гэтае пытаньне';
$string['permissionsaveasnew'] = 'Захаваць у якасьці новага пытаньня';
$string['permissionto'] = 'Вы маеце дазвол на :';
$string['previewquestion'] = 'Перадпрагляд пытаньня: {$a}';
$string['privacy:metadata:database:question'] = 'Дэталі пра пэўнае пытаньне.';
$string['privacy:metadata:database:question:createdby'] = 'Асоба, што стварыла пытаньне.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Агульны водгук для гэтага пытаньня.';
$string['privacy:metadata:database:question:modifiedby'] = 'Асоба, што апошняй абнавіла пытаньне.';
$string['privacy:metadata:database:question:name'] = 'Назва пытаньня.';
$string['privacy:metadata:database:question:questiontext'] = 'Тэкст пытаньня.';
$string['privacy:metadata:database:question:timecreated'] = 'Дата і час стварэньня гэтага пытаньня.';
$string['privacy:metadata:database:question:timemodified'] = 'Дата і час абнаўленьня гэтага пытаньня.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Крокі спробы пытаньня могуць мець дадатковыя дадзеныя, адмысловыя для гэтага кроку. Гэтыя дадзеныя захоўваюцца ў табліцы step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Назва прадмета дадзеных.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Значэньне прадмета дадзеных.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Каждая спроба пытаньня мае нумар кроку, што адлюстроўвае розныя фазы ад пачатку да канца і адзнакі. У гэтай табліцы захоўваецца інфармацыя па кожнаму з гэтых крокаў.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Узнагароджваньне адзнакай гэтай спробы выкананьня пытаньня маштабуецца да 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Статус гэтай спробы выкананьня пытаньня знаходзіцца напрыканцы крокавага пераходу.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Дата і час пачатку пераходу крока.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Карыстальнік, што ажыцявіў пераход кроку.';
$string['privacy:metadata:database:question_attempts'] = 'Інфа пра спробу пэўнага пытаньня.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Індыкатар, што карыстальнік адзначаў сьцягам гэтае пытаньне ў межах спробы.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Краткае зьмесьціва водклічу на пытаньне.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Час абнаўленьня спробы пытаньня.';
$string['privacy:metadata:database:question_bank_entries'] = 'Дэталі пра пэўны запіс банку пытаньняў.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Асоба, што валодае запісам банку пытаньняў.';
$string['privacy:metadata:link:qbehaviour'] = 'Падсістэма Пытаньні (Question) выкарыстоўвае тып плагінаў Паводзіны Пытаньняў (Question Behaviour).';
$string['privacy:metadata:link:qformat'] = 'Падсістэма Пытаньні (Question) выкарыстоўвае тып плагінаў Фармат Пытаньняў (Question Format) для імпарту і экспарту пытаньняў у розныя фарматы.';
$string['privacy:metadata:link:qtype'] = 'Падсістэма Пытаньні (Question) узаемадзельнічае з тыпам плагінаў Тып Пытаньня (Question Type), які ўтрымлівае размаітыя тыпы пытаньняў.';
$string['published'] = 'супольнае выкарыстаньне';
$string['qbanknotfound'] = 'Плагін \'{$a}\' банку пытаньняў не існуе ці не распазнаны.';
$string['qtypeveryshort'] = 'Т';
$string['questionaffected'] = '<a href="{$a->qurl}">Пытаньне "{$a->name}" ({$a->qtype})</a> існуе ў гэтай катэгорыі пытаньняў, але яно таксама выкарыстоўваецца ў <a href="{$a->qurl}">тэсьце "{$a->quizname}"</a> у іншым курсе "{$a->coursename}".';
$string['questionbank'] = 'Банк пытаньняў';
$string['questionbanknavigation'] = 'Банк пытаньняў трацёвай навігацыі';
$string['questionbehaviouradminsetting'] = 'Налады паводзінаў пытаньняў';
$string['questionbehavioursdisabled'] = 'Паводзіны пытаньняў адключаны';
$string['questionbehavioursdisabledexplained'] = 'Надрукуйце сьпіс падзеленых коскамі паводзінаў, якія вы не жадаеце бачыць у выпадным меню.';
$string['questionbehavioursorder'] = 'Чарга паводзінаў пытаньняў';
$string['questionbehavioursorderexplained'] = 'Надрукуйце сьпіс падзеленых коскамі паводзінаў у той чарзе, у якой жадаеце іх бачыць у выпадным меню.';
$string['questioncategories'] = 'Катэгорыі пытаньняў';
$string['questioncategory'] = 'Катэгорыя пытаньняў';
$string['questioncatsfor'] = 'Катэгорыі пытаньняў для \'{$a}\'';
$string['questiondoesnotexist'] = 'Гэтае пытаньне не існуе';
$string['questionformtagheader'] = '{$a} тэгаў';
$string['questionidmismatch'] = 'Несупадзеньне ідэнтыфікатараў пытаньняў';
$string['questionloaderror'] = 'Не ўдалося загрузіць опцыі пытаньняў.';
$string['questionname'] = 'Назва пытаньняў';
$string['questionnamecopy'] = '{$a} (копія)';
$string['questionno'] = 'Пытаньне {$a}';
$string['questionpreviewdefaults'] = 'Стандартнае перадпрагляду пытаньняў';
$string['questionpreviewdefaults_desc'] = 'Гэтая налада выкарыстоўваецца, калі карыстальнік упершыню прагледжвае пытаньне ў банке пытаньняў. Пасьля перадпрагляду карыстальнікам пытаньня, яго асабістыя пытаньні захоўваюцца як перавагі карыстальніка.';
$string['questions'] = 'Пытаньні';
$string['questionsaveerror'] = 'Адбылася памылка падчас захаваньня пытаньня - ({$a})';
$string['questionsinuse'] = '(* Пытаньні, адзначаныя зорачкай недзе выкарыстоўваюцца, напрыклад, у тэсьце. Таму, калі вы працягнеце, гэтыя пытаньні ня будуць па-сапраўднаму выдалены, яны будуць проста схаваныя.)';
$string['questionsmovedto'] = 'Пытаньні, што дагэтуль выкарыстоўваюцца, будуць перасунуты ў бацькавую катэгорыю курса "{$a}".';
$string['questionsrescuedfrom'] = 'Пытаньні захаваныя з кантэксту {$a}.';
$string['questionsrescuedfrominfo'] = 'Гэтыя пытаньні (частка якіх можа быць схавана) былі захаваныя падчас выдаленьня кантэксту {$a}, бо яны дагэтуль выкарыстоўваюцца ў тэстах ці іншых актыўнасьцях.';
$string['questiontags'] = 'Тэгі пытаньня';
$string['questiontext'] = 'Тэкст пытаньня';
$string['questiontype'] = 'Тып пытаньня';
$string['questionuse'] = 'Выкарыстаць пытаньне ў гэтай актыўнасьці';
$string['questionvariant'] = 'Варыянт пытаньня';
$string['questionx'] = 'Пытаньне {$a}';
$string['requiresgrading'] = 'Патрабуе ацэньваньня';
$string['responsehistory'] = 'Гісторыя водклічаў';
$string['restart'] = 'Пачаць ізноў';
$string['restartwiththeseoptions'] = 'Пачаць ізноў з наступнымі опцыямі';
$string['restoremultipletopcats'] = 'Файл рэзервовай копіі ўтрымлівае больш за адну катэгорыю пытаньняў верхняга ўзроўня для кантэксту {$a}.';
$string['reviewresponse'] = 'Аглядны водкліч';
$string['rightanswer'] = 'Слушны адказ';
$string['rightanswer_help'] = 'Аўтаматычна згенераваны краткі агляд слушнага водклічу. Гэта можа быць абмежавана, бо вы можаце разглядзець магчымасьць тлумачэньня слушнага вырашэньня ў агульным водгуке на пытаньне, ды адключыць гэтую опцыю.';
$string['save'] = 'Захаваць';
$string['savechangesandcontinueediting'] = 'Захаваць зьмены і працягнуць рэдагаваньне';
$string['saved'] = 'Захавана: {$a}';
$string['saveflags'] = 'Захаваць станы сьцягу';
$string['selectacategory'] = 'Абраць катэгорыю:';
$string['selectaqtypefordescription'] = 'Абярыце тып пытаньня, каб убачыць яго апісаньне.';
$string['selectcategoryabove'] = 'Абярыце вышэйшую катэгорыю';
$string['selectquestionsforbulk'] = 'Абярыце пытаньні для масавых дзеяньняў';
$string['settingsformultipletries'] = 'Множныя спробы';
$string['shareincontext'] = 'Супольнае выкарыстаньне ў кантэксьце для {$a}';
$string['showhidden'] = 'Таксама паказваць старыя пытаньні';
$string['showmarkandmax'] = 'Паказваць адзнаку і макс';
$string['showmaxmarkonly'] = 'Паказваць тольк макс адзнаку';
$string['shown'] = 'Паказана';
$string['shownumpartscorrect'] = 'Паказаць колькасьць слушных водклічаў';
$string['shownumpartscorrectwhenfinished'] = 'Паказаць колькасьць слушных водклічаў пасьля завяршэньня пытаньня';
$string['showquestiontext'] = 'Паказваць тэкст пытаньня ў сьпісе пытаньняў';
$string['specificfeedback'] = 'Адмысловы водгук';
$string['specificfeedback_help'] = 'Водгук, які залежыць ад водкліча студэнта.';
$string['started'] = 'Пачата';
$string['state'] = 'Статус';
$string['step'] = 'Крок';
$string['steps'] = 'Крокі';
$string['stoponerror'] = 'Спыніцца пры памылке';
$string['stoponerror_help'] = 'Гэтая налада вызначае, ці варта спыняць імпартаваньне пасьля выяўленьня памылкі, альбо трэба ігнарваць пытаньні з памылкамі ды працягваць імпартваньне.';
$string['submissionoutofsequence'] = 'Доступ не па чарзе. Калі ласка, не націскайце кнопку назад падчас працы з пытаньнямі тэсту.';
$string['submissionoutofsequencefriendlymessage'] = 'Вы ўвялі дадзеныя па-за межамі звычайнай пасьлядоўнасьці. Тое можа адбыцца, калі вы выкарыстоўваеце кнопкі Назад ці Ўперад вашага браўзара. Калі ласка, не ўжывайце іх падчас выкананьня тэсту. Тое таксама можа адбыцца, калі вы націскаеце штосьці падчас загрузкі старонкі. Націсьніце <strong>Працягнуць</strong>, каб аднавіць выкананьне.';
$string['submit'] = 'Адправіць';
$string['submitandfinish'] = 'Адправіць і завяршыць';
$string['submitted'] = 'Адправіць: {$a}';
$string['tagarea_question'] = 'Пытаньні';
$string['technicalinfo'] = 'Тэхнічная інфармацыя';
$string['technicalinfo_help'] = 'Гэта тэхнічная інфармацыя, верагодна, карысная толькі для распрацоўнікаў, працуючых над новымі тыпамі пытаньняў. Але яна можа быць карыснай падчас спробы дыягнаставаньня праблемаў з пытаньнямі.';
$string['technicalinfomaxfraction'] = 'Максімальная доля: {$a}';
$string['technicalinfominfraction'] = 'Мінімальная доля: {$a}';
$string['technicalinfoquestionsummary'] = 'Коратка пра пытаньне: {$a}';
$string['technicalinforesponsesummary'] = 'Коратка пра водкліч: {$a}';
$string['technicalinforightsummary'] = 'Коратка пра слушны адказ: {$a}';
$string['technicalinfostate'] = 'Статус пытаньня: {$a}';
$string['technicalinfovariant'] = 'Варыянт пытаньня: {$a}';
$string['tofilecategory'] = 'Запіс катэгорыі ў файл';
$string['tofilecontext'] = 'Запіс кантэксту ў файл';
$string['topfor'] = 'Верхняя для {$a}';
$string['uninstallbehaviour'] = 'Выдаліць гэтыя паводзіны пытаньня.';
$string['uninstallqtype'] = 'Выдаліць гэты тып пытаньня.';
$string['unknown'] = 'Невядомае';
$string['unknownbehaviour'] = 'Невядомыя паводзіны: {$a}.';
$string['unknownorunhandledtype'] = 'Невядомы ці неапрацоўны тып пытаньня: {$a}';
$string['unknownquestion'] = 'Невядомае пытаньне: {$a}.';
$string['unknownquestioncatregory'] = 'Невядомая катэгорыя пытаньняў: {$a}.';
$string['unknownquestiontype'] = 'Невядомы тып пытаньня: {$a}.';
$string['unknowntolerance'] = 'Невядомы тып талеранцыі {$a}';
$string['unpublished'] = 'без супольнага доступу';
$string['unusedcategorydeleted'] = 'Гэтая катэгорыя была выдалена, бо пасьля выдаленьня курса, яго пытаньні болей не выкарыстоўваліся.';
$string['updatedisplayoptions'] = 'Абнавіць опцыі адлюстраваньня';
$string['upgradeproblemcategoryloop'] = 'Выяўлена праблема падчас абнаўленьня катыгорыяў пытаньняў. Існуе цыкл у дрэве катэгорыяў. Закранутыя ідэнтыфікатары катэгорыяў - {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Не ўдалося абнавіць катэгорыю пытаньняў {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Выяўлена праблема падчас абнаўленьня катыгорыяў пытаньняў. Катэгорыя {$a->id} спасылаецца на бацькавую {$a->parent}, якая не існуе. Бацька зьменены для вырашэньня гэтага пытаньня.';
$string['whethercorrect'] = 'Ці слушна';
$string['whethercorrect_help'] = 'Гэта закранае як тэкставыя апісаньні \'Слушна\', \'Часткова слушна\' ці \'Хібна\', гэтак і ўсякія каляровыя вылучэньні, што перадаюць тую ж інфармацыю.';
$string['whichtries'] = 'Які спрабаваў';
$string['withselected'] = 'З абраным';
$string['wrongprefix'] = 'Хібна адфарматаваны прэфіксназвы (nameprefix) {$a}';
$string['xoutofmax'] = '{$a->mark} з {$a->max}';
$string['yougotnright'] = 'Вы слушна абралі {$a->num}.';
$string['youmustselectaqtype'] = 'Вы мусіце абраць тып пытаньня.';
$string['yourfileshoulddownload'] = 'Вашы файл экспарту хутка мусіць пачаць спампоўвацца. Калі спампоўка не пачалася, калі ласка, <a href="{$a}">націсьніце тут</a>.';
