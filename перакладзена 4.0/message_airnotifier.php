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
 * Strings for component 'message_airnotifier', language 'en', version '4.0'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Кіраваць прыладамі';
$string['airnotifieraccesskey'] = 'Ключ доступу airnotifier';
$string['airnotifierappname'] = 'Назва дадатку airnotifier';
$string['airnotifierfielderror'] = 'Калі ласка, прыбярыце ўсе пустые і лішнія знакі з наступнага поля: {$a}';
$string['airnotifiermobileappname'] = 'Назва мабільнага дадатку';
$string['airnotifierport'] = 'Порт airnotifier';
$string['airnotifierurl'] = 'Спасылка airnotifier';
$string['checkconfiguration'] = 'Праверыць і пратэставаць канфігураваньне push-абвестак';
$string['configairnotifieraccesskey'] = 'Ключ доступу дзеля далучэньня да сэрвера Airnotifier. Вы можаце атрымаць ключ доступу, націснуўшы на ніжэйшую спасылку "Запытаць ключ доступу" (толькі для зарэгістраваных сайтаў) ці стварыўшы акаўнт на <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'Ідэнтыфікатар назвы дадатку ў Airnotifier.';
$string['configairnotifiermobileappname'] = 'Уникальны ідэнтыфікатар мабільнага дадатку (звычайна штосьці кшалту com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Порт, які выкарыстоўваецца падчас далучэньня да сэрвера airnotifier.';
$string['configairnotifierurl'] = 'Спасылка на сэрвер для далучэньня адпраўкі push-абвестак.';
$string['configured'] = 'Наладжана';
$string['deletecheckdevicename'] = 'Выдаліць вашую прыладу: {$a->name}';
$string['deletedevice'] = 'Выдаліць прыладу. Зьвярніце ўвагу, дадатак можа зарэгістраваць прыладу наноў. Калі прылада працягвае з\'яўляцца наноў, адключыце яе.';
$string['devicetoken'] = 'Токен прылады';
$string['enableprocessor'] = 'Уключыць мабільныя абвесткі';
$string['errorretrievingkey'] = 'Падчас атрыманьня ключа доступу адбылася памылка. Вашы сайт мусіць быць зарэгістраваны, каб выкарыстоўваць гэты сэрвіс. Калі вашы сайт ужо зарэгістраваны, калі ласка, паспрабуйце абнавіць вашую рэгістрацыю. Альтэрнатыўна, вы можаце атрымаць ключ доступу стварэньнем акаўнта на <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'Ключ доступу пасьпяхова атрыманы. Каб атрымаць доступ да статыстыкі выкарыстаньня дадатку Moodle, калі ласка, стварыце акаўнт на <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'У перавагах абвестак па-стандарту не ўключаны мабільныя абвесткі.';
$string['messageproviderslow'] = 'У перавагах абвестак па-стандарту ўключана трохі мабільных абвестак.';
$string['moodleappsportallimitswarning'] = 'Зьвярніце ўвагу, колькасьць карыстальніцкіх прылад, якім дазволена атрымліваць паведамленьні, залежыць ад падпіскі на дадатак Moodle. Для дэталяў наведайце <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['nodevices'] = 'Няма зарэгістраваных прыладаў. Прылады з\'явяцца аўтаматычна пасьля ўсталёўкі дадатку Moodle і даданьня гэтага сайту.';
$string['noemailevernotset'] = '$CFG->noemailever адключаны';
$string['noemaileverset'] = '$CFG->noemailever уключаны ў config.php. Вы мусіце ўсталяваць гэтую наладу ў false ці выдаліць яе.';
$string['nopermissiontomanagedevices'] = 'Вы ня маеце дазволу на кіраваньне прыладамі.';
$string['notconfigured'] = 'Сэрвер Airnotifier не наладжаны, таму адпраўка push-абвестак немагчыма.';
$string['notificationsserverconfiguration'] = 'Наладка сэрвера абвестак (Airnotifier)';
$string['pluginname'] = 'Мабільны';
$string['privacy:appiddescription'] = 'Гэта ідэнтыфікатар, выкарыстанага дадатку.';
$string['privacy:enableddescription'] = 'Уключанасьць гэтай прылады для airnotifier.';
$string['privacy:metadata:date'] = 'Час адпраўленьня гэтага паведамленьня.';
$string['privacy:metadata:enabled'] = 'Уключанасьць прылады airnotifier.';
$string['privacy:metadata:externalpurpose'] = 'Гэтая інфармацыя дасылаецца на вонкавы сайт, які ў выніку дастаўляе яе на мабільную прыладу карыстальніка.';
$string['privacy:metadata:fullmessage'] = 'Поўнае паведамленьне.';
$string['privacy:metadata:notification'] = 'Ці з\'яўляецца паведамленьне абвесткай.';
$string['privacy:metadata:smallmessage'] = 'Падзел паведамленьня.';
$string['privacy:metadata:subject'] = 'Тэма паведамленьня.';
$string['privacy:metadata:tableexplanation'] = 'Тут захоўваецца інфармацыі прылады airnotifier.';
$string['privacy:metadata:userdeviceid'] = 'ID спасыланьня на мабільную прыладу карыстальніка';
$string['privacy:metadata:userfromfullname'] = 'Поўнае імя карыстальніка, што адправіў паведамленьне.';
$string['privacy:metadata:userfromid'] = 'ID аўтара паведамленьня.';
$string['privacy:metadata:userid'] = 'ID карыстальніка, што адправіў паведамленьне.';
$string['privacy:metadata:username'] = 'Логін карыстальніка.';
$string['privacy:metadata:usersubsystem'] = 'Плагін далучаны да падсістэмы карыстальніка.';
$string['privacy:subcontext'] = 'Airnotifier паведамленьняў';
$string['requestaccesskey'] = 'Запытаць ключ доступу';
$string['sendtest'] = 'Адправіць тэставую push-абвестку на мае прылады';
$string['sendtestconfirmation'] = 'Тэставая push-абвестка будзе адпраўлена на прылады, якія вы выкарыстаўваеце для далучэньня да гэтага сайту. Калі ласка, пераканайцеся, што вашыя прылады далучаны да Інтэрнэт і мабільны дадатак закрыты (бо push-абвесткі адлюстроўваюцца толькі, калі атрымваюцца ў фоне).';
$string['serverconnectivityerror'] = 'Гэты сайт ня здольны далучацца да сэрвера абвестак {$a}';
$string['showhide'] = 'Уключыць/адключыць прыладу.';
$string['sitemustberegistered'] = 'Дзеля выкарыстаньня публічнага экзэмпляра Airnotifier, вашы сайт мусіць быць зарэгістраваны. Альтэрнатыўна, вы можаце атрымаць ключ доступу стварэньнем акаўнта на <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['unknowndevice'] = 'Невядомая прылада';
$string['userdevices'] = 'Прылады карыстальніка';
