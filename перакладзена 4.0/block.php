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
 * Strings for component 'block', language 'en', version '4.0'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Усякая старонка, што адпавядае вышэйазначанаму';
$string['appearsinsubcontexts'] = 'Адлюстроўваецца ў падкантэкстах';
$string['assignrolesinblock'] = 'Прызначыць ролі ў блоке {$a}';
$string['blocksdrawertoggle'] = 'Паказаць/схаваць макет блока';
$string['blocksettings'] = 'Налады блока';
$string['bracketfirst'] = '{$a} (першы)';
$string['bracketlast'] = '{$a} (апошні)';
$string['configureblock'] = 'Наладзіць блок {$a}';
$string['contexts'] = 'Кантэксты старонак';
$string['contexts_help'] = 'Кантэксты - гэта больш пэўныя тыпы старонак, на якіх гэты блок можа адлюстроўвацца ў межах пачатковага месцавання блока. Тут вы будзеце мець розныя варыянты ў залежнасці ад пачатковага і вашага цяперашняга месцавання блока. Напрыклад, вы можаце абмежаваць адлюстраванне блока толькі на старонках форума ў курсе, дадаўшы блок у курс (каб ён адлюстроўваўся ва ўсіх падстаронках), а потым зайсці на форум і адрэдагаваць налады блока, каб абмежаваць яго адлюстраванне толькі старонкамі форума.';
$string['createdat'] = 'Пачатковае месцаванне блока';
$string['createdat_help'] = 'Пачатковае месцаванне, дзе блок быў створаны. Налады блока могуць стаць нагодай яго адлюстравання ў іншых месцах (кантэкстах) у межах пачатковага месцавання. Напрыклад, блок, створаны на старонцы курса, можа адлюстроўвацца ў актыўнасцях у межах гэтага курса. Блок, створаны на галоўнай старонцы сайта, можа адлюстроўвацца на ўсім сайце.';
$string['defaultregion'] = 'Вобласць па змаўчанні';
$string['defaultregion_help'] = 'Тэмы могуць вызначаць адну ці некалькі найменных абласцей, у якіх могуць адлюстроўваюцца блокі. Гэтая налада вызначае, у якой вобласці вы жадаеце размясціць гэты блок па змаўчанні. Пры патрэбе вобласць можа быць перавызначана на пэўных старонках.';
$string['defaultweight'] = 'Вага па змоўчанні';
$string['defaultweight_help'] = 'Вага па змаўчанні дазваляе вам прыкладна вызначыць пажаданае месца адлюстравання ў абранай вобласці, зверху ці знізу. Канчатковае палажэнне вылічаецца з усіх блокаў у гэтай вобласці (тлумачэнне, толькі адзін блок можа быць на самым версе). Пры патрэбе гэтае значэнне можа быць перавызначана на пэўных старонках.';
$string['deleteblock'] = 'Выдаліць блок {$a}';
$string['deleteblockcheck'] = 'Вы ўпэўнены, што жадаеце выдаліць блок {$a}?';
$string['deleteblockinprogress'] = 'Выдаленне блока {$a} ў прагрэсе...';
$string['deleteblockwarning'] = '<p>Вы збіраецеся выдаліць блок, які адлюстроўваецца ў іншым месце.</p><p>Месцаванне пачатковага блока: {$a->location}<br />Адлюстроўваецца на тыпах старонак: {$a->pagetype}</p><p>Вы ўпыўнены, што жадаеце працягнуць?</p>';
$string['deletecheck'] = 'Выдаліць блок {$a}?';
$string['deletecheck_modal'] = 'Выдаліць блок?';
$string['hideblock'] = 'Схаваць блок {$a}';
$string['hidepanel'] = 'Схаваць блок';
$string['moveblock'] = 'Перасунуць блок {$a}';
$string['moveblockafter'] = 'Змясціць блок пасля блока {$a}';
$string['moveblockbefore'] = 'Змясціць блок перад блокам {$a}';
$string['moveblockinregion'] = 'Перасунуць блок у вобласць {$a}';
$string['movingthisblockcancel'] = 'Перасоўваньне гэтага блока ({$a})';
$string['myblocks'] = 'Мае блокі';
$string['onthispage'] = 'На гэтай старонцы';
$string['pagetypes'] = 'Тыпы старонак';
$string['pagetypewarning'] = 'Азначаны раней тып старонкі болей не можа быць абраны. Калі ласка, абярыце найбольш прыдатны тып старонкі ніжэй.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Запісвае, калі карыстальнік замацаваў блок';
$string['privacy:metadata:userpref:hiddenblock'] = 'Запісвае, калі карыстальнік згарнуў/схаваў блок';
$string['privacy:request:blockisdocked'] = 'Паказвае, ці быў блок замацаваны';
$string['privacy:request:blockishidden'] = 'Паказвае, ці быў блок згарнуты/схаваны';
$string['region'] = 'Вобласць';
$string['restrictpagetypes'] = 'Адлюстроўваць на тыпах старонак';
$string['showblock'] = 'Паказаць блок {$a}';
$string['showoncontextandsubs'] = 'Адлюстроўваць на \'{$a}\' і ўсіх даччыных старонках';
$string['showoncontextonly'] = 'Адлюстроўваць толькі на \'{$a}\'';
$string['showonentiresite'] = 'Адлюстроўваць на ўсім сайце';
$string['showonfrontpageandsubs'] = 'Адлюстроўваць у доме сайта і ўсіх даччыных старонках (прынамсі усе курсы).';
$string['showonfrontpageonly'] = 'Адлюстроўваць толькі у доме сайта';
$string['subpages'] = 'Абраць старонкі';
$string['thisspecificpage'] = 'Гэтая пэўная старонка';
$string['visible'] = 'Бачны';
$string['weight'] = 'Вага';
$string['wherethisblockappears'] = 'Дзе адлюстроўваць гэты блок';
