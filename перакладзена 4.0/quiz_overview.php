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
 * Strings for component 'quiz_overview', language 'en', version '4.0'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Паказаць усе спробы';
$string['allattemptscontributetograde'] = 'Усе спробы выкананьня ўлічваюцца ў выніковай адзнаке карыстальніка.';
$string['allstudents'] = 'Паказаць усё {$a}';
$string['attemptsonly'] = 'Паказаць {$a} толькі са спробамі';
$string['attemptsprepage'] = 'Спробаў на старонцы';
$string['deleteselected'] = 'Выдаліць абраныя спробы';
$string['done'] = 'Гатова';
$string['err_failedtodeleteregrades'] = 'Не ўдалося выдаліць разьлічаныя адзнакі спробаў';
$string['err_failedtorecalculateattemptgrades'] = 'Не ўдалося пераразьлічыць адзнакі спробаў';
$string['highlightinggraded'] = 'Спроба карыстальніка, якая ўлічваецца ў выніковай адзнаке, вылучана.';
$string['needed'] = 'Патрэбна';
$string['noattemptsonly'] = 'Паказаць / спампаваць {$a} толькі са спробамі';
$string['noattemptstoregrade'] = 'Няма спробаў, якія трэба ацаніць';
$string['nogradepermission'] = 'Вы ня маеце дазволу на ацэньваньне гэтага тэсту.';
$string['onlyoneattemptallowed'] = 'У гэтым тэсьце карыстальнікам дазволена толькі адна спроба.';
$string['optallattempts'] = 'усе спробы';
$string['optallstudents'] = 'усе {$a} спрабаваўшых і не спрабаваўшых выканаць тэст';
$string['optattemptsonly'] = '{$a} паспрабаваўшых выканаць тэст';
$string['optnoattemptsonly'] = '{$a} не спрабаваўшых выканаць тэст';
$string['optonlyregradedattempts'] = 'што былі пераацэнены / вылучаны як маючыя патрэбу ў пераацэнцы';
$string['overview'] = 'Адзнакі';
$string['overviewdownload'] = 'Спампаваць агляд';
$string['overviewfilename'] = 'адзнакі';
$string['overviewreport'] = 'Справаздача па адзнакам';
$string['overviewreportgraph'] = 'Агульная колькасьць студэнтаў, што атрымалі адзнакі';
$string['overviewreportgraphgroup'] = 'Колькасьць студэнта ў групе \'{$a}\', што атрымала адзнакі';
$string['pagesize'] = 'Памер старонкі';
$string['pluginname'] = 'Адзнакі';
$string['preferencespage'] = 'Перавагі толькі дзеля гэтай старонкі';
$string['preferencessave'] = 'Паказаць справаздачу';
$string['preferencesuser'] = 'Вашыя перавагі для гэтай справаздачы';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Патрэба паказваньня адзнак дзеля кожнага слота пытаньня.';
$string['privacy:preference:slotmarks:no'] = 'Адзнакі не паказваюцца каля слота пытаньня.';
$string['privacy:preference:slotmarks:yes'] = 'Адзнакі паказваюцца каля слота пытаньня.';
$string['regrade'] = 'Пераацаніць';
$string['regradeall'] = 'Пераацаніць усё';
$string['regradealldry'] = 'Пераацаніць усё ў халастую';
$string['regradealldrydo'] = 'Пераацаніць спробы вылучаныя як патрабуючыя пераацэнкі ({$a})';
$string['regradealldrydogroup'] = 'Пераацаніць спробы ({$a->countregradeneeded}) вылучаныя як патрабуючыя пераацэнкі ў групе \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Пераацаніць усё ў халастую для групы \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Поўная пераацэнка для групы \'{$a->groupname}\'';
$string['regradecomplete'] = 'Пераацэньваньне завершана';
$string['regradedsuccessfullyxofy'] = 'Скончанае пераацэньваньне ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Пераацэньваньне';
$string['regradeselected'] = 'Пераацаніць абраныя спробы';
$string['regradingattemptissue'] = 'Слот {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Спроба, што пераацэньваецца ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Наступныя пытаньні ня могуць быць пераацэнены ў спробе {$a->attemptnum} карыстальнікам {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Спроба, што пераацэньваецца ({$a->done}/{$a->count}) - Спроба {$a->attemptnum} карыстальніка {$a->name} (id {$a->attemptid})';
$string['show'] = 'Паказаць / спампаваць';
$string['showattempts'] = 'Паказаць / спампаваць толькі спробы';
$string['showdetailedmarks'] = 'Адзнакі за кожнае пытаньне';
$string['showinggraded'] = 'Паказвае толькі спробы ацэненыя для кожнага карыстальніка.';
$string['showinggradedandungraded'] = 'Паказвае ацэненыя і неацэненыя спробы дзеля кожнага карыстальніка. Адна спроба на кожнага карыстальніка, што ацэнена і вылучана. Метад ацэньваньня дзеля гэтага тэста - {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' у групе \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' у гэтай групе';
