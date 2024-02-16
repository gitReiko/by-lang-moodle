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
 * Strings for component 'qbehaviour_deferredcbm', language 'en', version '4.0'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Дакладнасьць';
$string['accuracyandbonus'] = 'Дакладнасьць + Бонус';
$string['assumingcertainty'] = 'Вы не абралі ўпэўненасьць. Сумаваньне: {$a}.';
$string['averagecbmmark'] = 'Сярэдняя CBM-адзнака';
$string['basemark'] = 'Базавая адзнака {$a}';
$string['breakdownbycertainty'] = 'Разьбіўка па ўпэўненасьці';
$string['cbmbonus'] = 'CBM-бонус';
$string['cbmgradeexplanation'] = 'Для CBM, вышэйшая адзнака ўказана ў дачыненьні да максімальнай для ўсіх слушнай адзнакі C=1.';
$string['cbmgrades'] = 'CBM-адзнакі';
$string['cbmgrades_help'] = 'Падчас выкарыстаньня Ацэньваньня на Грунце Ўпэўненасьці (Certainty Based Marking, CBM) слушнае выкананьне кожнага пытаньня з C=1 (нізкая ўпэўненасьць) дае адзнаку 100%. Адзнакі могуць дасягаць 300%, калі кожнае пытаньне будзе слушным з C=3 (высокая ўпэўненасьць). Памылкі (упэўнена хібныя адказы) зьніжаюць адзнаку значна болей за хібныя водклічы, прызнаныя няўпэўненымі. Гэта можа нават прывесьці да адмоўных агульных адзнак.

**Дакладнасьць** - гэта % слушных адказаў без уліка ўпэўненасьці, але з улікам максімальнай адзнакі за кожнае пытаньне. Пасьпяховае падзяленьне больш-меней надзейных водклічаў дае больш высокую адзнаку за абраньне аднолькавай ўпэўненасьці для кожнага пытаньня. Гэтае адлюстроўваецца ў **CBM-Бонусе**. **Дакладнасьць** + **CBM-Бонус** - гэта больш дакладнае ацэньваньне ведаў за **Дакладнасьць**. Памылкі могуць прывесьці да адмоўнага бонуса - папярэджваньне пра неабходнасьць уважлівага вывучэньня вядомага і не вядомага.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM-адзнака {$a}';
$string['certainty'] = 'Упэўненасьць';
$string['certainty-1'] = 'Невядома';
$string['certainty1'] = 'C=1 (Неўпэўнена: <67%)';
$string['certainty2'] = 'C=2 (Сярэдзіна: >67%)';
$string['certainty3'] = 'C=3 (Досыць ўпэўнена: >80%)';
$string['certainty_help'] = 'Ацэньваньне на грунце ўпэўненасьці патрабуе ад вас вызначэньня ступені надзейнасьці вашага адказу, на вашы погляд. Даступны наступныя роўні:

Ровень упэўненасьці | C=1 (Неўпэўнена) | C=2 (Сярэдзіна) | C=3 (Досыць ўпэўнена)
------------------- | ---------------- | --------------- | ----------------------
Адзнака слушная     |   1              |    2            |      3
Адзнака хібная      |   0              |   -2            |     -6
Верагодна слушная   |  <67%            | 67-80%          |    >80%

Лепшыя адзнакі льга атрымаць, вызнаўшы няўпэўненасьць. Напрыклад, калі вы лічыце, што верагоднасьць памылкі болей за 1 да 3, увядзіце C=1, каб пазьбегнуць рызыкі атрыманьня адмоўнай адзнакі.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Невядома';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Невядома';
$string['foransweredquestions'] = 'Вынікі за {$a} адказаў на пытаньні';
$string['forentirequiz'] = 'Вынікі для ўсёга тэсту ({$a} пытаньняў)';
$string['howcertainareyou'] = 'Упэўненасьць{$a->help}: {$a->choices}';
$string['judgementok'] = 'Добра';
$string['judgementsummary'] = 'Водклічы: {$a->responses}. Дакладнасьць: {$a->fraction}. (Аптымальны дыяпазон ад {$a->idealrangelow} да {$a->idealrangehigh}). Вы маеце {$a->judgement}, карыстаючыся гэтым роўнем упэўненасьці.';
$string['noquestions'] = 'Няма водклічаў';
$string['overconfident'] = 'залішняя самаўпэўненасьць';
$string['pluginname'] = 'Адкладзены водгук з CBM';
$string['privacy:metadata'] = 'Плагін паводзінаў пытаньняў Адкладзены водгук з CBM не захоўвае аніякіх асабістых дадзеных.';
$string['slightlyoverconfident'] = 'маленькая самаўпэўненасьць';
$string['slightlyunderconfident'] = 'маленькая няўпэўненасьць';
$string['underconfident'] = 'няўпэўненасьць';
$string['weightx'] = 'Вага {$a}';
